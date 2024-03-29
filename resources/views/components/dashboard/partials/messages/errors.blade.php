@if ($errors->any())

    @foreach($errors->all() as $error)
        <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5"
             role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text"> {{ $error  }}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert"
                        aria-label="نزدیک">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    @endforeach

@endif
