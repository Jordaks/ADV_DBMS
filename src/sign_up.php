<?php
    session_start();

    include ("database.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $password = $_POST['password'];


            if(!empty($name) && !empty($email) && !empty($address) && !empty($password)) {

                $query = "insert into user_db (name, email, address, password) values ('$name', '$email', '$address', '$password')";

                mysqli_query($con, $query);

                echo "<script> type='text/javascript'> alert('Registration successful!')</script>";

                // Redirect to the login page
                header("Location: log_in.php");
                exit();
                
            }else {
                echo "<script> type='text/javascript'> alert('Please fill all the fields!')</script>";
            }

            /* Validate the email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error = "Invalid email format";
                $error = true;z
            }

            $dbConnection = getDatabaseConnection();

            $statement = $dbConnection->prepare("SELECT id FROM user_db WHERE email = ?");

            // Bind variables to the statement as parameters
            $statement->bind_param("s", $email);

            // Execute the statement
            $statement->execute();

            //check if the email already exists
            $statement->store_result();
            if ($statement->num_rows > 0) {
                $email_error = "Email already exists";
                $error = true;
            }

            // Close the statement
            $statement->close();

            */            
            // Validate the password  

            
            // Redirect to the login page
            //header("Location: log_in.php");
            //exit();
            
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
                    <input type="name" placeholder="Your Name" name="name" id="name" value="<?= $name ?>" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                    <span class="text-danger"><?= $name_error = ""; ?></span>
                </div>
                <div class="mt-7">
                    <label for="email" class="block text-m text-gray-00 ">Email</label>
                    <input type="email" placeholder="Your Email" name="email" id="email" value="<?= $email ?>" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none"  required>
                    <span class="text-danger"><?= $email_error = ""; ?></span>
                </div>
                <div class="mt-7" >
                    <label for="address" class="block text-m text-gray-00 ">Address</label>
                    <input type="text" placeholder="Your address" name="address" id="address" value="<?= $address ?>"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                    <span class="text-danger"><?= $address_error = ""; ?></span>
                </div>
                <div class="mt-7">
                    <label for="password" class="block text-m text-gray-00">Password</label>
                    <input type="password" placeholder="Your Password" minlength="8" name="password" id="password" value="<?= $password ?>"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
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