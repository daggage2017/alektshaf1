
<?php

include "header.php" ;


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // varible   -
    $name    = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['country'],FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL) ;
    $sabb = filter_var($_POST['sabb'],FILTER_SANITIZE_STRING);
    $msg =  filter_var($_POST['massege'],FILTER_SANITIZE_STRING);



    $all = "Name: " . $name ."\r\n ". "Country: " . $country ."\r\n " ."phone: " . $phone ."\r\n ";
    $all .= "email: " . $mail ."\r\n " . "Reson: " . $sabb ."\r\n " . "Messege:". $msg;

    // form errors

    $formErrors = array();

    if(strlen($name)< 3){
        $formErrors[] = 'الاسم يجب ان يزيد عن ثلاث احرف';
    }

    if(strlen($msg)< 10){
        $formErrors[] = 'اقل عدد للرساله 10 احرف';
    }

    //send mail
    $header = 'from:' . $mail . '\r\n';
    $myEmail  = 'alektshaf@gmail.com';
    $subject = ' عام الاكتشاف';


    if (empty($formErrors)) {
        //start
        mail($myEmail,  $subject , $all, $header);

        //end
        $name = '';
        $mail = '';
        $msg = '';
        $success = '<div class=" alert alert-success"> We have Recived Your Massege Thank You ....  alektshaf </div>' ;
    }


}
?>
<div class="container">
    <div class="buy">
        <div class="address">
            <p>للطلب والاستفسار يمكنكم الاتصال بنا على العنوان التالي : الكويت - خيطان - شارع بن زهير</p>

         <p>   اوقات العمل : من الساعة 9 صباحا الى الساعة 9 مساءا</p>

        <p>    البريد الالكتروني : info@alektshaf.com</p>

          <p>  التلفون:     0096597232322   -  0096556606678</p>
        </div>
        <div class="info">
             <p>يرجى التأكد من كتابة البريد الالكتروني ( الايميل ) بشكل صحيح لضمان حصولكم على الرد</p>
        </div>

        <!--print error-->
        <?php if(! empty($formErrors)) { ?>
            <div class="alert alert-danger alert-dismissible" role = "start">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <?php
                foreach($formErrors as $error) {
                    echo $error. '<br>' ;
                }
                ?>
            </div>

        <?php } ?>
        <?php  if (isset($success)) { echo $success;}  ?>

        <!--end print error-->
    <div class="send">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>الاسم</label>
                <input type="text" class="form-control" name="name" >
            </div>

            <div class="form-group">
                <label>الدولة </label>
                <input type="text" class="form-control" name="country" >
                <div class="alert alert-danger custem-alert">
                    name less than 3 charctars
                </div>
            </div>


            <div class="form-group">
                <label>التلفون</label>
                <input type="text" class="form-control" name="phone" >
            </div>


            <div class="form-group">
                <label>الايميل</label>
                <input type="text" class="form-control" name="email" >
            </div>


            <div class="form-group">
                <label>سبب الاتصال</label>
                <select type="text" class="form-control" name="sabb" >
                    <option value=1">شراء</option>
                    <option value="2">استفسار</option>
                    <option value="3">صيانة</option>
                </select>
            </div>

            <div class="form-group">
                <label>الرسالة</label>
                <textarea type="text" class="form-control" name="massege" ></textarea>
            </div>

            <div class="form-group">
                <button type="submit"  class="btn btn-primary btn-block send-btn">ارسال </button>
            </div>
        </form>

    </div>


        <div class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13919.871323960606!2d47.982959722814925!3d29.28327327796712!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x439422a7b42fd027!2z2YXYpNiz2LPYqSDYudin2YTZhSDYp9mE2KXZg9iq2LTYp9mBINin2YTYqtis2KfYsdmK2Kk!5e0!3m2!1sar!2s!4v1531804362121" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
</div>
</div>

<?php include "footer.php" ?>