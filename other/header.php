<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="images/fevicon_assect/favicon-16x16.png" sizes="16x16" type="image/png">
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
      .dropdown-toggle{
        margin-top: 50px;
      }
      .navbtn{
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
      @media only screen and (max-width: 400px){
        .navbtn{
          margin-top: 20px;
          margin-bottom: 20px;
        }
        .dropdown{
          margin-top:20px;
        }
      }
    </style>
</head>
<body>

<nav class="navbar fixed-top sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="logo" width="80px" height="80px">
            <span>Annapurna</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="supportus.php">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
            </ul>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle navbtn" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"  aria-expanded="false">Donate   </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="https://pmny.in/qrgpx69I5tQw">Money</a>
                  <a class="dropdown-item" href="food_donate.php">Food</a>
                  <a class="dropdown-item" href="cloths_donate.php">Cloths</a>
                </div>
              </li>
              <a href="login.php">
                <button class="navbtn mx-4" type="button">Login and Register</button>
              </a>
              <!-- <a href="login_admin.php">
                <button class="navbtn" type="button">Admin Login</button>
              </a>
              <div class="mx-2"></div> -->
          </div>
        </div>
    </nav>

    <div style="display:none;"> 
      <a id="donate_button" style="width: 135px; background-color: #1065B7; text-align: center; font-weight: 800; padding: 11px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; " href='https://pmny.in/qrgpx69I5tQw'>Donate Now</a> 
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var btns = document.getElementsByClassName("nav-link");
        let url = location.href;
        console.log(url);
        if(url == "http://localhost/annapurna/index.php"){
          btns[0].className += " active";
        }
        else if(url == "http://localhost/annapurna/supportus.php"){
          btns[1].className += " active";
        }
        else if(url == "http://localhost/annapurna/aboutus.php"){
          btns[2].className += " active";
        }
        else if(url == "http://localhost/annapurna/contactus.php"){
          btns[3].className += " active";
        }
        
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