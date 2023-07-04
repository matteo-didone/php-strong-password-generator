<?php
// Function that generates a random password
function generateRandomPassword()
{
    // Get the length of the password from the GET request
    $length = $_GET["length"];
    // Initialize the password variable as an empty string 
    $password = "";
    // Define the characters that can be used in the password
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    // Save in a variable the length of the characters string
    $charactersLength = strlen($characters);

    // For loop goes on until the password length is reached
    for ($i = 0; $i < $length; $i++) {
        // Append to the password string a random character from the characters string
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    // Return the password
    return $password;
}
?>
