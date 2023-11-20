<?php
require_once("templates/header.php");

require_once("dao/MedicoDAO.php");

$medicoDao = new MedicoDAO($conn, $BASE_URL);

$q = filter_input(INPUT_GET, "q");

$medicos = $medicoDao->findByEspecialidade($q);

?>


<div>
    <h2>Você esta buscando por: <?= $q ?></h2>
    <p>Resultados de busca retornados com base na sua pesquisa. </p>
    <div>
        <?php foreach($medicos as $medico):?>
            <?php
                $medico_image = $medico->image;
                $medico_name = $medico->name;
                $medico_email = $medico->email;
                $medico_especialidade = $medico->especialidade;
                $medico_crm = $medico->crm;
                require("templates/medico_card.php");
                
            ?>
            
        <?php endforeach; ?> 
        <?php if(count($medicos) === 0):?>
            <p>Não ha medicos para esta busca, <a href="<?= $BASE_URL ?>./principal_paciente.php">Voltar</a></p>
        <?php endif;?>
    </div>
</div>
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