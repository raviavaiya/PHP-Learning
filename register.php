<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required><br><br>

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture" id="profile_picture" accept="image/*"><br><br>

        <input type="submit" value="Register" name="register">
    </form>
</body>

</html>


<?php
include("database.php");

if (isset($_POST['register'])) {
    // Get form inputs
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    // Handle profile picture upload
    $profilePicture = '';
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $profilePicName = $_FILES['profile_picture']['name'];
        $profilePicTmpName = $_FILES['profile_picture']['tmp_name'];
        $profilePicSize = $_FILES['profile_picture']['size'];
        $profilePicType = mime_content_type($profilePicTmpName);

        $targetDir = 'img/';
        $profilePicture = $targetDir . basename($profilePicName);

        // Allowed file types and maximum size
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxSize = 2 * 1024 * 1024; // 2 MB

        // Validate file type and size
        if (!in_array($profilePicType, $allowedTypes)) {
            die("Invalid file type. Only JPG, PNG, and GIF files are allowed.");
        } elseif ($profilePicSize > $maxSize) {
            die("File size exceeds the maximum limit of 2 MB.");
        } else {
            if (!move_uploaded_file($profilePicTmpName, $profilePicture)) {
                die("File upload error: Failed to move uploaded file.");
            }
        }
    }

    // Insert data into the database
    $stmt = $con->prepare("INSERT INTO users (username, email, password, gender, dob, profile_picture) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $email, $password, $gender, $dob, $profilePicture);

    if ($stmt->execute()) {
        echo "Registration Successful";
    } else {
        echo "Registration Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
