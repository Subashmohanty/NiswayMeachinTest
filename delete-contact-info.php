<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM contacts WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] =   "Contact deleted successfully!";
    } else {
        $_SESSION['message'] =  "Error: " . $conn->error;
    }
    header('Location: index.php');exit();
}
?>