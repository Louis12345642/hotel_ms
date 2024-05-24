<?php
include_once "../controller/usersController.php";

$user = new userController();

//get the id from cookie
$user_id = $_COOKIE['user_id'];

//check if the user is auth
if ($user_id) {
    //get the user info
    $auth_user = $user->find($user_id);
} else {
    //redirect the user to the football
    header("Location: /hotel_system");
    exit();
}

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
        <section class="grid h-full grid-cols-5">
            <nav class="w-full nav-border">
                <!-- creating the logo div -->
                <div class="grid w-10 grid-cols-2 gap-2">
                    <div>
                        <img class="w-6 h-6" src="../assets/icons/delivery-cart.png" alt="" />
                    </div>
                    <div>
                        <h5 class="title-one">system</h5>
                    </div>
                </div>
                <section>
                    <div class="mt-16">
                        <ul class="flex flex-col gap-5 text-xs font-extrabold text-bold">
                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div><img class="w-4 h-4" src="../assets/icons/home.png" alt="" /></div>
                                <a href="dashboard.php"> Dashboard</a>
                            </li>
                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div>
                                    <img class="w-4 h-4" src="../assets/icons/user.png" alt="" />
                                </div>
                                <a href="users.php"> users</a>
                            </li>
                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div>
                                    <img class="w-4 h-4" src="../assets/icons/box-open.png" alt="" />
                                </div>
                                <a href="reservation.php"> Reservation</a>
                            </li>
                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div><img class="w-4 h-4" src="../assets/icons/delivery-cart.png" alt="" /></div>
                                <a href="rooms.php"> Rooms</a>
                            </li>
                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div>
                                    <img class="w-4 h-4" src="../assets/icons/file-medical-alt.png" alt="" />
                                </div>
                                <a href="dashboard.php">Add User</a>
                            </li>
                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div>
                                    <img class="w-4 h-4" src="../assets/icons/calendar-lines.png" alt="" />
                                </div>
                                Calender
                            </li>

                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div>
                                    <img class="w-4 h-4" src="../assets/icons/envelope.png" alt="" />
                                </div>
                                Messages
                            </li>
                            <li class="flex items-center gap-y-6 gap-x-2">
                                <div>
                                    <img class="w-4 h-4" src="../assets/icons/check-out.png" alt="" />
                                </div>
                                <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- creating the user section and the icon -->
                <div class="pt-2 pb-2 mt-32">
                    <!-- this div contains the user avater -->

                    <div class="flex gap-2 align-center rounded-border">
                        <img class="w-12 h-12 rounded-full user-border" src="../assets/images/profile.jpg" alt="" />
                        <div>
                            <h5 class="mt-2 text-sm font-extrabold">Mubarak Louis</h5>
                            <h5 class="text-xs secondary-text">in-system</h5>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- main page markup -->
            <div class="col-span-4">
                <!-- the h4 is for the main title -->
                <div>
                    <h4 class="pt-6 pl-20 font-extrabold uppercase text-md">
                        Admin User
                    </h4>
                </div>
                <!-- here is the mini navbar for reports,inproducts etc.. -->
                <div class="w-full pl-20 mt-10 mini-nav-border">
                    <ul class="flex gap-4 text-sm font-extrabold text-bold">
                        <li>
                            Dashboard
                            <div class="indicator-bar"></div>
                        </li>
                        <li class="secondary-text"> <a href="dashboard.php">dashboard</a> </li>
                        <li class="secondary-text"> <a href="users.php">Users</a> </li>
                        <li class="secondary-text"> <a href="rooms.php">Rooms</a> </li>
                        <li class="secondary-text"> <a href="register.reservation.php">Add reservation</a> </li>
                        <li class="secondary-text"> <a href="register.user.php">Add user</a> </li>
                        <li class="secondary-text"> <a href="register.room.php">Add Room</a> </li>
                    </ul>
                </div>

                <!-- forms inputs
       search->it is the seach
       calender dropdown -->
                <div class="flex pl-12 m-8 filters-inputs gap-x-8">
                    <div class="grid items-center justify-center grid-cols-3 gap-2 pl-4 calender-input">
                        <div class="flex col-span-2 gap-2">
                            <img class="w-6 h-6" src="../assets/icons/calendar-lines-pen.png" alt="" />
                            <div>
                                <p class="text-xs font-bold text-gray-500">Date</p>
                                <h4 class="text-xs font-extrabold">Last Year</h4>
                            </div>
                        </div>

                        <div>
                            <img class="w-4 h-4" src="../assets/icons/angle-small-down.png" alt="" />
                        </div>
                    </div>
                    <!-- workinf on the category -->
                    <div class="grid items-center justify-center grid-cols-3 gap-2 pl-4 calender-input">
                        <div class="flex col-span-2 gap-2">
                            <img class="w-6 h-6" src="../assets/icons/object-group.png" alt="" />
                            <div>
                                <p class="text-xs font-bold text-gray-500">Status</p>
                                <h4 class="text-xs font-extrabold">All</h4>
                            </div>
                        </div>

                        <div>
                            <img class="w-4 h-4" src="../assets/icons/angle-small-down.png" alt="" />
                        </div>
                    </div>

                    <!-- code for the search button -->

                    <input class="grid items-center justify-center grid-cols-3 gap-2 pl-4 text-xs calender-input" placeholder="search  CTR+K" />
                </div>

                <div class="grid justify-center grid-cols-1 pl-20">

                    <!-- this is where the external code will be placed -->

                    <div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mr-16">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-100 table-secondary">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Name</th>
                                        <th scope="col" class="px-6 py-3">Email</th>

                                        <th scope="col" class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //call the connection variable
                                    include_once "../database/connection.php";

                                    $DB = new Db_connection();
                                    $conn = $DB->connect();

                                    $sql = "SELECT * FROM `persons`";
                                    $result = mysqli_query($conn, $sql);
                                    //check whether there are the database
                                    $resultCheck = mysqli_num_rows($result);
                                    if ($resultCheck > 0) {
                                        while ($user = mysqli_fetch_assoc($result)) {

                                            $id = $user['id'];

                                            echo "<tr class='bg-white border-b'>" .
                                                "<td class='px-6 py-4'>" . $user['name'] . "</td>" .
                                                "<td class='px-6 py-4'>" . $user['email'] . "</td>" .
                                                "<td class='px-6 py-4'>
                                                <div class='flex gap-4'>
                                                    <div class='font-medium text-white hover:underline bg-red-400 p-2 rounded-md'>
                                                       <a href='../routes/deleteUser.php?id=$id'>  <img class='w-4 h-4' src='../assets/icons/delete.png' alt='' />    </a>
                                                    </div>
                                                    <div class='font-medium text-white hover:underline table-primary p-2 rounded-md'>
                                                 <a href='../view/update.user.php?id=$id' ><img class='w-4 h-4' src='../assets/icons/file-edit.png' alt='' /></a>
                                                    </div>
                                                </div>
                                            </td>
                                            " .
                                                "</tr>";
                                        }
                                    }
                                    ?>

                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>


                    <script setup lang="ts"></script>
                    <style scoped>
                        .table-secondary {
                            background-color: #cecbf7;
                        }

                        .table-primary {
                            background-color: #b086f3;
                        }
                    </style>



                </div>
            </div>
        </section>
    </div>

    <script src="../public/main.js">
    </script>
</body>

</html>