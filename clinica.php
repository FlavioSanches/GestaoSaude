<?php
    require_once("templates/header.php");
    require_once("models/Clinica.php");
    require_once("dao/ClinicaDAO.php");

    $id = filter_input(INPUT_GET, "id");

    $clinica;

    $clinicaDao = new ClinicaDAO($conn, $BASE_URL);

    if(empty($id)){
       $message->setMessage("A clinica não foi encontrada", "error", "back"); 
    }else{
        $clinica = $clinicaDao->findById($id);
        if(!$clinica){
            $message->setMessage("A clinica não foi encontrada", "error", "back"); 
        }
    }

    

?>
<div>
    <div>
        <div>
            <h1><?= $clinica->name?></h1>
            <h1><?= $clinica->cnpj?></h1>
            <h1><?= $clinica->cidade?></h1>
            <h1><?= $clinica->pais?></h1>
            <h1><?= $clinica->estado ?></h1>
            <h1><?= $clinica->rua ?></h1>
            <a class="btn_entrar" href="<?= $BASE_URL ?>./principal_medico.php">Voltar</a>

        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
    require_once("templates/footer.php");
?>






