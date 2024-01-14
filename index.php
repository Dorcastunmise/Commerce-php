<?php 
    # connnection 
    include 'config/db_connect.php';
    # Query
    $sql = 'SELECT type, ingredients, ID FROM pizzas ORDER BY created_date';

    # making a query to the db to get result
    $result = mysqli_query($conn, $sql);

    #To fetch result's rows/records as an array format
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    # To free the result acquired from memory
    mysqli_free_result($result);

    # Close connection
    mysqli_close($conn);

    /*  ',' is used to split the ingredients
    0 is used b'cos one of the ingredients is needed at a time */
    // explode(',', $pizzas[0]['ingredients']);
?>

<!DOCTYPE html>
<html lang="en">

    <?php include "Templates/Header.php";?>

    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
        <div class="row">

            <?php foreach($pizzas as $pizza) : ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <!-- php echo htmlspecialchars($pizza['type']) { ?></h6> curly braces is replaced with colon for clear syntax--> 
                            <h6><?php echo htmlspecialchars($pizza['type']); ?></h6>
                                <ul>
                                    <!--Taking a string to explode into an array then cycling through the array-->
                                    <?php foreach(explode(',', $pizza['ingredients']) as $ingredient) : ?>
                                        <li><?php echo htmlspecialchars($ingredient); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                        </div>
                        <div class="class-action right-align">
                            <a href="#" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if (count($pizzas) >= 3): ?> 
                <p>Selected 3 or more pizzas</p>
                <?php else: ?>
                <p>Selected less than 3 pizzas</p>            
            <?php endif; ?>
        </div>
    </div>

    <?php include "Templates/Footer.php";?>

</html>