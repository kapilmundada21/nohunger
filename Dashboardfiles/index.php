<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

<?php include 'dashboard_header.php'; ?>
<?php include 'dashboard_sidebar.php'; ?>
    
    <center><div style="padding:100px">
        <span id="user" class="message">Hello,<b> < email-id ></b></Email-id></span>
        <div class="success"><span>Welcome to auth starter, You are successfully loged in!!!</span></div><br/>
        
    </div></center>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>

    <script src="backend\login_registration\firebase.js"></script>
    <script src="backend\login_registration\welcome.js"></script>
    

</body>
</html>

<?php include 'dashboard_footer.php'; ?>