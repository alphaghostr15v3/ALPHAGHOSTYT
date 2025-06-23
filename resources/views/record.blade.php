<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Styled Table</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            padding: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background-color: #007BFF;
            color: white;
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center">User Information Table</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Address</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Skills</th>
                <th>Gender</th>
                <th>State</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $students)
            <tr>
                <td>{{$students->id}}</td> 
                <td>{{$students->name}}</td>
                <td>{{$students->father}}</td>
                <td>{{$students->mother}}</td>
                <td>{{$students->address}}</td>
                <td>{{$students->mob}}</td>
                <td>{{$students->skill}}</td>
                <td>{{$students->gender}}</td>
                <td>{{$students->state}}</td>
                <td>{{$students->age}}</td>
            </tr>
            @endforeach
            <!-- Add more rows here if needed -->
        </tbody>
    </table>

</body>
</html>
