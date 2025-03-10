<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contacts WHERE id = $id";
    $result = $conn->query($sql);
    $contact = $result->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['mobile'];
    $id = $_POST['id'];
    $country_code = $_POST['country_code'];

    $sql = "UPDATE contacts SET name = '$name', mobile = '$phone', country_code = '$country_code' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] =  "Contact updated successfully!";
        $location = 'index.php';
    } else {
        $_SESSION['message'] =  "Error: " . $sql . "<br>" . $conn->error;
        $location = 'add-contact-info.php';
    }
    header('Location: '. $location);
    exit();
}
?>


