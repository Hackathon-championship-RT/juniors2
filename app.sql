-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Ноя 30 2024 г., 11:30
-- Версия сервера: 8.2.0
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `brand_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `when` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `who` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`brand_id`, `name`, `image`, `hint`, `when`, `who`, `country`, `fact`, `created_at`, `updated_at`) VALUES
(14, 'Volkswagen', 'Volkswagen.png', 'Производитель доступных массовых автомобилей.', '1937', 'Фердинанд Порше', 'Германия', 'Volkswagen Beetle был самым продаваемым автомобилем в мире до появления Toyota Corolla.', NULL, NULL),
(15, 'BMW', 'BMW.png', 'Известен спортивными и люксовыми автомобилями.', '1916', 'Карл Рапп', 'Германия', 'BMW начинала с производства авиационных двигателей.', NULL, NULL),
(16, 'Mercedes-Benz', 'Mercedes-Benz.png', 'Лидер в премиальном сегменте автомобилей.', '1926', 'Карл Бенц, Готтлиб Даймлер', 'Германия', 'Первый в мире автомобиль был создан Карлом Бенцем в 1886 году.', NULL, NULL),
(17, 'Audi', 'Audi.png', 'Производитель инновационных автомобилей.', '1909', 'Август Хорьх', 'Германия', 'Название Audi происходит от перевода фамилии Хорьх на латынь.', NULL, NULL),
(18, 'Fiat', 'Fiat.png', 'Крупнейший производитель автомобилей в Италии.', '1899', 'Джованни Аньелли', 'Италия', 'Fiat 500 стал символом итальянской городской жизни.', NULL, NULL),
(19, 'Alfa Romeo', 'Alfa Romeo.png', 'Производитель спортивных автомобилей.', '1910', 'Александр Даррак, Уго Стелла', 'Италия', 'Первая гонка F1 в 1950 году была выиграна Alfa Romeo.', NULL, NULL),
(20, 'Ferrari', 'Ferrari.png', 'Известен премиальными спорткарами.', '1947', 'Энцо Феррари', 'Италия', 'Ferrari никогда не производила внедорожников, но скоро выпустит первый.', NULL, NULL),
(21, 'Renault', 'Renault.png', 'Производитель автомобилей для всех сегментов.', '1899', 'Луи Рено', 'Франция', 'Renault была первой компанией, создавшей такси с мотором, использовавшиеся в Париже.', NULL, NULL),
(22, 'Peugeot', 'Peugeot.png', 'Один из старейших автопроизводителей в мире.', '1810', 'Арман Пежо', 'Франция', 'Peugeot начинала с производства кофемолок.', NULL, NULL),
(23, 'Volvo', 'Volvo.png', 'Специализируется на безопасных автомобилях.', '1927', 'Ассар Габриэльссон, Густав Ларсон', 'Швеция', 'Volvo изобрела и поделилась трехточечным ремнем безопасности бесплатно.', NULL, NULL),
(24, 'Jaguar', 'Jaguar.png', 'Известен люксовыми и спортивными автомобилями.', '1935', 'Уильям Лайонс', 'Великобритания', 'Jaguar E-Type был назван \"самым красивым автомобилем в мире\" Энцо Феррари.', NULL, NULL),
(25, 'Mini', 'Mini.png', 'Производитель компактных городских автомобилей.', '1959', 'Алека Иссигонис', 'Великобритания', 'Mini Cooper выиграл Монте-Карло трижды в 1960-х годах.', NULL, NULL),
(26, 'Ford', 'Ford.png', 'Производитель массовых автомобилей и \"мускулкаров\".', '1903', 'Генри Форд', 'США', 'Ford Mustang стал символом \"мускулкаров\" в Америке.', NULL, NULL),
(27, 'Chevrolet', 'Chevrolet.png', 'Известен мощными автомобилями, включая Camaro и Corvette.', '1911', 'Луи Шевроле, Уильям Дюрант', 'США', 'Chevrolet Corvette использовался в качестве машины безопасности в Инди-500.', NULL, NULL),
(28, 'Dodge', 'Dodge.png', 'Производитель надежных и мощных автомобилей.', '1900', 'Братья Додж', 'США', 'Dodge Charger стал культовым автомобилем после сериала «Дюки из Хаззарда».', NULL, NULL),
(29, 'Cadillac', 'Cadillac.png', 'Производитель люксовых автомобилей.', '1902', 'Генри Лиланд', 'США', 'Cadillac первым ввел электрический стартер в автомобилях.', NULL, NULL),
(30, 'Jeep', 'Jeep.png', 'Известен внедорожниками и военными машинами.', '1941', 'Willys-Overland', 'США', 'Jeep Willys использовался в армии США во время Второй мировой войны.', NULL, NULL),
(31, 'Chrysler', 'Chrysler.png', 'Производитель автомобилей среднего и премиального сегмента.', '1925', 'Уолтер Крайслер', 'США', 'Chrysler Imperial считался роскошным конкурентом Cadillac в 1950-х годах.', NULL, NULL),
(32, 'Pontiac', 'Pontiac.png', 'Известен \"мускулкарами\", такими как GTO.', '1926', 'GM', 'США', 'Pontiac GTO считается первым автомобилем в классе \"мускулкаров\".', NULL, NULL),
(33, 'Tesla', 'Tesla.png', 'Лидер в области электромобилей и инновационных технологий.', '2003', 'Мартин Эберхард, Марк Тарпеннинг', 'США', 'Tesla Model S был первым серийным электрокаром с запасом хода более 600 км.', NULL, NULL),
(34, 'Buick', 'Buick.png', 'Один из старейших американских автомобильных брендов.', '1899', 'Дэвид Данбар Бьюик', 'США', 'Buick первым использовал турбонаддув в массовых автомобилях.', NULL, NULL),
(35, 'Lincoln', 'Lincoln.png', 'Производитель премиальных автомобилей, входящий в Ford.', '1917', 'Генри Лиланд', 'США', 'Лимузины Lincoln использовались многими американскими президентами.', NULL, NULL),
(36, 'Hummer', 'Hummer.png', 'Производитель мощных внедорожников.', '1992', 'AM General', 'США', 'Hummer H1 был основан на военном автомобиле Humvee.', NULL, NULL),
(37, 'Toyota', 'Toyota.png', 'Крупнейший автопроизводитель.', '1937', 'Киитиро Тоёда', 'Япония', 'Prius стал первым серийным гибридом.', NULL, NULL),
(38, 'Honda', 'Honda.png', 'Известна автомобилями и мотоциклами.', '1948', 'Соитиро Хонда', 'Япония', 'Выпускает двигатели для F1, побеждавшие чемпионаты.', NULL, NULL),
(39, 'Nissan', 'Nissan.png', 'Известен спортивными автомобилями, такими как GT-R.', '1933', 'Масудзиро Хашимото', 'Япония', 'GT-R называют \"Годзиллой\" за его доминирование в автоспорте.', NULL, NULL),
(40, 'Mazda', 'Mazda.png', 'Производитель автомобилей с роторными двигателями.', '1920', 'Дзюдзиро Мацуда', 'Япония', 'RX-7 использует уникальный роторный двигатель.', NULL, NULL),
(41, 'Subaru', 'Subaru.png', 'Производитель надежных полноприводных автомобилей.', '1953', 'Kenji Kita', 'Япония', 'Первыми разработали систему Symmetrical AWD.', NULL, NULL),
(42, 'Mitsubishi', 'Mitsubishi.png', 'Известен внедорожниками и спортивными автомобилями.', '1917', 'Ятаро Ивасаки', 'Япония', 'Lancer Evolution стала иконой раллийного спорта.', NULL, NULL),
(43, 'Suzuki', 'Suzuki.png', 'Лидер в производстве компактных авто и мотоциклов.  ', '1909', 'Мичио Сузуки', 'Япония', 'Разработали первые компактные джипы.', NULL, NULL),
(44, 'Lexus', 'Lexus.png', 'Премиальный бренд автомобилей.', '1989', 'Toyota (дочерний бренд)', 'Япония', 'LFA славится звучанием двигателя V10.', NULL, NULL),
(45, 'Infiniti', 'Infiniti.png', 'Премиальные автомобили от Nissan.', '1989', 'Nissan (дочерний бренд)', 'Япония', 'Infiniti разрабатывала технологии для гибридных суперкаров.', NULL, NULL),
(46, 'Acura', 'Acura.png', 'Премиальный бренд компании Honda.', '1986', 'Honda Motor Co.', 'Япония', 'Acura NSX был разработан с участием Айртона Сенны, трехкратного чемпиона F1.', NULL, NULL),
(47, 'Daihatsu', 'Daihatsu.png', 'Производитель компактных автомобилей и минивэнов.', '1907', 'Хацуё Сэйдзо', 'Япония', 'Daihatsu является старейшим японским автопроизводителем.', NULL, NULL),
(48, 'Isuzu', 'Isuzu.png', 'Специализируется на грузовиках и внедорожниках.', '1916', 'Tokyo Ishikawajima Co.', 'Япония', 'Isuzu стала первой японской компанией, выпустившей дизельный двигатель в 1936 году.', NULL, NULL),
(49, 'McLaren', 'McLaren.png', 'Участник F1, производитель высокотехнологичных спорткаров.', '1963', 'Брюс Макларен', 'Великобритания', 'Первыми применили углепластик в болидах F1.', NULL, NULL),
(50, 'Porsche', 'Porsche.png', 'Производитель спортивных и премиальных автомобилей.', '1931', 'Фердинанд Порше', 'Германия', 'Porsche 917 выиграл 24 часа Ле-Мана в 1970 году.', NULL, NULL),
(51, 'Lotus', 'Lotus.png', 'Легкие спортивные автомобили и лидеры инноваций в F1.', '1952', 'Колин Чепман', 'Великобритания', 'Впервые применил аэродинамическую прижимную силу в гонках.', NULL, NULL),
(52, 'Aston Martin', 'Aston Martin.png', 'Производитель премиальных спорткаров.', '1913', 'Лайонел Мартин, Роберт Бамфорд', 'Великобритания', 'DBR1 победил в Ле-Мане в 1959 году.', NULL, NULL),
(53, 'DeLorean', 'DeLorean.png', 'Производитель автомобилей, прославившийся моделью DMC-12.', '1975', 'Джон ДеЛориан', 'США', 'DMC-12 стал культовым после фильма «Назад в будущее».', NULL, NULL),
(54, 'Packard', 'Packard.png', 'Производитель роскошных автомобилей начала XX века.', '1899', 'Джеймс Уорд Паккард', 'США', 'Packard первым ввел автомобильный кондиционер.', NULL, NULL),
(55, 'Studebaker', 'Studebaker.png', 'Один из старейших производителей автомобилей.', '1852', 'Братья Штудебейкеры', 'США', 'Studebaker производила вагоны для Дикого Запада перед созданием авто.', NULL, NULL),
(56, 'Hispano-Suiza', 'Hispano-Suiza.png', 'Производитель роскошных автомобилей и самолетных двигателей.', '1904', 'Дамиан Матеу, Марк Биркигт', 'Испания/Франция', 'Производила авиационные двигатели во время Первой мировой войны.', NULL, NULL),
(57, 'Oldsmobile', 'Oldsmobile.png', 'Старейший американский бренд автомобилей.', '1897', 'Рэнсом Эли Олдс', 'США', 'Представила первый массовый автоматический гидротрансформатор.', NULL, NULL),
(59, 'Saab', 'Saab.png', 'Известен автомобильным дизайном с авиационным вдохновением.', '1945', 'Сааб-СКАНИЯ', 'Швеция', 'Saab впервые использовал аэродинамическую конструкцию салона, как в кабине самолета.', NULL, NULL),
(60, 'Rolls-Royce', 'Rolls-Royce.png', 'Производитель люксовых автомобилей и авиационных двигателей.', '1906', 'Чарльз Роллс, Генри Ройс', 'Великобритания', 'Логотип «Дух экстаза» стал символом роскоши.', NULL, NULL),
(61, 'Bentley', 'Bentley.png', 'Известен роскошными спортивными автомобилями.', '1919', 'Уолтер Бентли', 'Великобритания', 'Побеждал в Ле-Мане пять раз в 1920-х годах.', NULL, NULL),
(62, 'Bugatti', 'Bugatti.png', 'Производитель роскошных спорткаров и гиперкаров.', '1909', 'Этторе Бугатти', 'Франция', 'Bugatti Veyron был первым серийным авто, преодолевшим 400 км/ч.', NULL, NULL),
(63, 'Koenigsegg', 'Koenigsegg.png', 'Производитель ультраэксклюзивных гиперкаров.', '1994', 'Кристиан фон Кёнигсегг', 'Швеция', 'Koenigsegg Agera RS удерживает рекорд скорости — 447 км/ч.', NULL, NULL),
(64, 'Pagani', 'Pagani.png', 'Известен высокотехнологичными гиперкарами ручной сборки.', '1992', 'Горацио Пагани', 'Италия', 'Горацио Пагани работал инженером в Lamborghini перед созданием своего бренда.', NULL, NULL),
(65, 'Lamborghini', 'Lamborghini.png', 'Производит мощные спорткары и суперкаров.', '1963', 'Ферруччо Ламборгини', 'Италия', 'Бренд изначально выпускал тракторы.', NULL, NULL),
(66, 'Maserati', 'Maserati.png', 'Премиум-автомобили, спорткары и лимузины.', '1914', 'Братья Мазерати', 'Италия', 'Логотип Maserati вдохновлен трезубцем Нептуна в Болонье.', NULL, NULL),
(67, 'Rimac', 'Rimac.png', 'Специализируется на электрических гиперкарах.', '2009', 'Мате Римац', 'Хорватия', 'Rimac C_Two разгоняется до 100 км/ч за 1,85 секунды.', NULL, NULL),
(68, 'SSC', 'SSC.png', 'Производитель эксклюзивных гиперкаров.', '1998', 'Джеррод Шелби', 'США', 'SSC Ultimate Aero в 2007 году превзошел Bugatti Veyron по скорости.', NULL, NULL);

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
-- Структура таблицы `car_categery_connects`
--

CREATE TABLE `car_categery_connects` (
  `connect_id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `car_categery_connects`
