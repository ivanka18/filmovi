@extends('filmovi/master')

@section('title', 'Filmovi')

@section ('content')
<div class="container">
	<div class="row">
	
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Filmovi <br/><br/><br/>
				</div>
				<div class="panel-body">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						 <tr class="bg-info">
							 <th>Ime filma</th>
							 <th>Godina</th>
							 <th>Trajanje</th>
							 
							
						 </tr>
						 </thead>
				<tbody>
		@if (count($filmovi) >0)
		<div class="panel-body">
			<table class="table table-striped task-table">
				<thead>
					<th>Ime filma</th>
					<th>&nbsp;</th>
				</thead>
				
				<tbody>
					@foreach ($filmovi as $film)
						<tr>
							<td class="table-text">
								<div>{{ $film->naziv }}</div>
							</td>
							<td class="table-text">
								<div>{{ $film->godina }}</div>
							</td>
							<td class="table-text">
								<div>{{ $film->trajanje }}</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
				</tbody>
				</table>
					
				
				</ul>
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection