@extends('layouts.website')

@section('title')
  @parent Budget 
@stop

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Items Budgeted
				<a href="{{URL::to('budget/create')}}" class="btn btn-info pull-right" >Insert Item</a>
			</div>
			<div class="panel-body">
				<table class="table">
				    <thead>
				    <tr>
				        <th>Item</th>
				        <th>Quantity</th>
				        <th>Unit Price</th>
				        <th>Status</th>
				    </tr>
				    </thead>

				    @foreach($items as $item)
				    <tr>
				        <td>{{$item->item}}</td>
				        <td>{{$item->quantity}}</td>
				        <td>{{$item->price}}</td>
				        <td>{{$item->status}}</td>
				    </tr>
				    @endforeach
				</table>
				<p>
				{!!$items->render() !!}
				</p>
			</div>
		</div>
	</div>
</div>

@stop