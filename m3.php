<!DOCTYPE html>
<html lang="en">
    <style>
        <?php include 'css/m3.css'; ?>
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php
function launce(){
    $launce = strtotime("2022-04-21") - strtotime(date("Y-m-d"));
    $day = abs(floor($launce / (60 * 60 * 24)));
    return  $day;
}

function getUsers($file){
    $myFile = file_get_contents($file);
    $lines = explode("\n",$myFile);
    $users = $lines[1];
     return $users; 
}

function userThisMonth(){
    $today = getUsers(date("Y-m-d", strtotime("-1 days")) . "-users.txt");
    $firstDay = getUsers(date("Y-m-01") . "-users.txt");
    $thisMonth = $today - $firstDay;
    return " + $thisMonth this month ";
}

function getPets($file){
    $myFile = file_get_contents($file);
    $lines = explode("\n",$myFile);
    $pets = $lines[3];
     return $pets; 
}

function petThisMonth(){
    $today = getPets(date("Y-m-d", strtotime("-1 days")) . "-users.txt");
    $firstDay = getPets(date("Y-m-01") . "-users.txt");
    $thisMonth = $today - $firstDay;
    return " + $thisMonth this month ";
}

function androidInstall($file){
    $myFile = file_get_contents($file);
    $lines = explode("\n",$myFile);
    $colFacebook = explode(",", $lines[1]);
    $colOrganic = explode(",", $lines[2]);
    $sum = $colOrganic[6]+$colFacebook[6] ;
    return $sum ;
}

function appleInstall($file){
    $myFile = file_get_contents($file);
    $lines = explode("\n",$myFile);
    $colOrganic = explode(",", $lines[1]);
    $colGooglead = explode(",", $lines[2]);
    $sum = $colOrganic[6]+$colGooglead[6] ;
    return  $sum;
}



?>
<div class="bg">
    <img src="./images/Vector-top.svg" alt="" class="bg-top">
    <img src="./images/Vector-bot.svg" alt="" class="bg-bot"> 
</div>


  <div class="box1 detail">
  <img src="./images/days.svg" alt="days" class="center">
        <div class="text-detail">
            <h1><?php echo launce() ?></h1>
            <h3>Day since Release</h3>
        </div>
  </div>
  <div class="box2 detail">
  <img src="./images/users.svg" alt="users" class="center">
        <div class="text-detail">
            <h1><?php  echo getUsers(date("Y-m-d", strtotime("-1 days")) . "-users.txt"); ?></h1>
            <h3>Registered Users</h3>
            <div class="box">
                <h4><?php echo userThisMonth() ?></h4>
            </div>
            
        </div>
  </div>

  <div class="box3 detail">
  <img src="./images/pets.svg" alt="pets" class="center">
        <div class="text-detail">
        <h1><?php  echo getPets(date("Y-m-d", strtotime("-1 days")) . "-users.txt"); ?></h1>
            <h3>Registered Pets</h3>
            <div class="box">
                <h4><?php echo petThisMonth() ?></h4>
            </div>
        </div>
  </div>

  <div class="box4 detail">
  <img src="./images/logo.svg" alt="logo" class="center">
        <div class="text-detail">
            <h1>1.0.15</h1>
            <h3>Current Release</h3>
        </div>
    </div>

  <div class="box5 detail">
  <img src="./images/ios.svg" alt="ios" class="center">
        <div class="text-detail">
        <h1><?php echo appleInstall("apple.txt"); ?></h1>
            <h3>iOS Installations</h3>
            <div class="box">
            <h4>+ xx this month</h4>
            </div>
        </div>
  </div>

  <div class="box6 detail">
  <img src="./images/android.svg" alt="android" class="center">
        <div class="text-detail">
        <h1><?php echo appleInstall("android.txt"); ?></h1>
        <h3>Android Installations</h3>
        <div class="box">
        <h4>+ xx this month</h4>
            </div>
        </div>
</div>

</body>
</html>