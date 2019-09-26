<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>

    let conn = new WebSocket('ws://localhost:8080');
    conn.onopen = e => {
        console.log('Connection established!!')
        conn.send('hola');
    }
    conn.onmessage = e => {
        console.log(e);
    }
</script>
</body>
</html>