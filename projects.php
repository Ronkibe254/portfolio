<?php
include 'config.php';

// Fetch projects from the database
$sql = "SELECT * FROM projects ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <h1>My Projects</h1>
    <div class="project-container">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="project">
                <h2><?php echo $row['title']; ?></h2>
                <p><?php echo $row['description']; ?></p>
                <img src="<?php echo $row['image']; ?>" alt="Project Image">
                <a href="<?php echo $row['link']; ?>" target="_blank">View Project</a>
            </div>
        <?php } ?>
    </div>
</body>
</html>
