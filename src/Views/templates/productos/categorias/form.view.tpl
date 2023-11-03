<section class="depth-2 py-4 px-4">
    <h1>{{modedsc}}</h1>
</section> 
{{with categorias}}
<form class="my-4 depth-2 py-4 px-4 row" action="index.php?page=Productos_Categorias_CategoriasForm&mode={{~mode}}&id={{id}}" method="POST">
    <input type="hidden" name="xss_token" value="{{~xss_token}}">
    <section class="col-8 offset-2">
        <section class="row align-center">
            <label class="col-4" for="id">Código</label>
            <input class="col-6" type="text" name="id" id="id" value="{{id}}" readonly/>
        </section>
    <br>
        <section class="row align-center">
            <label class="col-4" for="name">Categoria</label>
            <input class="col-6" type="text" name="name" id="name" placeholder="Nombre Categoria" value="{{name}}" {{~readonly}} />   
            {{if name_error}}<div class="error">{{name_error}}</div>{{endif name_error}}
        </section>
    
    <br>
        <section class="row my-2 align-center">
            <label class="col-4" for="status">Estado</label>
            <select class="col-6" id="status" name="status">
                <option value="AC" {{AC_selected}}>Activo</option>
                <option value="INA" {{INA_selected}}>Inactivo</option>
            </select>
            {{if status_error}}<div class="error">{{status_error}}</div>{{endif status_error}}
        </section>
        <br><br>
        <section class="col-10 right">
            {{if ~showConfirm}}
            <button type="submit" name="btnConfirm">Confirmar</button>&nbsp;
            {{endif ~showConfirm}}
            <button id="btnCancel" >Cancelar </button>
        </section>
    </section>
    
    
</form>
{{endwith categorias}}
<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        document.getElementById("btnCancel").addEventListener("click",(e)=>{
            e.preventDefault();
            e.stopPropagation();
            document.location.assign("index.php?page=Productos_Categorias_CategoriasList")
        })
    })
</script>