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
                @csrf
                <input class="bg-gray-800 border border-white" type="text" name="title">
                <input type="submit" value="Create"> 
            </form>
        </div>
        <h1>All your todos</h1>
        <div>
            @foreach ($todos as $todo)
                <div class="flex">
                    <div>
                        {{ $todo->title }}
                    </div>
                    {{-- <form method="POST" action="/{{$todo->id}}/edit">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">
                            <i class="fa-solid fa-trash"></i> Delete{{ $todo->id }}
                        </button>
                    </form> --}}
                    <form method="POST" action="/{{$todo->id}}/delete">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">
                            <i class="fa-solid fa-trash"></i> Delete{{ $todo->id }}
                        </button>
                    </form>

                </div>


            @endforeach
        </div>
    </div>



    
</body>
</html>


