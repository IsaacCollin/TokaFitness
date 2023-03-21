<div class="container py-5 bg-light">
  <div class="row">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form method="post" enctype="multipart/form-data">
      @csrf
      <div class="col-md-9">
        <div class="row mt-3">

          <div class="col-md-6">
            <label for="post_title">Post Title</label>
            <input type="text" id="post_title" name="post_title" placeholder="Post name" required>
          </div>
          <div class="col-md-6">
            <label for="post_desc">Post Description</label>
            <input id="post_desc" name="post_desc" placeholder="Post Description" required></input>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-6">
            <label for="img_url">Image File</label>
            <input type="file" id="img_url" name="img_url">
          </div>
          <div class="col-md-6">
            <label for="img_alt">Image Description</label>
            <input type="text" id="img_alt" name="img_alt" placeholder="Image Description">
          </div>
        </div>
        <div class="mt-3 ps-1 text-right">
          <button class="btn btn-primary profile-button" type="submit">Create Post</button>
        </div>
      </div>
    </form>
  </div>
</div>
