<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <?php
  session_start();
  if (!isset($_SESSION['login_id']))
    header('location:login.php');
  include('./header.php');
  // include('./auth.php'); 
  ?>
</head>

<body>
  <header>
    <?php include 'topbar.php' ?>
    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-body text-white">
      </div>
    </div>
  </header>
  <main>
    <?php include('db_connect.php'); ?>

    <div class="mx-1 pt-5 mt-5" style="width: 98%;">

      <div class="row">
        <!-- FORM Panel -->
        <div class="col-lg-4 col-md-4 col-sm-12 my-4">
          <form action="" id="manage-category">
            <div class="card">
              <div class="card-header">
                Room Category Form
              </div>
              <div class="card-body">
                <input type="hidden" name="id">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label class="control-label">Price</label>
                  <input type="number" class="form-control text-right" name="price" step="any">
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Image</label>
                  <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                </div>
                <div class="form-group text-center">
                  <img src="<?php echo isset($image_path) ? '../assets/img/' . $cover_img : '' ?>" alt="" id="cimg" class="img-fluid">
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <button class="btn btn-sm btn-primary col-sm-5"> Save</button>
                    <button class="btn btn-sm btn-default col-sm-5" type="button" onclick="$('#manage-category').get(0).reset()"> Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- FORM Panel -->

        <!-- Table Panel -->
        <div class="col-lg-8 col-md-8 col-sm-12 my-4" style="width: 100%;">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Img</th>
                <th class="text-center">Room</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              $cats = $conn->query("SELECT * FROM room_categories order by id asc");
              while ($row = $cats->fetch_assoc()) :
              ?>
                <tr>
                  <td class="text-center"><?php echo $i++ ?></td>
                  <td class="text-center">
                    <img src="<?php echo isset($row['cover_img']) ? '../assets/img/' . $row['cover_img'] : '' ?>" alt="" id="cimg" class="img-fluid">
                  </td>
                  <td class="">
                    <p>Name : <b><?php echo $row['name'] ?></b></p>
                    <p>Price : <b><?php echo "$" . number_format($row['price'], 2) ?></b></p>
                  </td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-success edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-price="<?php echo $row['price'] ?>" data-cover_img="<?php echo $row['cover_img'] ?>">Edit</button>
                    <button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
        <!-- Table Panel -->
      </div>
    </div>

    <style>
      img#cimg,
      .cimg {
        max-height: 10vh;
        max-width: 6vw;
      }

      td {
        vertical-align: middle !important;
      }
    </style>

    <script>
      function displayImg(input, _this) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#cimg').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }

      $('#manage-category').submit(function(e) {
        e.preventDefault()
        start_load()
        $.ajax({
          url: 'ajax.php?action=save_category',
          data: new FormData($(this)[0]),
          cache: false,
          contentType: false,
          processData: false,
          method: 'POST',
          type: 'POST',
          success: function(resp) {
            if (resp == 1) {
              alert_toast("Data successfully added", 'success')
              setTimeout(function() {
                location.reload()
              }, 1500)
            } else if (resp == 2) {
              alert_toast("Data successfully updated", 'success')
              setTimeout(function() {
                location.reload()
              }, 1500)
            }
          }
        })
      })

      $('.edit_cat').click(function() {
        start_load()
        var cat = $('#manage-category')
        cat.get(0).reset()
        cat.find("[name='id']").val($(this).attr('data-id'))
        cat.find("[name='name']").val($(this).attr('data-name'))
        cat.find("[name='price']").val($(this).attr('data-price'))
        cat.find("#cimg").attr('src', '../assets/img/' + $(this).attr('data-cover_img'))
        end_load()
      })

      $('.delete_cat').click(function() {
        _conf("Are you sure to delete this category?", "delete_cat", [$(this).attr('data-id')])
      })

      function delete_cat($id) {
        start_load()
        $.ajax({
          url: 'ajax.php?action=delete_category',
          method: 'POST',
          data: {
            id: $id
          },
          success: function(resp) {
            if (resp == 1) {
              alert_toast("Data successfully deleted", 'success')
              setTimeout(function() {
                location.reload()
              }, 1500)
            }
          }
        })
      }
    </script>
  </main>

  <footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div class="modal fade" id="confirm_modal" role='dialog'>
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
          </div>
          <div class="modal-body">
            <div id="delete_content"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="uni_modal" role='dialog'>
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"></h5>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script>
    window.start_load = function() {
      $('body').prepend('<di id="preloader2"></di>')
    }
    window.end_load = function() {
      $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
    }

    window.uni_modal = function($title = '', $url = '') {
      start_load()
      $.ajax({
        url: $url,
        error: err => {
          console.log()
          alert("An error occured")
        },
        success: function(resp) {
          if (resp) {
            $('#uni_modal .modal-title').html($title)
            $('#uni_modal .modal-body').html(resp)
            $('#uni_modal').modal('show')
            end_load()
          }
        }
      })
    }
    window._conf = function($msg = '', $func = '', $params = []) {
      $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
      $('#confirm_modal .modal-body').html($msg)
      $('#confirm_modal').modal('show')
    }
    window.alert_toast = function($msg = 'TEST', $bg = 'success') {
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

      if ($bg == 'success')
        $('#alert_toast').addClass('bg-success')
      if ($bg == 'danger')
        $('#alert_toast').addClass('bg-danger')
      if ($bg == 'info')
        $('#alert_toast').addClass('bg-info')
      if ($bg == 'warning')
        $('#alert_toast').addClass('bg-warning')
      $('#alert_toast .toast-body').html($msg)
      $('#alert_toast').toast({
        delay: 3000
      }).toast('show');
    }
    $(document).ready(function() {
      $('#preloader').fadeOut('fast', function() {
        $(this).remove();
      })
    })
  </script>
</body>

</html>