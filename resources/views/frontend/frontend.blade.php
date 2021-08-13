<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="img/favicon.png" type="image/png">

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/bootstrap.js"></script>	
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/styles.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

        <title>POSITRON</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo"><h3>Positron</h3></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Beranda</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">Kaum</a>
                        </li>
                        <li class="nav__item">
                            <a href="#discover" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#place" class="nav__link">Kaum</a>
                        </li>
                    </ul>

                    <!-- <div class="nav__dark">
                         Theme change button 
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div> -->

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <!-- <img src="/img/home1.jpg" alt="" class="home__img"> -->

                <div class="home__container container grid">
                    <div class="home__data">
                        <img class="home__data-title" src="/img/logo.png" alt="">
                        <!-- <h1 class="home__data-title">Positron</b></h1> -->
                        <span class="home__data-subtitle"><h3>Program Orientasi Mahasiswa Teknik Elektro</h3></span>
                        <a href="#" class="button">Explore</a>
                        <a href="#" class="button">Find Your Guardian</a>

                    </div>

                    <!-- <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div> -->

                    <!-- <div class="home__info">
                        <div>
                            <span class="home__info-title">5 best places to visit</span>
                            <a href="" class="button button--flex button--link home__info-button">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="/img/home2.jpg" alt="" class="home__info-img">
                        </div>
                    </div> -->
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section">
                

                <div class="video__container container">
                    

                    <div class="video__content">
                        <video id="video-file" width="720">
                            <source src="/video/video.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>

                <div class="video__container container">
                    <p class="section__title">Kene Lo, Elektro</p>
                    <p class="video__description">Find out more with our video of the most beautiful and 
                        pleasant places for you and your family.
                    </p>
                </div> 
                
                
                <!-- <img src="/img/2021.png" alt=""> -->
            </section>

            <!-- ==================================================  Pengenalan Logo  ================================================== -->
<script type="text/javascript">
    function changeText1() {
        document.getElementById("pText").innerHTML = "<h3>Filosofi 2</h3> <br>mempunyai arti Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum earum placeat alias, libero unde quae, corrupti blanditiis consectetur, cum soluta ut illum asperiores numquam nostrum nemo. Sequi natus ipsam doloribus.";
    }
    function changeText2() {
        document.getElementById("pText").innerHTML = "<h3>Filosofi 1</h3> <br>mempunyai artiLorem ipsum dolor sit amet consectetur, adipisicing elit. Harum earum placeat alias, libero unde quae, corrupti blanditiis consectetur, cum soluta ut illum asperiores numquam nostrum nemo. Sequi natus ipsam doloribus.";
    }
    function changeText3() {
        document.getElementById("pText").innerHTML = "<h3>Filosofi 3</h3> <br>mempunyai artiLorem ipsum dolor sit amet consectetur, adipisicing elit. Harum earum placeat alias, libero unde quae, corrupti blanditiis consectetur, cum soluta ut illum asperiores numquam nostrum nemo. Sequi natus ipsam doloribus.";
    }
    function changeText4() {
        document.getElementById("pText").innerHTML = "<h3>Filosofi 4</h3> <br>mempunyai artiLorem ipsum dolor sit amet consectetur, adipisicing elit. Harum earum placeat alias, libero unde quae, corrupti blanditiis consectetur, cum soluta ut illum asperiores numquam nostrum nemo. Sequi natus ipsam doloribus.";
    }
    function changeText5() {
        document.getElementById("pText").innerHTML = "<h3>Filosofi 5</h3> <br>mempunyai artiLorem ipsum dolor sit amet consectetur, adipisicing elit. Harum earum placeat alias, libero unde quae, corrupti blanditiis consectetur, cum soluta ut illum asperiores numquam nostrum nemo. Sequi natus ipsam doloribus.";
    }
    function changeTextdefault() {
        document.getElementById("pText").innerHTML = "POSITRON adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum earum placeat alias, libero unde quae, corrupti blanditiis consectetur, cum soluta ut illum asperiores numquam nostrum nemo. Sequi natus ipsam doloribus.";
    }

    
