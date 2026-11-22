<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="styles/main.css">
    <script src="scripts/main.js" defer></script>
</head>
<?php
$conn = new mysqli("localhost", "root", "", "student_directory");
?>
<?php
$last_name = $_POST['last_name'];
$stmt = $conn->prepare("CALL search_students(?)");
$stmt->bind_param("s", $last_name);
$stmt->execute();
$result = $stmt->get_result();
?>
<body>
<h3>Search Results</h3>
<?php if ($result->num_rows > 0): ?>
    <table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
    <td><?php echo htmlspecialchars($row['id']); ?></td>
    <td><?php echo htmlspecialchars($row['first_name']); ?></td>
    <td><?php echo htmlspecialchars($row['last_name']); ?></td>
    <td><?php echo htmlspecialchars($row['email']); ?></td>
</tr>
<?php endwhile; ?>
</table>
<?php else: ?>
<p>No students found.</p>
<?php endif; ?>
<p><a href="index.php">Back to Home</a></p>
</body>
</html>