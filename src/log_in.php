<?php
    session_start();

    include ("database.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password)) {

            $query = "SELECT * FROM user_db WHERE email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password){
                        $_SESSION["email"] = $email;
                        header("Location: index.php");
                        exit();
                    } 
                } 
            }
            echo "<script> type='text/javascript'> alert('Invalid email or password!')</script>";
        }
        else {
            echo "<script> type='text/javascript'> alert('Invalid email or password!')</script>";
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
    <title>Log In</title>
</head>
<body >
    <div class="bg-[url('/ADV_DBMS/bg.jpg')] bg-center px-20 min-h-screen grid place-items-center">
        <div class="bg-orange-100 p-16   rounded-3xl shadow-2xl w-2/3">
            <img src="/ADV_DBMS/image/R.png" alt="Logo" class="w-8 h-8 text-center mx-auto">
            <h2 class=" pt-1 text-4xl font-bold tracking-tight text-gray-900 text-center">Log In</h2>
            <form method="POST">
                <div class="mt-10">
                    <label for="email" class="block text-m text-gray-00 ">Email</label>
                    <input type="email" name="email" placeholder="Your Email" id="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                </div>
                <div class="mt-7">
                    <label for="password" class="block text-m text-gray-00">Password</label>
                    <input type="password" minlength="8" placeholder="Your Password" name="password" id="password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
                </div>
                <div class="mt-10">
                    <button type="submit" class="w-full bg-orange-300 hover:bg-orange-500 text-white font-semibold p-3 rounded-lg">Log In</button>
                </div>
            </form>
            <div class="mt-12 text-sm font-semibold text-center">
                Don't have an account ? <a href="sign_up.php" class="text-orange-500 hover:text-orange-700">Sign Up</a>
        </div>
    </div>
</body>
</html>