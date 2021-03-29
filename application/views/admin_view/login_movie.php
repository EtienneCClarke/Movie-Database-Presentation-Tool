<!DOCTYPE html>
    <header>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/add.css"/>
        <title>Admin Use Only</title>
    </header>

    <body>

      <form method='post' action="<?php echo base_url('./index.php/get_login') ?>">
              <b>Login</b>
            </div>

            <div class="box1">
              <label>Username</label>
              <input type="text" name="username" class="form-control">
            </div>

            <div class="box2">
              <label>Password</label>
              <input type="text" name="password" class="form-control">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
    </body>
</html>
