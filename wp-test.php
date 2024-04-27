<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP Meta Data</title>
</head>
<body style="margin: 2em;">
<div>
    <h3>Common WordPress APIs: Metadata API</h3>
    <?php
        //load the wordpress library
        require_once __DIR__ . '/wp-load.php';

        $sitename = get_option('blogname');

        echo "Hello" . $sitename;
?>
</div>
    
</body>
</html>