<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head> 
<body> 

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" target="_blank" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine">
                YOUR LOGO
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="ml-auto navbar-nav text-uppercase">
                    <li class="nav-item active">
                        <a class="nav-link p-3" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section id="about-us" class="py-5">
    <div class="container">
        <div class="row">
             <!--left sidebar-->
            
                                        <?php
                                            $id = $_GET['id'];
                                            include('./Connect.php');
                                            $query = mysqli_query($conn,"SELECT * FROM Contact WHERE ContactId = ".$id);
                                            while($row = mysqli_fetch_array($query)){?>
            <!--Content-->
            <div class="col-md-12">
                <div class="dashboard-area">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 bg-dark">
                                <div class="row">
                                    <div class="col-12">
                                        <a class="position-absolute ml-3 mt-3 text-white" href="setting.html" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit cover images"><i class="fas fa-cog"></i></a>
                                        <div class="row">
                                            <div class="col-md-6 ml-auto mr-auto">
                                               <div class="profiles p-3 my-4 rounded text-center shadow-sm">
                                                    <div class="avatars">
                                                        <a href="setting.html">
                                                            <img src="https://demo.bootstrap.news/bootnews/assets/img/avatar/avatar1.png" alt="Circle Image" class="avatar-lg rounded-circle img-fluid" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit avatar images">
                                                        </a>
                                                    </div>
                                                    <div class="names">
                                                        <h3 class="title text-light"><?php echo $row['ContactName'] ?></h3>
                                                        <a href="#" class="btn btn-link btn-facebook"><i class="fab fa-facebook"></i></a>
                                                        <a href="#" class="btn btn-link btn-twitter"><i class="fab fa-twitter"></i></a>
                                                        <a href="#" class="btn btn-link btn-gplus"><i class="fab fa-google-plus"></i></a>
                                                        <a href="#" class="btn btn-link btn-instagram"><i class="fab fa-instagram"></i></a>
                                                        <a href="#" class="btn btn-link btn-youtube"><i class="fab fa-youtube"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Latest post</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="p-3 border mb-3">
                                        <a class="position-absolute" style="right: 25px" href="setting.html" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit profile"><i class="fas fa-cog"></i></a>
                                      
                                                <h3><?php echo $row['ContactName'] ?></h3>
                                                <p><b>Address:</b> <?php echo $row['ContactAddress'] ?></p>
                                                <p><b>Phone:</b><?php echo $row['ContactPhone'] ?></p>
                                                <p><b>Email:</b><?php echo $row['ContactEmail'] ?></p>
                                            <?php } ?>
                                      
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="p-3 border mb-3">
                                        <h5>Recently Published</h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="list-unstyled statistics">
                                                    <li>
                                                        <span class="text-primary">Oct 20</span> <a class="h6" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Toyota Sienna rates marginal in passenger-side overlap crash test</a>
                                                    </li>
                                                    <li>
                                                        <span class="text-primary">Oct 12</span> <a class="h6" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Ford reveals autonomous vehicle philosophies, priorities</a>
                                                    </li>
                                                    <li>
                                                        <span class="text-primary">Oct 7</span> <a class="h6" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Offer Hints to How Dogs Became Domesticated</a>
                                                    </li>
                                                    <li>
                                                        <span class="text-primary">Oct 6</span> <a class="h6" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Consumer apprehension grows over autonomous tech, study says</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body> 
</html>

