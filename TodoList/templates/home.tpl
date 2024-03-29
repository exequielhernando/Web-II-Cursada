{include file="header.tpl"}
    <div class="container">  
        <h1>{$Titulo}</h1>
        <div id="tareas-container" class="container">
            <ul class="list-group">
                {foreach from=$Tareas item=tarea }
                    {if $tarea['completada'] == 1 } 
                        <li class="list-group-item"><s>{$tarea['titulo']} ----- {$tarea['descripcion']}</s><a href="borrar/{$tarea['id']}">BORRAR</a></li>
                    {else}
                        <li class="list-group-item">{$tarea['titulo']} ----- {$tarea['descripcion']}<a href="borrar/{$tarea['id']}">BORRAR</a> | <a href="completada/{$tarea['id']}">COMPLETADA</a> | <a href="editar/{$tarea['id']}">EDITAR</a></li>  
                    {/if} 
                {/foreach}
            </ul>
        </div>
        <div class="container">
            <h2>Formulario</h2>
            <form method="post" action="agregar">
                <div class="form-group">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input type="text" class="form-control" id="tituloForm" name="tituloForm"/>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descripcion</label>
                    <input type="text" class="form-control" id="descripcionForm" name="descripcionForm"/>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm"/>
                    <label class="form-check-label" for="exampleCheck1">Completada</label>
                </div>
                <button type="submit" class="btn btn-primary">Crear tarea</button>
            </form>
        </div>    
    </div>
    {include file="footer.tpl"}

    