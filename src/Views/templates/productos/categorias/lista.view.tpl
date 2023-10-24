<section>
    <h2>Lista de Categorías</h2>
</section>
<section>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Status</th>
                <th><a href>Nuevo</a></th>
            </tr>
        </thead>
        <tbody>
            {{foreach categorias}}
            <tr>
                <td>{{id}}</td>
                <td>{{name}}</td>
                <td>{{status}}</td>
                <td><a href>Editar</a></td>
            </tr>
            {{endfor categorias}}
        </tbody>
    </table>
</section>