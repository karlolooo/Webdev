<?php
  include 'database/connection.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe-ian ni Tito</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css"> 
    <link rel="stylesheet" href="css/tails.css">
    <link rel="stylesheet" href="css/CafeCss.css">

<
</head>
<body>
    <!-- Intro -->
    <div id="intro" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-01.jpg">
        <nav id="tm-nav" class="fixed w-full">
            <div class="tm-container mx-auto px-2 md:py-6 text-right">
                <button class="md:hidden py-2 px-2" id="menu-toggle"><i class="fas fa-2x fa-bars tm-text-gold"></i></button>
                <ul class="mb-3 md:mb-0 text-2xl font-normal flex justify-end flex-col md:flex-row">
                    <li class="inline-block mb-4 mx-4"><a href="#intro" class="tm-text-gold py-1 md:py-3 px-4">Intro</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#menu" class="tm-text-gold py-1 md:py-3 px-4">Menu</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#about" class="tm-text-gold py-1 md:py-3 px-4">About</a></li>
                    <li class="inline-block mb-4 mx-4"><a href="#contact" class="tm-text-gold py-1 md:py-3 px-4">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="container mx-auto px-2 tm-intro-width">
            <div class="sm:pb-60 sm:pt-48 py-20">
                <div class="bg-black bg-opacity-70 p-12 mb-5 text-center">
                    <h1 class="text-white text-5xl tm-logo-font mb-5">Cafe-ian ni Tito</h1>
                    <p class="tm-text-gold tm-text-2xl">your daily energy booster</p>
                </div>
                
                <div class="text-center">
                    <div class="inline-block">
                        <a href="#menu" class="flex justify-center items-center bg-black bg-opacity-70 py-6 px-8 rounded-lg font-semibold tm-text-2xl tm-text-gold hover:text-gray-200 transition">
                            <i class="fas fa-coffee mr-3"></i>
                            <span>Let's explore...</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cafe Menu -->
    <div id="menu" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-02.jpg">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="text-center mb-16">
                <h2 class="bg-white tm-text-brown py-6 px-12 text-4xl font-medium inline-block rounded-md">Our Cafe Menu</h2>
            </div>
            <div class="flex flex-col lg:flex-row justify-around items-center">
                <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="img/Menu1.jpg" alt="Image" class="rounded-md">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Cappuccino</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">M ₱140.00</div>
                            <div class="text-white text-md sm:text-lg font-light">L ₱170.00</div>
                        </div>
                    </div>
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="img/Menu2.jpg" alt="Image" class="rounded-md">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Americano</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1"> M ₱145.00</div>
                            <div class="text-white text-md sm:text-lg font-light">L ₱145.00</div>
                        </div>
                    </div>
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="img/Menu3.jpg" alt="Image" class="rounded-md">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Latte #FC6</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">M ₱140.00</div>
                            <div class="text-white text-md sm:text-lg font-light">L ₱170.00</div>
                        </div>
                    </div>
                    <div class="flex items-start mb-6 tm-menu-item">
                        <img src="img/Menu4.jpg" alt="Image" class="rounded-md">
                        <div class="ml-3 sm:ml-6">
                            <h3 class="text-lg sm:text-xl tm-text-yellow mb-1">Hot Espresso</h3>
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Chocolate</h3>
                            <div class="text-white text-md sm:text-lg font-light">Size M ₱120.00 . L ₱140.00</div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                    <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Cappuccino</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">S ₱185.00</div>
                            <div class="text-white text-md sm:text-lg font-light">L ₱170.00</div>
                        </div>
                        <img src="img/Menu5.jpg" alt="Image" class="rounded-md">
                    </div>
                    <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Americano</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">S ₱130.00</div>
                            <div class="text-white text-md sm:text-lg font-light">L ₱170.00</div>
                        </div>
                        <img src="img/Menu6.jpg" alt="Image" class="rounded-md">
                    </div>
                    <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Milky Latte</h3>
                            <div class="text-white text-md sm:text-lg font-light mb-1">S ₱180.00</div>
                            <div class="text-white text-md sm:text-lg font-light">L ₱210.00</div>
                        </div>
                        <img src="img/Menu7.jpg" alt="Image" class="rounded-md">
                    </div>
                    <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                        <div class="text-right mr-6">
                            <h3 class="text-lg sm:text-xl tm-text-yellow mb-1">Iced Espresso</h3>
                            <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Mocha</h3>
                            <div class="text-white text-md sm:text-lg font-light">S ₱185 . L ₱215</div>
                        </div>
                        <img src="img/Menu8.jpg" alt="Image" class="rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="parallax-window" data-parallax="scroll" data-image-src="img/bg-03.jpg">
        <div class="container mx-auto tm-container py-24 sm:py-48">
            <div class="tm-item-container sm:ml-auto sm:mr-12 mx-auto sm:px-0 px-4">
                <div class="bg-white bg-opacity-80 p-12 pb-14 rounded-xl mb-5">
                    <h2 class="mb-6 tm-text-green text-4xl font-medium">About our cafe</h2>
                    <p class="mb-6 text-base leading-8">
                        The Cafe-ian ni Tito will provide accessible and affordable high quality food, coffee-based products, and entertainment to the thousands of residents and hotel visitors located within a five-mile radius. In time, The Cafe-ian ni Tito will establish itself as a “destination” of choice to the many residents of the greater metropolitan area, as well as numerous out-of-town visitors.
                  </p>
                </div>
                <a href="#contact" class="inline-block tm-bg-green transition text-white text-xl pt-3 pb-4 px-8 rounded-md">
                    <i class="far fa-comments mr-4"></i>
                    Contact
                </a>
            </div>
        </div>
    </div>
    <div id="contact" class="parallax-window relative" data-parallax="scroll" data-image-src="img/bg-04.jpeg">
        <div class="container mx-auto tm-container pt-24 pb-48 sm:py-48">
            <div class="flex flex-col lg:flex-row justify-around items-center lg:items-stretch">
                <div class="flex-1 rounded-xl px-10 py-12 m-5 bg-white bg-opacity-80 tm-item-container">
                    <h2 class="text-3xl mb-6 tm-text-green">Contact Us</h2>
                    <p class="mb-6 text-lg leading-8">
                       We would love to hear your feedbacks!
                    </p>
                    <p class="mb-10 text-lg">
                        <span class="block mb-2">Tel: <a href="tel:0100200340" class="hover:text-yellow-600 transition">87242895</a></span>
                        <span class="block">Email: <a href="Cafe-ianniTito@gmail.com" class="hover:text-yellow-600 transition">Cafe-ianniTito@gmail.com</a></span>
                    </p>
                    
                </div>
                <div class="flex-1 rounded-xl p-12 pb-14 m-5 bg-black bg-opacity-50 tm-item-container">
                    <form action="index.php" method="POST" class="text-lg">
                        <input type="text" name="name" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Name" required="" />
                        <input type="email" name="email" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Email" required="" />
                        <textarea rows="6" name="message" class="input w-full bg-black border-b bg-opacity-0 text-white px-0 py-4 mb-4 tm-border-gold" placeholder="Message..." required=""></textarea>
                        <div class="text-right">
                            <button type="submit" name="submit" class="text-white hover:text-yellow-500 transition">Send it</button>
                        </div>
                      </form>
                </div>
            </div>
            <footer class="absolute bottom-0 left-0 w-full">
                <div class="text-white container mx-auto tm-container p-8 text-lg flex flex-col md:flex-row justify-between">
                    <span>Copyright 2022All rights reserved.</span>
                    
                </div>
            </footer>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script>

        function checkAndShowHideMenu() {
            if(window.innerWidth < 768) {
                $('#tm-nav ul').addClass('hidden');
            } else {
                $('#tm-nav ul').removeClass('hidden');
            }
        }

        $(function(){
            var tmNav = $('#tm-nav');
            tmNav.singlePageNav();

            checkAndShowHideMenu();
            window.addEventListener('resize', checkAndShowHideMenu);

            $('#menu-toggle').click(function(){
                $('#tm-nav ul').toggleClass('hidden');
            });

            $('#tm-nav ul li').click(function(){
                if(window.innerWidth < 768) {
                    $('#tm-nav ul').addClass('hidden');
                }
            });

            $(document).scroll(function() {
                var distanceFromTop = $(document).scrollTop();

                if(distanceFromTop > 100) {
                    tmNav.addClass('scroll');
                } else {
                    tmNav.removeClass('scroll');
                }
            });

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>

 <?php
 if (isset($_POST['submit'])){
       $name         = $_POST['name'];
       $email        = $_POST['email'];
       $message      = $_POST['message'];
         $sql        = "INSERT INTO cafe_tito (name, email, message) VALUES (?,?,?)";
         $stmtinsert = $db->prepare($sql);
         $result = $stmtinsert->execute([$name, $email, $message]);
         if($result){
           ?>
         <script type="text/javascript">
             Swal.fire(
             'Success',
             'Thank you!',
             'success'
           )
         </script>
             <?php
           }else {
             "There were errors while saving the data.";
           }
         }
  ?>
</body>
</html>
