<body class="text-center">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <main class="form-auth w-100 h-100 m-auto">
    <div class="container d-flex h-100">
      <div class="form-auth-bg row justify-content-center align-self-center">
        <h1>ToKa Fitness</h1>
        <form method="POST" action="{{ route('login.custom') }}">
          @csrf
          <h3 class="h3 mb-3 fw-normal">Please Login</h3>
          <div class="form-floating">
            <input class="form-control" type="text" placeholder="Email" id="inputEmail" class="form-control"
              name="email" required autofocus>
            <label for="inputEmail">Email address</label>
          </div>
          <div class="form-floating">
            <input class="form-control" type="password" placeholder="Password" id="inputPassword" class="form-control"
              name="password" required>
            <label for="inputPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          <div>Do you need an account?
            <a class="small" href="{{ url('registration') }}">Sign Up</a>
          </div>
        </form>
      </div>
    </div>

  </main>
</body>
