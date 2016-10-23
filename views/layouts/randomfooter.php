<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subscribers */
/* @var $form ActiveForm */
?>
<div class="iconblock2" style="display:inline-block;width:15%;float:left;text-align:left;">
            <span><a href="https://ok.ru/group/54147799711857" target="_blank"><img src="images/icons/ok.png" alt="" onmouseover="this.src='images/icons/okhover.png';" onmouseout="this.src='images/icons/ok.png';"></a></span>
                                <span><a href="http://vk.com/public77540551" target="_blank"><img src="images/icons/vk.png" alt="" onmouseover="this.src='images/icons/vkhover.png';" onmouseout="this.src='images/icons/vk.png';"></a></span>
                                <span><a href="https://www.facebook.com/gekkostone" target="_blank"><img src="images/icons/facebook.png" alt="" onmouseover="this.src='images/icons/facebookhover.png';" onmouseout="this.src='images/icons/facebook.png';"></a></span>
                                <span><a href="https://www.instagram.com/gekkostone/" target="_blank"><img src="images/icons/instagram.png" alt="" onmouseover="this.src='images/icons/instagramhover.png';" onmouseout="this.src='images/icons/twitter.png';"></a></span>
                                <span><a href="https://www.youtube.com/channel/UC1DZsDgI5K9jGuUAzYDjUnQ" target="_blank"><img src="images/icons/youtube.png" alt="" onmouseover="this.src='images/icons/youtubehover.png';" onmouseout="this.src='images/icons/youtube.png';"></a></span>
        </div>
        <?php if ($nohr!="true"){
         echo "<div style=\"width:85%;float:right\">
            <hr style=\"margin-top: 5px;\">
        </div>";
         }?>
        <!-- <div class="half">
            <span>
                <form>
                    <div>email</div>
                    <div class="input" style="border: 1px solid #E1DFD0;
            padding: 3px;">
                        <input type="text" class="button" id="email" name="email" placeholder="" style="border: 0;height:25px;">
                        <input type="submit" class="button" id="submit" value="ПОДПИСКА" style="border: 0;height:25px;">
                      </div>
                </form>
            </span>
        </div> -->
        <div class="randomfooter">
             <span>
                <form action="index.php?r=site%2Fsubscribe" method="post">
                    <div style="border: 1px solid #E1DFD0;width:250px;padding: 3px;">
                            <input type="text" class="email" id="email" name="email" placeholder="e-mail" style="border: 0;height:25px;width:150px">
                            <input type="submit" class="button" id="submit" value="ПОДПИСКА" style="border: 0;height:25px;float:right;width:85px;">
                        </form>
                    </div>
                </form>
            </span>
            <span style="float:left;padding-right:15px;">скачать <a href="index.php?r=site%2Fprice" style="color:#996633"><u>price</u></a></span>
        </div>