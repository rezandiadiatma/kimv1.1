<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-236369521-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){window.dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-236369521-2');
    </script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content="index, follow" />
	<meta name="generator" content="{{ config('app.version') }}" />
	<meta name="author" content="{{ getSetting('web_author') }}" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta property="og:image" content="po-content/uploads/$post->picture" />

	{!! SEO::generate() !!}

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('po-content/uploads/'.getSetting('favicon')) }}" />
	<link href="{{ asset('po-content/frontend/inews/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/bootsnav/css/bootsnav.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/css/RYPP.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/weather-icons/css/weather-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/css/flaticon.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/owl-carousel/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('po-content/frontend/inews/css/style.css') }}" rel="stylesheet" type="text/css" />

	@stack('styles')

	<script>
		window.Laravel = <?php echo json_encode([
								'csrfToken' => csrf_token(),
							]); ?>
	</script>

	{!! NoCaptcha::renderJs() !!}

	@if(getSetting('google_analytics_id') != '')
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', "{{ getSetting('google_analytics_id') }}"]);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
	@endif
	
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap');  
                 * {  
                  box-sizing: border-box;  
                 }  
                 #counter {  
                  color: #fff;  
                  font-family: 'Roboto Mono', sans-serif;  
                  display: flex;  
                  align-items: center;  
                  justify-content: center;  
                  overflow: hidden;  
                  margin: 0;  
                 }  
                 .counter-container {  
                  display: flex;  
                  flex-direction: column;  
                  justify-content: center;  
                  text-align: center;  
                  margin: 30px 15px;  
                 }  
                 .counter {  
                  font-size: 60px;  
                  margin-top: 10px;  
                 }  
                 @media (max-width: 580px) {  
                  body {  
                   flex-direction: column;  
                  }  
                 } 
</style>
</head>

<body>
	<header>
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
						<div class="header-social">
							<ul>
								<li><a href="{{ getSetting('facebook') }}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{ getSetting('twitter') }}"><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{ getSetting('instagram') }}"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="top-left-menu">
							<ul>
								<li><a href="{{ url('contact') }}">Kontak Kami</a></li>
								<li><a href="{{ url('pages/about-us') }}">Tentang Kami</a></li>
							</ul>
						</div>
					</div>

					<div class="hidden-xs col-md-6 col-sm-6 col-lg-6">
						<div class="header-right-menu">
							<ul>
								<li>
									@if(getSetting('member_registration') == 'Y')
									<a href="{{ url('register') }}"><i class="fa fa-lock"></i> Daftar</a> atau
									@endif
									<a href="{{ url('login') }}"> Login</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header-mid hidden-xs" style="background-image:url({{ asset('po-content/frontend/inews/images/p1_tugumuda.jpg') }})">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo">
							<a href="{{ url('/') }}"><img src="{{ asset('po-content/uploads/'.getSetting('logo')) }}" class="img-responsive" style=" max-height:180px;max-width:180px;margin:0px;" alt=""></a>
						</div>
					</div>

					<!--<div class="col-sm-8">-->
					<!--	<a href="{{ url('/') }}"><img src="{{ asset('po-content/frontend/inews/images/kotasemarang.png') }}" class="img-responsive"  alt=""></a>-->
					<!--</div>-->
				</div>
			</div>
		</div>

		<nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">
			<div class="top-search">
				<div class="container">
					<form method="get" action="{{ url('search') }}">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input name="terms" type="text" class="form-control" placeholder="Search">
							<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
						</div>
					</form>
				</div>
			</div>

			<div class="container">
				<div class="attr-nav">
					<ul>
						<li class="search"><a href="javascript:void(0);"><i class="fa fa-search"></i></a></li>
					</ul>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#brand"><img src="{{ asset('po-content/uploads/'.getSetting('logo')) }}" class="logo" alt=""></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-left" data-in="" data-out="">
						@each(getTheme('partials.menu'), getMenus(), 'menu', getTheme('partials.menu'))
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main class="page_main_wrapper">
		@yield('content')
		
		<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="featured-inner">
				<div id="link-terkait" class="owl-carousel2">
				    <center>
				    <h5 style="">LINK TERKAIT :</h5></center>
						<center><div class="add-inner">
						            <a href="https://pip.semarangkota.go.id/" target="_blank"><img src="{{ asset('po-content/frontend/inews/images/logo_pip.png') }}" alt="#" width="80" height="80" style="margin:15px;"></a>
									<a href="https://www.semarangkota.go.id/" target="_blank"><img src="{{ asset('po-content/frontend/inews/images/logo_pemkotsmg.png') }}" alt="#" width="70" height="80" style="margin:15px;"></a>
									<a href="https://covid19.go.id/p/hoax-buster" target="_blank"><img src="{{ asset('po-content/frontend/inews/images/turnbackhoax.png') }}"  alt="#" width="80" height="80"  style="margin:15px;"></a>
									<a href="https://laporhendi.semarangkota.go.id/" target="_blank"><img src="{{ asset('po-content/frontend/inews/images/laporhendi.png') }}"  alt="#" width="80" height="80" style="margin:15px;"></a>
									<a href="https://ppid.semarangkota.go.id/" target="_blank"><img src="{{ asset('po-content/frontend/inews/images/ppid.jpeg') }}"  alt="#" width="130" height="80" style="margin:15px;"></a>
									<a href="https://data.semarangkota.go.id/" target="_blank"><img src="{{ asset('po-content/frontend/inews/images/logo_semarsatata.png') }}" alt="#" width="80" height="80" style="margin:15px;"></a>
							</div></center>
				</div>
			</div>
		</div>
	</div>
