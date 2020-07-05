@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
<h1>Put on Your Article</h1>

<form action="/artikel">
    <button type="submit"class="btn btn-primary">Back to Article List</button>
</form><br>

<form action='/artikel' method="post">
{{ csrf_field() }}

    <div class="form-group">
		<label for="">Judul</label>
		<input type="text" class="form-control" name="judul">
    </div>
    
    <div class="form-group">
		<label for="">Isi</label>
		<input type="text" class="form-control" name="isi">
    </div>
    
    <div class="form-group">
		<label for="">Slug</label>
		<input type="text" class="form-control" name="slug">
    </div>
    
    <div class="form-group">
		<label for="">Tag</label>
		<input type="text" class="form-control" name="tag">
    </div>
    
    <div class="form-group">
				<label for="">ID Penulis</label>
				<input type="text" class="form-control" name="user_id" placeholder="Isi id penulis yang sudah terdaftar">
	</div>

    <div class="form-group">
		<input type="submit" class="btn btn-primary" value="Save">
	</div>


</form>
        </div>
		</div>
	</div>

@endsection