@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="groupName" class="col-md-4 col-form-label text-md-end">Group Name</label>

                            <div class="col-md-6">
                                <input id="groupName" type="text" required value="{{ old('groupName') }}" class="form-control @error('groupName') is-invalid @enderror" name="groupName" value="{{ old('groupName') }}" required autocomplete="groupName" autofocus>

                                @error('groupName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" required value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"> Confirm password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="genreId" name="status" class="form-label">Status Mahasiswa</label>
                                <select name="status" class="form-select" required value="{{ old('status') }}" aria-label="Default select example">
                                    <option selected>Select Here</option>
                                    <option name="status" value="1">Binusian</option>
                                    <option name="status" value="2">Non-Binusian</option>
                                  </select>
                            </div>
                        </div>
{{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

                        <div class="row mb-3">
                            <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('fullname') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" required value="{{ old('fullname') }}" class="form-control @error('fullname') is-invalid @enderror" name="fullname" >

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" required value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="WA" class="col-md-4 col-form-label text-md-end">{{ __('Whatsapp Number') }}</label>

                            <div class="col-md-6">
                                <input id="WA" type="text" required value="{{ old('WA') }}" class="form-control @error('WA') is-invalid @enderror" name="WA">

                                @error('WA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lineId" class="col-md-4 col-form-label text-md-end">{{ __('lineId') }}</label>

                            <div class="col-md-6">
                                <input id="lineId" type="text" required value="{{ old('lineId') }}" class="form-control @error('lineId') is-invalid @enderror" name="lineId">

                                @error('lineId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="github" class="col-md-4 col-form-label text-md-end">{{ __('github id') }}</label>

                            <div class="col-md-6">
                                <input id="github" type="text" required value="{{ old('github') }}" class="form-control @error('github') is-invalid @enderror" name="github">

                                @error('github')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthPlace" class="col-md-4 col-form-label text-md-end">{{ __('Birth Place') }}</label>

                            <div class="col-md-6">
                                <input id="birthPlace" type="text" required value="{{ old('birthPlace') }}" class="form-control @error('birthPlace') is-invalid @enderror" name="birthPlace">

                                @error('birthPlace')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthDate" class="col-md-4 col-form-label text-md-end">{{ __('birthDate') }}</label>

                            <div class="col-md-6">
                                <input id="birthDate" type="date" required value="{{ old('birthDate') }}" class="form-control @error('birthDate') is-invalid @enderror" name="birthDate">

                                @error('birthDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="CV" class="col-md-4 col-form-label text-md-end">{{ __('Upload CV') }}</label>

                            <div class="col-md-6">
                                <input id="CV" type="file" required value="{{ old('CV') }}" class="form-control @error('CV') is-invalid @enderror" name="CV">

                                @error('CV')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="IdCard" class="col-md-4 col-form-label text-md-end">{{ __('Id Card') }}</label>

                            <div class="col-md-6">
                                <input id="IdCard" type="file" required value="{{ old('IdCard') }}" class="form-control @error('IdCard') is-invalid @enderror" name="IdCard">

                                @error('IdCard')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
