<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="{{ url('../assets') }}/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ url('assets') }}/css/signin.css" rel="stylesheet">
    <script src="{{ url('assets') }}/js/jquery.js"></script>
    <script src="{{ url('assets') }}/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <main class="form-signin">

        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="container-fluid">
                <div class="d-flex bd-highlight mb-3">
                    <button type="button" class="btn align-self-center me-4">
                        <i data-feather="chevron-left"></i>
                    </button>
                    <div class="pt-1 mx-auto">
                        <h2 class="text-center">Form Register</h2>
                    </div>
                </div>
                @if($errors->any())
                    <script>
                        $(document).ready(() => {
                            $('#msg-modal h5').text("Ops!")
                            $('#msg-modal p').text("{{ $errors->first() }}")
                            $('#msg-modal a').hide()
                            $('#msg-modal button').show()
                            $('#msg-modal').modal('show')
                        })
                    </script>
                @endif
                @if(session('berhasil'))
                    <script>
                        $(document).ready(() => {
                            $('#msg-modal h5').text("Congratulations!")
                            $('#msg-modal p').text("Registration is successful")
                            $('#msg-modal button').hide()
                            $('#msg-modal a').show()
                            $('#msg-modal').modal('show')
                        })
                    </script>
                @endif

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" type="text"
                                class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                value="{{ old('last_name') }}">

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"> Email</label>
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>


                    </div>
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
        </form>
    </main>

    <div class="modal" id="msg-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h5>Title</h5>
                    <p>Msg.</p>
                    <a href="{{ route('login') }}" class="btn btn-success w-100" style="display: none;">Login</a>
                    <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal" style="display: none;">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="{{ url('../assets') }}/js/dashboard.js"></script>

</body>

</html>
