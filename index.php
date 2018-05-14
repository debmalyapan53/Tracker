<!DOCTYPE html>
<html>
	<head>
		<title>Atom.Tracker</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- App Script -->
		<script src="atom.tracker.js"></script>
		<style>
		a:hover{
		cursor:pointer;
		}
		*:disabled{
		background-color:#CCCCCC;
		border:none;
		}
		.btn-col{
		width:40px;
		}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<header class="row">
				<div class="col-xs-6">
					<a data-mode="restore" id="btn-mode">Enter <span id="lbl-mode">Restore</span> Mode</a>
				</div>
				<div class="col-xs-6 text-right">
					Total Time:<span id="tally"></span>
				</div>
			</header><br>
			<div class="row">
			<form id="form-new">
				<div class="col-xs-10">
					<input class="form-control" placeholder="Enter new Task" id="task" name="name">
				</div>
				<div class="col-xs-2">
					<button type="submit" class="btn btn-block btn-success"><i class="fa fa-play"></i></button>
				</div>
			</div>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Task</th>
						<th>Start</th>
						<th>End</th>
						<th>Time</th>
						<th colspan="2">Controls</th>
					</tr>
				</thead>
				<tbody id="log">
				</tbody>
			</table>
		</div>
	</body>
</html>