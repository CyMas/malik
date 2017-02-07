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
		<li class="active"><a href="{{ url('listfurniture') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> List barang</a></li>
			<li><a href="{{ url('pesanfurniture') }}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Pesan Barang</a></li>
			<li class="parent ">
		</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">List Furniture</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List </h1>
				<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								    <thead>
								    <tr>
								        <th data-sortable="true" >No.</th>
								        <th data-sortable="true">Nama Barang</th>
												<th data-sortable="true">Jenis Barang</th>
												<th data-sortable="true">Harga</th>
												<th data-sortable="true">Jumlah Barang</th>
												<th data-sortable="true">Status</th>
												<th data-sortable="true">Action</th>
												
								    </tr>
									</thead>
										<tbody>
											<?php
											$i=1;
											foreach($data as $key){
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $key->namabarang;?></td>
													<td><?php echo $key->jenisbarang;?></td>
													<td><?php echo $key->harga;?></td>
													<td><?php echo $key->ketersediaan;?></td>
													<td><?php echo strtoupper($key->status);?></td>
													<td>
													<a href="{{ ('pesan/detail/'.$key['id'])}}"" type="submit" class="btn btn-primary">Lihat<i class="fa fa-th-list" aria-hidden="true"></i>
													</a>
													</td>

												</tr>
												<?php
										}
										?>
										</tbody>
								</table>


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
