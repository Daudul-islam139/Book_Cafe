<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" type="image/png"  href="img/logo4.png" sizes="16x4">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->	
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">	
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-9/css/all.min.css" rel="stylesheet"> -->	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="stylesheet" href="style1.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->

        <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
        <!-- CSS only -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />  <link
      rel="stylesheet"
      type="text/css"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->

  <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<style>
  ::placeholder{
    color: black;
    /* border-radius:10px;
     background-color: rgb(60,170,144,0.5);	 */
     /* border: none; */
  }
</style> 


    </head>
    <body>
<section class="header"style="height:120vh">
   <nav>
   <div class="book_icon">
                <!-- <i class="fas fa-book-open"></i> -->
                <!-- <h2 style="margin-bottom: 50px">Book Cafee</h2> -->
                <a style="text-decoration:none;margin-bottom: 50px;" href="dashboard.php"><h2 style="margin-bottom: 50px">Book Cafee</h2></a>

              </div>
          <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
            <ul style="margin-top: -100px" >
            <li><form action="searchengine.php" method="GET">
<input style="border-radius:10px;
     background-color: rgb(60,170,144,0.5); border: none; padding:3px;	"type="text" name="query" placeholder="search here"/>
<!-- <input type="submit" value="Search" /> -->
<i style=" color:rgb(6, 209, 245); font-size: 20px; margin-top: -50px" class="fas fa-search"></i>
</form></li>
           <li><a href="#footer">ABOUT</a></li>
           <li><a href="https://www.google.com/maps/place/Bangladesh+Army+International+University+of+Science+and+Technology+(BAIUST)/@23.4770978,91.1114967,17z/data=!4m12!1m6!3m5!1s0x37547b8b07235dcd:0x1f168ba787f7f6d2!2sBangladesh+Army+International+University+of+Science+and+Technology+(BAIUST)!8m2!3d23.4770929!4d91.1136854!3m4!1s0x37547b8b07235dcd:0x1f168ba787f7f6d2!8m2!3d23.4770929!4d91.1136854">CONTACT</a></li>
           <li><a href="profile.php">PROFILE</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
            <li><a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style ="background-color:rgba(0,0,0,0.01);border: 0px">CATEGORIES
                </a>

                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item"  href="dashboard2.php?item=Bangla Literature">Bangla Literature</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Nobels">Nobels</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Poems">Poems</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Story">Story</a></li>
    <li><a class="dropdown-item"  href="dashboard2.php?item=Fantasy">Fantasy</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Horror">Horror</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Advanture">Advanture</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Comics">Comics</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Cookings">Cookings</a></li>
    <li><a class="dropdown-item" href="dashboard2.php?item=Journals">Journals</a></li>
  
  
  
  </ul></li>     
    </li>
    <li> 
  
  
  <!-- if condition to check user type--> 
 
    <?php if($user_data['user_type'] =="Admin"){ ?> 
     <a href="bookupload.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true" style="witdh:50px"><i class="mdi mdi-cloud-upload" aria-hidden="true"style ="color:rgb(6, 209, 245);font-size:30px"></i></a></li>
     <li ><a href="orders.php"><i class="fas fa-dolly" style="font-size: 30px; color:rgb(6, 209, 245)"></i></a></li>	

     <?php} ?>
    <?php }else{
} ?>
<?php if($user_data['user_type'] =="User"){ ?> 
     <a href="cart.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true" style="witdh:50px"><i class="mdi mdi-cart" aria-hidden="true"style ="color:rgb(6, 209, 245);font-size:30px"></i></a></li>
    <?php} ?>
    <?php }else{
} ?>


            </ul> 
           



    
      
    </div>

                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
      



  
        <div class="text-box">
         
          <h1>Book Cafee</h1>
          
           <p1> Hello </p1> <br />
           <p> 

            <?php echo $user_data['user_name']; ?>
          </p>
          <a href="#footer" class="hero-btn">Visit US To Know More</a>
        </div>
      </section>
      <br>
<!-- start -->

<center>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width:700px;max-height:393x;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/BookCafee.jpg" class="d-block w-100" alt="..."style="width:30px">
    </div>
    <div class="carousel-item">
      <img src="img/comics.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/offer.png" class="d-block w-100" alt="...">
    </div>
   
    <div class="carousel-item">
      <img src="img/horror.jpg" class="d-block w-100" alt="...">
    </div>
     
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</center>
      <!-- DEMO BOOK -->
      <section class="books">
        <h1 style="font-size:40px;
     font-weight:bold;">Some Books</h1>
        <p style="padding-bottom:10px;">
        Some of Best Selling & Reviewed Books
        </p>

        <!-- TEST -->
        <?php
        $i=0;
        $res=mysqli_query($con,"SELECT * FROM `books`;");
        $rows = $res->num_rows; 
        if($rows > 0) {
          $cols = 3;    // Define number of columns
          $counter = 1;     // Counter used to identify if we need to start or end a row
          $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
          $run=0;

          $container_class = 'container-fluid';  // Parent container class name
          $row_class = 'row';    // Row class name
          $col_class = 'col-sm-4'; // Column class name
       
              echo '<div class="'.$container_class.'">'; 
        while($row= mysqli_fetch_array($res)) 
             {    $run++;
                if(($counter % $cols) == 1 ) {    // Check if it's new row
              echo '<div class="'.$row_class.'">';	// Start a new row
            }            
            if($run<10)  {
            echo '<div class="'.$col_class.'">
            <a href="dashboard2.php?item='.$row['categories'].' "> <img src="data:image;base64,'.base64_encode($row['image']).' "width="150" height="160" ></a>
             <h3>'.$row['book_name'].'</h3>
                  <p3>'.$row['author_name'].'</p3><br>
                  <p3>Rating : '.ceil($row['rating']).'</p3>         
                  <p3><br><br><br></p3>
                  </div>';   
            }
                  // Column with content
    if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
                                   echo '</div>';	 //  Close the row
                                }
                            $counter++;    // Increase the counter
               }
                $res->free();
            if($nbsp > 0) { // Adjustment to add unused column in last row if they exist
              for ($i = 0; $i < $nbsp; $i++)	{ 
                echo '<div class="'.$col_class.'">&nbsp;</div>';		
                      }
                echo '</div>';  // Close the row
                    }
                echo '</div>';  // Close the container
                    }
                    ?>
        
      </section>

  <!-- Footer -->
  
  <footer class="bg-dark text-center text-white"id="footer">
 
  <h4 style="padding:20px;font-size:30px;font-weight:bold;" >About Us</h4>
    <p>
    We are trying to give books from our book cafe very easily and at low cost.<br> Since people are
     not interested in reading books now, we have taken this initiative.<br> Hopefully we will be
                    able to deliver books to everyone's doorsteps
    </p>
 
 
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fa fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fa fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fa fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color:  #ac2bac;"
        href="#!"
        role="button"
        ><i class="fa fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  <p>Made With <i class="fa fa-heart-o"></i> By Books & Souls</p>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright : 
    <a class="text-white" href="https://github.com/Daudul-islam139">Git Hub</a>
  </div>

   
 <!-- Copyright -->
</footer>

      <!-- Javascript for toggole menu  -->
    <script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
          navlinks.style.right = "0";
        }
        function hidemenu() {
          navlinks.style.right = "-200px";
        }
      </script>
</body>
</html>