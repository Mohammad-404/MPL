-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 06:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohammad', 'm.almasri97.me@gmail.com', '$2y$10$X90C7fsZhLzHnDdX.JVE5OrOjJ9WWAuFnr95odFhXHMV7mj0Yt1lO', '0Iuq0ghfNXxXjxM5hoLm7d0KZp6SMP3GXRnF4h2r1ogDyjyblqq33Gu5qmHg', '2024-05-01 09:03:25', '2024-05-01 09:03:25');

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abbr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` enum('ltr','rtl') COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `abbr`, `locale`, `name`, `direction`, `active`, `created_at`, `updated_at`) VALUES
(2, 'ar', NULL, 'arabic', 'rtl', 1, '2024-04-28 05:25:41', '2024-04-28 05:25:41'),
(3, 'en', NULL, 'english', 'ltr', 1, '2024-04-28 05:25:52', '2024-04-28 05:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `lives`
--

CREATE TABLE `lives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `translation_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lives`
--

INSERT INTO `lives` (`id`, `translation_lang`, `translation_of`, `team_id`, `team_id2`, `desc`, `youtube`, `created_at`, `updated_at`) VALUES
(3, 'en', '0', '8', '8', 'you can watch the match direct', 'two_VlLwaNQ', NULL, NULL),
(4, 'ar', '3', '9', '11', 'تجدون الان البث المباشر للمباراة', 'two_VlLwaNQ', NULL, NULL);

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2024_04_27_091947_languages', 1),
(17, '2024_04_27_094113_slider', 2),
(18, '2024_04_30_092714_news', 3),
(19, '2024_04_30_095605_teams', 4),
(20, '2024_04_30_115144_live', 5),
(21, '2024_04_30_132712_schedule', 6),
(22, '2024_05_01_113628_admin', 7);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `translation_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `translation_lang`, `translation_of`, `sub_title`, `title`, `desc`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'en', '0', 'Echo Philippines snatches the MPL PH championship crown from Blacklist International with a sweep', 'The Grand Finals of MPL PH is a rematch of last season’s Grand Finals matchup where ECHO Philippines', 'once again, face-off against Blacklist International who are the current reigning MPL PH champions. Last time both teams met on the MPL PH Grand Finals stage, Blacklist were able to reign over Echo to take the crown but during the M4 Championships that took place earlier this year, Echo were able to take revenge as they brought down Blacklist to become the newest world champions. Now they face off once again for the championships. Will Blacklist be able to successfully protect the crown? Or will Echo finally be able to best Blacklist in a MPL PH Grand finals to become the new champions?', '/sliders/Y8t4Qlkca84omB4IJsfiQGQm31ISHyGpjxI3m7n5.jpg', NULL, NULL),
(4, 'ar', '3', 'صدى الفلبين ينتزع تاج بطولة MPL PH من Blacklist International باكتساح', 'تعد النهائيات الكبرى لـ MPL PH بمثابة إعادة مباراة لمباراة النهائيات الكبرى للموسم الماضي حيث نظمتها ECHO Philippines', 'مرة أخرى، واجه Blacklist International الذين هم أبطال MPL PH الحاليين. في المرة الأخيرة التي التقى فيها الفريقان على مسرح نهائيات MPL PH الكبرى، تمكن Blacklist من السيطرة على Echo ليحصل على التاج ولكن خلال بطولة M4 التي أقيمت في وقت سابق من هذا العام، تمكن Echo من الانتقام عندما أسقط Blacklist ليصبح البطل. أحدث أبطال العالم. الآن يتواجهون مرة أخرى على البطولة. هل ستكون القائمة السوداء قادرة على حماية التاج بنجاح؟ أم هل سيتمكن Echo أخيرًا من الوصول إلى أفضل قائمة سوداء في نهائيات MPL PH Grand ليصبح الأبطال الجدد؟', '/sliders/Y8t4Qlkca84omB4IJsfiQGQm31ISHyGpjxI3m7n5.jpg', NULL, NULL),
(5, 'en', '0', 'RSG defended their MSC Dream as they Reverse swept the Current World Champions', 'RSG\'s MSC dream lives on as they go up against the reigning', 'RSG\'s MSC dream lives on as they go up against the reigning World Champions, following their sweep against Onic Philippines yesterday. While both teams had a close match during the regular season, all eyes are now on the showdown between Irrad and Karltzy. Can Irrad outshine the MLBB Philippines\' greatest of all time in the jungle or will Karltzy\'s recent finger injury impede his performance in the playoffs?  The first game\'s draft followed a typical pattern with the first three bans and picks. Echo obtained Arlott, Franco, and Valentina, while RSG had Fredrinn, Joy, and Beatrix. However, the second phase saw some interesting picks. Echo selected Kagura as the mid-laner and Minsitthar for the gold lane, completing their double fighter lineup, while RSG finalized their draft with Khufra and Gloo. Echo\'s draft was experimental, as they went against RSG\'s classic and comfortable lineup.', '/sliders/aWM5bA1OxeOgCjZBkSYUU225PxRIHdRJVT4xxB5B.jpg', NULL, NULL),
(6, 'ar', '5', 'دافعت RSG عن حلم MSC عندما اكتسحوا أبطال العالم الحاليين', 'يستمر حلم RSG\'s MSC في مواجهة الحكم', 'يستمر حلم فريق RSG MSC في مواصلة مواجهته لأبطال العالم، بعد اكتساحه أمام فريق أونيك الفلبيني أمس. وبينما كانت مباراة الفريقين متقاربة خلال الموسم العادي، تتجه الأنظار الآن إلى المواجهة بين إيراد وكارلتزي. هل يستطيع إيراد أن يتفوق على أعظم لاعبي MLBB الفلبينيين على الإطلاق في الغابة أم أن إصابة كارلتزي الأخيرة في إصبعه ستعيق أدائه في التصفيات؟ اتبعت مسودة اللعبة الأولى نمطًا نموذجيًا مع عمليات الحظر والاختيارات الثلاثة الأولى. حصل Echo على Arlott وFranco وValentina، بينما حصل RSG على Fredrinn وJoy وBeatrix. ومع ذلك، شهدت المرحلة الثانية بعض الاختيارات المثيرة للاهتمام. اختار Echo Kagura ليكون في المنتصف وMinsitthar للممر الذهبي، ليكملا تشكيلة المقاتلتين المزدوجتين، بينما أنهت RSG مسودتها مع خوفرا وجلو. كانت مسودة Echo تجريبية، حيث تعارضت مع تشكيلة RSG الكلاسيكية والمريحة.', '/sliders/aWM5bA1OxeOgCjZBkSYUU225PxRIHdRJVT4xxB5B.jpg', NULL, NULL);

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
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Team_id_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Team_id_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_match` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `Team_id_1`, `Team_id_2`, `date_match`, `time`, `created_at`, `updated_at`) VALUES
(2, '8', '10', '2024-05-16', '09:43', '2024-05-01 14:41:27', '2024-05-01 14:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `translation_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `translation_lang`, `translation_of`, `slug`, `title`, `desc`, `photo`, `created_at`, `updated_at`) VALUES
(43, 'en', '0', NULL, 'Cool new MLBB anime skins for Wanwan, Ling, and Yin teased in 515 M-World', 'The quality of Mobile Legends: Bang Bang skins has been improving over the years, and it’s no surprise that Moonton is going all out for its upcoming 515 anniversary.  The mobile game developer teased three new MLBB anime skins for Wanwan, Ling, and Yin in its new M-World trailer that adopts a sci-fi futuristic theme.  These anime-inspired skins are the second release after “The Aspirants” were released in January, which featured Miss Hikari Layla and Blade of Kibou Fanny, voiced by veteran Japanese voice actresses Yoshino Nanjo and Nana Mizuki respectively.', '/sliders/kIs4IdF7o6aE7NR83JaPRkcDoUC0bxAG3UptG35d.png', NULL, NULL),
(44, 'ar', '43', NULL, 'أزياء أنيمي MLBB الجديدة الرائعة لـ Wanwan وLing وYin التي تم عرضها في 515 M-World', 'لقد تحسنت جودة أغلفة Mobile Legends: Bang Bang على مر السنين، وليس من المستغرب أن تبذل Moonton قصارى جهدها للاحتفال بالذكرى السنوية الـ 515 القادمة لتأسيسها. قام مطور ألعاب الهاتف المحمول بالتشويق لثلاثة أشكال جديدة لأنيمي MLBB لـ Wanwan وLing وYin في عرض M-World الجديد الذي يتبنى موضوعًا مستقبليًا للخيال العلمي. هذه الأشكال المستوحاة من الرسوم المتحركة هي الإصدار الثاني بعد إصدار فيلم \"The Aspirants\" في يناير، والذي ظهر فيه الآنسة هيكاري ليلى وBlade of Kibou Fanny، اللتان عبرت عنهما ممثلتا الصوت اليابانيتان المخضرمتان يوشينو نانجو ونانا ميزوكي على التوالي.', '/sliders/kIs4IdF7o6aE7NR83JaPRkcDoUC0bxAG3UptG35d.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `translation_lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `members` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `translation_lang`, `translation_of`, `team_name`, `members`, `logo`, `photo`, `created_at`, `updated_at`) VALUES
(8, 'en', '0', 'OMG', 'Billy “Z4pnu” Alfonso  Kiel VJ “Kielvj” Hernandez  Renz “Renzio” Cadua  Patrick “E2MAX” Caidic  Joshua “Ch4knu” Mangilog  Duane “Kelra” Pillas  Dian “Dian” Cruz  Romeir “Allidap” Padilla  Dean “Raizen” Sumagui  Robert “Hito” Candoy', '/sliders/sQzKtsocLvqdQmAtyKi6ud13mc2R1K850TJXTjJ9.png', '/sliders/abBOwWJQDBx0nS9VwJjrVG3Mkj45489TmxlvGElJ.png', NULL, NULL),
(9, 'ar', '8', 'أو أم جي', 'بيلي \"Z4pnu\" ألفونسو كيل VJ \"Kielvj\" هيرنانديز رينز \"Renzio\" Cadua Patrick \"E2MAX\" Caidic Joshua \"Ch4knu\" Mangilog Duane \"Kelra\" بيلاس ديان \"Dian\" كروز رومير \"Allidap\" Padilla Dean \"Raizen\" Sumagui Robert \"Hito\" كاندي', '/sliders/sQzKtsocLvqdQmAtyKi6ud13mc2R1K850TJXTjJ9.png', '/sliders/abBOwWJQDBx0nS9VwJjrVG3Mkj45489TmxlvGElJ.png', NULL, NULL),
(10, 'en', '0', 'AP BREN', 'Requitiano, Marco Stephen, Sayson, Michael Angelo', '/sliders/IV0E7G2sLXLWdIliZUPvQkgEfyATLheBq8J8V0KH.png', '/sliders/0GhthcrYORB8wNQbIFMK3zuEmAVqT4eEBqoDXhl3.png', NULL, NULL),
(11, 'ar', '10', 'أب برين', 'ريكيتيانو، ماركو ستيفن، سايسون، مايكل أنجيلو', '/sliders/IV0E7G2sLXLWdIliZUPvQkgEfyATLheBq8J8V0KH.png', '/sliders/0GhthcrYORB8wNQbIFMK3zuEmAVqT4eEBqoDXhl3.png', NULL, NULL);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lives`
--
ALTER TABLE `lives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lives`
--
ALTER TABLE `lives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
