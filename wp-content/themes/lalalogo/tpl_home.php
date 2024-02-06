<?php
/*
Template Name: Главная страница

https://matveyan.ru/
*/
?>


<!-- TODO: сделать для интро градиент фон -->
<!-- https://www.youtube.com/watch?v=u2j9Ke6CCcg -->
<!-- https://codepen.io/P1N2O/pen/pyBNzX -->
<!-- https://codepen.io/rospearce/pen/eXaOqE -->
<!-- https://codepen.io/chriscoyier/pen/wzrgYm -->

<!-- https://ruward.ru/design/region-moscow/ -->

<!-- https://www.youtube.com/watch?v=61o7LHgisi8 -->

<!-- Шрифты -->
<!-- HelveticaNeueCyr -->

<?php get_header(); ?>

<div class="s-intro">
<div id="jsIntro" class="container s-intro__section">
	<div class="row">
		<div class="col-6">
			<div class="color-badge mb-3">

				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/stylus.svg" class="color-badge__i"> -->
				Студия графического дизайна
			</div>	
			<h2 class="s-intro__title js-anime-title js-anime__main-title" data-intro-title="1">Логотипы</h2>
			<h2 id="js-text-bl-presentation" data-intro-title="2" class="s-intro__subtitle js-anime__sub-title1">Презентации</h2>
			<h2 class="s-intro__subtitle js-anime__sub-title2" data-intro-title="3">Полиграфия</h2>
			<!-- <div class="s-intro__text">Привет) Мы студия графического дизайна. Создаем новые бренды или помогаем существующим выделиться и наладить коммуникацию со своими клиентами по средствам графического дизайна.
			</div> -->
		</div>
		<div class="col-6 text-center">

			<!-- <svg viewBox="0 0 614 508">
					<g id="Слой_1-2">
					<rect class="cls-1" width="614" height="508" rx="85.04" ry="85.04"/>
					</rect>
					</g>
				
			</svg> -->
			<svg viewBox="0 0 614 550" id="">
				<g>
					<rect class="cls-1" x="0" y="0" width="614" height="508" rx="85.04" ry="85.04"/>
					</rect>
					<rect class="cls-2" x="15" y="15" width="614" height="508" rx="85.04" ry="85.04"/>
					</rect>
					<rect class="cls-3" x="15" y="25" width="614" height="508" rx="85.04" ry="85.04"/>
					</rect>
				</g>
			</svg>


			<!-- <svg class="intro-bubble">
				<circle class="intro-bubble__circle" cx="100" cy="100" r="50" />	
			</svg> -->
			<!-- <canvas id="s-intro-canvas" width="500" height="500">
			</canvas> -->

			<!-- <img class="s-intro__img" src="<?php echo get_template_directory_uri(); ?>/img/s-intro-logo.svg" alt="Сервисы"> -->


			<!-- <div class="row s-intro-logo-row">
				<div class="col text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/s-intro-logo1.svg" class="s-intro-logo1 js-intro-logo1">
				</div>
				<div class="col text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/s-intro-logo1.svg" class="s-intro-logo2 js-intro-logo2">
				</div>		
			</div>

			<div class="row">
				<div class="col text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/s-intro-logo1.svg" class="s-intro-logo1 js-intro-logo3">
				</div>
				<div class="col text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/img/s-intro-logo1.svg" class="s-intro-logo2 js-intro-logo4">
				</div>		
			</div> -->

			

			<!-- <img class="s-intro__img" src="<?php echo get_template_directory_uri(); ?>/img/main-services.svg" alt="Сервисы"> -->
			<!-- <p class="s-intro__about text-right">Студия авторского графического дизайна. Рисую логотипы и иллюстрации, разрабатываю фирменный стиль, презентации и сайты</p>
			<p class="s-intro__feedback text-right">Отзывы на freelance.ru: <span class="icon-thumb-up"></span><span style="color: #27ae60; font-weight: 700; margin-right: 7px;">45</span><span class="icon-dislike-thumb"></span><span style="color: #999999; font-weight: 700;">0</span></p> -->

		</div>
	</div>
</div>
</div>


<!-- <canvas id="js-animation-canvas"></canvas> -->


