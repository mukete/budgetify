@extends('layouts.website')

@section('title')
  @parent Budget 
@stop

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Add New Expenditure
				<a href="{{URL::to('expenditure/create')}}" class="btn btn-info pull-right" >Insert Item</a>
			</div>
			<div class="panel-body">
				<p>
					<form class="form-horizontal" action="{{URL::to('expenditure')}}" method="post">
					  <input type="hidden" name="_token" value="{{Session::token()}}" />
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Title</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" name="title">
					      <span class="btn-danger"><strong>{{ ($errors->has('title') ? $errors->first('title') : '') }}</strong></span>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Details</label>
					    <div class="col-sm-8">
					      <textarea class="form-control" name="details" rows="5" ></textarea>
					      <span class="btn-danger"><strong>{{ ($errors->has('details') ? $errors->first('details') : '') }}</strong></span>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-2 control-label">Status</label>
					    <div class="col-sm-8">
					      <select class="form-control" name="status">
					      	<option name="status" value="DRAFT" selected>DRAFT</option>
					      	<option name="status" value="SUBMITTED">SUBMITTED</option>
					      	<option name="status" value="APPROVED">APPROVED</option>
					      </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-8">
					      <button type="submit" class="btn btn-info btn-lg">Add Expenditure</button>
					    </div>
					  </div>
					</form>
				</p>
			</div>
		</div>
	</div>
</div>

@stop