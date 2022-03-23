<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .navbar{
        z-index: 99;
        position: fixed;
      }
      .navbar-brand span{
        margin-left: 20px;
        margin-right: 50px;
      }
      .collapse form button{
        margin-right: 30px;
      }
      .navbtn{
          margin-top: -10px;
          padding: 10px;
          padding-left : 15px;
          padding-right : 15px;
          border-radius: 10px;
          border: 1px solid #0d6efd;
          background-color: #0d6efd;
          color: white;
          text-decoration: none;
      }
      .navbtn:hover{
          border: 1px solid #198754;
          background-color: #198754;
          color: white;
      }
    </style>
</head>
<body>
<?php include 'bot/bot.html';?>

<nav class="navbar fixed-top sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/logo.jpg" alt="logo" width="80px" height="80px">
            <span>No Hunger</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <li class="nav-item dropdown">
                <a class="dropdown-toggle navbtn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donate   </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="money_donate.php">Money</a>
                  <a class="dropdown-item" href="food_donate.php">Food</a>
                  <a class="dropdown-item" href="cloths_donate.php">Cloths</a>
                </div>
              </li>
              <a href="login.php">
                <button class="navbtn mx-4" type="button">Login and Register</button>
              </a>
              <!-- <button class="btn btn-outline-primary mx-3" type="button">Login</button> -->
             </form>
          </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        var btns = document.getElementsByClassName("nav-link");
        btns[0].className += " active";
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function(e) {
                btns[0].className = "nav-link"
                btns[1].className = "nav-link"
                btns[2].className = "nav-link"
                btns[3].className = "nav-link"
                this.className += " active";
            });
        }
    </script>

</body>
</html>