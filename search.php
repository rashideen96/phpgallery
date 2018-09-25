<?php include("includes/header.php"); ?>
<?php 







if (isset($_POST['cari'])) {
    $search = $_POST['search'];
}

$photos = Photo::find_pattern($search);











 ?>


        <div class="row">
            <div class="col-md-4">

            
                 <?php include("includes/sidebar.php"); ?>



            </div>

            <!-- Blog Entries Column -->
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
                                 Posted on September 25, 2018 by
                                <a href="#">Deen</a>
                             </div>
                        </div>

                        <?php
                        
                    }
                    ?>

                   
                     
                     
            
          
         

            </div>
            
            <!-- Blog Sidebar Widgets Column -->
            
       

        <!-- /.row -->

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>

        <?php include("includes/footer.php"); ?>
