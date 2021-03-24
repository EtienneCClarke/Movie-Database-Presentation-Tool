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

                <p>The Number 1 <br/>Desitnation <br/>For All Your Movie Needs!</p>

                <a href="<?php echo base_url('./index.php/Browse');?>" id="call-to-action">SEARCH MOVIES</a>

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