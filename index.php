<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Board Game Collection</title>
</head>
<body>

    <h1>Board Game Collection</h1>

    <?php
    // Connect to the database
    include("db.php");

    // Retrieve games from the database
    $sql = "SELECT * FROM games ORDER BY release_year DESC";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>" . htmlspecialchars($row['title']) . "</strong> (" . $row['release_year'] . ") - Genre: " . htmlspecialchars($row['genre']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No board games found in the database yet.</p>";
    }

    // Close the database connection
    $mysqli->close();
    ?>

</body>
</html>
