<?php


if(empty($medico->image)){
    $medico->image = "medico_avatar.png";
}

?>


<div>
<div style="background-image: url('<?= $BASE_URL ?> assets/usuario/<?= $medico->image?>')"></div>

    <div>
        <h5><?= $medico_name ?></h5>
    </div>
</div>


