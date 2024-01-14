<?php 
    # connection 
    include 'config/db_connect.php';

    $email = $type = $ingredients = '';
    $errors = ['email' => '', 'type' => '', 'ingredients' => ''];

    if(isset($_POST["submit"])) {
        if(empty($_POST['email'])) {
            $errors['email'] = 'An email is required <br>';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Invalid email address. Please input a valid email address <br>";
            }
        }

        if(empty($_POST['type'])) {
            $errors['type'] = "The pizza's type is required <br>";
        }else{
            $type = $_POST['type'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $type)) {
                $errors['type'] =  'Title must be letters and spaces only <br>';
            }
        }

        if(empty($_POST['ingredients'])) {
            $errors['ingredients'] =  'ingredients craved for should be listed <br>';
        }else{
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] =  'must be comma separated list <br>';
            }
        }
        if(array_filter($errors)) {
            echo 'errors in form';
        }
        else {
            # to escape & protect against malicious & harmful code into db (can be done instead through PDO approach) 
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $type = mysqli_real_escape_string($conn, $_POST['type']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            # creating sql to add data into db
            $sql = "INSERT INTO pizzas(type, email, ingredients) VALUES('$type', '$email','$ingredients' )";

            #save to db
            if(mysqli_query($conn, $sql)){
                # success
                # to redirect user... 
            header('Location: index.php');
            } else {
                # error
                echo 'query error: ' . mysqli_error(($conn));
            }


        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <?php include "Templates/Header.php";?>
    <section class="container grey-text ">
        <h4 class="center">Add a Pizza</h4>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" class="white" method="POST">
            <label> Email:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>">
            <label class="red-text grade"><?php echo $errors['email']?></label>
            
            <label> Pizza Type:</label>
            <input type="text" name="type" value="<?php echo htmlspecialchars($type)?>">
            <label class="red-text grade"><?php echo $errors['type']?></label>
            
            <label> Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients)?>">
            <label class="red-text grade"><?php echo $errors['ingredients']?></label>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>

    </section>
    <?php include "Templates/Footer.php";?>

</html>