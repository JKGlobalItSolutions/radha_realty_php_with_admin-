<style>
	nav#sidebar {
		background: url(../assets/img/<?php echo $_SESSION[''] ?>);
		background-repeat: no-repeat;
		background-size: cover;
		}
</style>
<nav id="sidebar" class='mx-lt-5 '>

	<div class="sidebar-list">

		<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
		<a href="index.php?page=categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> Add property </a>
	</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>