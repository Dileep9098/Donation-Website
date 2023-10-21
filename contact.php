<?php 
if(isset($_POST['save'])){


$server= $server = "localhost";
$username = "root";
$password = "";
$db = "donation"; 

$conn = mysqli_connect($server, $username, $password, $db);

    $firstname = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
  


$sql="INSERT INTO `donation`.`user` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES ('$firstname', '$email', '$phone','$subject','$message',current_timestamp())";
    
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


<!-- INSERT INTO `user` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES (NULL, 'ajay', 'acv@gmail.com', '44345679', 'for donation', 'dgrtdrtyrtyrt'); -->
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

    
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="cotainer-fluid ">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="background text-light text-center mb-2 p-2">
                    <span class="material-symbols-outlined">mail</span> infodonate@gmail.com
                </div>
                <div class="background text-light text-center mb-2 p-2">
                    <span class="material-symbols-outlined">call </span> +91-90985908873 
                </div>
                <div class="background text-light text-center mb-2 p-2">
                    Sagar
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="460px" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=sagar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 col-12">
                <h5 class="background text-light text-center p-2  ">Cotact Page</h5>
                <form method="post" action="contact.php">
                    <div class="row mb-3">
                        <div class=" col-12">
                            <label class="form-label">Full Name</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Full Name.... ">
                            </div>
                        </div>
                    </div>
                        
                    <div class="row mb-3">
                        <div class="col-12">
                            <label class="form-label">Email Address
                            </label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input type="email" class="form-control" name="email"
                                    placeholder="Enter Email.... ">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class=" col-12">
                            <label class="form-label">Phone Number</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input type="num'" class="form-control" name="phone"
                                    placeholder="Enter Phone Number....">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class=" col-12">
                            <label class="form-label">Subject</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input type="text" class="form-control" name="subject"
                                    placeholder="Enter Your Subject....">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class=" col-12">
                            <label class="form-label">Messages </label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <textarea required rows="5" class="form-control" name="message" >
                                   </textarea>
                            </div>
                        </div>
                    </div>
                
                    <button type="submit" class="btn background1 btn-secondary text-light w-100 " name="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>