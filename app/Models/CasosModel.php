<?php

namespace App\Models;

use CodeIgniter\Model;

class CasosModel extends Model
{   
    private $idMunicipio;

    public function __construct($idMunicipio) {
        $this->setIdMunicipio($idMunicipio);
    }    

    protected $table = "casos";
    protected $primaryKey = "idCaso";
    protected $allowedFields = ['idCaso', 'idMunicipio', 'idUsuario', 'suspeitosCaso', 'confirmadosCaso', 'descartadosCaso', 'obitosCaso', 'recuperadosCaso'];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;

    protected $createdAtField = 'created_at';
    protected $updatedAtField = 'updated_at';
    protected $deletedAtField = 'deleted_at';

    public function setIdMunicipio($idMunicipio) {
        $this->idMunicipio = $idMunicipio;
    }
    public function getIdMunicipio() {
        return $this->idMunicipio;
    }

    public function getCasos($id = null)
    {
        if ($id == null) {
            // $this->withDeleted(); //traz registros deletados com soft delete tb
            return $this->findAll();
        }
        return $this->asArray()->where(['idCaso' => $id])->first();
    }

    public function getCityCases()
    {
        return $this->asArray()->where(['idMunicipio' => $this->idMunicipio])->first();
    }
}
