<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat APP</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


</head>
<body>
    <div class="app">
        <header>
            <h1>Chat APP</h1>
            <input type="text" name="username" id="username" placeholder="User Name">
        </header>
        <div id="message"></div>
        <form  id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Message">
            <button type="submit" id="message_send">Send</button>
        </form>
    </div>
</body>
</html>
