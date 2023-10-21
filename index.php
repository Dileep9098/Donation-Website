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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FONTS awasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->
    <?php include 'header.php'; ?>
    <!-- one pic with contant -->
    <header>
        <main>
            <section class="section">
                <h3>Welcome For Donate</h3>
                <h2>DO COME & Donate <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span>
                </h2>
                <p>"Donation is a good work"</p>
                <a href="about.php
                " class="btnone">know more</a>
                <a href="Donate.php
                " class="btntwo">Donate</a>
            </section>
        </main>
    </header>

    <!-- Image Slider -->
    <div id="carouselExampleIndicators" class="carousel slide slider">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img height="500px" src="images/p.3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img height="500px" src="images/p1.jpeg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img height="500px" src="images/p2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img height="500px" src="images/p6.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img height="500px" src="images/p7.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <hr style="border:5px solid gray">
    <div class="container-fluid doctorCard ">
        <h1 class="text-light ">Doctors Opinion</h1>
        <div class="row doctorCard">
            <div class="card doctorCard" style="width: 18rem;">
                <img src="images/p9.jpg" height="250px" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(15, 136, 95);">Dr. Riya</h5>
                    <p class="card-text">Blood donation is a vital part of worldwide healthcare.It helps people in need,
                        and it helps people in your community.</p>
                    <a href="Donate.php" class="btn btn-primary w-100">Donate</a>
                </div>
            </div>
            <div class="card doctorCard" style="width: 18rem;">
                <img src="images/p10.jpg" height="250px" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(15, 136, 95);">Dr. Neha</h5>
                    <p class="card-text">Donation of surplus food can eliminate the methane emissions produced by
                        rotting food</p>
                    <a href="Donate.php" class="btn btn-primary w-100">Donate</a>
                </div>
            </div>
            <div class="card doctorCard" style="width: 18rem;">
                <img src="images/p11.jpg" height="250px" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(15, 136, 95);">Dr.Reena</h5>
                    <p class="card-text">Over one hundred million units of blood are donated each year throughout the
                        world. It is helpfull .</p>
                    <a href="Donate.php" class="btn btn-primary w-100">Donate</a>
                </div>
            </div>
            <div class="card doctorCard" style="width: 18rem;">
                <img src="images/p12.jpg" height="250px" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(15, 136, 95);">Dr.Rahul</h5>
                    <p class="card-text">Organizations which discard offer such food to individuals in need or
                        organizations which can use the food to help others. </p>
                    <a href="Donate.php" class="btn btn-primary w-100">Donate</a>
                </div>
            </div>
        </div>
    </div>
    <hr style="border:5px solid gray">

    <section>
        <div class="container-fluid">
            <p style="text-align: center; font-size: 35px; font-style: italic;     background-color:rgb(48, 48, 48);
            color: white;">
                <b>How should we Donate?</b>
            </p>
            <div class="row" style="width: 60%;margin: auto;">
                <h2 style="font-style: italic;">All Ways to Donate</h2>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                1.Donate Online.
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                2.Donate by Mail.
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                To donate by mail, please download and complete <a href="donateForm.php
                                ">the check donation form</a>. Your form and
                                check payable to Sagar Damoh Rode can be mailed to us at: <br>
                                Sagar Damoh Rode <br>
                                PO Box 37839 <br>
                                Boone, IA 50037-0839

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                3. Text $10 </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                body. Nothing more exciting happening here in terms of content, but just filling up the
                                space to make it look, at least at first glance, a bit more representative of how this
                                would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                4. Donate by Phone
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                5.Donate stock
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                6. Donate Your Vehicle </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->

   <?php include 'footer.php';?>


</body>

</html>