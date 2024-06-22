<!DOCTYPE html>
<html>

<head>
    <title>Welcome Account Registration</title>
</head>

<body>
    <h2>Welcome to the HR Lounge, {{ $user['name'] }} !</h2> <br />

    <h4 >URL: {{ $user['link'] }} |
        <a class="btn btn-primary" href="{{ $user['link'] }}" target="_blank">Login</a>
    </h4>
    <p>Email: {{ $user['email'] }} </p>
    <p>Password: {{ $user['password'] }}</p>

    <br />
    <p>Thanks</p>
</body>

</html>
