<!-- <?php 
	$db=mysqli_connect('localhost','root','','photriya');
	if(isset($_POST['submit'])){
		$categories=mysqli_real_escape_string($db,$_POST['categories']);
		$image=$_FILES["image"]["name"];
		$Target="image/".basename($_FILES["image"]["name"]);
		$query="insert into image(selects,image) values ('$categories','$image')";
		mysqli_query($db,$query);
		move_uploaded_file($_FILES["image"]["tmp_name"],$Target);
		echo "success";
	}
	
?>
<html>
	<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	</head>
	<body>
	<div class="container">
		<div class="row">
		<form action="" method="post" enctype="multipart/form-data">
			<select class="form-control" name="categories">
				<option>WEDDINGS</option>
				<option>CINEMA</option>
				<option>PASSION</option>
				<option>WORKSHOPS</option>
			</select><br />
			<input type="file" class="form-control-file" name="image" id="imageselect"><br />
			<input type="submit" name="submit">
		</form>
		</div>
	</div>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <title>Admin</title>
    <style>
    .submit-button{
        background-color: white;
        border: 2px solid midnightblue;
        color: midnightblue;
        border-radius: 7px;
        outline: none;
    }
        .submit-button:hover{
            background-color: midnightblue;
            color: white;
            cursor: pointer;
        }
        *{
            font-family: 'Comic Sans MS';
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
	<form action="" method="post" enctype="multipart/form-data">
       
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header" style="background-color: midnightblue">
                    <h1 class="text-center text-white">Admin Panel</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 ">
                            <h4>Category :</h4>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" name="categories">
                                <option>WEDDINGS</option>
                                <option>CINEMA</option>
                                <option>PASSION</option>
                                <option>WORKSHOPS</option>
                            </select>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <h5>Select Image :</h5>
                        </div>
                        <div class="col-md-8 mt-5">
                            <input type="file" class="form-control-file" name="image" id="imageselect">
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-4">
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <div class="text-center">
                                <button class="btn  btn-lg submit-button"  name="submit">ADD NEW POST</button>
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
		</form>
    </div>
</div>


<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>
</body>
</html>