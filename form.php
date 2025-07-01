<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $location = htmlspecialchars(trim($_POST['location']));

    if (!empty($name) && preg_match('/^[0-9]{10}$/', $mobile) && !empty($location)) {
        $data = "Name: $name\nMobile: $mobile\nLocation: $location\n---\n";
        file_put_contents("franchise_requests.txt", $data, FILE_APPEND);

        echo "Thank you for your interest!";
    } else {
        echo "Please fill out the form correctly.";
    }
} else {
    echo "Access Denied.";
}
?>
