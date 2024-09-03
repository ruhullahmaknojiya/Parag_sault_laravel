@extends('frontend.layout.app')

@section('content')
    <section class="page-start-banner">
        <div class="container">
            <h2 class="title">ContactUs</h2>
        </div>
    </section>



    <section class="checkout pt-96 pb-48">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-48 mb-xl-0">
                    <div class="heading">
                        <h4>ContactUs Detail</h4>
                    </div>
                    <div class="design-block shipping">
                        <form method="POST" action="{{ route('contactus.insert') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="_firstname" name="name"
                                            placeholder="Enter Your Name">
                                    </div>
                                    @error('name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="_email" name="email"
                                            placeholder="Enter Your Email">
                                    </div>
                                    @error('email')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="_phone" name="mobile_number"
                                            placeholder="Enter Your Mobile Number">
                                    </div>
                                    @error('mobile_number')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    @if (\request('productName'))
                                    
                                        <input type="text" class="form-control" id="product_name" name="product_name"
                                            value="{{ $productName }}" readonly>
                                    @else
                                      
                                        <input type="text" class="form-control" id="product_name" name="product_name">
                                            @endif
                                        @error('product_name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                </div>
                             
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="state" name="state"
                                            placeholder="Enter Your State">
                                    </div>
                                    @error('state')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Enter Your City">
                                    </div>
                                    @error('city')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                </div>
                                
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Your Address">{{ old('address') }}</textarea>

                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Enter Your Message">{{ old('message') }}</textarea>

                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <strong>ReCaptcha:</strong>
                                            {{--                                            @dd(env('GOOGLE_RECAPTCHA_KEY')); --}}
                                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                                            </div>
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span
                                                    class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script type="text/javascript">
        $('#contactUSForm').submit(function(event) {

            event.preventDefault();

            grecaptcha.ready(function() {

                grecaptcha.execute("{{ env('6LdcVGwoAAAAAGmEQKpwJ_xyXMIDEupvcKAtjdIs') }}", {
                    action: 'subscribe_newsletter'
                }).then(function(token) {

                    $('#contactUSForm').prepend('<input type="hidden" name="token" value="' +
                        token + '">');

                    $('#contactUSForm').unbind('submit').submit();
                    // alert('ddd');
                });
            });
        });
    </script>
@endsection
