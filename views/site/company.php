<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Gekkostone';
?>
<style>
    .wrap > .container{
        padding: 70px 0px 20px;
    }
    .container{
        margin:0;
        width: 100%;
    }
    
    .container .jumbotron, .container-fluid .jumbotron {
    padding-right: 0px;
    padding-left: 0px;
    }
    .left-side-half-header, .left-side-half-text{
        padding-left: 50px;
        padding-right:25px;
    }
    .right-side-half-header, .right-side-half-text{
        padding-left: 25px;
        padding-right:50px;
    }
</style>




<div class="site-index">
   <div class="jumbotron">
    <div class="left-half">
    	<div class="left-side-half-header">О КОМПАНИИ</div>
    	<div class="left-side-half-text">
    		<p><img src="images/content/aboutcompany.jpg" style="float:top;width:100%;">ООО «ГЕККОСТОУН» производит декоративный облицовочный камень с 2009 года. На 
протяжении 6 лет нами накоплен огромный опыт в производстве качественных и долговеч-
ных облицовочных материалов. Особое внимание уделяется декоративным свойствам обли-
цовочного камня. Самую большую гордость нашего предприятия составляют матрицы-моде-
ли, которые являются прототипами для будущего камня GEKKOSTONE. Все без исключения 
прототипы изготовлены на основе натурального природного камня самых различных пород 
и фактур. Уникальность и неповторимость каждому штучному элементу камня придает 
особая технология окрашивания в массе. Декоративный камень изготавливается с примене-
нием только натуральных сырьевых компонентов и красителей, что позволяет заявить о его 
100% натуральности и экологичности.</p>
    	</div>
    </div>
    <div class="right-half">
    	<div class="right-side-half-header">GEKKOSTONE</div>
    	<div class="right-side-half-text">
    		<p>
    			Компания <b>GEKKOSTONE</b> является производителем декоративного облицовочного 
камня премиум качества по доступным ценам. 
				<ul style="-webkit-padding-start: 15px;">
					<li style="color:#D0272E"><span style="color:#666666">многообразие натуральных окрасов и фактур!</span></li>
					<li style="color:#D0272E"><span style="color:#666666">прочность и долговечность</span></li>
					<li style="color:#D0272E"><span style="color:#666666">великолепный декоративный эффект снаружи и внутри!</span></li>
				</ul>
    		</p>
    	</div>
    	<div class="right-side-half-header">ПОЧЕМУ GEKKO</div>
    	<div class="right-side-half-text">
    		<p><img src="images/content/gekko.jpg" style="float:right;width:45%;">
				Гекконы - очень красивые ящерецы, имеющие выразительно яркий и весьма 
разнообразный окрас. Обитают гекконы 
в теплом климате и обычно прячутся от 
дневной жары среди камней. Удивительной особенностью гекконов является их 
необыкновенная способность карабкаться по крутым склонам, взбираться по 
гладкой стене с огромной скоростью и 
даже бегать вниз головой по поверхности из полированного стекла. Невероятно, но каждая лапка геккона может прикаса-
ться к поверхности двумя миллиардами окончаний! Благодаря близкому контакту щетинок на лапках с поверхностью гекконы используют силы ближнего вза-
имодействия между молекулами. В результате 1 см2  поверхности лапки геккона 
способен удержать груз весом почти 100 кг! Теоретически один геккон способен 
удерживать двух взрослых человек. Вот такие природные нанотехнологии! 
Еще одной замечательной особенностью геккона является необычайное строение глаз, позволяющее одинаково четко видеть как на свету, так и в абсолютной 
темноте. 
    		</p>
    	</div>
    	<div class="right-side-half-text" style="text-align:right;font-family:Impact;">
			<?php 
				$input = array('ИСКУССТВО ДЕКОРАТИВНОГО <span style="color: #D0272E">К</span>АМНЯ', 'ТВОЕ ПРОСТРАНСТВО, ТВОЙ <span style="color: #D0272E">К</span>АМЕНЬ', 'БУДУЩЕЕ СТРОИТСЯ НА <span style="color: #D0272E">К</span>АМНЕ!', 'СОВЕРШЕННАЯ ФИЛОСОФИЯ <span style="color: #D0272E">К</span>АМНЯ', 'МЫ ДЕЛАЕМ <span style="color: #D0272E">К</span>АМЕНЬ НАТУРАЛЬНЫМ!');
				$key = array_rand($input,1); 
				echo "<h1>$input[$key]</h1>"	; 
			?>
		</div>
    </div>
	</div>
</div>

