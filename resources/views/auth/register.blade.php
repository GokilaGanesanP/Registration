
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<div class="container">
    <h2>Registration form</h2>
    <form method="POST" action="{{ route('register') }}">
    @csrf 


        <div class="form-group col-8" style="margin-top:2%">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required autofocus>
        </div>

        <div class="form-group col-8" style="margin-top:2%">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group col-8" style="margin-top:2%">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group col-8" style="margin-top:2%">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:2%">Register</button>
    </form>
</div>
