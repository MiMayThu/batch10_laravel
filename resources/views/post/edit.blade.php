@extends('template')

@section('content')
<div class="container">

	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<h1 class="mt-4">Post Edit Form</h1>

			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
			<form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
			<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" value="{{$post->title}}">	
			</div>
			<div class="form-group">
			<label>Content</label>
			<textarea name="content" class="form-control" >{{$post->body}}</textarea>
			</div>
			<div class="form-group">
			<label>Profile</label><span class="text-danger" >[supported file types:jpeg,png]</span>
			<input type="file" name="photo" class="form-control" value="{{$post->image}}">	
			</div>
			<input type="hidden" name="oldphoto" value="{{$post->image}}">
			<div class="form-group">
				<label>Categories:</label>
				<select name="category" class="form-control">
					<option value="">choose Category</option>
					{-- accpet data and loop --}
					@foreach($categories as $row)
					<option value="{{$row->id}}"
					@if($row->id ==$post->category_id){{'selected'}}

					@endif

						>{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			<input type="submit" name="submit" value="Update">
			</form>
		</div>
	</div>
	</div>

@endsection