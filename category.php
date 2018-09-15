<?php include("includes/header.php"); ?>

<?php 

$photos = Photo::find_all();
 ?>


<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Blog Search</h4>
                    </div>
                    <div class="panel-body">
                        <form action="search.php" method="post">
                        <div class="input-group">
                        <input type="text" class="form-control" name="search">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="cari">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                        </div>
                        </form>
                    <!-- /.
                    </div>
                    input-group -->
                    </div>
                </div>
                <ul class="list-group">
                               

                               

    <li class="list-group-item">
        <span class="badge">14</span>
        <a href="category.php?id=">Nature</a>
    </li>
    <li class="list-group-item">
        <span class="badge">14</span>
        <a href="category.php?id=">Nature</a>
    </li>
    <li class="list-group-item">
        <span class="badge">14</span>
        <a href="category.php?id=">Nature</a>
    </li>

                               
                                
                                
                            </ul>
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