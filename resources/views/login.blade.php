<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback</title>
</head>
<body>
    <script>
        // Retrieve the tokens from the server-rendered variables
        var idToken = @json($idToken);
        var accessToken = @json($accessToken);

        // Store the tokens in local storage
        localStorage.setItem('idToken', idToken);
        localStorage.setItem('accessToken', accessToken);

        // Redirect to the intended page
        window.location.href = '/';
    </script>
</body>
</html>
