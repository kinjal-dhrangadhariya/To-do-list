<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add.php" method="POST">
            <input type="text" name="task" placeholder="Enter new task" required>
            <button type="submit">Add Task</button>
        </form>
        <ul>
        <?php
            $sql = "SELECT * FROM tasks";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()):
        ?>
            <li>
                <?php echo htmlspecialchars($row['task']); ?>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </li>
        <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>