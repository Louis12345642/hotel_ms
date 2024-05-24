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

    <h1 class="font-bold text-center mt-20 text-xl">Login to the system</h1>
    <div class="flex justify-center mt-4 ">
        <form class="in-product-form grid grid-cols-1" action="./routes/loginRoute.php" method="POST">
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