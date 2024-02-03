@extends('layout.app')
@section('page_title', __('label.USER'))
@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="m-0 me-2 pb-3 fw-bolder">@lang('label.CREATE_USER')</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(array('group' => 'form', 'url' => route('users.store'),'class' => 'form-horizontal')) !!}
                    <div class="row">
                        <div class="col-12 col-sm-9 col-md-8 col-lg-8">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="name">@lang('label.NAME')</label>
                                    {!! Form::text('name', Request::get('name'), ['class' => 'form-control', 'placeholder' => __('label.NAME'), 'autocomplete'=>'off']) !!}
                                </div>
                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="role_id">@lang('label.ROLE')</label>
                                    {!! Form::select('role_id', $role_list, Request::get('role_id'), [
                                        'id' => 'role_id', 'class' => 'form-control form-select'
                                    ]) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="email">@lang('label.EMAIL')</label>
                                    {!! Form::email('email', Request::get('email'), ['class' => 'form-control', 'placeholder' => __('label.EMAIL'), 'autocomplete'=>'off']) !!}
                                </div>
                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="username">@lang('label.USERNAME')</label>
                                    {!! Form::text('username', Request::get('username'), ['class' => 'form-control', 'placeholder' => __('label.USERNAME'), 'autocomplete'=>'off']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="password">@lang('label.PASSWORD')</label>
                                    <div class="input-group input-group-merge">
                                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'autocomplete'=>'off']) !!}
                                        <span class="input-group-text cursor-pointer hide display-none"><i class="bx bx-hide"></i></span>
                                        <span class="input-group-text cursor-pointer show"><i class="bx bx-show"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <label class="form-label" for="conf_password">@lang('label.CONFIRM_PASSWORD')</label>
                                    <div class="input-group input-group-merge">
                                        {!! Form::password('conf_password', ['class' => 'form-control', 'autocomplete'=>'off']) !!}
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <span>
                                        <span class="label label-yellow-casablanca">
                                            @lang('label.NOTE')
                                        </span>&nbsp;
                                        <span class="fs-6 text-yellow-casablanca">@lang('label.PASSWORD_NOTE')</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 col-md-4 col-md-4">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <button type="submit" id="store" class="btn btn-outline blue-madison ">
                                @lang('label.SAVE')
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')

@stop
