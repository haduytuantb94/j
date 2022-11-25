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
				<input type="hidden" name="type" value="formdata">
				<button type="button" class="btn-submit btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</br >

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="node_modules/jquery-easy-loading/dist/jquery.loading.js"></script>
<script type="text/javascript">


    function callback(call) {
    	if(typeof call == 'function') {
    		console.log(call('hoc wordpress'));
    	}
    }

    function mycallBack(value) {
    	return 'value : ' + value;
    }
     
    callback(1234);


</script>
</body>
</html>


