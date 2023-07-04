<!-- 
Description
We need to create a page that allows our users to use our (fairly) secure password generator. The exercise is divided into several milestones, and it is essential to develop them in an orderly manner.

Milestone 1
Create a form that sends the password length via GET. Our function will use this data to generate a random password (composed of letters, uppercase letters, numbers, and symbols) to be returned to the user. Write everything (logic and layout) in a single file, index.php.

Milestone 2
After verifying the correct functioning of our code, move the logic to a functions.php file, which we will then include on the main page.

BONUS 1: Milestone 3
Instead of displaying the password on the index page, perform a redirect to a dedicated page that will retrieve the password through $_SESSION and display it to the user.

BONUS 2: Milestone 4
Handle additional parameters for the password, such as which characters to use among numbers, letters, and symbols. They can be chosen individually (e.g., only numbers) or combined together (e.g., numbers and symbols, or all three together). Also, give the user the option to allow or disallow the repetition of identical characters.
-->

<?php
include __DIR__ . "/utilities/functions.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="title-container">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>

        <div class="no-parameter-inserted">
            <p>Nessun parametro valido inserito</p>
        </div>

        <div class="whole-form-container">
            <form action="index.php" method="GET">

                <div class="input-container">
                    <label for="length">Password Length:</label>
                    <input type="number" name="length" id="length" min="1" required>
                    <p>Allow repetition of one or more characters:</p>
                    <input type="submit" class="btn btn-primary" value="Invia">
                    <input type="button"  class="btn btn-primary" value="Annulla">
                </div>

                <div class="option-container">
                    <input type="radio" id="yes" name="repetition" value="yes" checked>
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="repetition" value="no">
                    <label for="no">No</label>
                    <br>
                    <input type="checkbox" id="letters" name="characters[]" value="letters" checked>
                    <label for="letters">Letters</label>
                    <input type="checkbox" id="numbers" name="characters[]" value="numbers" checked>
                    <label for="numbers">Numbers</label>
                    <input type="checkbox" id="symbols" name="characters[]" value="symbols" checked>
                    <label for="symbols">Symbols</label>
                </div>
            </form>
        </div>
    </div>

    <div class="printed-password-container">
        <h1>La tua password è:</h1>
        <p>
            <?php echo generateRandomPassword(); ?>
        </p>
    </div>
    </div>
</body>

</html>