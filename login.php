<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/gh/micly2/blog/login/login.css" rel="stylesheet">
    <style>
        a:link {text-decoration:none;}
    </style>
</head>
<body style="background-color: #343434">
<div id="login">
    <h1>Login</h1>
    <form method="post">
        <input type="text" required="required" placeholder="用户名" name="u"></input>
        <input type="password" required="required" placeholder="密码" name="p"></input>
        <button class="but" type="submit">登录</button>
    </form>
    <a href="index.php">
        <button class="but" style="margin-top: 10px;">返回</button>
    </a>
</div>
</body>
</html>