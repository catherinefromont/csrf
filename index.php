<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if there is a CSRF token in both the session and the submitted form and that they match
    // if (!empty($_SESSION['csrf']) && !empty($_POST['csrf']) && $_SESSION['csrf'] === $_POST['csrf']) {
        // die(var_dump($_POST));
        die('$' . $_POST['amount'] . ' has been transferred to ' . $_POST['toAccount']);
    // }
    // die('The CSRF token does not match!');
}

// To counter this we need to generate a unique string that is included on every page
$_SESSION['csrf'] = bin2hex(random_bytes(10));

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSRF Forms</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            <label for="account">Account:</label>
            <select name="account">
                <option value="">Select one...</option>
                <option value="00-210312313-123">Cheque - 00-210312313-123</option>
                <option value="00-210312313-124">Savings - 00-210312313-124</option>
                <option value="00-210312313-125">Holiday - 00-210312313-125</option>
            </select>

            <label for="toAccount">To account:</label>
            <input name="toAccount" placeholder="00-210312313-125">

            <label for="amount">Amount:</label>
            <input name="amount" placeholder="$123.45">


            <input name="csrf" value="<?=$_SESSION['csrf'];?>" hidden>

            <input type="submit" value="Transfer">
        </form>
    </body>
</html>
