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
                            <a href="#" class="btn btn-primary">Read More &rarr;</a>
                            </div>
                             <div class="panel-footer">
                                 Posted on January 1, 2017 by
                                <a href="#">Start Bootstrap</a>
                             </div>
                        </div>

                        <?php
                        
                    }
                    ?>


	</div>
</div>




<?php include("includes/footer.php"); ?>