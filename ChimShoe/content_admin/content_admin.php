<?php 
include "content_user/index_data_member.php";
$level_img = "img_member/";
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
<title>Admin </title>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 1100px;
  position: absolute;
  z-index: 1;
  margin-left: 120px;
  margin-top: 80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>

<style>


/* Popup container - can be anything you want */
.product {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.product .product_text {
  visibility: hidden;
  width: 1000px;
  position: absolute;
  z-index: 1;
  margin-left: -500px;
  margin-top: 110px;
}

/* Popup arrow */
.product .product_text::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.product .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>


</head>
<body style="text-align:center">
<div class="popup">
  <span class="popuptext" id="myUser">  
<div class="col-lg-6">
   <div class="main-box clearfix">
      <div class="tabs-wrapper tabs-no-header">
         <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-users" data-toggle="tab">Members</a></li>
         </ul>
         <div class="tab-content tab-content-body clearfix">
            <div class="tab-pane fade active in" id="tab-users">
               <ul class="widget-users row">
			   <?php foreach($dstv_rowsdata as $list_member)   { ?>
                  <li class="col-md-6">
                     <div class="img">
                        <img class="img-thumbnail" src="<?php echo $level_img.$list_member['MemberImage'] ?>  " alt="">
                     </div>
                     <div class="details">
                        <div class="name">
                           <a href="#">   <?php echo $list_member['MemberName'] ?>    </a>
                        </div>
                        <div class="time">
                           <i class="fa fa-clock-o"></i> Email:<?php echo $list_member['MemberEmail']  ?>
                        </div>
                        <div class="type">
                           <span class="label label-danger"> <?php echo $list_member['MemberPosition'] ?></span>
                        </div>
                     </div>
                  </li>   
			   <?php }?>				  
               </ul>
               <br>
               <a href="user.php" class="btn btn-success pull-right">View all members</a>
            </div>
            
           
         </div>
      </div>
   </div>
</div>
</div> </span>
</div>



<script>
// When the user clicks on div, open the popup
function myFunction_User() {
  var popup = document.getElementById("myUser");
  popup.classList.toggle("show");
}
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span> DashBoard Admin</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <a href="product.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Product</a>
                          <a href="supplier.php" class="btn btn-warning btn-lg" role="button"><span  class="glyphicon glyphicon-signal"></span> <br/>Reports</a>
                          <a href="product_type.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Type</a>
                          <a href="comment.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Comment</a>
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <a href="#" onclick="myFunction_User()" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Members</a>
                          <a href="customer.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Customers</a>
                          <a href="profile.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Profile</a>
                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>Setting</a>
                        </div>
                    </div>
                    <a href="index.php" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-globe"></span> Website</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Revenue Sources</h3>
                </div>
                <div class="panel-body">
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Customers</h3>
                </div>
                <div id="chart4" class="panel-body">
                </div>
            </div>
        </div>
    </div>   
</div>
    <div class="row">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Earnings Overview</h3>
                </div>
                <div class="card-block">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h3>Revenue Sources
</h3>
                </div>
                <div id="chart5" class="card-block">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
        var data4 = [13, 19, 112, 114, 212, 332, 435, 132, 67, 45, 55, 7];
            
        $("#chart1").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "line",
                data: data1
            }]
        });

        $("#chart2").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "polarbar",
                data: data2
            }]
        });

        $("#chart5").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "area",
                data: data3
            }]
        });
    });
</script>
<!-- you need to include the shieldui css and js assets in order for the grids to work -->
<link rel="stylesheet" type="text/css" href="http://www.prepbootstrap.com/Content/shieldui-lite/dist/css/light/all.min.css" />
<script type="text/javascript" src="http://www.prepbootstrap.com/Content/shieldui-lite/dist/js/shieldui-lite-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        var data1 = [12, 3, 4, 2];
        var data2 = [3, 9, 12, 14];       
            
        $(function () {            
            $("#chart3").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },               
                dataSeries: [{
                    seriesType: "pie",
                    enablePointSelection: true,
                    data: data1
                }]
            });

            $("#chart4").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                seriesSettings: {
                    pie: {
                        enablePointSelection: true,
                        borderColor: 'black',
                        borderWidth: 3,
                        dataPointText:
                            {
                                style: {                                    
                                    fontWeight: 'bold'
                            }
                        }
                    }
                },
                axisY: {
                    title: {
                        text: "Break-Down for selected quarter"
                    }
                },               
                dataSeries: [{
                    seriesType: "pie",                    
                    data: data2
                }]
            });

       
        });
      
    });
</script>


		