@extends('layouts.website')

@section('title')
  @parent Expenditure 
@stop

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Expenditures
				<a href="{{URL::to('expenditure/create')}}" class="btn btn-info pull-right" >Insert Item</a>
			</div>
			<div class="panel-body">
				<table class="table">
				    <thead>
				    <tr>
				        <th>Title</th>
				        <th>Ref. Code</th>
				        <th>Details</th>
				        <th>Status</th>
				        <th>Action</th>
				    </tr>
				    </thead>

				    @foreach($expenditures as $item)
				    <tr>
				        <td>{{$item->title}}</td>
				        <td>{{$item->code}}</td>
				        <td>{{$item->details}}</td>
				        <td>{{$item->status}}</td>
				        <td><a href="" class="btn btn-xs btn-info">update</a></td>
				    </tr>
				    @endforeach
				</table>
				<p>
				{!!$expenditures->render() !!}
				</p>
			</div>
		</div>
	</div>
</div>

@stop