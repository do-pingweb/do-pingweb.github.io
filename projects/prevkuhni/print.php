<!doctype html>
<noindex>
<html lang="ru">
  <head>
    <title>Кухни под заказ в Смоленске</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--<link rel="stylesheet/less" type="text/less" href="views/style.less" />-->  
	<link rel="stylesheet" href="css/style.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
    <script type="text/javascript" src="//static-login.sendpulse.com/apps/fc3/build/default-handler.js?1507899681304"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">  
    <link rel="stylesheet" href="js/remodal/dist/remodal.css">
    <link rel="stylesheet" href="js/remodal/dist/remodal-default-theme.css">
    <script src="js/remodal/dist/remodal.min.js"></script>
	<style>
	  .pulse-button {display: inline-block; background-color: #ff2558; color: #fff;
      font-weight: bold; font-size: 16px; text-transform: uppercase;  text-decoration: none; border-radius: 5px; position: relative;
      box-shadow: 0 0 0 0 rgba(255, 37, 88, 0.7); border: none;}
      .pulse-white {box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7); }
      .pulse-white:hover { webkit-animation: pulse-white 1.25s infinite cubic-bezier(0.66, 0, 0, 1);-moz-animation: pulse-white 1.25s infinite cubic-bezier(0.66, 0, 0, 1); -ms-animation: pulse-white 1.25s infinite cubic-bezier(0.66, 0, 0, 1); animation: pulse-white 1.25s infinite cubic-bezier(0.66, 0, 0, 1);}
      .pulse-button:hover {webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1); -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1); -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1); animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);}
      @-webkit-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(255, 37, 88, 0);}}
      @-moz-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(255, 37, 88, 0);}}
      @-ms-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(255, 37, 88, 0);}}
      @keyframes pulse {to {box-shadow: 0 0 0 45px rgba(255, 37, 88, 0);}}
      @-webkit-keyframes pulse-white {to {box-shadow: 0 0 0 45px rgba(255,255,255, 0);}}
      @-moz-keyframes pulse-white {to {box-shadow: 0 0 0 45px rgba(255, 255, 255, 0);}}
      @-ms-keyframes pulse-white {to {box-shadow: 0 0 0 45px rgba(255,255,255,0);}}
      @keyframes pulse-white {to {box-shadow: 0 0 0 45px rgba(255, 255, 255, 0);}}
    </style>
  </head>
  <body>
    <?php require_once 'top.php';?>
    <div class="coupon">
      <div class="container">
	    <div class="coupon__example" id="coupon">
		  <img src="images/coupon.jpg">
		</div>
		<div class="coupon__doing">
		  Вы можете сфотографировать купон на телефон или распечатать.
		</div>
		<div class="coupon__notice">
		  <p>
		    Перед тем, как подъехать, пожалуйста, позвоните <a href="tel:+4812566590">566-590</a>.
		  </p>
		  <p>
		    Чтобы наш дизайнер освободился и смог Вас проконсультировать.
		  </p>
		</div>
		<div class="coupon__map">
		  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8fc7c4343215454d94ec25afbd7503086e602492e90c7d7db4cc5ed0cd76a10e&amp;width=100%25&amp;height=340&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>
		<div class="coupon__buttons">
		  <div class="pulse-button  print  coupon__print"> <!--onclick="PrintElem('#coupon')"-->Распечатать купон</div>
		  <a href="/" class="home-button">Вернуться на главную страницу сайта</a>
		</div>  
	  </div>
	</div>
	<?php require_once 'footer.php';?>
    <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
      <button data-remodal-action="close" class="remodal-close"></button>
      <form>
        <input name="name" value="" placeholder="Ваше имя:" class="bottom-bordered">
        <input name="phone" value="" placeholder="Телефон или e-mail:" class="bottom-bordered">
        <select name="тариф" class="rates">
          <option value="тестовый период">тестовый период</option>
          <option value="пакет Мастер">пакет Мастер</option>
          <option value="пакет Производство">пакет Производство</option>
          <option value="пакет Фабрика">пакет Фабрика</option>
        </select>
        <input type="submit" value="Отправить">
      </form>
      <div class="form-success">Ваше сообщение успешно отправлено!</div>      
    </div>
    <link rel="stylesheet" type="text/css" href="js/tooltipster/dist/css/tooltipster.bundle.min.css" />
    <script defer src="less/dist/less.min.js"></script> 

    <script>
      $(document).ready(function(){
        var rate;
        $('.rate__order').click(function(){
          rate = $(this).data("target");
          console.log(rate);
          $('.rates option').filter(function(i, e) { return $(e).text() == rate}).prop("selected", true);
          /*; 
          $(".rates option[value=rate]").attr("selected", "selected"); */        
        })
      })
    </script>
    <script defer src="form/form.js"></script>
    <script defer src="js/jquery.spincrement.min.js"></script>
    <script>
      $(document).ready(function(){
      var show = true;
      var countbox = ".results__list";
      $(window).on("scroll load resize", function(){
        if(!show) return false;                  
        var w_top = $(window).scrollTop();       
        var e_top = $(countbox).offset().top;    
        var w_height = $(window).height();      
        var d_height = $(document).height();     
        var e_height = $(countbox).outerHeight();
        if(w_top + 200 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){
          $(".spincrement").spincrement({
            thousandSeparator: "",
            duration: 1200
          });
        show = false;
        }
      });
     });
    </script>  
    <script type="text/javascript">
	  $('.coupon__print').click(function(){
	    window.print() ;	  
	  })
    </script>  
  </body>
</html> 
</noindex>