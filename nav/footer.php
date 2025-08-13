
    <section class="team-hero">
        <div class="container">
             <div class="row justify-content-center text-center">
                <div class="col-lg-4">
                    <?php foreach($footer as $ftr){?>
                    <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?= $ftr['ftr_img'] ?>" style="border: 2px solid white;">
                    <h2><?= $ftr['ftr_name']  ?></h2>
                    <p><?= $ftr['ftr_position'] ?></zp>
                    <p><?= $ftr['ftr_desc'] ?></p>
                    <?php
                    }
                    ?>
                </div>
                 
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

