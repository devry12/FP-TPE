<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="assets/mdb/css/bootstrap.css">
    <link rel="stylesheet" href="assets/mdb/css/style.css">
    <link rel="stylesheet" href="assets/mdb/css/mdb.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  </head>
  <body>
      <?php 		if ($this->cart->contents() == null) { ?>
          <script type="text/javascript">
          Swal.fire({
            title: 'Oops...',
            text: "keranjang anda masih kosong, silahkan pilih beberapa menu",
            type: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok!'
          }).then((result) => {
                 window.location.href = '/';
          })
                      </script>
      <?php } ?>
    <div class="container">
    	<h1>Cart</h1><hr>
    	<table class="table table-striped table-hover table-bordered">
            <tbody>
                <tr>
                    <th>Item</th>
                    <th>QTY</th>
                    <th>Unit Price</th>
                    <th>Total Price</th>
                </tr>
                <?php
                $totalharga = 0;
                foreach ($this->cart->contents() as $item): ?>
                <tr>
                    <td><?=$item['name']?></td>
                    <td><form method="post" action="/FrontController/updateCart"> <input type="number" style="width:35px;;" name="qty" value="<?=$item['qty']?>"> <input type="text" name="rowid" value="<?=$item['rowid']?>" hidden> <button type="submit" class="btn-sm btn-primary"> <i class="fas fa-edit"></i></button></form></td>
                    <td><?=rupiah($item['price'])?></td>
                    <td><?=rupiah($item['subtotal'])?></td>
                </tr>
              <?php $totalharga = $totalharga + $item['subtotal']; endforeach; ?>
                <tr>
                    <td><a href="/" class="btn btn-primary">Continue Shopping</a></td>
                    <td colspan="2"><a href="/pesan/<?=$totalharga?>" class="pull-right btn btn-success">Pesan</a></td>
                    <td><?=rupiah($totalharga)?></td>
                </tr>
            </tbody>
        </table>

    </div>

</body>
<script src="./assets/mdb/js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="./assets/mdb/js/popper.min.js" charset="utf-8"></script>
<script src="./assets/mdb/js/bootstrap.js" charset="utf-8"></script>
<script src="./assets/mdb/js/mdb.js" charset="utf-8"></script>
