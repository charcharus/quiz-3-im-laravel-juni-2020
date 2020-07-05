@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">

						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Artikel</h3>									
                                </div>
                                <form action="/artikel/create">
                                    <button type="submit" class="btn btn-primary">Create Article</button>
                                </form><br>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Judul</th>
												<th>Slug</th>
												<th>Tag</th>
												<th>Penulis</th>
                                                <th>Action</th>
                                                <th></th>
											</tr>
										</thead>
										<tbody>
											@foreach($artikel as $artikel)
												<tr>
													<td><a href="/artikel/{{$artikel->id}}/detail">{{$artikel->judul}}</td>
													<td>{{$artikel->slug}}</td>
													<td>{{$artikel->tag}}</td>
													<td>{{$artikel->user->name}}</a></td>
													<td><a href="/artikel/{{$artikel->id}}/edit" class="btn btn-warning btn-xs">Edit</a></td>
													<td><a href="/artikel/{{$artikel->id}}/delete" class="btn btn-danger btn-xs delete" artikel-id="{{$artikel->id}}">Delete</a></td>
												</tr>
												@endforeach
										</tbody>
									</table>
								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>           

@endsection

@push('scripts')

<script src="{{asset('/sbadmin2/js/swal.min.js')}}"></script>

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush