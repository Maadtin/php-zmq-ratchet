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
<button onclick="addPost()">Add Post</button>
<script src="autobanh.js"></script>
<script>

    function addPost () {
        return fetch('add-post.php', { method: 'POST' })
    }

    function onOpen() {
        console.log('Opened connection');
        conn.subscribe('testTopic', (topic, data) => {
            console.log({
                topic,
                data
            })
        })
    }

    function onClose() {
        console.log('Closed connection')
    }

    const options = {
        skipSubprotocolCheck: true,
        debug: true
    };

    let conn = new ab.Session('ws://localhost:8080', onOpen, onClose, options)

</script>
</body>
</html>