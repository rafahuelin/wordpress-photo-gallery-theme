<!doctype html>
<html <?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header class="w3-container w3-teal">
    <div class="w3-row">
        <div class="w3-col m9 l9">
            <h1><span>Photo</span>Gallery</h1>
        </div>
        <div class="w3-col m3 l3">
            <input class="w3-input" type="text" placeholder="Search...">
        </div>
    </div>
</header>

<div class="w3-row">
    <div class="w3-col m3 l3">
        <ul class="w3-ul">
            <li><a href="#">Nature</a></li>
            <li><a href="#">Animals</a></li>
            <li><a href="#">Objects</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Abstract</a></li>
        </ul>
    </div>
    <div class="w3-col m9 l9">
        <div class="w3-row">
            <div class="w3-col m4 l4 pic">
                <a href="single.html">
                    <img src="images/1.jpg" class="w3-animate-opacity">
                    <p>Lorem ipsum dolor sit amet, consectetur adispiscing elit.</p>
                </a>
            </div>
            <div class="w3-col m4 l4 pic">
                <a href="single.html">
                    <img src="images/2.jpg" class="w3-animate-opacity">
                    <p>Lorem ipsum dolor sit amet, consectetur adispiscing elit.</p>
                </a>
            </div>
            <div class="w3-col m4 l4 pic">
                <a href="single.html">
                    <img src="images/3.jpg" class="w3-animate-opacity">
                    <p>Lorem ipsum dolor sit amet, consectetur adispiscing elit.</p>
                </a>
            </div>
            <div class="w3-col m4 l4 pic">
                <a href="single.html">
                    <img src="images/4.jpg" class="w3-animate-opacity">
                    <p>Lorem ipsum dolor sit amet, consectetur adispiscing elit.</p>
                </a>
            </div>
            <div class="w3-col m4 l4 pic">
                <a href="single.html">
                    <img src="images/5.jpg" class="w3-animate-opacity">
                    <p>Lorem ipsum dolor sit amet, consectetur adispiscing elit.</p>
                </a>
            </div>
            <div class="w3-col m4 l4 pic">
                <a href="single.html">
                    <img src="images/6.jpg" class="w3-animate-opacity">
                    <p>Lorem ipsum dolor sit amet, consectetur adispiscing elit.</p>
                </a>
            </div>
        </div>
    </div>
</div>
<footer>
    <p>Photo Gallery &copy; 2017</p>
</footer>
</body>
</html>