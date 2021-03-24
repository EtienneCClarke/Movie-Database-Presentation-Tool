<html>

    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/navigation.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/landing.css"/>
    </head>

    <body>
        <!------- Navigation ------->
        <?php include('navigation.php'); ?>

        <!------- Call To Action ------->
        <section id="hero">
            <div id="hero-content-container">

                <svg width="350" height="185" viewBox="0 0 261 138" fill="none" xmlns="http://www.w3.org/2000/svg" id="hero-cloud">
                    <path d="M38.82 56.9701C47.94 41.6501 61.97 36.0801 80.21 39.9701C83.56 27.6301 89.95 17.3801 100.35 9.97009C126.71 -8.89991 162.5 0.0901108 176.97 29.2701C178.27 31.9101 179.69 33.5001 182.73 33.8201C198.68 35.5001 210.13 44.0701 218.1 57.5801C219.72 60.3301 221.18 61.3701 224.6 61.1701C242.6 60.1001 257.07 70.7101 260.31 86.9301C262.31 96.8101 256.94 108.27 247.25 114.63C238.3 120.51 228.51 121.63 218.12 119.72C216.66 119.44 214.32 119.81 213.5 120.81C198.44 139.05 172.39 144.45 150.37 128.47C137.46 136.76 124.25 137.68 110.59 129.93C109.33 129.21 106.88 129.99 105.22 130.66C83.57 139.41 62.59 138.92 43.28 124.98C38.12 121.25 34.28 115.33 30.69 109.9C28.75 107.01 27.69 104.9 23.54 104.83C13.54 104.54 3.62 96.3801 0.930004 87.2201C-2.92 74.1201 5.56 60.0201 19.8 57.2201C25.62 56.0201 31.85 56.9701 38.82 56.9701Z" fill="url(#paint0_linear)"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="130.363" y1="0.0634766" x2="130.363" y2="137.933" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>

                <a href="<?php echo base_url('./index.php/Browse');?>" id="call-to-action">SEARCH MOVIES</a>

                <p>The number 1 <br/>desitnation <br/>for all your movie needs!</p>
            </div>
            <div id="hero-filler-svgs">


                <svg width="362" height="155" viewBox="0 0 362 155" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-svg">
                    <path d="M201.974 1.77652C276.471 -11.4092 297.326 52.0371 298.441 85.4085C375.615 64.4089 366.656 123.053 352.53 155H17.4026C1.78937 127.733 -17.5042 67.0949 30.2278 42.6768C77.9598 18.2587 115.915 60.9904 128.926 85.4085C122.234 63.0252 127.476 14.9623 201.974 1.77652Z" fill="white"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="130.363" y1="0.0634766" x2="130.363" y2="137.933" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>


                <svg width="175" height="64" viewBox="0 0 175 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-svg">
                    <path d="M97.6392 0.733532C133.653 -4.71091 143.735 21.4863 144.274 35.2654C181.582 26.5947 177.251 50.809 170.422 64H8.41289C0.865051 52.7414 -8.46193 27.7037 14.6129 17.6214C37.6877 7.53908 56.0362 25.1831 62.3261 35.2654C59.0913 26.0233 61.6252 6.17798 97.6392 0.733532Z" fill="white"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="130.363" y1="0.0634766" x2="130.363" y2="137.933" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>

                <svg width="373" height="146" viewBox="0 0 373 146" fill="none" xmlns="http://www.w3.org/2000/svg" class="hero-svg">
                    <path d="M164.889 1.67337C88.1278 -10.7468 66.6392 49.0156 65.4901 80.4493C-14.0291 60.669 -4.79779 115.908 9.75774 146H355.069C371.156 120.316 391.036 63.1991 341.854 40.1988C292.671 17.1985 253.563 57.449 240.156 80.4493C247.051 59.3657 241.65 14.0935 164.889 1.67337Z" fill="white"/>
                    <defs>
                        <linearGradient id="paint0_linear" x1="130.363" y1="0.0634766" x2="130.363" y2="137.933" gradientUnits="userSpaceOnUse">
                        <stop stop-color="white"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>

            </div>

            <div id="explore">
                <a>Explore!</a>
                <svg width="20" height="22" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 26L0.277571 0.499997L29.7224 0.5L15 26Z" fill="#1F232B"/>
                </svg>
            </div>
        </section>

        <!------- Popular Carousel ------->
        <section id="popular">

            <div class="carousel">

                <div class="slide">
                </div>

                <div class="slide">
                </div>

                <div class="slide">
                </div>

            </div>

        </section>

    </body>

    <!------- SCRIPTS ------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/js/slick.min.js"></script>
    <script src="<?php echo base_url();?>public/js/interact.js"></script>

</html>