<?php
include "./phpScript/lumacon.php";
$islogged = new main();

?>
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Site made with Mobirise Website Builder v4.8.2, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.8.2, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/bookcor-122x122.jpg" type="image/x-icon">
        <meta name="description" content="Site Builder Description">
        <title>books</title>
        <link rel="stylesheet" type="text/css" href="scripts/sweetalert2.css">
        <script type="text/javascript" src="scripts/sweetalert2.js"></script>
        <script type="text/javascript" src="./scripts/logout.js"></script>
        <style>
            .dropdown {
                position: relative;
                display: inline-block;
            }
            
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0 0 0 1px rgba(0, 0, 0, .05);
                z-index: 1;
                text-align: center;
                padding: .5em 0;
            }
            /* Links inside the dropdown */
            
            .dropdown-content a {
                color: red;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            /* Change color of dropdown links on hover */
            
            .dropdown-content a:hover {
                background-color: #ddd
            }
            /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
            
            .show {
                display: block;
            }
            
            .pinClass {
                position: relative;
                overflow: auto;
                padding: 0px 10px 16px 0;
                height: 392px;
                background-position: center 0;
                background-size: cover;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                -ms-background-size: cover;
                -webkit-justify-content: flex-end;
                justify-content: flex-end;
                -webkit-flex-direction: column;
                flex-direction: column;
            }
        </style>
    </head>

    <body>
        <section class="menu cid-r4GmEFe1O0" once="menu" id="menu2-n">
            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm bg-color transparent">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                        <a href="index.php">
                            <img src="assets/images/bookcor-122x122.jpg"   title="" style="height: 3.8rem;">
                        </a>
                    </span>
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index.php">Luma</a></span>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="dropdown">
                        <input type="hidden" value="<?php echo $islogged->fetchData('reg_code'); ?>" id="user_code">
                        <a class="nav-link link text-black display-4 dropdown-toggle" onclick="dropDown();" id="btndrop"><span class="caret"></span>
                        </a>
                        <div id="mydrop" class="dropdown-content">
                            <a class="nav-link link text-black display-4" href="home.php">Home</a>
                            <a class="nav-link link text-black display-4" href="" onclick="event.preventDefault();
                        window.location='profile.php';">Profile</a>
                            <?php
                            if($islogged->fetchData('userLevel') == 1){
                        ?>
                                <a class="nav-link link text-black display-4" href="add_book.php">Add E-book</a>
                                <a class="nav-link link text-black display-4" href="pin_home.php">Create Pin</a>
                                <a class="nav-link link text-black display-4" href="members.php">View Readers</a>
                                <?php
                            }else{
                        ?>
                                    <a class="nav-link link text-black display-4" href="comingsoon.php">Join Group Chat</a>
                                    <a class="nav-link link text-black display-4" href="favourite.php">Favourite Books</a>
                                    <?php
                            }
                        ?>
                                        <a class="nav-link link text-black display-4" onclick="logout(); ">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <script>
            function dropDown() {
                document.getElementById('mydrop').classList.toggle('show');
            }

            window.onclick = function(event) {
                if (!event.target.matches('#btndrop')) {
                    var dropdowns = document.getElementsByClassName('dropdown-content');
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDrops = dropdowns[i];
                        if (openDrops.classList.contains('show')) {
                            openDrops.classList.remove('show');
                        }
                    }
                }
            }
        </script>
        <script type="text/javascript" src="./scripts/checkUsername.js"></script>
    </body>

    </html>