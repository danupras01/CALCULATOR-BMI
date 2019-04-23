<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<!-- <form class="contact3-form validate-form"> -->
					<form action=index.php method=post>
					<span class="contact3-form-title">
						Body Mass Index
					</span>

					<!-- <div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" checked="checked">
							<label class="label-radio3" for="radio1">
								Say Hi
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choice" value="get-quote">
							<label class="label-radio3" for="radio2">
								Get a Quote
							</label>
						</div>
					</div> -->
					<label>Masukkan : </label></br> 
					<!-- <div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="name" placeholder="Masukkan :">
						<span class="focus-input3"></span>
					</div> -->
					<label>Berat Anda (Kg)</label>
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<!-- <input class="input3" type="text" name="email" placeholder="Berat Anda (Kg)"> -->
						<input type="text" class="input3" name="berat" placeholder="Berat Anda (Kg)"value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
						<!-- <input type="text" name="berat" placeholder="Berat Anda (Kg)" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required> -->
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="service">
								<option>Needed Services</option>
								<option>eCommerce Bussiness</option>
								<option>UI/UX Design</option>
								<option>Online Services</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="budget">
								<option>Budget</option>
								<option>1500 $</option>
								<option>2000 $</option>
								<option>3000 $</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>
					<label>Tinggi Anda (m)</label>
					<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<!-- <textarea class="input3" name="message" placeholder="Tinggi Anda (Cm)"></textarea> -->
						<input type="text" class="input3" name="tinggi" size=10 placeholder="Tinggi Anda (m)"value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
						 <!-- <input type="text" name="tinggi" placeholder="Tinggi Anda (m)" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required> --> 
						<span class="focus-input3"></span>
					</div>
						<?php
							if(!empty($_POST['hitung'])) { 
				    		$berat = $_POST['berat'];
				    		$tinggi = $_POST['tinggi'];

				    		function bmi($berat,$tinggi) {
				        		$bmi = $berat/($tinggi*$tinggi);
				        		return $bmi;
				    		}   

				    		$bmi = bmi($berat,$tinggi);

				    		if ($bmi <= 18.5) {
				        		$output = "UNDERWEIGHT";
				        		} else if ($bmi > 18.5 AND $bmi<=24.9 ) {
				        		$output = "NORMAL WEIGHT";
				        		} else if ($bmi > 24.9 AND $bmi<=29.9) {
				        		$output = "OVERWEIGHT";
				        		} else if ($bmi > 30.0) {
				        		$output = "OBESE";
				    		}
				    		echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
				    		echo "$output";
				    		echo"<img src=bmi.jpg width=300 height=200>";
				    		
						}
						?>
					<!-- <button class="btn btn-success notika-btn-success" name="submit" type="submit">Hitung</button> -->
					<div class="container-contact3-form-btn">
						<!-- <button class="contact3-form-btn"name="hitung" type="hitung"> -->
						<button class="contact3-form-btn" type="submit" name="hitung" value="hitung">
							Calculate BMI
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
