<!doctype html>
<html>
 <head>
  <title>OneMusicAPI PHP example</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
 <body>

 <div class="jumbotron">
  <h1 class="display-4">OneMusicAPI PHP example</h1>
  <p class="lead">This example performs a release query to OneMusicAPI using the OneMusicAPI PHP SDK.</p>
</div>

<?php 
$loader = require_once('vendor/autoload.php');

$apiInstance = new OneMusicAPI\Client\Api\ReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
    //$config
);
$user_key='';
$title = 'Screamadelica'; // string | 
$artist = 'Primal Scream'; // string | 
//$barcode = ''; // string | 
$must_inc='images';
$max_result_count = 5; // int | 
$min_certainty = 0.7; // float | 
//$min_image_score = 0; // int | 
//$min_image_width = 0; // int | 
//$min_image_height = 0; // int | 
//$max_image_width = 99999; // int | 
//$max_image_height = 99999; // int | 

try {
    $result = $apiInstance->release($user_key, $inc, $must_inc, $max_result_count, $min_certainty, $min_image_score, $min_image_width, $min_image_height, $max_image_width, $max_image_height, $title, $artist, $barcode);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->release: ', $e->getMessage(), PHP_EOL;
}
?> 

 <div class="container">

    <div class="row">
        <div class="col-md-12">
            <ul class="list-unstyled">
 <?php

    foreach($result as $release) {
        ?>

                <li class="media mb-3">
                    <img src="<?=$release->getImages()[0]->getUrl()?>?user_key=<?=$user_key?>" class="mr-3" alt="Cover art for <?=$release->getTitle()?>" style="max-height: 150px;">
                    <div class="media-body">
                        <h5 class="mt-0"><?=$release->getTitle()?></h5>
                        <?=$release->getArtist()?>
                    </div>
                </li>
        <?php

    }

 ?>
            </ul>
        </div>
    </div>
 </div>
 </body>
</html>