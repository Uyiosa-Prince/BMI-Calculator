<?php include "includes/function.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BMI Calculator</title>

        <!-- BootStrap link-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- css-->
        <link rel="stylesheet" href="includes/style.css" />

        <!--Js-->
        <!-- <script src="includes/script.js"></script> -->
    </head>
    <body>

        <?php
            $weightInput ="";
            $heightInput = "";
            $weightError = "";
            $heightError = "";
            $selectInput = 0;

            if(isset($_POST['submit'])) {
                if(empty($_POST['weight'])){
                    $weightError = "*Weight is required!";
                }else{
                    $weightInput = $_POST['weight'];
                }

                if(empty($_POST['height'])){
                    $heightError = "*Height is required!";
                }else{
                    $heightInput = $_POST['height'];
                }

                $selectInput = $_POST['unit'];
            }
        ?>

        <!--BMI form -->
        <div class="row justify-content-center">
            <form action="#" method="POST" class="form-group">
                <input type ="number" name="weight" placeholder="Enter weight" id="weight" class="form-control" size=20 value= <?php echo $weightInput;?> />
                <select style="color: blue; font-weight:bold;" class="unit" name="unit" >
                    <option value='0' <?php if($selectInput == 0){echo "Kg selected";} ?>>Kg</option>
                    <option value='1' <?php if($selectInput == 1){echo "Lb selected";} ?>>Lb</option>
                </select>
                <label class="weightError" style="font-weight:bold; color: #c00;"><?php echo $weightError; ?></label>
                <br/><br/>
                <input type="number" name="height" placeholder="Enter height" id="height" class="form-control" size=20 value=<?php echo $heightInput;?>/>
                <label style="font-weight:bold; color: blue;">cm</label>
                <label class="heightError" style="font-weight:bold; color: #c00;"><?php echo $heightError; ?></label>
                <br/><br/>
                <button name="submit" class="btn btn-primary">calculate BMI</button>
            </form>
            <br/><br/>

            <!----------------Display Result-------------------------------------------------->
            <?php
                if(isset($_POST['submit']) && !empty($_POST['weight'] && !empty($_POST['height']))){
                    echo "<font class='result' style='color:#c00; font-weight:bold;'>";
                    echo "Your BMI = ".CalculateBMI($weightInput, $heightInput, $selectInput);
                    echo "</font>";
                }
            ?>
             
        </div>


         <!--Js-->
         <script src="includes/script.js"></script>
    </body>
    <footer>

    </footer>
</html>