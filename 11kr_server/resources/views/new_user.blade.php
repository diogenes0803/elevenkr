<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ElevenKR</title>

    </head>
    <body class="antialiased">
        <form action="/api/user" method="post">
          <label for="uname">User Name:</label><br>
          <input type="text" id="uname" name="uname" value=""><br>
          <input type="submit" value="Submit">
        </form> 
    </body>
</html>
