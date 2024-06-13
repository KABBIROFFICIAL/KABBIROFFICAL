<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<h1 class="bg-warning p-3 text-center">Print Cards Using Associative Array</h1>

  <?php
    $data = [
        ["id"=>1,"name"=>"Product1","desc"=>"Best Quality Provider","image"=>"sergey-shmidt-koy6FlCCy5s-unsplash.jpg","price"=>4000],
        ["id"=>2,"name"=>"Product2","desc"=>"Best Quality Provider","image"=>"shamblen-studios-qdPnQuGeuwU-unsplash.jpg","price"=>3000],
        ["id"=>2,"name"=>"Product2","desc"=>"Best Quality Provider","image"=>"shamblen-studios-qdPnQuGeuwU-unsplash.jpg","price"=>3500],
        ["id"=>2,"name"=>"Product2","desc"=>"Best Quality Provider","image"=>"shamblen-studios-qdPnQuGeuwU-unsplash.jpg","price"=>8000],
        ["id"=>2,"name"=>"Product2","desc"=>"Best Quality Provider","image"=>"shamblen-studios-qdPnQuGeuwU-unsplash.jpg","price"=>6000]
    ];
  ?>
<div class="container">
    <div class="row">
        <?php 
        foreach($data as $value){
            ?>
                <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img width="200" height="200" src="<?php echo $value['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name'] ?></h5>
                        <p class="card-text"><?php echo $value['price'] ?></p>
                        <p class="card-text"><?php echo $value['desc'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            <?php 
        }
        ?>
    </div>
</div>
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>