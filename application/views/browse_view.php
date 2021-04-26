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

        <!------- Search ------->
        <?php 
            if($this->input->get('search', TRUE) !== null) {
                echo '  <div class="searchtag noselect">
                            <p>'.$this->input->get('search', TRUE).'</p>
                            <p>x</p>
                        </div>';
            }
        ?>

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
                                <input type="range" name="budget_one" id="budget-input-left" min="0" max="1000" value="250">
                                <input type="range" name="budget_two" id="budget-input-right" min="0" max="1000" value="750">

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
                                <input type="range" name="year_one" id="release-input-left" min="1900" max="<?php echo date('Y');?>" value="1930">
                                <input type="range" name="year_two" id="release-input-right" min="1900" max="<?php echo date('Y');?>" value="<?php echo ((date('Y')-1900)*0.75)+1900; ?>">

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
                                <input type="range" name="revenue_one" id="revenue-input-left" min="0" max="2000" value="500">
                                <input type="range" name="revenue_two" id="revenue-input-right" min="0" max="2000" value="1500">

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
                                <input type="range" name="runtime_one" id="runtime-input-left" min="0" max="360" value="90">
                                <input type="range" name="runtime_two" id="runtime-input-right" min="0" max="360" value="270">

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

                <div class="break"></div>

                <div id="apply-container">
                    <a id="reset" class="btn">Reset*</a>
                    <a id="apply" class="btn">Apply</a>
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
                    <option value="card-revenue">Revenue</option>
                </select>
                <label for="order" id="order-label">In Order</label>
                <select name="order" id="order" onchange="sortBy('null')">
                    <option value="asc" selected>Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
            <div class="push">
                <?php
                    if($this->input->get('genreid', TRUE) !== null) {
                        
                        // Loop through all records from db and only pass through values that match the genre
                        foreach($movies as $row) {
                            if($this->input->get('genreid', TRUE) == -1) {
                                break;
                            } else {
                                if($this->input->get('genreid', TRUE) != $row->genreID) {
                                    array_splice($movies, array_search($row, $movies), 1);
                                }
                            }
                        }
                    }
                ?>
                <form action="<?php echo site_url('browse');?>" method="get">
                    <label for="genreid">Genre</label>
                    <select name='genreid' id="genre" onchange="this.form.submit()">
                    <option value='-1' <?php if($this->input->get('genreid', TRUE) !== null && $this->input->get('genreid', TRUE) == -1) {echo 'selected';}?>>Choose</option>
                        <?php
                            if(is_array($genre) || is_object($genre))
                            {
                                foreach($genre as $row)
                                {
                                    echo "<option value='$row->genreID'";
                                    if($this->input->get('genreid', TRUE) == $row->genreID) { echo 'selected';}
                                    echo ">$row->genre</option>";
                                }
                            }
                        ?>
                    </select>
                </form>
            </div>
        </section>

        <!------- Movie Cards TOP SVG ------->
        <svg width="100%" height="55" viewBox="0 0 1920 55" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
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
                                <img src="<?php echo base_url($row->movieImage); ?>" title="<?php echo $row->title; ?>" width="100%" height="100%"/>
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
                                        <div class="card-revenue-container">Revenue: $<span class="card-revenue"><?php echo $row->revenue ?></span></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/files/js/sort.js"></script>
    <script src="<?php echo base_url();?>public/files/js/multi-handle-slider.js"></script>

</html>