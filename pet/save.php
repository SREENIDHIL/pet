<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost"; // Change this to your database server name
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "loginuser"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO pet_grooming_registration (owner_name, owner_address, owner_phone, owner_email, pet_name, pet_species, pet_age, pet_gender, pet_weight, pet_color, medical_conditions, grooming_services, preferred_date, preferred_time, special_requests, emergency_contact_name, emergency_contact_phone, vet_name, vet_contact, additional_info) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssisdsisssssssss", $owner_name, $owner_address, $owner_phone, $owner_email, $pet_name, $pet_species, $pet_age, $pet_gender, $pet_weight, $pet_color, $medical_conditions, $grooming_services, $preferred_date, $preferred_time, $special_requests, $emergency_contact_name, $emergency_contact_phone, $vet_name, $vet_contact, $additional_info);

    // Set parameters
    $owner_name = $_POST['owner_name'];
    $owner_address = $_POST['owner_address'];
    $owner_phone = $_POST['owner_phone'];
    $owner_email = $_POST['owner_email'];
    $pet_name = $_POST['pet_name'];
    $pet_species = $_POST['pet_species'];
    $pet_age = $_POST['pet_age'];
    $pet_gender = $_POST['pet_gender'];
    $pet_weight = $_POST['pet_weight'];
    $pet_color = $_POST['pet_color'];
    $medical_conditions = $_POST['medical_conditions'];
    $grooming_services = $_POST['grooming_services'];
    $preferred_date = $_POST['preferred_date'];
    $preferred_time = $_POST['preferred_time'];
    $special_requests = $_POST['special_requests'];
    $emergency_contact_name = $_POST['emergency_contact_name'];
    $emergency_contact_phone = $_POST['emergency_contact_phone'];
    $vet_name = $_POST['vet_name'];
    $vet_contact = $_POST['vet_contact'];
    $additional_info = $_POST['additional_info'];

    // Execute statement
    if ($stmt->execute()) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Error: Form not submitted";
}
?>
