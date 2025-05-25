<?php
// Define variables
$email = "example@example.com";
$password = "password123";

// Generate random password
$randomPassword = rand(100000, 999999);

// Log in with email and password
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    if (isset($_POST['submit'])) {
        if ($stmt = mysqli_prepare($db, "INSERT INTO users (email, username, hashed_password) VALUES (?, ?, ?)")) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
            
            // Execute the statement
            mysqli_stmt_execute($stmt);
            
            if ($result = mysqli_store_result($db)) {
                echo "Account created successfully! \n";
                $_SESSION['success'] = "success";
                
                if (isset($_POST['submit'])) {
                    echo "Login successful.";
                }
            } else {
                echo "Database error. \n";
                $stmt->close();
            }
        } else {
            echo "Parameter or statement not set properly.\n";
            mysqli_stmt_close($stmt);
        }
    } else {
        if (isset($_POST['submit'])) {
            // Update username
            $sql = "UPDATE users SET username = ? WHERE email = ?";
            
            if ($stmt = mysqli_prepare($db, $sql)) {
                // Bind parameters
                mysqli_stmt_bind_param($stmt, "ss", $username, $email);
                
                // Execute the statement
                mysqli_stmt_execute($stmt);
            } else {
                echo "Parameter or statement not set properly.\n";
                mysqli_stmt_close($stmt);
            }
            
            if ($result = mysqli_store_result($db)) {
                echo "Username updated successfully. \n";
            } else {
                echo "Database error. \n";
                $stmt->close();
            }
        }
    }
}

// Close the database connection
mysqli_close($db);

echo 'Account created: ' . $randomPassword;
?>
