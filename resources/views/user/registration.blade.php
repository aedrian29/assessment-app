<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form id='registrationForm'>
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"  value="{{ old('name') }}" required>
        <span class="text-danger"></span>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"  value="{{ old('email') }}" required>
        <span class="text-danger"></span>
        <br><br>
        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}">
        <span class="text-danger"></span>
        <br><br>
        <label for="address1">Address 1:</label>
        <input type="text" id="address1" name="address1"  value="{{ old('address1') }}" required>
        <span class="text-danger"></span>
        <br><br>
        <label for="address2">Address 2:</label>
        <input type="text" id="address2" name="address2"  value="{{ old('address2') }}">
        <span class="text-danger"></span>
        <br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required  value="{{ old('city') }}">
        <span class="text-danger"></span>
        <br><br>
        <label for="state">State/Province:</label>
        <input type="text" id="state" name="state" value="{{ old('state') }}">
        <span class="text-danger"></span>
        <br><br>
        <label for="zip">Zip/Post Code:</label>
        <input type="text" id="zip" name="zip" required value="{{ old('zip') }}">
        <span class="text-danger"></span>
        <br><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required value="{{ old('username') }}">
        <span class="text-danger"></span>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required value="{{ old('password') }}">
        <span class="text-danger"></span>
        <br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="password_confirmation" required value="{{ old('confirm_password') }}">
        <span class="text-danger"></span>
        <br><br>
        <button id='submitRegistration' value="Register">Register</button>
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
