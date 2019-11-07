@extends('template')

@section('content')

<div class="container">
	<h1 class="mt-4">Post Create Form</h1>

			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			
			<form method="post" action="{{route('category.store')}}">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<input type="submit" name="btnsubmit" value="Ok!" class="btn btn-danger" required="required">
			</form>
</div>
</div>
</div>

@endsection