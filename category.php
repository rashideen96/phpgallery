<?php include("includes/header.php"); ?>

<?php 

if (empty($_GET['id'])) {
    
    redirect("index.php");
}

$photos = Photo::find_by_category($_GET['id']);


 ?>


<div class="row">
	<div class="col-md-4">

            
    <?php include("includes/sidebar.php"); ?>

    </div>

	<div class="col-md-8">
		<?php //$photos = Photo::find_all_desc(); 

                    foreach ($photos as $photo) {?>

                        <div class="panel panel-default">

                            <a href="photo.php?id=<?php echo $photo->id; ?>"><img class="panel-img-top" src="admin/<?php echo $photo->picture_path(); ?>" alt="sdsdf" width="100%"></a>
                            <div class="panel-body">
                        
                                <h2><?php echo $photo->title; ?></h2>
                                <p><?php echo $photo->description; ?></p>
                            <a href="photo.php?id=<?php echo $photo->id; ?>" class="btn btn-primary">Read More</a>
                            </div>
                             <div class="panel-footer">
                                 Posted on September 25, 2018 by
                                <a href="#">Deen</a>
                             </div>
                        </div>

                        <?php
                        
                    }
                    ?>


	</div>
</div>

<footer>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <div class="text-center">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>




<?php include("includes/footer.php"); ?>