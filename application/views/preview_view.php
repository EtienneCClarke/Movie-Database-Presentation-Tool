<html>

    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/navigation.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/preview.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/footer.css"/>
    </head>

    <body>
        <!------- Navigation ------->
        <?php include('navigation.php'); ?>

            <?php 
                if(is_array($movie_details) || is_object($movie_details))
                    {
                        foreach($movie_details as $row)
                        { 
            ?>
        <div id='movie-container'>
            <div class='movie-image-container'>
            <img src="<?php echo base_url($row->movieImage); ?>" title="<?php echo $row->title; ?>" width='100%' height='100%'>
                
                <div class='duration-rating-content'>
                    <section id='duration'>
                        <h3><?php echo $row->duration; ?>min</h3> 
                    </section> 
                    <section id='rating'>
                        <h3><?php echo $row->rating; ?>
                            <svg width="30" height="30" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0L11.0206 5.87336L17.5595 5.87336L12.2694 9.50329L14.2901 15.3766L9 11.7467L3.70993 15.3766L5.73056 9.50329L0.440492 5.87336L6.97937 5.87336L9 0Z" fill="#E83338"/>
                            </svg>
                        </h3> 
                    </section> 
                </div>
            </div> 

            <div class='movie-content'>
                <section id='title'>
                    <h1><?php echo $row->title; ?></h1>
                </section>

                <section id='contents'>
                    <h2>Genre: <label><?php echo $row->genre; ?></label></h2>
                    <h2>Release Year: <label><?php echo $row->year; ?></label></h2>
                    <h2>Budget: <label>$<?php echo $row->budget; ?></label></h2>
                    <h2>Revenue: <label>$<?php echo $row->revenue; ?></label></h2>

                    <h2>Directors:</h2>
                        <div class='image-profile'>
                            <img src="<?php echo base_url($row->directorImage); ?>" title="<?php echo $row->director; ?>">
                            <img src="<?php echo base_url($row->directorImage2); ?>" title="<?php echo $row->director2; ?>">
                        </div>

                    <h2>Actors:</h2>
                        <div class='image-profile'>
                        <img src="<?php echo base_url($row->actorImage) ?>" title="<?php echo $row->actor; ?>">
                        <img src="<?php echo base_url($row->actorImage2) ?>" title="<?php echo $row->actor2; ?>">
                        <img src="<?php echo base_url($row->actorImage3) ?>" title="<?php echo $row->actor3; ?>">
                        </div>
                </section> 
            </div>
        </div>
            <div id='story-container'>
                <h1> Storyline </h1>
                <p>
                    <?php echo $row->description; ?>
                </p>

                <p>
                    For more information <a href="<?php echo $row->hyperlink; ?>">click here</a>.
                </p>
            </div>
                <?php
                    }
                }
            ?>
        <!------- Navigation ------->
        <?php include('footer.php'); ?>

    </body>

</html>