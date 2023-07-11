@extends('layouts.app')

@section('title', 'DSS - Weighted Product')

@push('style')
<!-- CSS Libraries -->
{{-- <link rel="stylesheet"
        href="assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css"> --}}

<link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Weighted Product</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Atribut</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th class="text-center">Alternative</th>
                                            @isset($criterias)
                                                @foreach ($criterias as $value)
                                                    <th class="text-center">{{ $value->criteria }}</th>
                                                @endforeach    
                                            @endisset
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($alternatives)
                                        @php $i = 1; @endphp
                                        @foreach ($alternatives as $value)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ $value['alternative'] }}</td>
                                            @foreach ($value['criterias'] as $crt)
                                                <td class="text-center">{{ $crt['attribute'] }}</td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Normalisasi Bobot Kriteria</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            @isset($criterias)
                                                @foreach ($criterias as $value)
                                                    <th class="text-center">{{ $value->criteria }}</th>
                                                @endforeach    
                                            @endisset
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($criterias)
                                        <tr>
                                            @foreach ($criterias as $value)
                                                <td class="text-center">{{ $value->weight }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            @foreach ($criterias as $value)
                                                <td class="text-center">{{ $value->normalization }}</td>
                                            @endforeach
                                        </tr>
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Hasil</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Rank
                                            </th>
                                            <th class="text-center">Alternative</th>
                                            <th class="text-center">Vector S</th>
                                            <th class="text-center">Vector V</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($alternatives)
                                        @php 
                                            $rank = 1; 
                                            $results = collect($alternatives)->sortByDesc('vector_v');
                                        @endphp
                                        @foreach ($results as $value)
                                        <tr>
                                            <td class="text-center">{{ $rank++ }}</td>
                                            <td class="text-center">{{ $value['alternative'] }}</td>
                                            <td class="text-center">{{ $value['vector_s'] }}</td>
                                            <td class="text-center">{{ $value['vector_v'] }}</td>
                                        </tr>
                                        @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
{{-- <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script> --}}
<script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
{{-- <script src="{{ asset() }}"></script> --}}
{{-- <script src="{{ asset() }}"></script> --}}
<script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

<!-- Page Specific JS File -->
<script type="text/javascript">
    $("#table-atribut").dataTable({
        "columnDefs": [{
            "sortable": false,
            "targets": [3]
        }]
    });
</script>
@endpush