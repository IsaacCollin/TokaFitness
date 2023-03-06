<div class="container py-5 bg-light">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create a Post?</h5>
                    <p class="card-text">Want to ask a question or just share a fitness plan well you can post it here.
                    </p>
                    <a href="{{ 'social-post' }}" class="btn btn-primary">Create Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            @foreach ($socialData as $social)
                <div class="card mb-3">
                    <img src="{{ asset('storage/' . $social->img_url) }}" class="card-img-top"
                        alt="{{ $social->img_alt }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $social->post_title }}</h5>
                        <p class="card-text">{{ $social->post_desc }}</p>
                        <p class="card-text d-flex justify-content-between">
                            <small class="text-muted">{{ $social->name }}</small>
                            <small class="text-muted">{{ $social->updated_at->diffForHumans() }}</small>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
