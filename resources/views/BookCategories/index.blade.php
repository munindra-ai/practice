@extends('layouts.admin')

@section('content')
 
<div>
    <livewire:backend.book-category>
</div>

@endsection

@section('scripts')
<script>
    window.addEventListener('close-modal', event => {
        $('#AddBookModal').modal('hide');
    })
    </script>
@endsection