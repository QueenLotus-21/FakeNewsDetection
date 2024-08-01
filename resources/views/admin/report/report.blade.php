@extends('admin.dashboard')
@section('content')
<style>
    #gen{
        text-align: center
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" id="gen" >{{ __('GENERATE REPORT') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('admin/generateReport/'.$new->id) }}">
                        @csrf
                       

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$new->username}}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$new->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __("New's Title") }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$new->title}}" required autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="NoFPOst" class="col-md-4 col-form-label text-md-end">{{ __('NumberOfPost') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('NumberOfPost') is-invalid @enderror" name="NumberOfPost" value="{{$count}}" required autocomplete="NumberOfPost">

                                @error('NumberOfPost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="posted_date" class="col-md-4 col-form-label text-md-end">{{ __('Posted Date') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('posted_date') is-invalid @enderror" name="posted_date" value="{{$new->created_at}}" required autocomplete="posted_date">

                                @error('posted_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Generate') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>
@endsection
