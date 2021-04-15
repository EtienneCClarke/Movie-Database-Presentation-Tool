<html>

    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/navigation.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/cards.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/footer.css"/>
    </head>

    <body>
        <!------- Navigation ------->
        <?php include('navigation.php'); ?>

        <!------- Movie Cards ------->
        <section id="all-movies">
            <?php 


                if(is_array($movies) || is_object($movies)) {
                    
                    foreach($movies as $row) { 

                        $name = $row->title;
                        if(strlen($name) > 20) {
                            $name = substr($name, 0, 13)."...";
                        }
                        ?>

                        <div class="card">
                            <div class="card-image">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row->image).'" width="100%" height="100%"/>'?>
                            </div>
                            <div class="card-content">
                                <div class="card-runtime">
                                    <p><?php echo $row->duration ?>min</p>
                                </div>
                                <div class="card-info-container">
                                    <div class="card-info">
                                        <a href="<?php echo base_url('./index.php/preview/'.$row->movieID); ?>"><?php echo $name ?></a>
                                        <span class="card-date"><?php echo $row->year ?></span>
                                        <span class="card-budget">Budget: $<?php echo $row->budget ?></span>
                                    </div>
                                    <div class="card-rating push">
                                        <h3><?php echo $row->rating ?></h3>
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 0L11.0206 5.87336L17.5595 5.87336L12.2694 9.50329L14.2901 15.3766L9 11.7467L3.70993 15.3766L5.73056 9.50329L0.440492 5.87336L6.97937 5.87336L9 0Z" fill="#E83338"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php   }   }   ?>
        </section>
        
        <!------- Movie Cards ------->
        <?php include('footer.php') ?>
        
    </body>

</html>