<h1>Vista de clientes</h1>
<ul>
    @foreach($clientes as $client)
    <li>
        {{$client->nombre}}
    </li>

    <li>
        {{$client->apellido}}
    </li>

    <li>
        {{$client->created_at}}
    </li>
    @endforeach



</ul>