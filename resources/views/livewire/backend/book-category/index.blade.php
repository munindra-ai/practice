@extends('layouts.admin')

@section('content')
    @include('livewire.backend.book-category.modal-form')
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="d-flex mb-2">
                    <h1>Book List</h1>
                    <div class="ml-auto">
                        <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                            data-target="#AddBookModal">Add New</a>
                    </div>
                </div>
            </div>
        </section>


        <div class="white p-3 border rounded">
            <table class="table table-hover table-responsive-sm">
                <tr class="text-uppercase font-poppins">
                    <th>S.NO</th>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Description</th>

                </tr>
                <tbody>
                    <tr>
                        <td colspan="42" class="text-center">No Coupons found</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @push('script')
            <script>
                window.addEventListener('close-modal', event => {
                    $('#AddBookModal').modal('hide');
                });
            </script>
        @endpush
    </div>
@endsection
