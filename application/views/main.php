
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="assets/mdb/css/bootstrap.css">
    <link rel="stylesheet" href="assets/mdb/css/style.css">
    <link rel="stylesheet" href="assets/mdb/css/mdb.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark #1e88e5 blue darken-1">
      <span class="navbar-brand">Nama Restourant</span>
      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/cart">
              <i class="fas fa-shopping-cart">
                <span class="badge badge-danger"><?php if ($this->cart->contents() == null): ?>
                    0
                <?php else: ?>
                    <?php echo count($this->cart->contents()) ?>
                <?php endif; ?></span></i>
            </a>
          </li>

        </ul>
        <!-- Links -->
      </div>
      <!-- Collapsible content -->
    </nav>
    <!-- Section: Products v.3 -->
    <section class="text-center my-5">
      <div class="container">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">All Menu</h2>
        <form class="" action="index.html" method="post">
          <select class="form-control col-md-3 mb-4" name="">
            <option value="">All Menu</option>
            <option value="">Main Menu</option>
            <option value="">Drink</option>
          </select>
        </form>
        <!-- Section description -->

        <!-- Grid row -->
        <div class="row">
            <?php foreach ($menu as $item): ?>

          <!-- Grid column -->
          <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
            <!-- Card -->
            <div class="card align-items-center">
              <!-- Card image -->
              <div class="view overlay">
                <img src="<?=base_url()?>assets/image/menu/<?=$item->image?>" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card image -->
              <!-- Card content -->
              <div class="card-body text-center">
                <!-- Category & Title -->
                <a href="" class="grey-text">
                  <h5><?=$item->nameMenu?></h5>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text"><?=$item->Category?>
                      <?php if ($item->new == 1): ?>
                        <span class="badge badge-pill danger-color">NEW</span>
                      <?php endif; ?>
                    </a>
                  </strong>
                </h5>
                <h4 class="font-weight-bold blue-text">
                  <strong>Rp.<?=$item->price?></strong>
                </h4>
                <form method="post" action="/FrontController/addtocart">
                    <input type="text" name="id" value="<?=$item->idMenu?>" hidden>
                    <input type="text" name="name" value="<?=$item->nameMenu?>" hidden>
                    <input type="text" name="price" value="<?=$item->price?>" hidden>
                    <div class="row">
                      <div class="col-6">
                        <input style="width:100px;" type="number" name="qty" value="1">
                      </div>
                      <div class="col-6">
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                      </div>
              </div>
              </form>
              </div>
              <!-- Card content -->
            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->
        <?php endforeach; ?>

        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Products v.3 -->

    <section >
      <nav aria-label="Page navigation example">
        <ul class="pagination pagination-circle pg-blue justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">First</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link">1</a>
          </li>
          <li class="page-item">
            <a class="page-link">2</a>
          </li>
          <li class="page-item">
            <a class="page-link">3</a>
          </li>
          <li class="page-item">
            <a class="page-link">4</a>
          </li>
          <li class="page-item">
            <a class="page-link">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link">Last</a>
          </li>
        </ul>
      </nav>
    </section>
    <script src="./assets/mdb/js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="./assets/mdb/js/popper.min.js" charset="utf-8"></script>
    <script src="./assets/mdb/js/bootstrap.js" charset="utf-8"></script>
    <script src="./assets/mdb/js/mdb.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


  </body>
</html>
