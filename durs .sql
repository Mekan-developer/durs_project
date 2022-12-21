-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 18 2022 г., 19:09
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `durs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone_number`, `email`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Mekan', 99362724494, 'hgashd@bv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?', '2022-11-08 12:24:18', '2022-11-08 12:24:18'),
(2, 'Mekan', 99362724494, 'hgashd@bv', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?', '2022-11-08 12:25:41', '2022-11-08 12:25:41'),
(3, 'Merdan', 956656, 'dfgv@asd', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?', '2022-11-08 12:26:28', '2022-11-08 12:26:28'),
(4, 'Aly', 993656565656, 'jksahdaj@f.sd', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?', '2022-11-09 02:35:04', '2022-11-09 02:35:04'),
(5, 'sad', 56456465, 'gfghf@gam.a', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque asperiores repellendus error pariatur dolore iusto?', '2022-11-09 02:38:09', '2022-11-09 02:38:09'),
(6, 'Yhlas', 99362925242, 'Yhlas.ot@gmail.com', 'qwertyu asdsa d asd asd asd as d asd asd asd asd sad as das d lorem6', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2022_11_08_151838_create_contacts_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(26, '2022_11_18_162926_create_products_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ady_TM` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sarp_edilisi_TM` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulanys_hasiyetleri_TM` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ady_RU` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sarp_edilisi_RU` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulanys_hasiyetleri_RU` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ady_EN` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sarp_edilisi_EN` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulanys_hasiyetleri_EN` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `categories`, `btn_color`, `images`, `ady_TM`, `sarp_edilisi_TM`, `ulanys_hasiyetleri_TM`, `ady_RU`, `sarp_edilisi_RU`, `ulanys_hasiyetleri_RU`, `ady_EN`, `sarp_edilisi_EN`, `ulanys_hasiyetleri_EN`, `created_at`, `updated_at`) VALUES
(1, 'LUX', '#e14747', 'admin_bedreler/6YZpbeDn.png', '“Dürs” ýokary hilli daşky işler üçin niýetlenen akril boýagy', 'Bir gatlakda 1 inedördül metr üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr', '“Dürs” - Акриловая краска для качественного экстерьера', 'На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от подготовки поверхности и метода использования.', 'Белая глянцевая краска  для обычного применения для жилых комнат и различных стен. Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа', 'High-quality “Durs” acrylic paint for, exterior works.', '100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage, white dull colored paint used for inhabited rooms and various walls. Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-27 23:57:12', '2022-11-27 23:57:12'),
(2, 'LUX', '#a983e2', 'admin_bedreler/OQBR2KoX.png', '“Dürs” ýokary hilli içki işler üçin niýetlenen akril boýagy.', 'Bir gatlakda 1 inedördül metr üçin 100-120 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', ' “Dürs” - качественная акриловая краска для  внутреннего интерьера.', 'На один слой для 1 кв. метра расходуется 100-120 г краски. Расход варьируется в зависимости от подготовки поверхности и способа использования.', 'Белая глянцевая краска  для обычного использования, для жилых комнат и различных стен. Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.', 'High-quality “Durs” acrylic paint for interior works.', '100-120 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'Usage and types: normal usage, white dull colored paint  used for inhabited rooms and various walls.    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-28 00:03:23', '2022-11-28 00:03:23'),
(3, 'LUX', '#31dd53', 'admin_bedreler/EjF71arQ.png', '“Dürs” ýokary hilli potolok işler üçin  niýetlenen akril boýagy.', 'Bir gatlakda 1 inedördül metr üçin 90-110 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. \r\n Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', '“Dürs” - акриловая краска для   качественных потолочных работ.', 'На один слой расходуется 90-110 г краски на 1 кв.м. Расход варьируется в зависимости от подготовки поверхности и способа использования.', 'Белая глянцевая краска для обычного использования, жилых комнат и различных стен. Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания  - 24 часа.', 'High-quality “Durs” acrylic paint for ceiling works.', '90-110 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage, white dull colored paint used for inhabited rooms and various walls. Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-28 00:08:23', '2022-11-28 00:08:23'),
(4, 'ECONOM', '#c83737', 'admin_bedreler/4F59bDyq.png', '“Dürs” daşky işler üçin niýetlenen akril boýagy', 'Bir gatlakda 1 inedördül metr üçin 140-170 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', '“Dürs” - акриловая краска для наружных работ', 'На один слой уходит 140-170 г краски на квадратный метр. Расход варьируется в зависимости от подготовки поверхности и способа применения.', 'Белая глянцевая краска для обычного применения для жилых комнат и различных стен. Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.', 'High-quality “Durs” acrylic paint for  exterior works.', '140-170 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage, white dull colored paint used for inhabited rooms and various walls. Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-28 23:36:27', '2022-11-28 23:36:27'),
(5, 'ECONOM', '#581c87', 'admin_bedreler/LfQV7tyX.png', '“Dürs” içki işler üçin niýetlenen akril boýagy', 'Bir gatlakda 1 inedördül metr üçin 130-160 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan  ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', '“Dürs” - акриловая краска для  внутреннего интерьера.', 'На один слой уходит 130-160 г краски на 1 квадратный метр. Расход варьируется в зависимости от подготовки поверхности и способа применения.', 'Белая глянцевая краска для обычного использования,  для жилых комнат и различных стен.    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.', 'High-quality “Durs” acrylic paint for interior works.', '130-160 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage, white dull colored paint used for inhabited rooms and various walls. Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-28 23:40:49', '2022-11-28 23:40:49'),
(6, 'ECONOM', '#3f6212', 'admin_bedreler/J3tjZsFq.png', '“Dürs” potolok işler üçin niýetlenen akril boýagy. ', 'Bir gatlakda 1 inedördül metr üçin 120-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', '“Dürs” - акриловая краска для  потолочных работ. ', ' На один слой расходуется 120-150 г краски на квадратный метр. Расход варьируется в зависимости от подготовки поверхности и способа применеия.', 'Белая глянцевая краска для обычного использования, жилых комнат и различных стен.    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания  - 24 часа.', 'High-quality “Durs” acrylic paint for  ceiling works. ', '120-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage,  white dull colored paint  used for inhabited rooms and various walls. Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-28 23:44:47', '2022-11-28 23:44:47'),
(7, 'TMEX', '#047857', 'admin_bedreler/DV7FlE3I.png', '“Dürs” ýokary hilli daşky işler üçin niýetlenen akril boýagy', 'Bir gatlakda 1 inedördül metr üçin 100-130 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 7-12 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', '“Dürs” -Акриловая краска для качественного экстерьера. ', 'На один слой расходуется 100-130 г краски на 1 кв.м. Расход варьируется в зависимости от подготовки поверхности и метода использования', 'Белая глянцевая краска для обычного применения для жилых комнат и различных стен. Краску перед использованием хорошо перемешать. Можно смешать 7-12% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.', 'High-quality “Durs” acrylic paint for exterior works', '100-130 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage, white dull colored paint used for inhabited rooms and various walls. Paint is mixed well before usage. The paint can be mixed with water that is equal to 7-12 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-28 23:50:51', '2022-11-28 23:50:51'),
(8, 'TMEX', '#047857', 'admin_bedreler/6Q7Ysd1Q.png', '“Dürs” ýokary hilli içki işler üçin niýetlenen akril boýagy. ', 'Bir gatlakda 1 inedördül metr üçin 90-110 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 7-12 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', '“Dürs” - качественная акриловая краска для внутреннего интерьера. ', 'На один слой для 1 кв. метра расходуется 90-110 г краски. Расход варьируется в зависимости от подготовки поверхности и способа использования.', 'Белая глянцевая краска для обычного использования,  для жилых комнат и различных стен.    Краску перед использованием хорошо перемешать. Можно смешать 7-12% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.', 'High-quality “Durs” acrylic paint for interior works.', '90-110 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage, white dull colored paint used for inhabited rooms and various walls.   Paint is mixed well before usage. The paint can be mixed with water that is equal to 7-12 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-28 23:54:20', '2022-11-28 23:54:20'),
(9, 'TMEX', '#047857', 'admin_bedreler/ENILOIHA.png', '“Dürs” ýokary hilli potolok işler üçin niýetlenen akril boýagy.', 'Bir gatlakda 1 inedördül metr üçin 80-100 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.', 'adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan  ak ýalpyldysyz reňkli boýag. Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 7-12 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.', '“Dürs” - акриловая краска для  качестве. нных потолочных работ.', 'На один слой расходуется 80-100 г краски на 1 кв.м. Расход варьируется в зависимости от подготовки поверхности и способа использования.', 'Белая глянцевая краска для обычного использования, жилых комнат и различных стен.    Краску перед использованием хорошо перемешать. Можно смешать 7-12% его веса с водой. Температура во время работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания  - 24 часа.', 'High-quality “Durs” acrylic paint for ceiling works.', '80-100 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.', 'normal usage, white dull colored paint used for inhabited rooms and various walls. Paint is mixed well before usage. The paint can be mixed with water that is equal to 7-12 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.', '2022-11-29 00:04:32', '2022-11-29 00:04:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
