-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Окт 12 2025 г., 17:33
-- Версия сервера: 8.0.40
-- Версия PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yiidars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `created_at`) VALUES
(1, 'Yangilik', '2025-09-29 19:00:00'),
(2, 'Jahon yangilik', '2025-09-29 19:00:00'),
(3, 'Mahalliy yangilik', '2025-09-29 19:00:00'),
(4, 'IT yangilik', '2025-09-29 19:00:00'),
(5, 'Category 1', '2025-10-02 10:23:29'),
(6, 'Category 2', '2025-10-02 10:23:47');

-- --------------------------------------------------------

--
-- Структура таблицы `course`
--

CREATE TABLE `course` (
  `id` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `credit` int DEFAULT '3',
  `created_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `library`
--

CREATE TABLE `library` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `library`
--

INSERT INTO `library` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'romanlar', 'sarguzasht', '2025-10-11 14:49:09'),
(2, 'asarlar', 'sarguzasht', '2025-10-11 14:49:09'),
(3, 'romanlar', 'sarguzasht', '2025-10-11 14:49:09'),
(4, 'asarlar', 'sarguzasht', '2025-10-11 14:49:09'),
(7, 'romanlar', 'sarguzasht', '2025-10-11 14:49:09'),
(8, 'asarlar', 'sarguzasht', '2025-10-11 14:49:09'),
(9, 'romanlar', 'sarguzasht', '2025-10-11 14:49:09'),
(10, 'asarlar', 'sarguzasht', '2025-10-11 14:49:09'),
(11, 'romanlar', 'sarguzasht', '2025-10-11 14:49:09'),
(12, 'asarlar', 'sarguzasht', '2025-10-11 14:49:09'),
(13, 'romanlar', 'sarguzasht', '2025-10-11 14:49:09'),
(14, 'asarlar', 'sarguzasht', '2025-10-11 14:49:09'),
(15, 'romanlar', 'sarguzasht', '2025-10-11 14:49:09'),
(16, 'asarlar', 'sarguzasht', '2025-10-11 14:49:09'),
(17, 'ertak', 'guliverning sayohati', '2025-10-11 14:49:09'),
(18, 'ertak', 'guliverning sayohati', '2025-10-11 14:49:09'),
(19, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00'),
(20, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00'),
(21, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00'),
(22, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00'),
(23, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00'),
(24, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00'),
(25, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00'),
(26, 'ertak', 'guliverning sayohati', '2025-10-11 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1759247314),
('m130524_201442_init', 1759247329),
('m190124_110200_add_verification_token_column_to_user_table', 1759247329),
('m250930_052543_create_video_table', 1759247329),
('m250930_054900_add_status_to_video_table', 1759247329),
('m250930_074307_create_table_category', 1759247329),
('m250930_081114_create_news_table', 1759247329),
('m250930_152938_insert_categories', 1759247329),
('m250930_160349_create_student_table', 1759248342),
('m250930_161557_add_phone_number_to_student_table', 1759249287),
('m250930_161922_create_course_table', 1759249287),
('m250930_163422_create_student_course_table', 1759250120),
('m250930_164351_add_index_course_title_index_on_course_title', 1759250731),
('m250930_164947_add_unique_index_on_student_email', 1759252528),
('m250930_170953_add_foreign_key_to_student_course_student_id', 1759252528),
('m250930_171043_add_foreign_key_to_student_course_course_id', 1759402094),
('m251002_105043_add_column_content_to_news_table', 1759402337),
('m251011_144257_create_library_table', 1760194135);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `author_id` int DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `category_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `author_id`, `title`, `category_id`, `created_at`, `content`) VALUES
(3, 1, 'Jahon yangilikari1', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(4, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(6, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(7, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(8, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(9, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(10, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(11, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(12, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(13, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(14, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(15, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(16, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(17, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(18, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(19, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(20, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(21, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(22, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(23, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(24, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(25, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(26, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(27, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(28, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(29, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(30, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(31, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(32, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(33, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(34, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(35, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(36, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(37, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(38, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(39, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(40, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(41, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(42, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(43, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(44, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(45, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(46, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna'),
(47, 1, 'Jahon yangilikari', 2, '2025-10-02 13:25:05', 'Americada yangi qurilma ixtiro qilindi'),
(48, 2, 'Siyosiy yangiliklar', 3, '2025-10-02 13:28:22', 'government should implement and enforced rules against crimers'),
(49, 1, 'Jahon yangilikari', 2, '2025-10-02 13:23:53', 'Americada ishlab chiqarilgan uskuna');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id` int NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` int NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `student_course`
--

CREATE TABLE `student_course` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'nurali', 'gFho2PulukwOEJDeqzln8O063Vy-RcmC', '$2y$13$RaQ5RvRA9jJDcE3C3zuzo.4FzEiYV7JiFZxcpxIkFo6i2V7pmRxB.', NULL, 'mavzurovnurali@gmail.com', 10, 1759468636, 1759468636, 'mdlOb9xRrSsX4pmxajYowVC4VsGp0cHi_1759468636'),
(2, 'admin', 'I68bNoh99J7ptmhoftByXecFoHB4ILMQ', '$2y$13$ZF7VWJe/QS3YphuBW.WXdOJRZirMb5VrEF1b9VsKXEqmb2qXbMA3u', NULL, 'adminuser@gmail.com', 10, 1759468737, 1759468737, 'OpCZ9ob_l8y4Qoqnt43APH1hFST23CNA_1759468737');

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `duration` int NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_title_index` (`title`);

--
-- Индексы таблицы `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-news-author` (`author_id`),
  ADD KEY `idx-news-category_id` (`category_id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `student_index` (`email`);

--
-- Индексы таблицы `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-student_course-student_id` (`student_id`),
  ADD KEY `idx-student_course-course_id` (`course_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `course`
--
ALTER TABLE `course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `library`
--
ALTER TABLE `library`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk-news-author` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-news-category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `fk-student_course-course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-student_course-student_id` FOREIGN KEY (`student_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_student_course_student_course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_course_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
