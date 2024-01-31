@extends('layout.app')
@section('page_title', __('label.USER'))
@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="m-0 me-2 pb-3 fw-bolder">@lang('label.USER_LIST')</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(array('group' => 'form', 'url' => route('users.filter'),'class' => 'form-horizontal')) !!}
                    {!! Form::hidden('page', get_page_no_str($qp_arr)) !!}
                    <div class="row">
                        <div class="col-4 col-md-4 col-log-4">
                            <div class="row">
                                <label class="col-form-label text-right col-md-4" for="search">@lang('label.SEARCH')</label>
                                <div class="col-md-8">
                                    {!! Form::text('search',  Request::get('search'), ['class' => 'form-control tooltips', 'title' => 'Name', 'placeholder' => 'Name', 'list'=>'search', 'autocomplete'=>'off']) !!}
                                    <datalist id="search">
                                        @if(!empty($name_arr))
                                            @foreach($name_arr as $name)
                                                <option value="{{$name->name}}"></option>
                                            @endforeach
                                        @endif
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-log-4">
                            <div class="row">
                                <label class="col-form-label text-right col-md-4" for="role_id">@lang('label.ROLE')</label>
                                <div class="col-md-8">
                                    {!! Form::select('role_id', $role_list, Request::get('role_id'), [
                                        'id' => 'role_id', 'class' => 'form-control'
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-log-4">
                            <button type="submit" id="filter" class="btn btn-outline blue-madison">@lang('label.FILTER')</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <div class="row mt-2">
                        <div class="col-12">
                            <a href="{{route('users.create')}}" class="btn green-seagreen bx-pull-right">
                                <i class="bx bx-plus"></i> @lang('label.ADD_NEW_USER')
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive webkit-scrollbar">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="vcenter fw-bold text-center w-px-50">@lang('label.SL')</th>
                                            <th class="vcenter fw-bold">@lang('label.TITLE')</th>
                                            <th class="vcenter fw-bold">@lang('label.ROLE')</th>
                                            <th class="vcenter fw-bold">@lang('label.USERNAME')</th>
                                            <th class="vcenter fw-bold">@lang('label.EMAIL')</th>
                                            <th class="vcenter fw-bold">@lang('label.ACTIONS')</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @if(!$users->isEmpty())
                                            @foreach($users as $user)
                                                <tr>
                                                    <td class="text-center">{!! ++$sl !!}</td>
                                                    <td>{{$user->name ?? ''}}</td>
                                                    <td>{{$user->role->title ?? ''}}</td>
                                                    <td>{{$user->username ?? ''}}</td>
                                                    <td>{{$user->email ?? ''}}</td>
                                                    <td class="td-actions text-center vcenter">
                                                        <div class="w-inherit">

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        <tr>
                                            <td colspan="6" class="text-center">@lang('label.NO_RECORD_FOUND')</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @include('layout.paginator', ['list' => $users ])
                </div>
            </div>
        </div>
    </div>
@stop
