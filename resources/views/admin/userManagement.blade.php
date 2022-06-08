@extends('Components.layout')

@section('content')
    <script>
        /**
         * Opens a model by it's id
         * @param id the id of the modal that should be opened
         */
        function openModal(id) {
            const element = document.querySelector('#modal' + id);
            element.classList.add('is-active');
        }

        /**
         * Closes the open modal element
         */
        function closeModal() {
            const element = document.querySelector('.modal' && '.is-active');
            element.classList.remove('is-active');
        }
    </script>

    <x-register-modal />

    <section class="section">
        <div class="level-right">
            <a onclick="openModal('Register')" class="button is-success">New User</a>
        </div>

        <table class="table is-hoverable is-fullwidth">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mail</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Role</th>
                <th></th>
            </tr>

            {{--Show Users in table--}}
            @foreach($users as $user)
                <tr class="has-icons-right">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>{{ $user->role_id == 0 ? "User" : 'Admin' }}</td>
                    <td>
                        <button onclick="openModal({{ $user->id }})">
                            <span class="icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </span>
                        </button>
                    </td>
                </tr>

                {{-- Edit User Modal --}}
                <div id="modal{{ $user->id }}" class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Edit User</p>
                            <button onclick="closeModal()" class="delete" aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">
                            <form method="POST" action="{{ route('admin.userManagement.update', $user) }}" id="userEdit">
                                @csrf
                                @method('PUT')

                                <div class="field">
                                    <label class="label" for="name">Name</label>
                                    <div class="control has-icons-left">
                                        <input class="input" id="name" type="text" name="name" value="{{ $user->name }}">
                                        <span class="icon is-small is-left">
                                            <i class="fa-solid fa-id-card"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Email</label>
                                    <div class="control has-icons-left">
                                        <input class="input" type="email" name="email" value="{{ $user->email }}">
                                        <span class="icon is-small is-left">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Password</label>
                                    <p class="control has-icons-left">
                                        <input class="input" type="password" name="password" placeholder="{{ $user->password }}">
                                        <span class="icon is-small is-left">
                                          <i class="fas fa-lock"></i>
                                        </span>
                                    </p>
                                </div>
                                <div class="field">
                                    <label>
                                        <p class="label">Role</p>
                                        <div class="select">
                                            <select name="role_id">
                                                <option value="1" {{ $user->role_id === 1 ? 'selected' : '' }}>Admin</option>
                                                <option value="0" {{ $user->role_id === 0 ? 'selected' : '' }}>User</option>
                                            </select>
                                        </div>
                                    </label>
                                </div>
                                <hr>
                                <div class="level">
                                    <div class="level-left">
                                        <button type="submit" class="button is-success mr-3">Save Changes</button>
                                        <a type="cancel" onclick="closeModal()" class="button">Cancel</a>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <form method="POST" action="{{ route('admin.userManagement.destroy', $user) }}" class="level-right">
                                @csrf
                                @method('DELETE')
                                <button class="button is-danger">Delete User</button>
                            </form>
                        </section>
                    </div>
                </div>
            @endforeach
        </table>
    </section>
@endsection
