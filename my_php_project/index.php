<?php
include 'db.php';
$sql = "SELECT * FROM Person"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['PersonID'] . " - الاسم: " . $row['FirstName'] . "<br>";
    }
} else {
    echo "not data ";
}


$conn->close();
?>


