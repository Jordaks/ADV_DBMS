<?php
    session_start();

    include ("database.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $password = $_POST['password'];
            $encpass = md5($password);

            $name_error = "";

            $error = false;
            


            // Validate the name

            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $name_error = "Only letters, apostrophes, hyphens, and white space allowed";
                $error = true;

                echo "<script> type='text/javascript'> alert('Only letters, apostrophes, hyphens, and white space allowed!')</script>";

            }else{

                $query = "insert into users (name, email, phone, address, password) values ('$name', '$email', '$phone', '$address', '$encpass')";

                mysqli_query($con, $query);

                // Redirect to the login page
                header("Location: log_in.php");
                exit();
            }
            
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="/image/R.png"/>
    <title>Sign Up</title>
</head>
<body >



    <div class="bg-[url('/ADV_DBMS/bg.jpg')] bg-center px-20 min-h-screen grid place-items-center">
        <div class="bg-orange-100 p-16 rounded-3xl shadow-2xl w-2/3">
            <img src="/ADV_DBMS/image/R.png" alt="Logo" class="w-8 h-8 text-center mx-auto">
            <h2 class=" pt-1 text-4xl font-bold tracking-tight text-gray-900 text-center">Create Account</h2>
            <form method="POST">
                <div class="mt-7">
                    <label for="name" class="block text-m text-gray-00 "> Name</label>
                    <input type="name" placeholder="Enter your name" name="name" id="name" value="<?= $name ?>" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                    <span class="text-danger"><?= $name_error = ""; ?></span>
                </div>
                <div class="mt-7">
                    <label for="email" class="block text-m text-gray-00 ">Email</label>
                    <input type="email" placeholder="Enter your email" name="email" id="email" value="<?= $email ?>" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none"  required>
                    <span class="text-danger"><?= $email_error = ""; ?></span>
                </div>
                <div class="mt-7">
                    <label for="phone" class="block text-m text-gray-00 ">Phone</label>
                    <input type="text" placeholder="Enter your phone number" name="phone" id="phone" value="<?= $phone ?>" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                    <span class="text-danger"><?= $phone_error = ""; ?></span>
                </div>
                <div class="mt-7" >
                    <label for="address" class="block text-m text-gray-00 ">Address</label>
                    <input type="text" placeholder="Enter your address" name="address" id="address" value="<?= $address ?>"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                    <span class="text-danger"><?= $address_error = ""; ?></span>
                </div>
                <div class="mt-7">
                    <label for="password" class="block text-m text-gray-00">Password</label>
                    <input type="password" placeholder="Enter your password" minlength="8" name="password" id="password" value="<?= $password ?>"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                    <span class="text-danger"><?= $password_error = ""; ?></span>
                </div>
                <div class="mt-10">
                    <button type="submit" class="w-full bg-orange-300 hover:bg-orange-500 text-white font-semibold p-3 rounded-lg">Create Account</button>
                </div>
            </form>
            <div class="mt-12 text-sm font-semibold text-center">
                Do you have an account? <a href="log_in.php" class="text-orange-500 hover:text-orange-700">Log In</a>
        </div>
    </div>
</body>
</html>