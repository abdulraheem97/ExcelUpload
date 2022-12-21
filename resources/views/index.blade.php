@extends('main')
@section('content')

    <div class="btn-group">
        <a  href="/" class="btn btn-primary btn-sm" type="button">
            Index
        </a>
    </div>
    <div class="btn-group">
        <a href="/fileUpload" class="btn btn-primary btn-sm" type="button">
           File Upload
        </a>
    </div>
    <div class="pt-0 mt-0">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">File Name</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($files as $file)
            <tr>
                <th scope="row">{{$file->name}}</th>
                <td><a href="{{url('/viewFile/'.$file->id)}}" class="btn btn-primary">View File</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
