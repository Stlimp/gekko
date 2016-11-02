<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;

$nohr="true";

?>
<div class="product-index">
  <div class="jumbotron" style="background-color:#F3F2EE">
    <div class="page-header">ДЕКОРАТИВНЫЙ КАМЕНЬ <b>GEKKOSTONE</b></div>


     <div class="gallery">

        <?php foreach ($categories as $category): ?>
           <?php foreach ($products as $productItem): ?>
                <?php if (!strcmp($category->product_category_name,$productItem->product_category_name)): ?>

                    <div class="product">
                        <a href="?ProductColorSearch%5Bproduct_subcategory_name%5D=<?php echo $productItem->product_product_name ?>&r=productcolor%2Findex"><img src="<?= $productItem->product_product_image?>" alt="" width="100%" height="145">
                        <h4 style="margin:15px;;text-align:center;text-transform: uppercase;"><?= $productItem->product_product_name?></h3>
                          </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <!-- <div class="product">
            <a href="http://gekkostone/web/index.php"><img src="images/content/related_products.jpg" alt="" width="220" height="150"></a>
            <h3 style="margin:0">Сопутствтвующие товары</h3>
        </div> -->
      <div class="moto" style="display:inline-block;float:right;font-family:Esenin;font-size:50px;text-align:right;width:100%;padding-right:15px; color: #787764;"><span style="color:#996633;">Вдохновение,</span> подаренное природой!</div>
    </div>
   <!--  <h1><?= Html::encode($this->title) ?></h1>
   <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
-->

  </div>

</div>
