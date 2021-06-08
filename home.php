<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Studio</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <style>
            .landing-img{
                width: 100%;
                max-height: 35rem;
            }
            .img-card{
                position: absolute;
                top: 15%;
                left: 7%;
                background-color: black;
                opacity: 0.8;
                padding: 2rem;
            }
            .row1{
                justify-content: center;
                background: linear-gradient(
                    45deg
                    , transparent, lightcoral, transparent);
            }
            .circles{
                padding: 1rem;
                text-align: center;
                font-weight: 700;
            }
            .btn-row{
                justify-content: center;
                padding-top: 2rem;
            }
            .btn-view{
                background: transparent;
                border: 1px solid;
            }
            .btn-view:hover{
                background-color: white;
                color: #2abb9c;
                border: transparent;
            }
            .client-btn{
                /*background-color: #2abb9c;*/
                border: 2px solid #2abb9c;
                color: #2abb9c;
                min-width: 200px;
                margin-top: 5px;
            }
            .client-btn:active{
                background-color: #2abb9c !important;
            }
            .client-btn:hover{
                background-color: #2abb9c;
                color: white;
            }
            li{
                margin: 0 5px 0 5px;
            }
            .client-say{
                border: 1px solid grey;
                padding: 1rem;
                background-color: #f9fafc;
                box-shadow: 1px 2px 5px grey;
            }
            .btn-view2{
                background-color: #2abb9c;
                min-width: 10rem;
            }
            .btn-view2:hover{
                background-color: white;
                color: #2abb9c;
                border: 1px solid;
            }
            .fixNav{
                position: fixed;
                width: 100%;
                z-index: 1;
            }
            .btn-send{
                width: 100%;
                margin-top: 2rem;
                background-color: #2abb9c;
                border: 1px solid transparent;
                border-radius: 0;
            }
            footer{
                background-color: black;
                color: white;
                /*font-size: large;*/
            }
            footer ul{
                list-style: none;
                padding-left: 0;
            }
            .footer-li{
                margin: 0;
                padding: 0.3rem 0 0.3rem 0;
                color: silver;
            }
            footer p{
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixNav">
            <a class="navbar-brand" href="#"><i class="fab fa-studiovinari" style="font-size: 3em;"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Works
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Case Studies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Industries
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <section style="padding-top: 5.4rem;">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 landing-img" src="../img/project_kode_00.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 landing-img" src="../img/project_kode_01.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 landing-img" src="../img/project_kode_02.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 landing-img" src="../img/project_kode_03.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 landing-img" src="../img/project_kode_04.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row row1">
                    <p>
                        <br><br>A LEADING TECHNOLOGY COMPANY SPECIALIZING IN<br> GAME DEVELOPMENT, ART & DESIGN, AR, VR, APPS, AND MORE.<br><br>
                    </p>
                </div>
            </div>
        </section>

        <section style="padding: 3rem;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="padding: 2rem;">
                        <h3 style="text-align: center;">Services & Solutions</h3><br>
                        <hr> 
                        <p class="circles">What we Offer!!</p>
                        <p>
                            Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                            sint occaecat cupidatat non proident, sunt in culpa qui officia 
                            deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles">
                        <img src="../img/GameDevelopmntIcon_Hvr.png" class="img-fluid">
                        <p>GAME DEVELOPMENT</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles" style="text-align: center;">
                        <img src="../img/EnterpriseAppSolutions_Hvr.png" class="img-fluid">
                        <p>ENTERPRISE APP & SOLUTIONS</p>
                    </div>
                    <div class="col-lg-2 col-sm-6  col-md-6 col-6 circles" style="text-align: center;">
                        <img src="../img/VRARSolutions_Hvr.png" class="img-fluid">
                        <p>VR & AR SOLUTIONS</p>
                    </div>
                    <div class="col-lg-2 col-sm-6  col-md-6 col-6 circles" style="text-align: center;">
                        <img src="../img/ArtDesign_Hvr.png" class="img-fluid">
                        <p>ART & DESIGN</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles" style="text-align: center;">
                        <img src="../img/WebDevlopment_Hvr.png" class="img-fluid">
                        <p>WEB DEVELOPMENT</p>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #2abb9c; padding: 3rem;">
            <div class="container">
                <div class="row" style="text-align: center;">
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles">
                        <img src="../img/GD_ARGameDev_Hvr.png" class="img-fluid">
                        <p>Mobile Game Development</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles">
                        <img src="../img/GD_AndroidGameDev_Hvr.png" class="img-fluid">
                        <p>Mobile Game Development</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles">
                        <img src="../img/GD_DesktopGameDev_Hvr.png" class="img-fluid">
                        <p>Mobile Game Development</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles">
                        <img src="../img/GD_MobileGameDev_Hvr.png" class="img-fluid">
                        <p>Mobile Game Development</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles">
                        <img src="../img/GD_iOSGameDev_Hvr.png" class="img-fluid">
                        <p>Mobile Game Development</p>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-6 col-6 circles">
                        <img src="../img/RH_Unity_Hvr.png" class="img-fluid">
                        <p>Mobile Game Development</p>
                    </div>
                </div>
                <div class="row btn-row">
                    <button class="btn btn-primary btn-view">View More ></button>
                </div>
            </div>
        </section>

        <section style="text-align: center; padding: 3rem;">
            <h3>Our Clients</h3>
            <hr style="width: 10%;">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <p class="circles">Brands We Work For</p>
                    <p>
                        Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                        sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link active client-btn" href="#">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link client-btn" href="#">Gaming</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link client-btn" href="#">Enterprise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link client-btn" href="#">Education & Learning</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link client-btn" href="#">Media & Entertainment</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row" style="padding-top: 2rem;">
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/WB.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/20thCenturyFox.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/Amzon.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/Byju_s.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/CocaCola.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/Disney.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/Johnson.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-6" style="padding: 2rem;
                         border: 1px solid grey;">
                        <img src="../img/Puma.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section style="text-align: center;">
            <h3>Testinomials</h3>
            <hr style="width: 10%;">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <p class="circles">What Our Clients Say</p>
                    <p>
                        Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                        sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" style="padding-top: 2rem;">
                        <div style="padding: 1rem;" class="client-say">
                            <h3>Mathew Buttler</h3>
                            <p>General Manager, Amazon</p>
                            <p>
                                Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                                sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding-top: 2rem;">
                        <div style="padding: 1rem;" class="client-say">
                            <h3>Mathew Buttler</h3>
                            <p>General Manager, Amazon</p>
                            <p>
                                Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                                sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="padding-top: 2rem;">
                        <div style="padding: 1rem;" class="client-say">
                            <h3>Mathew Buttler</h3>
                            <p>General Manager, Amazon</p>
                            <p>
                                Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                                sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding-top: 2rem;">
                        <div style="padding: 1rem;" class="client-say">
                            <h3>Mathew Buttler</h3>
                            <p>General Manager, Amazon</p>
                            <p>
                                Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
                                sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row btn-row">
                    <button class="btn btn-primary btn-view2">View More ></button>
                </div>
            </div>
        </div>
    </section>

    <section style="text-align: center; padding-top: 7rem; padding-bottom: 3rem;">
        <h3>Achievements</h3>
        <hr style="width: 10%;">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <p class="circles">Awards & Recognitions</p>
            </div>
        </div>

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_00.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_01.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_02.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_06.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_03.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_04.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_05.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                            <div class="col-sm-3 col-md-3 col-6"><div class="img-box"><img src="../img/project_kode_06.jpg" style="padding: 0.7rem;" class="img-fluid" alt=""></div></div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--Scrum methodology-->
    <section style="text-align: center; padding-top: 3rem; padding-bottom: 1rem;">
        <h3>WHY CHOOSE TO WORK WITH US ?</h3>
        <hr style="width: 10%;">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <p class="circles" style="font-weight: 400;">
                    Juego Studios a game studio takes pride in having solid experience of many years in
                    providing game and app development services to clients in USA, UK, UAE, India and other parts of the world.
                    Our standards are par with the top game and app development companies and technology ventures in the industry today.
                </p>
            </div>
        </div>
        <div class="container" style="padding: 1rem;">
            <div class="row">
                <div class="col-lg-3">
                    <h4>SCRUM METHODOLOGY</h4>
                    <hr style="width: 50%;">
                    <p style="text-align: justify;">
                        Our cross-functional team structure and collaborative approach ensures that all
                        reviews and client feedback are incorporated in the development process. This is
                        done in order to obtain satisfactory outcomes on time, without compromising on cost or quality.
                    </p>
                </div>
                <div class="col-lg-3">
                    <h4>SCRUM METHODOLOGY</h4>
                    <hr style="width: 50%;">
                    <p style="text-align: justify;">
                        Our cross-functional team structure and collaborative approach ensures that all
                        reviews and client feedback are incorporated in the development process. This is
                        done in order to obtain satisfactory outcomes on time, without compromising on cost or quality.
                    </p>
                </div>
                <div class="col-lg-3">
                    <h4>SCRUM METHODOLOGY</h4>
                    <hr style="width: 50%;">
                    <p style="text-align: justify;">
                        Our cross-functional team structure and collaborative approach ensures that all
                        reviews and client feedback are incorporated in the development process. This is
                        done in order to obtain satisfactory outcomes on time, without compromising on cost or quality.
                    </p>
                </div>
                <div class="col-lg-3">
                    <h4>SCRUM METHODOLOGY</h4>
                    <hr style="width: 50%;">
                    <p style="text-align: justify;">
                        Our cross-functional team structure and collaborative approach ensures that all
                        reviews and client feedback are incorporated in the development process. This is
                        done in order to obtain satisfactory outcomes on time, without compromising on cost or quality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Case Studies-->
    <section style="text-align: center; padding: 2rem 0 3rem 0; background-color: #efefef;">
        <h3>Case Studies</h3>
        <hr style="width: 10%;">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <p class="circles">Awards & Recognitions</p>
            </div>
        </div>
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-3 col-sm-6 col-md-6 col-6 circles">
                    <img src="../img/business-feature-4.png" class="img-fluid">
                    <p>GAME DEVELOPMENT</p>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-6 circles" style="text-align: center;">
                    <img src="../img/business-feature-3.png" class="img-fluid">
                    <p>ENTERPRISE APP & SOLUTIONS</p>
                </div>
                <div class="col-lg-3 col-sm-6  col-md-6 col-6 circles" style="text-align: center;">
                    <img src="../img/business-feature-2.png" class="img-fluid">
                    <p>VR & AR SOLUTIONS</p>
                </div>
                <div class="col-lg-3 col-sm-6  col-md-6 col-6 circles" style="text-align: center;">
                    <img src="../img/business-feature-2.png" class="img-fluid">
                    <p>ART & DESIGN</p>
                </div>
            </div>
            <div class="row btn-row">
                <button class="btn btn-primary btn-view2">View More ></button>
            </div>
        </div>
    </section>

    <!--portfolio-->
    <section style="text-align: center; padding: 2rem 0 3rem 0;">
        <h3>Portfolio</h3>
        <hr style="width: 10%;">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <p class="circles">Recent games & apps developed by us</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 circles">
                    <div style="padding: 1rem; box-shadow: 1px 2px 5px grey;">
                        <img src="../img/PortfolioWeb2020_BattleGems.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 circles">
                    <div style="padding: 1rem; box-shadow: 1px 2px 5px grey;">
                        <img src="../img/PortfolioWeb2020_Golf.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 circles">
                    <div style="padding: 1rem; box-shadow: 1px 2px 5px grey;">
                        <img src="../img/medal-of-war.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 circles">
                    <div style="padding: 1rem; box-shadow: 1px 2px 5px grey;">
                        <img src="../img/medal-of-war.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row btn-row">
                <button class="btn btn-primary btn-view2">View More ></button>
            </div>
        </div>
    </section>

    <!--contact form-->
    <section style="text-align: center; padding-top: 3rem; padding-bottom: 1rem;">
        <h3>CONTACT US TODAY. LET'S WORK TOGETHER</h3>
        <hr style="width: 10%;">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <p class="circles" style="font-weight: normal; font-size: 1.2em;">
                    We have worked with clients ranging from young startups to mature
                    Fortune companies who are very impressed with our service offerings.
                    Brief us your requirements and we’ll get started on it right away.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-7" style="    padding: 2rem;
                     background-color: #efefef;
                     border-radius: 6px;">
                    <form>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" style="margin: 1rem auto;" placeholder="Name*">
                            <input class="form-control form-control-lg" type="text" style="margin: 1rem auto;" placeholder="Email*">
                            <input class="form-control form-control-lg" type="text" style="margin: 1rem auto;" placeholder="Phone Number">
                            <input class="form-control form-control-lg" type="text" style="margin: 1rem auto;" placeholder="Topic">
                            <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="8" placeholder="We are eager to hear from you !"></textarea>
                            <button class="btn btn-primary btn-send">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer>
        <div class="container-fluid">
            <div class="row" style="padding: 5rem;">
                <div class="col-lg-3">
                    <h4>SERVICES</h4>
                    <ul>
                        <li class="footer-li">
                            <a>Game Development</a>
                        </li>
                        <li class="footer-li">
                            <a>VR & AR Solutions</a>
                        </li>
                        <li class="footer-li">
                            <a>Art & Design</a>
                        </li>
                        <li class="footer-li">
                            <a>Enterprise Solutions</a>
                        </li>
                        <li class="footer-li">
                            <a>Web Development</a>
                        </li>
                        <li class="footer-li">
                            <a>Game Porting</a>
                        </li>
                    </ul>
                    <div style="padding-top: 2rem;">
                        <h4>OUR PORTFOLIOS</h4>
                        <ul>
                            <li class="footer-li">
                                <a>Games</a>
                            </li>
                            <li class="footer-li">
                                <a>Applications</a>
                            </li>
                            <li class="footer-li">
                                <a>Virtual Reality</a>
                            </li>
                            <li class="footer-li">
                                <a>Augmented Reality</a>
                            </li>
                            <li class="footer-li">
                                <a>Gamification Apps</a>
                            </li>
                            <li class="footer-li">
                                <a>Art & Design</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>NEWS</h4>
                    <ul>
                        <li class="footer-li">
                            Apple features Hopster –
                            <a href="#">https://apple.co/2ev8KxX </a>
                            an app<br> developed by the team at Juego<br> Studios.
                        </li>
                        <li class="footer-li">
                            Check out Goober Candy Craze<br> developed by us at<br>
                            <a href="#">https://apple.co/2dOJ949</a>
                        </li>
                    </ul>
                    <div style="padding-top: 14px;">
                        <h4 style="padding-top: 2rem;">RESOURCES</h4>
                        <ul>
                            <li class="footer-li">
                                <a>Press Release</a>
                            </li>
                            <li class="footer-li">
                                <a>Articles</a>
                            </li>
                            <li class="footer-li">
                                <a>Blog</a>
                            </li>
                            <li class="footer-li">
                                <a>FAQ</a>
                            </li>
                            <li class="footer-li">
                                <a>Process</a>
                            </li>
                            <li class="footer-li">
                                <a>Career</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6">
                    <h4>OUR OFFICES</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <p style="font-size: large; font-weight: 500;">
                                    <img src="../img/country/united-states.png" class="img-fluid" style="width: 2rem;">&nbsp;&nbsp;USA
                                </p>
                                
                                <p style="color: #1abc9c; padding-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: red;"></i>&nbsp;&nbsp;Texas</p>
                                <p>1360 Star Ct., ST. T3, Plano, <br>TX 75074, United States</p>
                                <p style="color: #1abc9c;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;999 000 8880</p>
                                <p><i class="fas fa-envelope" style="color: blue;"></i>&nbsp;&nbsp;info.usa@juegostudio.com</p>
                                
                                <p style="color: #1abc9c; padding-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: red;"></i>&nbsp;&nbsp;Texas</p>
                                <p>1360 Star Ct., ST. T3, Plano, <br>TX 75074, United States</p>
                                <p style="color: #1abc9c;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;999 000 8880</p>
                                <p><i class="fas fa-envelope" style="color: blue;"></i>&nbsp;&nbsp;info.usa@juegostudio.com</p>
                                
                                <p style="color: #1abc9c; padding-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: red;"></i>&nbsp;&nbsp;Texas</p>
                                <p>1360 Star Ct., ST. T3, Plano, <br>TX 75074, United States</p>
                                <p style="color: #1abc9c;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;999 000 8880</p>
                                <p><i class="fas fa-envelope" style="color: blue;"></i>&nbsp;&nbsp;info.usa@juegostudio.com</p>
                                
                                <p style="color: #1abc9c; padding-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: red;"></i>&nbsp;&nbsp;Texas</p>
                                <p>1360 Star Ct., ST. T3, Plano, <br>TX 75074, United States</p>
                                <p style="color: #1abc9c;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;999 000 8880</p>
                                <p><i class="fas fa-envelope" style="color: blue;"></i>&nbsp;&nbsp;info.usa@juegostudio.com</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <p style="font-size: large; font-weight: 500;">
                                    <img src="../img/country/india.png" class="img-fluid" style="width: 2rem;">&nbsp;&nbsp;INDIA
                                </p>
                                
                                <p style="color: #1abc9c; padding-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: red;"></i>&nbsp;&nbsp;Texas</p>
                                <p>1360 Star Ct., ST. T3, Plano, <br>TX 75074, United States</p>
                                <p style="color: #1abc9c;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;999 000 8880</p>
                                <p><i class="fas fa-envelope" style="color: blue;"></i>&nbsp;&nbsp;info.usa@juegostudio.com</p>
                            </div>
                            <div style="padding-top: 1rem;">
                                <p style="font-size: large; font-weight: 500;">
                                    <img src="../img/country/kuwait.png" class="img-fluid" style="width: 2rem;">&nbsp;&nbsp;KUWAIT
                                </p>
                                
                                <p style="color: #1abc9c; padding-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: red;"></i>&nbsp;&nbsp;Texas</p>
                                <p>1360 Star Ct., ST. T3, Plano, <br>TX 75074, United States</p>
                                <p style="color: #1abc9c;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;999 000 8880</p>
                                <p><i class="fas fa-envelope" style="color: blue;"></i>&nbsp;&nbsp;info.usa@juegostudio.com</p>
                            </div>
                            <div style="padding-top: 1rem;">
                                <p style="font-size: large; font-weight: 500;">
                                    <img src="../img/country/united-kingdom.png" class="img-fluid" style="width: 2rem;">&nbsp;&nbsp;UK
                                </p>
                                
                                <p style="color: #1abc9c; padding-top: 1rem;"><i class="fas fa-map-marker-alt" style="color: red;"></i>&nbsp;&nbsp;Texas</p>
                                <p>1360 Star Ct., ST. T3, Plano, <br>TX 75074, United States</p>
                                <p style="color: #1abc9c;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;999 000 8880</p>
                                <p><i class="fas fa-envelope" style="color: blue;"></i>&nbsp;&nbsp;info.usa@juegostudio.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="padding: 0 5rem 1rem 5rem;">
            <div class="row">
                <div class="col-lg-8">
                    <p>
                        COPYRIGHT © <span style="color: #1abc9c;">2021 JUEGO STUDIO PRIVATE LIMITED | PRIVACY POLICY | SITEMAP</span>
                    </p>
                </div>
                <div class="col-lg-4">
                    <p style="text-align: center; letter-spacing: 1rem;">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-skype"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>