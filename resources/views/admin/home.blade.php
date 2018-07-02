@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Manage Users</h1></div>

                <div class="panel-body">
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th width="5">No.</th>
                          <th>Name</th>
                          <th>Email</th>
						  <th>Role</th>
						  <th>Created By</th>
						  <th>Times Login</th>
						  <th>Last Login</th>
						  <th>Created at</th>
						  <th>Last update</th>						  
						  <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $key => $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
							<td>{{ $value->role()->first()->name }}</td>
							<td>{{ $value->created_by()->first()->name }}</td>
							<td>{{ $value->times_login }}</td>
							<td>{{ $value->last_login }}</td>
							<td>{{ $value->created_at }}</td>
							<td>{{ $value->updated_at }}</td>
							
							<td>
								<div class="action btn btn-warning getUser" data-action="{{ route('read-user') }}" data-id="{{ $value->id }}">
								  <i class="material-icons">edit</i>
								</div>
							</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User <span class="ajaxName"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="{{ route('update-user') }}" method="POST" id="submit">
			{{ csrf_field() }}
			@if ($errors->has('email'))
			<div class="alert alert-danger">
				{{ $errors->first('email') }}
			</div>
			@endif
			@if ($errors->has('password'))
				<div class="alert alert-danger">
					{{ $errors->first('password') }}
				</div>
			@endif		
			<div id="ajaxErrors">
				
			</div>
			<input type="hidden" class="form-control id" name="id" value="{{ old('uid') }}" id="formId" required autofocus>				
			<div class="form-group">
				<label>Name</label>
				<div class="input-group input-group--inline">
					<div class="input-group-addon">
						<i class="material-icons">account_circle</i>
					</div>
					<input type="text" class="form-control name" name="name" value="{{ old('name') }}" id="formName" required autofocus>				
				</div>
			</div>						
			<div class="form-group">
				<label>Email</label>
				<div class="input-group input-group--inline">
					<div class="input-group-addon">
						<i class="material-icons">account_circle</i>
					</div>
					<input type="text" class="form-control email" name="email" value="{{ old('email') }}" id="formEmail" required autofocus>				
				</div>
			</div>
			<div class="form-group">
				<div class="d-flex">
				   <label>User Role</label>
				</div>
				<div class="input-group input-group--inline {{ $errors->has('password') ? ' has-error' : '' }}">
				   <div class="input-group-addon">
					  <i class="material-icons">lock_outline</i>
				   </div>
				   <select class="form-control role" name="role" id="formRole" required autofocus>
						@foreach($roles as $role)
							<option value="{{$role->id}}">{{$role->name}}</option>
						@endforeach
					</select>
				</div>
			</div>						
			<div class="container-fluid">
				<input type="submit" class="col-md-5 btn btn-success text-center" value="Update">
				<div class="col-md-2"></div>
				<button type="button" class="col-md-5 col btn btn-warning text-center" data-dismiss="modal">Close</button>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>
@endsection