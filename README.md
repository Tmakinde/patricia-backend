<h1>API DOCUMENTATION</h1>
<h2>AUTHORIZATION : BEARER TOKEN</h2>
<p>This API was built with PHP(LARAVEL FRAMEWORK).</p>
<h2>SETUP</h2>
<ul>
    <li>Clone the repository</li>
    <li>Run composer install</li>
    <li>Run php artisan key:generate</li>
    <li>Create a database name patricia_db</li>
    <li>Add details to .env file</li>
    <li>Run php artisan migrate</li>
</ul>
<h2>ENDPOINTS</h2>
<span>Base URL: /api/v1</span>
<div>
    <h3>Register</h3>
    <ul>
        <li>URL: <span>/register</span></li>  
        <li>METHOD: POST</li>
        <li>BODY
            <ul>
                <li>username</li>
                <li>email</li>
                <li>password</li>
            </ul>
        </li>
        <li>Users: GUEST</li>
    </ul>
</div>

<div>
    <h3>Login</h3>
    <ul>
        <li>URL: <span>/login</span></li>  
        <li>METHOD: POST</li>
        <li>BODY
            <ul>
                <li>email</li>
                <li>password</li>
            </ul>
        </li>
        <li>Users: GUEST</li>
    </ul>
</div>

<div>
    <h3>Logout</h3>
    <ul>
        <li>URL: <span>/logout</span></li>  
        <li>METHOD: POST</li>
        <li>Users: AUTH</li>
    </ul>
</div>

<div>
    <h3>Get user</h3>
    <ul>
        <li>URL: <span>/user</span></li>  
        <li>METHOD: GET</li>
        <li>Users: AUTH</li>
    </ul>
</div>

<div>
    <h3>Update user</h3>
    <ul>
        <li>URL: <span>/user</span></li>  
        <li>METHOD: PATCH</li>
        <li>BODY
            <ul>
                <li>email</li>
                <li>password</li>
                <li>username</li>
                <p>one or two of the above request can also be sent if user does not want update all details</p>
            </ul>
        </li>
        <li>Users: AUTH</li>
    </ul>
</div>

<div>
    <h3>Delete user</h3>
    <ul>
        <li>URL: <span>/user</span></li>  
        <li>METHOD: DELETE</li>
        <li>Users: AUTH</li>
    </ul>
</div>