<?
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbName = 'internship';

$mysqli = new mysqli( $hostname, $username, $password, $dbName); 

if ($mysqli->connect_error) 
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);

//task 1
$results = $mysqli->query("
	SELECT name, city
	FROM employee
	WHERE city
	LIKE 'А%'
	ORDER BY name
");
echo '<h3>1. Сотрудники по алфовиту, которые живут в городах на "А"</h3>';
while($row = $results->fetch_assoc())
	echo '<b>Сотрудник: </b>' . $row['name'] . '<b> Город: </b>' . $row['city'] . '<br>';

$results->free();
$mysqli->close();
?>