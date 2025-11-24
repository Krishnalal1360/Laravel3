<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="user_id" content="{{ Auth::user()?->id }}" />
    <title>Real-Time Messages</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Messages</h1>
    <div id="message"></div>
</body>
</html>
