<!-- Modal -->
<div wire:ignore.self class="modal fade" id="AddBookModal" tabindex="-1" role="dialog" aria-labelledby="AddBookModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddBookModalLabel">NEW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form wire:submit.prevent="storeBook">
          <div class="modal-body">
            <div class="mb-3">
              <label>Name</label>
              <input type="text" wire:model="name" name="name" class="form-control">
              @error('name') <small class="text-danger">{{ $message}}</small>
                  
              @enderror
            </div>
            <div class="mb-3">
              <label>Description</label>
              <input type="text" wire:model.defer="description" class="form-control">
              @error('description') <small class="text-danger">{{ $message }}</small>
                
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div>
</div>