<!-- create table packages -->
<?php
include_once("includes/sidebarmenu.php");
include_once("conection.php");
session_start();
?>
<!-- <header> -->
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
        <?php
        include_once("includes/header.php");
        ?>
        <div class="clearfix"> </div>	
        
<!-- </header> -->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Add Reviews </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  <?php
    if (isset($_SESSION['reg_msg'])) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertmsg">
            <strong>Success</strong> <?php echo $_SESSION['reg_msg']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            setTimeout("", 5000);
        </script>
    <?php
        unset($_SESSION['reg_msg']);
    }
    
    if (isset($_SESSION['reg_msg_err'])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertmsg">
            <strong>Error</strong> <?php echo $_SESSION['reg_msg_err']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            setTimeout("", 5000);
        </script>
    <?php
        unset($_SESSION['reg_msg_err']);
    }
    ?>
  
  	       <h3 style="color:orange;">Add Reviews</h3>  
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data" onsubmit="return my()" action=" ">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Reviewer name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="name" id="fname1" placeholder=" Name ">
										<p id="fn1"></p>
									</div>
								</div>
					<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Review rate</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="rate" id="mobile1" placeholder=" Review rate">
										<p id="mno"></p>
									</div>
								</div>
                     <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Review message</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="msg" id="packagetype" placeholder=" Review message">
									</div>
								</div>
                  <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Review profile</label>
									<div class="col-sm-8">
										<input type="file" name="pic">
									</div>
								</div>	

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" name="review" value="Submit" class="" onclick="add()"></input>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
      </div>
					
					</form>
               </div>
</div>  

<script>
function add()
{
    var fn=document.getElementById('fname1').value;
    var no=document.getElementById('mobile1').value;
    if(fn=="")
    {
        document.getElementById('fn1').innerHTML="Name field cannot be empty";
        document.getElementById('fn1').style.color="red";
        document.getElementById('fname1').style.borderColor="red";
        var vfn="false";
    }
    else
    {
        var fn123=/^[a-zA-Z ]*$/;
        var e=fn123.test(fn);
        if(e==false)
        {
            document.getElementById('fname1').focus();
            document.getElementById('fn1').innerHTML="Name must contain only letters";
            document.getElementById('fn1').style.color="red";
            document.getElementById('fname1').style.borderColor="red";
            vfn="false";
        }
        else
        {
            document.getElementById('fn1').innerHTML="";
            document.getElementById('fname1').style.borderColor="green";
            vfn="true";
        }
    }
    if(no=="")
    {
        document.getElementById('mno').innerHTML="Rate cannot be empty";
        document.getElementById('mno').style.color="red";
        document.getElementById('mobile1').style.borderColor="red";
        var vno="false";
    }
    else
    {
        var mn=/^[1-5]{1}$/;
        var b=mn.test(no);
        if(b==false)
        {
            document.getElementById('mobile1').focus();
            document.getElementById('mno').innerHTML="Invalid rate";
            document.getElementById('mno').style.color="red";
            document.getElementById('mobile1').style.borderColor="red";
            vno="false";
        }
        else
        {	document.getElementById('mno').innerHTML="";
            document.getElementById('mobile1').style.borderColor="green";
            vno="true";
        }
    }
}
</script>

<?php
include('includes/footer.php');
if(isset($_POST['review']))
{
	$name=$_POST['name'];
	$msg=$_POST['msg'];
	$rate=$_POST['rate'];
	$pf = $_FILES['pic']['name'];
    $t = date("Y-m-d G:i:s");
    $q = "insert into review values('','$name',$rate,'$msg','$pf','$t','','Active')";
    if(mysqli_query($con,$q))
    {
         if($_FILES['pic']['name']=="")
        {
            $_SESSION['reg_msg_err']="Select picture for review";
        }
        else
        {   if($_FILES['pic']['type']=="image/jpeg")
            {
                $_SESSION['reg_msg']="Successfully review added";
                move_uploaded_file($_FILES['pic']['tmp_name'],"review_photos/".$_FILES['pic'] ['name']);
            }
            else
            {
                $_SESSION['reg_msg_err']="Select jpg file to upload picture";
            }
        }
    }
}
?>