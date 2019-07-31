<!DOCTYPE html>
<?php
header('access-Control-Allow-Origin: *');
include 'connect.php';
$row['name']="";
$row['mail']="";
$row['adress']="";
$row['phone']="";
$row['frind']="";
$row['accept']="";
?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="css" href="style1.css">
    <style>
    #header1{
    height:150px;
    width:100%;
    /* background-image: url('header.jpg'); */
}
.div2{
    /* background-image: url('pic.jpg'); */
    background-attachment:scroll;
    width:100%;
    height:100%;
}

.tt2{
    text-align: right;
    color:blue;
}
.h11{
    font-size: 21px;
}
.p11{
    font-size: 15px;
}
.sha{text-align: left;}
.h22{
    font-size: 18px;

}
.footer{
    width:100%;
height:300px;
background:blue;
text-align: center;
color:white;

}
.tt{
    background-image: url('footerBackground.png');
}
    </style>
    <script>
function send(){
    console.log("id")
    window.location.href='google.com';
}
    </script>
</head>
<body>
<!-- header -->
<div id="header1 col-sm-12">
<image src="header.jpg" width="100%" height="100%" />

</div>
<div class="container">
<div class="row">
<div class="col-sm-6 div2" >
<!-- back ground imge -->
<image src="pic.jpg" width="100%" height="100%" />
</div>
<div class=".col-xl-6 .col-lg-6 .col-md-6 .col-sm-12 tt2">
<div class="dv1 dvf">
    <h1 class="h11">דפי אורז ממולאים בסלק וגבינת פטה</h1>
    <p class="p11">של <strong>אניה רויטפלד</strong>, דיאטנית במחוז השרון</p>
</div>
<div>
    <h1 class="h22" style="color:#8A0886"><strong>מצרכים ל - 4 מנות</strong></h1>
    <p class="p11">סלקים גדולים מבושלים וחתוכים לקוביות או מגורדים <br> 150 גרם גבינת פטה פיראוס 5% חתוכה לקוביות <br>40 גרם אגוזי מלך קצוצים / צנוברים<br>8 דפי אורז
    </p>
</div>
<div>
    <h1 class="h22" style="color:#8A0886"><strong>אופן ההכנה</strong></h1>
    <p class="p11">•מערבבים את המלית )סלק, פטה ואגוזים(.<br>•טובלים את דפי האורז במים ומייבשים על מגבת מטבח.<br>•מניחים במרכז כל דף 1-2 כפיות מהמלית.<br>•מגלגלים את הדפים (כמו בלינצ'ס).<br>•מגישים עם רוטב לבחירה – סויה, טריאקי, צ'ילי...<br></p>
</div>
<div>
    <h1 class="h22" style="color:#8A0886"><strong>ערכים תזונתיים למנה</strong></h1>
    <p class="p11">55 קלוריות | 10 גרם פחמימות | 9 גרם שומן <br>680 גרם נתרן | 1 גרם סיבים</p>
</div>
<h1 class="sha" style="font-size:29px" ><strong>בתאבון!</strong></h1>
</div>
<!-- send  footer-->
<div id="footer" class="footer row">
   <div class="col-12" >
   <h1  style="font-size:25px;text-align: center;">רוצים עוד מתכונים בריאים לשבועות?</h1>
    <h4 style="font-size:18px;text-align: center;">לקבלת חוברת המתכונים הדיגיטלית שלנו השאירו פרטים:</h4>
   </div><br>
    <div class="col-12">
   
    <form method="GET" action="thanks.php" >
 <input class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" value="<?php echo $row['name']; ?>" name="name"  type="name" id="name" placeholder="שם מלא:">
    <input class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" value="<?php echo $row['mail']; ?>" name="mail" type="mail" id="mail" placeholder="מייל:">
    <br><br/>
    <input class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" type="address" value="<?php echo $row['adress']; ?>" id="adress" name="adress" placeholder="עיר:"> 
    <input class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" value="<?php echo $row['phone']; ?>"  name="phone" type="number" id="phone" placeholder="מספר טלפון">
    <br><br/>
    <div style="text-align: center;">
    <div style="font-size:17px;text-align: center;" class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12">
    אני חבר/ת מכבי
    <input type="checkbox" class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" value="<?php echo $row['frind']; ?>" name="frind"  aria-label="Checkbox for following text input">
    </div>

    <div style="font-size:17px;text-align: center;" class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12">
    אני מאשר/ת קבלת דיוור ו/או חומר פרסומי
        ממכבי שירותי בריאות      
    <input type="checkbox" class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" value="<?php echo $row['accept']; ?>" name="accept" aria-label="Checkbox for following text input">
    </div>
    </div>
    <!-- <button class="col-6" id="send" style="font-size:26px;background: purple" onclick="send()" type="submit" value="שלחו לי את החוברת >>" name="Submit"></button> -->
    <input class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" id="send" style="font-size:26px;background: purple;" type="submit" value="שלחו לי את החוברת >>" name="Submit"> 
    </div> 
    </form>
</div>
</div>
</div>
<!-- t7t -->
<div class="row tt .col-xl-3 .col-lg-3 .col-md-3 .col-sm-12">
    <div class="container .col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" >
    <image class=".col-xl-3 .col-lg-3 .col-md-3 .col-sm-12" src="logo.png" height="200px" width="200px" />
    </div>
</div>
</body>
</html>