<?php 
	session_start();
	$number_guess = $_POST['number'];
	$_SESSION['number'] = $number_guess;
	if ($number_guess < $_SESSION['gen_number']) {
		$_SESSION['low'] =
		"<div data-alert class='alert-box alert round text-center'>
  		Your Number is TOO LOW!
  		<a href='#'' class='close'>&times;</a>
		</div>";
	}
	if ($number_guess > $_SESSION['gen_number']) {
		$_SESSION['low'] =
		"<div data-alert class='alert-box warning round text-center'>
  		Your Number is TOO HIGH!
  		<a href='#'' class='close'>&times;</a>
		</div>";
	}
	if ($number_guess == $_SESSION['gen_number']) {
		$_SESSION['low'] =
		"<div data-alert class='alert-box success round text-center'>
  		You guessed the RIGHT NUMBER! A new number has been generated, try guessing again!
  		<a href='#'' class='close'>&times;</a>
		</div>";
		unset($_SESSION['gen_number']);
	}

	header('Location: index.php');


?>