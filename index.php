<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artificial Intelligence LAB TASKS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Ubuntu" rel="stylesheet">
</head>

<body>

<div>
    <h1 id="title">Artificial Intelligence Lab Tasks</h1>
</div>


<div id="side-nav">
    <ul>
        <li>
            <h2>Assignments Type - I</h2>
            <ul style="list-style-type:square">
                <li><a href="index.php?PageName=BFS"><h3>BFS</h3></a></li>
                <li><a href="index.php?PageName=DFS"><h3>DFS</h3></a></li>
                <li><a href="index.php?PageName=DLS"><h3>DLS</h3></a></li>
                <li><a href="index.php?PageName=IDS"><h3>IDS</h3></a></li>
                <li><a href="index.php?PageName=BS"><h3>Bidirectional Search</h3></a></li>
                <li><a href="index.php?PageName=GBFS"><h3>Greedy Best First</h3></a></li>
                <li><a href="index.php?PageName=ASTAR"><h3>A* Search</h3></a></li>
                <li><a href="index.php?PageName=LP"><h3>Min-Max</h3></a></li>
            </ul>
        </li>

        <li>
            <h2>Assignments Type - II</h2>
            <ul style="list-style-type:square">
                <li><a href="index.php?PageName=FORM"><h3>Form</h3></a></li>
                <li><a href="index.php?PageName=VACUUM-CLEANER"><h3>Vacuum Cleaner</h3></a></li>
                <li><a href="index.php?PageName=SAVE-THE-QUEEN"><h3>Save The Queen</h3></a></li>
                <li><a href="index.php?PageName=BOY-GIRL"><h3>Boy/Girl Detection</h3></a></li>
            </ul>
        </li>

        <li>
            <h2>Project</h2>
            <ul style="list-style-type: square">
                <li><a href="index.php?PageName=TIC-TAC-TOE"><h3>Tic-Tac-Toe</h3></a></li>
            </ul>
        </li>
    </ul>
</div>

<div id="content">
    <?php
    if (!empty($_GET['PageName'])) {
        $PagesDirectory = 'Page-Folders';
        $PagesFolder = scandir($PagesDirectory, 0);
        unset($PagesFolder[0], $PagesFolder[1]);
        //print_r($PagesFolder);
        $PageName = $_GET['PageName'];
        if (in_array($PageName . '.php', $PagesFolder)) {
            include($PagesDirectory . '/' . $PageName . '.php');
        }
    }
    ?>
</div>


<!-- js -->
<script rel="js" src="js/index.js"></script>
</body>

</html>