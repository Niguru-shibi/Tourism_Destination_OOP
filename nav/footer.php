<section class="team-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <?php foreach ($footer as $ftr) { ?>
                    <div class="col-lg-4 mb-5">
                        <img class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" src="<?= $ftr['ftr_img'] ?>" style="border: 2px solid white;">
                        <h2><?= $ftr['ftr_name'] ?></h2>
                        <p><?= $ftr['ftr_position'] ?></p>
                        <p><?= $ftr['ftr_desc'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>
    <footer class="container">
            <img class="funbanner" src="../images/funbanner1.jpg" alt="fun" >
			<p>© 2025 It's more fun in the PHILIPPINES!</p> <p class="float-right"><a href="#">Back to top</a></p>
	</footer>

                    

               

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>