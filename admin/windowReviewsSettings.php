<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_VIEWS."ViewIndex.php";
require_once DIR_ADMIN_MODELS."ModelReviews.php";

$template = new ViewIndex();
$model = new ModelReviews();
$template->assign("reviews", $model->GetReviewsSettings ());
$template->display("settings_reviews.tpl");
?>
