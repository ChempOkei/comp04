-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.4:3306
-- Время создания: Фев 19 2026 г., 09:02
-- Версия сервера: 8.4.6
-- Версия PHP: 8.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `description`, `duration`, `price`, `start_date`, `end_date`, `image_url`, `created_at`, `updated_at`) VALUES
(2, 'Prof.', 'Facilis ut nulla error magnam aut quis corrupti et.', 2, 8237.00, '1974-05-29', '1996-09-12', 'https://via.placeholder.com/640x480.png/00aa00?text=excepturi', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(3, 'Prof.', 'Vel quo architecto culpa et ea dignissimos. In animi ipsam omnis corporis omnis assumenda.', 5, 2583.00, '1999-04-05', '1976-03-15', 'https://via.placeholder.com/640x480.png/005522?text=sit', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(4, 'Ms.', 'Hic temporibus culpa minus recusandae sed repellat.', 5, 1128.00, '1988-12-25', '1982-08-04', 'https://via.placeholder.com/640x480.png/00ddbb?text=enim', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(6, 'Dr.', 'Et perferendis dolorum iste quisquam tempora non.', 3, 2733.00, '1976-03-25', '2018-10-10', 'https://via.placeholder.com/640x480.png/0066bb?text=consectetur', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(7, 'Mr.', 'Facere omnis voluptas unde delectus dolorum.', 5, 9564.00, '2024-11-29', '1985-01-26', 'https://via.placeholder.com/640x480.png/003344?text=labore', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(8, 'Dr.', 'Expedita natus exercitationem rerum blanditiis a officia beatae. Dolores et rerum maiores rerum qui praesentium eos porro.', 10, 3124.00, '2021-11-03', '1982-03-01', 'https://via.placeholder.com/640x480.png/006622?text=quia', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(9, 'Dr.', 'Voluptatem consequatur aspernatur et.', 5, 7609.00, '2025-01-21', '1993-11-06', 'https://via.placeholder.com/640x480.png/0077cc?text=sed', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(10, 'Ms.', 'Autem ut unde enim dolores sed repellendus excepturi.', 4, 4821.00, '2015-07-28', '1991-05-17', 'https://via.placeholder.com/640x480.png/00bb33?text=rem', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(11, '213', NULL, 2, 123.00, '1212-03-12', '2222-03-12', 'courses_image/0eqpspaiwtRbt8zdtDbi5bWWk2f0gzoWxgpgGmxQ.jpg', '2026-02-18 05:51:31', '2026-02-18 05:51:31'),
(12, '213', NULL, 2, 123.00, '1212-03-12', '2222-03-12', 'courses_image/4oNdBxh4qGuRh706s5imKPlRAAjZUyOBs4Ep6X9o.jpg', '2026-02-18 05:52:41', '2026-02-18 05:52:41');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supertube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `content`, `supertube_url`, `duration`, `course_id`, `created_at`, `updated_at`) VALUES
(2, 'Mr.', 'Totam molestiae ut sapiente et.', 'http://gorczany.com/eum-excepturi-omnis-magnam-ratione.html', 3, 6, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(3, 'Mr.', 'Sint dolor repudiandae consequatur aut quia reprehenderit.', 'http://www.hyatt.com/temporibus-dolore-dolore-animi-voluptatum-dolorem-dolores-qui', 3, 8, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(4, 'Miss', 'Praesentium consequatur vitae qui eius cupiditate ipsa minima. Quia nobis rerum sunt dolores modi et sint.', 'http://roberts.info/similique-est-rem-qui-sed-aperiam', 3, 6, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(5, 'Prof.', 'Eligendi libero repudiandae doloremque ut fugiat ut dolor.', 'https://www.kulas.com/fugiat-ratione-expedita-dolores', 4, 8, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(6, 'Prof.', 'Consequatur et natus autem maiores impedit totam ipsam.', 'http://kemmer.biz/', 4, 8, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(8, 'Dr.', 'Mollitia reiciendis incidunt maiores sed quidem repellendus odit.', 'http://sporer.com/nobis-quisquam-excepturi-reiciendis-optio-corrupti', 3, 3, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(10, 'Mrs.', 'Aperiam assumenda qui et aut est rerum.', 'https://mueller.info/ut-ea-enim-nobis-corrupti-molestias-ut.html', 2, 8, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(11, '123', 'Dolores debitis cum inventore eum ex asperiores.', NULL, 4, 2, '2026-02-18 05:56:04', '2026-02-18 05:56:04');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '0001_01_01_000000_create_users_table', 1),
(30, '0001_01_01_000001_create_cache_table', 1),
(31, '0001_01_01_000002_create_jobs_table', 1),
(32, '2026_02_18_040739_create_personal_access_tokens_table', 1),
(33, '2026_02_18_043349_create_courses_table', 1),
(34, '2026_02_18_064713_create_lessons_table', 1),
(35, '2026_02_18_093949_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `certificate_number` int NOT NULL,
  `status` enum('created','payment','error') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'created',
  `user_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `certificate_number`, `status`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 86103, 'payment', 2, 2, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(2, 36433, 'created', 2, 2, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(3, 58653, 'error', 3, 6, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(4, 22435, 'created', 5, 8, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(5, 83675, 'created', 4, 8, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(6, 85967, 'error', 1, 2, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(7, 91823, 'payment', 1, 2, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(8, 24083, 'created', 5, 3, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(9, 55728, 'error', 5, 10, '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(10, 84425, 'created', 3, 3, '2026-02-18 05:49:17', '2026-02-18 05:49:17');

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1F13yfHHOfpBPMJP9PCs5VL3VyXLpElp1YdeIg28', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36 Edg/145.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiblVsMXpTSkR2ZWZKa3BxZ1hzcVJXbG9Gd0ZCeW5jUEJKY1pyUXhVOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcmRlcnMiO3M6NToicm91dGUiO3M6Njoib3JkZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1771412869);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('guest','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'guest',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'guest', 'test@example.com', '2026-02-18 05:49:16', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'kpxWeJ0f5N', '2026-02-18 05:49:16', '2026-02-18 05:49:16'),
(2, 'Admin', 'admin', 'admin@edu.com', '2026-02-18 05:49:16', '$2y$12$H/ceq1hmcYDLFLnJ19dcquJlv.DwYV.4Qd5riQV6qiTrImI7yQNaO', 'fxOmfm2c0j', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(3, 'Ms. Jazlyn Kuhlman IV', 'guest', 'schmidt.corine@example.org', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'LNFT8677UD', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(4, 'Dr. Coy Rolfson', 'guest', 'pasquale15@example.net', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'uoYXMUsP0A', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(5, 'Ms. Lenna Stracke DVM', 'guest', 'tyree75@example.org', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'nu2z6KtedR', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(6, 'Prof. Alana Sanford', 'guest', 'gussie.ward@example.net', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', '9HzMiioHvp', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(7, 'Zoila Strosin', 'guest', 'pierre.hodkiewicz@example.net', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'iLnpi6Qtmq', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(8, 'Berneice Wintheiser', 'guest', 'alfonso.daugherty@example.net', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', '9m8U2XoXSs', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(9, 'Aditya Zulauf', 'guest', 'raynor.camryn@example.net', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'LmAjHAu6P0', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(10, 'Weston Reinger', 'guest', 'heloise61@example.net', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'hmwgx2ZcoG', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(11, 'Edd Mertz DVM', 'guest', 'darron.steuber@example.com', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'GRVK1vUGRN', '2026-02-18 05:49:17', '2026-02-18 05:49:17'),
(12, 'Dr. Vicente Reichert PhD', 'guest', 'tomasa51@example.org', '2026-02-18 05:49:17', '$2y$12$ezs98INu8iJNth83CikKxeB25jhuyR5ZotQfc/luuhWfAlWC1zuqC', 'LKgWQIFhpQ', '2026-02-18 05:49:17', '2026-02-18 05:49:17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Индексы таблицы `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Индексы таблицы `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_course_id_foreign` (`course_id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
