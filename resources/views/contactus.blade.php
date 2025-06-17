<div>
    <h1>Contact Us Page</h1>
</div>
<h1>{{$name}}</h1>
<h1>{{$city[3]}}</h2>

    @foreach ($city as $citys)
        <h1>{{$citys}}</h1>
    @endforeach

    @if($name == 'shubham')
    <h1>This is shubham</h1>
    @elseif($name == 'Kallu')
    <h1>This is Kallu</h1>
    @elseif($name == 'sam')
    <h1>This is sam</h1>
    @endif
    <h1>this is other</h1>

    @for ($i = 0; $i <= 10; $i++)
        <h1>{{$i}}</h1>
    @endfor
