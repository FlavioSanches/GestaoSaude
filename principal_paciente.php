<?php
    require_once("templates/header.php");
?>

<section class="menu_principal">

<div class="sidebar">

    <div class="sidebar-item" data-content="editar_perfil">Editar Perfil</div>
    <div class="sidebar-item" data-content="cadastrar">Buscar Especialista</div>
    <div class="sidebar-item" data-content="consultas">Minhas Consultas</div>

</div>

<div class="content">

    <div id="editar_perfil" class="content-item">
    <?php require("edit_profile_paciente.php"); ?>
       <!-- <a class="consultas" href="<= $BASE_URL ?>./edit_profile_paciente.php">Editar Perfil</a>-->
    </div>

    <div id="cadastrar" class="content-item">
        <div class="search-container">
        <form action="<?= $BASE_URL ?>./search.php" method="GET" class="d-flex custom-search" role="search">
            <input id="search-input" type="text" name="q" placeholder="Buscar Especialista..." aria-label="Search" style="width: 100%;">
            <button class="btn btn-outline-primary custom-btn" type="submit">Pesquisar</button>
        </form>
            <!--<input type="text" id="search-input" placeholder="Buscar Especialista...">
            <select id="filter-select">
                <option value="all">Filtros</option>
                <option value="category">Melhores Preços</option>
                <option value="category">Mais próximos</option>
            
            </select>-
            <button onclick="performSearch()" class="button">Buscar</button>-->
        </div>
       <!-- <div id="search-results">
             Os resultados da pesquisa serão exibidos aqui 
        </div>-->

    </div>

    <div id="consultas" class="content-item">
        <div class="consultas">Informações sobre Minhas Consultas</div>
    </div>

</div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php
    require_once("templates/footer.php");
?>
<script src="javascript/menu_lateral.js"></script>