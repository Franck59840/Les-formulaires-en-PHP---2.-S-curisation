<?php 

$userlastname = $_POST["userLastName"] ?? null;
$userfirstname = $_POST["userFirstname"] ?? null;
$useremail = $_POST["userEmail"] ?? null;
$userphone = $_POST["userPhone"] ?? null;
$usermessage = $_POST["userMessage"] ?? null;
$menudestination = $_POST["menuDestination"] ?? null;

$namesAreValid = strlen($userlastname) > 0 && strlen($userfirstname) > 0;
$emailIsValid = strlen($useremail) > 0 && filter_var($useremail, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE) !== null;
$phoneIsValid = strlen($userphone) > 0;
$messageIsValide = strlen($menudestination) > 0 && strlen($usermessage) > 0;

$isValid = $namesAreValid && $emailIsValid && $phoneIsValid && $messageIsValide;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($isValid) { ?>
        <h1><?= $title ?></h1>
        <p><?= $subtitle ?></p>
        <pre><?= $message ?></pre>
    <?php } else { ?>
        <h1 style="color:red;">Une erreur est survenue, il manque des informations ou le format des informations n’est pas bon.</h1>
    <?php } ?>
</body>

</html>
   