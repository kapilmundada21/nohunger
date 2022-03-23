<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <title>No Hunger</title>
  </head>
  <body>

  <?php include 'other/header.php';?>

  <div class="img_slideshow">
    <img class="mySlides" src="images/home_1.jpg">
    <img class="mySlides" src="images/home_2.jpg">
    <img class="mySlides" src="images/home_3.jpg">
    <img class="mySlides" src="images/home_4.jpg">
  </div>

    <!-- <figure id="slidy">&nbsp;
      <img alt="" src="images/home_1.jpg" />
      <img alt="" src="images/home_2.jpg" />
      <img alt="" src="images/home_3.jpg" />
      <img alt="" src="images/home_4.jpg" />
    </figure> -->

    <div class="content1">
      <div class="text reveal">
        <p><h4>
          Hey, are u thinking our society is happy coz we get food whenever we want....isn't it?
        </h4></p><br>
        <p>
          But what if I say that two-thirds of our society didn't get food for a week. Yes that's how it is....single largest contributor to disease in the world is "MALNUTRITION"
        </p>
        <p>
        People experiencing food insecurity have typically run out of food for days......imagine you are experiencing this....isn't it terrible?
        </p><br>
      </div>
      <div class="content1img reveal" align="center">
        <img src="images/home_content1a.png" alt="logo" width="300px" height="250px">
        <img src="images/home_content1b.png" alt="logo" width="300px" height="250px">
        <img src="images/home_content1c.png" alt="logo" width="300px" height="250px">
      </div>
    </div>
      
    <div class="parallax"></div>
      
    <div class="content2">
      <div class="left reveal">
          <p>
            Hunger is the leading cause of death in the world. Our planet has provided us with tremendous resources, but unequal access and inefficient handling leave millions of people malnourished. 
          </p>
          <p>
            Children are particularly badly affected. In traditional societies, they suffer heavily from the consequences of structural inequalities. 
          </p>
      </div>
      <div class="right reveal">
        <p>
          925 million <br>																
          people worldwide will go to bed <br>
          hungry tonight <br>
        </p>
      </div>
    </div>

    <div class="block_content_right">
      <center>
        <img src="images/home_7.jpg" width="250px" height="250" class=" reveal">
      </center>
      <div class="text reveal">
          <h2>Cause of Hunger</h2><br>
          <p>
          Due to an unbalanced diet, vital vitamins are lacking, along with iron, iodine, zinc, or diet A. At first glance, the effects aren't always very visible, however, over the long-time period, those nutrient deficiencies result in severe diseases. In particular, youngsters are not able to expand correctly, neither mentally nor physically. The danger of dying is high.
          </p>
        <button type="button">Donate Now</button>
      </div>
    </div>

    <div class="block_content_left">
      <div class="text reveal">
          <h2>What we are trying to do?</h2><br>
          <p>
            We are trying to help people who didn't get food by supplying food from people to people
          </p>
          <p>
            We want that everyone gets food...so that they don't face things like malnutrition 
          </p>
          <p>
            supply the food to those in need from those who want to help 
          </p>
      </div>
      <center>
        <img src="images/home_7.jpg" width="250px" height="250" class="reveal">
      </center>
    </div>

    <div class="block_content_right">
      <center>
        <img src="images/home_7.jpg" width="250px" height="250" class=" reveal">
      </center>
      <div class="text reveal">
          <h2>What members do :</h2><br>
          <p>
            Supply to those in need from those who want to help
            create your team (if u can) to supply food(cook or uncooked)
          </p>
          <p>
            If possible, try to provide daily food using the concept of daily (1 roti from 1 family) ... if not, try to supply monthly food If possible, connect with the hotel and try to provide the remaining food to the needy.
        </p><br>
        <button type="button">Be a Member</button>
      </div>
    </div>
    
    <?php include 'other/footer.php';?>
    <script src="js/index.js"></script>
    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal(){
          var reveals = document.querySelectorAll('.reveal');

          for(var i = 0; i < reveals.length; i++){

            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;

            if(revealtop < windowheight - revealpoint){
              reveals[i].classList.add('reveal_active');
            }
            else{
              reveals[i].classList.remove('reveal_active');
            }
          }
        }
    </script>

    
  </body>
</html>