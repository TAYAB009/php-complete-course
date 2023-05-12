<?php
$db = mysqli_connect('localhost', 'tayab', 'SYSTEMS_ENGINNER', 'hospital');

if (!$db) {
    die('Connect Error' . mysqli_connect_error());
}

$sql = 'SELECT * FROM cardio';
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
    echo $row['name'] . '</br>';
}

$freeResult = mysqli_free_result($result);
if ($freeResult == NULL) {
    echo 'Result freed' . '</br>';
} else {
    echo 'Result is consuming resources' . '</br>';
}

$closeDb = mysqli_close($db);
if ($closeDb == true) {
    echo 'Database closed!';
} else {
    echo 'Database was not closed!';
}
?>
