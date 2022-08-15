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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                <a href="/" class="hover:text-darkGrayishBlue">Home</a>
                <a href="/about" class="hover:text-darkGrayishBlue">About</a>
                <a href="/contact" class="hover:text-darkGrayishBlue">Contact Us</a>
                <a href="/careers" class="hover:text-darkGrayishBlue">Careers</a>
            </div>

            @auth
                <li>
                    <span class="font-bold "> Welcome {{ auth()->user()->name }}</span>
                </li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
            @else
                <a href="/register"
                    class="hidden  ml-3 p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block"><i
                        class="fa-solid fa-user-plus"></i> Register</a>
                <a href="/login"
                    class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            @endauth
        </div>
    </nav>

    <section id="testimonials">
        <!-- Container to heading and testm blocks -->
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
          <!-- Heading -->
          <h2 class="text-4xl font-bold text-center">
            What's Different About Manage?
          </h2>
          <!-- Testimonials Container -->
          <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
            <!-- Testimonial 1 -->
            <div
              class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3"
            >
              <img src="images/avatar-anisha.png" class="w-16 -mt-14" alt="" />
              <h5 class="text-lg font-bold">Anisha Li</h5>
              <p class="text-sm text-darkGrayishBlue">
                “Manage has supercharged our team’s workflow. The ability to
                maintain visibility on larger milestones at all times keeps
                everyone motivated.”
              </p>
            </div>

            <!-- Testimonial 2 -->
            <div
              class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3"
            >
              <img src="images/avatar-ali.png" class="w-16 -mt-14" alt="" />
              <h5 class="text-lg font-bold">Ali Bravo</h5>
              <p class="text-sm text-darkGrayishBlue">
                “We have been able to cancel so many other subscriptions since
                using Manage. There is no more cross-channel confusion and
                everyone is much more focused.”
              </p>
            </div>

            <!-- Testimonial 3 -->
            <div
              class="hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3"
            >
              <img src="images/avatar-richard.png" class="w-16 -mt-14" alt="" />
              <h5 class="text-lg font-bold">Richard Watts</h5>
              <p class="text-sm text-darkGrayishBlue">
                “Manage has supercharged our team’s workflow. The ability to
                maintain visibility on larger milestones at all times keeps
                everyone motivated.”
              </p>
            </div>
          </div>
        </div>

            <!--Footer-->
    <footer class="bg-veryDarkBlue">
        <!-- Flex Container -->
        <div
            class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
            <!-- Logo and social links container -->
            <div
                class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                <div class="mx-auto my-6 text-center text-white md:hidden">
                    Copyright &copy; 2022, All Rights Reserved
                </div>
            </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>
