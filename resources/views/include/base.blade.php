<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assets Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div class="bg-pink-700 p-5 text-white flex place-content-between sticky top-0">
        <h2>Asset Tracker</h2>

        <ul class="flex gap-2">
            <li><a href="">Home</a></li>
            <li><a href="" class="px-3 py-2 bg-black rounded hover:bg-green-700 hover:text-white">Login</a></li>
        </ul>
    </div>
    

    @section('content')
       @show
    
</body>
</html>