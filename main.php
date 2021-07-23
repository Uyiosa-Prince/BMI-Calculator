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
					
						if (isset($_POST['Submit'])) {
							if (empty($_POST['weight'])){
								$weightError= "Weight is required!";
							}
							else {
								$weightInput = $_POST['weight'];
							}
							
							if (empty($_POST['height'])){
								$heightError = "Height is required!";
							}
							else {
								$heightInput = $_POST['height'];
							}
							$selectInput = $_POST['unit'];
						}
						
					?>
					<div class="row justify-content-center">
					<form  action="#" method="POST" class="form-group"> 
						weight: <input type="number" placeholder="Enter Weight" name="weight" size=20 value= <?php echo $weightInput;?> class="form-control"/>
						<select name="unit" id="unit" class="unit" style="color:#0000ff; font-weight:bold; font-size:10pt">
						<option value='0' <?php if ($selectInput == 0) { echo "Kg selected";}?> >Kg</option>
						<option value='1' <?php if ($selectInput == 1) { echo "Lbs selected";}?>>Lbs</option>						
						</select>
						<strong><font color=#CC0000>* <?php echo $weightError; ?></font></strong><br/><br/>
						Height: <input type="number" placeholder="Enter height in centimeters" name="height" size=20 value=<?php echo $heightInput;?> class="form-control" />
							<strong><font style="font-weight:bold; color:#0000ff">Cm</font></strong>
							<strong><font color=#CC0000>* <?php echo $heightError; ?></font></strong><br/><br/>
							
					<input type="submit" value="Calculate BMI" name="Submit" class="btn btn-primary"/>
					<!-- <input type="submit" value="Calculate BMI" name="Submit" style=" font-weight: bold; size: 15; color:#fff; Background-color:#CC0000 "/> -->
					<br/><br/>						
					</form>
					
					<?php 
					//------------RESULT---------------
					
					if (isset($_POST['Submit']) && !empty($_POST['weight']) && !empty($_POST['height'])) {
						echo "<strong><font color=#CC0000>";
						echo "Your BMI = ".CalculateBMI($weightInput, $heightInput, $selectInput);
						echo  "</font>";
						echo "</strong>";
					}
					
					?>
				</div>
			  <!--Js-->
			  <script src="includes/script.js"></script>
    </body>
    <footer>

    </footer>
</html>