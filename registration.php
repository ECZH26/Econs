<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/reg_view.inc.php';
?>

<!DOCTYPE html>
<html>
<body>
<main>
    <form action="includes/reg.inc.php" method="post">
    <label for="firstname">FirstName:</label>
    <input required id="firstname" type="text" name="firstname" placeholder="Firstname">

    <label for="lastname">LastName:</label>
    <input required id="lastname" type="text" name="lastname" placeholder="Lastname">

    <label for="email">Email:</label>
    <input required id="email" type="text" name="email" placeholder="Email">

    <label for="username">Username:</label>
    <input required id="username" type="text" name="username" placeholder="Username">

    <label for="password">Password:</label>
    <input required id="password" type="text" name="password" placeholder="Password">

    <button type="submit">Submit</button>
    </form>

    <a href="index.php">Login</a> <!-- add syle later using class (css)-->
    
    <?php
        check_signup_errors();
    ?>
</main>
</body>
</html>