<?php session_start(); ?>

<div class = 'header'>

    <div class = 'left'>
        <h1 class = 'right'> Greenery </h1>
    </div>

        <script src="../assets/js/sidebar.js"></script>

        <button class = 'icons' onclick = 'openbttn()' id='open-btn'>menu_open</button>
        <button class = 'icons' onclick = ''>account_circle</button>

        <?php

            if (isset($_SESSION['email'])) {
                if ($_SESSION['email'] == 'admin') {
                    ?>

                        <script src="../assets/js/goToAdmin.js"></script>
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
                <li><a href="index.php">Index</a></li>
                <li><a href="store.php">Store</a></li>
                <?php
                    if (!isset($_SESSION['email'])) {
                        echo '<li><a href="login.php">Login</a></li>';
                    };

                    if (isset($_SESSION['email'])) { ?>
                        <li><a href="#">Cart</a></li>
                        <li><a href="user-pages/options.php">Options</a></li>
            
                    <?php };?>

                    <li><a href="#">Contact</a></li>
                    <li><a href="about.php">About</a></li>       
            </ul> 
        </div>

</div>