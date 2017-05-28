<!DOCTYPE html>
<html>
<head>
	<title>Grading System</title>
</head>
<body>
<h1>Grading System</h1>
<form class="form" action="" method="post">
	<input type="text" name="score">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php


	function gradeScore($score) {

		if ($score <= 100 && $score >= 80) {
			return "Excellent, you got an A! :-D";
		}
		elseif ($score <= 79 && $score >= 70) {
			return "Great, You got a B!";
		}
		elseif ($score <= 69 && $score >= 60) {
			return "You got a C! Nice!";
		}
		elseif ($score <= 59 && $score >= 50) {
			return "Your grade is D!";
		}
		elseif ($score <= 49 && $score >= 40) {
			return "Your grade is E :-(";
		}
		elseif ($score <= 39 && $score >= 0) {
			return "You got an F! :-)";
		}
		else {
			return "Invalid Score!!!";
		}
	}

	if (isset($_POST['score'])) {
		$score = $_POST['score'];
		if (!is_numeric($score)){
			echo "Please input numbers!!!";
			exit;
		} else {
			$score = $_POST['score'];
			if($score <= 100 && $score >= 0){
				$grade = gradeScore($score);
				echo $grade;
			} 
			else {
				echo "Invalid Score!!!";
			}
		}		
	}
?>

