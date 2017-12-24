<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="login-container">
            <div class="login">
                <div class="profile">
                    <img class="img-profile "src="../../public/img/login/login.jpg" alt=""/>
                </div>
                <div class="text">
                    <h1>Please Login</h1>
                    <p>Or <a href="../register">Register</a></p>
                </div>
            </div>
            <div class="background-login-container">
                <div class="dialog-container">
                    <div class="text">
                        <h1>
                            Login
                        </h1>
                    </div>
                    <div class="form-login-container">
                        <form>
                            <input type="text" placeholder="Username"/>
                            <input type="password" placeholder="Password"/>
                            <button type="submit">Login</button>
                        </form>
                        <button id="back-button">Back</button>
                    </div>
                </div>
            </div> 
        </div>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script src="index.js"></script>
    </body>
</html>