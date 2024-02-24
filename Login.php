<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gatepass";

    // Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data from the database based on the entered email and password
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND psswd = :psswd AND roles=:roles");
    $stmt->bindParam(':email', $_POST["email"]);
    $stmt->bindParam(':psswd', $_POST["psswd"]);
    $stmt->bindParam(':roles', $_POST["roles"]);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // If user exists, redirect to a different page
    if ($user) {
        if ($user['roles'] == 'admin') {
            header("Location: admin_dashboard.php");
            exit;
        } else {
            header("Location: student_dashboard.php");
            exit;
        }
    } else {
        // Invalid credentials, display an error message
        echo "<script>alert('Invalid email or password');</script>";
       
    }
}
?>