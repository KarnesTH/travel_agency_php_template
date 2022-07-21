<?php

class Offer {

    protected $title, $description, $price, $duration, $image;
    
    protected static $db;

    public static function setDbConnector(PDO $db)
    {
        self::$db = $db;
    }

    public function __construct(array $data = [])
    {
        if ($data) {
            $this->setData($data);
        }
    }

    public function __call($name, $args) {
        $propName = lcfirst(substr($name, 3));
        $prefix = substr($name, 0, 3);
        if (property_exists($this, $propName)) {
            if ($prefix === 'get') {
                return $this->$propName;
            } elseif ($prefix === 'set') {
                $this->$propName = $args[0];
                return $this;
            }
        } 
    }

    public function setData(array $data = [])
    {
        if ($data) {
            foreach ($data as $k => $v) {
                $setterName = 'set' . ucfirst($k);
                if (method_exists($this, $setterName)) {
                    $this->$setterName($v);
                }
            }
        }
    }

    public function getData() {
        return get_object_vars($this);
    }

    public static function findAll()
    {
        $sql = 'SELECT * FROM offers';
        $PDOStatement = self::$db->query($sql);
        // $PDOStatement->setFetchMode(PDO::FETCH_CLASS, 'User');
        $data = $PDOStatement->fetchAll(PDO::FETCH_CLASS, 'Offer');
        return $data;
    }

    public static function find($id)
    {
        $sql = 'SELECT * FROM users WHERE id = ?';
        $PDOStatement = self::$db->prepare($sql);
        $PDOStatement->execute([$id]);

        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, 'User');
        $dataObj = $PDOStatement->fetch();

        return $dataObj;
    }

    public function create()
    {

        $attributes = get_object_vars($this);
        unset($attributes['id']);

        $columnNames = implode(', ', array_keys($attributes));
        $placeholder = ':' . implode(', :', array_keys($attributes));

        $sql = "INSERT INTO users ($columnNames) VALUES ($placeholder)";

        $PDOStatement = self::$db->prepare($sql);
        $PDOStatement->execute($attributes);

        // neue id holen
        // $sql = "SELECT max(id) as newId FROM `users` limit 1;";

        $this->setId(self::$db->lastInsertId());

        return $this;

    }

    public function update()
    {

        $attributes = get_object_vars($this);
        $id = $attributes['id'];
        unset($attributes['id']);

        $keyValueArray = [];

        foreach (array_keys($attributes) as $value) {
            $keyValueArray[] = $value . ' = :' . $value;
        };

        $keyValueString = implode(', ', $keyValueArray);

        $sql = "UPDATE users Set $keyValueString WHERE id = $id";

        $PDOStatement = self::$db->prepare($sql);
        $PDOStatement->execute($attributes);

        return $this;

    }

    public static function delete($id) {
        $sql = "DELETE FROM users WHERE id = $id"; // prüfen woher $id kommt => ggf. prepare statement verwenden
        self::$db->query($sql);
    }

}

