<style>
    #seen{
        color: var(--light);
        font-size: 2rem
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fake News Detection</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">FakeNewsDet</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <i class="fa fa-user me-2" id="seen"></i>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> {{ Auth::user()->name }}</h6>
                        <span> {{ Auth::user()->type }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-user me-2"></i>User</a>
                    <a href="/generateR" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Generate Report</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Report</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Manage Report</a>
                            <a href="signup.html" class="dropdown-item">View Report</a>
                            <a href="signup.html" class="dropdown-item">Update</a>
                            <a href="404.html" class="dropdown-item">Delete</a>
                            <a href="blank.html" class="dropdown-item">Generate Report</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-edit me-2"></i></i>Admin</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Manage Admin</a>
                            <a href="signup.html" class="dropdown-item">Signup admin</a>
                            <a href="signup.html" class="dropdown-item">Update</a>
                            <a href="404.html" class="dropdown-item">Delete</a>
                        </div>
                    </div> 

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Ban User</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Manage Ban User</a>
                            <a href="signup.html" class="dropdown-item">Ban User</a>
                            <a href="signup.html" class="dropdown-item">update Ban User</a>
                            <a href="404.html" class="dropdown-item">Delete</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-user me-2" id="seen"></i>
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Change Password</a>
                            {{-- <a href="#" class="dropdown-item">Log Out</a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
            
                        </div>
                    </div>
                </div> 
            </nav>
            <!-- Navbar End -->
           


            <!-- news & report Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                
                            <div class="ms-3">
                                <p class="mb-2">Users</p>
                                <h6 class="mb-0">12</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Admins</p>
                                <h6 class="mb-0">4</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">News</p>
                                <h6 class="mb-0">34</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Report</p>
                                <h6 class="mb-0">12</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news & report End -->

            <main class="py-4">
                @yield('content')
            </main>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Report</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                  
                                    <th scope="col">Author</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Catagory</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>Bereket</td>
                                    <td>Supporters of the legislation have emphasized </td>
                                    <td>Sport</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail </a></td>
                                </tr>
                                <tr>
                                    
                                    <td>Jhon Doe</td>
                                    <td>The bill would give Congress a chance to hold hearings</td>
                                    <td>politics</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                   
                                    <td>senait</td>
                                    <td>The Corker bill makes it less likely sanctions would be lifted</td>
                                    <td>entertainment</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                  
                                    <td>almaz</td>
                                    <td>How can Obama waive sanctions passed by Congress                                    </td>
                                    <td>economic</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                    
                                    <td>Jkebede</td>
                                    <td>The biggest sanctions package approved by Congress </td>
                                    <td>health</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

        

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">latest new</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                 
                                    <th scope="col">Author</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Catagory</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
                                    <td>Birhan</td>
                                    <td>Jhon Doe Jhon Doe  Jhon Doe  Jhon Doe  </td>
                                    <td>health</td>
                                    <td>23 june 2023/td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail </a></td>
                                </tr>
                                <tr>
                                    
                                    <td>Jhon Doe</td>
                                    <td>Jhon Doe Jhon Doe  Jhon Doe  Jhon Doe  </td>
                                    <td>entertainment</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                   
                                    <td>ketema</td>
                                    <td>Jhon Doe Jhon Doe  Jhon Doe  Jhon Doe  </td>
                                    <td>bussiness</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                 
                                    <td>ayele</td>
                                    <td>Jhon Doe Jhon Doe  Jhon Doe  Jhon Doe  </td>
                                    <td>sport</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                <tr>
                                  
                                    <td>Jhon Doe</td>
                                    <td>Jhon Doe Jhon Doe  Jhon Doe  Jhon Doe  </td>
                                    <td>politics</td>
                                    <td>01 Jan 2045</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Widgets End -->
             <!-- user start -->

             <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Users</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                  
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Ban Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td>1</td>
                                    <td>Jhon Doe</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>true</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail </a></td>
                                </tr>

                                <tr>
                                   
                                    <td>2</td>
                                    <td>Aster kebede</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>False</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail </a></td>
                                </tr>
                                
                                <tr>
                                    <td>1</td>
                                    <td>Jselam ayele</td>
                                    <td>Jhon@gmail.com</td>
                                    <td>False</td>
                                    <td>23 june 2023</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail </a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          <!-- user End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Arbaminch University</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">Software Engineers Section B</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">Tigist Amakelew</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/admin/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/admin/js/main.js')}}"></script>
</body>

</html>