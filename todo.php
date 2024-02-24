<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            margin-top: 50px;
        }
        .task-input {
            width: 70%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .task-btn {
            padding: 10px;
        }
        .task-list {
            margin-top: 20px;
        }
        .task-item {
            margin-bottom: 10px;
        }
        .task-item button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Simple To-Do List</h2>
        <form method="post">
            <input type="text" name="task" class="task-input" placeholder="Enter a new task">
            <button type="submit" class="task-btn">Add Task</button>
        </form>
        <div class="task-list">
            <h3>Tasks:</h3>
            <ul>
                <?php
                if(isset($_POST['task'])) {
                    $_SESSION['tasks'][] = $_POST['task'];
                }
                if(isset($_SESSION['tasks'])) {
                    foreach ($_SESSION['tasks'] as $task) {
                        echo "<li class='task-item'>$task<button>Delete</button></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
