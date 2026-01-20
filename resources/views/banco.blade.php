<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bàn cờ vua {{ $n }}x{{ $n }}</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat({{ $n }}, 50px); /* Tạo n cột, mỗi cột 50px */
            width: fit-content;
            border: 2px solid #333;
            margin: 20px;
        }
        .cell {
            width: 50px; height: 50px;
            display: flex; align-items: center; justify-content: center;
            font-weight: bold; border: 1px solid #ccc;
        }
        .black { background-color: #000; color: #fff; }
        .white { background-color: #fff; color: #000; }
    </style>
</head>
<body>
    <h3>Bàn cờ kích thước {{ $n }} x {{ $n }}</h3>
    <div class="board">
        @for ($row = 0; $row < $n; $row++)
            @for ($col = 0; $col < $n; $col++)
                {{-- Logic: Nếu tổng hàng+cột là chẵn thì màu trắng, lẻ thì màu đen --}}
                <div class="cell {{ ($row + $col) % 2 == 0 ? 'white' : 'black' }}">
                    {{ $row }},{{ $col }}
                </div>
            @endfor
        @endfor
    </div>
</body>
</html>