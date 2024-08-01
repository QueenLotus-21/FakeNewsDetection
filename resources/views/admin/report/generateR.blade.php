@extends('admin.dashboard')
@section('title','Generate Report')
@section('content')

<!-- Recent report Start -->
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
                        <th scope="col">Id</th>
                        <th scope="col">Author</th>
                        <th scope="col">Email</th>
                        <th scope="col">Title</th>
                        <th scope="col">Post Date</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $item )
                    <tr>
                      
                      <td>
                        <h5 class="font-medium mb-0">{{ $item->id}}</h5>
    
                      </td>
                      <td>
                        <span class="text-muted">{{$item->username}}</span><br>
                         
                      </td>
                      <td>
                          <span class="text-muted">{{$item->email}}</span><br>
                          
                      </td>
                      <td>
                        <span class="text-muted">{{$item->title}}</span><br>     
                    </td>
                   
                    <td>
                        <span class="text-muted">{{$item->created_at}}</span><br>
                        
                    </td>
                     
                      <td><a href="{{url('admin/generateReport/'.$item->id)}}" class="btn btn-success">Generate</a></td>
                      
                     
                    </tr>
                   @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent report End -->
@endsection
