@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card">
            
                <div class="card-body">

                @foreach($users as $row)
                            <h1>Edit User</h1>
                            <form action="{{action('UserController@update', $row->id)}}" method="POST" class="container justify-content-center">
                                @csrf
                                @method('PUT')
                                <div class="container justify-content-center">

                                <div class="row">
                                <div class="co-lmd-6">
                                <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Name') }}</label>

                                <input type="text" name="name" id="name" class="form-control" value="{{ $row ->name }}">
                                </div>
                                </div>

                               
                                <div class="row">
                                <div class="co-lmd-6">
                                <label for="email" class="col-md-6 col-form-label text-md-right"autofocus>{{ __('Email') }}</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{ $row ->email }}">
                                </div>
                                </div>

                                <div class="row">
                                <div class="co-lmd-6">
                                <label for="roles" class="col-md-6 col-form-label text-md-right"autofocus>{{ __('Roles') }}</label>
                                <input type="text" name="roles" id="roles" class="form-control" value="{{ $row ->user_role }}">
                                </div>
                                </div>

                              <div class="form-group row mb-0">
                               <div class="col-md-6 offset-md-4">
                                <input type="submit" id="Register" value="Update" class="btn btn-primary"/>
                              </div>
                             </div></div>
                            </form>
                            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
