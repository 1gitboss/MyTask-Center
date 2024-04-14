
<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer>
        document.getElementById('email-ref').innerHTML =
            localStorage.getItem('email')
    </script>
    <title>Confirm Email </title>
</head>
<body>

<h1>Confirm Your Email Account</h1>

<div>
    <p>We have sent an email to:</p>
    <p id="email-ref">
        <script>localStorage.getItem('email')</script>
        </p>

    <p>Please confirm your email address by clicking on the
    link you have in your inbox.</p>

</div>

<script>
    document.getElementById('email-ref').innerHTML =
        localStorage.getItem('email')
</script>
</body>
</html>

