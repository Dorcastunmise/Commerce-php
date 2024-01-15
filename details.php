<?php

    # Connection first
    include 'config/db_connect.php';

    # To ensure delete button is set
    if(isset($_POST['delete'])) {
        # Passing 'id_to_delete' so incase id is tampered with by the user
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        # To delete, creating a sql
        $sql = "DELETE FROM pizzas WHERE ID = $id_to_delete";

        if(mysqli_query($conn, $sql)) {
            header('location: index.php');
        }else {
            echo "Query error: " . mysqli_error($conn);
        }
    }
    # check GET request ID parameter
    if(isset($_GET['ID'])) {
        $id = mysqli_real_escape_string($conn, $_GET['ID']);

        # make sql to make a query
        $sql = "SELECT * FROM pizzas WHERE ID = $id";

        # Result
        $result = mysqli_query($conn, $sql);

        # To fetch one result amongst others in array format
        $pizza = mysqli_fetch_assoc($result);

        # To free the result from memory
        mysqli_free_result($result);

        # Closing connection
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">

    <?php include "Templates/Header.php";?>

    <div class="container center">
        <?php if($pizza): ?>
            <h4><?php echo htmlspecialchars($pizza['type']); ?></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?> </p>
            <p><?php echo date($pizza['created_date']); ?></p>
            <h5>Ingredients:</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

            <!--Delete Form-->
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['ID'] ?>">
                <input type="submit" value="Delete" name="delete" class="btn brand z-depth-0">
            </form>
            <?php else: ?>
                <h5 class="red-text grade">No such pizza exists!</h5>
        <?php endif; ?>
    </div>
    <?php include "Templates/Footer.php";?>

</html>