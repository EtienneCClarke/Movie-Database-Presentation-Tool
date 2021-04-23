<!DOCTYPE html>
    <header>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/navigation.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/files/css/add_movie.css"/>
        <title>Add Movie</title>
    </header>
    
    <body>
        <div class="message-container">
            <?php echo $genreMessage; ?>
            <?php echo $actorMessage; ?>
            <?php echo $directorMessage; ?>
            <?php echo $releaseYearMessage; ?>
            <?php echo $movieMessage; ?>

            <?php echo $genreMessageDeletion; ?>
            <?php echo $actorMessageDeletion; ?>
            <?php echo $directorMessageDeletion; ?>
            <?php echo $releaseYearMessageDeletion; ?>
            <?php echo $movieMessageDeletion; ?>
        </div>
        <div class="container">
<!--------------------------------ADD RECORDS----------------------------------------->
            <div class="add-movie-container">
                <h1>Add Movies</h1>
<!----------------------------------ADD GENRE----------------------------------------->
                    <form method='post' action="<?php echo base_url('./index.php/add_genre') ?>">
                        <h2>Genre</h2>
                        <input type='text' name='genre' placeholder='Genre name...' maxlength='255'required/>
                        <input type='submit' value='Add'>
                    </form>
<!----------------------------------ADD ACTOR----------------------------------------->
                    <h2>Actor</h2>
                    <form method='post' action="<?php echo base_url('./index.php/add_actor') ?>">
                        <input type='text' name='actorFirstname' placeholder='First name...' maxlength='255'required/><br>
                        <input type='text' name='actorLastname' placeholder='Last name...' maxlength='255'required/>
                        <input type='submit' value='Add'>
                    </form>
<!----------------------------------ADD DIRECTOR----------------------------------------->
                    <h2>Director</h2>
                    <form method='post' action="<?php echo base_url('./index.php/add_director') ?>">
                        <input type='text' name='directorFirstname' placeholder='First name...' maxlength='255'required/><br>
                        <input type='text' name='directorLastname' placeholder='Last name...' maxlength='255'required/>
                        <input type='submit' value='Add'>
                    </form>
<!----------------------------------ADD YEAR RELEASED----------------------------------------->
                    <h2>Year released</h2>
                    <form method='post' action="<?php echo base_url('./index.php/add_year') ?>">
                        <input type='number' name='year' placeholder='Release year' required/>
                        <input type='submit' value='Add'>
                    </form>
<!----------------------------------ADD MOVIE----------------------------------------->
                    <h2>Add Movie</h2>
                    <form method='post' action="<?php echo base_url('./index.php/add_movie') ?>">
                        <input type='text' name='title' placeholder='Title...' maxlength='255'required/><br>
                        <input type='decimal' name='budget' placeholder='Budget...' max='20' required/><br>
                        <input type='decimal' name='revenue' placeholder='Revenue...' required/><br>
                        <input type='text' name='duration' placeholder='Duration (HH:MM)...' required/><br>
                        <input type='number' step='0.1' name='rating' placeholder='Rating (1-10)...' min='0.1' max='10' required/><br>
                        <textarea rows="8" cols="50" name="description" placeholder='Storyline...' maxlength='1000'></textarea><br>
                        <input type='text' name='hyperlink' maxlength='255' placeholder='Link to external website...' required/><br>

                        <select name='genreID'>
                            <option value='Select' required>Select genre #1</option>
                                <?php
                                    if(is_array($genre) || is_object($genre))
                                    {
                                        foreach($genre as $row)
                                        {
                                            echo "<option value='$row->genreID'>$row->genre</option>";
                                        }
                                    }
                                ?>
                        </select><br>

                        <select name='genreIDTwo'>
                            <option value='Select' required>Select genre #2</option>
                                <?php
                                    if(is_array($genre) || is_object($genre))
                                    {
                                        foreach($genre as $row)
                                        {
                                            echo "<option value='$row->genreID'>$row->genre</option>";
                                        }
                                    }
                                ?>
                            </select><br>

                        <select name='directorID'>
                            <option value='Select' required>Select director #1</option>
                                <?php
                                if(is_array($director) || is_object($director))
                                {
                                    foreach($director as $row)
                                    {
                                        echo "<option value='$row->directorID'>$row->firstname $row->lastname</option>";
                                    }
                                }
                                ?>
                            </select><br>
                        
                        <select name='directorID2'>
                            <option value='Select' required>Select director #2</option>
                                <?php
                                if(is_array($director) || is_object($director))
                                {
                                    foreach($director as $row)
                                    {
                                        echo "<option value='$row->directorID'>$row->firstname $row->lastname</option>";
                                    }
                                }
                                ?>
                            </select><br>
                            
                        <select name='actorID'>
                            <option value='Select' required>Select actor #1</option>
                                <?php
                                if(is_array($actor) || is_object($actor))
                                {
                                    foreach($actor as $row)
                                    {
                                        echo "<option value='$row->actorID'>$row->firstname $row->lastname</option>";
                                    }
                                }
                                ?>
                            </select><br>

                        <select name='actorID2'>
                            <option value='Select' required>Select actor #2</option>
                                <?php
                                if(is_array($actor) || is_object($actor))
                                {
                                    foreach($actor as $row)
                                    {
                                        echo "<option value='$row->actorID'>$row->firstname $row->lastname</option>";
                                    }
                                }
                                ?>
                            </select><br>

                            <select name='actorID3'>
                            <option value='Select' required>Select actor #3</option>
                                <?php
                                if(is_array($actor) || is_object($actor))
                                {
                                    foreach($actor as $row)
                                    {
                                        echo "<option value='$row->actorID'>$row->firstname $row->lastname</option>";
                                    }
                                }
                                ?>
                            </select><br>

                            <select name='releaseID'>
                            <option value='Select' required>Select release year</option>
                                <?php
                                if(is_array($year) || is_object($year))
                                {
                                    foreach($year as $row)
                                    {
                                        echo "<option value='$row->releasedID'>$row->year</option>";
                                    }
                                }
                                ?>
                            </select><br>
                            <h3>Select an image(less than 64KB):</h3> 
                            <input type='file' name='image' accept='image/*'>
                        <input type='submit' value='Add'>
                    </form>
            </div>
<!--------------------------------DELETE DATABASE RECORDS--------------------------------------->
                <div class="delete-movie-container">
                    <h1>Delete Movies</h1>
<!-------------------------------------DELETE GENRE--------------------------------------------->
                    <form method='post' action="<?php echo base_url('./index.php/deleteGenre') ?>">
                        <h2>Genre</h2>
                        <select name='genre'>
                            <option value='Select' required>Select a genre to delete</option>
                                <?php
                                    if(is_array($genre) || is_object($genre))
                                    {
                                        foreach($genre as $row)
                                        {
                                            echo "<option value='$row->genre'>$row->genre</option>";
                                        }
                                    }
                                ?>
                            </select><br>
                        <input type='submit' value='Delete'>
                    </form>

                    <form method='post' action="<?php echo base_url('./index.php/deleteActor') ?>">
                        <h2>Actor</h2>
                        <select name='actorName'>
                            <option value='Select' required>Select actor to delete</option>
                                <?php
                                    if(is_array($actor) || is_object($actor))
                                    {
                                        foreach($actor as $row)
                                        {
                                            echo "<option value='$row->firstname $row->lastname'>$row->firstname $row->lastname</option>";
                                        }
                                    }
                                ?>
                        <input type='submit' value='Delete'>
                    </form>
                </div>
        </div>
    </body>
</html>