<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zuri project</title>
</head>
<body>
    <form action="user_data.php" method="POST">
        <input type="text" placeholder="Enter your name" name="name" required/>
        <input type="email" placeholder="Enter your email" name="email" required/>
        <input type="date" placeholder="Enter your DOB" name="DOB" required/>
         <p>Select your Gender
            <input type="radio" value="male" name="gender" required/> Male
            <input type="radio" value="female" name="gender" required/> Female
         </p>
        
        <input type="text" placeholder="Enter your country" name="country" required/>

        <button type="submit" value="Submit" name="submit">Submit</button>
        
    </form>
    
</body>
</html>