<!Doctype html>

<ul>
    @foreach($markets as $market)
    <li>
        <a href="{{ route('markets.show', $market)}}">
            {{$market->name}}
        </a>
    </li>
    @endforeach
</ul>

</html>