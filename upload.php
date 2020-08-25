<!DOCTYPE html>
<html lang="en">
<title>Form</title>
<meta name="robots" content="noindex, follow">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet" href="https://www.cashbachat.com/public_assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.cashbachat.com/promo.css?ver=3.7">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
</head>


<body>
    
        <section class="promo-main-section">




                    <div class="promo-offer-block rounded bg-white mb-4">
<?php

$folder_name=$_POST['mo'];



            if (!file_exists("p/$folder_name"))/* Check folder exists or not */
			{
				@mkdir("p/$folder_name");/* Create folder by using mkdir function */

			}
			?>

<?php




if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
 
$mo="$folder_name";
 
 $target_dir = "p/$mo/";
 $file = $_FILES['my_file']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['my_file']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "";
 }
}
?>
<?php
if (($_FILES['my_file1']['name']!="")){
// Where the file is going to be stored
 $target_dir = "p/$mo/";
 $file = $_FILES['my_file1']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['my_file1']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "<b>You Are Already Submit This You Couldn't Submit Again<div/>";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 
file_put_contents("form.txt", $mo . PHP_EOL, FILE_APPEND);
 
 echo "<b>Your Record Saved Successful Please Wait 24 hour For Verification</div>";
 }
}


?>