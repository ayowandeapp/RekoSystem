

<nav class="navbar">
    <div class="container">
        <h3 class="text-uppercase">product recommendation</h3>
        <br><br> 
    </div>
</nav><hr>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="/" class="btn btn-info float-right">Home</a><br>
        </div>
        
    </div>   
    <br>     
    <div class="row">
        <table class="table">

            <tr>
                <th>Product Name</th>
                <th>Product rating</th>
            </tr>

            <?php foreach ($products as $name=>$rating) : ?> 
            <tr>
                <td><?= $name; ?></td>
                <td><?= $rating; ?></td>
                
            </tr>
            <?php endforeach ?>

        </table>
    </div> 
</div>
        
             
        
