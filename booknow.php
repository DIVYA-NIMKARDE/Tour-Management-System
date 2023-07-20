<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <style>
        body{
            background-image: url("images/bg6.jpg");
            background-repeat: repeat;
            background-size: cover;
            height: 100%;
        }
        caption{
            font-family: italic;
            color: white;
            font-size: 20px;
            text-align: center;
        }
        .button {
  font: bold 20px Arial;
  text-decoration: none;
  background-color: rgb(30, 26, 245);
  color: white;
  padding: 10px;
  border: none;
}
.login{
            width:200px;
            height: 50px;
            margin-bottom: 30px;
            padding : 5px;
            text-align: center;
            margin-left: 150px;
           
        }
        .box{
            width: 500px;
            height: 400px;
            border: 5px solid black;
            padding: 10px;
            align-content:center;
            margin-top: 10px;
            margin-bottom : 0px;
            background-color: white;
            margin-left: 270px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color:rgb(3, 27, 29) ;">
        <div class="container-fluid" >
            <a href="home.html" class="navbar-brand" style="font-size: 40px; font-family: 'Courier New', Courier, monospace;">Wanderlust</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="aboutus.html" class="nav-link" style="font-size: 20px;">About us</a>
                    </li>
                    <li class="nav-item dropdown" >
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-size: 20px;">Tours</a>
                        <ul class="dropdown-menu dropdown-menu-dark"  style="background-color:rgb(3, 27, 29);font-size:17px;font-family: 'Courier New', Courier, monospace;font-weight: bolder;">
                                <li><a href="popular.html" class="dropdown-item">Our Popular Tours</a></li>
                                <li><a href="summer.html" class="dropdown-item">Summer special</a></li>
                                <li><a href="winter.html" class="dropdown-item">Winter packages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.html" class="nav-link" style="font-size: 20px;">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link" style="font-size: 20px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="feedback.html" class="nav-link" style="font-size: 20px;">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.html" class="nav-link" style="font-size: 20px;">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link" style="font-size: 20px;">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
</nav>

        <div class="box">
                <div class="center" style="text-align:center;">
                <h1 class="login">Book now</h1>
               
                <div class="sub-class">
                <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "user_name">
                  <!--<span class = "error">* <?php echo $nameErr;?></span>-->
               </td>
            </tr>
           
            <tr>
               <td>Email </td>
               <td><input type = "email" name = "email">
                 <!-- <span class = "error">* <?php echo $emailErr;?></span>-->
               </td>
            </tr>   
           <br>
        
			<span style="text-align:center;">	
            <td>
            <div class="container-fluid" >
            <input type = "submit" name = "submit" value = "Confirm booking" onclick="myFunction()">
            
            
                            <script>
                                function myFunction() {
                                  alert("Booking confirmed! Details of the tour will be emailed to you! Enjoy your vacation");
                                }
                                </script>
        
                
            </td></span>
				
         </table>
			
      </form>
      <br><br><br>
      
</body>
</html>