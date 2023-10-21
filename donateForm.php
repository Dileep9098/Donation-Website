
<?php 
if(isset($_POST['save'])){


$server= $server = "localhost";
$username = "root";
$password = "";
$db = "donation"; 

$conn = mysqli_connect($server, $username, $password, $db);

    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $choose = $_POST["choose"];
    $donation = $_POST["donation"];


$sql="INSERT INTO `donation`.`customer` (`id`, `fname`, `lname`, `email`, `phone`, `city`, `state`, `choose`, `donation`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$city', '$state', '$choose','$donation',current_timestamp())";
    
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

   <style>
       
       * {
            margin: 0;
            padding: 0;

        }

        h1 {
            width: 100%;
            margin-bottom: 5px;
        }

        /* .info1 .lable{
            display: inline-block;
        } */
        .main {
            width: 100vw;
            height: 100vh;
            display: grid;
            place-items: center;
            background-color: gray;
            /*             margin-top: 80px; */
        }

        .center {
            width: 50%;
        }

        input,
        #donateOption {
            width: 100%;
            height: 50px;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            border: none;
            border-bottom: 5px solid gray;
            border-radius: 20px
        }

        .lable {
            font-size: 20px;
            color: white;
            font-family: 'Times New Roman', Times, serif;

        }
        #submit{
            width: 100%;
            height: 50px;
            margin-top: 5px;
            background-color: green;
            color: white;
            font-size: 30px;
            border: none;
            border-radius: 25px;
            font-family: 'Times New Roman', Times, serif;
            cursor: pointer;

            
        }
        #submit:hover{
            background-color: rgb(6, 107, 6);
        }
        img{
            width: 100vw;
            height: 800px;
        }
        .main{
            margin-top: -800px;
            

        }
    
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <img src="images/p.3.jpg" alt="">
    <div class="main">
        <div class="center">
            <h1 class="text-light">Donation Form</h1>
            <form action="donateForm.php" method="post">

                <label for="name" class="lable"> First Name : </label><br>
                <input type="text" name="fname" id="" required placeholder="Enter Your Name"><br>
                <label for="" class="lable">Last Name </label><br>
                <input type="text" name="lname" id="" required placeholder="Enter Last Name"><br>


                <label for="email" class="lable"> Email Address: </label><br>
                <input type="email" name="email" id="" required placeholder="Email Address"><br>
                <label for="phone" class="lable">Phone Number :</label><br>
                <input type="number" name="phone" id="" required placeholder="Enter Phone Number"><br>


                <label for="city" class="lable"> City : </label><br>
                <input type="text" name="city" id="" required placeholder="Enter City"><br>
                <label for="state" class="lable">State : </label><br>
                <input type="text" name="state" id="" required placeholder="Enter State"><br>

                <label for="donate" class="lable"> Donate : </label><br>
                <select name="choose" id="donateOption">
                    <option value="" >Blood</option>
                    <option value="" >Food</option>
                    <option value="" >Money</option>
                    <option value="" >Others</option>
                </select>
                <label for="other" class="lable">Confirm Donation Name : </label><br>
                <input type="text" name="donation" id="" placeholder="Please Retype Your Donation Name ..." required><br>
                <button type="submit" id="submit" name="save">Submit</button>




            </form>
        </div>
    </div>

    <    <?php include 'footer.php';?>



</body>

</html>