<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Furniture</title>

<link href="{{ url('admin/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/styles.css') }}" rel="stylesheet">

<!--Icons-->
<script src="{{ url('admin/js/lumino.glyphs.js') }}"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>


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
                <a class="navbar-brand" href="/"><span>F</span>URNITURE</a>
                
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>


	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="POST">
						{{ csrf_field() }}
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button  class="btn btn-primary">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->



 	<script src="{{ url('admin/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ url('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/js/chart.min.js') }}"></script>
    <script src="{{ url('admin/js/chart-data.js') }}"></script>
    <script src="{{ url('admin/js/easypiechart.js') }}"></script>
    <script src="{{ url('admin/js/easypiechart-data.js') }}"></script>
    <script src="{{ url('admin/js/bootstrap-datepicker.js') }}"></script>
    <script>
        $('#calendar').datepicker({
        });

        $('#closeerror').click(function(e){
            e.preventDefault();
            $('#errormsg').hide();
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
