<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>home</title>
<body>
    <?php foreach( $posts as $post ): ?>
        <p> Date :    <?=$post['date']?> <p>
        <p> ID :      <?=$post['id']?> <p>
        <p> User ID : <?=$post['user_id']?> <p>
        <p> Message </p>
        <pre>
            <?=$post['msg']?>
        </pre>

        <hr>
    <?php endforeach; ?>    
</body>
</head>
</html>
