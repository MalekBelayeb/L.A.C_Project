  <div id="couponModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="coupon_form" action="addCoupon.php" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 align="centre" class="modal-title">Add Coupon</h4>
                    </div>
                    <div class="modal-body">
                        <label>Enter Code Coupon</label>
                        <input type="text" name="code_coupon"  placeholder="code coupon" id="code_coupon" class="form-control" />
                        <br />
                        <label>Enter Value</label>
                        <input type="text" name="value_coupon"  placeholder="le pourcentage de reduction" id="value_coupon" class="form-control" />
                        <br />
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" id="user_id" />
                        <input type="hidden" name="operation" id="operation" />
                        <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid-->

<?php
include('C:/wamp/www/AvenirCulturel/Config.php');
include "C:/wamp/www/AvenirCulturel/core/CouponCore.php";
        $c=new Coupon($_POST['code_coupon'],$_POST['value_coupon']);
        $cc=new CouponCore();
        $result =$cc->AjouterCoupon($c);
        header('location:http://localhost/AvenirCulturel\Views\ADMIN/CouponTable.php');
?>

