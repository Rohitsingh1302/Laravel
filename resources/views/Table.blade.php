<div>
    <p>Table of {{ $num }}</p>
    @for($i=1; $i<=10; $i++)
        <p>{{ $num }} x {{ $i }} = {{ $num * $i }}</p>
    @endfor
</div>
