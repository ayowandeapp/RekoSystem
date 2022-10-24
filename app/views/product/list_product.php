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
        <div class="col-md-6">
           <!-- <a href="<?php url('') ?>" class="btn btn-info float-right">Home</a><br> -->
        </div>
        <div class="col-md-6">
            <!-- <button for="delete-form"class="btn btn-danger float-right" style="">Mass Delete</button> -->
            <a href="<?php url('') ?>" class="btn btn-info float-right">Home</a><br>
        </div>
        
    </div>   
    <br>     
    <div class="row">
        <table class="table">

            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Category</th>
                <th>Product Size</th>
                <th>Product rating</th>
            </tr>

            <?php foreach ($products as $res) : ?> 
            <tr>
                <td><?= $res['name']; ?></td>
                <td><?= $res['price']; ?></td>
                <td><?= $res['type']; ?></td>
                <td><?= $res['size']; ?></td>
                <td><?= $res['rating']; ?></td>
                
            </tr>
            <?php endforeach ?>

        </table>
    </div> 
</div>
        
             
        
    
<?php include(VIEWS.'layouts/footer.php'); ?>