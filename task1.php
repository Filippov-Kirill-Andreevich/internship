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
	LIKE '�%'
	ORDER BY name
");
echo '<h3>1. ���������� �� ��������, ������� ����� � ������� �� "�"</h3>';
while($row = $results->fetch_assoc())
	echo '<b>���������: </b>' . $row['name'] . '<b> �����: </b>' . $row['city'] . '<br>';

$results->free();
$mysqli->close();
?>