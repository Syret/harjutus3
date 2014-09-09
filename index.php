<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title> III - Andmetüübid</title>
</head>

<body>
	<h1>Muutujad</h1>	
	<?php
    $variable = 7;
    echo $variable;
       echo "<br>";
?>
<?php
    $variable = 5;
    echo $variable;
?>

<h2>Stringid</h2>

<?php echo "Hello world!<br>"; ?>
<?php echo 'Hello world!<br>'; ?> 


<?php $variable = "24"; 
	$variable2 = "26"; 
echo ($variable . $variable2);
	?>

<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>

<?php 
	$student1 = "Aile"; 
	$student2 = "Maile"; 
	$student3 = "Margit"; 
	$student4 = "Marko"; 
	$student5 = "Fränk"; 
?>

<ul>
<?php 
	echo "<li>". $student1 . "</li>
	<li>" . $student2 . "</li>
	<li>" .$student3 . "</li>
	<li>" .$student4 . "</li>
	<li>" .$student5 . "</li>"
?>
</ul>
<?php 
	$firstName ="Syret";
	$lastName = "Kärt";
	$fullName = $firstName . " " . $lastName; 
	echo $fullName;
	?>
	<br>
<?php 
	$test = "Testmime";
	echo "$test kas interpolatsioon töötab<br>"; 
	?>
<?php	
	$age = "21";
echo "Ma olen {$age}e aastane<br>"; ?>

<?php
 $source = " see on TEKST suurte TÄHTEDEGA";
 echo $source;
 $lower = strtolower($source);
 echo "<p>{$lower}</p>";
?>
	
<h2>Täisarvud</h2>
	<?php
		$variable = 2;
		$variable2 = 1;
		echo ($variable * $variable2) * 3;
	?>
	<?php echo abs(-10) ?>
	<?php echo pow(7, 2);?>
	<?php echo sqrt(625);?>
	<?php
    echo rand() . "<br>";
    echo rand(1, 100) . "<br>";
    ?>
    <?php
  $sample_nr = 30;
  $sample_nr = $sample_nr + 2;
  echo $sample_nr . "<br>";
?>
<?php
    $sample_nr2 = 30;
    $sample_nr2 += 2;
    echo $sample_nr2 . "<br>";
?>
<?php
    $sample_nr3 = 20;
    $sample_nr3 -= 2;
    echo $sample_nr3 . "<br>";
?>
<?php
    $sample_nr4 = 18;
    $sample_nr4 *= 5;
    echo $sample_nr4 . "<br>";
?>
<?php
    $sample_nr5 = 20;
    $sample_nr5 /= 2;
    echo $sample_nr5 . "<br>";
?>
<?php
    echo 7 . " punane";
?>
<br>
<?php
    echo 7 + " punane";
?>
<br>
<?php
    echo 7 + "7";
?>
<br>
<?php
    echo 7 + "8 punast";
?>
</body>

</html>