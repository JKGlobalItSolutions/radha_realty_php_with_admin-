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

<nav class="navbar navbar-dark fixed-top" style="padding:0; background-image: linear-gradient(to right, #fff ,#fff , #04ba50);">
  <div class="container-fluid mt-2 mb-2">
    <div class="row w-100">
      <div class="col-6 d-flex justify-content-start align-items-center">
      <a class="navbar-brand text-brand" href="index.php"><img src="../images/logo.png" height="100px" alt=""></a>
      </div>
      <div class="col-6 d-flex justify-content-end align-items-center">
        <a href="ajax.php?action=logout" class="text-white">
          <?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i>
        </a>
      </div>
    </div>
  </div>
</nav>
