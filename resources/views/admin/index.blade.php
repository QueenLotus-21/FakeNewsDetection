@extends('admin.dashboard')
@section('title','Generate Report')
@section('content')
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
@endsection