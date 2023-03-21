<div class="container rounded bg-light mt-6">
  <div class="row justify-content-center align-self-center">
    <div class="col-md-4 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5">
        <span class="font-weight-bold">{{ $user->name }}</span>
        <span class="text-black-50">{{ $user->email }}</span>
        <span class="font-weight-bold">{{ $user->country }}</span>
      </div>
    </div>
    <div class="col-md-8">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <form class="text-center" method="post">
            @csrf
            <div class="col-md-9">
              <div class="row mt-3">
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <div class="col-md-6"><label>Name<input type="text" class="form-control" name="name"
                      value="{{ $user->name }}"></label></div>
                <div class="col-md-6"><label>Email<input type="text" class="form-control" name="email"
                      value="{{ $user->email }}"></label></div>
                <div class="col-md-6"><label>Phone Number<input type="text" class="form-control" name="phone"
                      placeholder="Phone number" value="{{ $user->phone }}"></label></div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6"><label>Address<input type="text" class="form-control" name="address"
                      placeholder="E.g. 18 London Road" value="{{ $user->address }}"></label></div>
                <div class="col-md-6"><label>City/Town<input type="text" class="form-control" name="city"
                      placeholder="E.g. London" value="{{ $user->city }}"></label></div>
                <div class="col-md-6"><label>Country<input type="text" class="form-control" name="country"
                      placeholder="E.g. England" value="{{ $user->country }}"></label></div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6"><label>Bank Name<input type="text" class="form-control" name="bankname"
                      placeholder="E.g. Lloyds Bank" value="{{ $user->bank_name }}"></label></div>
                <div class="col-md-6"><label>Account Number<input type="text" class="form-control"
                      name="accountnumber" placeholder="E.g. 0000000000000000"
                      value="{{ $user->account_number }}"></label></div>
              </div>
              <div class="mt-3  ps-1 text-right">
                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
