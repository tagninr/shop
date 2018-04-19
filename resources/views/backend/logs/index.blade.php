@extends('backend.layout.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <table id="logs" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Keyword</th>
                            <th>Count</th>
                            <th>IP</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($logs as $log)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ json_decode($log->properties)->{'keyword'} }}</td>
                                <td><span class="label label-sm label-success">{{ $log->count }}</span></td>
                                <td><span class="label label-sm label-info">{{ json_decode($log->properties)->{'ip'} }}</span></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <script>
        $(function () {
            $('#logs').dataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endpush
