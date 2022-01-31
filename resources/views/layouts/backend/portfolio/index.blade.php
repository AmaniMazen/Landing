@extends('layouts.backend.master')
@section('title')Portfolio @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ trans('backend/public.Dashboard') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="card">
    <div class="card-header d-flex justify-content-between">
      <h3 class="card-title">{{ trans('backend/sidebar.Bordered Table') }}</h3>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        {{ trans('backend/sidebar.Add PortFolio category') }}
      </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
              {{$portfolio}}
            <th style="width: 10px">#</th>
            <th >{{ trans('backend/sidebar.Name') }}</th>
            <th >{{ trans('backend/sidebar.Description') }}</th>
            <th style="width: 40px">{{ trans('backend/sidebar.Action') }}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Update software</td>
            <td>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-danger">55%</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>

  </div>
  @include('layouts.backend.portfolio.create')
</div>
@endsection
