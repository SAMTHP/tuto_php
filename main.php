<?php session_start(); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h6 class="mt-3 text-muted">Bonjour <?php echo $_SESSION["active_session"]["current_user"]["username"] ?></h6>
    <!--  CONTENT TO SHOW -->
    <?php require $_SESSION["content_to_show"]; ?>
</main>