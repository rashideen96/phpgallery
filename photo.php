<?php include("includes/header.php"); ?>
<?php 



if (empty($_GET['id'])) {
    
    redirect("index.php");
}

$photo = Photo::find_by_id($_GET['id']);
$categories = Kategori::find_by_id($photo->cat_id);

if (isset($_POST['submit'])) {
    
    $author = trim($_POST['author']);
    $body = trim($_POST['body']);

    $create_comment = Comment::create_comment($photo->id, $author, $body);

    if ($create_comment && $create_comment->save()) {
        
        redirect("photo.php?id={$photo->id}");
    }
} else {

    $author = "";
    $body = "";
}






 ?>
    <!-- Page Content -->


      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <div class="panel panel-default">

              <a href="photo.php?id=<?php echo $photo->id; ?>"><img class="panel-img-top" src="admin/<?php echo $photo->picture_path(); ?>" alt="sdsdf" width="100%"></a>
              <div class="panel-body">
          
                  <h2><?php echo $photo->title; ?></h2>
                  <p><?php echo $photo->description; ?></p>
              <p><a href="admin/<?php echo $photo->picture_path(); ?>" target="_blank" class="btn btn-danger">Download</a></p>
              </div>
               <div class="panel-footer">
                   <span class="prettydate">Jan 01 2014 20:14:11</span> by
                  <a href="#">Deen</a>
               </div>
          </div>





          <!-- Comments Form -->

          <div class="well">
            <h4>Leave a Comment:</h4>
                <form action="" method="post" role="form">
                    
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="comment-content">Comment</label>
                            <textarea name="body" class="form-control" rows="3" required></textarea>
                        </div>
                        
                       <div class="form-group">
                           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                       </div>
               
                    
                </form>
            </div>

             <hr>


          <!-- Single Comment -->

          <?php $comments = Comment::find_comments($photo->id); ?>

          <?php 
          foreach ($comments as $comment) {?>

            <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment->author; ?> <small>
                          <span class="prettydate"><?php echo $comment->date; ?></span></small>
                        </h4><p><?php echo $comment->body; ?></p>
                    </div>
             </div>


            <?php    
          }
           ?>
          
          <!-- Comment with nested comments -->
          

        </div>

        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              Image detail
            </div>
            <div class="panel-body">
              <?php 

                //$photos = Photo::find_by_id(8);

                 ?>
                <img class="thumbnail" src="admin/<?php echo $photo->picture_path(); ?>" width="100%">
                <p>Uploaded on: 4/6/2018</p>
                <p>Photo id: <?php echo $photo->id; ?></p>
                <p>Filename: <?php echo wordwrap($photo->filename); ?></p>
                <p>File type: <?php echo $photo->type; ?></p>
                <p>File size: <?php echo $photo->size; ?></p>
            </div>
            <div class="panel-footer">
                <input type="submit" name="edit" class="btn btn-block btn-success" value="Edit">
              
            </div>
          </div>
        </div>

        <!-- Sidebar Widgets Column -->
        

      </div>
      <!-- /.row -->
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
<script>
  $(".prettydate").prettydate();
</script>
