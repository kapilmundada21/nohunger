<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/feedback.css">
</head>
<body>

<?php include 'dashboard_header.php'; ?>
<?php include 'dashboard_sidebar.php'; ?>
    
    <div class="main_containor">
        <h1>Feedback Form</h1>
        <form action="" method="post">
            <table cellspacing="15" cellpadding="10">
                <tr>
                    <th><label for="username">Username : </label></th>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <th><label for="progress">Progress : </label></th>
                    <td>
                        <input type="radio" name="progress" id="progress"><label for="good">Good</label>
                        <input type="radio" name="progress" id="progress"><label for="best">Best</label>
                        <input type="radio" name="progress" id="progress"><label for="excellent">Excellent</label>
                    </td>
                </tr>
                <tr>
                    <th><label for="team_status">Have you formed a team in your society? </label></th>
                    <td>
                        <input type="radio" name="team_status" id="team_status"><label for="yes">Yes</label>
                        <input type="radio" name="team_status" id="team_status"><label for="no">No</label>
                    </td>
                </tr>
                <tr>
                    <th><label for="experience">Share your Experience </label></th>
                    <td><textarea name="feedback_message" id="feedback_message" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <th colspan="2"><button type="submit" class="submit_button">Submit</button></th>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>

<?php include 'dashboard_footer.php'; ?>