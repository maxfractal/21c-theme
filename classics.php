<?php
	//print('<h1>This will work...</h1>');
	//$dn = dirname('.');
	//print($dn);
	?>
<style>
    .card {
        border: 1px black solid;
    }
</style>
<script>
console.log('Try this first');
</script>

<?php
require_once('login.php');
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

print('Trying to connect to the DB.<br><br>');

$query = "SELECT * FROM classics";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0; $j < $rows;++$j)
{
	$result->data_seek($j);
	echo 'ID: ' . $result->fetch_assoc()['id'] . '<br>';
    $result->data_seek($j);
	echo 'Author: ' . $result->fetch_assoc()['author'] . '<br>';
    $result->data_seek($j);
    echo 'Title: ' . $result->fetch_assoc()['title'] . '<br>';
    $result->data_seek($j);
    echo 'Type: ' . $result->fetch_assoc()['type'] . '<br>';
    $result->data_seek($j);
    echo 'Year: ' . $result->fetch_assoc()['year'] . '<br><br>';

}
$result->close();
$conn->close();

// @todo Next step in orielly book
?>

<script>
console.log('did this print?');
</script>