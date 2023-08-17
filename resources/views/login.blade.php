<h1>User Login</h1>

<form action="process_login" method="POST">
    @csrf
    <input type="text" name="username" value="" placeholder="Username" /><br/>
    <input type="password" name="password" placeholder="Password" /><br/>
    <button type="submit">Login</button>
</form>