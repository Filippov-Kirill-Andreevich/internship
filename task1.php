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

//task 2
$results = $mysqli->query("
	SELECT name, birthday
	FROM employee
	WHERE birthday
	LIKE '%" . date('m-d') . "'
");
echo '<h3>2. Сотрудники у которых сегодня день рождения</h3>';
while($row = $results->fetch_assoc())
	echo '<b>Сотрудник: </b>' . $row['name'] . '<b> Дата рождения: </b>' . $row['birthday'] . '<br>';

$results->free();
$mysqli->close();
?>