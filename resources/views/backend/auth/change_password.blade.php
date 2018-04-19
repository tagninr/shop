@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{ asset('backend/admin/dist/img/avatar5.png') }}" alt="User profile picture">

                    <h3 class="profile-username text-center">{{ ucfirst(Auth::user()->username) }} - Administraror</h3>

                    <p class="text-muted text-center">Administraror</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="pull-right">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>Friends</b> <a class="pull-right">13,287</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="settings">

                        <form class="form-horizontal" action="{{ route('backend.chage_password') }}" method="post">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('current_password') ? ' has-error' : '' }}">
                                <label for="current_password" class="col-sm-2 control-label">Current Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="current_password" id="current_password" placeholder="">
                                    @if($errors->has('current_password'))
                                        <span class="help-block">{{ $errors->first('current_password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('new_password') ? ' has-error' : '' }}">
                                <label for="new_password" class="col-sm-2 control-label">New password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="">
                                    @if($errors->has('new_password'))
                                        <span class="help-block">{{ $errors->first('new_password') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('new_password_confirmation') ? ' has-error' : '' }}">
                                <label for="new_password_confirmation" class="col-sm-2 control-label">Retype New password</label>
                                <div class="col-sm-10">
                                    <input title="" type="password" id="new_password_confirmtion"  name="new_password_confirmation" class="form-control">
                                    @if($errors->has('new_password_confirmation'))
                                        <span class="help-block">{{ $errors->first('new_password_confirmation') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop