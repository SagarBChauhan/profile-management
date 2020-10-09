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
            input,textArea,select{
                margin: 2px;
                padding: 10px;
                border-radius: 2px 10px;
                border: none;
            }
            input:focus,textArea:focus,select:focus,input:checked{
                border-radius: 2px 10px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
            }
            input:hover,textArea:hover,select:hover{
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
            }
            input[type=file]
            {
                box-shadow: none    ;
            }
            input[type=submit]{
                margin: 2px;
                padding: 10px;
                border-radius: 10px 10px;
                border: none;
                width: 100px;
                color: white;
                background-color: royalblue;
            }
            input[type=submit]:hover{
                background-color: royalblue;
                color: white;
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px royalblue, 0 0 25px blue, 0 0 5px white;
                transition: 0.5s ;
                font-weight: bold;
                text-shadow: 1px 1px 20px white, 0 0 25px white, 0 0 5px white;
            }
            input[type=reset]{
                margin: 2px;
                padding: 10px;
                border-radius: 10px 10px;
                border: none;
                width: 100px;
                color: white;
                background-color: red;
            }
            input[type=reset]:hover{
                background-color: red;
                color: white;
                border-radius: 10px 2px;
                box-shadow: 1px 1px 20px red, 0 0 25px red, 0 0 5px white;
                transition: 0.5s ;
                font-weight: bold;      
                text-shadow: 1px 1px 20px white, 0 0 25px white, 0 0 5px white;
            }
            header{
                background-color: royalblue;
                color: white;
                border-radius:10px 2px;
                width:80%;
                margin-left:30px; 
                box-shadow:0px 0px 30px 5px greenyellow ;
            }
        </style>
    </head>
    <body>
        <header>
            <h1  style="box-shadow:10px 10px 70px #000000;padding: 20px;font-size:50px;border: solid 5px white;background-color: white; color: royalblue; border-radius:10px 2px; width: fit-content;">PRO<b style="color:greenyellow;text-shadow: 4px 4px 10px #000000;">FILE</b></h1>
        </header>
        <form action="Profile.php" method="post" enctype="multipart/form-data">
            <center>
            <table cellpadding='5'>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Enter your name" title="what is your full name?" ></td>
                </tr>                
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="DOB" title="your born date" ></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="Male" title="Are you male?" >Male
                        <input type="radio" name="gender" value="Female" title="Are you Female?" >Female
                    </td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td>
                        <select name="City" title="In which city do you live?">
                            <option >Select</option>
                            <option >Navsari</option>
                            <option >Surat</option>
                            <option >Valsad</option>
                            <option >Ahemdabad</option>
                            <option >Rajkot</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobby:</td>
                    <td>
                        <input type="checkbox" name="Hobby[]" value="Reading" title="Do you like to Read?" >Reading
                        <input type="checkbox" name="Hobby[]" value="Dancing" title="Do you like to Dance?" >Dancing
                        <input type="checkbox" name="Hobby[]" value="Music" title="Do you like listening Music?" >Music
                        <input type="checkbox" name="Hobby[]" value="Food" title="are you foody?" >Food
                        <input type="checkbox" name="Hobby[]" value="Traveling" title="Do you like to Travell?" >Traveling
                        <input type="checkbox" name="Hobby[]" value="Programming" title="Are you a programmer?" >Programming
                        <input type="checkbox" name="Hobby[]" value="Drawing" title="Are you painter?" >Drawing
                        <input type="checkbox" name="Hobby[]" value="Photography" title="Are you photographer?" >Photography
                    </td>
                </tr>
                <tr>
                    <td>Profile Picture:</td>
                    <td><input type="file" name="profile_pic" title="picture" ></td>
                </tr>

                <tr>
                    <td><input type="submit" name="Submit" title="Go on if you done?" ></td>
                    <td><input type="reset" name="Reset" title="Are you sure?" ></td>
                </tr>
            </table>
            </center>
        </form>       
        <?php
        // put your code here
        ?>
    </body>
</html>
