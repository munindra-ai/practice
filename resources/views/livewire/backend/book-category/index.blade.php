<div>
    @include('livewire.backend.book-category.modal-form')
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-flex mb-2">
                <h1>Book List</h1>
                <div class="ml-auto">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddBookModal">
                        Add new
                      </button>
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
                @forelse($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->description}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
                <tr>
                    <td colspan="4" class="text-center">No Books found</td>
                </tr>
            </tbody>
        </table>
        <div>
           {{ $books->links() }}
        </div>
    </div>
</div>

