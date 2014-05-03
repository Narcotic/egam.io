@extends('layouts/master')

@section('content')

<div class="event-index">
	
	<h2 class="example-title">Events Index</h2>
	<!-- Search Input -->
	<!-- Filter -->
	<div class="row filter-bar">
		<div class="col-md-3">
			<a href="{{ URL::to('#/filter/s/rue')}}" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-globe"></i></a>
			<a type="button" class="datepicker btn btn-primary"><i class="glyphicon glyphicon-calendar"></i></a>
			<span class="dropdown">
				<button type="button" class="btn btn-primary" id="dmfilter" data-toggle="dropdown"><i class="glyphicon glyphicon-filter"></i></button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dmfilter">
					<li><a href="{{ URL::to('#/sort/az')}}">A-Z</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</span>
			<span class="dropdown">      
				<button type="button" class="btn btn-primary" id="dmaz" data-toggle="dropdown"><i class="glyphicon glyphicon-sort-by-alphabet"></i></button>
				<ul class="dropdown-menu" style="top: 28px" role="menu" aria-labelledby="dmaz">
					<li><a href="{{ URL::to('#/sort/az/title')}}">By Title</a></li>
					<li><a href="{{ URL::to('#/sort/az/address')}}">By Address</a></li>
					<li><a href="{{ URL::to('#/sort/az/host')}}">By Host</a></li>
					<li><a href="{{ URL::to('#/sort/az/places')}}">By Max Places</a></li>
					<li><a href="{{ URL::to('#/sort/az/eventdate')}}">By Date</a></li>
				</ul>  
			</span>         
		</div>
		<div class="col-md-9">
			<div class="input-group form-search">
				<input type="text" class="form-control search-query">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-primary" data-type="last">Search</button>
				</span>
			</div>
		</div>
	</div>

	<!-- ### Active Filter, Sorting or Progress bar -->
	<div class="col-md-12 dest-active-filters"></div>
	
	<!-- Active Filter, Sorting -->
	<script class="active-filters-script" type="text/template">
	<button type="button" class="btn btn-xs btn-<%= buttonClass %>"><%= text %> <i class="glyphicon glyphicon-remove"></i></button>
	<span class="badge badge-<%= buttonClass %> pull-right"><%= qty %> event<%if(qty>1){ %><span>s</span><%}%> found</span>
	</script>

	<!-- Progress bar -->
	<script class="progressbar-script" type="text/template">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<%= value %>" aria-valuemin="0" aria-valuemax="100" style="width: <%= value %>%">
				<span class="sr-only">40% Complete (success)</span>
			</div>
	</script>

	<!-- ### End -->

	<div class="dest-bb-events"></div>
	<script class="index-grid" type="text/template">
	<div class="thumbnail">
	<div id="carousel-generic<%=id%>" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<li data-target="#carousel-generic<%=id%>" data-slide-to="0" class="active"></li>
	<li data-target="#carousel-generic<%=id%>" data-slide-to="1" class=""></li>
	<li data-target="#carousel-generic<%=id%>" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner">
	<div class="item active">{{ HTML::image('images/got.jpg', '<%=title%>', array('class' => 'img-responsive')) }}</div>
	<div class="item">{{ HTML::image('images/carcassonne.jpg', '<%=title%>', array('class' => 'img-responsive')) }}</div>
	<div class="item">{{ HTML::image('images/elixir.jpg', '<%=title%>', array('class' => 'img-responsive')) }}</div>
	</div>
	<a class="left carousel-control" href="#carousel-generic<%=id%>" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-generic<%=id%>" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	</div>
	<div class="row date-n-host">
	<div class="col-md-4">
	<span class="label label-primary pull-left"><%= event_date %></span>
	</div>
	<div class="col-md-8">
	<span class="label label-warning pull-right">						
	<%= event_user[0].username %>
	</span>
	</div>
	</div>

	<div class="caption text-center">
	<h3><span class="glyphicon glyphicon-tag"></span> <%= title %></h3>
	<p><span class="glyphicon glyphicon-map-marker"></span> <a href="http://www.google.com/maps?q=<%= address.full%>" target="_blank" class="text-info"><%= address.full %></a></p>
	<p><span class="glyphicon glyphicon-time"></span> <%= event_time %></p>
	<p><span class="glyphicon glyphicon-user"></span> <%= max_place %></p>
	<p><a href="{{ URL::to('event', array('id' => '<%=id%>' )) }}" class="btn btn-success btn-xs btn-block" role="button">View</a></p>
	</div>
	</div>
	</script>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque suscipit neque ac sapien luctus ultricies. Aenean vulputate posuere mollis. Curabitur vulputate lobortis libero quis volutpat. In in risus blandit, congue augue vitae, porta dolor. Proin nisi sapien, aliquet ac arcu vel, aliquam porttitor tellus. Cras scelerisque porttitor mauris, ac accumsan urna fringilla eu. Maecenas ac erat a neque cursus suscipit. Praesent eleifend nibh ut dapibus elementum.</p>
	<p>Phasellus euismod egestas imperdiet. Vestibulum mollis elementum ligula et varius. Praesent consequat mollis quam, nec malesuada diam pretium non. Morbi in orci augue. Praesent eros urna, mollis ac vestibulum nec, pretium a risus. Quisque et commodo lorem. Morbi pharetra cursus risus in vulputate. Fusce sed ultrices libero. Maecenas imperdiet euismod neque feugiat cursus. Integer facilisis nulla ornare rutrum sagittis. Nunc non tristique nulla. Pellentesque sollicitudin ultricies magna, et euismod ligula convallis at.</p>
	<p>Sed auctor sapien eros, nec gravida lectus lacinia sit amet. Donec ultrices blandit sem. Nullam vel tellus in lectus aliquam tempor. Suspendisse potenti. Donec vel congue odio. Etiam sed facilisis nibh. Vivamus feugiat eros elit, id sodales turpis elementum sit amet. Aliquam vel erat feugiat, consectetur nisl vitae, facilisis diam. Nullam sit amet orci eget nisi auctor condimentum. Nam blandit ante mi, sit amet condimentum sem mollis vitae.</p>
	<p>Fusce porta massa at sem commodo, sed bibendum nunc rhoncus. Donec erat ipsum, congue ut enim sit amet, mollis consequat felis. Ut placerat, ipsum vel ultrices elementum, eros elit scelerisque lacus, ut varius nisi purus a lectus. Vivamus gravida bibendum placerat. Nullam sapien eros, eleifend non dignissim sed, porttitor vel nulla. Suspendisse condimentum sollicitudin sem, eget euismod lectus dictum viverra. Nullam cursus ornare augue, sed tincidunt tellus feugiat eget. Nulla quis bibendum nisl, suscipit porttitor libero. Nunc sed mattis risus. Integer tincidunt adipiscing pretium. Ut augue leo, venenatis in magna eu, fringilla luctus massa.</p>
	<p>Nunc sem magna, adipiscing vitae leo non, viverra tempor tortor. Quisque imperdiet metus in ligula iaculis, fringilla vestibulum quam porta. Nunc id ipsum porta, tristique elit id, dictum metus. Integer sit amet sapien et tellus convallis vulputate. Donec fermentum fringilla sapien sed lacinia. Integer rhoncus ligula erat, sit amet tristique massa varius nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus varius sodales sem. Quisque eget ligula ac tortor posuere pretium. Fusce sed nunc ipsum. Aliquam placerat sit amet magna sed fringilla. Vivamus sit amet facilisis quam, quis tristique enim. Aliquam posuere augue nulla, et vulputate est tempor eu.</p>
	<br>
</div>

@stop

@section('scripts')

<script data-main="js/app/event/index/main" src="js/vendor/requirejs/require.js"></script>

@stop




