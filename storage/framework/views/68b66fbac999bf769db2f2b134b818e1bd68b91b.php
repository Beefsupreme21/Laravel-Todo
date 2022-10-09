<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-800">
    <div class="w-2/3 m-auto mt-16 border border-black">
        <h1>Create your Todo</h1>
        <form action="/update" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="title">
            <input type="submit" value="Create"> 
        </form>
    </div>

    
</body>
</html>


<?php /**PATH C:\xampp\Projects\Todo-List\resources\views/todo/create.blade.php ENDPATH**/ ?>