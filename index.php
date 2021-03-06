<?php
/**
 * Created by PhpStorm.
 * User: Haro231
 * Date: 03/05/2016
 * Time: 21:34
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>LOGIN FORM</h1>
<div class = "loginBox">
<form method = "post" action ="login.php">

    <h5>username: <input type = "text" name = "username" placeholder="username"></h5>
    <h5>password: <input type = "password" name="password" placeholder="password"></h5>
    <input type = "submit" value="login">

    <div class = "error"> <?php //echo $error?> <?php //echo $username; echo $password?></div>
</div>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker</title>
    <link rel="stylesheet" href="assets/stylesheet.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <meta name="viewpoint"
          content="width=device-width,
          initial-scale=1,
          minimum-scale=1,
          maximum-scale=1"/>
</head>
<body>
<header class="grid-container">
    <img src="assets/images/trackerlogo.png" alt="Bug Tracker" id="logo" class="grid-30"/>
    <div id="title" class="grid-60">
        1       <h1>BugTracker</h1>
        <h2>Keep track of all the pesky little bugs</h2>
    </div>
</header>

<main class="grid-container">
    <nav class="grid-30">
        <ul>
            <li><a href='showbugs.php'>All Bug Items</a></li>
            <li><a href='showbugs.php?bugcategory=android'>Android Bug Items</a></li>
            <li><a href='showbugs.php?bugcategory=ios'>iOS Bug Items</a></li>
            <li><a href='showbugs.php?bugcategory=windows'>Windows Bug Items</a></li>
            <li><a href='addbug.php'>Insert Bug Items</a></li>
        </ul>
    </nav>

    <section class="grid-70">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam metus neque, commodo eu odio vel, cursus lacinia mauris. Curabitur dapibus lacinia laoreet. Vivamus quis tortor accumsan, ultricies ligula eu, pretium urna. Fusce eget commodo massa, id iaculis lorem. Nunc aliquet elit sed risus interdum, eget rutrum tellus efficitur. Fusce suscipit at dolor id eleifend. Aliquam sem quam, porta ut ullamcorper in, eleifend nec nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam malesuada luctus leo eget finibus.

            Duis leo elit, blandit vitae commodo nec, congue id lectus. Donec augue purus, sollicitudin id vehicula eget, posuere id velit. Vestibulum pulvinar neque eget libero fringilla, eget accumsan eros gravida. Fusce gravida eu libero at vestibulum. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec commodo at diam sodales fermentum. Maecenas blandit sapien id sapien imperdiet efficitur. Sed a elit ornare turpis feugiat ullamcorper. Donec non ipsum nibh.

            Phasellus blandit commodo rutrum. Sed eget feugiat ex. Aliquam egestas justo ac iaculis aliquet. Duis id orci ut dolor finibus ullamcorper. Pellentesque tincidunt condimentum dapibus. Sed ac ornare sapien. Etiam fermentum nibh nec mauris egestas, eleifend cursus ipsum luctus.

            Morbi porta enim quis ex imperdiet iaculis. Curabitur vel nisi sit amet ligula gravida hendrerit a nec nulla. Phasellus in laoreet elit, sit amet dapibus purus. Quisque aliquet, urna non pellentesque rutrum, mauris felis maximus magna, a dictum erat elit non urna. Proin eget mi vitae tellus lacinia condimentum quis ut erat. Aliquam iaculis feugiat mollis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
    </section>

</main>


<footer>
    <p>Designed by Oluwaseyi Nojimu-Yusuf, 2016 (c).</p>
</footer>
</body>
</html>