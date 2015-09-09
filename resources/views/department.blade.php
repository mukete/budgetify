@extends ('master')

@section('content')

<div class="row">
	<div class="col-lg-12">
	    <h2 style="text-align: center">List of Departments</h2>
	    <div class="table-responsive">
	    <a href="" data-toggle="modal" data-target="#myModal"><h3 class="pull-right btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i>Add New</h3></a>
	        <table class="table table-bordered table-hover">
	            <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>Name</th>
	                    <th>Finance Manager</th>
	                    <th>Email</th>
	                </tr>
	            </thead>
	            <tbody>
	                <tr>
	                    <td>/index.html</td>
	                    <td>1265</td>
	                    <td>32.3%</td>
	                    <td>$321.33</td>
	                </tr>
	                <tr>
	                    <td>/about.html</td>
	                    <td>261</td>
	                    <td>33.3%</td>
	                    <td>$234.12</td>
	                </tr>
	                <tr>
	                    <td>/sales.html</td>
	                    <td>665</td>
	                    <td>21.3%</td>
	                    <td>$16.34</td>
	                </tr>
	                <tr>
	                    <td>/blog.html</td>
	                    <td>9516</td>
	                    <td>89.3%</td>
	                    <td>$1644.43</td>
	                </tr>
	                <tr>
	                    <td>/404.html</td>
	                    <td>23</td>
	                    <td>34.3%</td>
	                    <td>$23.52</td>
	                </tr>
	                <tr>
	                    <td>/services.html</td>
	                    <td>421</td>
	                    <td>60.3%</td>
	                    <td>$724.32</td>
	                </tr>
	                <tr>
	                    <td>/blog/post.html</td>
	                    <td>1233</td>
	                    <td>93.2%</td>
	                    <td>$126.34</td>
	                </tr>
	            </tbody>
	        </table>
	    </div>
	</div>
</div>	


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Department</h4>
      </div>
      <div class="modal-body">
	  	<form class="role">
	  		<div class="form-group">
		  		<input type="text" name="name" class="form-control" placeholder="your name" /><br>
		  		<input type="text" name="fmanager" class="form-control" placeholder="finance manager" /><br>
		  		<input type="eail" name="email" class="form-control" placeholder="email address" />
	  		</div>
	  		<div class="modal-footer">
	  		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  		  <button type="button" class="btn btn-primary">Save changes</button>
	  		</div>
	  	</form>      
	  </div>
      
    </div>
  </div>
</div>
@stop