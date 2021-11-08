<?php
// require_once 'classes/dbcon.php';
// require_once 'classes/Login.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link href="css/desktop.css" media="screen and (min-width: 1024px)and (min-height: 300px)" rel="stylesheet" type="text/css">
    <link href="images/redcoin.png" rel="shortcut icon">
  <title>Cent a Feed</title>
</head>
  <body bgcolor="#15171c" text="#000000" link="#006699" vlink="#006699" alink="#006699">
    <div id="outer_container">
      <div class="sign_container">
        <div class="sign_div" style="display: flex; margin: 20px;">
          <div style="display: flex;" id="logoDiv">
            <img src="images/redcoin.png" class="picture" style="width: 115px; height: 115px;">
            <div style="font-weight: bold; font-size: 22px; font-family: sans-serif; color: white; padding-top: 46px;">Cent a Feed</div>
          </div>
          <div id="searchContainer" style="display: flex; width: 44%; height: 50px; margin-left: 30px; margin-top: 30px; margin-bottom: 8px; outline: none; border: thick solid #2d2d2d; border-radius: 25px; background-color: #272727; font-size: 80%; font-family: sans-serif;">
            <input id="searchDiv" data-find="<?php echo $user; ?>" type="text" name="find" placeholder="Search..." style="width: 90%; height: 50px; padding-left: 20px; outline: none; border: none; background-color: transparent; font-size: 20px; font-weight: bold; color: #eaeaea;">
            <img src="images/search.png" id="searchButtonGrey" style="width: 25px; height: 25px; margin-top: 13px; margin-left: auto; margin-right: 12.5px;">
            <img src="images/searchred.png" id="searchButtonRed" style="display: none; width: 45px; height: 45px; margin-top: 3px; margin-left: auto; margin-right: 3px;">
          </div>
          <div style="display: flex; width: 40%; height: 20px; margin-top: 50px; margin-left: auto; font-weight: bold; font-size: 18px; font-family: sans-serif; justify-content: center;">
              <span style="margin-left:20px; color: white;">About us</span>
              <span style="margin-left:20px; color: white;">Terms & Conditions</span>
              <span style="margin-left:20px; color: white;">Privacy Policy</span>
              <span style="margin-left:20px; color: white;">|</span>
              <span style="margin-left:20px; color: white;">Login</span>
              <span style="margin-left:20px; color: white;">Create Account</span>
          </div>
        </div>
      </div>
      <div style="display: flex; margin-left: 292px; margin-bottom: 50px; color: #7d7d7d; font-size: 33px;">
        <div id="minfilter" style="display: flex; width: 10%; outline: none; border: 2px solid #2d2d2d; border-radius: 25px; background-color: #272727; font-family: sans-serif;">
          <div style="margin-top: 11px; margin-left: 10px;font-size: 17px;">R</div>
          <input id="minimum" type="text" name="minimum" placeholder="min price" style="width: 90%; height: 40px; padding-left: 5px; outline: none; border: none; background-color: transparent; font-size: 17px; font-weight: bold; color: #eaeaea;">
        </div>
        <span style="margin-left: 20px; margin-right: 20px;"> - </span>
        <div id="maxfilter" style="display: flex; width: 10%; outline: none; border: 2px solid #2d2d2d; border-radius: 25px; background-color: #272727; font-family: sans-serif;">
          <div style="margin-top: 11px; margin-left: 10px;font-size: 17px;">R</div>
          <input id="maximum" type="text" name="maximum" placeholder="max price"style="width: 90%; height: 40px; padding-left: 5px; outline: none; border: none; background-color: transparent; font-size: 17px; font-weight: bold; color: #eaeaea;">
        </div>
        <div style="font-size: 22px; font-family: sans-serif; margin-top: 9px; margin-left: 30px; color: #6cb7f3;">Go</div>
      </div>
      <div style="font-size: 30px; font-family: sans-serif; color: #cbcbcb; margin-left: 293px; margin-bottom: 10px;">Latest Feed</div>
      <div style="padding-left: 280px; background-color: #15171c;">
        <div style="display: flex; width: 66%; height: auto; padding: 15px; margin-bottom: 30px;"> <!-- background-color: #3c4756; -->
          <div style="width: 250px; height: 200px; background-color: white; border-radius: 5px;">
            <img src="images/jblGO3.jpeg" class="productImage" style="width: 200px; height: 200px;">
          </div>
          <div style="width: 50%; margin-left: 30px; font-family: sans-serif; ">
            <div style="font-size: 20px; color: #cbcbcb; margin-bottom: 5px;">JBL Go 3 Waterproof Portable Bluetooth Speaker Black</div>
            <div style="font-size: 15px; color: #cbcbcb;">The JBL Go 3 features bold styling and rich JBL Pro Sound, with its new eye-catching edgy design colourful fabrics and expressive details... <span style="font-weight: bold;">more</span></div>
            <div style="border: 2px solid #2d2d2d; border-radius: 5px; padding: 5px; margin-top: 10px; margin-bottom: 10px; background-color: #272727;">
              <div style="font-size: 18px; color: #6cb7f3; margin-bottom: 2px;">Takealot.com</div>
              <div style="font-size: 25px; font-weight: bold; color: #cbcbcb;">R649.00</div>
            </div>
            <div style="font-size: 18px; font-weight: bold; color: #cbcbcb; margin-top: 10px; margin-left: 5px;">
              <span style="margin-right:10px;">Like 0</span>
              <span style="margin-right:40px;">Dislike 0</span>
              <span>Comments 0</span>
            </div>
          </div>
        </div>
        <div style="display: flex; width: 66%; height: auto; padding: 15px; margin-bottom: 30px;"> <!-- background-color: #3c4756; -->
          <div style="width: 250px; height: 200px; background-color: white; border-radius: 5px;">
            <img src="images/jblGO2.jpeg" class="productImage" style="width: 200px; height: 200px;">
          </div>
          <div style="width: 50%; margin-left: 30px; font-family: sans-serif; ">
            <div style="font-size: 20px; color: #cbcbcb; margin-bottom: 5px;">JBL - Go 2 Portable Bluetooth Speaker - Black</div>
            <div style="font-size: 15px; color: #cbcbcb;">JBL GO 2 Portable Bluetooth Waterproof Speaker The JBL GO 2 is a full-featured waterproof cover to take with you everywhere you need.... <span style="font-weight: bold;">more</span></div>
            <div style="border: 2px solid #2d2d2d; border-radius: 5px; padding: 5px; margin-top: 10px; margin-bottom: 10px; background-color: #272727;">
              <div style="font-size: 18px; color: #6cb7f3; margin-bottom: 2px;">Amazon.com</div>
              <div style="font-size: 25px; font-weight: bold; color: #cbcbcb;">R499.00</div>
            </div>
            <div style="font-size: 18px; font-weight: bold; color: #cbcbcb; margin-top: 10px; margin-left: 5px;">
              <span style="margin-right:10px;">Like 0</span>
              <span style="margin-right:40px;">Dislike 0</span>
              <span>Comments 0</span>
            </div>
          </div>
        </div>
        <div style="display: flex; width: 66%; height: auto; padding: 15px; margin-bottom: 30px;"> <!-- background-color: #3c4756; -->
          <div style="width: 250px; height: 200px; background-color: white; border-radius: 5px;">
            <img src="images/jblGO3.jpeg" class="productImage" style="width: 200px; height: 200px;">
          </div>
          <div style="width: 50%; margin-left: 30px; font-family: sans-serif; ">
            <div style="font-size: 20px; color: #cbcbcb; margin-bottom: 5px;">JBL Go 3 Waterproof Portable Bluetooth Speaker Black</div>
            <div style="font-size: 15px; color: #cbcbcb;">The JBL Go 3 features bold styling and rich JBL Pro Sound, with its new eye-catching edgy design colourful fabrics and expressive details... <span style="font-weight: bold;">more</span></div>
            <div style="border: 2px solid #2d2d2d; border-radius: 5px; padding: 5px; margin-top: 10px; margin-bottom: 10px; background-color: #272727;">
              <div style="font-size: 18px; color: #6cb7f3; margin-bottom: 2px;">Takealot.com</div>
              <div style="font-size: 25px; font-weight: bold; color: #cbcbcb;">R649.00</div>
            </div>
            <div style="font-size: 18px; font-weight: bold; color: #cbcbcb; margin-top: 10px; margin-left: 5px;">
              <span style="margin-right:10px;">Like 0</span>
              <span style="margin-right:40px;">Dislike 0</span>
              <span>Comments 0</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    $("[data-find]").focus(function(){
      $("#searchContainer").css("border", "thick solid #b32116");
    });

    $("[data-find]").blur(function(){
      $("#searchContainer").css("border", "thick solid #2d2d2d");
    });

    $("[data-find]").keyup(function(){
      var text = $("[data-find]").val();

      if (text != '') {

        $("#searchButtonGrey").hide();
        $("#searchButtonRed").show();

      } else {

        $("#searchButtonGrey").show();
        $("#searchButtonRed").hide();

      }

    });


    $("#minimum").focus(function(){
      $("#minfilter").css("border", "2px solid #b32116");
    });

    $("#minimum").blur(function(){
      $("#minfilter").css("border", "2px solid #2d2d2d");
    });

    $("#maximum").focus(function(){
      $("#maxfilter").css("border", "2px solid #b32116");
    });

    $("#maximum").blur(function(){
      $("#maxfilter").css("border", "2px solid #2d2d2d");
    });
  </script>
</html>
