-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 05:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compro-dbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabangs`
--

CREATE TABLE `cabangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabangs`
--

INSERT INTO `cabangs` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'site', NULL, NULL, NULL),
(2, 'ho', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divitions`
--

CREATE TABLE `divitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divitions`
--

INSERT INTO `divitions` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'DBM', NULL, NULL, NULL),
(2, 'Human Resouce & General Affair', NULL, NULL, NULL),
(3, 'Plant & Business Development', NULL, NULL, NULL),
(4, 'Healthy, Safety, Environment', NULL, NULL, NULL),
(5, 'Information & Technology', NULL, NULL, NULL),
(6, 'Operational & Mine Engineering', NULL, NULL, NULL),
(7, 'Finance & Accounting', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divition_id` int(10) UNSIGNED NOT NULL,
  `position_id` int(10) UNSIGNED NOT NULL,
  `cabang_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `divition_id`, `position_id`, `cabang_id`, `image`, `quote`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Deni Sri Wardana', 1, 1, 2, 'Stakeholder', 'Selamat datang di website kami, harapan kami agar website ini dapat memberikan informasi relevan kepada Anda, disertai pengertian yang memadai mengenai PT. Djava Berkah Mineral.', NULL, NULL, NULL),
(2, 'Agung Sudarsono', 2, 2, 2, 'Stakeholder', 'Terima kasih telah mengakses website kami, kami berharap website ini dapat memberikan kesempatan kepada user untuk melihat profil perusahaan kami.', NULL, NULL, NULL),
(3, 'Nurcholis', 3, 2, 2, 'Stakeholder', 'Selamat datang di website kami, semoga website kami dapat memberikan informasi tentang perusahaan dan kegiatan yang kami lakukan untuk perusahaan ini.', NULL, NULL, NULL),
(4, 'Dadan Darmawan', 4, 2, 2, 'Stakeholder', 'Terima kasih telah mengunjungin website kami karena kami berharap informasi yang kami bagikan adalah yang Anda harapkan ada di website kami.', NULL, NULL, NULL),
(5, 'Haryo Febrima Yudha', 5, 2, 2, 'Stakeholder', 'Terima kasih telah mengunjungi website kami, kami berharap website kami menjadi penghubung kami dengan user kami. Sehingga user mendapatkan informasi perusahaan melalui website ini.', NULL, NULL, NULL),
(6, 'Rakhmat Budi W', 6, 2, 2, 'Stakeholder', 'Terima kasih telah mengunjungi website PT. Djava Berkah Mineral kiranya website ini bisa menjadi referensi bagi Anda yang ingin mendapatkan informasi tentang perusahaan kami.', NULL, NULL, NULL),
(7, 'Rheiny P Dewi', 7, 2, 2, 'Stakeholder', 'Selamat datang di website kami, melalui website ini kami bisa berbagi mengenai profil perusahaan ini.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `date`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Vickie Haag', 'Consequatur et id voluptas omnis. Maiores omnis dicta ratione quam aut. Iste quas sint ea modi. Magnam et voluptatem et asperiores in qui.', '2005-09-10', 'somepicture', NULL, NULL, NULL),
(2, 'Prof. Ines Kuhic PhD', 'Iure exercitationem ipsam cumque dolor. Necessitatibus fuga quo sunt aspernatur. Ad optio quam eos minima eaque vel a perspiciatis. Voluptates quibusdam est dolores cumque nulla beatae.', '1974-12-03', 'somepicture', NULL, NULL, NULL),
(3, 'Prof. Mabelle Kshlerin', 'Cupiditate sit accusantium quis qui sequi et. Ab quos quis consequuntur voluptates ut sint voluptatum. Et reiciendis ut voluptas doloremque praesentium non enim. Quod tempore facere minus iste odit.', '1978-06-02', 'somepicture', NULL, NULL, NULL),
(4, 'Sasha Klocko', 'Sunt autem cumque illum et id quibusdam hic aut. Voluptate deserunt saepe perspiciatis hic est voluptate nam. Reiciendis omnis ut debitis porro laudantium dolorem.', '1993-10-05', 'somepicture', NULL, NULL, NULL),
(5, 'Miss Audie Konopelski II', 'Ea illum id sunt. Tempora non accusantium dolore eum et qui consectetur. Quaerat dolore ab laboriosam molestias. Voluptas mollitia ut exercitationem nobis.', '2013-07-10', 'somepicture', NULL, NULL, NULL),
(6, 'Zelma Ortiz DVM', 'Accusamus corporis voluptatem a iure quis adipisci. Illum fuga quia molestiae error. Architecto quasi laborum et quia dicta vitae rerum deserunt. Officiis nam minus animi aut et quia ut.', '1985-12-20', 'somepicture', NULL, NULL, NULL),
(7, 'Lola Stracke', 'Sunt inventore eius corrupti porro. Dolorem animi at amet velit. Rem a rerum ut dicta fugit eum. Ut blanditiis recusandae nam omnis laboriosam velit eos.', '2000-07-15', 'somepicture', NULL, NULL, NULL),
(8, 'Prof. Laurel Schroeder DDS', 'Dolores nostrum nemo et beatae fugiat. Porro corrupti rerum ut magni aliquam. Voluptas rerum maiores consequatur consequatur fugiat alias.', '2014-10-14', 'somepicture', NULL, NULL, NULL),
(9, 'Bailee Herzog', 'Maiores a velit quis placeat. Molestiae dolor sunt tenetur adipisci fugit. Consequatur ratione cumque molestias quis aperiam quibusdam. Ut corrupti qui impedit soluta.', '2007-03-22', 'somepicture', NULL, NULL, NULL),
(10, 'Kaitlin Considine', 'Est aut sunt rerum omnis sapiente nihil doloremque. Doloribus ducimus debitis quis omnis ea. Amet quis ut odit. Voluptatum voluptates magnam id at omnis.', '1984-09-22', 'somepicture', NULL, NULL, NULL),
(11, 'Bert Fritsch', 'Illum repudiandae quos tenetur harum perferendis repellendus repellat doloribus. Et inventore quae necessitatibus veritatis explicabo quam.', '1972-03-14', 'somepicture', NULL, NULL, NULL),
(12, 'Mr. Conrad Jerde Jr.', 'In qui consequatur praesentium dolores. Voluptatem iusto ut sed delectus. Ea sed velit adipisci aliquid eum. Sed eos porro incidunt alias suscipit occaecati corrupti.', '2002-12-31', 'somepicture', NULL, NULL, NULL),
(13, 'Berniece Tillman', 'Nisi ipsa nemo aut sunt sit et assumenda id. Quia sint distinctio voluptatem. Cumque vitae ipsam quia.', '1977-06-09', 'somepicture', NULL, NULL, NULL),
(14, 'Joana Donnelly', 'Quia dolores consectetur aut quaerat suscipit sit. Dolorem est qui quidem qui facere quam eveniet.', '1982-10-19', 'somepicture', NULL, NULL, NULL),
(15, 'Trace Jenkins V', 'Et et voluptate et commodi iusto minus voluptatem voluptatem. Sunt sint sit architecto et. Eum accusantium et eos quia error repellat.', '1997-05-31', 'somepicture', NULL, NULL, NULL),
(16, 'Prof. Ernest Dach I', 'Quod facere ea repudiandae similique omnis. Eos qui laborum occaecati provident cum nihil. Ad eum repellat quasi est cumque quas libero. Nihil eveniet vero voluptates dolore.', '1991-10-05', 'somepicture', NULL, NULL, NULL),
(17, 'Fleta Moen', 'Ut sed incidunt cum quia ipsam dicta. Omnis ullam ipsam cupiditate ullam. Maxime voluptatem in consequuntur facilis. Accusantium neque maiores id itaque sed dolorem.', '1975-08-30', 'somepicture', NULL, NULL, NULL),
(18, 'Ms. Maybell Rogahn', 'Iste ea ut ipsa voluptas. Facilis ut ut non ipsum amet. In nisi rerum facere qui quo rerum quis ab. Praesentium hic rem reprehenderit quia quae.', '1984-07-17', 'somepicture', NULL, NULL, NULL),
(19, 'Aidan Jacobi', 'Harum odit sit rerum. Voluptatum sit sed in dolores incidunt magnam. Perspiciatis ipsam provident quod sit.', '1980-12-08', 'somepicture', NULL, NULL, NULL),
(20, 'Melyssa Pagac', 'Rerum aliquam sit ullam sit nobis nihil nobis. Vel et unde voluptatem provident sed cum.', '2010-07-06', 'somepicture', NULL, NULL, NULL),
(21, 'Layne Mante', 'Eligendi sapiente quia deleniti deleniti voluptates ut. Incidunt velit et consectetur.', '1988-02-05', 'somepicture', NULL, NULL, NULL),
(22, 'Evie Ryan', 'Est similique asperiores quo et. Quia id et alias. Iure ut dicta sed unde ducimus accusamus. Nam fugiat vero et ducimus sit et sit voluptatibus.', '1978-05-15', 'somepicture', NULL, NULL, NULL),
(23, 'Mr. Lexus Bergnaum', 'Delectus delectus voluptas incidunt perspiciatis animi. Illo itaque adipisci vero nulla. Cum doloribus minima architecto fuga totam alias id.', '1988-06-17', 'somepicture', NULL, NULL, NULL),
(24, 'Emilio Abshire', 'Hic adipisci mollitia dolor nam vel ea iure. Tempora aut provident aut natus cum. Ratione officia et perferendis consectetur. Occaecati eum non et ut.', '2001-10-28', 'somepicture', NULL, NULL, NULL),
(25, 'Dr. Creola Harvey MD', 'Blanditiis accusamus officia repellendus enim sint sed. Hic rerum ea numquam omnis placeat harum. Reprehenderit quibusdam perspiciatis aliquid fugit. Ratione quidem omnis maxime ad.', '1977-12-13', 'somepicture', NULL, NULL, NULL),
(26, 'Claire Schmitt', 'Velit aliquid magni tenetur eveniet et. Qui a dolorem et qui. Ut quia ut occaecati nobis illum.', '1987-05-13', 'somepicture', NULL, NULL, NULL),
(27, 'Schuyler Keebler DDS', 'Aut perferendis nemo ad eius laudantium exercitationem a ut. Consectetur aliquam mollitia aperiam doloremque nobis. Labore et id laudantium ab.', '2012-03-21', 'somepicture', NULL, NULL, NULL),
(28, 'Parker Rutherford', 'Ipsam dignissimos fugiat velit recusandae placeat vel vel. A vitae quo dolores aliquid qui culpa sit. Quo aut dignissimos quibusdam minima eos. Delectus nemo non repellat et quibusdam.', '1978-09-10', 'somepicture', NULL, NULL, NULL),
(29, 'Morris Kuhn', 'Nam nostrum voluptatum quia et. Vitae saepe ut veniam. Quis eligendi aperiam accusantium quo ea.', '1972-09-04', 'somepicture', NULL, NULL, NULL),
(30, 'Aimee Lebsack', 'Velit quam quia numquam sed inventore iste. Nihil sint quisquam ut eos dolor. Quidem natus numquam doloribus atque.', '2014-05-15', 'somepicture', NULL, NULL, NULL),
(31, 'Prof. Dock Trantow', 'Possimus illum omnis harum magni. Amet dolorem impedit at cupiditate. Eveniet excepturi nobis dignissimos blanditiis dolor.', '1993-09-27', 'somepicture', NULL, NULL, NULL),
(32, 'Prof. Jillian Corkery', 'Qui ducimus repellat qui accusantium. Ut facilis sunt velit et impedit accusantium esse. Sed non vel optio et maiores non.', '2010-07-11', 'somepicture', NULL, NULL, NULL),
(33, 'Dr. Ernesto Wisozk MD', 'Sint earum eos a rem voluptas non dolores. Ex et laboriosam omnis. Ut consequatur error quas deserunt neque autem voluptatem.', '1982-12-08', 'somepicture', NULL, NULL, NULL),
(34, 'Prof. Randi Dibbert', 'Veritatis necessitatibus repellendus illum velit voluptas adipisci sapiente. Totam iste labore impedit reiciendis est eius. Eligendi saepe accusamus porro qui quas.', '1975-11-02', 'somepicture', NULL, NULL, NULL),
(35, 'Federico Kessler', 'Sed ea sequi sequi eligendi. Velit laudantium sint atque praesentium possimus deleniti. Qui ipsam explicabo consequatur nihil aut qui.', '2005-05-23', 'somepicture', NULL, NULL, NULL),
(36, 'Ladarius Heaney', 'Odio incidunt excepturi est cupiditate. Nisi animi quia et alias incidunt molestiae saepe. Aut pariatur qui perspiciatis dolorem qui ducimus quod omnis.', '2013-11-28', 'somepicture', NULL, NULL, NULL),
(37, 'Isaiah Aufderhar Jr.', 'Sed itaque dignissimos praesentium accusantium eius qui at. Quam earum nam consectetur. Quo autem possimus sint tempora harum quia.', '1989-01-07', 'somepicture', NULL, NULL, NULL),
(38, 'Clarissa Jerde', 'Consectetur laborum ut accusamus ut fuga qui accusamus. Eveniet qui repellat expedita sapiente in et alias.', '2003-11-28', 'somepicture', NULL, NULL, NULL),
(39, 'Modesta Schumm', 'Deleniti id nulla reprehenderit iusto veritatis. Maxime sunt temporibus eos omnis autem vitae autem et. Incidunt non soluta et porro sunt suscipit. Exercitationem eos quia et molestiae id est illo.', '1979-12-15', 'somepicture', NULL, NULL, NULL),
(40, 'Lon Trantow', 'Repellat fuga nam adipisci quis. Eum architecto id corrupti dolores quisquam at porro. Fuga voluptatem nobis quod earum ut. Dolorum impedit dolorum culpa mollitia quae sequi quis.', '1970-09-29', 'somepicture', NULL, NULL, NULL),
(41, 'Prof. Kadin Cartwright V', 'Sed et fugit deleniti ad est. Excepturi dolor quo perspiciatis quasi velit. Placeat culpa non explicabo molestias nisi et officia. Rerum at voluptatem sequi ducimus velit.', '2013-03-03', 'somepicture', NULL, NULL, NULL),
(42, 'Fredy Lowe', 'Quis harum ipsam molestias natus dolorem ratione veniam. Consequuntur cupiditate saepe voluptatem voluptate architecto quia.', '1991-10-06', 'somepicture', NULL, NULL, NULL),
(43, 'Jakayla McDermott', 'Reiciendis at dolorum pariatur aut. Earum aliquam corporis ea sunt harum deserunt porro. Nihil a omnis rerum.', '1971-06-09', 'somepicture', NULL, NULL, NULL),
(44, 'Herbert Hyatt', 'Ea iusto nisi aut ex cum cum. Ea tempore aut veniam quasi quasi. Est dolores et modi illo. Provident vel pariatur doloremque voluptatem maxime unde est.', '2013-08-17', 'somepicture', NULL, NULL, NULL),
(45, 'Shemar Nicolas', 'Occaecati voluptatibus aut adipisci consequatur exercitationem quibusdam. Dolor molestiae vero nemo. Beatae laboriosam temporibus optio eligendi qui. Dolorum ex est voluptas vero eum.', '2003-11-25', 'somepicture', NULL, NULL, NULL),
(46, 'Dr. Johnny Barrows III', 'Assumenda sed ipsum repellendus commodi rem itaque eum. Natus doloribus fugit quos eaque totam in. Amet veritatis error sit in aliquam saepe. Quos ut fugiat sed dolorem sapiente est est et.', '2020-07-22', 'somepicture', NULL, NULL, NULL),
(47, 'Mrs. Vernie Halvorson', 'Maiores veritatis harum veritatis consequatur necessitatibus. Et beatae libero saepe quis. Neque ex et ad aut voluptas. Totam ut veritatis ut ratione atque est.', '1992-04-15', 'somepicture', NULL, NULL, NULL),
(48, 'Abdul Considine', 'Nemo id est consectetur exercitationem ut quisquam mollitia. Et natus iure est rem unde illum laudantium.', '2007-04-18', 'somepicture', NULL, NULL, NULL),
(49, 'Taya Wolff', 'Similique maxime cupiditate molestias magni voluptas. Adipisci blanditiis cumque eos voluptatem.', '1970-01-12', 'somepicture', NULL, NULL, NULL),
(50, 'Prof. Margot Weber', 'Autem dolorem quis et itaque et error. Magnam itaque quisquam nostrum quo. Fugit expedita natus rerum et aspernatur quae.', '2001-07-08', 'somepicture', NULL, NULL, NULL),
(51, 'Vicente Denesik', 'Fugit maxime fuga impedit cupiditate error enim assumenda. Officiis aperiam aut laboriosam dolore saepe. Eum voluptate molestiae exercitationem rerum.', '2015-02-03', 'somepicture', NULL, NULL, NULL),
(52, 'Stanford Schuster DDS', 'Quas tempora ipsum labore et facere architecto minus. Iure aliquam molestiae ut voluptate.', '2013-04-19', 'somepicture', NULL, NULL, NULL),
(53, 'Athena Shields', 'Libero repudiandae quas molestiae voluptatibus quae eius. Dolorem consequatur in cumque ut. Vitae perspiciatis omnis ut temporibus vitae autem maiores sint.', '2012-04-25', 'somepicture', NULL, NULL, NULL),
(54, 'Eve Greenfelder MD', 'Vel minus neque et incidunt quisquam quo quis quis. Fugit saepe eaque veniam quae et. Perspiciatis nesciunt quia necessitatibus perferendis nisi. Voluptas doloremque dolores odit sit.', '1989-05-28', 'somepicture', NULL, NULL, NULL),
(55, 'Arvilla Bernier', 'Nesciunt quis quisquam iste eum. Vitae hic quisquam iste qui consequatur at quas eos. Eius laboriosam temporibus illum omnis.', '1973-01-03', 'somepicture', NULL, NULL, NULL),
(56, 'Ms. Kyra Purdy Sr.', 'Fuga autem adipisci esse ipsam saepe. Eveniet quod voluptas omnis quia eum quis. Voluptatem voluptas a dolor alias aut.', '2017-10-25', 'somepicture', NULL, NULL, NULL),
(57, 'Freda Heathcote', 'Ipsa rem minima consequatur dolores sint ut. Et nihil facilis delectus harum et. Rerum ut reprehenderit accusantium dolores.', '2015-06-16', 'somepicture', NULL, NULL, NULL),
(58, 'Walton Bahringer', 'Fuga ipsam non corporis dolor et consequatur aperiam tempore. Deleniti dignissimos autem delectus voluptatem omnis natus qui.', '2020-11-23', 'somepicture', NULL, NULL, NULL),
(59, 'Pat Kilback', 'Culpa sunt autem dolore quae vel eum minima. Suscipit est qui magni occaecati ad possimus possimus eum. Harum soluta labore ad consectetur. Neque voluptates et qui illo corporis animi quia tempore.', '1985-06-29', 'somepicture', NULL, NULL, NULL),
(60, 'Hunter Sporer', 'Perferendis omnis velit nisi error. Pariatur illum soluta quo dolorem.', '1998-06-07', 'somepicture', NULL, NULL, NULL),
(61, 'Paris Dickens', 'Temporibus cumque aut atque numquam quasi fuga provident. Facilis corrupti et aut facere explicabo. Qui quos consectetur dolorem quidem eveniet. In itaque nemo veniam repudiandae eveniet reiciendis.', '2004-09-05', 'somepicture', NULL, NULL, NULL),
(62, 'Loren Stanton', 'Iusto et illum adipisci et quas magni. Ut impedit labore iusto ea rerum perferendis deleniti. Sed quos culpa velit sed omnis sed explicabo. Temporibus est eum fugit itaque quo corrupti.', '1983-05-31', 'somepicture', NULL, NULL, NULL),
(63, 'Dulce Emard', 'Id beatae occaecati reprehenderit quibusdam laboriosam delectus. Non et non adipisci voluptatem assumenda aperiam asperiores amet. Enim dicta eaque nulla eos nam. Voluptas voluptas et maxime.', '1994-11-01', 'somepicture', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabang_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `name`, `description`, `cabang_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Henderson Ruecker', 'Ex quis exercitationem culpa rerum. Sunt nisi aperiam laborum eum. Itaque temporibus aliquam qui ea inventore sit in. Aut in ut qui autem animi quia officia.', 1, NULL, NULL, NULL, NULL),
(2, 'Prof. Cyril Kihn DVM', 'Sint beatae ut architecto hic voluptates. Vel suscipit magni reprehenderit et tenetur modi natus. Consequatur voluptatum qui dolor beatae unde. Sequi ipsam ut neque itaque nihil excepturi expedita.', 1, NULL, NULL, NULL, NULL),
(3, 'Zula Johnson IV', 'Consequatur magnam aut a. Asperiores delectus id hic porro et facilis. Autem itaque tempore impedit neque exercitationem. Autem sit omnis vel illum. Est consequatur a officiis dolorem quae.', 1, NULL, NULL, NULL, NULL),
(4, 'Verlie Vandervort', 'Aspernatur expedita quia dolores quia. Vero at id unde dolor voluptates ut. Quia quasi quam accusamus harum quia. Sit perferendis ratione perferendis aut reiciendis natus consectetur veritatis.', 1, NULL, NULL, NULL, NULL),
(5, 'Mrs. Meagan McCullough V', 'Ad quo ut repellendus illo laboriosam. Dolorum et fuga reprehenderit at dolore culpa optio. Ad aut sunt enim vel. Facere perferendis doloremque corporis eius atque blanditiis.', 1, NULL, NULL, NULL, NULL),
(6, 'Icie Flatley', 'Qui sint reprehenderit deleniti deserunt voluptatem. Modi asperiores dolor molestiae et non fugiat. Molestiae dolorum doloribus rem perspiciatis aut eum.', 2, NULL, NULL, NULL, NULL),
(7, 'Miss Germaine Schmeler', 'Ipsum aut eum nostrum dolores provident maiores. Facilis nihil dolor magni consequatur qui. Voluptatem aut sunt in unde temporibus. Aliquam natus libero voluptas impedit inventore officia porro.', 2, NULL, NULL, NULL, NULL),
(8, 'Josefa Schamberger', 'Aut qui nostrum aliquam voluptas commodi. Itaque quasi inventore adipisci quae. Quia inventore rerum fuga odit laboriosam modi porro.', 1, NULL, NULL, NULL, NULL),
(9, 'Prof. Sophie Reynolds', 'Natus culpa magnam officia sit laborum sit. Beatae quod assumenda cupiditate doloribus quae. Sint esse repellat expedita quidem ratione.', 2, NULL, NULL, NULL, NULL),
(10, 'Jettie Crooks', 'Odio repellat iste qui neque ratione quis harum a. Velit totam enim praesentium amet excepturi necessitatibus.', 2, NULL, NULL, NULL, NULL),
(11, 'Zita Kshlerin', 'Enim praesentium qui sed pariatur. Libero dicta possimus inventore deserunt harum. Ratione harum sequi qui est.', 1, NULL, NULL, NULL, NULL),
(12, 'Vidal Dibbert', 'Corporis autem libero voluptatem quo est porro qui. Inventore beatae in eos qui quo expedita. Eos voluptas sit consequatur autem omnis iure possimus. Cum sint sed repudiandae cum dolores.', 1, NULL, NULL, NULL, NULL),
(13, 'Mr. Gerhard Flatley', 'Eius qui nihil modi dicta quibusdam eaque. Laboriosam voluptatum nisi maiores architecto voluptas. Sed illum maiores rem tempore.', 2, NULL, NULL, NULL, NULL),
(14, 'Ladarius Corkery', 'Voluptatem placeat et quia sit distinctio ipsum sit. Recusandae eius voluptatibus ipsum in. Unde et dolorem et et.', 2, NULL, NULL, NULL, NULL),
(15, 'Dr. Lester Davis', 'Et eos odio omnis corporis eligendi. Quae natus esse magni velit vero nihil. Numquam in dignissimos ea ducimus omnis. Esse sunt dolorum officia quibusdam aliquam.', 1, NULL, NULL, NULL, NULL),
(16, 'Carrie Kshlerin', 'Eligendi cupiditate possimus quo laudantium quasi. Qui in quia sunt ipsa occaecati quod et. Vitae soluta est quasi. Aut aut aut impedit eos excepturi reiciendis voluptatem totam.', 2, NULL, NULL, NULL, NULL),
(17, 'Dr. Asia Corwin', 'Sit eos est voluptatem animi possimus laboriosam similique. Itaque ut nostrum et sapiente aliquam sapiente. Aliquid reiciendis sed animi ut ipsa excepturi qui. Ut perspiciatis nemo et a ut.', 1, NULL, NULL, NULL, NULL),
(18, 'Josh Lesch', 'Perferendis ratione optio excepturi a voluptas. Iusto quibusdam ex possimus illo sit aperiam. Soluta explicabo animi et fugiat ratione. Molestiae illo deserunt minus corporis.', 2, NULL, NULL, NULL, NULL),
(19, 'Aileen Bailey', 'Ducimus non praesentium animi adipisci omnis et. Ut iure consequatur fuga aut. Reiciendis assumenda necessitatibus eos est. Id vel voluptas est. Ut repellat est eligendi iure.', 1, NULL, NULL, NULL, NULL),
(20, 'Erwin Pfeffer', 'Perspiciatis quas non sit in aut. Velit quo amet autem similique vel. Architecto est eos explicabo suscipit eveniet. Fuga porro vel qui voluptate assumenda et.', 2, NULL, NULL, NULL, NULL),
(21, 'Rene Larson', 'Nihil vel esse eius sunt incidunt exercitationem. Expedita eos et libero dolorem sint eveniet voluptas. Libero corrupti at impedit praesentium.', 2, NULL, NULL, NULL, NULL),
(22, 'Bulah Pacocha V', 'Labore eum incidunt est asperiores nam amet asperiores. Vero inventore sit architecto explicabo ipsam expedita earum sed. Sed voluptas consectetur consequatur sequi rerum aut enim facilis.', 2, NULL, NULL, NULL, NULL),
(23, 'Cedrick Tromp', 'Voluptatem molestias odio nesciunt et pariatur. Atque voluptatem nesciunt molestias impedit est. Non fugiat suscipit corporis est nisi quia facilis quod.', 2, NULL, NULL, NULL, NULL),
(24, 'Rebekah Lakin', 'Voluptatum saepe et eos autem facilis dolorum. Dicta omnis iure et dolorem quis esse voluptas. Unde minus optio tempore est accusamus dicta. Accusamus ducimus error illum.', 2, NULL, NULL, NULL, NULL),
(25, 'Mr. Kameron Wisoky', 'Consequatur dolorem reprehenderit quis magni et est. Non aut ducimus ut excepturi iste vero autem. Cum excepturi reprehenderit sunt omnis.', 1, NULL, NULL, NULL, NULL),
(26, 'Marie Ankunding', 'Molestias maiores doloribus maxime qui rerum. Illo nesciunt ipsum id libero id. Dolore quasi aut delectus nisi voluptates sequi sunt deserunt. Reprehenderit maiores dolor quo sit neque quae minima.', 2, NULL, NULL, NULL, NULL),
(27, 'Dr. Kyra Paucek', 'Cum minima quis aut rerum quibusdam non. In expedita expedita dolor illum voluptatem cumque repudiandae. Doloribus quae commodi odit repellat omnis consequatur.', 1, NULL, NULL, NULL, NULL),
(28, 'Mrs. Linnea Boyle MD', 'Quia eligendi similique pariatur optio est dignissimos et et. Molestias fugiat quo molestiae nostrum occaecati neque illum. Maiores ratione perspiciatis dolore id.', 1, NULL, NULL, NULL, NULL),
(29, 'Mr. Tevin Renner', 'Expedita illo inventore nam modi facilis voluptatem nulla. Itaque inventore cum ea cumque pariatur recusandae modi nam. Eos natus maxime totam tempore. Harum optio quo quia dicta alias omnis.', 2, NULL, NULL, NULL, NULL),
(30, 'Lacy Gibson', 'Vitae vel sit eum quasi deserunt sit illo. Laborum et mollitia tenetur est sit dolore. Pariatur explicabo ab rerum explicabo. Laudantium neque recusandae tempora quia dolores facere.', 1, NULL, NULL, NULL, NULL),
(31, 'Nayeli Hartmann', 'Dolores qui sunt eaque rem. Delectus consequatur consequatur ducimus eligendi. Aut at quia aliquid accusamus. Corporis aliquam voluptatum qui consequuntur.', 2, NULL, NULL, NULL, NULL),
(32, 'Alanna Kuhic DVM', 'Delectus sit expedita voluptas sint harum. Veritatis qui ut voluptatem omnis. Ut quis id accusamus in recusandae aperiam sed. Amet deserunt magnam exercitationem suscipit voluptatem sed.', 2, NULL, NULL, NULL, NULL),
(33, 'Prof. Gertrude Krajcik Sr.', 'Omnis et blanditiis consequatur. Rerum repellat ab et rerum voluptatem minima. Aut corporis vitae iusto dolores. Quia porro quasi recusandae corporis consequatur accusamus.', 1, NULL, NULL, NULL, NULL),
(34, 'Prof. Nikolas Purdy', 'Eum sequi nemo ab sit eum. Eius asperiores est autem exercitationem et perspiciatis consequuntur. Non quo eveniet explicabo.', 1, NULL, NULL, NULL, NULL),
(35, 'Emmet Jerde', 'Error molestias sunt voluptatem sequi. Dolores aut accusantium minima voluptatem aliquam ratione. Ut quas molestias rerum alias doloremque inventore. Omnis ab cum ipsa atque explicabo magni.', 2, NULL, NULL, NULL, NULL),
(36, 'Joe Keeling', 'Facere id laboriosam necessitatibus quos sed assumenda non. Et vitae illo consequatur nemo. Beatae cum impedit quod dolore.', 2, NULL, NULL, NULL, NULL),
(37, 'Buck Windler', 'Praesentium ipsam perspiciatis non est nemo necessitatibus ea. Consectetur accusamus qui ea dicta. Quasi enim consequatur cumque aspernatur voluptates sapiente.', 1, NULL, NULL, NULL, NULL),
(38, 'Trent Wuckert', 'Molestiae nihil repellendus facere accusamus veritatis. Sed et dolorem deserunt. Eveniet corporis consequatur et sunt iste nesciunt. Beatae dolorum vel sit voluptate ratione recusandae corporis ea.', 1, NULL, NULL, NULL, NULL),
(39, 'Nellie Schiller', 'Dolores voluptas voluptatem odio distinctio eos ipsam veniam quidem. Maxime ullam dolore nostrum et. Soluta enim tempore temporibus nam error quia modi. Ut maiores enim beatae atque vel molestiae.', 2, NULL, NULL, NULL, NULL),
(40, 'Gretchen Hettinger DVM', 'Distinctio rerum aperiam nisi molestiae illum similique omnis. Dignissimos voluptas enim odio fuga cumque. Et rerum recusandae nam expedita iure ipsum voluptas dolorum.', 1, NULL, NULL, NULL, NULL),
(41, 'Dr. Avery Huel', 'Maxime nesciunt perferendis vitae non illo. Sint qui aspernatur labore in reprehenderit. Enim nesciunt soluta odio architecto odit libero. Porro adipisci voluptatem magni enim.', 2, NULL, NULL, NULL, NULL),
(42, 'Jazmyne Johnston', 'A in rerum in perferendis quo iure vel omnis. Ut illo aut aut incidunt iste et non eaque. Perferendis voluptatum nobis qui et tempore vel harum est.', 1, NULL, NULL, NULL, NULL),
(43, 'Prof. Freida Howell Jr.', 'Praesentium in nostrum amet aliquam in sed. Repudiandae repellat consequuntur placeat non incidunt. Aspernatur repellendus illum aut omnis.', 1, NULL, NULL, NULL, NULL),
(44, 'Jameson Becker', 'Commodi quas tenetur sit voluptatem dolores incidunt. Inventore repellat et illo quia quia. Possimus optio necessitatibus numquam fugit. Animi dicta totam enim temporibus et dolore alias.', 1, NULL, NULL, NULL, NULL),
(45, 'Savanna Fahey', 'Aliquid corporis enim animi rem ipsum in. Expedita quos labore quo nisi consectetur dolores fuga. Velit quis porro totam illum iusto voluptatem exercitationem.', 2, NULL, NULL, NULL, NULL),
(46, 'Katlynn Kuhic', 'Et commodi voluptatem possimus veritatis. Explicabo nihil impedit eum id voluptate. Nobis tenetur omnis recusandae quibusdam quidem. Eius rem perspiciatis autem voluptate error.', 2, NULL, NULL, NULL, NULL),
(47, 'Pattie Skiles', 'Quo quos nihil placeat dolor nisi maiores. Ratione id nostrum dolore distinctio. Consequatur aspernatur praesentium occaecati qui possimus quisquam voluptatem quo.', 1, NULL, NULL, NULL, NULL),
(48, 'Mr. Jeramie Erdman', 'Expedita est in quod aut. Quia itaque perspiciatis fugiat ad et.', 2, NULL, NULL, NULL, NULL),
(49, 'Jermaine West', 'Ipsum id occaecati neque nam non voluptate. Quis velit consequatur vitae alias assumenda placeat.', 2, NULL, NULL, NULL, NULL),
(50, 'Dr. Cecil Rogahn PhD', 'Vel blanditiis iusto quisquam sed et. Perferendis et ea rem. Eius voluptatem mollitia velit iusto.', 2, NULL, NULL, NULL, NULL),
(51, 'Mr. Santa Bayer Jr.', 'Vitae illum provident odio. Sint itaque voluptatum reprehenderit sed iste dolore. Eligendi in consequatur reiciendis sed voluptatem distinctio.', 1, NULL, NULL, NULL, NULL),
(52, 'Christy Bednar', 'Qui quidem ut illo fugiat. Quia dolorem consequatur libero sit omnis itaque. Voluptas animi veniam sunt dolores exercitationem beatae.', 2, NULL, NULL, NULL, NULL),
(53, 'Carlie Huel', 'Facere neque nam incidunt. Et molestias consequatur ut soluta et omnis animi. Est blanditiis enim inventore quo ad soluta.', 1, NULL, NULL, NULL, NULL),
(54, 'Vita Wunsch', 'At autem accusamus porro sit. Illum facilis dignissimos sint amet est incidunt veritatis. Iste hic maiores eum. Accusantium ullam assumenda incidunt vero quod. In omnis at asperiores.', 2, NULL, NULL, NULL, NULL),
(55, 'Mrs. Autumn Goldner Sr.', 'Illum omnis ut voluptates ad ex. Autem rerum soluta error hic quibusdam. Delectus aut quia id repellat voluptas nam non excepturi.', 2, NULL, NULL, NULL, NULL),
(56, 'Elena Howe MD', 'Quo veniam odit aspernatur. Incidunt quis et distinctio laudantium error. Velit eligendi quia consequatur in possimus unde labore qui.', 1, NULL, NULL, NULL, NULL),
(57, 'Mr. Jerry Lesch', 'Esse corporis eum sed voluptate deserunt. Maxime aut quo vero facilis id.', 1, NULL, NULL, NULL, NULL),
(58, 'Missouri Breitenberg', 'Et dolorem temporibus non iure. Suscipit ut incidunt aspernatur error. Occaecati voluptatem qui deleniti optio minus dolor.', 2, NULL, NULL, NULL, NULL),
(59, 'Verner Blick', 'Delectus ut molestiae maiores ad consequatur. Ut occaecati sit velit soluta neque deserunt. Architecto aut voluptatem eveniet. Aliquam et labore sed minus.', 2, NULL, NULL, NULL, NULL),
(60, 'Mr. Ottis Waelchi PhD', 'Nemo porro illo expedita soluta ut porro. Sed voluptatibus maiores qui aut et. Beatae placeat vel in cumque. Sit et tempore ab ad quidem. Tempora iusto quis voluptas consequatur harum.', 2, NULL, NULL, NULL, NULL),
(61, 'Yessenia Spencer', 'Quia repellendus occaecati eligendi ut ea. Debitis voluptates voluptatum fugit laboriosam sed ut doloremque. At aut ipsa vero laboriosam.', 1, NULL, NULL, NULL, NULL),
(62, 'Audrey Schowalter MD', 'Sed perferendis assumenda eius tempora nihil minima rerum. Est ut dolor nemo. Atque itaque aut eaque nostrum ea.', 2, NULL, NULL, NULL, NULL),
(63, 'Ashleigh Ebert I', 'Veritatis et accusamus deserunt modi est. Qui dolor et deleniti. Enim sed quibusdam modi vero architecto ut. Ad doloremque enim vel sit eius.', 2, NULL, NULL, NULL, NULL),
(64, 'Trystan Quitzon', 'Amet quis perferendis aliquid ut consequatur magnam. Nihil ipsum inventore maxime. Sunt consequatur enim minus sed enim ut quia. Animi eos velit ducimus illo.', 2, NULL, NULL, NULL, NULL),
(65, 'Prof. Javon Brekke I', 'Consequuntur consequatur similique natus. In ab aut itaque sint neque omnis. Fugiat provident dolore deserunt et perspiciatis laborum. Molestias omnis eos cumque autem laboriosam laudantium.', 2, NULL, NULL, NULL, NULL),
(66, 'Dr. Eliza Funk DDS', 'Dolores dolorem architecto adipisci minus quidem consectetur aspernatur. Dolore iure nisi harum quidem et similique voluptatum. Quidem est et amet sit labore. Nostrum explicabo magnam velit.', 2, NULL, NULL, NULL, NULL),
(67, 'Prof. Marjorie Murray', 'Sint accusamus aliquid corrupti alias asperiores veniam. Praesentium aut minus deleniti amet ut. Nihil consequatur similique voluptatem voluptates iusto sed ratione ullam.', 1, NULL, NULL, NULL, NULL),
(68, 'Dejon Kunze', 'Ipsa est quia magni ab. Recusandae sit provident optio aperiam officia aliquam. Quos perspiciatis eligendi autem impedit sed ipsa. Sed voluptate ut rerum est incidunt.', 2, NULL, NULL, NULL, NULL),
(69, 'Ryann Okuneva', 'Dolorem esse ipsa quibusdam labore odio in. Enim debitis officiis qui dolores labore. Dicta ea corrupti et doloribus.', 2, NULL, NULL, NULL, NULL),
(70, 'Prof. Chelsea Gleason', 'Voluptates nulla voluptatem repellendus cum doloribus laborum beatae. Officia nam incidunt rem aut voluptatem inventore aut. Accusantium quis ducimus expedita saepe unde error exercitationem.', 2, NULL, NULL, NULL, NULL),
(71, 'Demond Hirthe', 'Vitae quasi minima nulla dignissimos aliquid quis qui. Eaque saepe assumenda ipsa sunt non atque. Autem mollitia ut possimus exercitationem.', 2, NULL, NULL, NULL, NULL),
(72, 'Antone Olson', 'Quisquam animi iste fugiat nesciunt quia. Quos ex eos explicabo doloremque consequuntur adipisci. Quas occaecati qui dolor ea aliquam.', 2, NULL, NULL, NULL, NULL),
(73, 'Dr. Demarcus Weber', 'Vero autem aperiam reiciendis provident quidem in. Laboriosam nobis rerum modi error reiciendis. Quasi eligendi sed cupiditate et.', 1, NULL, NULL, NULL, NULL),
(74, 'Dr. Kristopher Ledner II', 'Temporibus id aliquid nesciunt sit laborum voluptatibus. Facilis perferendis et dolorem explicabo consequatur.', 1, NULL, NULL, NULL, NULL),
(75, 'Prof. Mariam Reichert', 'Nobis necessitatibus quam est soluta voluptatem qui earum. Libero asperiores debitis velit sapiente eius ut. Esse mollitia quia facilis dolor et asperiores ut dolor.', 2, NULL, NULL, NULL, NULL),
(76, 'Nola Volkman II', 'Nulla error earum commodi facilis consectetur quibusdam. Qui quis odio aut ipsam. Eos accusantium dolor quis. Vitae fugit sit ut ut eius tempore architecto. Ut magni sit ea quis.', 2, NULL, NULL, NULL, NULL),
(77, 'Christine Collins', 'Et voluptas sed natus exercitationem tenetur molestiae dicta. Facilis sunt ea voluptatem ducimus corporis. Qui est ut aliquid debitis. Aut eius qui ea aliquam quia adipisci.', 2, NULL, NULL, NULL, NULL),
(78, 'Mrs. Oleta Dare MD', 'Iste sint asperiores ipsa non possimus quis possimus deserunt. Atque omnis qui et voluptatum laborum et libero. Rem minima in qui ea sit velit.', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_27_073302_create_divitions_table', 1),
(5, '2020_10_27_073323_create_positions_table', 1),
(6, '2020_10_27_073330_create_cabangs_table', 1),
(7, '2020_10_27_073349_create_employees_table', 1),
(8, '2020_11_02_062042_create_infos_table', 1),
(9, '2020_11_03_024854_create_events_table', 1),
(10, '2020_11_12_150650_create_ore_table', 1),
(11, '2020_11_12_150756_create_obb_table', 1),
(12, '2020_11_12_150814_create_fuel_table', 1),
(13, '2020_11_24_095714_create_w_m_pictures_table', 1),
(14, '2020_11_24_141137_create_w_services_table', 1),
(15, '2020_12_02_110113_create_w_m_partners_table', 1),
(16, '2020_12_16_131936_create_w_m_menus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obb`
--

CREATE TABLE `obb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ore`
--

CREATE TABLE `ore` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `stock` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Direktur', NULL, NULL, NULL),
(2, 'Manager', NULL, NULL, NULL),
(3, 'supervisor', NULL, NULL, NULL),
(4, 'staff', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tes', 'tes@tes.com', NULL, '$2y$10$wli6bRlZUl.s9wMb3efh/.PoWCaaRIRdSeHyT.jPI9OjcgfWEAfXi', NULL, '2020-12-16 06:23:35', '2020-12-16 06:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `w_m_menus`
--

CREATE TABLE `w_m_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `w_m_menus`
--

INSERT INTO `w_m_menus` (`id`, `name`, `link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'DBM', 'backend_employee.index', NULL, '2020-12-16 07:02:10', '2020-12-16 07:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `w_m_partners`
--

CREATE TABLE `w_m_partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `w_m_picture`
--

CREATE TABLE `w_m_picture` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `w_services`
--

CREATE TABLE `w_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `w_services`
--

INSERT INTO `w_services` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'drilling', NULL, NULL, NULL, NULL),
(2, 'mining', NULL, NULL, NULL, NULL),
(3, 'construction', NULL, NULL, NULL, NULL),
(4, 'shipping', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabangs`
--
ALTER TABLE `cabangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divitions`
--
ALTER TABLE `divitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_divition_id_foreign` (`divition_id`),
  ADD KEY `employees_position_id_foreign` (`position_id`),
  ADD KEY `employees_cabang_id_foreign` (`cabang_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `infos_cabang_id_foreign` (`cabang_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obb`
--
ALTER TABLE `obb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ore`
--
ALTER TABLE `ore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `w_m_menus`
--
ALTER TABLE `w_m_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_m_partners`
--
ALTER TABLE `w_m_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_m_picture`
--
ALTER TABLE `w_m_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w_services`
--
ALTER TABLE `w_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabangs`
--
ALTER TABLE `cabangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `divitions`
--
ALTER TABLE `divitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `obb`
--
ALTER TABLE `obb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ore`
--
ALTER TABLE `ore`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `w_m_menus`
--
ALTER TABLE `w_m_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `w_m_partners`
--
ALTER TABLE `w_m_partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `w_m_picture`
--
ALTER TABLE `w_m_picture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `w_services`
--
ALTER TABLE `w_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_cabang_id_foreign` FOREIGN KEY (`cabang_id`) REFERENCES `cabangs` (`id`),
  ADD CONSTRAINT `employees_divition_id_foreign` FOREIGN KEY (`divition_id`) REFERENCES `divitions` (`id`),
  ADD CONSTRAINT `employees_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `infos_cabang_id_foreign` FOREIGN KEY (`cabang_id`) REFERENCES `cabangs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
