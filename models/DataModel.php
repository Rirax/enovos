<?php
namespace model;

class DataModel extends Model
{
    protected $table = 't_data';

    static function createTable(\PDO $db, $schema = "enovos")
    {
        //Drop
        $req = "DROP TABLE IF EXISTS $schema.t_data";
        $db->exec($req);

        //Create
        $req = "CREATE TABLE IF NOT EXISTS $schema.t_data (
                      `id` INT NOT NULL AUTO_INCREMENT,
                      `light` FLOAT NULL,
                      `temperature` FLOAT NULL,
                      `pressure` INT NULL,
                      `t_devices_id` VARCHAR(45) NOT NULL,
                      `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
                      PRIMARY KEY (`id`))";
        return $db->exec($req);
    }

    /**
     * @param \item\Data $obj
     */
    protected function create(\item\Data $obj)
    {
        $req = "INSERT INTO $this->table (t_devices_id, temperature, pressure, light) VALUE (:t_devices_id, :temperature, :pressure, :light)";

        $this->dbConnexion();
        try {
            $r = $this->db->prepare($req);
            $r->bindValue(':t_devices_id', $obj->getTDeviceId(), \PDO::PARAM_STR);
            $r->bindValue(':temperature', strval($obj->getTemperature()), \PDO::PARAM_INT);
            $r->bindValue(':pressure', $obj->getPressure(), \PDO::PARAM_STR);
            $r->bindValue(':light', strval($obj->getLight()), \PDO::PARAM_STR);
            $r->execute();
        } catch (\PDOException $e){
            print 'Erreur !:'.$e->getMessage().'<br />';
            die();
        }

    }

    public function getData()
    {
    }

    public function getLast()
    {
        $req = array(
            'order' => 'id desc',
            'limit' => '6'

        );

        return $this->get($req);
    }
}