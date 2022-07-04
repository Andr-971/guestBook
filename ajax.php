
<?php
// error_reporting(-1);
require_once "Db.php";
require_once "View.php";

$showRows = new View;

$limit = 5;

$arPosts = $showRows->ShowRows();
$pages = $showRows->numberPages($limit);

// Получение записей для вставки в таблицу
$page = intval(@$_GET['page']);
$page = (empty($page)) ? 1 : $page;				
$start = ($page != 1) ? $page * $limit - $limit : 0;
$db = new Db();
$sql = "SELECT * FROM `posts` WHERE id>0 ORDER BY id DESC LIMIT {$start}, {$limit}";
$arPosts = db::getAll($sql, $start);
$db::destroy();

foreach ($arPosts as $arItem) {
	?>
    <tr>
        <td class="col_1"><?php echo $arItem['name'] ?></td>
        <td class="col_2"><?php echo $arItem['email'] ?></td>
        <td class="col_3"><?php echo $arItem['post'] ?></td>
        <td class="col_4"><?php echo $arItem['date'] ?></td>
    </tr>

	<?php
}

?>