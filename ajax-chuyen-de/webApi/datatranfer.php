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
	<title>Datatranfer</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="node_modules/jquery-easy-loading/src/loading.css" rel="stylesheet">
	<style type="text/css">
		.drag-active--over {
			background: green !important;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id= "myDraggableElement" draggable="true" style="background: red;width:120px;height: 120px; margin-right: 200px;">
			
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 drop-zone" style="background:blue;width:150px;height: 150px; margin-right: 50px;" >
			
		</div>

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 drop-zone" style="background:blue;width:150px;height: 150px; margin-right: 50px;" >
			
		</div>
	</div>
</div>
</br >

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="node_modules/jquery-easy-loading/dist/jquery.loading.js"></script>
<script type="text/javascript">

	const draggableElement= document.querySelector('#myDraggableElement');
        draggableElement.addEventListener('dragstart', function(event){
            event.dataTransfer.setData('text', draggableElement.id);
        })

    for(const dropZone of document.querySelectorAll('.drop-zone')) {

    	 dropZone.addEventListener('dragover', event => {
    	 	event.preventDefault();

            // // dropZone.classList.add('drag-active--over');  
            //     var newStr = dropZone.classList.toString();
            //         // console.log(newStr);
            //     // console.log(dropZone.classList.contains('col-lg-4'));
            //     dropZone.classList.forEach(function(data2,index){
            //        	   $('.drop-zone').append(document.getElementById(data));
            //     })
    	})
    	dropZone.addEventListener('drop', event => {
    		event.preventDefault();
    		if(event.target.className = 'drop-zone') {
    			 event.target.appendChild(dragged);
    		}
    	})        
    }
    </script>
</body>
</html>


