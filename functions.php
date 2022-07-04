
<?php

require_once 'DB.php';

// error_reporting(-1);

// Получение IP
function getRealIP()
{
    if ($_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
        $client_ip = !empty($_SERVER['REMOTE_ADDR'])
            ? $_SERVER['REMOTE_ADDR']
            : (!empty($_ENV['REMOTE_ADDR'])
                ? $_ENV['REMOTE_ADDR']
                : 'unknown');
        $entries = split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);
        reset($entries);
        while (list(, $entry) = each($entries)) {
            $entry = trim($entry);
            if (
                preg_match(
                    '/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/',
                    $entry,
                    $ip_list
                )
            ) {
                $private_ip = [
                    '/^0\./',
                    '/^127\.0\.0\.1/',
                    '/^192\.168\..*/',
                    '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                    '/^10\..*/',
                ];
                $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
                if ($client_ip != $found_ip) {
                    $client_ip = $found_ip;
                    break;
                }
            }
        }
    } else {
        $client_ip = !empty($_SERVER['REMOTE_ADDR'])
            ? $_SERVER['REMOTE_ADDR']
            : (!empty($_ENV['REMOTE_ADDR'])
                ? $_ENV['REMOTE_ADDR']
                : 'unknown');
    }
    return $client_ip;
}

// Очистка данных
function clearDate($var)
{
    $var = trim($var);
    return $var;
}

$name = $_POST['name'];
$email = $_POST['email'];
$msd = $_POST['msd'];
$ip = getRealIP();
$browser = $_SERVER['HTTP_USER_AGENT'];
$date = date('Y-m-d H:i:s');

// Добавление сообщения
function addPost($name, $email, $msd, $ip, $browser, $date)
{
    $name = clearDate(htmlspecialchars($name));
    $email = clearDate(htmlspecialchars($email));
    $msd = clearDate(htmlspecialchars($msd));

    if (!empty($name) && !empty($email) && !empty($msd)) {
        $db = new DB();
        $sql =
            'INSERT INTO `posts` SET `name` = :name, `email` = :email, `post` = :post, `ip` = :ip, `browser` = :browser, `date` = :date';
        $arrayData = [
            'name' => $name,
            'email' => $email,
            'post' => $msd,
            'ip' => $ip,
            'browser' => $browser,
            'date' => $date,
        ];
        $addRow = $db::add($sql, $arrayData);

    } else {
        $addRow = false;
    }
    return $addRow;
}

if ($_POST['submit'] == 'Отправить') {
    $res = addPost($name, $email, $msd, $ip, $browser, $date);

    if ($res) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
}

?>
