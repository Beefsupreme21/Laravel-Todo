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
    <div class="w-2/3 m-auto mt-16 bg-gray-500 border border-black text-center rounded-xl p-6">
        <div class="text-2xl">Todo List</div>
        <div class="p-6">
            <form action="/store" method="POST">
                <?php echo csrf_field(); ?>
                <button class="bg-green-800 border border-black p-3 rounded-xl" type="submit" value="Submit" >Submit</button>
                <input class="border border-white w-2/3 p-3 rounded-xl" type="text" name="title">
            </form>
        </div>
        <div class="border-black border-t-4 text-2xl">
            <div class="text-2xl">All your todos</div>
            <div class="w-2/3 m-auto">
                <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex justify-between">
                        <form action="/update/<?php echo e($todo->id); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input class="bg-gray-800 border border-white mb-4" type="text" name="title" value="<?php echo e($todo->title); ?>">
                            <div>
                                <button class="text-red-500 hover:underline pr-3" type="submit">
                                    <i class="fa-solid fa-trash"></i> Update
                                </button>
                            </div>
                        </form>
                        <div class="flex">

                            <form method="POST" action="/<?php echo e($todo->id); ?>/delete">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="text-red-500 hover:underline">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    </div>


    
</body>
</html><?php /**PATH C:\xampp\Projects\Todo-List\resources\views/todo/edit.blade.php ENDPATH**/ ?>