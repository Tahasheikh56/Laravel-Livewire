<div>
    @if(session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
<form wire:submit.prevent="addUser">
<div class="mb-3 mt-3">

    <label for="email" class="form-label">name:</label>
    <input type="name" wire:model="name" class="form-control" id="email" placeholder="Enter name" name="email">
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror  
</div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" wire:model="email" class="form-control" id="email" placeholder="Enter email" name="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror    
</div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" wire:model="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    @error('password') <span class="text-danger">{{ $message }}</span> @enderror    
</div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">image:</label>
    <input type="file" wire:model="image" class="form-control" id="email" placeholder="Enter email" name="email">
    @error('image') <span class="text-danger">{{ $message }}</span> @enderror    
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
