<!DOCTYPE html>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['firstName'])) {
   header("location:./login.html");
} 
?>

<html lang="en">
<head>
 <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="Intanety Technology" />
      <meta name="description" content="Covid Tracker is an initiative by a group of students in kerala" />
      <meta name="author" content="potenzaglobalsolutions.com" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <title>Covid Tracker</title>

<!-- Favicon -->
<link rel="shortcut icon" href="lgonn.png" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
 
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="css/plugins-css.css" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- waves -->
<link rel="stylesheet" type="text/css" href="demo-specialty-pages/waves/css/waves.css" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" /> 

<style type="text/css">
  body {
      width: 100%;
      text-align: center;
  }

  img {
      border: 0;
  }

  #main {
      margin: 15px auto;
      background: white;
      overflow: auto;
      width: 100%;
  }

  #header {
      background: white;
      margin-bottom: 15px;
  }

  #mainbody {
      background: white;
      width: 100%;
      display: none;
  }

  #footer {
      background: white;
  }

  #v {
      width: 320px;
      height: 240px;
  }

  #qr-canvas {
      display: none;
  }

  #qrfile {
      width: 320px;
      height: 240px;
  }

  #mp1 {
      text-align: center;
      font-size: 35px;
  }

  #imghelp {
      position: relative;
      left: 0px;
      top: -160px;
      z-index: 100;
      font: 18px arial, sans-serif;
      background: #f0f0f0;
      margin-left: 35px;
      margin-right: 35px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-radius: 20px;
  }

  .selector {
      margin: 0;
      padding: 0;
      cursor: pointer;
      margin-bottom: -5px;
  }

  #outdiv {
      width: 320px;
      height: 240px;
      border: solid;
      border-width: 3px 3px 3px 3px;
  }

  #result {
      border: solid;
      border-width: 1px 1px 1px 1px;
      padding: 20px;
      width: 70%;
  }

  ul {
      margin-bottom: 0;
      margin-right: 40px;
  }

  li {
      display: inline;
      padding-right: 0.5em;
      padding-left: 0.5em;
      font-weight: bold;
      border-right: 1px solid #333333;
  }

  li a {
      text-decoration: none;
      color: black;
  }

  #footer a {
      color: black;
  }

  .tsel {
      padding: 0;
  }
</style>
<script>
    
</script>
<script type="text/javascript" src="./camqr/llqrcode.js"></script>
<script type="text/javascript" src="./camqr/plusone.js"></script>
<script type="text/javascript" src="./camqr/webqr.js"></script>

<script> var mob =' <?php echo $_SESSION['mobile']; ?>';
        document.cookie ="mobile= "+mob+";path=/";
</script>
<!-- <>function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    var user = getCookie("usernames");
    if (user != "") {
      alert("Welcome again " + user);
    } else {
      user = prompt("Please enter your name:", "");
      if (user != "" && user != null) {
        setCookie("username", user, 365);
      }
    }
  }</> -->

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
 
<div class="wrapper">

<div class="coming-soon-effects scrollbar" style="background: url('demo-specialty-pages/waves/images/pattern.png') repeat; background-size: initial !important;">

 
<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

 <!--=================================
 logo -->
 
 
    <div class="logo text-center mb-30 mt-30 pos-r">
      
      <a href="index-01.html"><img class="logo-small" id="logo_img" src="lgonn.png" alt="logo"> </a>
    </div>
 
 
 <!--=================================
 logo -->
 
<!--=================================
 coming-soo-->

<section class="page-section-ptb coming-soon">
  <div class="container">
    <div class="row justify-content-center">
       <div class="col-lg-8">
       <div class="section-title text-center"> 
          <h1 class="text-white">Welcome <div id='fnamez'>
          <?php 
          echo $_SESSION['firstName'];
          
          
          ?>
          </div> <div id='username'></div></h1>
          <div id="mainbody">
              <p class="mb-30 text-white">* Make sure you place the phone infront of the QR code.</p>
            <p class="mb-30 text-white">* If token is not generated, reload the page and try again.</p>
            <table class="tsel" border="0" width="100%">
                <tr>
                    <td valign="top" align="center" width="50%">
                        <table class="tsel" border="0">
                            <tr>
                                <td><img class="selector" id="webcamimg" onclick="setwebcam()" align="left" /></td>
                                <button class="button" onClick="window.location.reload();">Turn camera</button>

                                <td><img class="selector" id="qrimg"  onclick="setimg()" align="right" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <div id="outdiv">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                       
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <div id="result"></div>
                        
                    </td>
                </tr>
            </table>
            
        </div>&nbsp;
        </div>
       </div>
     </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 text-center">
          
        <div class="coming-soon-form text-center contact-form transparent-form clearfix mt-30">
            
            <p class="mb-30 text-white">* After your shopping is completed make sure you press <mark><b><i>'GENERATE EXIT TOKEN'</i></b></mark>  inorder to generate the exit pass which will be verified in the exit gate. </p>
            <p class="mb-30 text-white">* Kindly ensure that you generate the exit pass once you reach the gate as it contains the time of pass generation. </p>
            <p class="mb-30 text-white">HAVE A SAFE SHOPPING !! </p>

            <div id="mc_embed_signup_scroll">
                <form method="POST"  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                 
                  <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                      <button type="submit" onclick="time()" id="mc-embedded-subscribe" class="button mt-20 form-button">  GENERATE EXIT TOKEN</button>
                      
                    </div>
                    <div>
                        <br>
                    <a href="./logout.php" class="button" style="color: red;">logout</a>
                    </div>
                  </form>
              </div>
       </div>
     </div>
    </div>
  </div>
 </section>

<!--=================================
 coming-soo-->
  
 </div>
</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>  
</body>
<!--=================================
 jquery -->
<!-- jquery -->

<script src="js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>

<!-- custom -->
<script src="js/custom.js"></script>


<script src="./exit_time.js"></script>
 <canvas id="qr-canvas" width="800" height="600"></canvas>
    <script type="text/javascript">
        load();
    </script>

 

<!-- waves -->
<script type="text/javascript" src="demo-specialty-pages/waves/js/wavess.js"></script>
</html>