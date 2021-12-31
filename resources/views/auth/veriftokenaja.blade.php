<!DOCTYPE html>
<html>
<head>
<title>How to Implement OTP SMS Mobile Verification in PHP with TextLocal</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

    @if (session('error'))
        <div class= "alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>

    @endif
	<<div class="error"></div>
    <div class="success"></div>
    <form method="POST" action="{{ route('postveriftoken') }}">
        @csrf

        <div class="form-row">
            <label>OTP is sent to Your Email</label>
        </div>

        <div class="form-row">
            <input type="text" name="activation_token" id="activation_token" class="form-input" placeholder="Enter the OTP">
        </div>
        <div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
        <div class="row">
           <button type="submit" class="btn btn-primary">
               {{ _('submit') }}
           </button>
        </div>
    </form>

	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>
</body>
</html>
