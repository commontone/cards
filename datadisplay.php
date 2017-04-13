<meta name=viewport content='width=600'>
<html>
    <head>
        <title>Testing The Internet</title>
        <style>
            body {
                background-color: yellow;
                font-family: arial;
                text-align: center;
            }
            td {
                padding: 4px;
                font-family: arial;
                border: 2px solid black;
                text-align: center;
                
            }
            table {
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                border: 4px solid black;
                border-collapse: collapse;
                min-width: 500px;
            }
            tr:nth-child(2n+1) {
                background-color: aliceblue;
            }
            tr:nth-child(2n+2) {
                background-color: paleturquoise;
            }
            tr:first-child {
                background-color: white;
            }
						a:hover {
							color:maroon;
							font-weight: +200;
						}
        </style>
    </head>
    <body>
        <navbar><?php include 'navbar.php'; ?></navbar>
        <?php
            $sql = new mysqli("localhost","root","password","test");
            if(!$sql->connect_errno) {
                echo 'Successful Connection!';
            }
            $result = $sql->query("SELECT * FROM cards");
            echo '<table>';
            echo '<tr style="font-weight: bold"><td>ID</td><td>Question</td><td>Answer</td><td>Type</td><td>Added</td><td>Tags</td></tr>';
            while($a = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$a["ID"]."</td>";
                echo "<td>".$a["QUESTION"]."</td>";
                echo "<td>".$a["ANSWER"]."</td>";
                echo "<td>".$a["TYPE"]."</td>";
                echo "<td>".$a["ADDED"]."</td>";
                echo "<td>".$a["TAGS"]."</td>";
                echo "</tr>";
            }
            echo '</table>';
        ?>
    </body>
</html>
