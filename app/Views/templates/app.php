<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
	<head>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<meta http-equiv="x-ua-compatible" content="ie=edge">

	  	<title><?= $title; ?></title>

	  	<link rel="stylesheet" href="/css/all.min.css">
		<link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  		<link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	  	<link rel="stylesheet" href="/css/adminlte.min.css">
	  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	  	<style>
	  		.table > tbody > tr > td {
	  			vertical-align: middle;
	  		}
	  	</style>
	</head>
	<body class="hold-transition layout-top-nav">
		<div class="wrapper">

    	<?= $this->include('templates/navbar') ?>
    	<!-- Content Header (Page header) -->
		<div class="content-header">
		  <div class="container">
		    <div class="row mb-2">
		      <div class="col-sm-6">
		        <h1 class="m-0 text-dark"> <?= $headerTitle; ?> </h1>
		      </div><!-- /.col -->
		    </div><!-- /.row -->
		  </div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->
    	<?= $this->include('templates/sidebar') ?>
    	<?= $this->renderSection('content') ?>
    	<?= $this->include('templates/footer') ?>

		</div>

		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.bundle.min.js"></script>
		<script src="/js/all.min.js"></script>
		<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="/js/adminlte.min.js"></script>
		<script>
		  $(function () {
		    $('#example2').DataTable({
		      "paging": true,
		      "lengthChange": false,
		      "searching": false,
		      "ordering": false,
		      "info": true,
		      "autoWidth": true,
		      "responsive": false,
		    });
		  });
		</script>
	</body>
</html>