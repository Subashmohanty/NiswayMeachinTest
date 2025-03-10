<?php
include('db.php');
$location = 'index.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['xml_file'])) {
    $file = $_FILES['xml_file'];
    if ($file['type'] !== 'text/xml') {
        $_SESSION['message'] = 'Please upload a valid XML file.';
        header('Location: your-form-page.php');
        exit;
    }
    $xml = simplexml_load_file($file['tmp_name']);
    if ($xml === false) {
        $_SESSION['message'] = 'Failed to load XML file.';
        header('Location: your-form-page.php');
        exit;
    }
    $contacts = [];

    foreach ($xml->contact as $contact) {
        $name = (string)$contact->name;
        $phone = (string)$contact->phone;
        $country_code = substr($phone, 0, 3);
        $mobile = substr($phone, 4);
        $contacts[] = "('$name', '$country_code', '$mobile')";
    }

    $query = "INSERT INTO `contacts` (`name`, `country_code`, `mobile`) VALUES " . implode(", ", $contacts);
    if ($conn->query($query) === TRUE) {
        $_SESSION['message'] =  "Records inserted successfully!";
    } else {
        $_SESSION['message'] =  "Error: " . $query . "<br>" . $conn->error;
    }
}else{
    $name = $_POST['name'];
    $phone = $_POST['mobile'];
    $countryCode = $_POST['country_code'];

    $sql = "INSERT INTO contacts (name, mobile, country_code) VALUES ('$name', '$phone', '$countryCode')";
    $conn->query($sql);
    $_SESSION['message'] = "Contact added successfully!";
}

header('Location: '. $location);
exit();
?>