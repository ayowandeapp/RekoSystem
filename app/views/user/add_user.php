
<nav class="navbar">
    <div class="container">
        <h3 class="text-uppercase">add user</h3>
        <br><br>       
        <a href="/" class="btn btn-info float-right ml-auto">Go Back</a>
        
    </div>
</nav><hr>
<br>
<?php if (!empty($errors)) : ?>
    <div class="container mb-5 alert alert-danger">
        <h5><?= $errors ?></h5>
    </div>
<?php endif; ?>
<?php if (!empty($success)) : ?>
    <div class="container mb-5 alert alert-success">
        <h5><?= $success ?></h5>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  action="/user/add_user"  method="post" name="form" id="form" class="form-horizontal">
                
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="Username" ><span id="chkusername"></span>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="Submit" value="Submit" id="submit">
                </div>
            </form>
        </div>
    </div>
</div>
   
 