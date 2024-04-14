
<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../assests/logo/logo-png.png"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/confirmEmail-style.css">

    <script defer>
        document.getElementById('email-ref').innerHTML =localStorage.getItem('email')
    </script>
    <title>Confirm Email </title>
</head>
<body>
<div class="container">
    <h1>Confirm Your Email Account</h1>

    <div>
        <p>We have sent an email to you </p>
        <p id="email-ref">
            <script>localStorage.getItem('email')</script>
        </p>

        <p>Please confirm your email address by clicking on the
            link you have in your inbox.</p>

    </div>

</div>

<script>
    document.getElementById('email-ref').innerHTML =
        localStorage.getItem('email')
</script>
</body>
</html>

