<!DOCTYPE html>
<html lang="en">
<?php
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']); // Xóa thông báo sau khi sử dụng để tránh hiển thị lại
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account-Claue</title>
    <link rel="stylesheet" href="../public/css/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" type="image/png" href="./media/img/desktop2.png" class="tab-icon">
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }
    </style>
</head>

<body class="font-poppins">
    <div class="wrapper">
        <!-- search -->
        <?php include "./view/inc/search.php" ?>
        <!-- cart -->
        <?php include "./view/inc/cart.php" ?>
        <!--chi tiết sản phẩm -->
        <?php include "./view/inc/product_description.php" ?>
        <!-- mobi menu -->
        <?php include "./view/inc/mobi_menu.php" ?>
        <div class="container-wrapper">
            <?php include "./view/inc/header.php" ?>
            <main>

                <div class="w-full">
                    <div class="relative ">
                        <div class="w-full h-full before:w-full before:bg-[rgba(0,0,0,.5)] before:content-['']  before:h-full before:absolute before:top-0 before:left-0 py-[75px]
                    " style="background-image: url(./public/media/img/pendant-908944_1920.jpg); background-size: cover ; background-repeat:repeat-y ; background-position: center; background-attachment: scroll;">
                        </div>
                        <div
                            class="font-poppins absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white block  text-center w-full py-[50px]">
                            <h1 class="text-xl">MY ACCOUNT</h1>

                        </div>
                    </div>
                    <?php if (!empty($message)): ?>
                        <div class="message text-red-400">
                            <div
                                class="bg-[#f2dede] border border-[#f2dede] flex px-[50px] py-[30px] w-full text-sm max-sm:p-5 flex-nowrap max-w-[73.125rem] m-auto mt-[60px]">
                                <span class="text-[#31708f] mr-1"> <?php echo $message ?></span>

                            </div>
                        </div>
                    <?php endif; ?>


                    <?php if (isset($error_message) && !empty($error_message)): ?>
                        <div class="message text-red-400">
                            <div
                                class="bg-[#f2dede] border border-[#f2dede] flex px-[50px] py-[30px] w-full text-sm max-sm:p-5 flex-nowrap max-w-[73.125rem] m-auto mt-[60px]">
                                <span class="text-[#31708f] mr-1"> Error: The username u is not registered on this site. If you are unsure of your username, try your email address instead.</span>

                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="from pt-16 pb-16">
                        <div
                            class="max-w-[73.125rem] m-auto w-full px-5 grid grid-cols-2 gap-10 max-md:grid-cols-none max-md:grid-rows-2">
                            <div class="block w-full">
                                <h2 class="text-base font-bold pb-5">Login</h2>
                                <form action="account.php" method="post" class="block text-[#878787]">
                                    <div class="block">
                                        <label for="" class="block pb-[10px] text-sm font-normal">
                                            Username or email address
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <div class="pb-5">
                                            <input type="email" name="email"
                                                class="outline-none border w-full h-9 pl-3">
                                        </div>
                                    </div>
                                    <div class="block">
                                        <label for="" class="block pb-[10px] text-sm font-normal">
                                            Password
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <div class="pb-5">
                                            <input type="password" name="password"
                                                class="outline-none border w-full h-9 pl-3 ">
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center pb-5">
                                        <div class="flex justify-center items-center">
                                            <input type="checkbox" class="mr-2">
                                            <span class="text-sm">Remember me</span>
                                        </div>
                                        <div class="">
                                            <input
                                                class="border-2 border-[#222] rounded-full px-9 py-2 text-black hover:bg-[#56CFE1] hover:border-[#56CFE1] hover:text-white"
                                                name="btnlogin" type="submit" value="Login"></input>
                                        </div>

                                    </div>
                                    <p><a href="#" class="text-sm text-gray-700 hover:text-[#56CFE1]">Lost your
                                            password?</a>
                                    </p>
                                </form>


                            </div>
                            <div class="block w-full">
                                <h2 class="text-base font-bold pb-5">REGISTER</h2>
                                <form action="register.php" method="post" class="block text-[#878787]">
                                    <div class="block">
                                        <label for="" class="block pb-[10px] text-sm font-normal">
                                            Email address
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <div class="pb-5">
                                            <input type="email" name="dk_email"
                                                class="outline-none border w-full h-9 pl-3">

                                        </div>
                                    </div>
                                    <div class="block">
                                        <label for="" class="block pb-[10px] text-sm font-normal">
                                            Password
                                            <span class="text-red-400">*</span>
                                        </label>
                                        <div class="pb-5">
                                            <input type="password" name="dk_password"
                                                class="outline-none border w-full h-9 pl-3">
                                        </div>
                                    </div>
                                    <div class="flex  justify-end ">
                                        <button type="submit"
                                            class="border-2 border-[#222] rounded-full px-6 py-2 text-black hover:bg-[#56CFE1] hover:border-[#56CFE1] hover:text-white ">Register</button>
                                    </div>
                                </form>


                            </div>



                        </div>
                    </div>
                </div>

            </main>
            <?php include "./view/inc/footer.php" ?>
        </div>
    </div>
    <script src="./public/js/main.js"></script>
</body>

</html>