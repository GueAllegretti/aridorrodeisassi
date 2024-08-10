<div class="js-cookie-consent cookie-consent fixed-bottom bg-dark text-light py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 d-flex align-items-center">
                <p class="text-white fw-lighter fs-6 mb-0 mx-auto text-center">
                    {!! trans('cookie-consent::texts.message') !!}
                </p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-primary rounded-pill me-2 js-cookie-consent-agree">
                    {{ trans('cookie-consent::texts.agree') }}
                </button>
                <button class="btn btn-primary rounded-pill js-cookie-consent-disagree">
                    {{ trans('cookie-consent::texts.disagree') }}
                </button>
            </div>
        </div>
    </div>
</div>