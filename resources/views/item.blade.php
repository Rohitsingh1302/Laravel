
<body>
<h1>{{ $item['name'] }}</h1>
<p>Price: ₹{{ $item['price'] }}</p>
<p>Description: {{ $item['desc'] }}</p>
<a href="{{ action([App\Http\Controllers\ClothesController::class,'index']) }}">
Back to Clothes List
</a>
</body>
