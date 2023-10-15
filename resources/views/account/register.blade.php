<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="main">
        <div class="signup">
            <form action="{{ route('create_account') }}" method="POST">
                @csrf
                <label>Create account</label>
                <input type="text" name="login" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Create account</button>
            </form>
        </div>
	</div>
</body>
</html>
