<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/63ff1e2aef.js" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>

<body class="bg-hero-pattern" style="background-image: url('Images/download.svg');">

    <header class="h-16 bg-hero-white shadow-md sticky top-0 z-30">
        <!-- <header class="h-20 bg-[#e4efe5]"> -->
        <nav class="relative px-2 pb-3 pt-1">

            <div class="container mx-auto my-auto flex justify-between items-center">
                <!-- <img src="logo2.png" alt="Tailwindcss Navigation" class="h-14 mx-3 rounded-lg"> -->
                <p class="font-cinzel text-4xl font-medium my-2 mx-4 items-baseline text-hero-red">
                    FUBIZ
                </p>

                <div class="flex items-center justify-center hidden md:block">
                    <div class="flex border-2 rounded-md">
                        <input type="text" class="px-4 py-2 w-80" placeholder="Search...">
                        <button class="flex items-center justify-center px-4 border-l">
                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <ul class="hidden md:flex space-x-6">
                    <li><a href="Homepage.html" class="hover:text-lg">Home</a></li>
                    <li><a href="#" class="hover:text-lg">News</a></li>
                    <li class="flex relative group">
                        <a href="" class="mr-1 hover:text-lg">Services</a>
                        <i class="fa fa-solid fa-chevron-down fa-2xs pt-3"></i>
                        <!-- Submenu starts -->
                        <ul class="absolute bg-white p-3 w-52 top-6 transform scale-0 group-hover:scale-100 transition duration-150 ease-in-out origin-top shadow-lg">
                            <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Webdesign</a></li>
                            <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Digital marketing</a></li>
                            <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">SEO</a></li>
                            <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">Ad campaigns</a></li>
                            <li class="text-sm hover:bg-slate-100 leading-8"><a href="#">UX Design</a></li>
                        </ul>
                        <!-- Submenu ends -->
                    </li>
                    <li><a href="#" class="hover:text-lg">About</a></li>
                    <li><a href="#" class="hover:text-lg">Contact</a></li>
                </ul>

                <div class="space-x-10 mr-5">
                    <a href="#!" role="button" class="text-hero-red">
                        <i class="fa-solid fa-user fa-lg"></i>
                    </a>
                    <a href="#!" role="button" class="text-hero-red">
                        <i class=" fa-solid fa-cart-shopping fa-lg"></i>
                    </a>
                </div>
                <button id="mobile-icon" class="md:hidden">
                    <i onclick="changeIcon(this)" class="fa-solid fa-bars"></i>
                </button>
            </div>
            </div>
        </nav>
    </header>

    <div class=" my-10 mx-3 bg-hero-white shadow-lg shadow-slate-900 px-10 py-5 rounded-md ">
        <div class="space-y-10">

            <div class="border-b border-gray-500/10 pb-1 m-2">
                <section class="pt-5 pb-2 bg-blueGray-100 rounded-b-10xl overflow-hidden">
                    <div class="container px-4 mx-auto">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
                                <div class="flex -mx-4 flex-wrap items-center justify-between lg:justify-start lg:items-start xl:items-center">
                                    <div class="w-full sm:w-auto min-w-max px-4 text-center flex sm:flex-col items-center justify-center">
                                        <a class="inline-block sm:mb-12 mr-4 sm:mr-0 transform -rotate-90 sm:transform-none hover:text-darkBlueGray-400" href="#">
                                            <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.54064 7.21015C1.18719 7.59662 0.615928 7.59662 0.265087 7.21015C-0.087058 6.82369 -0.0896663 6.19929 0.265087 5.81282L5.36206 0.289847C5.71421 -0.0966173 6.28416 -0.0966172 6.63892 0.289847L11.7359 5.81282C12.088 6.19785 12.088 6.82369 11.7359 7.21015C11.3824 7.59662 10.8112 7.59662 10.4603 7.21015L5.99853 2.68073L1.54064 7.21015Z" fill="currentColor"></path>
                                            </svg>
                                        </a>
                                        <a class="h-30 block mb-4 mr-2 sm:mr-0" href="#">
                                            <img class="h-full w-14" src="Images/images.jpeg" alt="">
                                        </a>
                                        <a class="hidden sm:block h-30 mb-4 mr-2 sm:mr-0" href="#">
                                            <img class="h-full w-14" src="Images/81dcZW0Fm4L._SL1500_.jpg" alt="">
                                        </a>
                                        <a class="hidden sm:block h-30 mb-4 mr-2 sm:mr-0 rounded-xl border-2 border-blueGray-500" href="#">
                                            <img class="h-full w-14" src="Images/419jAVjFsGL.jpg" alt="">
                                        </a>
                                        <a class="h-30 block mb-4 sm:mb-12 mr-4 sm:mr-0" href="#">
                                            <img class="h-full w-14" src="Images/511lQ9KdnLL.jpg" alt="">
                                        </a>
                                        <a class="inline-block transform -rotate-90 sm:transform-none hover:text-darkBlueGray-400" href="#">
                                            <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4594 0.289849C10.8128 -0.0966154 11.3841 -0.0966154 11.7349 0.289849C12.0871 0.676313 12.0897 1.30071 11.7349 1.68718L6.63794 7.21015C6.28579 7.59662 5.71584 7.59662 5.36108 7.21015L0.264109 1.68718C-0.0880364 1.30215 -0.0880363 0.676312 0.264109 0.289848C0.617558 -0.096616 1.18882 -0.0966159 1.53966 0.289848L6.00147 4.81927L10.4594 0.289849Z" fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="w-full sm:w-9/12 px-4">

                                        <?php
                                        // Check if the 'id' parameter is set in the URL
                                        if (isset($_GET['id'])) {
                                            // Retrieve the 'id' parameter from the URL
                                            $id = $_GET['id'];

                                            // Database connection details
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "wp";

                                            // Create a connection to the database
                                            $conn = new mysqli($servername, $username, $password, $dbname, 3360);

                                            // Check the connection
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            // Fetch the laptop details from the database based on the 'id'
                                            $sql = "SELECT * FROM laptops WHERE product_id = '$id'";
                                            $result = $conn->query($sql);

                                            if ($result && $result->num_rows > 0) {
                                                // Fetch the laptop details
                                                $row = $result->fetch_assoc();
                                                $name = $row['name'];
                                                $image = $row['laptop_image'];
                                                $price = $row['price'];

                                                // Display the laptop details on the product page
                                                echo "<img src='data:image/jpeg;base64," . base64_encode($image) . "' class='mb-5' alt='Laptop Image'>";
                                            } else {
                                                echo "Laptop not found.";
                                            }

                                            // Close the database connection
                                            $conn->close();
                                        } else {
                                            echo "Invalid request. Laptop ID not provided.";
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 px-4">
                                <div class="max-w-md mb-6">
                                    <span class="text-xs text-gray-400 tracking-wider">APPLE #3299803</span>
                                    <h2 class="mt-6 mb-4 text-5xl md:text-7xl lg:text-5xl font-heading font-medium">
                                        <?php
                                        echo "$name";
                                        ?></h2>
                                    <p class="flex items-center mb-6">
                                        <span class="mr-2 text-sm text-blue-500 font-medium">$</span>
                                        <span class="text-3xl text-blue-500 font-medium"> <?php
                                                                                            echo "$price";
                                                                                            ?></h2></span>
                                    </p>
                                    <p class="text-lg text-gray-400">The nulla commodo, commodo eros a lor, tristique
                                        lectus. Lorem
                                        sad 128 GB silver.</p>
                                </div>
                                <div class="flex mb-6 items-center">
                                    <div class="inline-flex mr-4">
                                        <button class="mr-1">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 7.91679H12.4167L10 0.416779L7.58333 7.91679H0L6.18335 12.3168L3.81668 19.5835L10 15.0835L16.1834 19.5835L13.8167 12.3168L20 7.91679Z" fill="#C1C9D3"></path>
                                            </svg>
                                        </button>
                                        <button class="mr-1">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 7.91679H12.4167L10 0.416779L7.58333 7.91679H0L6.18335 12.3168L3.81668 19.5835L10 15.0835L16.1834 19.5835L13.8167 12.3168L20 7.91679Z" fill="#C1C9D3"></path>
                                            </svg>
                                        </button>
                                        <button class="mr-1">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 7.91679H12.4167L10 0.416779L7.58333 7.91679H0L6.18335 12.3168L3.81668 19.5835L10 15.0835L16.1834 19.5835L13.8167 12.3168L20 7.91679Z" fill="#C1C9D3"></path>
                                            </svg>
                                        </button>
                                        <button class="mr-1">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 7.91679H12.4167L10 0.416779L7.58333 7.91679H0L6.18335 12.3168L3.81668 19.5835L10 15.0835L16.1834 19.5835L13.8167 12.3168L20 7.91679Z" fill="#C1C9D3"></path>
                                            </svg>
                                        </button>
                                        <button>
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 7.91679H12.4167L10 0.416779L7.58333 7.91679H0L6.18335 12.3168L3.81668 19.5835L10 15.0835L16.1834 19.5835L13.8167 12.3168L20 7.91679Z" fill="#C1C9D3"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <span class="text-md text-gray-400">4.59</span>
                                </div>
                                <div class="mb-6">
                                    <h4 class="mb-3 font-heading font-medium">
                                        <span>Color:</span>
                                        <span class="text-gray-400">Silver</span>
                                    </h4>
                                    <button class="inline-flex items-center justify-center p-1 rounded-full border border-gray-300">
                                        <div class="w-6 h-6 rounded-full bg-white"></div>
                                    </button>
                                    <button class="inline-flex items-center justify-center p-1 rounded-full border border-transparent">
                                        <div class="w-6 h-6 rounded-full bg-orange-800"></div>
                                    </button>
                                    <button class="inline-flex items-center justify-center p-1 rounded-full border border-transparent">
                                        <div class="w-6 h-6 rounded-full bg-blue-900"></div>
                                    </button>
                                    <button class="inline-flex items-center justify-center p-1 rounded-full border border-transparent">
                                        <div class="w-6 h-6 rounded-full bg-yellow-500"></div>
                                    </button>
                                </div>
                                <div class="mb-10">
                                    <h4 class="mb-3 font-heading font-medium">Qty:</h4>
                                    <input class="w-24 px-3 py-2 text-center bg-white border-2 border-blue-500 outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl" type="text" placeholder="1">
                                </div>

                                <div>
                                    <h4 class="mb-6 font-heading font-medium">More information</h4>
                                    <button class="flex w-full pl-6 lg:pl-12 pr-6 py-4 mb-4 justify-between items-center leading-7 rounded-2xl border-2 border-blueGray-200 hover:border-blueGray-300">
                                        <h3 class="text-lg font-heading font-medium">Shipping &amp; returns</h3>
                                        <span>
                                            <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4594 0.289848C10.8128 -0.096616 11.3841 -0.096616 11.7349 0.289848C12.0871 0.676312 12.0897 1.30071 11.7349 1.68718L6.63794 7.21015C6.28579 7.59662 5.71584 7.59662 5.36108 7.21015L0.264109 1.68718C-0.0880363 1.30215 -0.0880363 0.676312 0.264109 0.289848C0.617558 -0.096616 1.18882 -0.096616 1.53966 0.289848L6.00147 4.81927L10.4594 0.289848Z" fill="black"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="flex w-full pl-6 lg:pl-12 pr-6 py-4 justify-between items-center leading-7 rounded-2xl border-2 border-blueGray-200 hover:border-blueGray-300">
                                        <h3 class="text-lg font-heading font-medium">Product details</h3>
                                        <span>
                                            <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4594 0.289848C10.8128 -0.096616 11.3841 -0.096616 11.7349 0.289848C12.0871 0.676312 12.0897 1.30071 11.7349 1.68718L6.63794 7.21015C6.28579 7.59662 5.71584 7.59662 5.36108 7.21015L0.264109 1.68718C-0.0880363 1.30215 -0.0880363 0.676312 0.264109 0.289848C0.617558 -0.096616 1.18882 -0.096616 1.53966 0.289848L6.00147 4.81927L10.4594 0.289848Z" fill="black"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="mt-4 mb-4 flex items-center justify-end gap-x-6">
                <button type="button" class="text-base font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" class="bg-[#eb364f] px-5 py-1.5 rounded-3xl text-base font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline ">Buy</button>
                <button type="submit" class="bg-[#eb364f] px-5 py-1.5 rounded-3xl text-base font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline ">Add
                    to cart</button>
            </div>
        </div>
    </div>

    <footer class="p-4 bg-hero-white sm:p-6 shadow-2xl shadow-slate-900 ">
        <div class="">
            <div class="md:flex md:justify-between">
                <div class="mb-3 md:mb-0">
                    <p class="font-cinzel text-4xl font-medium my-2 mx-4 items-baseline text-hero-red">
                        FUBIZ
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Resources
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://flowbite.com" class="hover:underline">Flowbite</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Follow us
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-3" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-red-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-red-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-red-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-red-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-red-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>