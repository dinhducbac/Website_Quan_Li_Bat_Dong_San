<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
<link rel="stylesheet" href="./Assets/CSS/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="./Assets/CSS/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="./Assets/JS/bootstrap.min.js"></script>
<script src="./Assets/JS/jquery.min.js"></script>
<link href="./Assets/CSS/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head> 
<body> 
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" target="_blank" href="#">
                PUPPY
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="ml-auto navbar-nav text-uppercase">
                    <li class="nav-item active">
                        <a class="nav-link p-3" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="Category.php">Category</a>
                    </li>
                    <?php
                        if (session_id() === '') session_start();
                        if(isset($_SESSION['Username'])){
                            echo '  <li class="nav-item">
                                        <a class="nav-link p-3" href="#">My Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-3" href="index.php">Log Out</a>
                                    </li>';
                        }
                        else{
                            echo '
                                    <li class="nav-item"> 
                                        <a class="nav-link p-3" id="logout" href="Login.php">Login</a>
                                    </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <br>
    <h4>Category</h2>
	<br>
	<div class="row" id="ads">
</div>
</div>

</script>
<script src="./Assets/JS/ShowCateImage.js"></script>
<!-- <script src="./Assets/JS/ShowContactByID.js"></script> -->
<script type="text/javascript">
$('#logout').click(function(){
        <?php
            unset($_SESSION['Username']);
        ?>
   	});
</script>
</body> 
</html>