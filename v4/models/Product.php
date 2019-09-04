<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 10/20/2018
 * Time: 09:45
 */

class Product
{
    protected $dbh;

    public $id;
    public $name;
    public $description;
    public $quantity;
    public $price;

    public function __construct()
    {
        $this->dbh = SPDO::singleton();
        $this->id = null;
        $this->name = '';
        $this->description = '';
        $this->quantity = 0;
        $this->price = 0;
    }

    public function all()
    {
        $sql = 'SELECT * FROM products';
        $query = $this->dbh->query($sql);

        return $query->fetchAll();
    }

    public function save()
    {
        $sql = 'INSERT INTO products(name,description,quantity,price) 
                VALUES (:name,:description,:quantity,:price)';

        $stmt = $this->dbh->prepare($sql);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':quantity', $this->quantity);
        $stmt->bindParam(':price', $this->price);

        $stmt->execute();
        $this->id = $this->dbh->lastInsertId();

        return $this->id;
    }

    public function update()
    {
        $sql = 'UPDATE products 
                SET name=:name,description=:description,quantity=:quantity,price=:price
                WHERE id=:id';

        $stmt = $this->dbh->prepare($sql);

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':quantity', $this->quantity);
        $stmt->bindParam(':price', $this->price);

        $stmt->execute();

        return $this->id;
    }

    public static function find($id)
    {
        $dbh = SPDO::singleton();
        $sql = 'SELECT * FROM products WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function delete($id)
    {
        $dbh = SPDO::singleton();
        $sql = 'DELETE FROM products 
                WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return true;
    }

}