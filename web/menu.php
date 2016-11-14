<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
    margin:0px;
    min-width: 950px;

}
    .header{
        height:100px;
        width:100%;
        background: rgba(0, 0, 0, 0.75);
        margin:0px auto;
         position:fixed;
        min-width: 1000px;
         overflow: hidden;

    }
    .logo{
        float:left;
        height:100%;
        margin: 10px;
    }
    #logo{
        max-height:100%;
    }
    .navigation{
        float:right;
    }
    #first-navigation{
        height: 30px;
        width:80%;
        background-color: #000000;
        line-height: 30px;
        margin-top: 0px;
        margin-left: 0px;
        padding: 0px 0px 0px 10px;
        float: right;
        font-size: 14px;
        text-align: justify;
        font-family: Century Gothic;
        margin-bottom: 0;
        display: inline-block !important;
        white-space: nowrap;
    }
    #first-navigation>a {
    color: #FFFFFF;
    padding: 0px 20px 0px 10px;
    text-decoration: none;
    }

    .iconblock1,.iconblock2{
        float:right;
        display: inline-block;
        padding-left: 20px;
        padding-right: 20px;
    }
    img {
    vertical-align: middle;
    }

</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

    });

</script>
</head>

<body>

    <div class="header">
        <div class="logo">
            <a href="#"><img id="logo" src="http://gekkostone/web/images/logo.png" alt=""> </a>
        </div>
        <div class="navigation" id="div_menu">
            <ul id="first-navigation">
                <a href="index.php?r=site%2Fpartnership">парнерство</a>
                <a href="index.php?r=news%2Findex">новости</a>
                <a href="index.php?r=site%2Fprice">прайс</a>
                <a href="index.php?r=site%2Fcontact">контакты</a>
                <a href="#">поиск</a>
                <!-- CART GOES HERE -->
                <div class="iconblock1">
                    <a href="#"><img src="images/icons/ok.png" alt="" onmouseover="this.src='images/icons/okhover.png';" onmouseout="this.src='images/icons/ok.png';"></a>
                    <a href="#"><img src="images/icons/vk.png" alt="" onmouseover="this.src='images/icons/vkhover.png';" onmouseout="this.src='images/icons/vk.png';"></a>
                    <a href="#"><img src="images/icons/facebook.png" alt="" onmouseover="this.src='images/icons/facebookhover.png';" onmouseout="this.src='images/icons/facebook.png';"></a>
                    <a href="#"><img src="images/icons/instagram.png" alt="" onmouseover="this.src='images/icons/instagramhover.png';" onmouseout="this.src='images/icons/instagram.png';"></a>
                    <a href="#"><img src="images/icons/youtube.png" alt="" onmouseover="this.src='images/icons/youtubehover.png';" onmouseout="this.src='images/icons/youtube.png';"></a>
                </div>
                <div class="iconblock2">
                   <a href="tel:+123"><img src="images/icons/viber.png" alt="" onmouseover="this.src='images/icons/viberhover.png';" onmouseout="this.src='images/icons/viber.png';"></a>
                    <a href="#"><img src="images/icons/skype.png" alt="" onmouseover="this.src='images/icons/skypehover.png';" onmouseout="this.src='images/icons/skype.png';"></a>
                    <a href="#" target="_top" ><img src="images/icons/email.png" alt="" onmouseover="this.src='images/icons/emailhover.png';" onmouseout="this.src='images/icons/email.png';"></a>
                </div>
            </ul>


             <ul id="navigation" class="nav2">
                    <li class="menu-item"><a href="#">УСЛУГИ</a>
                    <ul>
                        <li><a href="index.php?r=site%2Fdesign">ДИЗАЙН-ПРОЕКТ</a></li>
                        <li><a href="index.php?r=site%2Fselection">ПОДБОР КАМНЯ</a></li>
                        <li><a href="index.php?r=site%2Fdelivery">ДОСТАВКА КАМНЯ</a></li>
                        <li><a href="index.php?r=site%2Ffacing">ОБЛИЦОВКА</a></li>
                    </ul>
                    </li>
                <li id="delimiter"><a>|</a></li>
                <li class="menu-item"><a href="index.php?r=stores%2Findex">ГДЕ КУПИТЬ</a></li>
                <li id="delimiter"><a>|</a></li>
                <li class="menu-item"><a href="#">ИНФОРМАЦИЯ</a>
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
                <li id="delimiter"><a>|</a></li>
                <li class="menu-item"><a href="#">ФОТОГАЛЕРЕЯ</a>

                </li>
                <li id="delimiter"><a>|</a></li>
                <li class="menu-item"><a href="#">ПРОДУКЦИЯ</a>

                </li>
                <li id="delimiter"><a>|</a></li>
                <li class="menu-item"><a href="#">О КОМПАНИИ</a>
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
            </ul>


        </div>
    </div>




</body>
</html>