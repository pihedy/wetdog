{{--

Profile Settings template.

@author Pihe Edmond <pihedy@gmail.com>

--}}

<div class="card">
    <h5 class="card-header py-3">Profile Details</h5>

    <div class="card-body">

        <form method="post">

            <div class="row">

                <div class="col-6">

                    <div class="username-field-container">
                        <label for="username" class="form-label">
                            Username
                        </label>

                        <input type="text" id="username" value="{{ $user['name'] }}" class="form-control" readonly/>
                    </div>

                </div>

                <div class="col-6">

                    <div class="email-field-container">
                        <label for="email" class="form-label">
                            E-mail
                        </label>

                        <input type="email" id="email" value="{{ $user['email'] }}" class="form-control" readonly/>
                    </div>

                </div>

            </div>

        </form>

    </div>

</div>
