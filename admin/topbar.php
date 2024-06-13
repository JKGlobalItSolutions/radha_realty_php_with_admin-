<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-dark fixed-top" style="padding:0; background-color: #2ec96a;">
  <div class="container-fluid mt-2 mb-2">
    <div class="row w-100">
      <div class="col-6 d-flex justify-content-start align-items-center">
        <img src="image/logo.jpeg" width="150px" class="rounded" alt="">
      </div>
      <div class="col-6 d-flex justify-content-end align-items-center">
        <a href="ajax.php?action=logout" class="text-white">
          <?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i>
        </a>
      </div>
    </div>
  </div>
</nav>
