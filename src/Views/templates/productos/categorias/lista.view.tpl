<section>
    <h2>Lista de Categorías</h2>
</section>
<section class="WWList">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Status</th>
                <th><a href="index.php?page=Productos_Categorias_CategoriasForm&mode=INS">Nuevo</a></th>
            </tr>
        </thead>
        <tbody>
            {{foreach categorias}}
            <tr>
                <td>{{id}}</td>
                <td> <a href="index.php?page=Productos_Categorias_CategoriasForm&mode=DSP&id={{id}}">{{name}}</a></td>
                <td>{{status}}</td>
                <td><a href="index.php?page=Productos_Categorias_CategoriasForm&mode=UPD&id={{id}}">Editar</a> &nbsp; | &nbsp; <a href="index.php?page=Productos_Categorias_CategoriasForm&mode=DEL&id={{id}}">Eliminar</a></td>
            </tr>
            {{endfor categorias}}
        </tbody>
    </table>
</section>