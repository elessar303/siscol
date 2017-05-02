@extends('adminlte::layouts.app')
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
<!-- Incluimos el partial de datatables, ya preconfigurado, la tabla debe tener el id=table -->
@include('adminlte::layouts.partials.datatables')
@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">{{$data['title']}}</div>
					<div class="panel-body">
						<table id="table" class="table table-hover table-striped"  width="100%">
                <thead>
                  <tr>
                    @foreach($data['cabecera'] as $cab)
                      <th><center><b>{{$cab}}</b></center></th>
                    @endforeach
                      <th><center><b>Opciones</b></center></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    @foreach($data['cabecera'] as $cab)
                      <th><center><b>{{$cab}}</b></center></th>
                    @endforeach
                      <th><center><b>Opciones</b></center></th>
                  </tr>
                </tfoot>
                <tbody>
                @if(!empty($data['lista']))
                  @foreach($data['lista'] as $rows)
                    <tr>
                      <td align="center">{{$loop->iteration}}</td>
                      <td align="center">{{$rows->name}}</td>
                      <td align="center">{{$rows->email}}</td>
                      <td align="center">
                      <a href="usuarios/{{$rows->id}}" class="btn btn-default bt-sm" title="Ver"><i class="fa fa-eye"></i></a>
                      <a href="usuarios/{{$rows->id}}/edit" class="btn btn-default bt-sm" title="Editar"><i class="fa fa-edit"></i></a>
                      <a href="usuarios/{{$rows->id}}/edit" class="btn btn-default bt-sm" title="Eliminar"><i class="fa fa-trash-o">
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr><td colspan="3" align="center">No se encontraron registros</td></tr>
                @endif
                </tbody>
              </table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
