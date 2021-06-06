<?php

$exitLink = 'https://iofridge.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];


?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }

  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }

  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }



  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }

  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png"height="100%" />

      </div>
      <div id="textRight">
      Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Refrigerator Air Purifier
      </div>
      <div id="author">
      Stacey Hopkins | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="./img/problemSolution.png" width="100%"/>
    </div>
    <div class="articleText">
    <p>As Americans, we are busy, aren’t we?</p>
      <p>I’m a stay at home mom with three beautiful kids, and I do my best to keep up with the pace of my life; breakneck speed. The only consolation I have is that I get to try to get the grocery shopping done while the kids are in school and my husband is at work, usually on a Monday or a Friday. That’s another thing, though—I’ve been uncomfortably watching the price of these grocery trips climb up, seemingly week by week. I prepare several meals everyday; breakfast for everyone, lunch for the kids, lunch for myself, and then dinner for everyone, but it seems like no matter what I do, by the time the next grocery run is complete, I’m having to throw away a ton of food that’s going bad in my fridge.</p>

	<div class="articleImgsmall">
      <img src="./img/firstSection.png" width="100%" />
      </div>
      <p>I mean, SO much food. Like almost the entire vegetable section (let’s be honest, if a tarnished, rotting ingredient is in close proximity to other ingredients, I consider them contaminated and toss those, too. I don’t want to take any chances with my kids) gets tossed after just a few days, and fruits and meat don’t seem to last all that long, either. I told my husband about my frustrations, and he agreed that we were actually wasting a lot of money in all that food we were having to throw away.</p>

      <p>We decided that I would shop day by day, making a quick run to the grocery store to get just what we needed to make it to the next day. After a few weeks of that, our budget was actually worse. We were at our wit’s end, until the solution presented itself when we were visiting my old college roommate.</p>

      <p>It was a small, informal get-together for our kids, something we do every couple of weeks. I’ve known Kelly for about fifteen years, and we treat each other like family. So when I helped myself to a beverage in her fridge, I was instantly taken aback not by what I saw, but by what I didn’t see:</p>

      <p>There wasn’t a single item in her fridge that was bad. The meat and vegetables looked vibrant, colorful, and fresh. And the smell? It was clean, like how our fridge smelled the first month we had it.</p>

      <div class="blockQuote">
         <i>“  I rushed over to her and begged me to tell her what the secret was. I told her about all the problems we were having with food going bad and just not lasting as long as I felt like it should and the awful smell in our refrigerator, and…she just nodded and smiled and told me I needed to look into the <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a>. ”

		    </i>
      </div>
      <p>I didn’t want to make a huge scene, so I bottled up my excitement until I got home and did some research on the <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> to see if it would work for our situation.</p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall" style="width:50%;">
      <img src="./img/product.png" width="100%" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> is an ozone generator that increases the efficiency and cleanliness of your refrigerator. It does this by electrolyzing oxygen, which it then releases as ozone in high humidity and low temperature environments, like the interior of your fridge. Science tells us that ozone destroys the biological structure of harmful substances, such as acetylene gas, that cause food to rot and emit foul odors—which will extend the shelf-life of fruits and vegetables considerably. A more recent discovery shows that ozone can even decompose some pesticide residues.</p>

      <p>We believe in the ioFridge because we’ve tested it and tried it in our own homes prior to bringing it to market. Extended shelf-life of refrigerated items, fresher tasting fruits and vegetables—meat that, after a full 2 weeks is obviously still well-preserved; no hesitation, guessing or sniff checks needed to determine your food’s freshness or suitability.</p>

      <p>ioFridge is not just a simple deodorizer. This sleek, portable device doesn’t take up a ton of valuable space in your fridge, but it works overtime to really keep the interior of your fridge clean and smelling great! We’ve designed it to be user-friendly with a 5-hour charge cycle that gives 15 continuous days of operating time. With a single button for the on/off switch and no filter changes required, we present you with the next generation solution to food storage efficiency: ioFridge, fridge deodorizer, ionizer, and ozone generator.</p>
    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> has sold over 9 million units directly to consumers, even without the help of being sold in stores. ioFridge has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall">
      <img src="./img/igPost.png" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall">
      <img src="./img/igPost2.png" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> has started to develop a cult following, and with over 7,000 5-star reviews, it makes sense. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        L
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Logan L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        4/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I felt it helps a lot in my fridge. I do feel that I can keep the vegetables and fruits longer in it. It's very
      compact so it doesn't take up any space at all. Constantly i'm always having to throw away precious fruit that
      I like but not anymore. This is a great solution to keep your food fresh so you don't waste money.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
        <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Harley A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        5/10/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I have been using small devices like this for years in the fridge. This produces a low level of ozone that prevents your food from spoiling. It works.
      I hardly write reviews but I just needed to let everyone know that you can preserve your food like I did simply by buying 
      this wonderful product. I get to enjoy fresh veggies for myself, my family, heck even my pet bird Pete loves them.
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        K
        <div class="nameCheck">
        <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Kelly C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        5/22/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
         After I put this guy in the fridge my food started to last longer. My family and I are huge veggie & fruit lovers.
         So after seeing the results of our food not spoiling fast we knew we couldn't live without this.

      </div>
    </div>
    <div class="articleText">
      <p>After Kelly’s suggestion and reading the incredible reviews that backed up her claims, I was sold. I knew I needed to try <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> in my own refrigerator.</p>
    </div>
    <div class="articleSubheader">
    I Tried It Myself…Here’s What I Found.
    </div>
    <div class="articleText">
      <p>I ordered the ioFridge from the official website. It arrived 2 days later, and I could not wait to see if it worked. Taking it out of the box, I was reminded of how small the device is, and I plugged it in to charge right away. The initial charge took about 5 hours, and then it was ready to go.</p>

      <div class="articleImgsmall">
        <img src="./img/unboxing.png" width="100%" style="border: 1px solid #ddd;" />
      </div>

	    <p>I held on the power button to turn it on, and set it inside.</p>

      <p>That was it. It was the simplest thing in the world.</p>

      <p>Now’s the part where you think I’m a mad scientist or a complete nutcase, but I went the extra mile to test this thing because I wanted to see how effective it was. I gave it several trial runs on a bunch of different ingredients, and the results you have to see to believe:</p>

      <p>First, I tried fruits and vegetables, without and then with the <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a>. Just look at the difference, here:</p>

      <div class="articleImgsmall">
        <img src="./img/fruit.png" width="100%" style="border: 1px solid #ddd;" />
    </div>

      <div class="articleImgsmall">
        <img src="./img/veg.png" width="100%" style="border: 1px solid #ddd;" /> 
    </div>

      <div class="articleImgsmall">
        <img src="./img/avo.png" width="100%" style="border: 1px solid #ddd;" /> 
    </div>


      <p>Next, I gave the meats a try. My husband is partial to filet mignon, so those are the cuts I usually get.</p>

      <div class="articleImgsmall">
        <img src="./img/meat.png" width="100%" style="border: 1px solid #ddd;" />
    </div>

      <p>Let me tell you; the feel of the meat after 10 days with the <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> is still tender and feels like I literally just picked it up from the butcher that day.</p>

      <p>Even leftovers last longer:</p>

      <div class="articleImgsmall" style="width:45%;">
        <img src="./img/casserole.png" width="100%" style="border: 1px solid #ddd;" />
        <p>A casserole I made three days prior.</p>
      </div>

      <div class="articleImgsmall" style="width=45%;">
        <img src="./img/casserole2.png" width="100%" style="border: 1px solid #ddd;" />
        <p>The same casserole I made eleven days ago.</p>
      </div>
        <p>Long story short, I noticed—on average—the ioFridge kept my food fresh 4x longer than when I didn’t use it.</p>
    </div>

    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	I 100% guarantee you will notice a hike in quality and peace of mind when you try <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> in your fridge. I’m saving a lot of money by not throwing away excess food, and I’m not embarrassed when guests come over and they help themselves, because our fridge doesn’t have any unfortunate odors trapped in it—ioFridge takes care of all that for an easy one-time payment. In my opinion, the food preservation angle is enough to warrant the price. The fact that it also deodorizes your fridge and actually eats up some of the pesticides that sit on the skins of fruits and vegetables…ioFridge is incredible. I just have to recommend it to everyone I know!</p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">ioFridge</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 9 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>

      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
