@extends('Laralag::layouts.master')
    @section('title')
        {{ $title }}
    @endsection
@section('content')
<x-Laralag::breadcrumb :title='"Detail Data $title"' :crumbs="['dashboard.index' => 'Dashboard', 'todo.index' => $title]" />
<div class="row">
    <div class="col">
        <div class="table-responsive-md col-12">
            <table class="table table-hover table-nowrap mb-0">
                <tr>
                    <th width='25%'>Todo</th>
                  <td>{{ $todo->todo }}</td>
             </tr>
				<tr>
                    <th width='25%'>Tanggal</th>
                  <td>{{ $todo->tanggal }}</td>
             </tr>
				<tr>
                    <th width='25%'>Jam</th>
                  <td>{{ $todo->jam }}</td>
             </tr>
				<tr>
                    <th width='25%'>Status</th>
                  <td>{{ $todo->status }}</td>
             </tr>
				
            </table>
        </div>
    </div>
</div>
@endsection
