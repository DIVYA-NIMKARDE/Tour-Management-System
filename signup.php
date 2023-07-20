<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

            echo '<script>alert("Signed up successfully !"); window.location = "home.html";</script>';
			die;
		}else
		{
            echo '<script>alert("Please enter valid information!"); window.location = "signup.php";</script>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .content{
            background-color: white;
            padding:4rem 1rem;
            box-shadow: 5px 5px 10px 10px rgb(3, 27, 29);
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
                                <li><a href="#popular-destinations" class="dropdown-item">Our Popular Tours</a></li>
                                <li><a href="summer.html" class="dropdown-item">Summer special</a></li>
                                <li><a href="winter.html" class="dropdown-item">Winter packages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="gallery.html" class="nav-link" style="font-size: 20px;">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link" style="font-size: 20px;">Login</a>
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
    <div class="heading p-5">
        <h1 class="text-center"style="font-size: 50px;color:white;font-weight: bolder; font-family: 'Courier New', Courier, monospace;"><i class="fas fa-plane-departure"></i>
            Wanderlust</h1>
        
        <br>
        <h4 class="caption" style="color: white; text-align:center;"><i>    Let your exploration begin...</i></h4>
    </div>   
    <div class="container">
        <div class="row content">
            <div class="col-sm-4">
                <img src="images/plane.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-sm-1"></div><br>
           
            <div class="col-sm-6">
                <div class="heading">
                    <p class="heading-title text-center" style="font-size: 30px;font-family: 'Courier New', Courier, monospace; font-weight: bolder; color: rgb(3, 27, 29);">Sign Up</p>
                </div>
                <form action="" method="post">
                    <div class="form-group m-2">
                        <label for="email">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="user_name">
                    </div>

                    <div class="form-group m-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" >

                    </div>
                    <div style="margin-left: 200px;">
                    <td >
               <input type = "submit" name = "submit" value = "Sign up"> 
            </td>
            </div>
         </table>
			
      </form>
      <h3>Already have an account?</h3>
      <a href="login.php" style="color: blue" >Login here</a>
                </div>
                </div>
        </div> 
        
            </div>
        </div>
    </div>
</body>
</html>