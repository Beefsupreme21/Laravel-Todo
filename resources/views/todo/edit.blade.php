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
                @csrf
                <button class="bg-green-800 border border-black p-3 rounded-xl" type="submit" value="Submit" >Submit</button>
                <input class="border border-white w-2/3 p-3 rounded-xl" type="text" name="title">
            </form>
        </div>
        <div class="border-black border-t-4 text-2xl">
            <div class="text-2xl">All your todos</div>
            <div class="w-2/3 m-auto">
                @foreach ($todos as $todo)
                    <div class="flex justify-between">
                        <form action="/update/{{$todo->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input class="bg-gray-800 border border-white mb-4" type="text" name="title" value="{{ $todo->title }}">
                            <div>
                                <button class="text-red-500 hover:underline pr-3" type="submit">
                                    <i class="fa-solid fa-trash"></i> Update
                                </button>
                            </div>
                        </form>
                        <div class="flex">

                            <form method="POST" action="/{{$todo->id}}/delete">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:underline">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>


    
</body>
</html>