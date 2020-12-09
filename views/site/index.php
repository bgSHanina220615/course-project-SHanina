<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
		
		<h2>Количество решённых заявок: <?= $count ?></h2>
		
    </div>

    <div class="body-content">

        <div class="row">
		<?php
			foreach($request as $model){
			echo '
				<div class="col-lg-3 ">
					<h2>'.$model->name.'</h2>

					<p>'.$model->description.'</p>
					<p>'.$model->timestamp.'</p>';
					//echo '<img src="http://course-project-shanina-/uploads/1-1.png" 'alt'="фото заявки">';
					//echo Html::img('@app/uploads/'.$model->photoBefore, ['alt' => 'фото заявки']); 
					echo Html::img('@web/uploads/'.$model->photoBefore, ['alt' => 'фото заявки']); 
					echo '
					<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
				</div>
				';
			}
			
		?>
            <!-- <div class="col-lg-3 ">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div> -->
            
        </div>

    </div>
</div>
