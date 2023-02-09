<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 14</title>
    <!-- Include the bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Include the JQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
$(document).ready(function () {
    $(".image").click(function () {
        var image_src = $(this).attr('src');
        $('#image-modal .modal-body').html('<img src="' + image_src + '" width="100%">');
        $('#image-modal').modal();
    });
});
</script>
</head>
<body>

<div class="container">
    <h1>Suvaline Pilt</h1>

    <?php
    $files = scandir('img');
    $files = array_diff($files, array('.', '..'));
    $random_file = array_rand($files);
    echo '<img class="img-responsive image" src="img/'.$files[$random_file].'" />';
    ?>

<div class="modal fade" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pilt</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<h1>Pisipilt veergudes</h1>

</body>
</html>
<?php
$files = scandir('img');
$files = array_diff($files, array('.', '..'));
$columns = 3;
$rows = ceil(count($files) / $columns);

for ($i = 0; $i < $rows; $i++) {
    echo '<div class="row">';

    for ($j = 0; $j < $columns; $j++) {

        $index = $i * $columns + $j;

        if ($index < count($files)) {
            echo '<div class="col-md-4">';
            echo '<img class="img-responsive thumbnail" src="img/'.$files[$index].'" />';
            echo '</div>';
        }
    }

    echo '</div>';
}
?>