<div id="footer">
    
    <div class="inner">
    
      <div class="foot-logo"><a href="<?php echo home_url();?>" class="opa"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg"  alt=""></a></div>
      <p class="address">〒738-0027 広島県廿日市市平良山手6-1</p>
      <div class="tel">
        <a href="tel:090-6406-2127">090-6406-2127</a>
        
      </div>
      
      <div class="foot-nav">
        <ul>
          <li><a href="<?php echo home_url();?>">トップページ</a></li>
          <li>
            <a href="<?php echo home_url();?>/"></a>
            <ul>
              <li><a href="<?php echo home_url();?>/"></a></li>
              
            </ul>
          </li>
        </ul>
        
              
        <ul>
          <li><a href="<?php echo home_url();?>"></a></li>
          
        </ul>
      </div><!-- foot-nav -->
    </div><!-- inner -->
    
    <div class="inner-l">
      <p class="copy">© 広島のホームページ制作・作成・ウェブ制作・ディレクター MCS</p>
      <a href="#" class="page-top"><i class="fa fa-angle-up"></i></a>
    </div>
  </div><!-- footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script>
$('.gallery').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    speed: 15000,
    slidesToShow: 5,
    slidesToScroll: 1,
	 responsive: [
	  {
		  breakpoint: 769,
		  settings: {
			  slidesToShow: 2,
			  speed: 13000,
		  }
	  }
	 ]
});
</script>
<?php wp_footer(); ?>
</body>
</html>