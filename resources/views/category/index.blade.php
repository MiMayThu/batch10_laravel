@extends('template')
 

 @section('content')



<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="mt-lg-5">
          <h2>Categories</h2>
          <table border="1" cellpadding="10" cellspacing="1">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td><a href="{{route('category.edit',$row->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                  <form method="post" action="{{route('category.destroy',$row->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-success" value="Delete">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </h1>


      </div>

    </div>
   

  </div>
  @endsection