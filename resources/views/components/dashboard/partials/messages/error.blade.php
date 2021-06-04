@if (session('errorMessage'))

    <div class="alert alert-custom alert-light-primary fade show mb-5" role="alert">
        <div class="alert-icon"><i class="la la-check"></i></div>
        <div class="alert-text"> {{ session('errorMessage') }}</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="نزدیک">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>
    </div>

@endif
