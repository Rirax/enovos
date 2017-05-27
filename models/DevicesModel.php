<?php
namespace model;

class DevicesModel extends Model
{
    protected $table = 't_devices';

    static function createTable(\PDO $db, $schema = "enovos")
    {
        //Drop
        $req = "DROP TABLE IF EXISTS $schema.t_devices";
        $db->exec($req);

        //Create
        $req = "CREATE TABLE IF NOT EXISTS $schema.`t_devices` (
                  `id` INT NOT NULL AUTO_INCREMENT,
                  `device_id` VARCHAR(45) NULL,
                  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
                  `t_users_id` INT NOT NULL,
                  PRIMARY KEY (`id`))";
        return $db->exec($req);
    }

    public function create($user_id, $device_id)
    {
        $req = "INSERT INTO $this->table (t_users_id, device_id) VALUE (:user_id, :device_id)";

        $this->dbConnexion();
        try {
            $r = $this->db->prepare($req);
            $r->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
            $r->bindValue(':device_id', $device_id, \PDO::PARAM_STR);
            $r->execute();
        } catch (\PDOException $e){
            print 'Erreur !:'.$e->getMessage().'<br />';
            die();
        }

    }


}