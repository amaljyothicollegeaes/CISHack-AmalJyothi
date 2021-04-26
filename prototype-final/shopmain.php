<?php
session_start();
?>
<?php
if(!isset($_SESSION['firstName'])) {
   header("location:./login.html");
}
    ?>
<html>
  
    <head>
        <head>
          
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />

            <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="keywords" content="Intanety Technology" />
      <meta name="description" content="Covid Tracker is an initiative by a group of students in kerala" />
      <meta name="author" content="potenzaglobalsolutions.com" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <title>Covid Tracker</title>
      <link rel="shortcut icon" href="lgonn.png" />
 <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script type="text/javascript" src="./QRgeneration/jquery.min.js"></script>
<script type="text/javascript" src="./QRgeneration/qrcode.js"></script>


 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
<title>Covid Tracker</title>
            
            <!-- Favicon -->
            
            
            <!-- font -->
            <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
             
            <!-- Plugins -->
            <link rel="stylesheet" type="text/css" href="css/plugins-css.css" />
            
            <!-- Typography -->
            <link rel="stylesheet" type="text/css" href="css/typography.css" />
            
            <!-- Shortcodes -->
            <link rel="stylesheet" type="text/css" href="css/shortcodes/shortcodes.css" />
            
            <!-- Style -->
            <link rel="stylesheet" type="text/css" href="css/style.css" />
            
            <!-- Responsive -->
            <link rel="stylesheet" type="text/css" href="css/responsive.css" /> 
              
            <style>
         
                #scaning{background-color:#84ba3f;text-align: center;}
                #profile{background-color:rgb(110, 110, 110);text-align: center;}
                #signout{background-color:rgb(212, 212, 212);text-align: center;color: black ;}
                .col-md-4{padding-top: 9%;color:aliceblue}
                #display{background-color: rgb(255, 255, 255);text-align: center;}
                .row{ height: 40%; }
                #qr{background-color: rgba(112, 216, 155, 0.603);height: 80%;}
                #discription{text-align: center;color: white;margin-top: auto;margin-bottom: auto;}
                /* #qrcode {width:160px;height:160px;margin-top:15px;} */
                

            </style>
  
            </head>
            
            <body  style="background: url(images/login/09.jpg);">
                
             
            <div class="wrapper">
            
            <!--=================================
             preloader -->
             
           
            <!--=================================
             preloader -->
            
            
            <!--=================================
             header -->
            
            <header  class="headermainshop">
                
                <div class="heads">
                          <b><div>  <?php
                            echo $_SESSION['shopnames'];
                            ?>
                          </div></b>
                        
                       Welcome to C-Tracker system 
                      
                        </div>
                      
                       
                 
            </header>
           
            <div class="row">
                <div class="col-md-4" id="scaning">
                    <svg width="35%" height="35%" viewBox="0 0 16 16" class="bi bi-upc-scan" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                      </svg><br>My QR Code
                </div>
                <div class="col-md-4" id="profile">
                    <svg width="35%" height="35%" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                  </svg><div><?php
                            echo $_SESSION['firstName'];
                            ?></div></div>
        
                <div class="col-md-4" id="signout" onclick='unset_session()' >
                    <SVG width="25%" height="25%" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </SVG><br>Sign out
            
                </div>
              </div>
            </div>
            <div class="row" id="qr">
                <div class="col-sm-6" id="display"><br>
                    <div id="qrcode" style="width:50%; height:60%;margin-top:25%;margin-left: auto;margin-right: auto;">
                                    
                    </div>
                    Download this QR Code
                <script type="text/javascript">
                  


                    var qrcode = new QRCode(document.getElementById("qrcode"), );
                  // const url = window.location.search;
                  
                  // const urlParams = new URLSearchParams(url);
                  // console.log(urlParams.toString());
                  // const mobile = urlParams.get('mobile');
                  // console.log(mobile);
                  // const shopName = urlParams.get('shopname');
                  // console.log(shopName);
                 


                  // document.getElementById("shopName").innerHTML = shopName;
                var shopnames=' <?php
                            echo $_SESSION['shopnames'];
                            ?>';
                var mobile=' <?php
                            echo $_SESSION['mobile'];
                            ?>'
                  qrcode.makeCode(shopnames+mobile);
                    // function makeCode () {		
                    //     qrcode.makeCode("sabu,rdsdf");
                    // }
                    
                    // makeCode();
                    // $("#text").
                    //     on("blur", function () {
                    //         makeCode();
                    //     }).
                    //     on("keydown", function (e) {
                    //         if (e.keyCode == 13) {
                    //             makeCode();
                    //         }
                    //     });
                    </script>
                    
            </div>
                <div class="col-sm-6"id="discription">The QR code generated contains your shop name in it.
                Click once on the QR code to download it.<br>
                Insert it into an SD card which is to be placed into the device.</div>

              </div>
              
    </body>
    <script>
   function unset_session(){

    
    document.location.href='./logout.php';
    

   }
    </script> 
</html>