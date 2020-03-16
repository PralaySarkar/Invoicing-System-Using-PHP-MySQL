<?php require_once './script/pdocrud.php'; ?>

<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="text-center text-white pt-5">
            <!-- Content Wrapper. Contains page content -->
             <?php include './includes/topheader.php'; ?>
             <?php include './includes/sidebar.php'; ?>

        <div class="container">
            
            
            <section class="container">
                
<?php    

            
             $pdo_crud = new PDOCrud();
             //$pdo_crud->addCallback("before_select", "beforeloginCallback");
             $pdo_crud->addCallback("after_select", "afterLoginCallBack");
             $pdo_crud->formFields(array("email", "password"));
			 //$pdo_crud->fieldTypes("role", "select");
			 //$pdo_crud->fieldDataBinding("role", array("Admin", "Staff"), "", "", "array");
			 $pdo_crud->setUserSession("userId", "user_id");
             $pdo_crud->setUserSession("userName", "user_name");
             $pdo_crud->setUserSession("role", "role");
			 $url=$config["script_url"].'orders.php';
             $pdo_crud->formRedirection("$url",true);
             echo $pdo_crud->dbTable("login")->render("selectform");
 
 
 ?>
            </section>
        </div>
    </div>
   
</body>
</html>