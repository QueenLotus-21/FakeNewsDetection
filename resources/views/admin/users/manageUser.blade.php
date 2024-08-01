@extends('admin.dashboard')
@section('title','View Users')
@section('content')
<!-- user start -->

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Users</h6>
           
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
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item )
                    <tr>
                      
                      <td>
                        <h5 class="font-medium mb-0">{{ $item->id }}</h5>
    
                      </td>
                      <td>
                        <span class="text-muted">{{$item->name}}</span><br>
                         
                      </td>
                      <td>
                          <span class="text-muted">{{$item->email}}</span><br>
                          
                      </td>
                      <td>
                          <span class="text-muted">{{$item->Ban_as == '1' ?'True':'False'}}</span><br>
                         
                      </td>
                      <td>
                        <span class="text-muted">{{$item->created_at}}</span><br>
                        
                    </td>
                      {{-- <td><a href="{{url('editUser/'.$item->id)}}" class="btn btn-success">Edit</a></td> --}}
                      {{-- <td><a href="{{url('banB/'.$item->id)}}" class="btn btn-success">Ban Bloger</a></td> --}}
                      
                     
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
