<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel system</title>
    <link rel="stylesheet" href="./public/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- main page markup -->

    <h1 class="font-bold text-center mt-20 text-xl">Login to the Group Ten </h1>
    <div class="flex justify-center mt-4 ">
        <form class="in-product-form grid grid-cols-1" action="./routes/loginRoute.php" method="POST">
            <?php


            if (isset($_COOKIE['login_error'])) {
                $errors = $_COOKIE['login_error'];
                echo           "<div class='mr-2 '>

<div class='mt-5 flex items-center justify-between p-5 leading-normal text-white bg-red-500 rounded-lg' role='alert'>
<p>
$errors
</p>
<svg onclick='return this.parentNode.remove();' class='inline w-4 h-4 fill-current ml-2 hover:opacity-80 cursor-pointer' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
<path d='M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z' />
</svg>
</div> </div>";
            }

            ?>
            <label class="text-sm font-extrabold" for="Serial Number">Email</label>
            <input class="text-xs p-1 text-gray-500" type="text" placeholder="Email.." , name="email" />
            <label class="text-sm font-extrabold" for="Quantity">Password</label>
            <input class="text-xs p-1 text-gray-500" type="password" placeholder="Password..." name="password" />

            <button class="btn-component text-sm text-bold">submit</button>
        </form>
    </div>
    <script src="../public/main.js">
    </script>
    <style>
        .table-secondary {
            background-color: #cecbf7;
        }

        .table-primary {
            background-color: #b086f3;
        }
    </style>


</body>

</html>