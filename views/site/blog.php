<?php

use yii\widgets\LinkPager;
use yii\helpers\Url;
use yii\helpers\Html;


/** @var yii\web\View $this */

$this->title = 'Blog';
?>
<div class="wrap-body">
	<section id="container">
		<div class="wrap-container">
			<!-----------------Content-Box-------------------->
			<div id="main-content">
				<div class="wrap-content">
					<div class="row">
						<?php foreach($articles as $article):?>
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->
									<div class="entry-header">
										<span class="time"><?= $article->getDate();?>  by <?= $article->author->name;?></span>
										<h2 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>"><?= $article->title;?></a></h2>
										<span class="cat-links"><a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]);?>"><?= $article->category->title;?></a></span>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="<?= $article->getImage();?>">
									</div>
									<div class="entry-content">
										<p><?= $article->description;?></p>
										<center><a class="button " href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>">Read More</a></center>
									</div>
									<div class="viewed"> 
										<p class="viewed-1 border-view">&#128065</p> 
										<p class="viewed-2"><?= (int) $article->viewed;?></p>
									</div>
								</div>
							</article>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="center">
<?php 
	echo LinkPager::widget([
		'pagination' => $pagination,
	]);
?>
</div>