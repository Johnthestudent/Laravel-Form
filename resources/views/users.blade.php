<h1>User Login</h1>

<form action="users" method="POST">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="enter user id"/> <br/>
    <input type="password" name="userpassword" placeholder="enter user password"/> <br/>
    <button type="submit">Submit</button>
</form>