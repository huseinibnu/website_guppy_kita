<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    a {
        text-decoration: none;
    }

    html {
        height: 100%;
    }

    body {
        background-image: url(img/background.jpg);
        background-size: cover;
        background-position-x: center;
        background-position-y: top;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {
        color: rgba(0, 0, 0, .65);
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    #card {
        background: linear-gradient(rgba(238, 238, 228, .9), rgba(166, 247, 123, .9));
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .65);
        height: 410px;
        margin: 6rem auto 9.1rem auto;
        width: 329px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        font-size: 25px;
        letter-spacing: 4px;
        padding-bottom: 15px;
        padding-top: 0px;
        text-align: center;
    }

    #signup {
        color: rgba(0, 0, 0, .65);
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 16px;
        text-align: center;
    }

    #submit-btn {
        background: -webkit-linear-gradient(right, #7b8ef7, #2dbd6e);
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #24c64f;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        font-size: large;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 35px;
        transition: .25s;
        width: 153px;
    }

    #submit-btn:hover {
        box-shadow: 0px 1px 18px #24c64f;
    }

    .form {
        display: flex;
        align-items: left;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #7b8ef7, #2ec06f);
        height: 1px;
        width: 90%;
        align-self: center;
    }

    .form-content {
        background: #fbfbfb;
        border-radius: 10px;
        text-align: center;
        border: none;
        outline: none;
        padding-top: 10px;
        padding-bottom: 5px;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    </style>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>GuppyKita</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="ceklogin.php">
                <label for="user-username" style="padding-top: 10px; padding-left: 5px;">
                    &nbsp;Username
                </label>
                <input id="user-username" class="form-content" type="username" name="username" autocomplete="on"
                    required>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 15px; padding-left: 5px;">
                    &nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required>
                <div class="form-border"></div>

                <br>
                <a href="#">
                    <legend id="forgot-pass">Forgot password?</legend>
                </a>
                <input id="submit-btn" type="submit" name="submit" value="LOGIN">
                <a href="#" id="signup">Don't have account yet?</a>
            </form>
        </div>
    </div>
</body>

</html>