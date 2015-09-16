<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Budgetify - Dashboard</title>

<link href="{{URL::to('website')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{URL::to('website')}}/css/datepicker1.css" rel="stylesheet">
<link href="{{URL::to('website')}}/css/styles.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Budgetify</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Jane Doe <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{URL::to('dashboard')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li><a href="{{URL::to('budget')}}"><span class="glyphicon glyphicon-th"></span> Budget</a></li>
			<li><a href=""><span class="glyphicon glyphicon-stats"></span> Charts</a></li>
			<li><a href=""><span class="glyphicon glyphicon-list-alt"></span> Expenditures</a></li>
			<li><a href=""><span class="glyphicon glyphicon-pencil"></span> Requests</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home </a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Dashboard</h2>
			</div>
		</div><!--/.row-->
		
		@yield('content')


	</div>	<!--/.main-->

	<script src="{{URL::to('website')}}/js/jquery-1.11.1.min.js"></script>
	<script src="{{URL::to('website')}}/js/bootstrap.min.js"></script>
	<script src="{{URL::to('website')}}/js/chart.min.js"></script>
	<script src="{{URL::to('website')}}/js/chart-data.js"></script>
	<script src="{{URL::to('website')}}/js/easypiechart.js"></script>
	<script src="{{URL::to('website')}}/js/easypiechart-data.js"></script>
	<script src="{{URL::to('website')}}/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
