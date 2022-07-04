
<?php
require_once 'DB.php';
$db = new DB();

class View
{
    public $arPosts = [];
    public $db;

    public function ShowRows()
    {
        $sql = 'SELECT *  FROM `posts` ORDER BY `id` DESC LIMIT 5';
        $result = db::getAll($sql);
        $this->arPosts = $result;

        return $this->arPosts;
    }

    public function numberPages($limit)
    {
        $sql = 'SELECT COUNT(`id`) FROM `posts`';
        $total = db::getValue($sql);
        $amt = ceil($total / $limit);
        return $amt;
    }

    public function AddRows($start, $limit)
    {
        $sql = "SELECT * FROM `posts` WHERE id>0 ORDER BY id DESC LIMIT {$start}, {$limit}";
        $this->$arPosts = db::getAll($sql, $start);
        return $this->arPosts;
    }
}

$db::destroy();

?>
