<meta name=viewport content='width=300'>
<html>
    <head>
        <title>This is the form!</title>
        <style>
            body {
                font-family: arial;
            }
            h1 {
                text-align: center;
            }
            input {
                text-align: center;
                margin: 5px auto 5px auto;
                padding: 2px;
                width: inherit;
            }
            form {
                width: 200px;
                margin: auto;
            }
        </style>
        
    </head>
    <body>
        <navbar><?php include 'navbar.php'; ?></navbar>
        <h1>Flash Card Form!</h1>
        <form name="form" method="post" action="insertdata.php">
            <input type="text" name="question" placeholder="Question" autocorrect=off autocapitalize=off><br>
            <input type="text" name="answer" placeholder="Answer" autocorrect=off autocapitalize=off><br>
            <input type="text" name="tags" placeholder="Tags" autocorrect=off autocapitalize=off><br>
            <input type="text" name="type" placeholder="Type" autocorrect=off autocapitalize=off><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>