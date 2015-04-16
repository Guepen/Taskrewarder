@extends('app')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Hoppsan!</strong> Det verkar som att du skrev in fel uppgifter.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								    @if(preg_match('/password/', $error))
									<li>Du måste ange lösenord</li>
									@else
									<li>{{$error}}</li>
									@endif
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label white">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="E-Mail" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label white">Lösenord</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label class="white">
										<input type="checkbox" name="remember"> Kom ihåg mig
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success">Logga in</button>

								<a class="btn btn-info" href="{{ url('/password/email') }}">Glömt lösenord?</a>
							</div>
						</div>
					</form>


				</div>

@endsection
