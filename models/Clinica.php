<?php

class Clinica{
    public $id;
    public $nome;
    public $cnpj;
    public $pais;
    public $estado;
    public $cidade;
    public $rua;
    public $med_id;



}

interface ClinicaDAOInterface{
    public function buildClinica($data);
    public function findAll();
    public function getClinicasBYMedicoId($id);
    public function findByNome($nome);
    public function findById($id);
    public function create(Clinica $clinica);
    public function updade(Clinica $clinica);
    public function destroy($id);

}