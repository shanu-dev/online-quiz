<!DOCTYPE html>
<html>
 <head>
<title>PHP Quiz</title>
</head>
 <body>
 <?php
$hostname = "localhost";
$dbname = "quizzes";
$pass = "";
$user = "root";
$conn = new mysqi($hostname, $user,  $pass, $dbname);
$n = $_POST["uname"];
$sql = "INSERT into quiz(name)values('$n');
$result = mysqli_query($conn, $sql);
if($result == TRUE)
{
echo "<script>
	alert("Thank you for visiting our website!');
</script>";
}
?>
<div id="page-wrap">
 <h1>Result </h1>
<?php
            $answers1 = $_POST['question-1-answers'];
            $answers2 = $_POST['question-2-answers'];
            $answers3 = $_POST['question-3-answers'];
            $answers4 = $_POST['question-4-answers'];
            $answers5 = $_POST['question-5-answers'];
             
$totalCorrect = 0;
            
            if ($answers1 == "D") { $totalCorrect++; }
            if ($answers2 == "B") { $totalCorrect++; }
            if ($answers3 == "A") { $totalCorrect++; }
            if ($answers4 == "B") { $totalCorrect++; }
           if ($answers5 == "B") { $totalCorrect++; }
             
            echo "<div id='results'>$totalCorrect /correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>