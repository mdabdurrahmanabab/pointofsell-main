@extends('layouts.admin')
@section('content')
<section style="background-color: #D6EFC7; margin-top:20px;">
    <div class="row">
        <div class="col-md-9">
            <h2 class="text-muted">Insert Catagory</h2>
            @include('common.formerror')
        <form action="{{route('catagory.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Catagory Name</label>
                <input type="text" name="name" class="form-control @error('name', 'post') is-invalid @enderror" value="{{ old('name') }}">
            </div>
            
            <div class="form-group">
                <label for="description">Catagory Description</label>
                <textarea name="description" class="form-control @error('description', 'post') is-invalid @enderror">{{ old('description') }}</textarea>
            </div>


            <div class="row border p-2 m-1">
                <div class="col-md-7">
                <label for="icon">Catagory Icon</label>
                <input type="file" name="icon" accept="image/jpeg, image/png, image/jpg" class="form-control @error('icon', 'post') is-invalid @enderror" id="image-input" value="{{ old('icon') }}" onchange="loadFile(event)">
                </div>

                <div class="col-md-5" >
                <img src="https://picsum.photos/200" id="output" class="img-fluid rounded" style="height:150px; width:180px;" alt="">
                </div>
            </div>


            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary mt-2" value="Add">
            </div>
        </form>
        </div>
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>
    </div>
</section>


@endsection