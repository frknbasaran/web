<div class="container">
    <?php
        if($main->checkSession()) {
            $render->login();
        } else {
            $render->welcome();
        }
    ?>
</div>