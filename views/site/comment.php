<?php if(!empty($comments)):?>

<?php foreach($comments as $comment):?>
    <div class="bottom-comment"><!--bottom comment-->

        <div class="comment-text">
            <h5 class="comment-style"><?= $comment->getDate();?> by <?= $comment->user->name;?></h5>
            <p class="para"><?= $comment->text; ?></p>
        </div>
    </div>
<?php endforeach;?>

<?php endif;?>
<!-- end bottom comment-->

<?php if(!Yii::$app->user->isGuest):?>
    <div class="leave-comment"><!--leave comment-->
        <h4>Leave a reply</h4>
        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif;?>
        <?php $form = \yii\widgets\ActiveForm::begin([
            'action'=>['site/comment', 'id'=>$article->id],
            'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
        <div class="form-group">
            <div class="col-md-12">
                <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Write Message'])->label(false)?>
            </div>
        </div>
        <center><button type="submit" class="com-btn">Post Comment</button></center>
        <?php \yii\widgets\ActiveForm::end();?>
    </div><!--end leave comment-->
<?php else:?>
    <h5 class="center">Login or signup to write comments</h5>
<?php endif;?>