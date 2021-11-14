<div class = 'header'>

    <div class = 'left'>
        <h1 class = 'right'> Greenery </h1>
    </div>
        <script src="assets/js/nav-menu.js">
            const post = <?= isset($_SESSION);?>;
        </script>

        <button class = 'icons' onclick = 'openMenu(<?= isset($_SESSION) ?>)'>menu_open</button>
        <button class = 'icons' onclick = 'foo()'>account_circle</button>

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
            };
        ?>

</div>