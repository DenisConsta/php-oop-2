<?php

?>

<style>
  
  .card-title{
    color: #320A89;
  }

  img{
    height: 300px;
  }

</style>

<body>

  <main class="py-5">
    <div class="container">
      <div class="row">

        <?php foreach ($products as $product): ?>
        <div class="col mb-3">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title"> <?php echo $product->getName() ?> </h3>
              <h5 class="card-brand lead"> <?php echo $product->getBrand() ?> </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Buy Now!</a>
              <span> <?php echo $product->getCategory() ?> </span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

</body>