</script>
    <section class="logo__description section">
        <h2 class="container section__title logo_item">Pengenalan logo</h2>
        <div class="container logo">
            <div class="icon">
                <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Frame 1">
                    <rect width="200" height="200" fill="white"/>
                    <g id="Group 1">
                    <g id="Rectangle_6" onMouseOver="changeText1()" onmouseout="changeTextdefault()">
                    <path d="M174.939 75.9172C174.939 75.9172 135.297 76.603 116.343 100.518C98.7774 122.68 93.9696 166.617 93.9696 166.617C93.9696 166.617 129.35 174.177 148.304 150.262C165.87 128.1 174.939 75.9172 174.939 75.9172Z" />
                    <path d="M174.939 75.9172L174.896 73.4175L177.92 73.3652L177.402 76.3453L174.939 75.9172ZM116.343 100.518L118.302 102.071L118.302 102.071L116.343 100.518ZM93.9696 166.617L93.4472 169.062L91.2388 168.59L91.4844 166.345L93.9696 166.617ZM148.304 150.262L146.345 148.709L146.345 148.709L148.304 150.262ZM174.939 75.9172C174.982 78.4168 174.983 78.4168 174.983 78.4168C174.983 78.4168 174.984 78.4168 174.983 78.4168C174.983 78.4168 174.982 78.4168 174.981 78.4168C174.978 78.4169 174.973 78.417 174.965 78.4172C174.95 78.4175 174.926 78.4181 174.892 78.419C174.824 78.4208 174.72 78.4239 174.581 78.429C174.303 78.4393 173.886 78.4575 173.344 78.4891C172.261 78.5524 170.68 78.6693 168.72 78.8832C164.796 79.3116 159.37 80.1266 153.372 81.6705C141.301 84.7775 127.281 90.7418 118.302 102.071L114.383 98.965C124.359 86.379 139.637 80.043 152.126 76.8283C158.407 75.2114 164.077 74.3604 168.178 73.9128C170.23 73.6887 171.895 73.5652 173.053 73.4976C173.632 73.4638 174.085 73.4439 174.397 73.4324C174.553 73.4267 174.674 73.423 174.758 73.4208C174.8 73.4196 174.832 73.4189 174.855 73.4184C174.867 73.4181 174.876 73.4179 174.883 73.4178C174.886 73.4177 174.889 73.4177 174.891 73.4176C174.892 73.4176 174.893 73.4176 174.894 73.4176C174.895 73.4176 174.896 73.4175 174.939 75.9172ZM118.302 102.071C109.87 112.71 104.377 128.791 100.996 142.478C99.3173 149.275 98.1801 155.391 97.4629 159.807C97.1045 162.013 96.8516 163.793 96.6886 165.016C96.6071 165.628 96.5482 166.101 96.5098 166.418C96.4907 166.577 96.4767 166.697 96.4676 166.776C96.463 166.816 96.4597 166.845 96.4576 166.864C96.4565 166.874 96.4557 166.88 96.4553 166.885C96.455 166.887 96.4549 166.888 96.4548 166.889C96.4547 166.889 96.4547 166.889 96.4547 166.89C96.4547 166.89 96.4547 166.889 93.9696 166.617C91.4844 166.345 91.4845 166.345 91.4846 166.344C91.4846 166.344 91.4847 166.343 91.4848 166.342C91.485 166.34 91.4853 166.337 91.4857 166.334C91.4864 166.328 91.4874 166.319 91.4887 166.307C91.4913 166.283 91.4952 166.249 91.5003 166.205C91.5104 166.117 91.5255 165.987 91.5459 165.819C91.5866 165.482 91.6481 164.989 91.7324 164.356C91.9009 163.09 92.1608 161.264 92.5276 159.005C93.2608 154.49 94.4234 148.237 96.1421 141.279C99.5565 127.457 105.251 110.488 114.383 98.965L118.302 102.071ZM93.9696 166.617C94.492 164.173 94.4912 164.172 94.4906 164.172C94.4905 164.172 94.49 164.172 94.49 164.172C94.4898 164.172 94.4902 164.172 94.4911 164.172C94.493 164.173 94.497 164.174 94.503 164.175C94.5152 164.177 94.5357 164.182 94.5644 164.187C94.6217 164.199 94.7118 164.217 94.8329 164.239C95.0753 164.285 95.4419 164.35 95.9201 164.427C96.877 164.579 98.2787 164.774 100.025 164.936C103.523 165.26 108.373 165.45 113.785 164.92C124.647 163.855 137.455 159.926 146.345 148.709L150.264 151.815C140.2 164.513 125.841 168.762 114.273 169.896C108.471 170.465 103.292 170.26 99.5631 169.914C97.6962 169.741 96.1856 169.532 95.1336 169.364C94.6074 169.281 94.1953 169.207 93.9102 169.153C93.7675 169.127 93.6566 169.105 93.5789 169.089C93.5401 169.081 93.5096 169.075 93.4876 169.071C93.4765 169.068 93.4677 169.066 93.4609 169.065C93.4576 169.064 93.4547 169.064 93.4524 169.063C93.4513 169.063 93.45 169.063 93.4494 169.063C93.4482 169.062 93.4472 169.062 93.9696 166.617ZM146.345 148.709C154.788 138.057 161.341 119.91 165.803 104.1C168.016 96.2553 169.687 89.0934 170.803 83.8922C171.361 81.2926 171.781 79.1856 172.06 77.7312C172.2 77.0041 172.304 76.4403 172.374 76.0599C172.408 75.8697 172.434 75.7254 172.451 75.6294C172.46 75.5814 172.466 75.5455 172.47 75.522C172.472 75.5103 172.474 75.5016 172.475 75.4961C172.475 75.4934 172.476 75.4914 172.476 75.4902C172.476 75.4897 172.476 75.4894 172.476 75.4891C172.476 75.489 172.476 75.4891 174.939 75.9172C177.402 76.3453 177.402 76.3458 177.402 76.3465C177.402 76.347 177.402 76.3479 177.402 76.3489C177.401 76.3509 177.401 76.3537 177.4 76.3572C177.399 76.3644 177.397 76.3747 177.395 76.3881C177.39 76.415 177.383 76.4543 177.374 76.5057C177.356 76.6085 177.328 76.7599 177.292 76.9573C177.22 77.3521 177.113 77.9311 176.97 78.6741C176.685 80.1601 176.258 82.3029 175.692 84.9418C174.559 90.2174 172.864 97.4862 170.615 105.458C166.15 121.28 159.386 140.305 150.264 151.815L146.345 148.709Z" fill="white"/>
                    </g>
                    <g id="Rectangle_7" onMouseOver="changeText4()" onmouseout="changeTextdefault()">
                    <path d="M24.5671 75.9172C24.5671 75.9172 64.2094 76.603 83.1635 100.518C100.729 122.68 105.537 166.617 105.537 166.617C105.537 166.617 70.1559 174.177 51.2018 150.262C33.6365 128.1 24.5671 75.9172 24.5671 75.9172Z" />
                    <path d="M24.5671 75.9172L24.6103 73.4175L21.5861 73.3652L22.104 76.3453L24.5671 75.9172ZM83.1635 100.518L81.2042 102.071L81.2042 102.071L83.1635 100.518ZM105.537 166.617L106.059 169.062L108.267 168.59L108.022 166.345L105.537 166.617ZM51.2018 150.262L53.1611 148.709L53.1611 148.709L51.2018 150.262ZM24.5671 75.9172C24.5239 78.4168 24.5233 78.4168 24.5229 78.4168C24.5229 78.4168 24.5226 78.4168 24.5227 78.4168C24.523 78.4168 24.5238 78.4168 24.5252 78.4168C24.5281 78.4169 24.5333 78.417 24.5409 78.4172C24.5561 78.4175 24.5806 78.4181 24.6144 78.419C24.6818 78.4208 24.786 78.4239 24.9249 78.429C25.2029 78.4393 25.6201 78.4575 26.1618 78.4891C27.2454 78.5524 28.8259 78.6693 30.7861 78.8832C34.7104 79.3116 40.1363 80.1266 46.1343 81.6705C58.205 84.7775 72.2253 90.7418 81.2042 102.071L85.1227 98.965C75.1475 86.379 59.8696 80.043 47.3807 76.8283C41.0989 75.2114 35.4296 74.3604 31.3286 73.9128C29.2762 73.6887 27.6115 73.5652 26.4532 73.4976C25.8739 73.4638 25.4209 73.4439 25.1089 73.4324C24.9529 73.4267 24.8321 73.423 24.7484 73.4208C24.7066 73.4196 24.674 73.4189 24.6509 73.4184C24.6393 73.4181 24.6302 73.4179 24.6234 73.4178C24.62 73.4177 24.6172 73.4177 24.6151 73.4176C24.614 73.4176 24.6128 73.4176 24.6122 73.4176C24.6112 73.4176 24.6103 73.4175 24.5671 75.9172ZM81.2042 102.071C89.6366 112.71 95.1291 128.791 98.51 142.478C100.189 149.275 101.326 155.391 102.043 159.807C102.402 162.013 102.655 163.793 102.818 165.016C102.899 165.628 102.958 166.101 102.996 166.418C103.016 166.577 103.03 166.697 103.039 166.776C103.043 166.816 103.047 166.845 103.049 166.864C103.05 166.874 103.051 166.88 103.051 166.885C103.051 166.887 103.051 166.888 103.051 166.889C103.051 166.889 103.052 166.889 103.052 166.89C103.052 166.89 103.051 166.889 105.537 166.617C108.022 166.345 108.022 166.345 108.022 166.344C108.022 166.344 108.022 166.343 108.021 166.342C108.021 166.34 108.021 166.337 108.021 166.334C108.02 166.328 108.019 166.319 108.018 166.307C108.015 166.283 108.011 166.249 108.006 166.205C107.996 166.117 107.981 165.987 107.96 165.819C107.92 165.482 107.858 164.989 107.774 164.356C107.605 163.09 107.345 161.264 106.979 159.005C106.245 154.49 105.083 148.237 103.364 141.279C99.9498 127.457 94.2557 110.488 85.1227 98.965L81.2042 102.071ZM105.537 166.617C105.014 164.173 105.015 164.172 105.016 164.172C105.016 164.172 105.016 164.172 105.016 164.172C105.016 164.172 105.016 164.172 105.015 164.172C105.013 164.173 105.009 164.174 105.003 164.175C104.991 164.177 104.971 164.182 104.942 164.187C104.885 164.199 104.794 164.217 104.673 164.239C104.431 164.285 104.064 164.35 103.586 164.427C102.629 164.579 101.228 164.774 99.4814 164.936C95.9837 165.26 91.1328 165.45 85.721 164.92C74.8596 163.855 62.0512 159.926 53.1611 148.709L49.2426 151.815C59.3065 164.513 73.6656 168.762 85.2331 169.896C91.0357 170.465 96.2146 170.26 99.9431 169.914C101.81 169.741 103.321 169.532 104.373 169.364C104.899 169.281 105.311 169.207 105.596 169.153C105.739 169.127 105.85 169.105 105.927 169.089C105.966 169.081 105.997 169.075 106.019 169.071C106.03 169.068 106.039 169.066 106.045 169.065C106.049 169.064 106.052 169.064 106.054 169.063C106.055 169.063 106.056 169.063 106.057 169.063C106.058 169.062 106.059 169.062 105.537 166.617ZM53.1611 148.709C44.7181 138.057 38.1648 119.91 33.7035 104.1C31.4899 96.2553 29.8197 89.0934 28.7029 83.8922C28.1448 81.2926 27.7255 79.1856 27.4462 77.7312C27.3066 77.0041 27.202 76.4403 27.1326 76.0599C27.0979 75.8697 27.072 75.7254 27.055 75.6294C27.0464 75.5814 27.0401 75.5455 27.0359 75.522C27.0339 75.5103 27.0324 75.5016 27.0314 75.4961C27.0309 75.4934 27.0306 75.4914 27.0304 75.4902C27.0303 75.4897 27.0302 75.4894 27.0302 75.4891C27.0301 75.489 27.0302 75.4891 24.5671 75.9172C22.104 76.3453 22.1041 76.3458 22.1042 76.3465C22.1043 76.347 22.1045 76.3479 22.1046 76.3489C22.105 76.3509 22.1055 76.3537 22.1061 76.3572C22.1074 76.3644 22.1092 76.3747 22.1115 76.3881C22.1162 76.415 22.1232 76.4543 22.1323 76.5057C22.1506 76.6085 22.1778 76.7599 22.2138 76.9573C22.2859 77.3521 22.3933 77.9311 22.536 78.6741C22.8213 80.1601 23.2478 82.3029 23.8144 84.9418C24.9471 90.2174 26.642 97.4861 28.8914 105.458C33.3562 121.28 40.1202 140.305 49.2426 151.815L53.1611 148.709Z" fill="white"/>
                    </g>
                    <g id="Rectangle_5" onMouseOver="changeText2()" onmouseout="changeTextdefault()" >
                        <mask id="path-5-outside-1" maskUnits="userSpaceOnUse" x="18.7667" y="21.5474" width="161.814" height="160.611" >
                            <rect fill="white" x="18.7667" y="21.5474" width="161.814" height="160.611"/>
                            <path d="M99.7411 30C99.7411 30 130.844 62.1822 130.799 107.105C130.759 148.138 106.34 168.625 100.843 172.717C100.185 173.207 99.3321 173.194 98.6877 172.686C93.2267 168.384 68.6241 146.798 68.491 106.96C68.341 62.034 99.7411 30 99.7411 30Z"/>
                        </mask>
                        <path d="M99.7411 30C99.7411 30 130.844 62.1822 130.799 107.105C130.759 148.138 106.34 168.625 100.843 172.717C100.185 173.207 99.3321 173.194 98.6877 172.686C93.2267 168.384 68.6241 146.798 68.491 106.96C68.341 62.034 99.7411 30 99.7411 30Z"/>
                        <path d="M99.7411 30C99.7411 30 130.844 62.1822 130.799 107.105C130.759 148.138 106.34 168.625 100.843 172.717C100.185 173.207 99.3321 173.194 98.6877 172.686C93.2267 168.384 68.6241 146.798 68.491 106.96C68.341 62.034 99.7411 30 99.7411 30Z" stroke="white" stroke-width="10" mask="url(#path-5-outside-1)"/>
                    </g>
                    </g>
                    <g id="Rectangle_8" onMouseOver="changeText5()" onmouseout="changeTextdefault()">
                    <path d="M13 112.93C13 112.93 76.25 86.6312 99.25 144.798C109.422 170.522 128 173.881 128 173.881C128 173.881 79.7492 183.926 51.3333 167.964C24.9996 153.172 13 112.93 13 112.93Z" />
                    <path d="M13 112.93L12.0402 110.622L9.9607 111.487L10.6042 113.645L13 112.93ZM99.25 144.798L101.575 143.878L99.25 144.798ZM128 173.881L128.51 176.328L128.445 171.421L128 173.881ZM51.3333 167.964L52.5577 165.784L52.5577 165.784L51.3333 167.964ZM13 112.93C13.9598 115.239 13.959 115.239 13.9585 115.239C13.9586 115.239 13.9583 115.239 13.9586 115.239C13.9591 115.239 13.9606 115.238 13.9631 115.237C13.9679 115.235 13.9766 115.232 13.989 115.227C14.0138 115.217 14.0536 115.201 14.1079 115.179C14.2165 115.136 14.3833 115.07 14.6051 114.986C15.0487 114.817 15.7121 114.573 16.5701 114.28C18.2868 113.694 20.7779 112.915 23.8429 112.157C29.9856 110.636 38.3671 109.213 47.407 109.55C56.4418 109.886 66.0481 111.976 74.7476 117.401C83.4179 122.807 91.354 131.628 96.9252 145.717L101.575 143.878C95.646 128.884 87.0508 119.18 77.3931 113.158C67.7644 107.154 57.2457 104.913 47.593 104.553C37.9454 104.194 29.0769 105.71 22.6415 107.303C19.4174 108.101 16.7874 108.923 14.9553 109.548C14.0388 109.861 13.3209 110.125 12.8268 110.313C12.5797 110.407 12.3886 110.482 12.2564 110.534C12.1903 110.561 12.139 110.582 12.1029 110.596C12.0848 110.604 12.0705 110.609 12.06 110.614C12.0548 110.616 12.0505 110.618 12.0472 110.619C12.0455 110.62 12.0438 110.62 12.043 110.621C12.0414 110.621 12.0402 110.622 13 112.93ZM96.9252 145.717C102.201 159.06 109.715 166.722 116.026 171.048C119.17 173.203 121.992 174.515 124.056 175.293C125.088 175.682 125.931 175.939 126.532 176.1C126.832 176.181 127.072 176.238 127.245 176.277C127.331 176.296 127.401 176.311 127.453 176.321C127.479 176.326 127.501 176.331 127.518 176.334C127.526 176.336 127.534 176.337 127.54 176.338C127.543 176.339 127.546 176.339 127.548 176.34C127.55 176.34 127.551 176.34 127.552 176.34C127.554 176.341 127.555 176.341 128 173.881C128.445 171.421 128.446 171.421 128.448 171.421C128.448 171.421 128.449 171.421 128.45 171.422C128.451 171.422 128.452 171.422 128.453 171.422C128.455 171.423 128.456 171.423 128.455 171.423C128.455 171.422 128.449 171.421 128.44 171.42C128.421 171.416 128.385 171.408 128.333 171.397C128.228 171.373 128.059 171.333 127.832 171.272C127.377 171.15 126.689 170.943 125.82 170.615C124.083 169.96 121.625 168.824 118.853 166.924C113.332 163.139 106.471 156.26 101.575 143.878L96.9252 145.717ZM128 173.881C127.49 171.433 127.491 171.433 127.491 171.433C127.491 171.433 127.491 171.433 127.49 171.433C127.49 171.433 127.488 171.434 127.486 171.434C127.481 171.435 127.474 171.437 127.464 171.439C127.443 171.443 127.411 171.449 127.368 171.458C127.282 171.475 127.151 171.502 126.977 171.535C126.628 171.602 126.109 171.7 125.435 171.82C124.087 172.058 122.122 172.383 119.672 172.725C114.768 173.408 107.939 174.155 100.24 174.409C84.7317 174.922 66.1447 173.416 52.5577 165.784L50.109 170.144C64.9378 178.473 84.6841 179.926 100.405 179.407C108.321 179.145 115.33 178.378 120.362 177.677C122.879 177.326 124.905 176.991 126.307 176.743C127.008 176.619 127.553 176.516 127.926 176.444C128.112 176.408 128.255 176.38 128.353 176.36C128.402 176.35 128.44 176.343 128.466 176.337C128.479 176.335 128.489 176.333 128.497 176.331C128.5 176.33 128.503 176.33 128.505 176.329C128.506 176.329 128.507 176.329 128.508 176.329C128.509 176.328 128.51 176.328 128 173.881ZM52.5577 165.784C40.0252 158.744 30.7221 145.506 24.502 133.732C21.4133 127.886 19.1303 122.488 17.6204 118.554C16.8661 116.588 16.3063 114.991 15.9368 113.892C15.752 113.342 15.6149 112.917 15.5249 112.632C15.4799 112.49 15.4467 112.383 15.4252 112.313C15.4144 112.278 15.4066 112.252 15.4017 112.236C15.3993 112.228 15.3975 112.222 15.3965 112.219C15.396 112.217 15.3957 112.216 15.3956 112.215C15.3955 112.215 15.3956 112.215 15.3955 112.215C15.3956 112.216 15.3958 112.216 13 112.93C10.6042 113.645 10.6045 113.646 10.6047 113.646C10.6049 113.647 10.6052 113.648 10.6055 113.649C10.6061 113.651 10.6069 113.654 10.6079 113.657C10.6098 113.663 10.6125 113.672 10.6159 113.683C10.6227 113.706 10.6325 113.738 10.6453 113.78C10.6708 113.863 10.7082 113.983 10.7575 114.139C10.8561 114.451 11.0025 114.905 11.1973 115.485C11.5868 116.644 12.1703 118.307 12.9524 120.345C14.5154 124.418 16.8781 130.005 20.081 136.068C26.4442 148.113 36.3077 162.391 50.109 170.144L52.5577 165.784Z" fill="white"/>
                    </g>
                    <g id="Rectangle_4" onMouseOver="changeText3()" onmouseout="changeTextdefault()">
                    <path d="M186 110.171C186 110.171 122.444 92.905 105.111 138.949C95.1283 165.467 82 173.481 82 173.481C82 173.481 125.636 184.419 151.333 167.726C175.148 152.256 186 110.171 186 110.171Z" />
                    <path d="M186 110.171L186.655 107.759L189.037 108.406L188.421 110.796L186 110.171ZM105.111 138.949L107.451 139.829L105.111 138.949ZM82 173.481L81.3922 175.906L75.6058 174.456L80.6973 171.348L82 173.481ZM151.333 167.726L149.971 165.63L149.971 165.63L151.333 167.726ZM186 110.171C185.345 112.584 185.345 112.584 185.346 112.584C185.345 112.584 185.346 112.584 185.345 112.584C185.344 112.584 185.343 112.583 185.34 112.583C185.335 112.581 185.326 112.579 185.313 112.575C185.287 112.569 185.246 112.558 185.191 112.543C185.08 112.515 184.911 112.472 184.686 112.417C184.238 112.307 183.57 112.149 182.708 111.963C180.984 111.591 178.491 111.108 175.441 110.667C169.331 109.785 161.041 109.086 152.254 109.786C134.645 111.189 115.625 118.117 107.451 139.829L102.771 138.068C111.931 113.737 133.355 106.276 151.857 104.802C161.126 104.063 169.808 104.802 176.156 105.719C179.335 106.178 181.943 106.683 183.762 107.076C184.673 107.272 185.387 107.44 185.878 107.561C186.123 107.621 186.313 107.669 186.444 107.703C186.509 107.72 186.56 107.733 186.595 107.743C186.613 107.747 186.627 107.751 186.637 107.754C186.642 107.755 186.646 107.756 186.649 107.757C186.651 107.757 186.652 107.758 186.653 107.758C186.654 107.759 186.655 107.759 186 110.171ZM107.451 139.829C102.359 153.355 96.4349 162.239 91.7152 167.78C89.3571 170.549 87.3049 172.477 85.816 173.729C85.0717 174.354 84.4686 174.81 84.0389 175.118C83.824 175.272 83.6526 175.388 83.5285 175.47C83.4665 175.511 83.4164 175.544 83.3785 175.568C83.3596 175.58 83.3438 175.59 83.3312 175.598C83.3248 175.602 83.3193 175.605 83.3145 175.608C83.3122 175.609 83.31 175.611 83.308 175.612C83.307 175.613 83.3057 175.613 83.3052 175.614C83.3039 175.615 83.3027 175.615 82 173.481C80.6973 171.348 80.6962 171.348 80.6951 171.349C80.6948 171.349 80.6938 171.35 80.6932 171.35C80.692 171.351 80.691 171.352 80.6903 171.352C80.6887 171.353 80.6879 171.353 80.688 171.353C80.688 171.353 80.6912 171.351 80.6974 171.348C80.7099 171.34 80.7346 171.324 80.7712 171.3C80.8443 171.251 80.9647 171.17 81.1283 171.053C81.4556 170.818 81.9562 170.441 82.5986 169.901C83.8832 168.821 85.737 167.088 87.9088 164.538C92.2489 159.443 97.8802 151.061 102.771 138.068L107.451 139.829ZM82 173.481C82.6078 171.057 82.6074 171.056 82.6072 171.056C82.6073 171.056 82.6072 171.056 82.6075 171.056C82.608 171.057 82.6092 171.057 82.611 171.057C82.6147 171.058 82.6211 171.06 82.63 171.062C82.6478 171.066 82.6761 171.073 82.7144 171.083C82.7911 171.101 82.9084 171.129 83.0644 171.166C83.3763 171.238 83.8429 171.344 84.449 171.474C85.6616 171.734 87.4315 172.089 89.639 172.465C94.0577 173.217 100.21 174.048 107.145 174.366C121.125 175.008 137.798 173.537 149.971 165.63L152.695 169.823C139.17 178.608 121.177 180.015 106.915 179.361C99.7284 179.031 93.3662 178.171 88.8001 177.394C86.5153 177.005 84.6754 176.636 83.4013 176.363C82.7641 176.227 82.2681 176.114 81.9283 176.035C81.7584 175.995 81.6275 175.964 81.5375 175.942C81.4925 175.931 81.4578 175.923 81.4335 175.917C81.4213 175.914 81.4118 175.911 81.4049 175.91C81.4014 175.909 81.3987 175.908 81.3965 175.908C81.3955 175.907 81.3944 175.907 81.3938 175.907C81.3929 175.907 81.3922 175.906 82 173.481ZM149.971 165.63C161.255 158.3 169.677 144.468 175.323 132.109C178.122 125.983 180.191 120.326 181.56 116.201C182.243 114.141 182.751 112.466 183.087 111.312C183.254 110.735 183.379 110.288 183.461 109.989C183.502 109.839 183.532 109.726 183.552 109.651C183.562 109.614 183.569 109.587 183.573 109.569C183.576 109.561 183.577 109.554 183.578 109.551C183.579 109.549 183.579 109.548 183.579 109.547C183.579 109.547 183.579 109.547 183.579 109.547C183.579 109.547 183.579 109.547 186 110.171C188.421 110.796 188.421 110.796 188.42 110.797C188.42 110.798 188.42 110.799 188.42 110.8C188.419 110.802 188.419 110.804 188.418 110.807C188.416 110.814 188.414 110.823 188.411 110.835C188.405 110.858 188.396 110.891 188.384 110.934C188.362 111.02 188.328 111.145 188.284 111.307C188.195 111.631 188.063 112.104 187.888 112.708C187.537 113.915 187.011 115.65 186.305 117.776C184.895 122.026 182.762 127.857 179.871 134.186C174.137 146.737 165.226 161.683 152.695 169.823L149.971 165.63Z" fill="white"/>
                    </g>
                    </g>
                    </svg>
            </div>

            <div class="description">
                <p id="pText">POSITRON adalah Lorem ipsum dolor sit amet. </p>
            </div>
        </div>
        
    </section>

    <!--Buku Panduan-->

    <div id="carouselExampleControlsNoTouching" class="carousel slide carousel-fade " data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner" style="align-content: center">
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <div class="carousel-item active">
                        <div class="row">
                    <div class="col-md-4 offset-md-2" data-aos="fade-right" data-aos-duration="3000">
                        <div class="card">
                        <h1 class="a"> BUKU PANDUAN POSITRON 2021</h1>
                      <p class="a">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vero dignissimos molestiae quaerat ducimus aliquam.</p>
                    </div>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="1" aria-label="Slide 2">2</button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="2" aria-label="Slide 3">3</button>
                    </div>
                    <div class="col-md-4 offset-md-1" data-aos="fade-left" data-aos-duration="3000">
                        <img id="Img" src="img/place1.jpg" class="d-block w-10" alt="...">
                    </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                    <div class="col-md-4 offset-md-2" data-aos="fade-right" data-aos-duration="3000">
                        <div class="card">
                        <h1 class="a"> Twibbon</h1>
                        <p class="a">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis doloribus ab aliquam voluptas veniam sapiente?</p>
                    </div>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="1" aria-label="Slide 2">2</button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="2" aria-label="Slide 3">3</button>
                   </div>
                    <div class="col-md-4 offset-md-1" data-aos="fade-left" data-aos-duration="3000">
                        <img id="Img" src="img/place2.jpg" class="d-block w-10" alt="...">
                    </div>
                </div>
                </div>
                    <div class="carousel-item">
                        <div class="row">
                    <div class="col-md-4 offset-md-2" data-aos="fade-right" data-aos-duration="3000">
                       <div class="card">
                        <h1 class="a"> Sembarang wes </h1>
                        <p class="a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid maxime quibusdam adipisci alias non recusandae.</p>
                    </div>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">1</button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="1" aria-label="Slide 2">2</button>
                    <button type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="2" aria-label="Slide 3">3</button>
                    </div>
                    <div class="col-md-4 offset-md-1" data-aos="fade-left" data-aos-duration="3000">
                        <img id="Img" src="img/place3.jpg" class="d-block w-10" alt="...">
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
                </div>

                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                    AOS.init();
                  </script>
                <!--
            <div class="col">
        <div class="carousel-inner col-lg-2 offset-lg-0">
          <div id="carouselExampleControlsNoTouching" class="carousel-item active">
            <img src="img/place1.jpg" class="d-block w-10" alt="...">
          </div>
          <div id="carouselExampleControlsNoTouching" class="carousel-item">
            <img src="img/place2.jpg" class="d-block w-10" alt="...">
          </div>
          <div id="carouselExampleControlsNoTouching" class="carousel-item">
            <img src="img/place3.jpg" class="d-block w-10" alt="...">
          </div>
        </div> -->      
        </div>      
        </div>
      </div>
    <!--Buku Panduan-->

    <!--==================== DISCOVER ====================-->
    <!-- <section class="discover section" id="discover">
        <h2 class="section__title judul_discover">POSITRON <br> Timeline Event</h2>
        
        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper"> -->
                <!--==================== DISCOVER 1 ====================-->
                <!-- <div class="discover__card swiper-slide">
                    <img src="/img/upacara.jpg" alt="" class="discover__img">
                    <div class="discover__data">
                        <h2 class="discover__title">Upacara Pembukaan</h2>
                        <span class="discover__description">5 September</span>
                    </div>
                </div> -->

                <!--==================== DISCOVER 2 ====================-->
                <!-- <div class="discover__card swiper-slide">
                    <img src="/img/HMJ.png" alt="" class="discover__img">
                    <div class="discover__data">
                        <h2 class="discover__title">Introduction Of Himpunan</h2>
                        <span class="discover__description">15 September</span>
                    </div>
                </div> -->

                <!--==================== DISCOVER 3 ====================-->
                <!-- <div class="discover__card swiper-slide">
                    <img src="/img/LDK.jpg" alt="" class="discover__img">
                    <div class="discover__data">
                        <h2 class="discover__title">LDK</h2>
                        <span class="discover__description">10 November</span>
                    </div>
                </div> -->

                <!--==================== DISCOVER 4 ====================-->
                <!-- <div class="discover__card swiper-slide">
                    <img src="/img/band.jpg" alt="" class="discover__img">
                    <div class="discover__data">
                        <h2 class="discover__title">NAKO</h2>
                        <span class="discover__description">10 Desember</span>
                    </div>
                </div>
            </div>
        </div> -->
    
 
        <div class="process-wrapper" data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1000">
            <div id="progress-bar-container">
                <ul>
                    <li class="step step01 active"><div class="step-inner">Upacara Penerimaan Maba</div></li>
                    <li class="step step02"><div class="step-inner">Forum 1 dan Penugasan</div></li>
                    <li class="step step03"><div class="step-inner">Online Course</div></li>
                    <li class="step step04"><div class="step-inner">Introduction of Himpunan</div></li>
                    <li class="step step05"><div class="step-inner">NAKO 5.0</div></li>
                </ul>
                
                <div id="line">
                    <div id="line-progress"></div>
                </div>
            </div>
            
            <div id="progress-content-section">
                
                <div class="section-content discovery active">
                    <h2>Upacara Penerimaan Maba</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                </div>
                
                <div class="section-content strategy">
                    <h2>Forum 1 dan Penugasan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                </div>
                
                <div class="section-content creative">
                    <h2>Online Course</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                </div>
                
                <div class="section-content production">
                    <h2>Introduction of Himpunan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                </div>
                
                <div class="section-content analysis">
                    <h2>NAKO 5.0</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
                </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
             <script>
                
                $(".step").click( function() {
                    $(this).addClass("active").prevAll().addClass("active");
                    $(this).nextAll().removeClass("active");
                });
                
                $(".step01").click( function() {
                    $("#line-progress").css("width", "3%");
                    $(".discovery").addClass("active").siblings().removeClass("active");
                });
                
                $(".step02").click( function() {
                    $("#line-progress").css("width", "25%");
                    $(".strategy").addClass("active").siblings().removeClass("active");
                });
                
                $(".step03").click( function() {
                    $("#line-progress").css("width", "50%");
                    $(".creative").addClass("active").siblings().removeClass("active");
                });
                
                $(".step04").click( function() {
                    $("#line-progress").css("width", "75%");
                    $(".production").addClass("active").siblings().removeClass("active");
                });
                
                $(".step05").click( function() {
                    $("#line-progress").css("width", "100%");
                    $(".analysis").addClass("active").siblings().removeClass("active");
                });
                </script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Kelompok MABA <br> MABA 2021</h2>
                        <p class="about__description">Ayo cari tahu teman kelompok dan kakak mentor kamu yang akan menemani selama POSITRON Berlangsung
                        </p>
                        <a href="#" class="button">Find Your Guardian</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="/img/kelompok.png" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="/img/kelompok.png" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>

            
            
            

            <!--==================== EXPERIENCE ====================-->
            <!-- <section class="experience section">
                <h2 class="section__title experience_title">With Our Experience <br> We Will Serve You</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">20</h2>
                            <span class="experience__description">Year <br> Experience</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">75</h2>
                            <span class="experience__description">Complete <br> tours</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">650+</h2>
                            <span class="experience__description">Tourist <br> Destination</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="/img/experience1.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="/img/experience2.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section> -->

            <!--==================== PLACES ====================-->
            <!-- <section class="place section" id="place">
                <h2 class="section__title">Choose Your Place</h2>

                <div class="place__container container grid"> -->
                    <!--==================== PLACES CARD 1 ====================-->
                    <!-- <div class="place__card">
                        <img src="/img/place1.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Bali</h3>
                                <span class="place__subtitle">Indonesia</span>
                                <span class="place__price">$2499</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div> -->

                    <!--==================== PLACES CARD 2 ====================-->
                    <!-- <div class="place__card">
                        <img src="/img/place2.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5,0</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Bora Bora</h3>
                                <span class="place__subtitle">Polinesia</span>
                                <span class="place__price">$1599</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div> -->

                    <!--==================== PLACES CARD 3 ====================-->
                    <!-- <div class="place__card">
                        <img src="/img/place3.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,9</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Hawaii</h3>
                                <span class="place__subtitle">EE.UU</span>
                                <span class="place__price">$3499</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div> -->

                    <!--==================== PLACES CARD 4 ====================-->
                    <!-- <div class="place__card">
                        <img src="/img/place4.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Whitehaven</h3>
                                <span class="place__subtitle">Australia</span>
                                <span class="place__price">$2499</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div> -->

                    <!--==================== PLACES CARD 5 ====================-->
                    <!-- <div class="place__card">
                        <img src="/img/place5.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Hvar</h3>
                                <span class="place__subtitle">Croacia</span>
                                <span class="place__price">$1999</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </section> -->

            <!--==================== SUBSCRIBE ====================-->
            <!-- <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter and get a 
                            special 30% discount.
                        </p>
    
                        <form action="" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">
    
                            <button class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section> -->
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="/img/sponsors1.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="/img/sponsors2.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="/img/sponsors3.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="/img/sponsors4.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="/img/sponsors5.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title"><img src="/img/logo.png" alt=""></h3>
                        <p class="footer__description">Program Orientasi Mahasiswa Teknik Elektro
                            
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Blog</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">HMJ</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">a</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 HMJ TE. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="/js/main.js"></script>
    </body>
</html>