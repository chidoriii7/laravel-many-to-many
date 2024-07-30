@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="header-page d-flex justify-content-between align-items-center mb-5">
        <h1>Crea un nuovo Post</h1>   
        <a href="{{route('admin.posts.index')}}"><button class="btn btn-secondary">Torna alla home</button></a>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>  
    @endif
    
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="post-title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="obbligatorio">
          </div>
          <div class="mb-3">
            <label for="post-content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content"></textarea>
          </div>
          <button class="btn btn-primary">Crea</button>
    </form>

</div>

@endsection