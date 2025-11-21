<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Real-Time Messages</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Messages</h1>

    <div x-data="{ messages: [] }">
        <div id="msg" x-html="messages.map(m => `<p>${m}</p>`).join('')"></div>
    </div>

    <p>
        <a href="{{ url('/send-message') }}">Send Test Message</a>
    </p>
</body>
</html>
