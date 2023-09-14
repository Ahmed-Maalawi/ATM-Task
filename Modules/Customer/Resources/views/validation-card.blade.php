@extends('layouts.main')

@section('user-content')
    <div class="col-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Validation Client Card</h5>
            </div>
            <div class="card-body">
                <div class="card-wrapper mb-3"></div>

                <div class="form-container active">
                    <form action="{{ route('card.verify') }}" method="POST" id="card-form-elem" autocomplete="off">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="card-number-input" class="form-label">Card Number</label>
                            <input class="form-control" placeholder="Card number" type="text" name="card_number" id="card-number-input" required>
                            @error('card_number')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="card-pin-input" class="form-label">Card Pin</label>
                            <input name="pin_number" class="form-control" placeholder="Card Pin" type="password" id="card-pin-input" required>
                            @error('pin_number')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="card-name-input" class="form-label">Card Holder</label>
                            <input class="form-control" placeholder="Full name" type="text" id="card-name-input" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="card-expiry-input" class="form-label">Expiry</label>
                                    <input class="form-control" placeholder="MM/YY" type="tel" id="card-expiry-input">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="card-cvc-input" class="form-label">CVC</label>
                                    <input class="form-control" placeholder="CVC" type="number" id="card-cvc-input">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger w-100" type="submit">Verify Now</button>
                    </form>
                </div>
            </div>
            @error('validationError')
                <div class="alert alert-danger alert-border-left alert-dismissible fade show mb-xl-0 mt-2" role="alert">
                    <i class="ri-error-warning-line me-3 align-middle fs-16"></i><strong>Danger</strong>
                    - {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
@endsection

@section('script')
    <!-- Vector map-->
    <script src="{{ asset('assets/libs/jsvectormap/maps/us-merc-en.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('assets/js/pages/form-input-spin.init.js') }}"></script>
    <script src="{{ asset('assets/libs/card/card.js') }}"></script>
    <!-- Widget init -->
    <script src="{{ asset('assets/js/pages/widgets.init.js') }}"></script>
@endsection
