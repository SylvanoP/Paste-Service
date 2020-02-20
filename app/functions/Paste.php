<?php

$paste = new Paste();
class Paste extends Controller
{

    public function getData($uniqe_id, $data)
    {
        $SQL = self::db()->prepare("SELECT * FROM `entrys` WHERE `uniqe_id` = :uniqe_id");
        $SQL->execute(array(":uniqe_id" => $uniqe_id));
        $response = $SQL->fetch(PDO::FETCH_ASSOC);

        return $response[$data];
    }

    public function getCodeOptions()
    {
        $SQL = self::db()->prepare("SELECT * FROM `code_options`");
        $SQL->execute();
        return $SQL->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLast()
    {
        $SQL = self::db()->prepare("SELECT * FROM `entrys` ORDER BY `id` DESC LIMIT 4");
        $SQL->execute();
        return $SQL->fetchAll(PDO::FETCH_ASSOC);
    }

}