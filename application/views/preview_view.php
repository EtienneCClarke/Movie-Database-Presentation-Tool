<html>

    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/navigation.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/preview.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/footer.css"/>
    </head>

    <body>
        <!------- Navigation ------->
        <?php include('navigation.php'); ?>

        <div id='movie-container'>
            <div class='movie-image-container'>
            <img src="public/images/avatar.jpg" width="100%" height="100%">
                <div class='duration-rating-content'>
                    <section id='duration'>
                        <h3>120min</h3> 
                    </section> 
                    <section id='rating'>
                        <h3>9.9
                            <svg width="30" height="30" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0L11.0206 5.87336L17.5595 5.87336L12.2694 9.50329L14.2901 15.3766L9 11.7467L3.70993 15.3766L5.73056 9.50329L0.440492 5.87336L6.97937 5.87336L9 0Z" fill="#E83338"/>
                            </svg>
                        </h3> 
                    </section> 
                </div>
            </div> 

            <div class='movie-content'>
                <section id='title'>
                    <h1> Rush Hour </h1>
                </section>

                <section id='contents'>
                    <h2>Genre: <label>Action, Adventure</label></h2>
                    <h2>Release Year: <label>2018</label></h2>
                    <h2>Budget: <label>$4383478373.00</label></h2>
                    <h2>Revenue: <label>$4903874573434.00</label></h2>

                    <h2>Directors:</h2>
                    <img src="Movie-Database-Presentation-Tool\public\images\alien.jpg" style="width:100px">
                    <img src="public/images/avatar.jpg" style="width:100px">

                    <h2>Actors:</h2>
                    <img src="public/images/alien.jpg" style="width:100px">
                    <img src="public/images/avatar.jpg" style="width:100px">
                    <img src="public/images/avatar.jpg" style="width:100px">
                </section> 
            </div>
        </div>
            <div id='story-container'>
                <h1> Storyline </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis luctus neque, lacinia semper magna gravida vel. Integer vulputate urna tellus, eget blandit tortor lobortis sed. Vestibulum interdum dui at vulputate bibendum. Nulla tristique at ligula eget feugiat. Integer volutpat velit ex. Aliquam semper tristique neque, ut finibus justo consequat eu. Sed neque augue, dignissim in rutrum sit amet, efficitur sed mi. Aliquam pellentesque mi ac purus imperdiet aliquam.
                </p>

                <p>
                    For more information <a href="">click here</a>.
                </p>
            </div>

        <!------- Navigation ------->
        <?php include('footer.php'); ?>

    </body>

</html>