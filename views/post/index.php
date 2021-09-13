<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Posts index';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Posts index!</h1>

        <p class="lead">All the posts are listed here</p>

        <p><a class="col-xs-12 btn btn-success" href="<?php echo Url::to(['post/create']); ?>">Create new post</a>     </p>
    </div>

    <div class="body-content">

        <div class="row">



        </div>

    </div>
</div>
