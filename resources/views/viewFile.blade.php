@extends('main')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
                <thead>
                <tr>
                    @foreach($file_data as $data)
                        <th>{!! $data->name !!}</th>
                    @endforeach

                </tr>
                </thead>
                <tbody>
                @php
                    if(count($file_data)>0)
                {
                        $colcount=count($file_data);
                        $rowcount=count($file_data[0]->columnValues);
                }
                @endphp
                @for($a=0;$a<$rowcount;$a++)
                    <tr>
                        @for($b=0;$b<$colcount;$b++)
                            <td>{!! $file_data[$b]->columnValues[$a]->name !!}</td>
                        @endfor

                    </tr>
                @endfor
                </tbody>

            </table>
        </div>
    </div>




@endsection
