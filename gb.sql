-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2022 г., 09:37
-- Версия сервера: 5.6.51
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `post` text NOT NULL,
  `ip` text NOT NULL,
  `browser` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `email`, `post`, `ip`, `browser`, `date`) VALUES
(1, 'Иван', 'Ivan@yandex.ru', 'Сообщение 1', '1.0.0.0', 'Отличный браузер', '2022-06-29 05:02:52'),
(3, 'Максим', 'maxim@gmail.com', 'Сообщение 2', '0.0.1.0', 'Замечательный браузер', '2022-06-29 08:33:46'),
(4, 'Пётр', 'peter@mail.ru', 'Сообщение 3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-06-29 09:34:31'),
(5, 'Андрей', 'me_pochta@gmail.com', 'Сообщение 4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-06-29 10:35:17'),
(6, 'Александр', 'alex@mail.ru', 'Сообщение 5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-06-29 12:35:46'),
(7, 'Сергей', 'sergey@mail.ru', 'Сообщение 6 Идейные соображения высшего порядка, а также постоянное информационно-пропогандистское обеспечение нашей деятельности требует анализа дальнейших направлений развития. Не следует, однако, забывать, что сложившаяся структура организации играет важную роль в формировании поставленных обществом и правительством задач.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-01-29 13:00:00'),
(8, 'Юрий', 'yury@mail.ru', 'Сообщение 7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-06-29 14:00:00'),
(9, 'Михаил', 'michal@mail.ru', 'Сообщение 8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-06-30 03:31:59'),
(10, 'Андрей', 'andr@gmai.com', 'Сообщение 10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-06-30 04:19:51'),
(11, 'Алексей', 'alexei@mail.ru', 'Сообщение 11', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-01 11:06:37'),
(12, 'Василий', 'me_pochta@gmail.com', 'Для современного мира социально-экономическое развитие требует определения и уточнения системы обучения кадров, соответствующей насущным потребностям. Таким образом социально-экономическое развитие проверки влечёт за собой интересный процесс внедрения модернизации прогресса профессионального общества.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-02 16:15:16'),
(13, 'Марина', 'marina@mail.ru', 'Сообщение 12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-03 14:28:53'),
(14, 'Юля', 'me_pochta@gmail.com', 'Прежде всего реализация намеченных плановых заданий создаёт предпосылки качественно новых шагов для существующий финансовых и административных условий.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-03 15:38:10'),
(15, 'Света', 'sveta@mail.ru', 'Сообщение 15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-03 17:15:44'),
(16, 'Лариса', 'larisa@yandex.ru', 'Значимость этих проблем настолько очевидна, что сложившаяся структура организации способствует подготовке и реализации позиции, занимаемых участниками в отношении поставленных задач.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-03 17:23:12'),
(17, 'Виталий', 'vitaly@gmail.com', 'Таким образом высокотехнологичная концепция общественной системы создаёт предпосылки качественно новых шагов для дальнейших направлений развития.', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-04 09:29:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
