@extends(getTheme('layouts.app'))

@section('content')
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-236369521-2"></script>-->
<!--<script>-->
<!--  window.dataLayer = window.dataLayer || [];-->
<!--  function gtag(){dataLayer.push(arguments);}-->
<!--  gtag('js', new Date());-->

<!--  gtag('config', 'UA-236369521-2');-->
<!--</script>-->
	<div class="page-title">&nbsp;</div>
	
	<div class="container">
		<div class="row row-m">
			<div class="col-sm-8 col-p main-content">
				<div class="theiaStickySidebar">
					<div class="post-inner">
						<div class="post-head">
							@if(isset($category))
								<h2 class="title">{{ $category->title }} ({{ $posts->total() }})</h2>
							@else
								<h2 class="title">All Category</h2>
							@endif
						</div>
						
						<div class="post-body">
							@foreach($posts as $post)
								<div class="news-list-item articles-list">
									<div class="img-wrapper">
										<a href="{{ prettyUrl($post) }}" class="thumb"><img src="{{ getPicture($post->picture, 'medium', $post->updated_by) }}" alt="" class="img-responsive"></a>
									</div>
									<div class="post-info-2">
										<h4><a href="{{ prettyUrl($post) }}" class="title">{{ $post->title }}</a></h4>
										<ul class="authar-info">
											<li><i class="ti-timer"></i> {{ date('d F Y' , strtotime($post->created_at)) }}</li>
											<li><a href="{{ prettyUrl($post) }}" class="link"><i class="ti-eye"></i>{{ $post->hits }} Views</a></li>
										</ul>
										<p class="hidden-sm">{{ \Str::limit(strip_tags($post->content), 150) }}</p>
									</div>
								</div>
							@endforeach
						</div>
						
						<div class="post-footer"> 
							<div class="row thm-margin">
								<div class="col-xs-12 col-sm-12 col-md-12 thm-padding">
									{{ $posts->links() }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-4 col-p rightSidebar">
				@include(getTheme('partials.sidebar'))
			</div>
		</div>
	</div>
@endsection
