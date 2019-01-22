<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="assets/mdb/css/bootstrap.css">
    <link rel="stylesheet" href="assets/mdb/css/style.css">
    <link rel="stylesheet" href="assets/mdb/css/mdb.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <title>Meja</title>
  </head>
  <body >

    <!-- Navigation -->
    <div class="container" id="app">
      <div class="jumbotron">
        <h2 class="display-4">RESTOURANT NAME.</h2>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">

          <select class="form-control col-md-4" name="noMeja" id="noMeja">
            <option value="0" sytle="display:none">Pilih nomer meja</option>
            <?php foreach ($meja as $item): ?>
            <option value="<?=$item['idMeja']?>"><?=$item['nomerMeja']?></option>
          <?php endforeach; ?>
          </select>
          <br>
          <button @click="pilih()" class="btn btn-lg btn-primary" name="button">{{pesan}}</button>
      </div>
      <center></center>

    </div>

  </div>

  <script src="./assets/mdb/js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="./assets/mdb/js/popper.min.js" charset="utf-8"></script>
  <script src="./assets/mdb/js/bootstrap.js" charset="utf-8"></script>
  <script src="./assets/mdb/js/mdb.js" charset="utf-8"></script>

  <script type="text/javascript">
      var app = new Vue({
        el: '#app',
        mounted:function (){
          console.log("mounted");
        },
        data:{
          pesan:'pilih',
        },
        methods:{
          pilih:function(){
            var noMeja = document.getElementById('noMeja').value;
            if (noMeja == 0) {
              const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                    });

                    Toast.fire({
                    type: 'error',
                    title: 'Maaf anda harus memilih meja'
                    })
            }else {
              var fd = new FormData();
              fd.set('noMeja',noMeja);
              axios.post("<?=base_url()?>selectmeja",fd,{

              }).then(function(res){
                  window.location = "<?=base_url()?>menu";
              }).catch(function(e){
                console.log(e);
              });
            }
        }
        }
      })
      </script>

</body>
</html>
