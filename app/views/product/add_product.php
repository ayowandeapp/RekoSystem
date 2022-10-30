
<nav class="navbar">
    <div class="container">
        <h3 class="text-uppercase">add product</h3>
        <br><br>       
        <a href="/" class="btn btn-info float-right ml-auto">Go Back</a>
        
    </div>
</nav><hr>
<br>
<?php if (!empty($errors)) : ?>
    <div class="container mb-5 alert alert-danger">
        <h5>In valid data input!</h5>
        <ul class="m-0">
            <?php foreach ($errors as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<?php if (!empty($success)) : ?>
    <div class="container mb-5 alert alert-danger">
        <h5><?= $success ?></h5>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  action="/product/add_product"  method="post" name="form" id="form1" class="form-horizontal">
                <!-- <div class="form-group">
                    <label for="sku" class="col-sm-2 control-label">SKU</label>
                    <div class="col-sm-10">
                    <input type="text" name="sku" class="form-control" id="sku" ><span id="chksku"></span>
                    </div>
                </div> -->
                <input type="hidden" name="user_id" value="<?=$user_id;?>">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" required><span id="chkname"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                    <input type="number" step="1" min="1" name="price" class="form-control" id="price" required><span id="chkprice"></span>
                </div>
                </div>
                <div class="form-group">
                    <label for="typeSwitch" class="col-sm-2 control-label">Type switcher</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="typeSwitch" name="typeSwitch" required>
                        <option selected value='please choose'>please choose</option>
                        <option value="shirt">Shirt</option>
                        <option value="shoe">Shoe</option>
                        <option value="trouser">Trouser</option>
                    </select><span id="chktype"></span>
                    </div>
                </div>
                <div class="form-group" name="" id="size">
                    <label for="size" class="col-sm-2 control-label">Size</label>
                    <div class="col-sm-10">
                    <input type="text" name="size" class="form-control" id="size" required><span id="chksize"></span>
                    </div>
                </div>
                <div class="form-group" name="" id="rating">
                    <label for="rating" class="col-sm-2 control-label">Rating</label>
                    <div class="col-sm-10">
                    <input type="number" step="1" min="1" max="5" name="rating" class="form-control" id="rating" required><span id="chkrating"></span>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="Submit" value="Submit" id="submit">
                </div>
            </form>
        </div>
    </div>
</div>
   

 