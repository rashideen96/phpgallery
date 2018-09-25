<?php 

$categories = Kategori::find_all();


 ?>        

            <!-- Blog Search Well -->
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

                <!-- Blog Categories Well -->
       
                <ul class="list-group">
                                <?php 

                                foreach ($categories as $category) {?>

    <li class="list-group-item">
        <span class="badge">14</span>
        <a href="category.php?id=<?php echo $category->id; ?>"><?php echo $category->title; ?></a>
    </li>

                                <?php }

                                 ?>
                                
                                
                            </ul>

                        

                <!-- Side Widget Well -->
                

           <!--  </div> -->