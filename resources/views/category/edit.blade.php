@extends('template')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<h1 class="mt-4">Category Edit Form</h1>

		<form method="post" action="{{route('category.update',$category->id)}}">
				@csrf
				@method('PUT')
			<div class="form-group">
				<label>Name:</label>
			<input type="text" name="name" value="">
			</div>
			<input type="submit" name="submit" value="Update">
			</form>
		</div>
	</div>
	</div>

@endsection