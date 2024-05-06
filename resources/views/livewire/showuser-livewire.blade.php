<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <!-- user-table.blade.php -->
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal_{{ $user->id }}">
                                Edit
                            </button>
                        </td>
                </tr>

<livewire:EdituserLivewire :id="$user->id"/>

                @endforeach
            </tbody>
        </table>
    </div>

</div>