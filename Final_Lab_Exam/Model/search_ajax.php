<?php
include 'db.php';

$query = $_GET['q'] ?? '';

$stmt = $conn->prepare("SELECT * FROM authors WHERE name LIKE ?");
$search = "%$query%";
$stmt->bind_param("s", $search);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['name']} - {$row['contact_no']}</p>";
}
$stmt->close();
?>
