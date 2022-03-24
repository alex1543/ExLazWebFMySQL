
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS test;

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL,
  `id_my` int(11) NOT NULL,
  `description` text NOT NULL,
  `name_origin` text NOT NULL,
  `path` text NOT NULL,
  `date_upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

-- --------------------------------------------------------

--
-- Структура таблицы `myarttable`
--

CREATE TABLE `myarttable` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `myarttable`
--

INSERT INTO `myarttable` (`id`, `text`, `description`, `keywords`) VALUES
(15, 'Ivanov', 'Engeneer', '2 class'),
(16, 'Smirnov', 'Cook', '5 level'),
(18, 'Petrov', 'Cleaner', 'none'),
(19, 'Nikitin', 'Programmer', 'High lev.'),
(20, 'Kozlovskiy', 'Actor', 'first');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_my` (`id_my`);

--
-- Индексы таблицы `myarttable`
--
ALTER TABLE `myarttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `myarttable`
--
ALTER TABLE `myarttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id_my`) REFERENCES `myarttable` (`id`);
COMMIT;

