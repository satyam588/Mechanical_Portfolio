<?php
        // put your code here
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Deepu Kumar</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
        <sctript src="js/bootstrap.min.js" ></sctript>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="index.css">
        
        
        
    </head>
    <body>
       
        <!-- #################################################################################
        For Large Screen
        #################################################################################-->
        
        <!--Heroic Model-->
       
        <div class="heroic_model hidden-xs">
            
            <div class="container heroic_name">
                
                <div class="nav_bar">
                    <ul>
                        <a href="#"><li>About</li></a>
                        <a href="#"><li>My Work</li></a>
                        <a href="#"><li>Resume</li></a>
                        <a href="#"><li>Contact</li></a>
                        
                    </ul>
                    
                </div>
                
                <h1 class="h1">DEEPU</h1>
                <h1 class="h2">KUMAR</h1>
                <h1 class="h3">Mechanical Engineer</h1>
            </div>
        </div>
       
       <!--About Section-->
       <div class="container visible-lg">
           
        <div class="about_section">
           <div class="about_heading">
               <h1 style="font-family: impact;font-size: 28px">ABOUT ME</h1>
               <p style="font-family: gotham_book;font-size: 25px;padding: 0 50px 0 0;">THis is deepu this is deepu THis is deepu<br> this is deepu
                   THis is deepu this is deepu <br>THis is deepu this is deepu
               </p>
           </div>
        <div class="card">
            <div class="card_inner">
                <div class="card_content">
                    <img class="user_img" src="user.png">
                    <h1 class="card_data" style="font-size: 30px;font-family: gotham_book;font-weight: 600">C A D &nbsp;&nbsp; D E S I G N E R</h1>
                    <h1 class="card_data" style="font-size: 25px;font-family: gotham_book;padding: 5px 0">CATIA V5 | ANSYS &amp; MASTERCAM</h1>
                </div>
            </div>
        </div>
        </div>
       </div>
       
       <div class="container visible-lg">
           <h1 style="font-size: 28px;font-family: impact;float: right;margin-top: 150px">MY WORK</h1>
       </div>
       
       <!--Work Section-->
       <div class="container work visible-lg">
           
           <div>
            <div class="col-xs-4 thumbnail">
                <img class="work_img" src="user.png" >
                <div class="contnt" style="overflow:hidden">
                </div>
            </div>
           <div class="col-xs-4 thumbnail">
                <img class="work_img" src="user.png" >
                <div class="contnt" style="overflow:hidden">
                </div>
            </div>
            <div class="col-xs-4 thumbnail">
                <img class="work_img" src="user.png" >
                <div class="contnt" style="overflow:hidden">
                </div>
            </div>
           </div>
           
           <div align="center">
               <button class="btn btn-default btn_work_section">Learn More</button>
           </div>
       </div>
       
       <div class="container visible-lg">
           <h1 style="font-size: 28px;font-family: impact;float: right;margin-top: 80px;color: #000;">RESUME</h1>
       </div>
       <!--Resume Section-->
       
       <div class="resume_section visible-lg">
           <div class="container">
               <div class="row">
               <div class="col-xs-8">
                   <h1 style="color: #000;font-family: gotham_bold;padding: 10px;">Some Text Here</h1>
               <p style="color: #000;font-family: gotham_book;padding: 10px;font-size: 19px">SequentialGroup · addContainerGap(int pref, int max). Adds an element representing clone, equals</p>
               </div>
               
              <div align="center" class="col-xs-4">
                  <button class="btn btn-default btn_resume_section" style="margin: 70px;">View Resume</button>
              </div>
               </div>
           </div>
       </div>
       
       <div class="container visible-lg">
           <h1 style="font-size: 28px;font-family: impact;float: right;margin-top: 80px;color: #000;">GET IN TOUCH</h1>
       </div>
       
       <!--Contact Section-->
       <div class="container visible-lg">
           <div class="row" style="margin-top: 50px;font-family: gotham_book;">
               <div class="col-xs-5">
                   <form class="form-group" action="index.php" method="post">
                       
                       <input type="text" class="form-control name_field" placeholder="Your name" name="name">
                       
                       <input type="Email" class="form-control email_field" placeholder="Your name" name="email">
                       
                       <textarea type="text" class="form-control txt_field" rows="5" placeholder="Your message" name="msg"></textarea>
                       
                       <div>
                           <button class="btn btn-default btn_resume_section" style="margin-top: 40px;" name="sbmt_btn">SUBMIT</button>
                       </div>
                   </form>
               </div>
               
                <div class="col-xs-5" style="float: right">
                   <p class="get_in_touch_cntnt">Feel free to reach out. I'd love to hear from you !</p>
                   
                   <div class="info">
                       <table  class="table">
                           <tr>
                               <td><i class="fas fa-envelope"></i></td>
                               <td>Example123@gmail.com</td>
                           </tr>
                           
                           <tr>
                               <td><i class="fas fa-mobile-alt"></i></td>
                               <td>+91 9876543210</td>
                           </tr>
                       </table>
                   </div>
                   
                </div>
               
           </div>
       </div>
       
       <div class="footer visible-lg">
           <div class="container">
               <div class="row">
                   <div class="col-xs-3">
                       <h1 class="footer_name">D E E P U &nbsp K U M A R</h1>
                   </div>
                   
                   <div class="col-xs-6">
                       <p class="copyright">Copyright &copy; All rights reserved</p>
                   </div>
                   
                   <div class="col-xs-3">
                       <i class="fab fa-linkedin"></i>
                       
                       <i class="fab fa-google-plus-g"></i>
                       
                       <i class="fab fa-facebook"></i>
                       
                       <i class="fab fa-twitter"></i>
                   </div>
               </div>
           </div>
       </div>
       
       
       <!--###############################################################################
       For Medium screen
       ##################################################################################-->
       
       
       <!--About Section-->
       <div class="container visible-md">
           
        <div class="about_section">
           <div class="about_heading">
               <h1 style="font-family: impact;font-size: 28px">ABOUT ME</h1>
               <p style="font-family: gotham_book;font-size: 25px;padding: 0 50px 0 0;">THis is deepu this is deepu THis is deepu<br> this is deepu
                   THis is deepu this is deepu <br>THis is deepu this is deepu
               </p>
           </div>
            <div class="card" style="right: 60px;">
            <div class="card_inner" style="width: 330px;height: 350px;background-color: #595959;margin-top: -100px;">
                <div class="card_content">
                    <img class="user_img" src="user.png" style="width: 330px;height: 250px;">
                    <h1 class="card_data" style="font-size: 25px;font-family: gotham_book;font-weight: 600;margin: 30px 0;">C A D &nbsp;&nbsp; D E S I G N E R</h1>
                </div>
            </div>
        </div>
        </div>
       </div>
       
       <div class="container visible-md">
           <h1 style="font-size: 28px;font-family: impact;float: right;margin-top: 150px;color:#000;">MY WORK</h1>
       </div>
       
       <!--Work Section-->
       <div class="container work visible-md">
           
           <div>
            <div class="col-xs-4 thumbnail">
                <img class="work_img" src="user.png" >
                <div align="center">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book">Explore</button>
                </div>
             </div>
           <div class="col-xs-4 thumbnail">
                <img class="work_img" src="user.png" >
                <div align="center">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book">Explore</button>
                </div>
            </div>
            <div class="col-xs-4 thumbnail">
                <img class="work_img" src="user.png" >
                <div align="center">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book;">Explore</button>
                </div>
            </div>
           </div>
           
           <div align="center" class="visible-md">
               <button class="btn btn-default btn_work_section">Learn More</button>
           </div>
       </div>
       
       <div class="container visible-md">
           <h1 style="font-size: 28px;font-family: impact;float: right;margin-top: 80px;color: #000;">RESUME</h1>
       </div>
       <!--Resume Section-->
       
       <div class="resume_section visible-md">
           <div class="container">
               <div class="row">
               <div class="col-xs-8">
                   <h1 style="color: #000;font-family: gotham_bold;padding: 10px;">Some Text Here</h1>
               <p style="color: #000;font-family: gotham_book;padding: 10px;font-size: 19px">SequentialGroup · addContainerGap(int pref, int max). Adds an element representing clone, equals</p>
               </div>
               
              <div align="center" class="col-xs-4">
                  <button class="btn btn-default btn_resume_section" style="margin: 70px;">View Resume</button>
              </div>
               </div>
           </div>
       </div>
       
       <div class="container visible-md">
           <h1 style="font-size: 28px;font-family: impact;float: right;margin-top: 80px;color: #000;">GET IN TOUCH</h1>
       </div>
       
       <!--Contact Section-->
       <div class="container visible-md">
           <div class="row" style="margin-top: 50px;font-family: gotham_book;">
               <div class="col-xs-5">
                   <form class="form-group" action="index.php" method="post">
                       
                       <input type="text" class="form-control name_field" placeholder="Your name" name="name">
                       
                       <input type="Email" class="form-control email_field" placeholder="Your name" name="email">
                       
                       <textarea type="text" class="form-control txt_field" rows="5" placeholder="Your message" name="msg"></textarea>
                       
                       <div>
                           <button class="btn btn-default btn_resume_section" style="margin-top: 40px;" name="sbmt_btn">SUBMIT</button>
                       </div>
                   </form>
               </div>
               
                <div class="col-xs-5" style="float: right">
                   <p class="get_in_touch_cntnt">Feel free to reach out. I'd love to hear from you !</p>
                   
                   <div class="info">
                       <table  class="table">
                           <tr>
                               <td><i class="fas fa-envelope"></i></td>
                               <td>Example123@gmail.com</td>
                           </tr>
                           
                           <tr>
                               <td><i class="fas fa-mobile-alt"></i></td>
                               <td>+91 9876543210</td>
                           </tr>
                       </table>
                   </div>
                   
                </div>
               
           </div>
       </div>
       
       <div class="footer visible-md">
           <div class="container">
               <div class="row">
                   <div class="col-xs-3">
                       <h1 class="footer_name">D E E P U &nbsp K U M A R</h1>
                   </div>
                   
                   <div class="col-xs-6">
                       <p class="copyright">Copyright &copy; All rights reserved</p>
                   </div>
                   
                   <div class="col-xs-3">
                       <i class="fab fa-linkedin"></i>
                       
                       <i class="fab fa-google-plus-g"></i>
                       
                       <i class="fab fa-facebook"></i>
                       
                       <i class="fab fa-twitter"></i>
                   </div>
               </div>
           </div>
       </div>
       
       
       <!--###############################################################################
       For Small Screen
       ##################################################################################-->
       
       
       <!--About Section-->
       <div class="container visible-sm">
           
        <div class="about_section">
          
            <div class="card" style="position: relative;right: 0" align="center">
            <div class="card_inner" style="width: 330px;height: 350px;background-color: #595959;margin-top: -100px;">
                <div class="card_content">
                    <img class="user_img" src="user.png" style="width: 330px;height: 250px;">
                    <h1 class="card_data" style="font-size: 25px;font-family: gotham_book;font-weight: 600;margin: 30px 0;">C A D &nbsp;&nbsp; D E S I G N E R</h1>
                </div>
            </div>
            </div>
            
            <div class="about_heading" style="float: right !important;margin-top: 30px;">
               <h1 style="font-family: impact;font-size: 25px;text-align: right">ABOUT ME</h1>
               <p style="font-family: gotham_book;font-size: 25px;text-align: right">THis is deepu this is deepu THis is deepu this is deepu
                   THis is deepu this is deepu THis is deepu this is deepu
               </p>
            </div>
        </div>
       </div>
       
       <div class="container visible-sm">
           <h1 style="font-size: 25px;font-family: impact;float: right;margin-top: 50px;color:#000;">MY WORK</h1>
       </div>
       
       <!--Work Section-->
       <div class="container work visible-sm">
           
           <div>
            <div class="col-xs-4 thumbnail" style="padding: 0 5px;">
                <img class="work_img" src="user.png" >
                <div align="center" style="padding: 5px 10px">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book">Explore</button>
                </div>
            </div>
           <div class="col-xs-4 thumbnail" style="padding: 0 5px;">
                <img class="work_img" src="user.png" >
                <div align="center" style="padding: 5px 10px">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book">Explore</button>
                </div>
            </div>
            <div class="col-xs-4 thumbnail" style="padding: 0 5px;">
                <img class="work_img" src="user.png" >
                <div align="center" style="padding: 5px 10px">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book;">Explore</button>
                </div>
            </div>
           </div>
           
           <div align="center" class="visible-sm">
               <button class="btn btn-default btn_work_section" style="width: 165px;heigth: 45px;font-size: 15px">Learn More</button>
           </div>
       </div>
       
       <div class="container visible-sm">
           <h1 style="font-size: 25px;font-family: impact;float: right;margin-top: 80px;color: #000;">RESUME</h1>
       </div>
       <!--Resume Section-->
       
       <div class="resume_section visible-sm" style="margin-top: 20px;">
           <div class="container">
               <div class="row">
               <div class="col-xs-12">
                   <h1 style="color: #000;font-family: gotham_bold;padding: 10px;text-align: center;">Some Text Here</h1>
               <p style="color: #000;font-family: gotham_book;padding: 5px;font-size: 19px;text-align: center;">SequentialGroup · addContainerGap(int pref, int max). Adds an element representing clone, equals</p>
               </div>
               
              <div align="center" class="col-xs-4 col-xs-offset-4">
                  <button class="btn btn-default btn_resume_section" style="width: 165px;heigth: 45px;font-size: 15px;margin: 15px 0 15px 10px">View Resume</button>
              </div>
               </div>
           </div>
       </div>
       
       <div class="container visible-sm">
           <h1 style="font-size: 25px;font-family: impact;float: right;margin-top: 80px;color: #000;">GET IN TOUCH</h1>
       </div>
       
       <!--Contact Section-->
       <div class="container visible-sm">
           <div class="row" style="margin-top: 50px;font-family: gotham_book;">
               <div class="col-xs-6">
                   <form class="form-group" action="index.php" method="post">
                       
                       <input type="text" class="form-control name_field" placeholder="Your name" name="name">
                       
                       <input type="Email" class="form-control email_field" placeholder="Your name" name="email">
                       
                       <textarea type="text" class="form-control txt_field" rows="5" placeholder="Your message" name="msg"></textarea>
                       
                       <div>
                           <button class="btn btn-default btn_resume_section" style="width: 165px;heigth: 45px;font-size: 15px;margin-top: 40px;" name="sbmt_btn">SUBMIT</button>
                       </div>
                   </form>
               </div>
               
                <div class="col-xs-5" style="float: right">
                    <p class="get_in_touch_cntnt" style="font-size: 22px">Feel free to reach out. I'd love to hear from you !</p>
                   
                    <div class="info" style="margin-top: 100px;">
                       <table  class="table" style="margin-top: 100px;">
                           <tr>
                               <td><i class="fas fa-envelope"></i></td>
                               <td style="font-size: 17px;">Example123@gmail.com</td>
                           </tr>
                           
                           <tr>
                               <td><i class="fas fa-mobile-alt"></i></td>
                               <td style="font-size: 17px;">+91 9876543210</td>
                           </tr>
                       </table>
                   </div>
                   
                </div>
               
           </div>
       </div>
       
       
       <div class="footer visible-sm">
           <div class="container">
               <div class="row">
                   <div class="col-xs-6" align="left">
                       <h1 class="footer_name" style="font-size: 24px;">D E E P U &nbsp K U M A R</h1>
                   </div>
                   
                   <div class="col-xs-6" align="right">
                       <p class="copyright" style="font-size: 15px;text-align: right">Copyright &copy; All rights reserved</p>
                   </div>
                   
                   <div align="center" style="">
                       <i class="fab fa-linkedin" style="padding: 5px 9px 27px 9px;margin:  "></i>
                       
                       <i class="fab fa-google-plus-g" style="padding: 5px 9px 27px 9px; "></i>
                       
                       <i class="fab fa-facebook" style="padding: 5px 9px 27px 9px; "></i>
                       
                       <i class="fab fa-twitter" style="padding: 5px 9px 27px 9px; "></i>
                   </div>
               </div>
           </div>
       </div>
       
       
       <!--###############################################################################
       For Extra-Small Screen
       ##################################################################################-->
       
       <!--Heroic Model-->
       
        <div class="heroic_model visible-xs">
            
            <div class="container heroic_name">
                
                <div class="nav_bar" style="position: absolute;top: -120px">
                    <ul>
                        <a href="#"><li style="font-size: 14px;">About</li></a>
                        <a href="#"><li style="font-size: 14px">MyWork</li></a>
                        <a href="#"><li style="font-size: 14px">Resume</li></a>
                        <a href="#"><li style="font-size: 14px">Contact</li></a>
                        
                    </ul>
                    
                </div>
                
                <h1 class="h1" style="font-size: 70px">DEEPU</h1>
                <h1 class="h2" style="font-size: 100px">KUMAR</h1>
                <h1 class="h3" style="font-size: 35px">Mechanical Engineer</h1>
            </div>
        </div>
       
       
       <!--About Section-->
       <div class="container visible-xs">
           
        <div class="about_section">
          
            <div class="card" style="position: relative;right: 2px" align="center">
            <div class="card_inner" style="width: 300px;height: 320px;background-color: #595959;margin-top: -100px;">
                <div class="card_content">
                    <img class="user_img" src="user.png" style="width: 300px;height: 220px;">
                    <h1 class="card_data" style="font-size: 20px;font-family: gotham_book;font-weight: 600;margin: 30px 0;">C A D &nbsp;&nbsp; D E S I G N E R</h1>
                </div>
            </div>
            </div>
            
            <div class="about_heading" style="float: right !important;margin-top: 30px;">
               <h1 style="font-family: impact;font-size: 22px;text-align: right">ABOUT ME</h1>
               <p style="font-family: gotham_book;font-size: 20px;text-align: right">THis is deepu this is deepu THis is deepu this is deepu
                   THis is deepu this is deepu THis is deepu this is deepu
               </p>
            </div>
        </div>
       </div>
       
       <div class="container visible-xs">
           <h1 style="font-size: 22px;font-family: impact;float: right;margin-top: 50px;color:#000;">MY WORK</h1>
       </div>
       
       <!--Work Section-->
       <div class="container work visible-xs">
           
           <div>
            <div class="col-xs-6 thumbnail" style="padding: 0 5px;">
                <img class="work_img" src="user.png" >
                <div align="center" style="padding: 5px 10px">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book">Explore</button>
                </div>
            </div>
           <div class="col-xs-6 thumbnail" style="padding: 0 5px;">
                <img class="work_img" src="user.png" >
                <div align="center" style="padding: 5px 10px">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book">Explore</button>
                </div>
            </div>
            <div class="col-xs-6 thumbnail" style="padding: 0 5px;">
                <img class="work_img" src="user.png" >
                <div align="center" style="padding: 5px 10px">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book;">Explore</button>
                </div>
            </div>
               
            <div class="col-xs-6 thumbnail" style="padding: 0 5px;">
                <img class="work_img" src="user.png" >
                <div align="center" style="padding: 5px 10px">
                <button class="btn btn-primary btn-block" style="border-radius: 0;margin: 12px 0;background-color: #595959;font-family: gotham_book;">Explore</button>
                </div>
            </div>
           </div>
           
           <div align="center" class="visible-xs">
               <button class="btn btn-default btn_work_section" style="width: 155px;heigth: 40px;font-size: 14px">Learn More</button>
           </div>
       </div>
       
       <div class="container visible-xs">
           <h1 style="font-size: 22px;font-family: impact;float: right;margin-top: 80px;color: #000;">RESUME</h1>
       </div>
       <!--Resume Section-->
       
       <div class="resume_section visible-xs" style="margin-top: 20px;">
           <div class="container">
               <div class="row">
               <div class="col-xs-12">
                   <h1 style="color: #000;font-family: gotham_bold;padding: 10px;text-align: center;font-size: 27px;">Some Text Here</h1>
               <p style="color: #000;font-family: gotham_book;padding: 5px;font-size: 16px;text-align: center;">SequentialGroup · addContainerGap(int pref, int max). Adds an element representing clone, equals</p>
               </div>
               
              <div align="center">
                  <center>
                      <button class="btn btn-default btn_resume_section" style="width: 155px;heigth: 40px;font-size: 14px;margin: 15px 0 15px 10px">View Resume</button>
                  </center>
              </div>
               </div>
           </div>
       </div>
       
       <div class="container visible-xs">
           <h1 style="font-size: 22px;font-family: impact;float: right;margin-top: 80px;color: #000;">GET IN TOUCH</h1>
       </div>
       
       <!--Contact Section-->
       <div class="container visible-xs">
           <div class="row" style="margin-top: 50px;font-family: gotham_book;">
               <div class="col-xs-12">
                   <form class="form-group" action="index.php" method="post">
                       
                       <input type="text" class="form-control name_field" placeholder="Your name" name="name">
                       
                       <input type="Email" class="form-control email_field" placeholder="Your name" name="email">
                       
                       <textarea type="text" class="form-control txt_field" rows="5" placeholder="Your message" name="msg"></textarea>
                       
                       <div>
                           <button class="btn btn-default btn_resume_section" style="width: 155px;heigth: 40px;font-size: 14px;margin-top: 40px;" name="sbmt_btn">SUBMIT</button>
                       </div>
                   </form>
               </div>
               
                <div class="col-xs-12" style="float: right">
                    <p class="get_in_touch_cntnt" style="font-size: 20px">Feel free to reach out. I'd love to hear from you !</p>
                   
                    <div class="info" style="margin-top: -50px;">
                       <table  class="table" style="margin-top: -50px;">
                           <tr>
                               <td><i class="fas fa-envelope"></i></td>
                               <td style="font-size: 17px;">Example123@gmail.com</td>
                           </tr>
                           
                           <tr>
                               <td><i class="fas fa-mobile-alt"></i></td>
                               <td style="font-size: 17px;">+91 9876543210</td>
                           </tr>
                       </table>
                   </div>
                   
                </div>
               
           </div>
       </div>
       
       
       <div class="footer visible-xs">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12" align="center">
                       <h1 class="footer_name" style="font-size: 22px;">D E E P U &nbsp K U M A R</h1>
                   </div>
                   
                   <div class="col-xs-12" align="center">
                       <p class="copyright" style="font-size: 14px;margin-top: -50px;">Copyright &copy; All rights reserved</p>
                   </div>
                   
                   <div align="center">
                       <i class="fab fa-linkedin" style="padding: 5px 9px 27px 9px;margin-top: -10px;"></i>
                       
                       <i class="fab fa-google-plus-g" style="padding: 5px 9px 27px 9px;margin-top: -10px; "></i>
                       
                       <i class="fab fa-facebook" style="padding: 5px 9px 27px 9px;margin-top: -10px; "></i>
                       
                       <i class="fab fa-twitter" style="padding: 5px 9px 27px 9px;margin-top: -10px; "></i>
                   </div>
               </div>
           </div>
       </div>
   
    </body>
</html>


