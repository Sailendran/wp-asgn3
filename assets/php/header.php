<div class = 'header'>

    <div class = 'left'>
        <h1 class = 'right'> Greenery </h1>
    </div>
        <script src="assets/js/nav-menu.js">
            const post = <?= isset($_SESSION);?>;
        </script>
        <script src="assets/js/sidebar.js"></script>

        <button class = 'icons' onclick = 'openMenu(<?= isset($_SESSION) ?>)'>menu_open</button>
        <button class = 'icons' onclick = 'openbttn()'>account_circle</button>

        <?php

            if (isset($_SESSION)) {
                if ($_SESSION['user'] == 'admin') {
                    ?>

                        <script src="assets/js/goToAdmin.js"></script>
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
                <li><a href="#" class="closebttn" onclick="closeside()">X</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Options</a></li>
            </ul> 
        </div>

</div>