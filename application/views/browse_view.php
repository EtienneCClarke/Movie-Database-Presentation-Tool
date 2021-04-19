<html>

    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/navigation.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/cards.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/footer.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/browse.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/multi-handle-slider.css"/>
    </head>

    <body>
        <!------- Navigation ------->
        <?php include('navigation.php'); ?>


        <!------- Filters ------->
        <section id="filters">

            <div id="filters-toggle" onclick="toggleFilters()">
                <p>Filter<span id="toggle-text">click to expand...</span></p>
                <span class="push">
                    <svg id="filter-svg" width="22" height="17" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5 0L26.0574 20.25L0.942632 20.25L13.5 0Z" fill="#1F232B"/>
                    </svg>
                </span>
            </div>

            <div id="filters-container">

                <div class="filters-column">

                    <div class="filter-content-container">
                        <h3>Budget</h3>
                        <div class="filter-content">
                            <p>MIN</p>
                            <div class="multi-range-slider" id="budget">
                                <input type="range" id="budget-input-left" min="0" max="100" value="25">
                                <input type="range" id="budget-input-right" min="0" max="100" value="75">

                                <div class="slider">
                                    <div class="track"></div>
                                    <div class="range red"></div>
                                    <div class="thumb left">
                                        <svg class="arrow-left" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p>$<span class="thumb-value"></span>m</p>
                                    </div>
                                    <div class="thumb right">
                                        <svg class="arrow-right" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p>$<span class="thumb-value"></span>m</p>
                                    </div>
                                </div>
                            </div>
                            <p>MAX</p>
                        </div>
                    </div>

                    <div class="filter-content-container">
                        <h3>Release Year</h3>
                        <div class="filter-content">
                            <p>MIN</p>
                            <div class="multi-range-slider" id="release">
                                <input type="range" id="release-input-left" min="1900" max="<?php echo date('Y');?>" value="1930">
                                <input type="range" id="release-input-right" min="1900" max="<?php echo date('Y');?>" value="<?php echo ((date('Y')-1900)*0.75)+1900; ?>">

                                <div class="slider">
                                    <div class="track"></div>
                                    <div class="range blue"></div>
                                    <div class="thumb left">
                                        <svg class="arrow-left" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p><span class="thumb-value"></span></p>
                                    </div>
                                    <div class="thumb right">
                                        <svg class="arrow-right" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p><span class="thumb-value"></span></p>
                                    </div>
                                </div>
                            </div>
                            <p>MAX</p>
                        </div>
                    </div>
                
                </div>

                <div class="spacer"></div>

                <div class="filters-column push">

                    <div class="filter-content-container">
                        <h3>Revenue</h3>
                        <div class="filter-content">
                            <p>MIN</p>
                            <div class="multi-range-slider" id="revenue">
                                <input type="range" id="revenue-input-left" min="0" max="100" value="25">
                                <input type="range" id="revenue-input-right" min="0" max="100" value="75">

                                <div class="slider">
                                    <div class="track"></div>
                                    <div class="range green"></div>
                                    <div class="thumb left">
                                        <svg class="arrow-left" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p>$<span class="thumb-value"></span>m</p>
                                    </div>
                                    <div class="thumb right">
                                        <svg class="arrow-right" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p>$<span class="thumb-value"></span>m</p>
                                    </div>
                                </div>
                            </div>
                            <p>MAX</p>
                        </div>
                    </div>

                    <div class="filter-content-container">
                        <h3>Runtime (minutes)</h3>
                        <div class="filter-content">
                            <p>MIN</p>
                            <div class="multi-range-slider" id="runtime">
                                <input type="range" id="runtime-input-left" min="0" max="360" value="90">
                                <input type="range" id="runtime-input-right" min="0" max="360" value="270">

                                <div class="slider">
                                    <div class="track"></div>
                                    <div class="range orange"></div>
                                    <div class="thumb left">
                                        <svg class="arrow-left" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p><span class="thumb-value"></span></p>
                                    </div>
                                    <div class="thumb right">
                                        <svg class="arrow-right" width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 0L12.9952 11.25H0.00480938L6.5 0Z" fill="#616161"/>
                                        </svg>
                                        <p><span class="thumb-value"></span></p>
                                    </div>
                                </div>
                            </div>
                            <p>MAX</p>
                        </div>
                    </div>
                
                </div>

            </div>

        </section>

        <!------- Sorting & Genre ------->
        <section id="sorts">
            <div>
                <label for="sort">Sort By</label>
                <select name="sort" id="sort" onchange="sort(this.options[this.selectedIndex].value);">
                    <option value="unselected">None</option>
                    <option value="card-title">Title</option>
                    <option value="card-rating">Rating</option>
                    <option value="card-date">Release Date</option>
                    <option value="card-budget">Budget</option>
                </select>
                <label for="order" id="order-label">In Order</label>
                <select name="order" id="order" onchange="sortBy('null')">
                    <option value="asc" selected>Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
            <div class="push">
                <label for="genre">Genre</label>
                <select name='genre' id="genre" onchange="filterGenre(this.options[this.selectedIndex].value)">
                <option value='unselected' selected>Choose</option>
                    <?php
                        if(is_array($genre) || is_object($genre))
                        {
                            foreach($genre as $row)
                            {
                                echo "<option value='$row->genreID'>$row->genre</option>";
                            }
                        }
                    ?>
                </select>
            </div>
        </section>

        <!------- Movie Cards TOP SVG ------->
        <svg width="1920" height="55" viewBox="0 0 1920 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1920 0C1098.54 97.8453 297.725 40.7689 0 0V55H1920V0Z" fill="#EEEEEE"/>
        </svg>

        <!------- Movie Cards ------->
        <section id="all-movies">
            <div id="all-movies-content">
            <?php 
                if(is_array($movies) || is_object($movies)) {
                    
                    $index = 0;

                    foreach($movies as $row) { 

                        $name = $row->title;
                        if(strlen($name) > 16) {
                            $name = substr($name, 0, 13)."...";
                        }
                        ?>

                        <div class="card">
                            <input class="genreID" type="hidden" value="<?php echo $row->genreID;?>">
                            <input class="genreID" type="hidden" value="<?php echo $row->genreID2;?>">
                            <div class="card-image">
                            <?php echo '<img src="data:image;base64,'.base64_encode($row->image).'" width="100%" height="100%"/>'?>
                            </div>
                            <div class="card-content">
                                <div class="card-runtime">
                                    <p><?php echo $row->duration ?>min</p>
                                </div>
                                <div class="card-info-container">
                                    <div class="card-info">
                                        <a class="card-title" href="<?php echo base_url('./index.php/preview/'.$row->movieID); ?>"><?php echo $name ?></a>
                                        <span class="card-date"><?php echo $row->year ?></span>
                                        <div class="card-budget-container">Budget: $<span class="card-budget"><?php echo $row->budget ?></span></div>
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
            </div>
        </section>
        
        <!------- Movie Cards ------->
        <?php include('footer.php') ?>
    </body>

    <!------- SCRIPTS ------->
    <script src="<?php echo base_url();?>public/libraries/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>public/files/js/sort.js"></script>
    <script src="<?php echo base_url();?>public/files/js/multi-handle-slider.js"></script>

</html>