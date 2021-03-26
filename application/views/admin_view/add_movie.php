<!DOCTYPE html>
    <header>
        <title>Add Movie</title>
        <h1>Add Movies to database</h1>
    </header>
    
    <body>
<!----------------------------------GENRE----------------------------------------->
        <h2>Genre</h2>
        <table border='1'> 
                    <tr>
                        <th> ID </th>
                        <th> Genre </th>
                    </tr>
        <?php
        if(is_array($genre) || is_object($genre))
        {
            foreach($genre as $row)
            {
            echo <<<_END
                    <tr>
                        <td> $row->genreID </td>
                        <td> $row->genre </td>
                    </tr>
_END;
            }
        }
        ?>
        </table><br>
        <form method='post' action="<?php echo base_url('./index.php/add_genre') ?>">
			<label> Genre: </label>
			<input type='text' name='genre' maxlength='255'required/>
            <input type='submit' value='Add'>
        </form>
        <?php echo $genreMessage; ?><br>
<!----------------------------------ACTOR----------------------------------------->
        <h2>Actor</h2>
        <table border='1'> 
                    <tr>
                        <th> ID </th>
                        <th> First name </th>
                        <th> Last name </th>
                    </tr>
        <?php
        if(is_array($actor) || is_object($actor))
        {
            foreach($actor as $row)
            {
            echo <<<_END
                    <tr>
                        <td> $row->actorID </td>
                        <td> $row->firstname </td>
                        <td> $row->lastname </td>
                    </tr>
_END;
            }
        }
        ?>
        </table><br>
        <form method='post' action="<?php echo base_url('./index.php/add_actor') ?>">
			<label> First name: </label>
			<input type='text' name='actorFirstname' maxlength='255'required/>
            <label> Last name: </label>
            <input type='text' name='actorLastname' maxlength='255'required/>
            <input type='submit' value='Add'>
        </form>
        <?php echo $actorMessage; ?><br>
<!----------------------------------DIRECTOR----------------------------------------->
        <h2>Director</h2>
        <table border='1'> 
                    <tr>
                        <th> ID </th>
                        <th> First name </th>
                        <th> Last name </th>
                    </tr>
        <?php
        if(is_array($director) || is_object($director))
        {
            foreach($director as $row)
            {
            echo <<<_END
                    <tr>
                        <td> $row->directorID </td>
                        <td> $row->firstname </td>
                        <td> $row->lastname </td>
                    </tr>
_END;
            }
        }
        ?>
        </table><br>
        <form method='post' action="<?php echo base_url('./index.php/add_director') ?>">
            <label> First name: </label>
			<input type='text' name='directorFirstname' maxlength='255'required/>
            <label> Last name: </label>
            <input type='text' name='directorLastname' maxlength='255'required/>
            <input type='submit' value='Add'>
        </form>
        <?php echo $directorMessage; ?><br>
<!----------------------------------YEAR RELEASED----------------------------------------->
        <h2>Year released</h2>
        <table border='1'> 
                    <tr>
                        <th> ID </th>
                        <th> Year </th>
                    </tr>
        <?php
        if(is_array($year) || is_object($year))
        {
            foreach($year as $row)
            {
            echo <<<_END
                    <tr>
                        <td> $row->releasedID </td>
                        <td> $row->year </td>
                    </tr>
_END;
            }
        }
        ?>
        </table><br>
        <form method='post' action="<?php echo base_url('./index.php/add_year') ?>">
			<label> Release year: </label><br>
			<input type='number' name='year' required/>
            <input type='submit' value='Add'>
        </form>
        <?php echo $releaseYearMessage; ?>
<!----------------------------------Movie----------------------------------------->
        <h2>Year released</h2>
        <table border='1'> 
                    <tr>
                        <th> Title </th>
                        <th> Budget </th>
                        <th> Revenue </th>
                        <th> Duration </th>
                        <th> Description </th>
                        <th> Genre ID </th>
                        <th> Director ID </th>
                        <th> Actor ID </th>
                        <th> Released ID </th>
                    </tr>
        <?php
        if(is_array($movie) || is_object($movie))
        {
            foreach($movie as $row)
            { 
            echo <<<_END
                    <tr>
                        <td> $row->title </td>
                        <td> $row->budget </td>
                        <td> $row->revenue </td>
                        <td> $row->duration </td>
                        <td> $row->description </td>
                        <td> $row->genreID </td>
                        <td> $row->directorID </td>
                        <td> $row->actorID </td>
                        <td> $row->releasedID </td>
                    </tr>
_END;
            }
        }
        ?>
        </table><br>
        <form method='post' action="<?php echo base_url('./index.php/add_movie') ?>">
			<label> Title: </label>
			<input type='text' name='title' maxlength='255'required/><br>
            <label> Budget: </label>
			<input type='decimal' name='budget' max='20'required/><br>
            <label> Revenue: </label>
			<input type='decimal' name='revenue' maxlength='20'required/><br>
            <label> Duration: </label>
			<input type='text' name='duration' placeholder='HH:MM:SS' maxlength='255'required/><br>
            <label> Description: </label><br>
			<textarea rows="4" cols="50" name="description"></textarea><br>
            <label> Genre ID: </label>
			<input type='number' name='genreID' required/><br>
            <label> Director ID: </label>
			<input type='number' name='directorID' required/><br>
            <label> Actor ID: </label>
			<input type='number' name='actorID' required/><br>
            <label> Release ID: </label>
			<input type='number' name='releaseID' required/>
            <input type='submit' value='Add'>

            <?php
        if(is_array($genre) || is_object($genre))
        {
            foreach($genre as $row)
            {
            echo <<<_END
                    <select name='genreID'>
                        <option value='$row->id'>$row->genre</option
                    </select>
_END;
            }
        }
        ?>
        </form>
        <?php echo $movieMessage; ?>
    </body>
</html>