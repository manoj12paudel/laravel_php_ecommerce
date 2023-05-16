@extends('front.layout.layout')


@section('content')

<div class="span9">
	<ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
  </ul>
  <h3> Login</h3>
  <div class="well">
  	@if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach   
      </div>
    @endif
  	<form class="form-horizontal" method="post" action="{{route('loginCheck')}}">
  		@csrf
			<div class="control-group">
				<label class="control-label" for="input_email">Email <sup>*</sup></label>
				<div class="controls">
				  <input type="text" name="email" id="input_email" placeholder="Email">
				</div>
		  </div>

			<div class="control-group">
				<label class="control-label" for="password">Password <sup>*</sup></label>
				<div class="controls">
				  <input type="password" name="password" id="password" placeholder="*******">
				</div>
		  </div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" value="Login"> 
				</div>
		  </div>

  	</form>
  </div>
  <h3> Registration</h3>
  <div class="well">
  	<form class="form-horizontal" method="post" action="{{route('user_store')}}">
  		@csrf
  		<div class="control-group">
				<label class="control-label" for="inputFname1" required>First name <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="inputFname1" name="first_name" placeholder="First Name">
				</div>
		 	</div>

		 	<div class="control-group">
				<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="inputLnam"  name="last_name" placeholder="Last Name" required>
				</div>
		 	</div>

			<div class="control-group">
				<label class="control-label"  for="input_email">Email <sup>*</sup></label>
				<div class="controls" required>
				  <input type="text" id="input_email" name="email" placeholder="Email">
				</div>
		  </div>

			<div class="control-group">
				<label class="control-label" for="password">Password <sup>*</sup></label>
				<div class="controls" required>
				  <input type="password" name="password" id="password" placeholder="*******">
				</div>
		  </div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" value="Submit"> 
				</div>
		  </div>

  	</form>
  </div>

</div>

@endsection