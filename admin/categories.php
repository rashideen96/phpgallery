<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) { redirect("login.php");} ?>

<?php 

$message = "";
if (isset($_POST['submit'])) {
    
    $category = new Kategori();
    $category->title = trim($_POST['title']);

    if ($category->save()) {
        
        $message = "category added";
    }
    
    
} else {
    $title = "";
}
  $categories = Kategori::find_all();


 ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">


        <?php include("includes/top_nav.php"); ?>

        <!-- Sidebar -->
        <?php include("includes/side_nav.php"); ?>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
              

                <div class="col-md-6">
                    <?php echo $message; ?>
                    <form action="categories.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" autocomplete="off" required="">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Add">
                        </div>

                        
                    </form>
                </div>  
                <div class="col-md-6">
                    <div class="dataTable_wrapper">
                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($categories as $category) {
                                ?>
                                <tr>
                                    <td><?php echo $category->id; ?></td>

                                    <td><?php echo $category->title; ?></td>
                               
                                    <td><a href="categories.php?edit=<?php echo $category->id; ?>">Edit</a></td>

                                    <td><a onClick="javascript: return confirm('Are you sure you want to delete this category?')" href="categories.php?delete=<?php echo $category->id; ?>">Delete</a></td>

                                </tr>
                                <?php
                            }

                             ?>
                            
                        </tbody>
                    </table>
                    </div>
                </div> 
            </div>

            

        </div>
    </div>

    <?php 

    if (isset($_GET['delete'])) {

        $id = $_GET['delete'];
        $category = Kategori::find_by_id($id);
        $category->delete();

        redirect("categories.php");
    }


     ?>

<?php include("includes/footer.php"); ?>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>

