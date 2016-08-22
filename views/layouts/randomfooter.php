<div class="iconblock2" style="display:inline-block;width:15%;float:left;text-align:left;">
            <span><a href="#"><img src="images/icons/ok.png" alt="" onmouseover="this.src='images/icons/okhover.png';" onmouseout="this.src='images/icons/ok.png';"></a></span>
            <span><a href="#"><img src="images/icons/vk.png" alt="" onmouseover="this.src='images/icons/vkhover.png';" onmouseout="this.src='images/icons/vk.png';"></a></span>
            <span><a href="#"><img src="images/icons/facebook.png" alt="" onmouseover="this.src='images/icons/facebookhover.png';" onmouseout="this.src='images/icons/facebook.png';"></a></span>
            <span><a href="#"><img src="images/icons/twitter.png" alt="" onmouseover="this.src='images/icons/twitterhover.png';" onmouseout="this.src='images/icons/twitter.png';"></a></span>
            <span><a href="#"><img src="images/icons/youtube.png" alt="" onmouseover="this.src='images/icons/youtubehover.png';" onmouseout="this.src='images/icons/youtube.png';"></a></span>   
        </div>
        <div style="width:85%;float:right"> 
            <hr style="margin-top: 5px;">
        </div>

        <div class="half">
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
        </div>
        <div class="half">
            <?php 
            $rnd1 = rand(0,3);
            do {
                $rnd2 = rand(0,3);
            } while ($rnd1 == $rnd2);
            switch ($rnd1) {
                case 0:
                    $link1 ="index.php?r=site%2Fcart";
                    $img1 ="images/content/gallery.png";
                    break;
                case 1:
                    $link1 ="index.php?r=beforeandafteralbum%2Findex";
                    $img1 ="images/content/beforeandafter.png";
                    break;
                case 2:
                    $link1 ="index.php?r=site%2Fselection";
                    $img1 ="images/content/selection.png";
                    break;
                case 3:
                    $link1 ="index.php?r=product%2Findex";
                    $img1 ="images/content/collection.png";
                    break;
            }
            switch ($rnd2) {
                case 0:
                    $link2 ="index.php?r=site%2Fcart";
                    $img2 ="images/content/gallery.png";
                    break;
                case 1:
                    $link2 ="index.php?r=beforeandafteralbum%2Findex";
                    $img2 ="images/content/beforeandafter.png";
                    break;
                case 2:
                    $link2 ="index.php?r=site%2Fselection";
                    $img2 ="images/content/selection.png";
                    break;
                case 3:
                    $link2 ="index.php?r=product%2Findex";
                    $img2 ="images/content/collection.png";
                    break;
            }
        ?>
            <a href="<?= $link1 ?>"><img src="<?= $img1 ?>" style="float:right;width: 40%;height: 100%;"; alt=""></a>  
            <a href="<?= $link2 ?>"><img src="<?= $img2 ?>" style="float:right;padding-right:15px;width: 40%;height: 100%;"; alt=""> </a>     
            <span style="float:right;padding-right:15px;">скачать <a href="index.php?r=site%2Fprice" style="color:#996633"><u>price</u></a></span>
        </div>