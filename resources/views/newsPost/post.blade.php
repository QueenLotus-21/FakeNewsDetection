
@extends('header')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center">{{ __('Post News') }}</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                   @endif
                   @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                   @endif

                    <form method="POST" action="/post">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="catagory" class="col-md-4 col-form-label text-md-end">{{ __('Catagory') }}</label>

                            <div class="col-md-6">
                                <select name="catagory" id="" required>
                                    <option value="Polical" class="col-md-4 col-form-label text-md-end">Polical</option>
                                    <option value="sport" class="col-md-4 col-form-label text-md-end">sport</option>
                                    <option value="Health" class="col-md-4 col-form-label text-md-end">Health</option>
                                    <option value="Entertaiment" class="col-md-4 col-form-label text-md-end">Entertaiment</option>
                                    <option value="social" class="col-md-4 col-form-label text-md-end">social</option>
                                    <option value="Bussiness" class="col-md-4 col-form-label text-md-end">Bussiness</option>
                                </select>

                                @error('catagory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">{{ __('message') }}</label>

                            <div class="col-md-6">
                             <textarea name="message" id="" cols="12" rows="3" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message"></textarea>

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
                                <input id="title" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">

                                {{-- <img src="assets/img/trending/trending_bottom3.jpg" alt="" name="image" > --}}
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="row mb-3 mt-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
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

