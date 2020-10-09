<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                padding: 0;
                margin: 0;
                color: white;
                font-family: Arial;
                background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('63336.jpg') ;
                background-size: cover;
            }
            .tab_formet table{
                background-color: aliceblue;
                border: 0;
                color: gray;
            }
            .tab_formet table td:nth-child(odd){
                background-color: deepskyblue;
                color: white;
                border: 0;
            }
            .tb{
                padding: 20px;
                box-shadow:10px 10px 70px 5px gray ;
            }
            .tb:hover{
                box-shadow:10px 10px 70px 5px gray ;
                 box-shadow: 1px 1px 20px black, 0 0 75px greenyellow, 0 0 5px gold;
                 transition: 0.5s ;
            }
            input{
                background-color: royalblue;
                color: white;
                height:5%;
                width: 10%;
                border-radius: 20px 20px;
                border: none;
                box-shadow:10px 10px 70px 5px gray ;
                font-size: 20px;
            }
            input:hover{
                border-bottom: white;
                box-shadow: 1px 1px 20px black, 0 0 75px greenyellow, 0 0 5px gold;
                transition: 0.5s ;
            }
            @media print
        {
        body * { visibility: hidden; }
        #Res_Print * { visibility: visible; }
        #Res_Print { position: absolute; top: 40px; left: 30px; }
        }
            .pt:hover{

                background-color: red;
                padding-right:   10px;
                visibility: hidden;
                transition: 0.7s ;
            }

        </style>
    </head>
    <body>

    <?php if (isset($_FILES['profile_pic'])) 
          { 
            $name = str_replace(' ', '', $_POST['name']); 
            $errors = array(); 
            $file_name = $_FILES['profile_pic']['name']; 
            $file_size = $_FILES['profile_pic']['size']; 
            $file_tmp = $_FILES['profile_pic']['tmp_name']; 
            $file_type = $_FILES['profile_pic']['type'];   
            $ftype= mime_content_type($file_tmp);
            echo "$ftype";
            $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); 
            $target_file = "upload/".$name."/".$file_name; ?> 
                <?php 
                #echo $file_ext; 
                $expensions = array("jpeg", "jpg", "png"); 
                if (file_exists($target_file)) 
                { 
                    echo "Sorry, file already exists.";                   
                } 
                else if (in_array($imageFileType, $expensions) === false) 
                { 
                    $errors[] = "Extension not allowed,Only allowed JPEG or PNG file.";
                } 
                else if ($file_size > 2097152) 
                { 
                    $errors[] = 'File size must be excately 2 MB';                     
                }
                else 
                {
                    if (empty($errors) == true) 
                    { 
                            
                            $path="./upload/$name";
                            if(!is_dir($path))
                            {
                                mkdir($path,0777,true);
                            }
                            elseif(file_exists($path)) 
                            {
                                die("Already exist");
                            }
                            else 
                            {
                                die("Failed");
                            }
                        move_uploaded_file($file_tmp, "upload/" .$name."/". $file_name); ?> 
                        <?php
                    }
                    else 
                    {?> 
                        File Uploaded Status<?php print_r($errors); ?>
                        <?php                    
                    }                   
                }

            }
    ?> 
    <center>
        <table border="0" style="width:100%;">
            <thead style="background-color: royalblue;font-size:20px; text-shadow:2px 2px 10px #000000; color: white;">
                <tr >
                    <th  style="padding: 20px; "><?php echo"<img style='border-radius: 50%;box-shadow:2px 2px 10px #000000;' src=".$target_file." width=7% />";?><br><?php echo $_POST['name'];?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            echo "<table style='padding-left:20%;'><tr><td>Name: </td><td>",$_POST['name']."</td></tr><tr><td>DOB: </td><td>".$_POST['DOB']."</td></tr><tr><td>Gender: </td><td>".$_POST['gender']."</td></tr><tr><td>City: </td><td>".$_POST['City']."</td></tr><tr><td>Hobby: </td><td>";
                            foreach($_POST['Hobby'] as $Hobby){
                                echo "$Hobby, ";
                            }
                            echo "</td></tr></table>";
                        ?>                                    
                    </td>
                </tr>
                <tr>
                    <td style='padding-left:20%;'>
                        <div class="tab_formet">
                        <?php
                            echo "<table border=1><tr><td>Name:</td><td>".$file_name."</td></tr><tr><td> Size:</td><td>".$file_size." </td></tr><tr><td>Temp:</td><td>".$file_tmp."</td></tr><tr><td>type</td><td>".$file_type."</td></tr><tr><td> Extension:</td><td>".$imageFileType."</td></tr><tr><td>Uploaded Status: </td>"."<td>Success</td></tr>"."<tr><td>Picture: </td><td><img src=".$target_file." width=60 % /></td></tr></table>";
                        ?>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>  
    </center>
<?php/*
    $name = $_POST['name'];
    $path="./upload/$name";
    if(!is_dir($path))
    {
        mkdir($path,0777,true);
    }
    elseif(file_exists($path)) 
    {
        die("Already exist");
    }
    else 
    {
        die("Failed");
    }*/
?>   
    </body>
</html>
