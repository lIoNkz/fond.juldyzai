@extends('frontend.layouts.master')
@section('content')

<div class="container">
	<div class="row" id="slider">
		<div class="col-6">
			<div class="black">
				<p>ЭТО ЛУЧШЕЕ ЧТО ВЫ  МОЖЕТЕ сделать В ЭТОМ МИРЕ</p>
				<a href="#">Сделать пожертвование</a>
			</div>
		</div>
		<div class="col-6">
		</div>
	</div>

	<h3>Проекты</h3>

	<div class="row" id="projects">
		<div class="col-3">
			<div class="top">
				<div class="black"></div>
			</div>
			<div class="bot">
				<h4>Проект «Добро»</h4>
				<p>Подарок во блага</p>
				<a href="#">Подробнее</a>
			</div>
		</div>
		<div class="col-3">
			<div class="top">
				<div class="black"></div>
			</div>
			<div class="bot">
				<h4>Проект «Добро»</h4>
				<p>Подарок во блага</p>
				<a href="#">Подробнее</a>
			</div>
		</div>
		<div class="col-3">
			<div class="top">
				<div class="black"></div>
			</div>
			<div class="bot">
				<h4>Проект «Добро»</h4>
				<p>Подарок во блага</p>
				<a href="#">Подробнее</a>
			</div>
		</div>	
	</div>

	<a href="#all-proj">Все проекты</a>
	
	<div class="row" id="youtubeAndNews">
		<div>
			<h3>Youtube online</h3>
			<p>Мы в прямом эфире</p>
		</div>
		<a href="#news">Новости</a>
	</div>

	<div class="row" id="mainBlock">
		<div class="col-6">
			<iframe src="https://www.youtube.com/embed/d2hRTLdvdnk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<div class="galleryText">
				<h3>Фотогалерея</h3>
				<p>Фотоархив всех событий</p>
			</div>
			<div class="gallery">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
				    <div class="carousel-item active">
				      <img class="d-block img-fluid" src="/img/index/slider-1.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block img-fluid" src="/img/index/slider-1.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block img-fluid" src="/img/index/slider-1.jpg" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>		
			</div>

		</div>

		<div class="col-4">
			<div class="row">
				<div class="col-6">
					<span></span>
					<span>01.03.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Новая соцреклама фонда «Доброесердце»</h4>
					<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию</p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>01.03.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Новая соцреклама фонда «Доброесердце»</h4>
					<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию</p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>01.03.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Новая соцреклама фонда «Доброесердце»</h4>
					<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию </p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>01.03.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Новая соцреклама фонда «Доброесердце»</h4>
					<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию</p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>01.03.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Новая соцреклама фонда «Доброесердце»</h4>
					<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию </p>
					<a href="#read">Читать ></a>
				</div>
				<div class="col-6">
					<span></span>
					<span>01.03.2018</span>
					<div class="clear"></div>
					<div class="newsImg"></div>
					<h4>Новая соцреклама фонда «Доброесердце»</h4>
					<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию </p>
					<a href="#read">Читать ></a>
				</div>
				<a href="#all-news">Все новости</a>
			</div>
		</div>

	</div>
	
	<p class="quoteTop">
		Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов
	</p>
	<p class="quoteBot">
		Lorem Ipsum - это текст-"рыба"
	</p>
	<h3 class="afterQUote">Lorem ipsum</h3>

	<div class="row" id="article">
		<div class="articleImg">
			<div class="black"></div>
		</div>
		<div class="blueBlock">
			<h3>Lorem ipsum</h3>
			<p>	Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов </p>
		</div>
		<p class="firstText">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
		<div class="secondText">
			<div></div>
			<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
		</div>
		<p class="thirdText">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
		<a href="#all-stories">Все истории</a>
	</div>
	<h3>Партнеры фонда</h3>
	<div id="partners">
		<div class="owl-carousel owl-theme partners">
		    <div class="item"><h4>1</h4></div>
		    <div class="item"><h4>2</h4></div>
		    <div class="item"><h4>3</h4></div>
		    <div class="item"><h4>4</h4></div>
		</div>
	</div>


</div> <!-- container div -->

@endsection