<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .table-wrapper {
            overflow-x: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }

        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        th {
            padding: 20px 15px;
            text-align: left;
            font-weight: 600;
            color: white;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
        }

        th:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 25%;
            height: 50%;
            width: 1px;
            background: rgba(255, 255, 255, 0.3);
        }

        tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #f0f0f0;
        }

        tbody tr:hover {
            background: linear-gradient(90deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        td {
            padding: 18px 15px;
            color: #2c3e50;
            font-size: 1rem;
            line-height: 1.5;
            transition: all 0.3s ease;
        }

        .student-id {
            font-weight: 700;
            color: #667eea;
            font-size: 1.1rem;
        }

        .student-name {
            font-weight: 600;
            color: #2c3e50;
        }

        .grade {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: 600;
            text-align: center;
            min-width: 60px;
        }

        .grade-a {
            background: linear-gradient(135deg, #56ab2f, #a8e6cf);
            color: #2d5016;
        }

        .grade-b {
            background: linear-gradient(135deg, #ffeaa7, #fab1a0);
            color: #8b4513;
        }

        .grade-c {
            background: linear-gradient(135deg, #fd79a8, #fdcb6e);
            color: #d63031;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-active {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .status-inactive {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .contact {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .contact:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
                margin-bottom: 20px;
            }

            th, td {
                padding: 12px 8px;
                font-size: 0.9rem;
            }

            .table-wrapper {
                border-radius: 10px;
            }

            table {
                border-radius: 10px;
            }
        }

        /* Add some micro-interactions */
        th {
            position: relative;
            overflow: hidden;
        }

        th::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        th:hover::before {
            left: 100%;
        }

        /* Loading animation for fun */
        .container {
            position: relative;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
            border-radius: 20px 20px 0 0;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Student Data Management</h1>
        
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Course</th>
                        <th>Grade</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $student)
                    <tr>
                        <td class="student-id">{{$student->student_id}}</td>
                        <td class="student-name">{{$student->full_name}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->course}}</td>
                        <td><span class="grade grade-a">{{$student->grade}}</span></td>
                        <td><a href="mailto:rajesh@email.com" class="contact">{{$student->email}}</a></td>
                        <td><span class="status status-active">{{$student->status}}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
