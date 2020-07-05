@extends('layouts.master')

@section('content')

<div class="main">
		<div class="main-content">
			<div class="container-fluid">
                
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    @foreach($artikel as $artikel)
                    <h5 class="card-title">{{$artikel->judul}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$artikel->slug}}</h6>
                    <p class="card-text">{{$artikel->isi}}</p>
                    <a class="btn btn-success btn-sm">{{$artikel->tag}}</a>
                    @endforeach
                </div>
            </div>

            </div>
		</div>
	</div>

@endsection