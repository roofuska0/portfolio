<h1>Előfizetések</h1>

<table>
    <thead>
        <tr>
            <th>Előfizetés neve</th>
            <th>Ár</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>
                {{ $product->name }}
            </td>
            <td>
                {{ $product->price }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
