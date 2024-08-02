
<?php
$the_name=null;

if($_SERVER['REQUEST_METHOD']=="POST"){
    $the_name = $_POST['name'];
    $the_id = $_POST['id'];
    $the_department = $_POST['department'];
    $the_classroom = $_POST['classroom'];
    $the_gpa = $_POST['gpa'];
    
    echo "<table style='width:80%; text-align:center; border-spacing:2px; margin:15px' >
            <tr style='background-color:#75b798; color:#eee; font-weight:bold; padding:10px;'>
                <th>Student Name</th>
                <th>ID</th>
                <th>Classroom</th>
                <th>Department</th>
                <th>GPA</th>
            </tr>
            <tr style='background-color:#eee; color:black; padding:10px;'>
                <td > $the_name</td>
                <td> $the_id</td>
                <td> $the_classroom</td>
                <td> $the_department</td>
                <td> $the_gpa</td>
            </tr>
        </table>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" class="form"  style = "display: block;
        margin-top:20px;
        width: 100%;
        height: 100vh;
        padding-left:20px;">
        <h2 style="font-size: 45px; margin-bottom: 10px;font-family:'Gill Sans';">Welcome</h2>
        <label style="width:120px;font-weight:bold" for="">Student Name</label>
     
        <input style="height: 40px;
            width: 60%;
            padding: 0 28px;
            border-radius: 4px;
            border: 1px #6c14d0 solid;
            margin: 5px 0;
            font-size:18px;
            background-color: initial;"  name="name" class="userName" placeholder="Student Name" type="text">
        <br/>
        <label style="width:120px;font-weight:bold" for="">ID</label>
        
        <input 
        style="height: 40px;
            width: 60%;
            padding: 0 28px;
            border-radius: 4px;
            border: 1px #6c14d0 solid;
            margin: 5px 0;
            font-size:18px;
            background-color: initial;" name="id" class="id" placeholder="ID" type="number"> 
        <br/>
        <label style="width:120px;font-weight:bold" class="forget">Classroom</label>
        <select name="classroom" style="height: 40px;
            width: 60%;
            padding: 0 28px;
            border-radius: 4px;
            border: 1px #6c14d0 solid;
            margin: 5px 0;
            font-size:18px;
            background-color: initial;" class="classroom"  name="classroom" >
            <optgroup  label="Select classroom">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </optgroup>
        </select>
        <br/>
        <label style="width:120px ;font-weight:bold" class="forget">Department</label>
        <select style="height: 40px;
            width: 60%;
            padding: 0 28px;
            border-radius: 4px;
            border: 1px #6c14d0 solid;
            margin: 5px 0;
            font-size:18px;
            background-color: initial;" class="department"  name="department" >
            <optgroup label="Select Department">

                <option value="Communication">Communication</option>
                <option value="Computer">Computer</option>
                <option value="Electronics">Electronics</option>
                <option value="Network And Security">Network And Security</option>
                <option value="Power">Power</option>
                <option value="Control">Control</option>
                
            </optgroup>
        </select>
        <br/>
        <label style="width:120px ; font-weight:bold" class="forget">GPA</label>
       
        <input 
        style="height: 40px;
            width: 60%;
            padding: 0 28px;
            border-radius: 4px;
            border: 1px #6c14d0 solid;
            margin: 5px 0;
            font-size:18px;
            background-color: initial;" name="gpa" step="0.01" class="gpa" placeholder="GPA" type="number">
        <br/>
        <input 
        style="height: 40px;
            padding: 0 50px;
            border-radius: 4px;
            border: 1px #6c14d0 solid;
            margin: 5px 122px;
            font-size:18px;
            background-color: initial;" type="submit">
            
    </form>
    
</body>
</html>