<div class="container section">
	<div class="row">
		<div class="col-md-12">
			
			<div class="section__title">
				<!-- <div class="section__sep">
						<span class="sep1"></span>
						<span class="sep2"></span>
						<span class="sep3"></span>
					</div> -->	
				Услуги
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">	
			<!-- <div class="section__subtitle">Привет. Меня зовут Алена. Я графический дизайнер. Я создаю новые бренды или помогаю существующим выделиться и наладить коммуникацию со своими клиентами по средствам 
			графического дизайна
			</div> -->
			<!-- <div class="section__subtitle">Привет) Мы студия графического дизайна. Создаем новые бренды или помогаем существующим выделиться и наладить коммуникацию со своими клиентами по средствам графического дизайна. 
			</div> -->
			<div class="section__subtitle">Разрабатываем названия, логотипы и фирменные стили. Делаем лендинги и сайты. Оформляем соцсети. Ну и конечно, делаем полиграфию всех типов: от визиток до сложных иллюстраций. 
			</div>
		</div>
		<div class="col-md-6">	
			
		</div>
	</div>
	<div class="row section__row">
		<div class="col-md-3">
			<div class="service__item">
				<img class="service__icon" src="<?php echo get_template_directory_uri(); ?>/img/layers-services.svg" class="d-inline-block align-top" alt="Создание презентаций">
				<span class="service__name">Создание презентаций</span>
				<span class="service__next">
					<img class="service__next_icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="Смотреть">
				</span>
				

				<div class="js-service-present">
					<div class="service__bg-overlay"></div>
					<div class="service__animate-bg-wrp">
					</div>
				</div>

				<!-- <div class="js-service-present">
				  <div><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sliders/1-1.jpg" alt="1"></div>
				  <div><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sliders/1-2.jpg" alt="1"></div>
				  <div><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sliders/1-1.jpg" alt="1"></div>
				</div> -->
			</div>
		</div>
		<div class="col-md-3">
			<div class="service__item">
				<img class="service__icon" src="<?php echo get_template_directory_uri(); ?>/img/edit-services.svg" class="d-inline-block align-top" alt="Разработка логотипов">
				<span class="service__name">Логотипы и фирменный стиль</span>
				<span class="service__next">
					<img class="service__next_icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="Смотреть">
				</span>

				<div class="js-service-present">
					<div class="service__bg-overlay"></div>
					<div class="service__animate-bg2-wrp">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="service__item">
				<img class="service__icon" src="<?php echo get_template_directory_uri(); ?>/img/service-web.svg" class="d-inline-block align-top" alt="Веб-дизайн">
				<span class="service__name">Веб-дизайн</span>
				<span class="service__next">
					<img class="service__next_icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="Смотреть">
				</span>

				<div class="js-service-present">
					<div class="service__bg-overlay"></div>
					<div class="service__animate-bg3-wrp">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="service__item">
				<img class="service__icon" src="<?php echo get_template_directory_uri(); ?>/img/diamond-services.svg" class="d-inline-block align-top" alt="Графический дизайн">
				<span class="service__name">Графический дизайн</span>
				<span class="service__next">
					<img class="service__next_icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="Смотреть">
				</span>

				<div class="js-service-present">
					<div class="service__bg-overlay"></div>
					<div class="service__animate-bg4-wrp">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="container section s-feedback">
	<div class="s-feedback__wrp">
	</div>
	<div class="row align-items-center">
		<div class="col-md-6 text-center">
			<div class="s-feedback__text">
				<p>Опишите мне вашу задачу,</p>
				<p>я обязательно вам отвечу</p>
			</div>
		</div>
		<div class="col-md-6 text-center">

			<a href="#feedbackModal" data-toggle="modal" class="btn--cta btn--feedback s-feedback__btn">Оставить заявку</a>		
		</div>
	</div>
</div> -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="section__title">
				<!-- <div class="section__sep">
						<span class="sep1"></span>
						<span class="sep2"></span>
						<span class="sep3"></span>
					</div> -->	
				Портфолио
			</div>
		</div>
	</div>
</div>

<div class="container filters">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav filters__nav">
			  <li class="nav-item filters-item">
			    <a class="nav-link filters-item__link effect-1 active" data-category="4" data-toggle="tab" id="favorites-tab" href="#favorites">
					<span class="filters-item__link-bg"></span>
			    	Избранные проекты
			    	<!-- <span class="filters-counter"><?php echo WPTplFrontEndFunc::get_cat_count(4); ?></span> -->
				</a>
			  </li>
			  <li class="nav-item filters-item">
			    <a class="nav-link filters-item__link effect-1" data-category="2" data-toggle="tab" id="logo-tab" href="#logo">
					<span class="filters-item__link-bg"></span>
			    	Логотипы
			    	<!-- <span class="filters-counter">(<?php echo WPTplFrontEndFunc::get_cat_count(2); ?>)</span> -->
			    </a>
			  </li>
			  <li class="nav-item filters-item">
			    <a class="nav-link filters-item__link effect-1" data-toggle="tab" href="#">
			    	<span class="filters-item__link-bg"></span>
			    	Полиграфия
			    	<!-- <span class="filters-counter"><?php echo WPTplFrontEndFunc::get_cat_count(); ?></span> -->
				</a>
			  </li>
			  <li class="nav-item filters-item">
			    <a class="nav-link filters-item__link effect-1" data-toggle="tab" href="#">
					<span class="filters-item__link-bg"></span>
			    	Презентации
			    	<!-- <span class="filters-counter"><?php echo WPTplFrontEndFunc::get_cat_count(); ?></span> -->
				</a>
			  </li>	
			  <li class="nav-item filters-item">
			    <a class="nav-link filters-item__link effect-1" data-category="3" data-toggle="tab" href="#">
					<span class="filters-item__link-bg"></span>
			    	Сайты
			    	<!-- <span class="filters-counter"><?php echo WPTplFrontEndFunc::get_cat_count(); ?></span> -->
			    </a>
			  </li>
			</ul>
		</div>
	</div>
