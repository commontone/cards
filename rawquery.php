<meta name=viewport content='width=300'>
<html>
    <head>
        <title>Raw Query Page</title>
        <style>
            body {
                font-family: arial;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <navbar><?php include 'navbar.php'; ?></navbar>
        <h1>Query Form</h1>
        <form name="form" method="post" action="doquery.php">
            <input type="text" name="query" placeholder="Query" autocorrect=off autocapitalize=off><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>