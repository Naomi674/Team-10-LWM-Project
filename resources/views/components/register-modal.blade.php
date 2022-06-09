<div id="modalRegister" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Register A New User</p>
            <button onclick="closeModal()" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <form method="POST" action="{{ route('userManagement.createUser') }}">
                @csrf
                @method('POST')

                <div class="field">
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="name" placeholder="Name">
                        <span class="icon is-small is-left">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="email" name="email" placeholder="Email">
                        <span class="icon is-small is-left">
                          <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" name="password" placeholder="Password">
                        <span class="icon is-small is-left">
                          <i class="fas fa-lock"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" name="password_confirmation" placeholder="Confirm Password">
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