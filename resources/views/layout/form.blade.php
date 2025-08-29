<html>
<head>
    <title>Add New Recipe</title>
    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .form-box {
            max-width: 550px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border: 2px solid #ccc;
            border-radius: 15px;
            box-shadow: 0 8px 18px rgba(0,0,0,0.1);
        }

        .form-box h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #34495e;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #bbb;
            border-radius: 8px;
            font-size: 15px;
            background-color: #f9f9f9;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
@yield('form')
</body>
</html>
<html>
<head>
    <title>Recipe</title>
    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', sans-serif;
        }

        ol {
            max-width: 550px;
            margin: 50px auto;
            padding: 25px;
            background-color: #ffffff;
            border: 2px solid #ccc;
            border-radius: 15px;
            box-shadow: 0 8px 18px rgba(0,0,0,0.1);
           
        }

        ol li {
            padding: 15px 20px;
            margin-bottom: 15px;
            background-color: #eef4fb;
            border-left: 6px solid #3498db;
            border-radius: 8px;
            font-size: 16px;
            color: #2c3e50;
        }

        ol li strong {
            display: inline-block;
            width: 120px;
            color: #34495e;
        }

        ol li:hover {
            background-color: #dceefc;
        }
    </style>
</head>
<body>
@yield('list')

</body>
</html>

<html>
<head>
    <title>Recipes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color:  #343a40;
            color: white;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #343a40;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #d7d0d0ff;
        }

        form {
            display: inline;
        }
        button {
    padding: 6px 12px;
    margin: 0 2px;
    border-radius: 4px;
    cursor: pointer;
    color: white;
}

.btn-show {
    background-color: #343a40; 
}

.btn-edit {
    background-color:  #343a40; 
}

.btn-delete {
    background-color: #dc3545; 
}

button:hover {
    opacity: 0.9;
}
    </style>
</head>
<body>
@yield('table')
</body>
</html>
