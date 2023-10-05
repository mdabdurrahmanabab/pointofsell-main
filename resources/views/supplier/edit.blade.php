@extends('layouts.admin')
@section('content')
<section style="background-color: #D6EFC7; margin-top:20px;">
    <div class="row">
        <div class="col-md-9">
            <h2 class="text-muted mt-1">Edit Supplier</h2>
            @include('common.formerror')
            <form action="{{route('supplier.update',$supplier->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="name">Supplier Name</label>
                    <input type="text" name="name" class="form-control @error('name', 'post') is-invalid @enderror" value="{{ $supplier->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Supplier Email</label>
                    <input name="email" class="form-control @error('email', 'post') is-invalid @enderror" value="{{ $supplier->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Supplier Phone</label>
                    <input type="text" name="phone" class="form-control @error('phone', 'post') is-invalid @enderror" value="{{ $supplier->phone }}">
                </div>
                <div class="form-group">
                    <label for="phone">Supplier Address</label>
                    <input type="text" name="address" class="form-control @error('address', 'post') is-invalid @enderror" value="{{ $supplier->address }}">
                </div>
            
                <div class="form-group">
                    <label for="phone">Option1</label>
                    <input type="text" name="option1" class="form-control @error('option1', 'post') is-invalid @enderror" value="{{ $supplier->option1 }}">
                </div>
                <div class="form-group">
                    <label for="phone">Option2</label>
                    <input type="text" name="option2" class="form-control @error('option2', 'post') is-invalid @enderror" value="{{ $supplier->option2 }}">
                </div>
                <div class="form-group">
                    <label for="phone">Option3</label>
                    <input type="text" name="option3" class="form-control @error('option3', 'post') is-invalid @enderror" value="{{ $supplier->option3 }}">
                </div>
            
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="">Select</option>
                        <option class="@error('status', 'post') is-invalid @enderror" value="1" {{$supplier->status==1?'selected':''}}>Active</option>
                        <option class="@error('status', 'post') is-invalid @enderror" value="0" {{$supplier->status==0?'selected':''}}>Deactive</option>
                    </select>
            
                </div>
                <div class="form-group mb-2">
                    <input type="submit" name="submit" class="btn btn-primary mt-2" value="Update">
                </div>
            
            </form>
            
        </div>
        <div class="col-md-3 p-2">
            @include('layouts.sidebar')
        </div>
    </div>
</section>
@endsection