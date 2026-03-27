-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2026 г., 09:57
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ProjectCollab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(510) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `img`, `status`, `type`) VALUES
(1, 'test1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum temporibus eaque saepe sed soluta facilis voluptatem rerum sint amet incidunt obcaecati perspiciatis, doloremque dicta numquam, labore consequuntur totam officia! Similique quaerat eum iusto voluptatem rem? Itaque porro similique illo iure pariatur ducimus fugit, unde, id nesciunt nam aliquid ratione ipsam?', 'https://avatars.mds.yandex.net/i?id=30196f54f606294d6559c44368a27f63_l-5256374-images-thumbs&n=13', 'заброшен', 'offline'),
(2, 'test2', 'sadsadadasa', NULL, 'в процессе', 'drafts'),
(3, 'test3', 'sadsadadasa', NULL, 'в процессе', 'drafts'),
(4, 'test4', 'sadsadadasa', NULL, 'в процессе', 'drafts'),
(5, 'test5', 'sadsadadasa', NULL, 'в процессе', 'drafts'),
(6, 'test6', 'sadsadadasa', NULL, 'в процессе', 'drafts'),
(7, 'sadadsad', 'dfafadfadsfdfadfa', '', NULL, NULL),
(8, 'qqeweqweq', 'wqeqwqweqw', 'https://avatars.mds.yandex.net/i?id=8d8ed89bf8ffc3a15c5ca8c02dd99a20d22648b9-5264150-images-thumbs&n=13', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `ava` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `ava`) VALUES
(1, 'user1', '123456', 'gmail@gmail.com', 'https://avatars.mds.yandex.net/i?id=a2359d1c4da72ee64837bca25eeba041c20747ea-5597742-images-thumbs&n=13'),
(2, 'user2', '$2y$10$XaX/nFwPsq6VFDB6Fujp0eGcU/BEb5sXZpEUntUA.f7zyQoCyCksa', 'gmail@gmail.com', 'https://avatars.mds.yandex.net/i?id=a2359d1c4da72ee64837bca25eeba041c20747ea-5597742-images-thumbs&n=13'),
(3, 'admin', '$2y$10$B2XCWsz8fzDxvNMPR50rfutu1dGE6SpzXQ0xrGbzh/J0pUEC/HEvS', 'gmail@gmail.com', 'https://avatars.mds.yandex.net/i?id=a2359d1c4da72ee64837bca25eeba041c20747ea-5597742-images-thumbs&n=13'),
(4, 'user3', '$2y$10$ydY15zxPddsb4hwX7vEN1.VSsmgqrCWdSHdUdXry3Fck3etJtAaem', 'gmail@gmail.com', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