</div>
	</main>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 footer-box">
					<div class="about-inner">
						<img src="{{ asset('po-content/uploads/'.getSetting('logo_footer')) }}" class="img-responsive" alt="" style="max-height:120px; max-width:120px; margin-bottom:15px;margin-left: auto;
                            margin-right: auto;" />
						<p>{{ \Str::limit(strip_tags(getPages(1)->content), 200) }}</p>
						<ul>
							<li><i class="ti-location-arrow"></i>{{ getSetting('address') }}</li>
							<li><i class="ti-mobile"></i>{{ getSetting('telephone') }}</li>
							<li><i class="ti-email"></i>{{ getSetting('email') }}</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2 footer-box">
					<h3 class="wiget-title">Sitemap</h3>
					<ul class="menu-services">
						<li><a href="{{ url('/') }}">Beranda</a></li>
						<li><a href="{{ url('pages/tentang-kami') }}">Tentang Kami</a></li>
						<li><a href="{{ url('pages/sambutan') }}">Sambutan</a></li>
						<li><a href="{{ url('pages/visi-dan-misi') }}">Visi dan Misi</a></li>
						<li><a href="{{ url('pages/kepengurusan') }}">Kepengurusan</a></li>
						<li><a href="{{ url('contact') }}">Kontak Kami</a></li>
					</ul>
				</div>

				<div class="col-sm-2 footer-box">
					<h3 class="wiget-title">Kategori</h3>
					<ul class="menu-services">
						@foreach(getCategory(7) as $category)
						<li><a href="{{ url('category/'.$category->seotitle) }}">{{ $category->title }} ({{ $category->posts_count }})</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-4 footer-box" id="counter">
				    <div class="counter-container">  
                        <i class="fa fa-users fa-3x"></i>  
                        <div class="counter">
                        @foreach(getUniqueVisitor() as $uvisit)
                        {{ $uvisit->uni }}
                        @endforeach</div>  
                        <span>Unique Visitors</span>  
                       </div>  
                       <div class="counter-container">  
                        <i class="fa fa-eye fa-3x"></i>  
                        <div class="counter"> 
                        @foreach(getTotalVisitor() as $tvisit)
                        {{ $tvisit->total }}
                        @endforeach</div>  
                        <span>Total Visits</span>  
                       </div>   
                </div>
                 

				<!--<div class="col-sm-4 footer-box">-->
				<!--	<h3 class="wiget-title">Post Terkini</h3>-->
				<!--	<div class="footer-news-grid">-->
				<!--		@foreach(latestPost(2) as $latestpost)-->
				<!--		<div class="news-list-item">-->
				<!--			<div class="img-wrapper">-->
				<!--				<a href="{{ prettyUrl($latestpost) }}" class="thumb">-->
				<!--					<img src="{{ getPicture($latestpost->picture, 'thumb', $latestpost->updated_by) }}" alt="" class="img-responsive">-->
				<!--					@if($latestpost->type == 'picture')-->
				<!--					<div class="link-icon">-->
				<!--						<i class="fa fa-image"></i>-->
				<!--					</div>-->
				<!--					@elseif($latestpost->type == 'video')-->
				<!--					<div class="link-icon">-->
				<!--						<i class="fa fa-camera"></i>-->
				<!--					</div>-->
				<!--					@endif-->
				<!--				</a>-->
				<!--			</div>-->
				<!--			<div class="post-info-2">-->
				<!--				<h5><a href="{{ prettyUrl($latestpost) }}" class="title">{{ $latestpost->title }}</a></h5>-->
				<!--				<ul class="authar-info">-->
				<!--					<li><i class="ti-timer"></i> {{ date('d F Y', strtotime($latestpost->created_at)) }}</li>-->
				<!--				</ul>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--		@endforeach-->
				<!--	</div>-->
				<!--</div>-->
			</div>
		</div>
	</footer>

	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5">
					<div class="copy">Copyright &copy; {{ date('Y') }} {{ getSetting('web_author') }}. All Rights Reserved.</div>
				</div>

				<div class="col-xs-12 col-sm-7 col-md-7">
					<ul class="footer-nav">
						<li><a href="{{ url('pages/tentang-kami') }}">Tentang Kami</a></li>
						<li><a href="{{ url('pages/sambutan') }}">Sambutan</a></li>
						<li><a href="{{ url('pages/visi-dan-misi') }}">Visi dan Misi</a></li>
						<li><a href="{{ url('pages/kepengurusan') }}">Kepengurusan</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('po-content/frontend/inews/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('po-content/frontend/inews/js/jquery-ui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('po-content/frontend/inews/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('po-content/frontend/inews/bootsnav/js/bootsnav.js') }}" type="text/javascript"></script>
	<script src="{{ asset('po-content/frontend/inews/js/theia-sticky-sidebar.js') }}" type="text/javascript"></script>
	<script src="{{ asset('po-content/frontend/inews/js/RYPP.js') }}" type="text/javascript"></script>
	<script src="{{ asset('po-content/frontend/inews/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('po-content/frontend/inews/js/custom.js') }}" type="text/javascript"></script>

	@stack('scripts')
</body>

</html>