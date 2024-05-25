<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel system</title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>



    <div>

        <section class="hero-bg p-8">
            <nav>
                <div class="md:grid md:grid-cols-3 md:gap-x-4  justify-between mobile-menu ">

                    <div class="logo">
                        <a href="/">
                            <h1 class="font-extrabold text-[#6419DF] text-sm md:text-2xl">
                                Group<span class="text-md text-black">Ten</span>
                            </h1>
                        </a>
                    </div>
                    <div class="navbar sm:flex   flex justify-between">
                        <ul class="flex gap-5 font-normal text-sm align-bottom">
                            <li>
                            <li class="font-bold"><a href="login.php">Login</a></li>
                            </li>
                            <li class="font-bold"">About</li>
                            <li class=" font-bold"">
                                <a href=" /contactUs">Contact</a>
                            </li>
                            <li class="font-bold"">
                                <a href=" /services">service</a>
                            </li>
                            <li class="font-bold"">
                                <a href=" /blog">Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="call-action-btn   place-self-end ">
                        <button class="pt-3 pb-3  rounded-lg text-white w-30 pl-4 pr-4 text-xs bg-[#6419DF] font-bold">
                            Subscribe
                        </button>

                    </div>

                    <div class="handbugger">
                        <div class="nav-line"></div>
                        <div class="nav-line"></div>
                        <div class="nav-line"></div>
                    </div>

                </div>
            </nav>
            <div class="mobile-navbar bg-[#6419DF] text-white fixed">
                <ul class="grid grid-cols-1 gap-2 font-bold place-items-center font-bold mobile-margin align-middle">

                    <li>About</li>
                    <li>contact</li>
                    <li>features</li>
                    <li>pages</li>
                    <li class="font-bold"><a href="login.php">Login</a></li>
                </ul>
            </div>
        </section>

        <style>
            .debug-border {
                border: 1px solid red;
            }

            .debug-border-2 {
                border: 1px solid rgb(0, 0, 0);
            }

            .nav-line {
                width: 25px;
                height: 4px;
                background-color: #6419DF;
                margin-top: 3px;
            }

            .handbugger {
                display: none;
                margin-right: 200px;

            }

            .mobile-navbar {
                visibility: hidden;
            }

            @media screen and (max-width: 700px) {
                .handbugger {
                    display: block;

                }

                .call-action-btn {
                    display: none;
                }

                .mobile-navbar {
                    height: 100vh;
                    width: 100%;
                    visibility: visible;
                    display: fixed;
                    transform: translateX(100%);
                }

                .navbar {
                    visibility: hidden;
                }

                .mobile-menu {
                    display: flex;
                    justify-content: space-around;

                }

                .mobile-navbar {
                    display: flex;
                    justify-content: space-between;
                }

            }
        </style>


    </div>



    <div class="hero-padding grid grid-cols-2  m-20">
        <div>
            <p class=" mb-1 font-bold text-[#6419DF]">Welcome to group 10 five star hotel</p>
            <h1 class=" sm:text-lg md:text-3xl font-bold lg:text-5xl">Group 10 five </h1>
            <h1 class="font-bold lg:text-5xl mt-2 md:text-3xl sm:text-lg">Hotel kigali Rwanda</h1>
            <p class="mt-6 mb-10 text-gray-600">Get exclusive hotel rooms reservation and the most delicious food around the globe.</p>
            <div class="flex gap-4">

                <div>
                    <button class="pt-3 pb-3  rounded-lg text-white w-30 pl-4 pr-4 text-xs bg-[#6419DF] font-bold">
                        Get reservation
                    </button>

                </div>

                <div>
                    <button class="secondary-btn pt-3 pb-3  rounded-lg text-black w-30 pl-4 pr-4 text-xs  font-bold">
                        Learn More
                    </button>

                </div>
            </div>
        </div>


        <div class="bg-gray-300 shadow-md mr-10 ml-10 rounded-md">
            <img class="w-96 h-100" src="./assets/images/side-image.png" alt="">
        </div>

    </div>
    </section>

    <div>

        <div class="m-40 text-white">
            <div class="newsletterForm rounded-md p-12 shadow-md flex gap-20">
                <div>
                    <!-- <DismibleAlert v-if="responseMessages !== null" alertMessage = "Email added successfully" /> -->

                    <h1 class="font-bold text-2xl mt-4 mb-4 ">
                        Group 10 five Hotel Kigal Rwanda
                    </h1>
                    <p class="mb-4">
                        Get exclusive hotel rooms reservation and the most delicious food around the globe.
                    </p>

                    <div class="relative mt-6">

                        <input v-model="subscriber.email" class="text-black h-10 rounded-lg border-none p-5 w-full " type="text" placeholder="Email...">
                        <button @click="subscribe()"><img class="w-6 h-6 absolute top-2 right-2 cur" src="./assets/images/send-message.png" alt=""></button>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>



    <style>
        .newsletterForm {
            background-color: #6419DF;

        }

        .side-information {
            border: 2px solid #6419DF;
            color: #6419DF;

        }
    </style>

    <style>
        .secondary-btn {
            border: 2px solid gray;
        }
    </style>




    <div class="footer-design">
        <footer class="pt-4 pb-4 footer-design">
            <section class="ml-4">
                <div class="grid grid-cols-1 mb-8 mainContainer md:grid md:grid-cols-3 gap-x-20">
                    <div>
                        <div class="flex gap-1 mb-4 logo">
                            <!-- <img class="rounded-full w-10 h-10" src="~/assets/images/logo.png" alt="" /> -->
                            <div class="logo">
                                <h1 class="font-extrabold text-white text-sm md:text-2xl">
                                    Group<span class="text-md text-yellow">Ten</span>
                                </h1>
                            </div>
                        </div>
                        <h6 class="text-sm">Group Ten 5 Star Hotel</h6>
                        <h6 class="text-sm">
                            Get exclusive hotel rooms reservation and the most delicious food around the globe.
                        </h6>
                        <div class="flex gap-4">
                            <h6 class="rating">7.9/306k</h6>
                            <!-- <img class="w-7" src="/imdb.png" alt="" /> -->
                        </div>
                        <div class="flex gap-3 mt-5 hero-icons">
                            <img class="w-8 h-8" src="./assets/images/instagram.png" alt="" />
                            <img class="w-8 h-8" src="./assets/images/twitter.png" alt="" />
                            <img class="w-8 h-8" src="./assets/images/facebook.png" alt="" />
                        </div>

                        <div class="mt-4">
                            <h6 class="text-sm">Group Ten c 2024</h6>
                        </div>

                    </div>
                    <div class="flex gap-10 mt-8 md:mt-0">
                        <ul>
                            <div class="mt-5 space-y-2">
                                <h2 class="mt-4 mb-2 uppercase">Products</h2>
                                <li>
                                    <a class="text-sm" href="#">Hotel reservation</a>
                                    <div class="shadow-md border-link"></div>
                                </li>
                                <li>
                                    <a class="text-sm" href="#">Chines Food</a>
                                    <div class="shadow-md border-link"></div>
                                </li>
                                <li>
                                    <a class="text-sm" href="#">Sudanese Food</a>
                                    <div class="shadow-md border-link"></div>
                                </li>
                                <li>
                                    <a class="text-sm" href="#">West African Food</a>
                                    <div class="shadow-md border-link"></div>
                                </li>

                            </div>
                        </ul>

                        <ul>
                            <div class="mt-5 space-y-2">
                                <h2 class="mt-4 mb-2 uppercase">Couponds</h2>
                                <li>
                                    <a class="text-sm" href="#">Chines Food</a>
                                    <div class="shadow-md border-link"></div>
                                </li>
                                <li>
                                    <a class="text-sm" href="#">Sudanese Food</a>
                                    <div class="shadow-md border-link"></div>
                                </li>
                                <li>
                                    <a class="text-sm" href="#">West African Food</a>
                                    <div class="shadow-md border-link"></div>
                                </li>
                                <br />
                            </div>
                        </ul>
                    </div>
                    <ul>
                        <div class="mt-5 space-y-2">
                            <h2 class="mt-4 mb-2 uppercase">Important Links</h2>
                            <li>
                                <a class="text-sm" href="#">Group 10</a>
                                <div class="shadow-md border-link"></div>
                            </li>
                            <li>
                                <a class="text-sm" href="#">Home</a>
                                <div class="shadow-md border-link"></div>
                            </li>
                            <li>
                                <a class="text-sm" href="#">About</a>
                                <div class="shadow-md border-link"></div>
                            </li>
                            <li>
                                <a class="text-sm" href="#">Contact</a>
                                <div class="shadow-md border-link"></div>
                            </li>
                            <li>
                                <a class="text-sm" href="#">Api</a>
                                <div class="shadow-md border-link"></div>
                            </li>
                            <br />
                        </div>
                    </ul>
                </div>
            </section>

        </footer>
    </div>


    <style>
        .footer-design {
            background-color: #6419DF;
            color: white;
        }
    </style>
</body>


</html>