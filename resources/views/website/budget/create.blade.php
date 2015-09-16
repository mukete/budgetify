@extends('layouts.website')

@section('title')
  @parent Budget 
@stop

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Insert New Item to Budget
				<a href="{{URL::to('budget/create')}}" class="btn btn-info pull-right" >Insert Item</a>
			</div>
			<div class="panel-body">
				<p>
					<form class="form-horizontal" action="{{URL::to('budget')}}" method="post">
					  <input type="hidden" name="_token" value="{{Session::token()}}" />
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Item Name</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="item">
					      <span class="btn-danger"><strong>{{ ($errors->has('item') ? $errors->first('item') : '') }}</strong></span>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Quantity</label>
					    <div class="col-sm-8">
					      <input type="number" class="form-control" name="quantity">
					      <span class="btn-danger"><strong>{{ ($errors->has('quantity') ? $errors->first('quantity') : '') }}</strong></span>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Unit Price</label>
					    <div class="col-sm-8">
					      <input type="number" class="form-control" name="price">
					      <span class="btn-danger"><strong>{{ ($errors->has('price') ? $errors->first('price') : '') }}</strong></span>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Item Budget Category</label>
					    <div class="col-sm-8">
					      	<select class="form-control" name="category">
							  @foreach($categories as $category)
							  <option name="category" value="{{$category->id}}">{{$category->title}}</option>
							  <span class="btn-danger"><strong>{{ ($errors->has('category') ? $errors->first('category') : '') }}</strong></span>
							  @endforeach
							</select>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-8">
					      <button type="submit" class="btn btn-info btn-lg">Insert Item</button>
					    </div>
					  </div>
					</form>
				</p>
			</div>
		</div>
	</div>
</div>

@stop