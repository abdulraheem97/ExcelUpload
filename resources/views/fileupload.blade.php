@extends('main')
@section('content')
<form class="row g-3" action="{{url('/fileUpload')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">File</label>
            <input type="file" required name="file" class="form-control" id="inputPassword2" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" >
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">File Upload</button>
        </div>
</form>
@endsection
