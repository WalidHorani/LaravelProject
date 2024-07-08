@extends("General.master")
@section('Title')
    Confirm Password
@endsection
@section('content')
    <div class="row">
        <div class="col-12 d-flex flex-row justify-content-center align-items-center">
            <div class="col-4 d-flex flex-row justify-content-center align-items-center">
                <img src="data:image/jpeg;base64,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">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex flex-row justify-content-center align-items-center">
            <div class="col-5 d-flex flex-row justify-content-center align-items-center" style="padding : 2vh 2vw; background-color: wheat; border-radius:10px ">
                <form class="col-12">

                    {{-- pargrahp --}}
                    <div class="col-12 d-flex flex-column justify-content-center align-items-start">
                        <div class="col-auto d-flex flex-row justify-content-center align-items-center">
                            <label>
                                @lang('msg.confirm.This is a secure area of the application. Please confirm your password before continuing.')
                            </label>
                        </div>
                    </div>

                    {{-- Password input field --}}
                    <div class="col-12 d-flex flex-column justify-content-center align-items-start">
                        <div class="col-auto d-flex flex-row justify-content-center align-items-center">
                            <label >@lang('msg.Password')</label>
                        </div>
                        <div class="col-12 d-flex flex-row justify-content-center align-items-center">
                            <Input type="password" name="password" style="width:100%" required autocomplete></Input>
                        </div>
                        <div class="col-auto d-flex flex-row justify-content-center align-items-center">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 d-flex flex-row justify-content-center align-items-center" style="margin-top:2vh">

                        {{-- button Confirm --}}
                        <div class="col-6 d-flex flex-row justify-content-center align-items-center" style="padding: 1vh">
                            <div class="col-12 d-flex flex-row justify-content-center align-items-center" >
                                <button class="btn btn-primary" style="width:100%">@lang('msg.confirm.Confirm')</button>
                            </div>
                        </div>


                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
