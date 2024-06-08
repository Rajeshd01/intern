<?php
$username = $_POST['email_address'];
$password = $_POST['password'];

$result = validate_credentials($username, $password);

if ($result) {
    
    header("Location: index.php");
    exit();
    ?>
<?php
} else {
        ?>



<main class="form-signin">
    <form method="post" action="login.php">
        <img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/logo/1/Logo_Dark.png" alt=""
            height="50">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="email_address" type="email" class="form-control" id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <p>Don't have an account? <a href="signup.php">Signup Now!</a></p>
        </div>
        <button class="w-100 btn btn-lg btn-primary hvr-grow-rotate" type="submit">Sign in</button>
    </form>
</main>

<?php
    }

