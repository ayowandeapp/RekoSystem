

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
           <a href="/user/add_user" class="btn btn-info float-left">Add User</a><br>
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
                <td>
                    <form action="/product/add_product" method="post">
                        <input type="hidden" name="user_id" value="<?=$res['id']?>">
                        <input type="submit" name="add_product" value="add_product" class="btn btn-info">
                    </form>


                </td>
                <td>
                    <form action="/product/list_product" method="post">
                        <input type="hidden" name="user_id" value="<?=$res['id']?>">
                        <input type="submit" name="list_product" value="list_product" class="btn btn-info">
                    </form>
                </td>
                <td><!-- <a href="<?php //url('user/user_recommend/'.$res['id']) ?>" class="btn btn-info">Show Recommendation</a> -->
                    <form action="/user/user_recommend" method="post">
                        <input type="hidden" name="user_id" value="<?=$res['id']?>">
                        <input type="submit" name="add_recommendation" value="add_recommendation" class="btn btn-info">
                    </form>


                </td>
            </tr>
            <?php endforeach ?>

        </table>
    </div> 
</div>
        
             
    