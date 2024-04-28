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
       $meta_id = add_metadata('post', 1664, 'Bogura', 'Bangladesh');
       if( $meta_id ){
        echo "successfully added" . $meta_id;
       }else{
        echo "Error on post id, check again!";
       }
        //edit the custom field in a specific post id 1664
        //$meta_id = update_metadata('post', 1664, 'Delhi', 'India');

    //
      //  $data = get_metadata('post', 1664);
       // echo '<pre>' . print_r($data) . '<pre>';
   
       add_post_meta( 1664, 'my_key', '47', true );

?>
</div>
    
</body>
</html>
