-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 28 Nov 2018 pada 14.20
-- Versi Server: 5.7.24-0ubuntu0.18.10.1
-- PHP Version: 7.1.24-1+ubuntu18.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberlab_idforum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `channels`
--

INSERT INTO `channels` (`id`, `slug`, `title`, `created_at`, `updated_at`) VALUES
(1, 'eos-voluptate', 'Ullam dolor quo.', '2018-11-28 00:14:51', '2018-11-28 00:14:51'),
(2, 'voluptates-sequi-et', 'Facere alias minus voluptatem aliquid.', '2018-11-28 00:14:51', '2018-11-28 00:14:51'),
(3, 'tempora-dignissimos-veritatis', 'Neque consectetur aut.', '2018-11-28 00:14:51', '2018-11-28 00:14:51'),
(4, 'nobis-voluptatem-est', 'Saepe est praesentium qui.', '2018-11-28 00:14:51', '2018-11-28 00:14:51'),
(5, 'quasi-libero', 'Nisi impedit et.', '2018-11-28 00:14:51', '2018-11-28 00:14:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussions`
--

CREATE TABLE `discussions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_solved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `discussions`
--

INSERT INTO `discussions` (`id`, `user_id`, `channel_id`, `slug`, `title`, `content`, `is_solved`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'qui-amet-ducimus-aspernatur-est-deleniti', 'Reiciendis harum eos qui.', 'Quia labore tenetur exercitationem quis ut sit consequatur. Minima maxime labore eligendi dolorem dolores doloribus. Voluptatum incidunt amet voluptas quam. Aperiam aspernatur dignissimos sit sit nostrum reiciendis. Qui consequatur molestias temporibus porro. Provident quam asperiores ab quae et.', 1, '2018-11-28 00:14:51', '2018-11-28 00:14:51'),
(2, 2, 2, 'velit-itaque-necessitatibus-similique', 'Eos voluptas illo magni.', 'Porro soluta itaque earum quo dolorem et ullam. Voluptatum ut et accusamus placeat. Fugit eligendi expedita incidunt iure enim error. Sequi sit non et at odio. Perspiciatis debitis doloremque totam distinctio. Repellat ratione quaerat doloremque perferendis.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(3, 2, 2, 'blanditiis-accusantium-perferendis', 'Sit inventore tenetur dolore repellat quia.', 'Reprehenderit libero dicta incidunt exercitationem. Cumque unde quae sint odit. Labore fuga dolore incidunt. Dolores enim consequatur placeat et itaque asperiores.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(4, 3, 4, 'odio-nesciunt-quas-facere-perferendis-temporibus', 'Reiciendis atque dolor et ipsum fugit officia.', 'Corrupti in ut temporibus et eum cupiditate. Dolorem est rerum necessitatibus cumque dicta hic. Exercitationem dolores animi omnis qui unde. Quo odit magni inventore iusto repellendus laborum. Ea sed blanditiis soluta rem odio sed aliquam. Nobis quasi officia voluptatem exercitationem ipsa quis. Ea qui est aliquid aut molestiae officia.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(5, 2, 4, 'et-quo-nesciunt-quidem-aut-minus', 'Eaque est molestiae et.', 'Commodi impedit officiis velit necessitatibus saepe quidem iure temporibus. Quod iusto sequi quia sint tempora sed modi quod. Et minus qui quasi. Voluptas ut cum iusto animi. Ut vero facilis tempora optio quaerat recusandae.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(6, 3, 4, 'quos-error-optio-et', 'Itaque consequatur non harum laborum ea.', 'Qui dignissimos dolorem voluptatem iste. Dolores voluptas quia perspiciatis qui at provident. Repellat dicta alias rerum quis praesentium aut. Enim accusamus velit ea et ut totam.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(7, 2, 5, 'provident-a-accusantium-dolorem-omnis', 'Ipsum dolorem aperiam id aspernatur in ipsa.', 'Ut explicabo aliquid vel debitis sapiente. Nulla atque et recusandae aliquam laudantium aut enim. Magnam rerum minima sunt sit. Hic possimus iste id totam et voluptatem voluptate. Voluptatum voluptatem delectus animi quibusdam corporis distinctio.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(8, 2, 1, 'quod-delectus-alias-dicta-quam-delectus', 'Voluptate ullam ut labore.', 'Id quaerat est voluptas quisquam molestiae. Quia dicta nulla sunt autem veniam adipisci. Nemo est in facere quia deserunt laboriosam. Est molestiae dolorem ut enim rerum enim aut. Veniam qui esse illo rerum dolorem. Laudantium quia sunt sequi aperiam consequatur. Laudantium sit modi consequatur consequatur reprehenderit omnis.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(9, 2, 1, 'mollitia-est-placeat-dolorum', 'Sunt labore est nemo molestiae aliquam aliquam.', 'Error aspernatur nihil et quis reprehenderit hic reprehenderit vel. Ex quo quia sapiente vel. Enim quod ut rerum reprehenderit mollitia esse. Nobis optio est quo qui rem est maiores. Nihil ut eveniet dolor dolorem nisi veniam.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(10, 3, 5, 'quidem-earum-repellat-recusandae', 'Odit voluptatem quasi cum veritatis perspiciatis.', 'Vitae molestias voluptatibus nam nulla. Nulla cupiditate accusamus eveniet. Delectus est ut accusantium. Autem sit maiores modi similique. Unde ullam dolores suscipit blanditiis quisquam ut mollitia. Corrupti inventore blanditiis aut maiores. Quas vel maxime repudiandae veritatis cumque.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(11, 3, 4, 'enim-quae-velit-accusamus', 'Qui incidunt qui doloribus.', 'Non accusamus quasi porro consequatur. Porro quis cum sunt deserunt adipisci ipsam. Aliquam ut aspernatur dolores dolore voluptatum recusandae. Autem ducimus sit impedit quod laudantium omnis illum. Sit consequatur id dolor et. Sit non omnis ipsam. Quo a voluptas in fugit saepe consequatur tempore aut.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(12, 2, 2, 'qui-provident-fugit-tenetur-provident', 'Ut quibusdam qui ullam.', 'Quasi ea explicabo laboriosam molestiae. Iusto rerum eos ullam minima totam ea similique. Necessitatibus totam quis doloremque rem et. Aliquid facilis qui quia beatae eligendi aut harum voluptatem. Incidunt nesciunt doloremque expedita facere qui repellendus dolores. Deleniti animi et eum est et numquam. Numquam vero harum voluptatem quos.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(13, 3, 3, 'quaerat-porro-unde-rerum-voluptatem-ut', 'Maxime sit explicabo nulla excepturi.', 'Numquam voluptatibus ex qui magni corporis ut. Sapiente nihil maxime eaque. Consequuntur impedit molestiae nam maiores. Est repudiandae illo ut veniam in quae officiis.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(14, 2, 4, 'at-ullam-necessitatibus-et-ullam', 'Ratione vel aperiam aut ipsum ut quibusdam.', 'Quia eos ut vel magni. Facilis est aut placeat eius. Sunt magnam quo perspiciatis modi. Magni ratione earum aperiam. Quia esse distinctio omnis ad et sunt magni. Doloribus accusamus est hic enim. Consequatur non culpa veniam non aperiam.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(15, 3, 3, 'enim-quaerat-nam-magni-voluptatem', 'Fugit qui placeat doloremque rem.', 'Velit laboriosam quam suscipit. Consequatur non quaerat ipsa temporibus eius. Nesciunt sed consequatur adipisci corrupti quia. Omnis dicta vero nihil doloremque. Vero laborum omnis commodi qui est sit.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(16, 2, 3, 'dolore-consequuntur-pariatur-aut-rerum-ratione', 'Accusantium officiis ipsa aut illum.', 'Sunt sint nulla et et. Eum exercitationem temporibus sit quia aut unde. Vel cumque ab veritatis vel doloremque nostrum nulla. Placeat voluptas harum cumque. Ut quia quia rerum iusto et nulla earum. Optio maiores illum nesciunt molestiae dolor. Fuga et qui voluptas molestiae aut recusandae a voluptate.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(17, 3, 2, 'suscipit-voluptatem-molestiae-labore', 'Ipsa atque possimus qui cupiditate.', 'Qui neque aperiam laborum quisquam quisquam illum. Eum omnis esse sit odit natus non ut. Voluptatem architecto aliquid laborum iste voluptatibus. Non numquam ipsum nesciunt aut doloremque necessitatibus. Quo fugit dolorum consequuntur aliquid voluptatem.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(18, 2, 4, 'maiores-et-molestiae-cum-minima', 'Labore non repellat laborum.', 'Nulla velit recusandae et ratione rerum aliquam. Accusamus voluptatem quidem suscipit libero nihil vitae eum. Deserunt ea eaque odio dolor ex. Corrupti quia placeat aut tenetur autem. Impedit eligendi optio sapiente dicta maiores voluptatem. Rerum facere aut quis repudiandae dolor. Ea deleniti rem laudantium. Similique ad nihil sequi at velit eos incidunt.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(19, 3, 3, 'tenetur-maxime-incidunt-et', 'Nesciunt quis commodi sunt suscipit rerum est cupiditate.', 'Minus necessitatibus dolores consequuntur aliquid voluptatem ut dolorem dolorum. Temporibus quia ad fugiat maiores quaerat debitis eligendi. Aut dolor qui enim omnis doloribus qui et. Ratione laudantium rem ut necessitatibus molestiae. Illo et est ullam similique sapiente exercitationem officia. Amet temporibus tenetur voluptas.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(20, 2, 2, 'architecto-ut-eum-esse-delectus', 'Delectus aut consequatur sunt excepturi fugiat sit.', 'Quasi vel laborum nesciunt. Commodi soluta a sunt vitae assumenda. Ut eum ducimus dolor enim non nulla. Hic voluptatem autem commodi tempore architecto. Possimus rem quisquam numquam debitis. Consequatur est facilis officiis occaecati.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_28_035612_create_channels_table', 1),
(4, '2018_11_28_035621_create_discussions_table', 1),
(5, '2018_11_28_035631_create_replies_table', 1),
(6, '2018_11_28_035847_create_votes_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_answered` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `discussion_id`, `content`, `is_answered`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Id et quasi qui sit recusandae eveniet voluptatem. Voluptatem aliquam officiis quibusdam in non debitis. Quia quod sit optio voluptatem blanditiis. Repellat voluptatem id provident sunt maiores impedit. Ut voluptatibus repellendus architecto sed vero fuga quod iure. Esse voluptatum non quis sint.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(2, 3, 5, 'Impedit alias magni minus rerum. Aut quo cumque et repellat ex neque. Asperiores totam voluptatem aspernatur sit rerum veniam fuga sed. Minus sit dolor ut atque. Incidunt consequuntur amet asperiores optio. Asperiores et voluptatem est velit. Et sequi id sit assumenda non et repellat quae.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(3, 3, 6, 'Voluptatem alias aut sunt. Earum laborum occaecati culpa voluptate corrupti perspiciatis. Et praesentium nam eaque possimus fuga. Vel asperiores numquam adipisci sed sit. Consequuntur repellendus sit quis quae ea et. Quo quod eos ut. Odit aut culpa dolores quod deserunt labore eligendi animi.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(4, 2, 13, 'Voluptatibus aut excepturi recusandae vel. Voluptas sit reiciendis quia. Sit consectetur architecto praesentium dolorum inventore. Voluptatem quidem maiores consectetur ut vitae. Ut repellat velit velit voluptas consequatur omnis. Itaque sint eum consequatur et.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(5, 3, 3, 'Dolorem delectus voluptas consequatur nemo non eveniet doloremque. Maxime ad molestiae enim occaecati est eos dolor. Sit praesentium cumque corporis ut ut est. Deleniti perferendis consequatur nemo.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(6, 3, 12, 'Aliquid vel sequi nulla ullam est blanditiis. Eaque doloribus nulla illo perferendis quisquam. Alias expedita dolor aut quis iusto. Illum mollitia rerum non. Voluptatum et maxime voluptatem voluptatem hic vel non. Vero fugit ea ea cupiditate accusantium veritatis rerum. Vitae voluptas consequatur eius adipisci minima culpa.', 0, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(7, 2, 4, 'Voluptatem unde sapiente modi voluptatum consectetur unde. Ipsa odit iste expedita doloremque. Saepe nesciunt corrupti doloremque veniam mollitia qui. Unde sunt veniam ab.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(8, 1, 6, 'Consequatur deserunt esse expedita est. Aspernatur excepturi corporis occaecati est magnam odio minima. Minus qui quod in voluptatum ut. Sed commodi quia labore ad dolorem maiores commodi. Quae a deserunt ducimus deleniti et quis.', 1, '2018-11-28 00:14:52', '2018-11-28 00:14:52'),
(9, 1, 15, 'Et voluptas eum qui quam nemo harum sint. Aliquam et dolor nobis est ipsa. Corrupti et quia adipisci consequatur quia nihil. Ad et iusto vel laborum. Atque occaecati omnis a earum et. Sint beatae itaque dolor dolorem.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(10, 3, 13, 'Incidunt placeat pariatur eos similique quaerat autem. Magni est architecto sint et eos qui deserunt. Tenetur sapiente tempora corrupti ut ut deserunt consequuntur. Amet est repellat qui numquam similique consequuntur cupiditate. Nisi ducimus est dolores odit. Quis facere aut omnis aspernatur voluptatem. Et perferendis quis nostrum porro fugit non.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(11, 3, 7, 'Iste quia eum ea ex. Assumenda consequatur sit labore asperiores dolorem aliquam rerum id. Nihil dolorum aperiam repellat. Qui eveniet est consectetur iste odio doloribus recusandae. Doloribus aut qui accusantium sed. Qui beatae molestiae laudantium dolor.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(12, 3, 9, 'Repudiandae doloremque libero accusantium eligendi architecto libero. Ipsa tempore aspernatur molestiae sed ipsa commodi aperiam. Et eos laboriosam consectetur incidunt qui ipsum porro qui. Consequatur praesentium exercitationem libero ipsam non labore. Omnis sapiente hic eum cupiditate.', 1, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(13, 1, 7, 'Necessitatibus a aut harum ad ea aspernatur. Aut et modi laudantium est non autem vero itaque. At eius soluta nihil provident et. Nihil eum est voluptatem error consequatur aliquid. Veniam commodi et sequi veritatis veritatis provident et.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(14, 1, 5, 'Impedit suscipit non et ipsa. Quasi enim autem autem sed. Debitis aliquid odit aut ut consequatur quasi autem. Quos fugiat voluptate iste ea culpa autem. Ducimus doloribus enim ut aut veritatis iusto sint sequi.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(15, 1, 3, 'Tenetur cupiditate et nemo eum. Fugiat mollitia voluptas sunt. Facere iste accusamus minima ducimus quo occaecati aliquid. Nesciunt praesentium et quis.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(16, 3, 3, 'Neque optio expedita vero magnam. Est aspernatur ex officiis doloremque aut ea modi voluptatem. Voluptatum voluptas sunt et sit. Nesciunt sit deserunt modi harum quod expedita perspiciatis reprehenderit. Id dicta at non exercitationem vel cupiditate est.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(17, 2, 6, 'Nulla odit eveniet aut sit fuga. Hic itaque impedit illum ducimus ut debitis sed. Veritatis dolore et sint numquam sed est. Expedita vel autem et dolores. Ab magni quos magni culpa repellendus aut quis delectus. Voluptate magni veniam eum.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(18, 3, 12, 'Reprehenderit sed fuga necessitatibus tempore quibusdam et. Officia repellendus voluptatibus recusandae ut. Illo amet assumenda nobis libero. Ut necessitatibus consequatur voluptas omnis. Beatae quia in sit enim tempore sunt facere similique.', 1, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(19, 2, 7, 'Quia enim quasi ut facere veritatis. Nemo maiores excepturi dolor id autem neque odit. Quas quidem qui rerum nihil fugiat neque. Tenetur voluptas ea aspernatur fuga error. Animi reiciendis vel deserunt alias optio rerum. Maiores consequuntur et et modi quas sequi.', 1, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(20, 3, 2, 'Nulla iusto doloremque dicta aperiam numquam ut dolores. Sunt molestiae dolorum saepe nisi quibusdam distinctio in. Rerum est et corrupti. Ut voluptatum praesentium porro quam quae non. Nisi tempora vel officiis delectus. Alias est minus sapiente error autem eveniet rerum.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(21, 1, 10, 'Aut voluptatibus voluptatem iure qui hic accusamus et. Reprehenderit unde quia et incidunt ab fugiat amet. Enim optio dolor ut sunt facere voluptatum corrupti culpa. Iure eum consequuntur soluta quibusdam possimus labore occaecati. Praesentium non hic ipsum aut sed voluptatum repellat voluptate.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(22, 2, 5, 'Autem aliquid voluptatum quisquam commodi eum neque ut. Qui illum rerum nulla. Dolores error esse alias corrupti. Maiores aliquam ut architecto quasi in dignissimos sint nulla. Vel non dolor quos perferendis quos. Perspiciatis eaque sit blanditiis accusamus dolor totam corporis. Suscipit quia officiis reprehenderit ut delectus.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(23, 1, 10, 'Totam vel et harum omnis. Consectetur labore aut consequuntur asperiores qui aliquam. In similique vel nemo accusamus nemo. Temporibus sapiente magni ut repudiandae unde fugiat. Aut autem quaerat quos excepturi necessitatibus. Dolor est molestias aspernatur molestiae nesciunt. Exercitationem ut quisquam temporibus in similique. Vel ea dolorum explicabo hic.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(24, 2, 7, 'Magnam quos vel explicabo blanditiis. Dicta et laudantium ut repudiandae saepe. Nulla ipsam accusamus recusandae cum harum. Occaecati et corrupti minima ullam. Minus provident sit dolores ullam et molestiae rerum. Vel laboriosam doloribus rerum non provident.', 0, '2018-11-28 00:14:53', '2018-11-28 00:14:53'),
(25, 3, 14, 'Est suscipit in quos ducimus ut odit aut. Ea dolor sit labore autem et. Voluptatum est dolorem dicta aspernatur blanditiis qui. Corrupti ullam excepturi molestias et. Est modi quos qui ipsam ullam unde accusamus. Repellendus quis nisi itaque corrupti. Nam placeat voluptatem illo nulla dicta voluptate.', 1, '2018-11-28 00:14:53', '2018-11-28 00:14:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', 'admin', '2018-11-28 00:14:51', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 1, '8UlmxBO3Oq', '2018-11-28 00:14:51', '2018-11-28 00:14:51'),
(2, 'Devon Schultz', 'santos.bogisich@example.net', 'violette82', '2018-11-28 00:14:51', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'DJOwpwacBB', '2018-11-28 00:14:51', '2018-11-28 00:14:51'),
(3, 'Letitia Grimes', 'stokes.ramiro@example.com', 'nathan21', '2018-11-28 00:14:51', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 0, 'otcDLeWq11', '2018-11-28 00:14:51', '2018-11-28 00:14:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `votes`
--

CREATE TABLE `votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `voteable_id` int(10) UNSIGNED NOT NULL,
  `voteable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channels_slug_unique` (`slug`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discussions_slug_unique` (`slug`),
  ADD KEY `discussions_user_id_foreign` (`user_id`),
  ADD KEY `discussions_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_user_id_foreign` (`user_id`),
  ADD KEY `replies_discussion_id_foreign` (`discussion_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`),
  ADD CONSTRAINT `discussions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_discussion_id_foreign` FOREIGN KEY (`discussion_id`) REFERENCES `discussions` (`id`),
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
