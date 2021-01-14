
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

<section id="home" class="intro intro-bg bg-overlay parallax">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 caption-two-panel ml-auto pt-5">
<div class="intro-caption mt-5">
<h1 class="text-white mb-2">It's not really hard to stand out in crowd</h1>
<p class="text-white mb-4"> These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
<a class="btn btn-primary text-white mr-3">Explore More</a>
</div>
</div>
</div>
</section>


<section id="about" class="copy-content-sec sec-bg-02 h-100">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-12 copy-container ml-auto">
<div class="copy-content pr-4">
<h2 class="font-abril text-primary">
Who We Are
</h2>
<p class="lead ml-2">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
<p class="ml-2">
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<p class="mt-4 ml-2">
<a href="#" class="text-primary">Read More</a>
</p>
</div>
</div>
</div>
</div>
</section>
<!-- 
<section id="price" class="info-section sec-bg-03 bg-overlay">
<div class="container text-white">
<div class="head-box text-center mb-5">
<h2 class="font-abril">Our Jaw Drop Prices</h2>
</div>
<div class="three-panel-block my-4">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
<div class="service-block-bg text-center p-3">
<div class="price-count font-abril"><span>$</span>39</div>
<h3>Haircut</h3>
<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 pr-md-5 mb-4">
<div class="service-block-bg text-center p-3">
<div class="price-count font-abril"><span>$</span>27</div>
<h3>Shave</h3>
<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 pl-md-5 mb-4">
<div class="service-block-bg text-center p-3">
<div class="price-count font-abril"><span>$</span>20</div>
<h3>Moustache </h3>
<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 pr-md-5">
<div class="service-block-bg text-center p-3">
<div class="price-count font-abril"><span>$</span>15</div>
<h3>Beard Trim</h3>
<p class="px-4">Never in all their history have men been able truly to conceive of the world as one a single sphere</p>
</div>
</div>
</div>
</div>
</div>
</section> -->

<script src="./Assets/JS/ShowContactByID.js"></script>

<script type="text/javascript">
$('#logout').click(function(){
        <?php
            unset($_SESSION['Username']);
        ?>
   	});
</script>
</body> 
</html>


