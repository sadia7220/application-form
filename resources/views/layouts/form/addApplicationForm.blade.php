<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        h3 {
            text-align: center;
        }
        form {
            width: 300px;
            display: inline-block;
        }
        body {
            text-align: center;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input {
            width: 100%;
        }
        input[type=submit] {
            width: 100%;
            background-color: #A9A9A9;
            color: white;
            padding: 8px 10px;
            margin: 8px 0;
            border: none;
            border-radius: 2px;
        }
        input[type=submit]:hover {
            background-color: #4CAF50;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .alert-success {
            padding: 10px;
            background-color: #93bf85;
            color: black;
            margin-bottom: 10px;
        }
        .alert-danger {
            padding: 10px;
            background-color: #ff9c84;
            color: black;
            margin-bottom: 10px;
        }
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .closebtn:hover {
            color: black;
        }
    </style>
</head>
<body>
            <h3>Application Form</h3>
            <div>
            @include('flash-message')
                <form method="POST" action="{{ route('store_applicationForm') }}">
                    @csrf
                        <input type="text" class="form-control" name="name" 
                            placeholder="Name" id="name">
                            
                        <input type="text" class="form-control" name="email" 
                            placeholder="Email" id="email">
                            
                        <input type="text" class="form-control" name="phone" 
                            placeholder="Phone" id="phone">
                    
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 
                        <input type="submit" value="Submit">
                </form>
            </div>                                      
</body>
</html>