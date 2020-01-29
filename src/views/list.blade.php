<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
}
  
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
  
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<body>
    <h2>Display All Customers</h2>
    <a href="{{ Route('create') }}">Create</a> <br> <br>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>Actions</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->password }}</td>
                <td>
                    <a href="{{ url('delete') }}/{{ $customer->id }}">Delete</a>
                    <a href="{{ url('edit') }}/{{ $customer->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
        
       
    </table>
</body>
</html>