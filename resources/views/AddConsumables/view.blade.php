<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Assets Management System">
    <meta name="Garenosi Motlalepuo" content="AMS">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>AMS</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

       <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/home"><img src="images/logo.png" alt="alternative" style="width: 100px;height: 60px;"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="margin-left: -120px;">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item" >
                    <a class="nav-link page-scroll" href="/home" style="color: orange;">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <!-- Dropdown user Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" >Assets</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AssetRequests.view"><span class="item-text">Assets Requests</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="AddAssets.view"><span class="item-text">Create assets</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/ManageAssets.view"><span class="item-text">Manage assets</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Allocated assets</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Unallocated assets</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

               <!-- Dropdown user Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Staff</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="users.create"><span class="item-text">Create Staff</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="ManageUser.manageUser"><span class="item-text">Manage Staff</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown department Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AddDepartment.view"><span class="item-text">Create department</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="ManageDepartments.view"><span class="item-text">Manage departments</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown supplier Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Supplier</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AddSuppliers.view"><span class="item-text">Create supplier</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="ManageSuppliers.view"><span class="item-text">Manage supplier</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown accessory Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Accessory</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AddAccessory.view"><span class="item-text">Create accessory</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="ManageAccessories.view"><span class="item-text">Manage accessory</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown accessory Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Consumables</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AddConsumables.view"><span class="item-text">Create consumables</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="ManageConsumables.view"><span class="item-text">Manage consumables</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown accessory Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Components</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AddComponent.view"><span class="item-text">Create components</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="ManageComponents.view"><span class="item-text">Manage components</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
            </ul>
          
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">

                 @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/mark.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                     @if($message = Session::get('danger'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                        <center><img src="images/error.png" alt="gallery img" style="border-radius: 6px;width: 120px;height: 120px;"></center><br>
                        <center><p>{{$message}}</p></center>
                    </div>
                
                    @endif
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Create New</span> Accessory</h1>
                            <p class="p-large">Fill in all the fields below</p>
                           
                        </div> <!-- end of text-container -->

                          <!-- Actually form being used -->
                    <!-- Actually form being used -->
                     <form method="POST" action="{{ route('add_consumables') }}" style="border-radius: 20px;" enctype="multipart/form-data">
                                 @csrf
                                <div class="row">

                                   
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Company Name</small>
                                        <select class="form-control" id="rselect" name="company_name" required>
                                    <option class="select-option" value="" disabled selected>-- Select Company --</option>
                                    <option class="select-option" value="Company 1 ">Company 1 </option>
                                    <option class="select-option" value="Company 2 ">Company 2 </option>
                                    <option class="select-option" value="Company 3 ">Company 3 </option>
                                    <option class="select-option" value="Company 4 ">Company 4 </option>
                                </select>
                                    </div>

                                   
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Consumable Name</small>
                                        <input class="form-control"  type="text" name="consumable_name" required>
                                    </div>

                                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Category</small>
                                        <input class="form-control"  type="text" name="category" required>
                                    </div>
                                    

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Model No.</small>
                                        <input class="form-control"  type="text" name="model_no" required>
                                    </div>  

                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Item No.</small>
                                        <input class="form-control"  type="text" name="item_no" required>
                                    </div> 

                                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Default Location</small>
                                        <select class="form-control" id="rselect" name="location" required>
                                            <option class="select-option" value="" disabled selected>-- Select Location --</option>
                                            <option class="select-option" value="Location 1 ">Location 1 </option>
                                            <option class="select-option" value="Location 2 ">Location 2 </option>
                                            <option class="select-option" value="Location 3 ">Location 3 </option>
                                            <option class="select-option" value="Location 4 ">Location 4 </option>
                                        </select>
                                    </div>

                                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">Manufacturer</small>
                                        <input class="form-control"  type="text" name="manufacturer" required>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Purchase Date</small>
                                        <input class="form-control" type="date" name="purchase_date" required>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Purchase Cost (BPW)</small>
                                        <input class="form-control" step=".01" type="number" name="purchase_cost" required>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">Order No.</small>
                                        <input class="form-control"  type="number" name="order_no" required>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">Min Quantity</small>
                                        <input class="form-control" type="number" name="min_quantity" required>
                                    </div><br>
                                    
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"><small>Recite Copy *</small>
                                        <input class="form-control" type="file" name="file" required>
                                    </div>
                                   <br><hr>
                                    
                                    
                                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-top: 30px;">
                                        <button type="submit" class="form-control-submit-button">Upload information</button>
                                    </div>
                                </div>
                            </form>

                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->




    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Business Growth Services</h2>
                    <p class="p-heading p-large">We serve small and medium sized companies in all tech related industries with high quality growth services which are presented below</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Assets Requests</h4>
                            <p>Our system allows our authenticated users to perform an online assets requests for their employees.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">System Availability</h4>
                            <p>The system is available 24/7 all year round to ensure that our clients can issue requests any time of the day.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Assets Track and Trace</h4>
                            <p>Assets Management system clients can track assets incase assets are moved and viewing of available assets.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->




  
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About Us</h4>
                        <p>We're passionate about offering some of the best assets management services to our clients.</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">www.bw.gov.org</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="#">Terms & Conditions</a>, <a class="turquoise" href="#">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="#">Developer: Mafiati</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    
    
        
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>