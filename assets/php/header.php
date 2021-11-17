<?php session_start(); ?>

<div class = 'header'>

    <div class = 'left'>
        <h1 class = 'right'> Greenery </h1>
    </div>

        <script src="assets/js/sidebar.js"></script>
        <script src="assets/js/GOTO.js"></script>

        <button class = 'icons' onclick = 'openbttn()' id='open-btn'>menu_open</button>
        <button class = 'icons' onclick = 'goToOptions()'>account_circle</button>

        <?php

            if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 2) {
                    ?>
                    
                        <button class = 'icons' onclick = 'goToAdmin()'>
                            admin_panel_settings
                        </button>

                    <?php
                };
            }else {
                
            }
        ?>

        <div class="sidebar" id="side">
            <ul>
                <a class="closebttn" onclick="closeside()">X</a>
                
                <?php
                    if (!isset($_SESSION['id'])) { ?>

                        <li><a href="login.php">Login</a></li>
                        <li><a href="signup.php">Sign up</a></li>

                    <?php };

                    if (isset($_SESSION['id'])) { ?>
                        <li><a href="#">Cart</a></li>
                        <li><a href="user-pages/options.php">Options</a></li>
            
                    <?php };?>

                    <li><a href="index.php">Index</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="about.php">About</a></li>

                    <?php
                    if (isset($_SESSION['id'])) { ?>
                        <li><a href="logout.php">Log out</a></li>       
                    <?php }; ?>
                        

            </ul> 
        </div>

</div>