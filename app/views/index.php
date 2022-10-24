<?php include(VIEWS.'layouts/header.php'); ?>

<nav class="navbar">
    <div class="container">
        <h3 class="text-uppercase">product list</h3>
        <br><br>   
    </div>
</nav><hr>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <a href="<?php url('user/add_user') ?>" class="btn btn-info float-left">Add User</a><br>
        </div>
        
    </div>   
    <br>     
    <div class="row">
        <table class="table">

            <tr>
                <th>User List</th>
                <th>Add Product</th>
                <th>List Product</th>
                <th>Action</th>
            </tr>

            <?php foreach ($users as $res) : ?> 
            <tr>
                <td><?= $res['username']; ?></td>
                <td><a href="<?php url('product/add_product/'.$res['id']) ?>" class="btn btn-info">Add Product</a></td>
                <td><a href="<?php url('product/list_product/'.$res['id']) ?>" class="btn btn-info">List Product</a></td>
                <td><a href="<?php url('user/user_recommend/'.$res['id']) ?>" class="btn btn-info">Show Recommendation</a></td>
            </tr>
            <?php endforeach ?>

        </table>
    </div> 
</div>
        
             
        
    
<?php include(VIEWS.'layouts/footer.php'); ?>