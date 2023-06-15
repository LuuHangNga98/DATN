
<!DOCTYPE html>
<html lang="zxx">

<head>
@include('inc.bootstrap_cli')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- <div class="loader">
		<img src="{!! asset('web/loading.gif')!!}" alt="Loading"  style="border-radius: 100%;">
	</div> -->
	<!-- top-header -->
   

	<?php 
	if($com!=='detail'){ ?>
		@include('inc.modal')
	<?php }
	?>
	
	@include('inc.search_form')
	@include('inc.menu')
	
	<?php 
	if($com=='index'){?>
		@include('inc.slide')
	<?php } ?>
	
	@yield('content')
	@include('inc.footer')
	@include('inc.boot2_detail')
</body>
</html>