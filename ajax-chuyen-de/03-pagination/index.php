<?php 
$username = isset($_GET['username']) ? $_GET['username'] : "haduyuan";
$email    = isset($_GET['email']) ? $_GET['email'] : "haduytuan@gmail.com";
$address = isset($_GET['address']) ? $_GET['address'] : "Thai duong thai thuy thai binh";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pagination</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="node_modules/jquery-easy-loading/src/loading.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<form action="" method="POST" role="form" id="newForm">
				<legend>Form title</legend>
				
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control" name ="username" id="username" placeholder="Input field" value="<?php echo $username; ?>">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name ="email" id="email" placeholder="Input field" value="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" name ="address" id="address" placeholder="Input field" value="<?php echo $address; ?>">
				</div>
				
				<button type="button" class="btn-submit btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</br >

<div class="container">
	<div class="panel panel-danger">
		<div class="panel-heading text-center">
			Phân trang bằng ajax
		</div>
		<div class="panel-body">
			<div class="row content-movie">
				<!-- show film -->
			</div>
			<div class="row pages">
				<div class="input-group col-md-4 col-md-offset-4">
					<div class="input-group-btn">
						<button type="button" class="btn btn-default pageInfo" disabled="disabled">Page 1 of
						6</button>
						<button type="button" class="btn btn-default goStart">Start</button>
						<button type="button" class="btn btn-default goPrevious">&laquo; Previous</button>
					</div>
					<select class="form-control" id="slbPages" style="width:100px">
					</select>
					<div class="input-group-btn">
						<button type="button" class="btn btn-default goNext">Next &raquo;</button>
						<button type="button" class="btn btn-default goEnd">End</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



	<script id="templateHtml" type="text/x-handlebars-template">
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="assets/images/{image}" alt="{title}">
				<div class="caption">
					<h4 class="text-center">{title}</h4>
					<p class="text-center"> Release date: <strong>{description}</strong></p>
				</div>
			</div>
		</div>
	</script>
	
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="node_modules/jquery-easy-loading/dist/jquery.loading.js"></script>
	<script src="assets/js/my-js.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.btn-submit').click(function(){
				var formdata = new FormData($('#newForm')[0]);
				    formdata.append(username,'tuanha');
				    formdata.append(email,'29');
				    console.log(formdata);
				    //debug FormData : 
				    for (var pair of formdata.entries()) {
                        console.log(pair[0]+ ', ' + pair[1]); 
                    }

			})
		}); 
	</script>
</body>
</html>


