<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Furniture</title>

<link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('admin/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{url('admin/css/bootstrap-table.css')}}" rel="stylesheet">
<link href="{{url('admin/css/styles.css')}}" rel="stylesheet">

<!--Icons-->
<script src="{{url('admin/js/lumino.glyphs.js')}}"></script>

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

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
				<li><a href="{{ url('admin/home') }}"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></use></svg> Home</a></li>
			<li class="active"><a href="{{ url('databarang') }}"><svg class="glyph stroked external hard drive"><use xlink:href="#stroked-external-hard-drive"/><</use></svg> Data Barang</a></li>
			<li><a href="{{ url('inputbarang') }}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Input Barang</a></li>


			<li class="parent ">

			<li role="presentation" class="divider"></li>
			<li><a href="{{ url('datapesanan') }}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Data Pesanan</a></li>
		</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Edit Barang</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">EditBarang</h1>

					<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg> </div>
					<div class="panel-body">

				<form method="POST" action="{{ url('admin/edit/' .$data['id']) }}" enctype=multipart/form-data>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
				<label>Nama barang</label>
				<input class="form-control" name="namabarang" value="<?php echo $data['namabarang'];?>" placeholder="">
			</div>

			<div class="form-group">
			<label>Jenis barang</label>
			<input class="form-control" name="jenisbarang" value="<?php echo $data['jenisbarang'];?>" placeholder="">
		</div>
		 <tr>
                                    <td>Harga</td>
                                    <td>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input class="form-control" type="number"  value="<?php echo $data['harga'];?>" name="harga" id="harga" autocomplete="off" required>
                                            <span class="input-group-addon">/ Unit</span>
                                        </div>
                                    </td>
                                </tr>
        	<div class="form-group">
	<label>Jumlah Ketersediaan</label>
	<input class="form-control" name="ketersediaan" value="<?php echo $data['ketersediaan'];?>" placeholder="">
</div>
<div class="form-group">
									<label>Selects</label>
									<select class="form-control" name="status">
										<option><?php echo $data['status'];?></option>
										<option>tidak ada</option>
									
									</select>
								</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
</form>



			</div>
		</div><!--/.row-->
		</li>
						</ul>
					</div>

			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="{{url('admin/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{url('admin/js/bootstrap.min.js')}}"></script>
	<script src="{{url('admin/js/chart.min.js')}}"></script>
	<script src="{{url('admin/js/chart-data.js')}}"></script>
	<script src="{{url('admin/js/easypiechart.js')}}"></script>
	<script src="{{url('admin/js/easypiechart-data.js')}}"></script>
	<script src="{{url('admin/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{url('admin/js/bootstrap-table.js')}}"></script>


</body>

</html>
