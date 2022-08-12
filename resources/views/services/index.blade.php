<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Service App</title>
</head>


<body>
    <!-- Navbar -->
    <nav class="relative container mx-auto p-6">
      <!-- Flex container -->
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
          <img src="img/logo.svg" alt="" />
        </div>
        <!-- Menu Items -->
        <div class="hidden space-x-6 md:flex">
          <a href="#" class="hover:text-darkGrayishBlue">Home</a>
          <a href="#" class="hover:text-darkGrayishBlue">About</a>
          <a href="#" class="hover:text-darkGrayishBlue">Contact Us</a>
          <a href="#" class="hover:text-darkGrayishBlue">Careers</a>
        </div>
        <!-- Button -->
        <a
          href="/register"
          class="hidden  ml-3 p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block"
          ><i class="fa-solid fa-user-plus"></i>Register</a
        >
        <a
        href="/login"
        class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block"
        ><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a
      >


        <!-- Hamburger Icon -->
        <button
          id="menu-btn"
          class="block hamburger md:hidden focus:outline-none"
        >
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </button>
      </div>





    <!-- Features Section -->


    <!-- CTA Section -->


    <!-- Footer -->
    <footer class="bg-veryDarkBlue">
      <!-- Flex Container -->
      <div
        class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
      >
        <!-- Logo and social links container -->
        <div
          class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
        >
          <div class="mx-auto my-6 text-center text-white md:hidden">
            Copyright &copy; 2022, All Rights Reserved
          </div>
      </div>
    </footer>

    <script src="js/script.js"></script>
  </body>

</html>
