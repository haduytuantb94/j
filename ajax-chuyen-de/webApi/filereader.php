<?php 
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
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
			<form action="#" method="POST" role="form" id="newForm" enctype="multipart/form-data">
				<legend>Form title</legend>
				<div class="appendImg">
					
				</div>
				<div class="form-group">
					<label for="file">FileUpload</label>
					<input type="file" class="form-control" name ="file[]" id="file" placeholder="Input field" accept=".png, .jpg, .jpeg, .webp, .gif">
				</div>
				<div class="form-group">
					<label for="file">FileUpload</label>
					<input type="file" class="form-control" name ="file[]" id="file2" placeholder="Input field" accept=".png, .jpg, .jpeg, .webp, .gif">
				</div>
				<div class="form-group">
					<label for="file">FileUpload</label>
					<input type="file" class="form-control" name ="file[]" id="file3" placeholder="Input field" accept=".png, .jpg, .jpeg, .webp, .gif" onchange="myfunc(this)" multiple>
				</div>
				<input type="hidden" name="type" value="filereader">
				<button type="button" class="btn-submit btn btn-primary">Submit</button>
				<button type="button" class="btn-submit2 btn btn-primary">Submit2</button>

				<button type="button" class="btn-xoa btn btn-primary">Submit2</button>
			</form>
		</div>
	</div>
</div>
</br >

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="node_modules/jquery-easy-loading/dist/jquery.loading.js"></script>
<script type="text/javascript">

		$('#file').on('change',function(){
			var val = $(this).val();
		})
        $('.btn-submit2').click(function(){
        	var val = $('.form-group').last().find('input[type="file"]').val();
        	$('.form-group').last().find('input[type="file"]').click();
        })

        function myfunc(param) {
        	$.$.each(array/object, function(index, val) {
        		 /* iterate through array or object */
        	});
        	var file_data = $(param).prop('files')[0];
        	var type = file_data.type;
        	var fileToLoad = file_data;

        	var fileReader = new FileReader();
 
        	fileReader.onload = function(fileLoadedEvent){
        		var srcData = fileLoadedEvent.target.result;
          
                var newImage = document.createElement('img');
                    // console.log(newImage);

                newImage.src = srcData;
                $('.appendImg').append(newImage.outerHTML);
            }
             fileReader.readAsDataURL(fileToLoad);
        }
        $('.btn-xoa').click(function(){
        	$('#file3').val("");
        	$('.appendImg').empty();
        })
		$('.btn-submit').click(function(){
			var formdata = new FormData(($('#newForm')[0]))
            jQuery.ajax({
	                url: 'test.php',
	                type: 'POST',
	                // dataType: 'json',
	                contentType: false,
	                processData: false,
	                data: formdata,
	                success: function(data, textStatus, xhr) {
	                    console.log(data);
                },
	                error: function(xhr, textStatus, errorThrown) {
	                    console.log('error');
                }
            })
		})
</script>
</body>
</html>


