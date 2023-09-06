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
                    <a class="nav-link page-scroll" href="/home" >Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item" >
                    <a class="nav-link page-scroll" href="/RequestAssets.view" >Request Assets </a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link page-scroll" href="#" >Assets Responses</a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link page-scroll" href="#" >Assign Assets</a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link page-scroll" href="#" >Assets Allocations</a>
                </li>
                 <!-- Dropdown user Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" >Employees</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="AssetRequests.view"><span class="item-text">Create Employee</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/ManageAssets.view"><span class="item-text">Manage Employee</span></a>
                        
                    </div>
                </li>
                <!-- end of dropdown menu -->
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
                <div class="row" style="margin-top: -100px;">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">List of all</span> Assets</h1>
                            <p class="p-large">Use the request button below to requested for the assests that are available assets in the system</p>
                           
                        </div> <!-- end of text-container -->

                          <!-- Actually form being used -->
                    <!-- Actually form being used -->
                    

                    </div> <!-- end of col -->
                   
                       <table class="table tabel-hover table bordered" style="border-radius: 9px; background-color: white;width: 100%;"> 
                        <thead style="background-color: brown;">
                            <tr style="color: white;">
                                <th width="5">No.</th>
                                <th>Name</th>
                                <th> Company </th>
                                <th>Model</th>
                                <th> Serial No. </th>
                                <th> Tag </th>
                                <th>Supplier</th>
                                <th> Location </th>
                                <th> Date </th>
                                <th> Price </th>
                                <th> Order ID </th>
                                <th> Warranty </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach ($assets as $row)
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td>{{$row -> asset_name }}</td>
                                <td>{{$row-> company_name }}</td>
                                <td>{{$row-> model }}</td>
                                <td>{{$row-> serial_no }}</td>
                                 <td>{{$row-> asset_tag }}</td>
                                 <td>{{$row-> supplier }}</td>
                                 <td>{{$row-> location }}</td>
                                 <td>{{$row-> purchase_date }}</td>
                                 <td>{{$row-> purchase_cost }}</td>
                                 <td>{{$row-> order_no }}</td>
                                 <td>{{$row-> warranty }}</td>
                                <td><a class="nav-link page-scroll" style="float: left;margin-right: 4px;" title="Click here to request the asset" href="{{ route('request_asset') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('{{$i}}').submit();"><i class="fa fa-paper-plane"></i></a> 

                                    <form id="{{$i}}" action="{{ route('request_asset') }}" method="POST" style="display: none;">
                                        @csrf
                                        <input type="hidden" name="company_name" value="{{$row-> company_name }}">
                                        <input type="hidden" name="asset_name" value="{{$row-> asset_name }}">
                                        <input type="hidden" name="serial_no" value="{{$row-> serial_no }}">
                                        <input type="hidden" name="manager_first_name" value="{{Auth::user()->f_name }}">
                                        <input type="hidden" name="manager_last_name" value="{{Auth::user()->l_name }}">
                                        <input type="hidden" name="manager_email" value="{{Auth::user()->email }}">
                                    </form>
                                   </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->





  
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