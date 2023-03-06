<div class="container py-5 bg-light">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-5 fw-normal">Healthy Lifestyle Advice</h1>
    </div>
    <div class="album">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($fitnessAdvice as $advice)
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <img class="bd-placeholder-img card-img-top"
                                src="{{ asset('/img/fitness/' . $advice->thumbnail_img) }}" alt="{{ $advice->img_ilt }}"
                                width="100%" height="225">
                            <div class="card-body d-flex flex-column">
                                <p class="card-text">{{ $advice->desc }}</p>
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-primary"
                                            data-toggle="modal" data-target="#modal{{ $advice->id }}">View</button>
                                        <div class="modal fade" id="modal{{ $advice->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalLongTitle">
                                                            {{ $advice->fitness_title }}</h5>
                                                        <button class="btn btn-sm btn-outline-primary"
                                                            aria-label="Close" type="button" class="close"
                                                            data-dismiss="modal">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $advice->fitness_content }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-outline-primary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-muted"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
