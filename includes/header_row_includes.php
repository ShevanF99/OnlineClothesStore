<div class="row" style="height:50px">

</div>
<div class="row" style="height:60px">
    <div class="col-md-3">
        <img src="../images/logo.png" width="40px" heigth="60px"/>
    </div>
    <div class="col-md-6">
        <h1 align="center">Online Colthestore</h1>
    </div>
    <div class="col-md-1 col-md-offset-2">
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3">
        <?php
            echo ucwords($userrow["user_fname"]." ".$userrow["user_lname"]);
        ?>
    </div>
    <div class="col-md-6">
        <h4 align="center">Online Colthestore</h4>
    </div>
    <div class="col-md-1 col-md-offset-2">
        <a href="../controller/login_controller.php?status=logout" class="btn btn-primary">Logout</a>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h5 align="center">
            <? echo $pageName; ?>
        </h5>
    </div>
</div>