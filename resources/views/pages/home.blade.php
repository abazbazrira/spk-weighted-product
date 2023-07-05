@extends('layouts.app')

@section('title', 'Home')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Home</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Decision Support System</h4>
                </div>
                <div class="card-body">
                    <p>Developed by:</p>
                    <ul>
                        <li>Bazrira Noerfirdiansyah</li>
                        <li>Galih</li>
                        <li>Theofillus</li>
                        <li>Emanuel Bayu</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush