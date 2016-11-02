<?php
    use app\models\ProductCategories;
    use app\models\Product;
    use app\models\ImageCategories;
    use app\models\ImageSubcategories;
 ?>

<div id="w0-nav" class="navbar-fixed-top navbar">
            <a href="<?=Yii::$app->homeUrl?>">
                <div class="logo">
                    <img src="/images/logo.png" alt="">
                </div>
            </a>
<a href="fgjhdslkghsdjkfhsdlkgfhsdjg"></a>
            <ul id="nav" class="nav1">
                <div class="ablock">

                    <span><a href="index.php?r=site%2Fpartnership">парнерство</a></span>
                    <span class="bullet">&#8226;</span>
                    <span><a href="index.php?r=news%2Findex">новости</a></span>
                    <span class="bullet">&#8226;</span>
                    <span><a href="index.php?r=faq%2Findex">вопросы</a></span>
                    <span class="bullet">&#8226;</span>
                    <span><a href="index.php?r=site%2Fcontact">контакты</a></span>
                    <span class="bullet">&#8226;</span>
                    <span><a href="#">поиск</a></span>
                    <span class="bullet">&#8226;</span>
                    <span ><a href="index.php?r=site%2Fcart">моя галерея<span id="<?php echo (Yii::$app->cart->getIsEmpty()?"empty_":"") ?>cart"><?php echo $itemsCount = \Yii::$app->cart->getCount(); ?></span></a></span>
                </div>
                <!-- <div class="iconblock2">
                    <span><a href="tel:+123"><img src="images/icons/viber.png" alt="" onmouseover="this.src='images/icons/viberhover.png';" onmouseout="this.src='images/icons/viber.png';"></a></span>
                    <span><a href="#"><img src="images/icons/skype.png" alt="" onmouseover="this.src='images/icons/skypehover.png';" onmouseout="this.src='images/icons/skype.png';"></a></span>
                    <span><a href="#" target="_top" ><img src="images/icons/email.png" alt="" onmouseover="this.src='images/icons/emailhover.png';" onmouseout="this.src='images/icons/email.png';"></a> </span>
                </div>-->
                <div class="iconblock2">
                    <span><a href="https://ok.ru/group/54147799711857" target="_blank"><img src="/images/icons/ok.png" alt="" onmouseover="this.src='/images/icons/okhover.png';" onmouseout="this.src='/images/icons/ok.png';"></a></span>
                    <span><a href="http://vk.com/public77540551" target="_blank"><img src="/images/icons/vk.png" alt="" onmouseover="this.src='/images/icons/vkhover.png';" onmouseout="this.src='/images/icons/vk.png';"></a></span>
                    <span><a href="https://www.facebook.com/gekkostone" target="_blank"><img src="/images/icons/facebook.png" alt="" onmouseover="this.src='/images/icons/facebookhover.png';" onmouseout="this.src='/images/icons/facebook.png';"></a></span>
                    <span><a href="https://www.instagram.com/gekkostone/" target="_blank"><img src="/images/icons/instagram.png" alt="" onmouseover="this.src='/images/icons/instagramhover.png';" onmouseout="this.src='/images/icons/twitter.png';"></a></span>
                    <span><a href="https://www.youtube.com/channel/UC1DZsDgI5K9jGuUAzYDjUnQ" target="_blank"><img src="/images/icons/youtube.png" alt="" onmouseover="this.src='/images/icons/youtubehover.png';" onmouseout="this.src='/images/icons/youtube.png';"></a></span>
                </div>
            </ul>



            <ul id="nav" class="nav2">

                <li class="menu-item <?php if (isset($this->params['menuselected'])&&($this->params['menuselected'] == "index")){ echo "selectedmenu";} ?>"><a href="" onclick="return false;">О КОМПАНИИ</a>
                        <ul>
                            <li><a href="index.php?r=site%2Fcompany">GEKKOSTONE</a></li>
                            <li><a href="index.php?r=site%2Fadvantages">ПРЕИМУЩЕСТВА</a></li>
                            <li><a href="index.php?r=news%2Findex">НОВОСТИ</a></li>
                            <li><a href="index.php?r=site%2Fvacancy">ВАКАНСИИ</a></li>
                            <li><a href="index.php?r=site%2Ffeedback">ОТЗЫВЫ И ПРЕДЛОЖЕНИЯ</a></li>
                            <li><a href="index.php?r=site%2Fpartnership">ПАРТНЕРСТВО</a></li>
                            <li><a href="index.php?r=site%2Fcontact">КОНТАКТЫ</a></li>
                        </ul>
                </li>
                <li class="menu-item <?php if (isset($this->params['menuselected'])&&($this->params['menuselected'] == "products")){ echo "selectedmenu";} ?>" ><a href="" onclick="return false;">ПРОДУКЦИЯ</a>
                    <ul>
                        <li><a href="index.php?r=product%2Findex">ВСЯ ПРОДУКЦИЯ</a></li>
                         <?php
                            $model=new ProductCategories();
                            $products_categories=$model::find()->select('product_category_name')->orderBy('product_category_id')->all();

                            $model2=new Product();
                            $products =$model2::find()->orderBy('product_product_id')->all();
                            ?>
                            <?php  foreach ($products_categories as $category):?>
                                <li>
                                    <a href="?ProductSearch%5Bproduct_category_name%5D=<?php echo str_replace(' ', '+', $category->product_category_name) ?>&r=product%2Findex"><?php echo mb_strtoupper($category->product_category_name);?></a><span style="color:transparent;">&#9658;</span>
                                    <ul>
                                        <?php  foreach ($products as $product_item):?>
                                            <?php if (!strcmp($product_item->product_category_name, $category->product_category_name)):?>
                                            <li><span style="color:transparent">&#9679;</span><a href="?ProductColorSearch%5Bproduct_subcategory_name%5D=<?php echo $product_item->product_product_name ?>&r=productcolor%2Findex"> <?php echo $product_item->product_product_name ?></a></li>
                                            <?php endif;?>
                                        <?php endforeach;?>

                                    </ul>
                                </li>
                            <?php endforeach;?>


                        <li><a href="#">СОПУТСТВУЮЩИЕ ТОВАРЫ</a></li>
                    </ul>
                </li>
                <li class="menu-item <?php if (isset($this->params['menuselected'])&&($this->params['menuselected'] == "photogallery")) { echo "selectedmenu";} ?>"><a href="" onclick="return false;">ФОТОГАЛЕРЕЯ</a>
                    <ul>
                        <?php
                            $model=new ImageCategories();
                            $image_categories=$model::find()->select('image_category_name')->orderBy('image_category_id')->all();

                            $model2=new ImageSubcategories();
                            $imagesubcategories=$model2::find()->orderBy('image_subcategory_id')->all();
                         ?>
                         <?php  foreach ($image_categories as $category):?>
                                <li>
                                    <a href="index.php?PhotogallerySearch%5Bphoto_category%5D=<?php echo $category->image_category_name ?>&PhotogallerySearch%5Bphoto_subcategory%5D=&r=photogallery%2Findex"><?php echo mb_strtoupper($category->image_category_name);?></a><span style="color:transparent;">&#9658;</span>
                                    <ul>
                                        <?php  foreach ($imagesubcategories as $subcategory_item):?>
                                            <?php if (!strcmp($subcategory_item->image_category_name, $category->image_category_name)):?>
                                            <li><span style="color:transparent;">&#9679;</span><a href="index.php?PhotogallerySearch%5Bphoto_category%5D=<?php echo $category->image_category_name ?>&PhotogallerySearch%5Bphoto_subcategory%5D=<?php echo $subcategory_item->image_subcategory_name;?>&r=photogallery%2Findex"> <?php echo $subcategory_item->image_subcategory_name ?></a></li>
                                            <?php endif;?>
                                        <?php endforeach;?>

                                    </ul>
                                </li>
                            <?php endforeach;?>
                        <li><a href="index.php?r=beforeandafteralbum%2Findex">ДО И ПОСЛЕ</a></li>
                    </ul>
                </li>
                <li class="menu-item <?php if (isset($this->params['menuselected'])&&($this->params['menuselected'] == "info")) { echo "selectedmenu";} ?>"><a href=""  onclick="return false;">ИНФОРМАЦИЯ</a>
                    <ul>
                        <li><a href="index.php?r=site%2Frocklaying">УКЛАДКА КАМНЯ</a></li>
                        <li><a href="index.php?r=faq%2Findex">ВОПРОС - ОТВЕТ</a></li>
                        <li><a href="index.php?r=certificates%2Findex">ТЕХНИЧЕСКИЕ ДАННЫЕ</a></li>
                        <li><a href="index.php?r=site%2Fwarning">ЦВЕТОПЕРЕДАЧА</a></li>
                        <li><a href="index.php?r=site%2Fwarranty">ГАРАНТИЯ КАЧЕСТВА</a></li>
                        <li><a href="index.php?r=site%2Fpublicoffer">ПУБЛИЧНАЯ ОФЕРТА</a></li>
                        <li><a href="index.php?r=site%2Fprice">КАТАЛОГ И ПРАЙС-ЛИСТ</a></li>
                        <li><a href="index.php?r=product%2F3ds">ТЕКСТУРЫ КАМНЯ<span style ="color:#4D4D4D;background-color:white;border-radius: 3px 0px 3px 0px;float:left">3DS</span></a></li>
                    </ul>
                </li>
                <li class="menu-item <?php if (isset($this->params['menuselected'])&&($this->params['menuselected'] == "stores")) { echo "selectedmenu";} ?>"><a href="index.php?r=stores%2Findex">ГДЕ КУПИТЬ</a></li>
                <li class="menu-item <?php if (isset($this->params['menuselected'])&&($this->params['menuselected'] == "services")) { echo "selectedmenu";} ?>"><a href=""  onclick="return false;">УСЛУГИ</a>
                    <ul>
                            <li><a href="index.php?r=site%2Fdesign">ДИЗАЙН-ПРОЕКТ</a></li>
                            <li><a href="index.php?r=site%2Fselection">ПОДБОР КАМНЯ</a></li>
                            <li><a href="index.php?r=site%2Fdelivery">ДОСТАВКА КАМНЯ</a></li>
                            <li><a href="index.php?r=site%2Ffacing">ОБЛИЦОВКА</a></li>
                        </ul>
                    </li>
            </ul>
    </div>