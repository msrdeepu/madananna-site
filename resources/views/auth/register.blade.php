<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Sign-Up Page</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #FFDEE9;
background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);

      font-family: 'Poppins', sans-serif;
    }

    .signup-container {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .signup-card {
      padding: 2rem;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }

    .signup-title {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-primary {
      background-color: #4e73df;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #375cd8;
    }

    .btn-google {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 10px;
      color: #555;
      font-weight: bold;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.5rem;
      margin-bottom: 1rem;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-google img {
      width: 20px;
      margin-right: 8px;
    }

    .btn-google:hover {
      background-color: #f9f9f9;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .divider {
      display: flex;
      align-items: center;
      text-align: center;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid #ddd;
    }

    .divider::before {
      margin-right: 0.5em;
    }

    .divider::after {
      margin-left: 0.5em;
    }

    .login-text {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 14px;
    }

    .login-text a {
      color: #4e73df;
      text-decoration: none;
      font-weight: bold;
    }

    .login-text a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .signup-card {
        padding: 1.5rem;
      }

      .signup-title {
        font-size: 20px;
      }

      .btn-primary,
      .btn-google {
        font-size: 14px;
      }
    }
    
     .gsi-material-button {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -webkit-appearance: none;
  background-color: WHITE;
  background-image: none;
  border: 1px solid #747775;
  -webkit-border-radius: 20px;
  border-radius: 20px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  color: #1f1f1f;
  cursor: pointer;
  font-family: 'Roboto', arial, sans-serif;
  font-size: 14px;
  height: 40px;
  letter-spacing: 0.25px;
  outline: none;
  overflow: hidden;
  padding: 0 12px;
  position: relative;
  text-align: center;
  -webkit-transition: background-color .218s, border-color .218s, box-shadow .218s;
  transition: background-color .218s, border-color .218s, box-shadow .218s;
  vertical-align: middle;
  white-space: nowrap;
  width: auto;
  max-width: 400px;
  min-width: min-content;
}

.gsi-material-button .gsi-material-button-icon {
  height: 20px;
  margin-right: 12px;
  min-width: 20px;
  width: 20px;
}

.gsi-material-button .gsi-material-button-content-wrapper {
  -webkit-align-items: center;
  align-items: center;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  flex-wrap: nowrap;
  height: 100%;
  justify-content: space-between;
  position: relative;
  width: 100%;
}

.gsi-material-button .gsi-material-button-contents {
  -webkit-flex-grow: 1;
  flex-grow: 1;
  font-family: 'Roboto', arial, sans-serif;
  font-weight: 500;
  overflow: hidden;
  text-overflow: ellipsis;
  vertical-align: top;
}

.gsi-material-button .gsi-material-button-state {
  -webkit-transition: opacity .218s;
  transition: opacity .218s;
  bottom: 0;
  left: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.gsi-material-button:disabled {
  cursor: default;
  background-color: #ffffff61;
  border-color: #1f1f1f1f;
}

.gsi-material-button:disabled .gsi-material-button-contents {
  opacity: 38%;
}

.gsi-material-button:disabled .gsi-material-button-icon {
  opacity: 38%;
}

.gsi-material-button:not(:disabled):active .gsi-material-button-state, 
.gsi-material-button:not(:disabled):focus .gsi-material-button-state {
  background-color: #303030;
  opacity: 12%;
}

.gsi-material-button:not(:disabled):hover {
  -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
  box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
}

.gsi-material-button:not(:disabled):hover .gsi-material-button-state {
  background-color: #303030;
  opacity: 8%;
}
  </style>
</head>
<body>

<div class="signup-container">
  <div class="signup-card">
    <h2 class="signup-title">Create Your Free Account</h2>
    
      <div class='d-flex justify-content-center'>
        <a class="gsi-material-button" href="{{ route('googleauth') }}" style='text-decoration:none;'>
  <div class="gsi-material-button-state"></div>
  <div class="gsi-material-button-content-wrapper">
    <div class="gsi-material-button-icon">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
        <path fill="none" d="M0 0h48v48H0z"></path>
      </svg>
    </div>
    <span class="gsi-material-button-contents">Continue with Google</span>
    <span style="display: none;">Continue with Google</span>
  </div>
</a>
  </div>
    
    <div class="divider my-3">OR</div>
    
    <form method="POST" action="{{ route('register') }}">
           @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter your name">
             <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name='email' value="{{ old('email') }}" id="email" placeholder="Enter email">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name='password' value="{{ old('password') }}" id="password" placeholder="Enter password">
         <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <div class="mb-3">
        <label for="confirm-password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation" value="{{ old('Confirm Password') }}" required autocomplete="new-password" id="confirm-password" placeholder="Confirm password">
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>

      <button type="submit" class="btn btn-primary w-100">Sign Up</button>
    </form>
    
    <div class="login-text">
      Already have an account? <a href="/login">Log in</a>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
