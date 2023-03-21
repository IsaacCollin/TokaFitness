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
        <form action="{{ route('register.custom') }}" method="POST" id="regForm">
          @csrf
          <h1 class="h3 mb-3 fw-normal">Please register here</h1>
          <div class="form-floating">
            <input type="text" name="name" id="inputName" class="form-control" placeholder="Full name" autofocus>
            <label for="inputName">Name</label>
          </div>
          <div class="form-floating">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
            <label for="inputEmail">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
            <label for="inputPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
          <div>Do you have an account?
            <a class="small" href="{{ url('login') }}">Sign In</a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
