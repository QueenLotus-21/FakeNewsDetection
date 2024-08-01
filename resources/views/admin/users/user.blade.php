@extends('header')
@section('title','View Users')
@section('content')
<style>
    body{
    background: #edf1f5;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.btn-circle.btn-lg, .btn-group-lg>.btn-circle.btn {
    width: 50px;
    height: 50px;
    padding: 14px 15px;
    font-size: 18px;
    line-height: 23px;
}
.text-muted {
    color: #8898aa!important;
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}
.user-table tbody tr .category-select {
    max-width: 150px;
    border-radius: 20px;
}
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />



<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Ban Status</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Registration Date</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
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
                      <td><a href="{{url('editUser/'.$item->id)}}" class="btn btn-success">Edit</a></td>
                      <td><a href="{{url('banB/'.$item->id)}}" class="btn btn-success">Ban Bloger</a></td>
                      
                     
                    </tr>
                   @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<br><br><br><br><br>
@endsection
