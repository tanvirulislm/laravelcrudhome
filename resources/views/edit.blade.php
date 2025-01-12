@extends('layout')

@section('content')
<div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-body">
                <h3 class="text-center">Edit Data</h3>
                <form role="form" class="text-start" action="{{route('update', $student->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Name</label>
                    <input type="name" class="form-control" name="name" value="{{$student->name}}">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Class</label>
                    <input type="name" class="form-control" name="class_name" value="{{$student->class_name}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$student->email}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Phone</label>
                    <input type="phone" class="form-control" name="phone" value="{{$student->phone}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{$student->address}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="file" class="form-control" name="image" value="{{$student->image}}">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2 btn-lg">Edit Data</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif

@endsection