@extends('main')
@section('content')

    <div class="btn-group">
        <a  href="/" class="btn btn-secondary btn-sm dropdown-toggle" type="button">
            Index
        </a>
    </div>
    <div class="btn-group">
        <button class="btn btn-secondary btn-sm" type="button">
           File Upload
        </button>
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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
