@extends('admin.dashboard')
@section('content')
<style>
    #gen{
        text-align: center;
    }
    .ban{
        width: 40rem;
        border: 1px solid black
    }
    h6{
        color: black
    }
</style>

<br><br><br><br>
<div class="container ban" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" id="gen">{{ __('Ban Bloger') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{url('ban/'.$user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus> --}}
                                 <h6 id="name">{{$user->name}}</h6>
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email"> --}}
                                <h6 id="name">{{$user->email}}</h6>
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Ban" class="col-md-4 col-form-label text-md-end">{{ __('Ban Status') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="Ban" type="text" class="form-control @error('Ban') is-invalid @enderror" name="Ban" value="{{$user->Ban}}" required autocomplete="Ban"> --}}

                                <select name="Ban" id="">
                                    <option value="True" >{{$user->Ban}}</option>
                                    <option value="False">False</option>
                                </select>
                                @error('Ban')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ban Bloger') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
