@extends('header')

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
                <div class="card-header" id="gen" >{{ __('Update Post') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{url('editPost/'.$new->id) }}">
                        @csrf
                        @method('PUT')

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
                            <label for="catagory" class="col-md-4 col-form-label text-md-end">{{ __("Catagory") }}</label>

                            <div class="col-md-6">
                                <input id="catagory" type="text" class="form-control @error('catagory') is-invalid @enderror" name="catagory" value="{{$new->catagory}}" required autocomplete="catagory">

                                @error('catagory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">{{ __("message") }}</label>

                            <div class="col-md-6">
                                <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{$new->message}}" required autocomplete="message">

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('image') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$new->image}}" required autocomplete="image">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="created_at" class="col-md-4 col-form-label text-md-end">{{ __('Posted Date') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{$new->created_at}}" required autocomplete="created_at">

                                @error('created_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
