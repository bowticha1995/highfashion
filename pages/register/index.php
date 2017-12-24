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
        <div class="register-container">
             <div class="register">
                 <div class="text">
                     <h1>Register</h1>
                 </div>
                 <div class="register-form-container">
                     <form id="register-from" action="#">
                        <div class="form-group">
                             <input type="text" name="username" placeholder="๊Username" />
                             <input type="password" name="password" placeholder="Password"/>
                         </div>
                         <div class="form-group">
                             <input type="text" name="firstname" placeholder="Firstname"/>
                             <input type="text" name="lastname" placeholder="Lastname"/>
                         </div>
                         <div class="form-group">
                             <input type="text" name="nickname" placeholder="Nickname"/>
                             <input type="text" name="sex" placeholder="Sex"/>
                         </div>
                         <div class="form-group">
                             <input type="tel" name="tel" placeholder="Telephone"/>
                             <input type="email" name="email" placeholder="Email"/>
                         </div>                         
                             <textarea id="address" name="address" placeholder="Address" ></textarea>
                             <input type="file" name="img" id="uploadImage"/> 
                             <button id="register-button" type="submit">Register</button>
                     </form>
                 </div>
             </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script src="index.js"></script>
    </body>
</html>