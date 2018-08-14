<?php 
	$db=mysqli_connect('localhost','root','','photriya');
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <title>photriya</title>
    <style>
        @media (min-width:280px) and (max-width: 780px){
            #aside-bar{
                display: none;
            }
        }
        @media (min-width: 779px) and (max-width: 1366px) {
            #main-navbar{
                display: none;
            }
        }
        @media (min-width: 495px) and (max-width: 778px) {
            .wrapper{
                left: 0;
                position: absolute;

            }
        }

        @media (min-width: 280px) and (max-width: 778px) {
            .wrapper{
                left: 0;
                position: absolute;

            }
        }
    </style>
</head>
<body>

<!--#################### START HERE  ###################-->

<!--####### sidebar ########-->

<header id="aside-bar">
    <aside>
        <ul class="position-fixed h-100 nav-back" style="width: 260px">
            <li class="mt-5 mb-5">
                <a href="index.html" class="text-white text-center font-weight-bold" style="font-size: 35px;"><span class="side-heading">PHOTRIYA</span></a>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div class="mt-3 list_item">
                    <a href="index.php" class="text-white"><span>HOME</span></a>
                </div>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div class="mt-3 list_item">
                    <a href="wedding.php" class="text-white"><span>WEDDINGS</span></a>
                </div>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div  class="mt-3 list_item">
                    <a href="cinema.php" class="text-white"><span>CINEMA</span></a>
                </div>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div  class="mt-3 list_item">
                    <a href="passion.php" class="text-white"><span>PASSION</span></a>
                </div>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div  class="mt-3 list_item">
                    <a href="workshop.php" class="text-white"><span>WORKSHOPS</span></a>
                </div>
            </li>
            <li class="mt-3">
                <div  class="mt-3 hr-dark w-75">
                    <div class="mt-3 list_item">
                        <a href="ourstory.php" class="text-white"><span>OUR STORY</span></a>
                    </div>
                </div>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div  class="mt-3 list_item">
                    <a href="blog.php" class="text-white"><span>BLOG</span></a>
                </div>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div  class="mt-3 list_item">
                    <a href="contact.html" class="text-white"><span>CONTACT</span></a>
                </div>
            </li>
            <li class="mt-3 hr-dark w-75">
                <div  class="mt-3 ">

                </div>
            </li>
        </ul>
    </aside>
</header>

<!--####### END sidebar ########-->


<!--####### NAVBAR ########-->
<nav class="navbar navbar-dark navbar-expand-md  fixed-top vinay" id="main-navbar">
    <div class="container">
        <a  href="#" class="navbar-brand font-weight-bold"><span class="side-heading">PHOTRIYA</span></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#responceNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="responceNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a  href="index.php" class="nav-link"><span class="nav-items">HOME</span></a>
                </li>
                <li class="nav-item">
                    <a  href="wedding.php" class="nav-link"><span class="nav-items">WEDDINGS</span></a>
                </li>
                <li class="nav-item">
                    <a href="cinema.php" class="nav-link"><span class="nav-items">CINEMA</span></a>
                </li>
                <li class="nav-item">
                    <a href="passion.php" class="nav-link"><span class="nav-items">PASSION</span></a>
                </li>
                <li class="nav-item">
                    <a  href="workshop.php" class="nav-link"><span class="nav-items">WORKSHOPS</span></a>
                </li>
                <li class="nav-item">
                    <a  href="ourstory.php" class="nav-link"><span class="nav-items">OUR STORY</span></a>
                </li>
                <li class="nav-item">
                    <a  href="blog.php" class="nav-link"><span class="nav-items">BLOG</span></a>
                </li>
                <li class="nav-item">
                    <a  href="contact.php" class="nav-link"><span class="nav-items">CONTACT</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--####### END NAVBAR ########-->

<!--####### IMAGES START HERE ########-->

<div class="row mr-0  wrapper">
<?php 
	$viewQuery="SELECT * FROM `image` WHERE selects='CINEMA' ";
	$Execute=mysqli_query($db, $viewQuery);
	while($DateRows=mysqli_fetch_array($Execute)){
		$idToBeUpdated=$DateRows['id'];
		$imageToBeUpdated=$DateRows['image'];
	
?>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xl-4  p-0">
        <div>
            <img src="image/<?php echo $imageToBeUpdated; ?>" width="100%" height="250px" data-toggle="modal" data-target="#<?php echo $DateRows["id"]; ?>" class="main-images">
        </div>

        <!-- Modal -->
        <div class="modal animated zoomIn"  role="dialog" id="<?php echo $DateRows["id"]; ?>">
            <div class="modal-dialog modal-lg mt-0 ">
                <div class="modal-content">
                    <img src="image/<?php echo $imageToBeUpdated; ?>" class="w-100 h-100 ">
                </div>
            </div>
        </div>
	
        <!--End Modal-->
    </div>
    <?php } ?>
</div>

<!--####### END IMAGES HERE ########-->







<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>

</body>
</html>
