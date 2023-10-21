
<?php 

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


$sql="INSERT INTO `donation`.`customer` (`id`, `fname`, `lname`, `email`, `phone`, `city`, `state`, `choose`, `donation`) VALUES ('[$firstname]', '[$lastname]', '[$email]', '[$phone]', '[$city]', '[$state]', '[$choose]','[$donation]',current_timestamp())";
    
$result = mysqli_query($conn, $sql);

if ($result)
{
    echo "<script>alert('Your data is submitted, we will reach you soon.');
window.location='index.php';
</script>";
}
else
{
    echo "<script>alert('Your data not submitted.');
window.location='donateForm.php';
</script>";
}

?>

