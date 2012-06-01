<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_MODELS."ModelReviews.php";
    
    $reviews = new ModelReviews();
    $reviews -> DeleteReviews($_GET["id"]);
    header('Location: reviews.php');
    
?>