@extends('admin.dashboard')
@section('title','Manage Admin')
@section('content')
<!-- user start -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Manage Admin</h6>
           
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                      
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role/th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
              @endif

                    @foreach($users as $item )
                    <tr>
                      
                      <td>
                        <h5 class="font-medium mb-0">{{ $item->id }}</h5>
    
                      </td>
                      <td>
                        <span class="text-muted">{{$item->username}}</span><br>
                         
                      </td>
                      <td>
                          <span class="text-muted">{{$item->email}}</span><br>
                          
                      </td>
                      <td>
                          <span class="text-muted">{{$item->role}}</span><br>
                         
                      </td>
                      <td>
                        <span class="text-muted">{{$item->created_at}}</span><br>
                        
                    </td>
                      <td><a href="{{url('admin/editAdmin/'.$item->id)}}" class="btn btn-success">Edit</a></td>
                      <td><a href="{{url('admin/deleteAdmin/'.$item->id)}}" class="btn btn-success">Delete</a></td>
                      
                     
                    </tr>
                   @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- user End -->
<br><br><br><br><br>
@endsection
