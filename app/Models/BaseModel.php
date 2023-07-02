<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $conn;
    protected $sqlBuilder;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=php2; charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From " . $model->tableName;
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public function insert($arr = [])
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $cols = "";
        $values = "";
        foreach ($arr as $col => $value) {
            $cols .= "`" . $col . "`, ";
            $values .= ":{$col}, ";
        }

        $cols = rtrim($cols, ", ");
        $values = rtrim($values, ", ");

        $this->sqlBuilder .= $cols . ") VALUES(" . $values . ")";

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($arr);
    }
    /**
     * function findOne lấy ra 1 bản ghi
     * @param $id: tham số truyền vào là id (khóa chính)
     */
    public static function findOne($id)
    {
        $model = new static;
        $model->sqlBuilder = "Select * From $model->tableName WHERE id='$id'";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if ($result) {
            return $result[0];
        }
        return false;
    }

    /**
     * function update: cập nhật dữ liệu
     * @param $id: tham số là khóa chính
     * @param array $data: mảng dữ liệu 
     */
    public function update($id, $data = [])
    {
        $this->sqlBuilder = "Update $this->tableName SET ";
        foreach ($data as $key => $value) {
            $this->sqlBuilder .= "`$key`=:$key, ";
        }
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        $this->sqlBuilder .= " WHERE id= '$id';";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        var_dump($stmt);
        $stmt->execute($data);
    }

    public function where($colName, $condition, $value)
    {
        $this->sqlBuilder = "Select * From $this->tableName WHERE `$colName` $condition '$value' ";
        return $this;
    }
    public function andWhere($colName, $condition, $value)
    {
        $this->sqlBuilder .= " AND `$colName` $condition '$value' ";
        return $this;
    }
    public function orWhere($colName, $condition, $value)
    {
        $this->sqlBuilder .= " OR `$colName` $condition '$value' ";
        return $this;
    }
    public function orderBy($colName, $condition)
    {
        $this->sqlBuilder = "Select * From $this->tableName ORDER BY `$colName` $condition";
        return $this;
    }
    public function limit($value)
    {
        $this->sqlBuilder .= " LIMIT $value";
        return $this;
    }

    public function get()
    {
        $this->sqlBuilder .= ";";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function delete($id)
    {
        $this->sqlBuilder = "DELETE FROM $this->tableName WHERE id = '$id'";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
    }
}
