<?php session_start(); ?>

<div class = 'header'>

    <div class = 'left'>
        <h1 class = 'right'> Greenery </h1>
    </div>

        <script src="../assets/js/sidebar.js"></script>

        <button class = 'icons' onclick = 'openbttn()' id='open-btn'>menu_open</button>
        <button class = 'icons' onclick = ''>account_circle</button>

        <?php
            $sid = $_SESSION['id'];
            if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 2) {
                    ?>

                        <button class = 'icons' onclick = 'window.location.href = "admin.php"'>
                            admin_panel_settings
                        </button>

                    <?php
                };
            }else {
                header('location: ../login.php');
            }
        ?>

        <div class="sidebar" id="side">
            <ul>
                <a class="closebttn" onclick="closeside()">X</a>
                <li><a href="../index.php">Return to storefront</a></li>
                <li><a href="../logout.php">Log out</a></li>
        </div>

</div>