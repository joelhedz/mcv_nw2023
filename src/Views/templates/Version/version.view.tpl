<h1>Versiones del Sistema</h1>
{{if hasVersionRows}}
<table>
    <thead>
        <tr>
            <th>Version</th>
            <th>Fecha</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        {{foreach version}}
        <tr>
            <td>{{version}}</td>
            <td>{{description}}</td>
            <td>{{create_at}}</td>
        </tr>
        {{endfor version}}
    </tbody>
</table>
{{endif hasVersionRows}}