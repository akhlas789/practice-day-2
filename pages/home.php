<?php include "include/header.php"; ?>

  <section class="py-5">
      <div class="container">
          <div class="row">
              <?php foreach ($allProducts as $product) { ?>
              <div class="col-md-4 mt-3">
                 <div class="card">
                     <img src="<?php echo $product['image']?>" alt="" class="card-img-top img-height">
                     <div class="card-body">
                         <h3><?php echo $product ['name']?></h3>
                         <p><?php echo $product ['price']?></p>
                         <a href="" class="btn btn-outline-warning">View</a>
                     </div>
                 </div> 
              </div>
               <?php } ?>
          </div>
      </div>
  </section>

<?php include "include/footer.php"; ?>