<navbar><?php include 'navbar.php'; ?></navbar>
<?php
$mysql = new mysqli("localhost","root","password","test");
if(!$mysql->connect_errno) {
    echo "Successful Connection!";
}
$qu = $_POST["query"];
if(!($stmt = $mysql->prepare($qu))) {
    echo "<br>Prepare failed: (" . $mysql->errno . ") ". $mysql->error;
} else if(!$stmt->execute()) {
    echo "<br>Execute failed: (" . $stmt->errno . ") " . $mysql->error;
} else {
    echo "<br>Successful Execution!";
}

?>