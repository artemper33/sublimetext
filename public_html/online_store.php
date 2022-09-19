<?php
require('s.php');
session_start();
?>
	<header class="header">
    <div class="container">
        <div class="header_inner">
        <h4 class="logo"><a href="index.php">Магазин Игрушек</a></h4>
        <nav class="nav">
        <a href="#catalog" class="menu_link">Каталог</a>
        <a href="contact.php">Контакты</a>
        <a href="#why_us" class="menu_link">Преимущества</a>
        <a href="#akcii" class="menu_link">Акции</a>
        <a href="about.php">О нас</a>
        <a href="aut.php">Авторизация</a>
        </nav>
              </div>
      </div>
        </header>
      
<div class="slideshow">
  <div class="container">
      <div class="mySlides fade">
        <img src="classes/img/fon.png">
        <div class="text">
        <h2>Все товары делаются в ручную</h2>
        <p>Бесплатная доставка по Москве от 5000 руб.</p>
        <a href="#contact">Заказать</a> 
      </div>
      </div>
  <div class="mySlides fade">
        <img src="classes/img/fon3.png">
      </div>
      <div class="mySlides fade">
        <img src="classes/img/fon2.png">
      </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      </div> 
            </div> 

	    <section class="catalog" id="catalog">
	   		<div class="container">
			<h2>Каталог</h2>
			<div class="row">
			<?foreach ($products as $product):?>
      <div class="product-item">
              <div class="product-item_img" style="background: url('<?=$product['image']?>') no-repeat;background-position: center; padding-bottom: 220px;"></div>
  						<div class="product-list">
 							<h3><?=$product['title']?></h3>
      							<span class="price"><?=$product['price']?></span>
      								<a href="#contact" class="button">Заказать</a>
  										</div>
									</div>
			<?endforeach?>
		</div>
	</section>

<section class="preim" id="why_us">
    <div class="container">
      <h2>Преимущества</h2>
  <div class="why_item">
      <img src="classes/img/car.png" alt="" class="img-responsible1">
    <div class="description1">Привезем ваш заказ в ваш город.
Доставляем во все страны СНГ.</div>
<div class="why_item3">
      <img src="classes/img/moneta.png" alt="" class="img-responsible2">
    <div class="description2">Цены на товар ниже среднерыночных.</div>
    </div>
    </div>
    </div>
</section>
<section class="preim" id="why_us">
    <div class="container">
  <div class="why_item2">
      <img src="classes/img/lypa.png" alt="" class="img-responsible3">
    <div class="description3">Все товары перед отправкой проходят тщательный  осмотр.
Доставляем во все страны СНГ.</div>
<div class="why_item2">
      <img src="classes/img/podderjka.png" alt="" class="img-responsible4">
    <div class="description4">Круглосуточная техподдержка.</div>
    </div>
    </div>
    </div>
</section>

	    <section class="akcii" id="akcii">
	   		<div class="container">
			<h2>Акции</h2>
			<div class="row">
			<?foreach ($hots as $hot):?>
      <div class="product-item">
              <div class="product-item_img" style="background: url('<?=$hot['image']?>') no-repeat;background-position: center; padding-bottom: 220px;"></div>
  						<div class="product-list">
 							<h3><?=$hot['title']?></h3>
      							<span class="price"><?=$hot['price']?></span>
      								<a href="#contact" class="button">Заказать</a>
  										</div>
									</div>
			<?endforeach?>
		</div>
	</section>

 <section class="contact" id="contact">
      <div class="container">
        <form action="./mail.php" method="post">
        <h2 class="title__sections darck wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Заказать понравившийся товар</h2>
        <div class="line__sections wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
        <form class="contact__form wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <div class="contact__name-email">
            <div class="contact__email-name">
              <p class="contact__name">Name<span>*</span></p>
              <input type="text" name="name" class="form__name">
            </div>
            <div class="contact__email-name">
              <p class="contact__name">Email address<span>*</span></p>
               <input type="text" name="email" class="form__mail">
            </div>
          </div>
          <div class="contact__message">
              <p class="contact__name">Сообщение<span>*</span></p>
              <textarea rows="10" cols="45" name="message"></textarea>
            </div>
            <div class="contact__btn">
              <input type="submit" class="contact__submit" value="send">
            </div>
          </div>
        </form>
        </div>
    </section>
<?php
require('footer.inc.php');
?>