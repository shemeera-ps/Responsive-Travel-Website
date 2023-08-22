<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book your fight now---with Travel with US</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- EXTERNAL STYLE SHEET -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
 
    <!-- ALPINE JS CDN LINK  -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    
    </head>
<body class="p-0 m-0 box-border">
    <header class="w-full h-16 px-6 py-2 font-bold">
        <nav class="navbar flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{asset('images/travel-logo.png')}}" alt="Logo" class="h-12 w-12 rounded-[50px]">
        </div>
        <div class="flex items-center space-x-4">
        <div class="navbar__links mr-8">HOME</div>
        <div class="navbar__links mr-8">ABOUT US</div>
        <!-- <div class="navbar__links mr-8">DESTINATIONS</div> -->
            @if (Route::has('login'))
               
                    @auth
                        <div class="mr-8">WELCOME, {{ Auth::user()->name }}</div>
                       
                        <div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a:href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="hover:cursor-pointer">
                                    {{ __('LOG OUT') }}
                                </a>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class=" mr-8">LOG IN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" mr-8">REGISTER</a>
                        @endif
                    @endauth
              
            @endif
        </div>
        </nav>
    </header>
    <main class="w-full   bg-cover bg-no-repeat bg-center relative">
        <section class="home relative ">
            <video autoplay loop muted poster="{{ asset('path_to_your_poster_image.jpg') }}" class="home__video">
                <source src="{{ asset('images/bg-video.mp4') }}" type="video/mp4">   
            </video>
            <div class="home__content absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-2/3 flex justify-center flex-col items-center">
                <h3 class="capitalize text-white text-center lg:text-xl mb-2">travel with us</h3>
                <h1 class="uppercase text-white text-center md:text-2xl xl:text-4xl 2xl:text-4xl lg:text-3xl mb-4 items-center text-2xl font-bold">Discover The World of Adventure</h1>
                <button class="w-40 h-12 text-white text-center uppercase lg:font-bold border-gray-600 rounded-xl border-2 border-solid  hover:bg-gray-600 transition-all duration-300 ease-in-out">Book Your Trip</button>
            </div>
           
        </section>
        <section class="destinations">
            <div class="flex justify-center mt-10 flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row items-center">
                <div class="w-48 h-64 justify-center items-center flex flex-col py-4 hover:border-gray-600 hover:border-2 hover:border-solid mb-4 ">
                    <img src="{{asset('images/adventure.jpg')}}" alt="" class="w-32 h-32 rounded-3xl">
                    <h3 class="uppercase text-gray-400 py-2">ADVENTURES</h3>
                    <h6 class="text-xs text-gray-500">4 DESTINATIONS</h6>
                </div>
                <div class="w-48 h-64 justify-center items-center flex flex-col py-4  hover:border-gray-600 hover:border-2 hover:border-solid  ">
                    <img src="{{asset('images/beaches-logo.jpg')}}" alt="" class="w-32 h-32 rounded-3xl">
                    <h3 class="uppercase text-gray-400 py-2">beaches</h3>
                    <h6 class="text-xs text-gray-500">4 DESTINATIONS</h6>
                </div>
                <div class="w-48 h-64 justify-center items-center flex flex-col py-4  hover:border-gray-600 hover:border-2 hover:border-solid  ">
                    <img src="{{asset('images/camping.jpg')}}" alt=""  class="w-32 h-32 rounded-3xl">
                    <h3 class="uppercase text-gray-400 py-2">camping</h3>
                    <h6 class="text-xs text-gray-500">4 DESTINATIONS</h6>
                </div>
                <div  class="w-48 h-64 justify-center items-center flex flex-col py-4  hover:border-gray-600 hover:border-2 hover:border-solid  ">
                    <img src="{{asset('images/street-food.jpg')}}" alt=""  class="w-32 h-32 rounded-3xl">
                    <h3 class="uppercase text-gray-400 py-2">food varities</h3>
                    <h6 class="text-xs text-gray-500">4 DESTINATIONS</h6>
                </div>
            </div>
            <h1 class="destinations__heading text-center capitalize  mt-8 font-bold text-3xl hover:text-gray-600 hover:cursor-pointer">Choose from our range of packages</h1>
            <div class="destinations__container flex justify-center mb-20 mt-20 items-center mx-auto flex-col md:flex-row lg:flex-row xl:flex-row 2xl:flex-row items-center">
                <div class="container__items  hover:cursor-pointer h-[30rem] w-96 flex flex-col lg:mr-8 xl:mr-8 2xl:mr-8 border-solid border-2 border-gray-100 mb-2">
                    <img src="{{asset('images/mountain.jpeg')}}" alt="" class="h-1/2 w-96">
                    <div class="flex flex-col justify-center items-center pt-10 ">
                        <p>MOUNTAINS</p>
                        <button class="text-gray text-center uppercase lg:font-bold border-gray-600 w-40 h-16 border-2 border-solid  mt-4  transition-all duration-300 ease-in-out">EXPLORE</button>
                    </div>
                </div>
                <div class="container__items  hover:cursor-pointer h-[30rem] w-96 flex flex-col  lg:mr-8 xl:mr-8 2xl:mr-8 border-solid border-2 border-gray-100 mb-2">
                    <img src="{{asset('images/taj-mahal.jpg')}}" alt="" class="h-1/2 w-96">
                    <div class="flex flex-col justify-center items-center pt-10 ">
                        <p>TAJ MAHAL</p>
                        <button class="text-gray text-center uppercase lg:font-bold border-gray-600 w-40 h-16 border-2 border-solid  mt-4  transition-all duration-300 ease-in-out">EXPLORE</button>
                    </div>
                </div>
                <div class="container__items  hover:cursor-pointer h-[30rem] w-96 flex flex-col lg:mr-8 xl:mr-8 2xl:mr-8 border-solid border-2 border-gray-100 mb-2">
                    <img src="{{asset('images/sea.jpeg')}}" alt="" class="h-1/2 w-full">
                    <div class="flex flex-col justify-center items-center pt-10 ">
                        <p>OCEANS</p>
                        <button class="text-gray text-center uppercase lg:font-bold border-gray-600 w-40 h-16 border-2 border-solid  mt-4 transition-all duration-300 ease-in-out">EXPLORE</button>
                    </div>
                </div>
                
                <div class="container__items  hover:cursor-pointer h-[30rem] w-96 flex flex-col lg:mr-8 xl:mr-8 2xl:mr-8 border-solid border-2 border-gray-100 mb-2">
                    <img src="{{asset('images/burj-khalifa.jpg')}}" alt="" class="h-1/2 w-full border-none">
                    <div class="flex flex-col justify-center items-center pt-10 ">
                        <p>BURJ KHALIFA</p>
                        <button class="text-gray text-center uppercase lg:font-bold border-gray-600 w-40 h-16 border-2 border-solid  mt-4  transition-all duration-300 ease-in-out">EXPLORE</button>
                    </div>
                </div>
                
            </div>
        </section>
    </main>
    <footer class="about bg-cyan-50 text-gray h-5/6 w-full animated-footer" id="footer__animated">
            <div class="lg:w-1/3 xl:w-1/3 2xl:w-1/3 m-auto py-64 w-1/2 hidden-container"  id="about__container">
                <h1 class="about__heading text-center text-2xl capitalize pt-10 pb-10">
                    All About Us
                </h1>
                <p class=" leading-10 text-justify">
                For most people who travel, the goal is to relax. 
                Ask someone about their travels, and they'll gush about the breathtaking views, delicious foods, and unforgettable experiences. 
                If you've been asking yourself whether you should go on vacation, the long and short of it is yes, absolutely! Travel gets a lot of hype for the benefits it can have on your mental and physical health for a good reason—several reasons, in fact.
                <b>Then what are you waiting for???? Book your trip now!!</b>
                </p>
                <div class="about__form mt-10">
                    <form action="#" method="get" class=" flex flex-col xl:flex-row 2xl:flex-row lg:flex-row">
                        <input type="email" name="" id="" placeholder="Enter your email here..."class="h-12 xl:w-2/3 2xl:w-2/3 lg:w-2/3  w-full px-2 border rounded-md transition duration-300 focus:border-gray-500 focus:outline-none focus:ring focus:ring-gray-600">
                        <button type="submit" class=" lg:w-40 xl:w-40 2xl:w-40 2xl:ml-2  lg:mt-0 lg:ml-2 2xl:mt-0 xl:mt-0 xl:ml-2 h-12 w-full mt-2 text-gray text-center uppercase lg:font-bold border-gray-600 rounded-xl border-2 border-solid  hover:bg-gray-600 transition-all duration-300 ease-in-out">Book My Trip</button>
                    </form>
                </div>
                <div>
                    <ul class="flex mt-40 lg:ml-40 xl:ml-40 2xl:ml-40 ml-2 md:ml-4">
                        <li class="text-xl mr-8"><i class="fa-brands fa-facebook"></i></li>
                        <li class="text-xl mr-8"><i class="fa-brands fa-square-instagram"></i></li>
                        <li class="text-xl mr-8"><i class="fa-brands fa-twitter"></i></li>
                        <li class="text-xl mr-8"><i class="fa-solid fa-envelope"></i></li>
                    </ul>
                </div>
            </div>
    </footer>
<script>
    const animatedParagraph = document.getElementById('about__container');
    const animatedFooter = document.getElementById('footer__animated');

    setTimeout(() => {
  animatedParagraph.classList.add('visible-container');
  animatedFooter.classList.add('footer-visible');
}, 1000);
</script>
</body>
</html>