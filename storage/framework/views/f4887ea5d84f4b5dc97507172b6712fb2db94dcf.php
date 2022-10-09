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
    <div class="w-2/3 m-auto mt-16">
        <div class="p-6 border border-black">
            <form action="/store" method="POST">
                <?php echo csrf_field(); ?>
                <input class="bg-gray-800 border border-white" type="text" name="title">
                <input type="submit" value="Create"> 
            </form>
        </div>
        <h1>All your todos</h1>
        <div>
            <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex">
                    <?php echo e($todo->title); ?>

                    <?php echo e($todo->id); ?>

                    <form method="POST" action="/<?php echo e($todo->id); ?>/delete">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="text-red-500">
                            <i class="fa-solid fa-trash"></i> Delete<?php echo e($todo->id); ?>

                        </button>
                    </form>

                </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>



    
</body>
</html>


<?php /**PATH C:\xampp\Projects\Todo-List\resources\views/todo/index.blade.php ENDPATH**/ ?>