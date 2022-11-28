
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    
        <title></title>
        <link rel="stylesheet" href="fonts/font.css">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
        <div class="left-box">
          <ul>
            <div class="user-info">
              <img src="product-images/logo.jpg" alt="">
              <span>Luca’s Loaves</span>
              <i class="icon icon-gear"></i>
          </div>
              <li class="item active" >
                  <i class="icon icon-file"></i>
                  <a href="index.php">Home</a> 
              </li>
              <li class="item">
                  <i class="icon icon-album"></i>
                  <a href="aboutus.php">About US </a>  
              </li>
              <li class="item">
                  <i class="icon icon-like"></i>
                  <a href="upload.php">Careers</a> 
              </li>
              <li class="item">
                  <i class="icon icon-vault"></i>
                  <a href="orderonline.php">Order online</a> 
              </li>
              <li class="item">
                  <i class="icon icon-favorite"></i>
                  <a href="contactus.php">Contact Us</a>   
              </li>
              <li class="item">
                  <i class="icon icon-trash"></i>
                  <a href="vip.php">register vip</a> 
              </li>
          </ul>
        </div>
<div class="right-box">
            <h1 class="middle">Join our team</h1>
            <p class="tall"> We are expanding our branches and need experienced baker regularly.</n>
                Send us your detail with the form below</br>
            and we will be in contact shortly</p>



            <div class="con">
           
                <div class="title">
                    <h2>Fill out the form below and upload your cover letter and resume</h2>
                    <form action="file_upload.php" method="POST"
            enctype="multipart/form-data">
 

         <div class="shuru">
        <label for="name">First name:</label>
        <input type="text" id="name" name="name"/><br>
        <label for="email">Last name:</label>
        <input type="text" id="email"name="email" /><br>
        <div class="ed"><label for="telephone">Email Address:</label></div>
        <input type="text" id="telephone" name="telephone"/><br>
        <div class="Workex"><label for="message">Work experience:</label></div>
        <textarea name="message" id="message" cols="30" rows="10"></textarea><br />
<p>
            Select files to upload:
            <br></br>
             
            <!-- name of the input fields are going to
                be used in our php script-->
            <input type="file" name="files[]" multiple><br>
            <input type="file" name="files[]" multiple>
            <br><br>
             
            <input type="submit" name="submit" value="Upload" >
        </p>
 
    </form>
                
                </div>	
            </div>
    </div>
</div>
          <footer  class="footer1">  
        creater is Jesse（Ye Zhouyi）
          </footer>
          <script src="script1.js"></script>
</body>
</html>

           
  
