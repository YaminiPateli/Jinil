@extends(backendView('layouts.auth'))

@section('title', 'Signup')

@section('content')
<div class="container-xxl">

    <div class="row g-0">
        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
            <div style="max-width: 25rem;">
                <div class="text-center mb-5">
                    <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                </div>
                <div class="mb-5">
                    <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                </div>
                <!-- Image block -->
                <div class="">
                    <img src="{!! asset('public/backend/dist/assets/images/login-img.svg') !!}" alt="login-img">
                </div>
            </div>
        </div>

        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                <!-- Form -->
                <form class="row g-1 p-3 p-md-4">
                    <div class="col-12 text-center mb-5">
                        <h1>Create your account</h1>
                        <span>Free access to our dashboard.</span>
                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <label class="form-label">Full name</label>
                            <input type="email" class="form-control form-control-lg" placeholder="John">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <label class="form-label">&nbsp;</label>
                            <input type="email" class="form-control form-control-lg" placeholder="Parker">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-2">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control form-control-lg" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-2">
                            <label class="form-label">Password</label>
                            <input type="email" class="form-control form-control-lg"
                                placeholder="8+ characters required">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-2">
                            <label class="form-label">Confirm password</label>
                            <input type="email" class="form-control form-control-lg"
                                placeholder="8+ characters required">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I accept the <a href="#" title="Terms and Conditions" class="text-secondary">Terms and
                                    Conditions</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <a href="{!! backendRoutePut('auth-signin') !!}"
                            class="btn btn-lg btn-block btn-light lift text-uppercase" alt="SIGNUP">SIGN UP</a>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <span>Already have an account? <a href="{!! backendRoutePut('auth-signin') !!}" title="Sign in"
                                class="text-secondary">Sign in here</a></span>
                    </div>
                </form>
                <!-- End Form -->

            </div>
        </div>
    </div> <!-- End Row -->

</div>
@endsection

@push('styles')
@endpush

@push('custom_styles')
@endpush

@push('scripts')
@endpush

@push('custom_scripts')
@endpush

@push('modals')
@endpush