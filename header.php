<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if (is_front_page()): ?>
<title><?php bloginfo('name'); ?></title>
<?php else: ?>
<title><?php wp_title(''); ?>｜<?php bloginfo('name'); ?></title>
<?php endif; ?>
<meta name="Description" content="広島のホームページ作成・制作・ウェブディレクター・SEO対策。 月額￥3,000（税込）のみの安心なページ追加・コンテンツ更新。ご予算に応じ成果に向けてのヒアリング、設計で課題解決をお手伝いいたします。（広島市、呉市、東広島市、廿日市市、大竹市、三原）" />
<meta property="og:locale" content="ja_JP">
<meta property="og:title" content="<?php wp_title(''); ?>｜<?php bloginfo('name'); ?>" />
<meta property="og:type" content="<?php if(is_front_page()){echo "website";}else{echo "article";} ?>" />
<meta property="og:description" content="広島のホームページ作成・制作・ウェブディレクター・SEO対策。 ￥3,000（税込）のみの安心なページ追加・コンテンツ更新。ご予算に応じ成果に向けてのヒアリング、設計で課題解決をお手伝いいたします。（広島市、呉市、東広島市、廿日市市、大竹市、三原）">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot_ogp.jpg" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:url" content="<?php echo home_url(); ?>" />
<link rel="canonical" href="https://www.m-cs.net/" />
<link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  (function(d) {
    var config = {
      kitId: 'hbu1wmk',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132780059-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132780059-1');
</script>
<!-- User Heat Tag -->
<script type="text/javascript">
(function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhWkzPItwr'});
</script>
<!-- End User Heat Tag -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="header">
    <h1 class="logo"><a href="<?php echo home_url();?>" class="opa"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg"  alt="広島のホームページ作成MCS"></a></h1>
    
    <a class="menu-trigger" href="">
      <span></span>
      <span></span>
      <span></span>
    </a>
    
    <ul class="inline nav">
      <li><a href="<?php echo home_url();?>">トップページ</a></li>
      <li><a href="<?php echo home_url();?>/characteristic">特徴</a></li> 
      <li><a href="<?php echo home_url();?>/plan">料金プラン</a></li>           
      <li><a href="<?php echo home_url();?>/production-flow">ウェブ制作の流れ</a></li>
      <li><a href="<?php echo home_url();?>/wordpress">WordPress</a></li>
      <li><a href="<?php echo home_url();?>/direction">ディレクション</a></li>
      <li><a href="<?php echo home_url();?>/production-results">制作実績</a></li>
      <li><a href="<?php echo home_url();?>/qa">よくあるご質問</a></li>
      <li class="pc-none"><a href="<?php echo home_url();?>/contact" class="btn-request">お問い合わせ<br>無料相談</a></li>
    </ul>
    <a href="<?php echo home_url();?>/contact" class="btn-request">お問い合わせ<br>無料相談</a>
  </div>