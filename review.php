<?php 
if(isset($_POST['save'])){


$server= $server = "localhost";
$username = "root";
$password = "";
$db = "donation"; 

$conn = mysqli_connect($server, $username, $password, $db);


$firstname = $_POST["name"];
$work = $_POST["work"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$decription = $_POST["decription"];

// -----Image----------

$filename=$_FILES["uploadimage"]["name"];
$temname=$_FILES["uploadimage"]['tmp_name'];
$folder="images/".$filename;
move_uploaded_file($temname,$folder);

$sql="INSERT INTO `donation`.`review` (`id`, `name`,`work`, `email`, `phone`, `image`, `decription`) VALUES ('$firstname','$work', '$email', '$phone','$folder','$decription',current_timestamp())";
    
$result = mysqli_query($conn, $sql);

if ($result)
{
    echo "<script>alert('Your Query is submitted, we will reach you soon And \"Thank you $firstname\"');
window.location='index.php';
</script>";
}
else
{
    echo "<script>alert('Your data not submitted.');
window.location='donateForm.php';
</script>";
}

$conn->close();

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonationWebsite</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <!-- FONTS awasome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!--GOOGLE FONTS-->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">  

 
</head>

<body>
  <?php include 'header.php'; ?>

     <section class="text-light" style="background-color: rgb(130, 130, 130);">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4 background1 text-light p-2 mt-4"
              style="border-bottom: 10px solid rgb(94, 92, 92); border-radius: 50px;">Reviews</h3>
            <h4 class="mb-4 pb-2 mb-md-5 pb-md-0 fst-italic ">
              <b> We are very Happy for Reviews.What's are people saying about this
              </b>
            </h4>
          </div>
        </div>
      
        <div class="row text-center">
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="images/p15.jpeg" class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Mohan Rathi</h5>
            <h6 class="text-warning mb-3">Farmar</h6>
            <p class="px-xl-3">
              <i class="bi bi-quote-left pe-2"></i>I am vary jolly to shering my thoughts or my views,This is good Work when i need money then its help me !! ✨✨
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star-half-alt fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="images/p14.jpeg" class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Ajay Pal🙂🙂</h5>
            <h6 class="text-warning mb-3">Artisan</h6>
            <p class="px-xl-3">
              <i class="bi bi-quote-left pe-2"></i>Hello guys Thanks for provide me Blood.✨✨✌️
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-0">
            <div class="d-flex justify-content-center mb-4">
              <img src="images/th.jpeg" class="rounded-circle shadow-1-strong" width="150" height="150" />
            </div>
            <h5 class="mb-3">Abhi Thakur😊😊</h5>
            <h6 class="text-warning mb-3">Watch man</h6>
            <p class="px-xl-3">
              <i class="bi bi-quote-left pe-2"></i>thanks for giveing me money its very helpful for me✨✨
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="bi bi-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-warning"></i>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <hr style="border: 5px solid gray;">

   <section>
      <h1 class="text-light">!!! Give Reviews !!!</h1>
    
      <div class="container-fluid">
    <div class="row">
        <form method="post" enctype="multipart/form-data" action="review.php">

            <div class="row mb-3">
                <div class="col-md-6 col-12">
                    <label class="form-label">Full Name</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" name="name"
                            placeholder="Enter Full Name.... "required>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <label class="form-label">Work</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" name="work" 
                            placeholder="Enter Your Occupation ....">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 col-12">
                    <label class="form-label">Email</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="email" class="form-control" name="email"
                            placeholder="Enter Email.... ">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <label class="form-label">Phone Number</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="num'" class="form-control" name="phone"
                            placeholder="Enter Phone Number....">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 col-12">
                    <label class="form-label">Image</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="file" class="form-control" name="uploadimage"
                            required>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <label class="form-label">Decription</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <textarea type="num'" class="form-control" name="decription"
                            placeholder="Enter Message..."></textarea>
                    </div>
                    </div>
                </div>
            </div>


           
    
            <button type="submit" class="btn background btn-secondary text-light w-100 mb-2"name="save">Submit</button>
        </form>
    </div>
      </div>

   </section>

 <!-- <form action="#" method="post" enctype="multipart/form-data">
<input type="file" name="uploadimage"><br>
<input type="submit" value="upload Pic">
</form> -->

 <?php include 'footer.php';?>

</body>

</html>