</div>
<div class="container projects">

	<div class="tab-content" id="myTabContent">

		<div id="favorites" data-cat-tab="4" class="tab-pane fade show active" aria-labelledby="home-tab" role="tabpanel">

		<?php //Шаблон вывода списка работ из категории Избранное
			$logoArr = WPTplFrontEndFunc::get_project_from_cat(4); 
			$i=0;
			$logoArrLength = count($logoArr);
		 ?>
		<?php foreach ($logoArr as $index=>$obj):
			$i++;
		?>
			<?php if($i == 1): ?>
				<div class="row grid__line">
			<?php endif; ?>	
			
			<div class="col-md-4">
				<a href="<?php echo $obj->url; ?>">
					<div class="grid-item">
						<img class="img-fluid grid-item-mask__img" src="<?php echo $obj->thumbnail; ?>" alt="<?php echo $obj->title; ?>">
						<div class="grid-item-mask"></div>
						<div class="grid-item__category"><?php echo $obj->cat_name; ?></div>
						<div class="grid-item__name"><?php echo $obj->title; ?></div>
						<div class="grid-item__more">
							<!-- <a class="grid-item__more-link" href="<?php echo $obj->url; ?>">Смотреть</a> -->
							<img class="grid-item__next_icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="Смотреть">
						</div>
					</div>
				</a>
			</div>

			<?php if( $i%3 == 0 ): ?>
				</div><div class="row grid__line">
			<?php endif; ?>

			<?php if ($i == $logoArrLength): ?>
				</div>
			<?php endif ?>

		<?php endforeach; ?>

		</div>

		<div id="logo" data-cat-tab="2" class="tab-pane fade show" aria-labelledby="logo-tab" role="tabpanel">
			
		<?php //Шаблон вывода списка работ из категории Избранное
			$logoArr = WPTplFrontEndFunc::get_project_from_cat(2); 
			$i=0;
			$logoArrLength = count($logoArr);
		?>
		<?php foreach ($logoArr as $index=>$obj):
			$i++;
		?>
			<?php if($i == 1): ?>
				<div class="row grid__line">
			<?php endif; ?>	
			
			<div class="col-md-4">
				<div class="grid-item">
					<img class="img-fluid" src="<?php echo $obj->thumbnail; ?>" alt="<?php echo $obj->title; ?>">
					<div class="grid-item-mask"></div>
					<div class="grid-item__category"><?php echo $obj->cat_name; ?></div>
					<div class="grid-item__name"><?php echo $obj->title; ?></div>
					<div class="grid-item__more">
						<a class="grid-item__more-link" href="#">Описание</a>
					</div>
				</div>
			</div>

			<?php if( $i%3 == 0 ): ?>
				</div><div class="row grid__line">
			<?php endif; ?>

			<?php if ($i == $logoArrLength): ?>
				</div>
			<?php endif ?>

		<?php endforeach; 
			unset($logoArr);
		?>

		</div>
	</div>

</div>

<div class="container load-more">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<a id="jsLoadMoreBtn" data-current-page="1" data-current-cat="4" href="#" class="btn--load-more ld-ext-right">Показать еще
					<div class="ld ld-ring ld-spin"></div>
				</a>
			</div>		
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-close text-center">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <!-- <span aria-hidden="true">&times;</span> -->
			  <span class="icon-close"></span>
			</button>
		</div>
		<div class="modal-header">
			<h5 class="modal-title" id="feedbackModalLabel">Оставьте заявку</h5>
		</div>
		<div class="modal-body">
		<p class="text-center modal-subtitle">Оставьте заявку и я отвечу вам в ближайшее время. Также вы можете написать мне в Skype прямо сейчас <span class="icon-skype"></span><a href="skype:alenaskype46?chat" class="link--skype">alenaskype46</a></p>
		
		<form>
			<div class="form-group modal-form-group">
				<input type="email" class="form-control" id="
				feedback_name" name="message_name" aria-describedby="emailHelp" placeholder="Имя">
			</div>
			<div class="form-group modal-form-group">
				<input type="text" class="form-control" id="feedbackEmail" name="message_email" placeholder="Email">
			</div>

			<div class="form-group modal-form-group">
				<input type="text" class="form-control" id="feedbackMess" name="message_mess" placeholder="Кратко о вашем проекте">
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn--cta">Отправить</button>
			</div>
			<!-- <a href="#" class="btn--cta">Показать еще</a> -->
		</form>	

		</div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<?php get_footer(); ?>