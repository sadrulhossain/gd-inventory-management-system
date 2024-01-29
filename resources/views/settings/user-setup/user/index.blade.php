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
                    <div class="row">
                        <div class="col-3 col-md-3 col-log-2">

                        </div>
                    </div>
                    <div class="row mt-2">
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
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @if(!$users->isEmpty())
                                            @php
                                                $page = $qpArr['page'] ?? 1;
                                                $sl = ($page - 1) * get_per_page_record();
                                            @endphp
                                            @foreach($users as $user)
                                                <tr>
                                                    <td class="text-center">{!! ++$sl !!}</td>
                                                    <td>{{$user->name ?? ''}}</td>
                                                    <td>{{$user->role->title ?? ''}}</td>
                                                    <td>{{$user->username ?? ''}}</td>
                                                    <td>{{$user->email ?? ''}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
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
