-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 25 2016 г., 04:31
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Articles`
--

CREATE TABLE IF NOT EXISTS `Articles` (
  `ID` int(11) NOT NULL,
  `AutorID` int(11) NOT NULL,
  `Published` date NOT NULL,
  `Tittle` varchar(200) NOT NULL,
  `Content` mediumtext NOT NULL,
  `PreContent` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Articles`
--

INSERT INTO `Articles` (`ID`, `AutorID`, `Published`, `Tittle`, `Content`, `PreContent`) VALUES
(1, 1, '2016-10-04', 'Новости', '', '132222  22222 222222222222 2222 2222222222222'),
(2, 3, '2016-10-04', 'Обычная новость', 'В сообщении министра обороны Бельгии Стивена Вандепута говорится, что оборонное ведомство России передало военному атташе бельгийского посольства в Москве «так называемые доказательства, которые должны были продемонстрировать, что F-16 бельгийских ВВС были ответственны за авиаудар в районе Алеппо».\r\n', 'Бельгия обвинила Россию в фабрикации данных об ударе F-16 по Сирии'),
(3, 2, '2016-10-02', 'ВС США потеряли первого военного в ходе наступления на Мосул', 'В Ираке продолжается вооруженное противостояние, целью которого является освобождение от ИГ (запрещено в России) города Мосул. Спецназ США в четверг присоединился к спецоперации, в ходе которой американские ВС понесли первую потерю с момента начала боев за Мосул, передает AP.\r\n', 'В Ираке продолжается вооруженное противостояние, целью которого является освобождение от ИГ (запрещено в России) города Мосул. \r\n'),
(4, 3, '2016-10-18', 'Wikileaks начала публиковать переписку Барака Обамы', 'Организация Wikileaks приступила к публикации переписки по электронной почте одного из стратегов американской Демократической партии - Джона Подесты - с Бараком Обамой в бытность последнего членом Сената Конгресса США и избранным президентом страны', 'Организация Wikileaks приступила к публикации переписки по электронной почте одного из стратегов американской '),
(5, 4, '2016-10-27', 'Дамаск заявил, что будет сбивать самолеты ВВС Турции в небе над Сирией', 'Сирийская армия и вооруженные силы предупреждают о готовности сбивать военные самолеты Турции любыми возможными средствами в случае, если они вновь нарушат воздушное пространство Сирии",- написано в заявлении', 'Сирийская армия и вооруженные силы предупреждают о готовности сбивать военные самолеты Турции.'),
(6, 4, '2016-10-31', 'ЕС не принял санкций против РФ по Сирии, санкции по Украине остаются', 'Евросоюз не принял санкций против России за ее действия в Сирии, но санкции по Украине остаются в силе. Об этом заявил президент Франции Франсуа Олланд по итогам первого дня саммита ЕС.', 'Евросоюз не принял санкций против России за ее действия в Сирии'),
(7, 1, '2016-10-02', 'Глава МВД Чехии создал центр борьбы с «российской пропагандой»', 'Глава МВД Чехии учредил подразделение для борьбы с информацией, которую власти страны признают пропагандой со стороны России и других государств и которая влияет на общественное мнение населения Чехии', 'Глава МВД Чехии учредил подразделение для борьбы с информацией, которую власти страны признают пропагандой');

-- --------------------------------------------------------

--
-- Структура таблицы `Autors`
--

CREATE TABLE IF NOT EXISTS `Autors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Autors`
--

INSERT INTO `Autors` (`ID`, `Name`, `Email`, `about`) VALUES
(1, 'Andrew', '1123@gmail.com', '1qwe'),
(2, 'Ivan', '2123@gmail.com', '2qweqe'),
(3, 'Alexei', 'Alexei@mail.ru', 'Simle man'),
(4, 'Oleg', '123@gmail.com', 'NONE'),
(5, 'Dima', 'Dima@123.ri', 'Simle man'),
(6, 'Nastya', 'Nastya@kf.r', 'Simle man Simle man'),
(7, 'Olya', 'Olya@344.ru', '2342 234 234 243 '),
(8, 'Lena', 'asd', '23 423 423 4');

-- --------------------------------------------------------

--
-- Структура таблицы `Connect`
--

CREATE TABLE IF NOT EXISTS `Connect` (
  `ID` int(11) NOT NULL,
  `ArticleID` int(11) NOT NULL,
  `TagID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Connect`
--

INSERT INTO `Connect` (`ID`, `ArticleID`, `TagID`) VALUES
(1, 2, 2),
(2, 2, 3),
(3, 2, 5),
(4, 1, 3),
(5, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `Tags`
--

CREATE TABLE IF NOT EXISTS `Tags` (
  `ID` int(11) NOT NULL,
  `Tag` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Tags`
--

INSERT INTO `Tags` (`ID`, `Tag`) VALUES
(1, 'News'),
(2, 'Alert'),
(3, 'Weapons'),
(4, 'Cars'),
(5, 'Food'),
(6, 'IT'),
(7, 'Пенcионеры'),
(8, 'В мире животных');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AutorID` (`AutorID`);

--
-- Индексы таблицы `Autors`
--
ALTER TABLE `Autors`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Connect`
--
ALTER TABLE `Connect`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TagID` (`TagID`),
  ADD KEY `ArticleID` (`ArticleID`);

--
-- Индексы таблицы `Tags`
--
ALTER TABLE `Tags`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Articles`
--
ALTER TABLE `Articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `Autors`
--
ALTER TABLE `Autors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `Connect`
--
ALTER TABLE `Connect`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `Tags`
--
ALTER TABLE `Tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Articles`
--
ALTER TABLE `Articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`AutorID`) REFERENCES `Autors` (`ID`);

--
-- Ограничения внешнего ключа таблицы `Connect`
--
ALTER TABLE `Connect`
  ADD CONSTRAINT `connect_ibfk_3` FOREIGN KEY (`ArticleID`) REFERENCES `Articles` (`ID`),
  ADD CONSTRAINT `connect_ibfk_2` FOREIGN KEY (`TagID`) REFERENCES `Tags` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
