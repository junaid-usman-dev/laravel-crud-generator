<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    
    <form action="{{ Route('update') }}" method="post" >

        <input type="hidden" name='id' value="{{ $customer->id }}" />
        <input type="text" name='name' value="{{ $customer->name }}" />
        <input type="email" name='email' value="{{ $customer->email }}" />
        <input type="password" name='password' value="{{ $customer->password }}" />
        
        <input type="submit" name='submit' value="Submit" />

    </form>


</body>
</html>