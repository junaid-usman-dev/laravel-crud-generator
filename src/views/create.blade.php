<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    
    <form action="{{ Route('store') }}" method="post" >

        <input type="text" name='name' placeholder="Name" />
        <input type="email" name='email' placeholder="Email" />
        <input type="password" name='password' placeholder="Password" />
        
        <input type="submit" name='submit' value="Submit" />

    </form>


</body>
</html>