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




        .donate {
            width: 100vw;
            height: 600px;
            display: flex;
            align-items: center;
            background: url(images/p4.jpg) no-repeat;
            background-size: cover;
            background-position: center center;
            margin-bottom: 5px;
            /* margin-top: -15px; */
        }

        .donate .donateContent {
            width: 100%;
            float: left;
            text-align: center;
            /*     padding: 4rem; */
        }

        .donate .donateContent .donate-btn {
            height: 3rem;
        }

        .donate .donateContent .donate-btn button {
            font-size: 1.8rem;
            background-color: black;
            color: white;
            border-radius: 15px;
            padding: .7rem 2.4rem;
            cursor: pointer;
            margin: 20px;
        }

        .donate .donateContent .donate-btn button:hover {
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>



    <h1 class="text-light">Donation Section</h1>
    <div>
        <section class="donate" id="donate">
            <div class="donateContent">
                <h2 style="background-color: blueviolet; color: white; width: 70%; margin: auto; padding: 20px; border-bottom:5px solid green; border-radius: 0px 40px; font-style: italic;"><b>!! Click Below and Donate !!</b></h2>
                <div class="donate-btn">
                    <a href="donateForm.php"><button>Blood</button></a>
                    <a href="donateForm.php"><button>Food</button></a>
                    <a href="donateForm.php"><button>Money</button></a>
                    <a href="donateForm.php"><button>Other</button></a>

                </div>
            </div>
        </section>
    </div>

    </div>
    <?php include 'footer.php';?>

</body>

</html>