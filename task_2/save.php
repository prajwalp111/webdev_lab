<?php

$servername = "localhost"; 
$username = "root";        
$password = "";           
$database = "marathon";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact_name = $conn->real_escape_string($_POST['contact_name']);
    $contact_phone = $conn->real_escape_string($_POST['contact_phone']);
   

  
    $sql = "INSERT INTO `users`(`name`, `email`, `phone`, `contact_name`, `contact_phone`) VALUES ('$name','$email','$phone','$contact_name','$contact_phone')";

    if ($conn->query($sql) === TRUE) {
      
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Registration Successful</title>
            <link rel='stylesheet' href='style.css'>
            <style>
            /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

/* Header Styles */
header {
    background: #4CAF50;
    color: white;
    padding: 1rem 0;
    text-align: center;
}

header h1 {
    margin: 0;
}

/* Main Section Styles */
main {
    padding: 1rem;
    margin: 2rem auto;
    max-width: 600px;
    background: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

main h2 {
    color: #4CAF50;
    border-bottom: 2px solid #ddd;
    padding-bottom: 0.5rem;
}

main p {
    margin: 0.5rem 0;
}

main strong {
    color: #555;
}

/* Footer Styles */
footer {
    text-align: center;
    padding: 1rem 0;
    background: #333;
    color: white;
    position: fixed;
    bottom: 0;
    width: 100%;
}

footer p {
    margin: 0;
}

            </style>
        </head>
        <body>
            <header>
                <h1>Registration Successful</h1>
            </header>
            <main>
                <h2>Your Details</h2>
                <p><strong>Name:</strong> $name</p>
                
                <p><strong>Gmail:</strong> $email</p>
               
                <p><strong>Phone Number:</strong> $phone</p>
                <p><strong>EX name:</strong>    $contact_name</p>
                <p><strong>EX phone:</strong>  $phone</p>
            </main>
            <footer>
                <p>© 2024 Marathon Registration</p>
            </footer>
        </body>
        </html>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
