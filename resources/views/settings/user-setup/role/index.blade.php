@extends('layout.app')
@section('page_title', __('label.ROLE'))
@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="m-0 me-2 pb-3 fw-bolder">@lang('label.ROLE_LIST')</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive webkit-scrollbar">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="vcenter fw-bold text-center w-px-50">@lang('label.SL')</th>
                                            <th class="vcenter fw-bold">@lang('label.TITLE')</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @if(!$roles->isEmpty())
                                            @foreach($roles as $role)
                                                <tr>
                                                    <td class="text-center">{!! ++$sl !!}</td>
                                                    <td>{{$role->title ?? ''}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @include('layout.paginator', ['list' => $roles ])
                </div>
            </div>
        </div>
    </div>
@stop
