{{--
    Login Form template.

    @author Pihe Edmond <pihedy@gmail.com>
--}}

<style>
    html, body {
        height: 100%;
    }

    .form-signin {
        max-width: 330px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .logo-text {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        width: 100%;
        user-select: none;
    }

    .logo-text .main-text {
        font-size: 3.7rem;
        line-height: normal;
    }

    .logo-text .alt-text {
        font-size: 0.7rem;
        text-transform: uppercase;
    }

</style>

<main class="form-signin w-100 m-auto">
    <form
        data-np-autofill-form-type="other"
        data-np-checked="1"
        data-np-watching="1"
        method="POST"
    >

        <div class="logo-text mb-3">
            <span class="main-text">WetDog</span>
            <span class="alt-text">Powered By Pihedy</span>
        </div>

        <div class="form-floating">
            <input
                type="email"
                name="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
                data-np-intersection-state="visible"
            >
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input
                type="password"
                name="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
                data-np-intersection-state="visible"
            >
            <label for="floatingPassword">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

        @csrf
    </form>
</main>
