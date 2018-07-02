@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Create Role</h1></div>

                <div class="panel-body">
					<form action="{{ route('create-role') }}" method="POST" id="submit">
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
						<div class="form-group">
							<label>Name</label>
							<div class="input-group input-group--inline">
								<div class="input-group-addon">
									<i class="material-icons">account_circle</i>
								</div>
								<input type="text" class="form-control name" name="name" value="{{ old('name') }}" required autofocus>				
							</div>
						</div>						
						<div class="text-center">
							<input type="submit" class="btn btn-primary" value="Create">
						</div>
					</form>				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
