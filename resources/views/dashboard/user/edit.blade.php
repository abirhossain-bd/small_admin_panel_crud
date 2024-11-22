@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>User Create <small>Fill the form to create user</small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form action="{{ route('user.update',$user->id) }}" method="POST">
                        @csrf

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">First Name *
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="first_name" type="text" class="form-control " placeholder="Enter first name" value="{{ $user->first_name }}">
                                @error('first_name')
                                    <div style="margin-bottom:10px" class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Last Name *
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="last_name" type="text" class="form-control " placeholder="Enter last name" value="{{ $user->last_name }}">
                                @error('last_name')
                                    <div style="margin-bottom:10px" class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Email *
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="email" type="email" class="form-control " placeholder="Enter Email " value="{{ $user->email }}">
                                @error('email')
                                    <div style="margin-bottom:10px" class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Mobile *
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="mobile" type="number" class="form-control " placeholder="Enter Mobile " value="{{ $user->mobile }}">
                                @error('mobile')
                                    <div style="margin-bottom:10px" class=" text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
