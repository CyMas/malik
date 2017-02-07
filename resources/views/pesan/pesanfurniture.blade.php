<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Furniture</title>

<link href="admin/css/bootstrap.min.css" rel="stylesheet">
<link href="admin/css/datepicker3.css" rel="stylesheet">
<link href="admin/css/bootstrap-table.css" rel="stylesheet">
<link href="admin/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="admin/js/lumino.glyphs.js"></script>

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
			<li><a href="{{ url('listfurniture') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> List barang</a></li>
			<li class="active"><a href="{{ url('pesanfurniture') }}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Pesan Barang</a></li>
			<li class="parent ">
	</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pesan Barang</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pesan Sesuai desaign anda</h1>


		
					<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked tag"><use xlink:href="#stroked-tag"/></svg> </div>
					<div class="panel-body">
		

				<form method="POST" action="{{ ('pesanbarang') }}" enctype=multipart/form-data>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
				<label>Nama barang</label>
				<input class="form-control" name="nama_barang" placeholder="">
			</div>

			<div class="form-group">
			<label>Jenis barang</label>
			<input class="form-control" name="jenis_barang" placeholder="">
		</div>
		<div class="form-group">
			<label>Jumlah</label>
			<input class="form-control" type="number" name="jumlah" placeholder="">
		</div>   <tr>
                                    <td>No Telepon</td>
                                    <td>
                                        <div class="form-group input-group">
                                        	<span class="input-group-addon">+62</span>
                                            <input class="form-control" type="number" name="no_telpon" id="no_telpon" autocomplete="off" required>
                                            </div>
                                    </td>
                                </tr>
                               
        <div class="form-group">
	
			<div class="form-group">
				<label>image input</label>
				<input type="file" name="image">
				 <p class="help-block">Example block-level help text here.</p>
			</div>
			<div class="form-group">
			<label>Keterangan</label>
			<input class="form-control" name="keterangan" placeholder="">
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

	<script src="admin/js/jquery-1.11.1.min.js"></script>
	<script src="admin/js/bootstrap.min.js"></script>
	<script src="admin/js/chart.min.js"></script>
	<script src="admin/js/chart-data.js"></script>
	<script src="admin/js/easypiechart.js"></script>
	<script src="admin/js/easypiechart-data.js"></script>
	<script src="admin/js/bootstrap-datepicker.js"></script>
	<script src="admin/js/bootstrap-table.js"></script>


</body>

</html>
