@extends('template/header')


@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Laundry</h3>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formInputModal">
            Tambah Data
        </button>
        <div style="margin-top:20px">
        @if(session('success'))
        <div class="alert alert-success" role="alert" id="success-alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
        <span aria-hidden="true">&times;</span>
        </div>
        @endif 
        
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        </div>

    <div class="card-footer">
        Footer
    </div>
</div>
@endsection
@include ('member/form')
@push('script')
<script>

</script>
@endpush


