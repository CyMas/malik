<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Furniture</title>

<link href="{{ url('admin/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/datepicker3.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/bootstrap-table.css') }}" rel="stylesheet">
<link href="{{ url('admin/css/styles.css') }}" rel="stylesheet">


<script src="{{ url('admin/js/lumino.glyphs.js') }}"></script>


<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>


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
				<a class="navbar-brand" href="#"><span>F</span>URNITURE</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/"><svg class="glyph stroked male-user"><use xlink:href="stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{ url('listfurniture') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> List barang</a></li>
			<li><a href="{{ url('pesanfurniture') }}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Pesan Barang</a></li>
			<li class="parent ">
	</ul>

	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View</h1>

					<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg> View</div>
					<div class="panel-body">
						<fieldset>  
				 <table class="table table-bordered table-hover table-striped">
				 				 
                                
                                    <a href="<?php echo $data['image'];?>" class="col-lg-12" target="_blank"><img src="/admin/image/<?php echo $data['image'];?>" style="width:250px;"></a>
                            
                            	<td>
                                <tr>
                                    <td>Nama Barang</td><td>:</td>
                                    <td>{{ $data->namabarang }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Barang</td><td>:</td>
                                    <td>{{ $data->jenisbarang }}</td>
                                </tr>
                                <tr>
                                    <td>Ketersediaan</td><td>:</td>
                                    <td>{{ $data->ketersediaan }}</td>
                                </tr>
                              	<tr>
                                    <td>Harga</td><td>:</td>
                                    <td>{{ "Rp".number_format($data->harga,0,',','.') }}/Unit</td>
                                </tr>
                                <tr>
                                    <td>Status</td><td>:</td>
                                    <td>{{ $data->status }}</td>
                                </tr>
                                					
                                </td>
                            </table>
                       


							</fieldset>
						</form>
					</div>
				</div>

		

		

			</div>
		</div>
	</div>


	<script src="{{ url('admin/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('admin/js/chart.min.js') }}"></script>
	<script src="{{ rul('admin/js/chart-data.js') }}"></script>
	<script src="{{ url('admin/js/easypiechart.js') }}"></script>
	<script src="{{ url('admin/js/easypiechart-data.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ url('admin/js/bootstrap-table.js') }}"></script>


</body>

</html>
