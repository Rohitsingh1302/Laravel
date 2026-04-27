<!DOCTYPE html>
<html>
<body>

<h1>Clothes Available at the Shop</h1>

<ul>
    @foreach ($clothes as $id => $cloth)
        <li>
            <a href="{{ action([App\Http\Controllers\ClothesController::class, 'show'], ['id' => $id]) }}">
                {{ $cloth['name'] }} - {{ $cloth['price'] }}
            </a>
        </li>
    @endforeach
</ul>

</body>
</html>
