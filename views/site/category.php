<?php
    use yii\helpers\Url;
    use yii\widgets\LinkPager;
?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach($articlesId as $articleId):?>
                    <article class="post post-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="post-thumb">
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $articleId->id]); ?>"><img src="<?= $articleId->getImage(); ?>" alt="" class="pull-left"></a>

                                    <a href="<?= Url::toRoute(['site/view', 'id' => $articleId->id]); ?>" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center">View Post</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <header class="entry-header text-uppercase">
                                        <h6><?= $articleId->category->title ?></h6>

                                        <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id' => $articleId->id]); ?>"><?= $articleId->title ?></a></h1>
                                    </header>
                                    <div class="entry-content">
                                        <?= $articleId->description ?>
                                    </div>
                                    <div class="social-share">
                                        <span class="social-share-title pull-left text-capitalize">By Rubel On <?= $articleId->getDate(); ?></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                
                <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>
                
            </div>
        <!--site bar-->
            <?= $this->render('/partials/sitebar',[
                    'popular' => $popular,
                    'recent' => $recent,
                    'categories' => $categories]); 
            ?>
        <!--end site bar-->
        </div>
    </div>
</div>
<!-- end main content-->
