<html>
	<head>
		<title>Form Submitted!</title>
		<style>
			body {
				font-family: arial;
			}
		</style>
	</head>
	<body>
        <navbar><?php include 'navbar.php'; ?></navbar>
		<h1>Form Submission Received!</h1>
        <?php
            $conn = new mysqli("localhost","root","password","test");
            if(!$conn->connect_errno) {
                echo "Successful Database Connection!";
            }
            
            $qu = $_POST["question"];
            $an = $_POST["answer"];
            $tags = $_POST["tags"];
            $type = $_POST["type"];
            
            echo "<br>".$qu;
            echo "<br>".$an;
            echo "<br>".$tags;
            echo "<br>".$type;
            if($qu!=""&&$an!=""&&$type!="") {
                if(!($stmt = $conn->prepare("INSERT INTO cards VALUES (NULL,?,?,?,CURRENT_TIMESTAMP,?)"))) {
                    echo "<br>Prepare failed: (" . $conn->errno . ") " . $conn->error;
                }
                if (!$stmt->bind_param("ssss", $qu,$an,$tags,$type)) {
                    echo "<br>Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
                }
                if (!$stmt->execute()) {
                    echo "<br>Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                } else {
                    echo "<br>Data Successfully Entered!";
                }
            } else {
                echo "<br>Error: There must be a Question, an Answer, and a Type";
            }
             $conn->close();
        ?>
	</body>
</html>












