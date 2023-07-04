<div id="modalRegister" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Register A New User</p>
            <button onclick="closeModal()" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <form method="POST" action="{{ route('admin.userManagement.store') }}">
                @csrf
                @method('POST')

                <div class="field">
                    <div class="control has-icons-left">
                        <input class="input @error('name') is-danger @enderror" type="text" name="name" placeholder="Name" required>
                        <span class="icon is-small is-left">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                    @error('name')
                    <p class="help is-danger" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input @error('email') is-danger @enderror" type="email" name="email" placeholder="Email" required>
                        <span class="icon is-small is-left">
                          <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                    @error('email')
                    <p class="help is-danger" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input @error('password') is-danger @enderror" type="password" name="password" placeholder="Password" pattern=".{12,}" required>
                        <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
        </span>
                    </p>
                    <p class="help">Password must be at least 12 characters long, contain at least one lowercase letter, one uppercase letter, one number, and one special character.</p>
                    @error('password')
                    <p class="help is-danger" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input @error('password') is-danger @enderror" type="password" name="password_confirmation" placeholder="Confirm Password" pattern=".{12,}" required>
                        <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
        </span>
                    </p>
                    @error('password')
                    <p class="help is-danger" role="alert">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="field">
                    <label>
                        <p class="label">Role</p>
                        <div class="select">
                            <select name="role_id">
                                <option value="0" selected>User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                    </label>
                </div>
                <hr>
                <div class="field">
                    <p class="control">
                        <button type="submit" class="button is-success">Register</button>
                        <a type="cancel" onclick="closeModal()" class="button">Cancel</a>
                    </p>
                </div>
            </form>
        </section>
    </div>
</div>