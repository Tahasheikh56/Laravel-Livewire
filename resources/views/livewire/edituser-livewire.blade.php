<!-- user-modal.blade.php -->
<div>
    <div class="modal fade" id="myModal_{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateUser">
                        <div class="container mt-4">
                            <!-- First Column -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control" wire:model="name" placeholder="Enter Name">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Email</label>
                                <input type="email" class="form-control" wire:model="email" placeholder="Enter Email">
                            </div>
                            <input type="hidden" wire:model="userId" value="{{ $p->id }}">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <!-- You can add additional buttons here -->
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