--

INSERT INTO `car_categery_connects` (`connect_id`, `brand_id`, `category_id`, `created_at`, `updated_at`) VALUES
(14, 14, 3, NULL, NULL),
(15, 15, 3, NULL, NULL),
(16, 16, 3, NULL, NULL),
(17, 17, 3, NULL, NULL),
(18, 18, 3, NULL, NULL),
(19, 19, 3, NULL, NULL),
(20, 20, 3, NULL, NULL),
(21, 21, 3, NULL, NULL),
(22, 22, 3, NULL, NULL),
(23, 23, 3, NULL, NULL),
(24, 24, 3, NULL, NULL),
(25, 25, 3, NULL, NULL),
(26, 26, 4, NULL, NULL),
(27, 27, 4, NULL, NULL),
(28, 28, 4, NULL, NULL),
(29, 29, 4, NULL, NULL),
(30, 30, 4, NULL, NULL),
(31, 31, 4, NULL, NULL),
(32, 32, 4, NULL, NULL),
(33, 33, 4, NULL, NULL),
(34, 34, 4, NULL, NULL),
(35, 35, 4, NULL, NULL),
(36, 36, 4, NULL, NULL),
(37, 37, 5, NULL, NULL),
(38, 38, 5, NULL, NULL),
(39, 39, 5, NULL, NULL),
(40, 40, 5, NULL, NULL),
(41, 41, 5, NULL, NULL),
(42, 42, 5, NULL, NULL),
(43, 43, 5, NULL, NULL),
(44, 44, 5, NULL, NULL),
(45, 45, 5, NULL, NULL),
(46, 46, 5, NULL, NULL),
(47, 47, 5, NULL, NULL),
(48, 48, 5, NULL, NULL),
(49, 20, 6, NULL, NULL),
(50, 49, 6, NULL, NULL),
(51, 50, 6, NULL, NULL),
(52, 51, 6, NULL, NULL),
(53, 52, 6, NULL, NULL),
(54, 16, 6, NULL, NULL),
(55, 19, 6, NULL, NULL),
(56, 17, 6, NULL, NULL),
(57, 26, 6, NULL, NULL),
(58, 15, 6, NULL, NULL),
(59, 37, 6, NULL, NULL),
(60, 41, 6, NULL, NULL),
(61, 53, 7, NULL, NULL),
(62, 54, 7, NULL, NULL),
(63, 55, 7, NULL, NULL),
(64, 56, 7, NULL, NULL),
(65, 57, 7, NULL, NULL),
(66, 34, 7, NULL, NULL),
(67, 59, 7, NULL, NULL),
(68, 32, 7, NULL, NULL),
(69, 35, 7, NULL, NULL),
(70, 60, 7, NULL, NULL),
(71, 61, 7, NULL, NULL),
(72, 29, 7, NULL, NULL),
(73, 62, 8, NULL, NULL),
(74, 63, 8, NULL, NULL),
(75, 64, 8, NULL, NULL),
(76, 65, 8, NULL, NULL),
(77, 20, 8, NULL, NULL),
(78, 49, 8, NULL, NULL),
(79, 52, 8, NULL, NULL),
(80, 50, 8, NULL, NULL),
(81, 66, 8, NULL, NULL),
(82, 67, 8, NULL, NULL),
(83, 68, 8, NULL, NULL),
(84, 51, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Европейская классика', 'Эта группа включает автомобили, представляющие лучшие традиции европейской автоиндустрии. Стиль, качество и инженерные решения сделали их узнаваемыми и любимыми по всему миру.', NULL, NULL),
(4, 'Культовые американцы', 'Представители американской автоиндустрии, ставшие легендами. От \"мускулкаров\" до мощных внедорожников, эти машины воплощают дух свободы и дерзости.', NULL, NULL),
(5, 'Самураи скорости', 'Автомобили японских брендов, сочетающие инновационные технологии, надежность и стиль. Эти машины покоряют сердца своим качеством и мощью, будь то спортивные купе или культовые седаны.', NULL, NULL),
(6, 'Гоночные легенды', 'В этой группе — машины, прославившиеся на трассах всего мира. Они являются символами скорости, адреналина и побед, став неотъемлемой частью истории автоспорта.', NULL, NULL),
(7, 'Ретро-автомобили', 'Здесь собраны легендарные автомобили прошлого, ставшие иконой своего времени. Ретро-автомобили — это не только техника, но и искусство, способное перенести вас в эпоху, когда стиль и механика были неразрывны.', NULL, NULL),
(8, 'Суперкары и гиперкары', 'Эта группа объединяет самые быстрые и технологически продвинутые автомобили мира, которые демонстрируют мощь, роскошь и инженерное совершенство. Суперкары и гиперкары — это символы скорости, инноваций и престижа.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `game_stories`
--

CREATE TABLE `game_stories` (
  `story_id` bigint UNSIGNED NOT NULL,
  `level_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `game_stories`
--

INSERT INTO `game_stories` (`story_id`, `level_id`, `user_id`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '00:04:00', NULL, NULL),
(2, 1, 1, '00:04:30', NULL, NULL),
(3, 2, 1, '00:04:35', NULL, NULL),
(4, 2, 1, '00:04:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `levels`
--

CREATE TABLE `levels` (
  `level_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_number` int NOT NULL,
  `time` time NOT NULL DEFAULT '00:10:00',
  `category_id` bigint UNSIGNED NOT NULL,
  `placement_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `levels`
--

INSERT INTO `levels` (`level_id`, `name`, `level_number`, `time`, `category_id`, `placement_id`, `created_at`, `updated_at`) VALUES
(1, 'Классика', 1, '00:10:00', 3, 1, NULL, NULL),
(2, 'Уже неплохо так', 2, '00:10:00', 5, 2, NULL, NULL);

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
(10, '0000_11_29_145707_create_categories_table', 1),
(11, '0000_11_29_234251_create_placements_table', 1),
(12, '0001_01_01_000000_create_users_table', 1),
(13, '0001_01_01_000001_create_cache_table', 1),
(14, '0001_01_01_000002_create_jobs_table', 1),
(15, '2024_11_29_145151_create_levels_table', 1),
(16, '2024_11_29_145159_create_brands_table', 1),
(17, '2024_11_29_145720_create_car_categery_connects_table', 1),
(18, '2024_11_29_152122_create_game_stories_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `placements`
--

CREATE TABLE `placements` (
  `placement_id` bigint UNSIGNED NOT NULL,
  `complexity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinates` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `connects` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `placements`
--

INSERT INTO `placements` (`placement_id`, `complexity`, `coordinates`, `connects`, `created_at`, `updated_at`) VALUES
(1, 'easy', 'csdcsd', 'edwec', NULL, NULL),
(2, 'medium', 'csdcsd', 'edwec', NULL, NULL),
(3, 'hard\r\n', 'csdcsd', 'edwec', NULL, NULL);

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
('ItR1kZYjos98M0pL2DxEpZjYoUEcHbtY54usFV2Q', 1, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTlo5azNOS2ZibzBweXYwNUVGQ1J3VVpQS0RTTmNqaWJaaVBvVHc4ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzMyOTUxMjk3O319', 1732951297),
('moZd90Pe5I3dZLcsUIqMxErezLqGrQu4AVCxUN7F', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 YaBrowser/24.10.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZEJhWEdSQ08yemR6dTVxVnFEanJNT2xzOThTYWYxd0ZDWDBibDNLOCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732954700);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_id` int DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `telegram_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Тимур', 'users/Cvhc5Zxe0TGXLPqGJkHmjs2kfucTP0OoD20Y1Dcq.png', 'tyusupov2000@gmail.com', NULL, NULL, '$2y$12$Fv7lGkh.3cR3IWh4I5Flmemu.BenvSgIWWe6.YJIi7qs5kfProVsC', 'm4BoiWAhBoGF9IYpQzJha57LUl4l2kz04iOpIYsVSwyDFedTqChlCJUO0Y4j', '2024-11-29 21:05:08', '2024-11-30 07:08:51');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Индексы таблицы `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `car_categery_connects`
--
ALTER TABLE `car_categery_connects`
  ADD PRIMARY KEY (`connect_id`),
  ADD KEY `car_categery_connects_brand_id_foreign` (`brand_id`),
  ADD KEY `car_categery_connects_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `game_stories`
--
ALTER TABLE `game_stories`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `game_stories_level_id_foreign` (`level_id`),
  ADD KEY `game_stories_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`),
  ADD KEY `levels_category_id_foreign` (`category_id`),
  ADD KEY `levels_placement_id_foreign` (`placement_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`placement_id`);

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
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `car_categery_connects`
--
ALTER TABLE `car_categery_connects`
  MODIFY `connect_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `game_stories`
--
ALTER TABLE `game_stories`
  MODIFY `story_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `placements`
--
ALTER TABLE `placements`
  MODIFY `placement_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `car_categery_connects`
--
ALTER TABLE `car_categery_connects`
  ADD CONSTRAINT `car_categery_connects_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `car_categery_connects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `game_stories`
--
ALTER TABLE `game_stories`
  ADD CONSTRAINT `game_stories_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levels_placement_id_foreign` FOREIGN KEY (`placement_id`) REFERENCES `placements` (`placement_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
