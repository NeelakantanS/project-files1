<?php
     session_start();
	//mysql_connect("localhost","root","");
	//mysql_select_db("event");
?>
<?php


    
     function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

 if(isset($_POST["Event_Submit"]))
  {      
        
        $event_name=$_POST['event_name'];
		$dep=$_POST['department'];
		$time=$_POST['time'];
		$date=$_POST['date'];
		$price=$_POST['price'];
		$descr=$_POST['description'];	 
		$features=$_POST['features'];	 
		$members=$_POST['members'];	 
	 
	 
        if (!empty($_FILES["uploadedimage"]["name"])) {

            $file_name=$_FILES["uploadedimage"]["name"];
            $temp_name=$_FILES["uploadedimage"]["tmp_name"];
            $imgtype=$_FILES["uploadedimage"]["type"];
            $ext= GetImageExtension($imgtype);
            $imagename=date("d-m-Y")."-".$file_name.$ext;
            $target_path = "img/".$imagename;
	

            if(move_uploaded_file($temp_name, $target_path)) 
            {
                echo"file uploaded";
/*
                $query_upload="INSERT into events(eventname,department,date,price,descr,totalmembers,features,event_img,time)  values('$event_name','$dep','$date','$price','$descr','$members','$features','$target_path','$time')";
    
	            $query=mysql_query($query_upload) or die("error in $query_upload".mysql_error());  
	
                if($query)
                {
                    echo"<script>alert('Data Inserted Successfully');</script>";
                    header("location:admin-panel.php");
                }
        
                else
                {
                    echo"<script>alert('Failed to insert data');</script>";
                    header("location: admin-panel.php");

                }
*/
            
            }
            else
            {

                exit("Error While uploading image on the server");
            } 

        }
    
 }

if(isset($_POST["Sponsor_Submit"]))
  {     
        $name=$_POST['sponsor'];
			 	 
	 
        if (!empty($_FILES["uploadedimage1"]["name"])) {

            $file_name=$_FILES["uploadedimage1"]["name"];
            $temp_name=$_FILES["uploadedimage1"]["tmp_name"];
            $imgtype=$_FILES["uploadedimage1"]["type"];
            $ext= GetImageExtension($imgtype);
            $imagename=date("d-m-Y")."-".$file_name.$ext;
            $target_path1 = "img/".$imagename;
	

            if(move_uploaded_file($temp_name, $target_path1)) 
            {

                $query_upload="INSERT into sponsors(sponsorsname,Image)  values('$name','$target_path1')";
    
	           $query1= mysql_query($query_upload) or die("error in $query_upload".mysql_error());  
	
                if($query1)
                {
                    echo"<script>alert('Data Inserted Successfully');</script>";
                    header("location:admin-panel.php");
                }
        
                else
                {
                    echo"<script>alert('Failed to insert data');</script>";
                    header("location: admin-panel.php");

                }
            
            }
            else
            {

                exit("Error While uploading image on the server");
            } 

        }
    
 }

?>
