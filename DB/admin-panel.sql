-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table admin-panel.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` blob,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `menu_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_category_slug_unique` (`category_slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin-panel.categories: ~8 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_description`, `status`, `menu_status`, `created_at`, `updated_at`) VALUES
	(1, 'Man', 'man', _binary 0x43617465676F727920666F72204D616E, 1, 1, '2020-03-30 19:04:33', '2020-03-30 19:04:33'),
	(2, 'Woman', 'woman', _binary 0x43617465676F727920666F7220576F6D616E73, 1, 1, '2020-03-30 19:04:47', '2020-03-30 19:04:47'),
	(3, 'Child', 'child', _binary 0x43617465676F727920666F72206368696C64, 1, 0, '2020-03-30 19:05:09', '2020-03-30 19:05:09'),
	(4, 'Recent', 'recent', _binary 0x726563656E742063617465676F7279, 1, 1, '2020-03-30 19:05:36', '2020-03-30 19:05:36'),
	(5, 'Young', 'young', _binary 0x596F756E672063617465676F7279, 1, 0, '2020-03-30 19:06:41', '2020-03-30 19:06:41'),
	(6, 'Electronics', 'electronics', _binary 0x456C656374726F6E6963732063617465676F7279, 1, 0, '2020-03-30 19:07:00', '2020-03-30 19:07:00'),
	(7, 'Multimedia', 'multimedia', _binary 0x43617465676F727920666F72206D756C74696D65646961, 1, 0, '2020-03-30 19:07:23', '2020-03-30 19:07:23'),
	(8, 'Accessories', 'accessories', _binary 0x63617465676F727920666F72206163636573736F72696573, 1, 0, '2020-03-30 19:07:59', '2020-03-30 19:07:59');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table admin-panel.countries
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin-panel.countries: ~249 rows (approximately)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `country_name`, `country_code`, `created_at`, `updated_at`) VALUES
	(1, 'Afghanistan', 'AF', NULL, NULL),
	(2, 'Åland Islands', 'AX', NULL, NULL),
	(3, 'Albania', 'AL', NULL, NULL),
	(4, 'Algeria', 'DZ', NULL, NULL),
	(5, 'American Samoa', 'AS', NULL, NULL),
	(6, 'Andorra', 'AD', NULL, NULL),
	(7, 'Angola', 'AO', NULL, NULL),
	(8, 'Anguilla', 'AI', NULL, NULL),
	(9, 'Antarctica', 'AQ', NULL, NULL),
	(10, 'Antigua and Barbuda', 'AG', NULL, NULL),
	(11, 'Argentina', 'AR', NULL, NULL),
	(12, 'Armenia', 'AM', NULL, NULL),
	(13, 'Aruba', 'AW', NULL, NULL),
	(14, 'Australia', 'AU', NULL, NULL),
	(15, 'Austria', 'AT', NULL, NULL),
	(16, 'Azerbaijan', 'AZ', NULL, NULL),
	(17, 'Bahamas', 'BS', NULL, NULL),
	(18, 'Bahrain', 'BH', NULL, NULL),
	(19, 'Bangladesh', 'BD', NULL, NULL),
	(20, 'Barbados', 'BB', NULL, NULL),
	(21, 'Belarus', 'BY', NULL, NULL),
	(22, 'Belgium', 'BE', NULL, NULL),
	(23, 'Belize', 'BZ', NULL, NULL),
	(24, 'Benin', 'BJ', NULL, NULL),
	(25, 'Bermuda', 'BM', NULL, NULL),
	(26, 'Bhutan', 'BT', NULL, NULL),
	(27, 'Bolivia, Plurinational State of', 'BO', NULL, NULL),
	(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', NULL, NULL),
	(29, 'Bosnia and Herzegovina', 'BA', NULL, NULL),
	(30, 'Botswana', 'BW', NULL, NULL),
	(31, 'Bouvet Island', 'BV', NULL, NULL),
	(32, 'Brazil', 'BR', NULL, NULL),
	(33, 'British Indian Ocean Territory', 'IO', NULL, NULL),
	(34, 'Brunei Darussalam', 'BN', NULL, NULL),
	(35, 'Bulgaria', 'BG', NULL, NULL),
	(36, 'Burkina Faso', 'BF', NULL, NULL),
	(37, 'Burundi', 'BI', NULL, NULL),
	(38, 'Cambodia', 'KH', NULL, NULL),
	(39, 'Cameroon', 'CM', NULL, NULL),
	(40, 'Canada', 'CA', NULL, NULL),
	(41, 'Cape Verde', 'CV', NULL, NULL),
	(42, 'Cayman Islands', 'KY', NULL, NULL),
	(43, 'Central African Republic', 'CF', NULL, NULL),
	(44, 'Chad', 'TD', NULL, NULL),
	(45, 'Chile', 'CL', NULL, NULL),
	(46, 'China', 'CN', NULL, NULL),
	(47, 'Christmas Island', 'CX', NULL, NULL),
	(48, 'Cocos (Keeling) Islands', 'CC', NULL, NULL),
	(49, 'Colombia', 'CO', NULL, NULL),
	(50, 'Comoros', 'KM', NULL, NULL),
	(51, 'Congo', 'CG', NULL, NULL),
	(52, 'Congo, the Democratic Republic of the', 'CD', NULL, NULL),
	(53, 'Cook Islands', 'CK', NULL, NULL),
	(54, 'Costa Rica', 'CR', NULL, NULL),
	(55, 'Côte d\'Ivoire', 'CI', NULL, NULL),
	(56, 'Croatia', 'HR', NULL, NULL),
	(57, 'Cuba', 'CU', NULL, NULL),
	(58, 'Curaçao', 'CW', NULL, NULL),
	(59, 'Cyprus', 'CY', NULL, NULL),
	(60, 'Czech Republic', 'CZ', NULL, NULL),
	(61, 'Denmark', 'DK', NULL, NULL),
	(62, 'Djibouti', 'DJ', NULL, NULL),
	(63, 'Dominica', 'DM', NULL, NULL),
	(64, 'Dominican Republic', 'DO', NULL, NULL),
	(65, 'Ecuador', 'EC', NULL, NULL),
	(66, 'Egypt', 'EG', NULL, NULL),
	(67, 'El Salvador', 'SV', NULL, NULL),
	(68, 'Equatorial Guinea', 'GQ', NULL, NULL),
	(69, 'Eritrea', 'ER', NULL, NULL),
	(70, 'Estonia', 'EE', NULL, NULL),
	(71, 'Ethiopia', 'ET', NULL, NULL),
	(72, 'Falkland Islands (Malvinas)', 'FK', NULL, NULL),
	(73, 'Faroe Islands', 'FO', NULL, NULL),
	(74, 'Fiji', 'FJ', NULL, NULL),
	(75, 'Finland', 'FI', NULL, NULL),
	(76, 'France', 'FR', NULL, NULL),
	(77, 'French Guiana', 'GF', NULL, NULL),
	(78, 'French Polynesia', 'PF', NULL, NULL),
	(79, 'French Southern Territories', 'TF', NULL, NULL),
	(80, 'Gabon', 'GA', NULL, NULL),
	(81, 'Gambia', 'GM', NULL, NULL),
	(82, 'Georgia', 'GE', NULL, NULL),
	(83, 'Germany', 'DE', NULL, NULL),
	(84, 'Ghana', 'GH', NULL, NULL),
	(85, 'Gibraltar', 'GI', NULL, NULL),
	(86, 'Greece', 'GR', NULL, NULL),
	(87, 'Greenland', 'GL', NULL, NULL),
	(88, 'Grenada', 'GD', NULL, NULL),
	(89, 'Guadeloupe', 'GP', NULL, NULL),
	(90, 'Guam', 'GU', NULL, NULL),
	(91, 'Guatemala', 'GT', NULL, NULL),
	(92, 'Guernsey', 'GG', NULL, NULL),
	(93, 'Guinea', 'GN', NULL, NULL),
	(94, 'Guinea-Bissau', 'GW', NULL, NULL),
	(95, 'Guyana', 'GY', NULL, NULL),
	(96, 'Haiti', 'HT', NULL, NULL),
	(97, 'Heard Island and McDonald Mcdonald Islands', 'HM', NULL, NULL),
	(98, 'Holy See (Vatican City State)', 'VA', NULL, NULL),
	(99, 'Honduras', 'HN', NULL, NULL),
	(100, 'Hong Kong', 'HK', NULL, NULL),
	(101, 'Hungary', 'HU', NULL, NULL),
	(102, 'Iceland', 'IS', NULL, NULL),
	(103, 'India', 'IN', NULL, NULL),
	(104, 'Indonesia', 'ID', NULL, NULL),
	(105, 'Iran, Islamic Republic of', 'IR', NULL, NULL),
	(106, 'Iraq', 'IQ', NULL, NULL),
	(107, 'Ireland', 'IE', NULL, NULL),
	(108, 'Isle of Man', 'IM', NULL, NULL),
	(109, 'Israel', 'IL', NULL, NULL),
	(110, 'Italy', 'IT', NULL, NULL),
	(111, 'Jamaica', 'JM', NULL, NULL),
	(112, 'Japan', 'JP', NULL, NULL),
	(113, 'Jersey', 'JE', NULL, NULL),
	(114, 'Jordan', 'JO', NULL, NULL),
	(115, 'Kazakhstan', 'KZ', NULL, NULL),
	(116, 'Kenya', 'KE', NULL, NULL),
	(117, 'Kiribati', 'KI', NULL, NULL),
	(118, 'Korea, Democratic People\'s Republic of', 'KP', NULL, NULL),
	(119, 'Korea, Republic of', 'KR', NULL, NULL),
	(120, 'Kuwait', 'KW', NULL, NULL),
	(121, 'Kyrgyzstan', 'KG', NULL, NULL),
	(122, 'Lao People\'s Democratic Republic', 'LA', NULL, NULL),
	(123, 'Latvia', 'LV', NULL, NULL),
	(124, 'Lebanon', 'LB', NULL, NULL),
	(125, 'Lesotho', 'LS', NULL, NULL),
	(126, 'Liberia', 'LR', NULL, NULL),
	(127, 'Libya', 'LY', NULL, NULL),
	(128, 'Liechtenstein', 'LI', NULL, NULL),
	(129, 'Lithuania', 'LT', NULL, NULL),
	(130, 'Luxembourg', 'LU', NULL, NULL),
	(131, 'Macao', 'MO', NULL, NULL),
	(132, 'Macedonia, the Former Yugoslav Republic of', 'MK', NULL, NULL),
	(133, 'Madagascar', 'MG', NULL, NULL),
	(134, 'Malawi', 'MW', NULL, NULL),
	(135, 'Malaysia', 'MY', NULL, NULL),
	(136, 'Maldives', 'MV', NULL, NULL),
	(137, 'Mali', 'ML', NULL, NULL),
	(138, 'Malta', 'MT', NULL, NULL),
	(139, 'Marshall Islands', 'MH', NULL, NULL),
	(140, 'Martinique', 'MQ', NULL, NULL),
	(141, 'Mauritania', 'MR', NULL, NULL),
	(142, 'Mauritius', 'MU', NULL, NULL),
	(143, 'Mayotte', 'YT', NULL, NULL),
	(144, 'Mexico', 'MX', NULL, NULL),
	(145, 'Micronesia, Federated States of', 'FM', NULL, NULL),
	(146, 'Moldova, Republic of', 'MD', NULL, NULL),
	(147, 'Monaco', 'MC', NULL, NULL),
	(148, 'Mongolia', 'MN', NULL, NULL),
	(149, 'Montenegro', 'ME', NULL, NULL),
	(150, 'Montserrat', 'MS', NULL, NULL),
	(151, 'Morocco', 'MA', NULL, NULL),
	(152, 'Mozambique', 'MZ', NULL, NULL),
	(153, 'Myanmar', 'MM', NULL, NULL),
	(154, 'Namibia', 'NA', NULL, NULL),
	(155, 'Nauru', 'NR', NULL, NULL),
	(156, 'Nepal', 'NP', NULL, NULL),
	(157, 'Netherlands', 'NL', NULL, NULL),
	(158, 'New Caledonia', 'NC', NULL, NULL),
	(159, 'New Zealand', 'NZ', NULL, NULL),
	(160, 'Nicaragua', 'NI', NULL, NULL),
	(161, 'Niger', 'NE', NULL, NULL),
	(162, 'Nigeria', 'NG', NULL, NULL),
	(163, 'Niue', 'NU', NULL, NULL),
	(164, 'Norfolk Island', 'NF', NULL, NULL),
	(165, 'Northern Mariana Islands', 'MP', NULL, NULL),
	(166, 'Norway', 'NO', NULL, NULL),
	(167, 'Oman', 'OM', NULL, NULL),
	(168, 'Pakistan', 'PK', NULL, NULL),
	(169, 'Palau', 'PW', NULL, NULL),
	(170, 'Palestine, State of', 'PS', NULL, NULL),
	(171, 'Panama', 'PA', NULL, NULL),
	(172, 'Papua New Guinea', 'PG', NULL, NULL),
	(173, 'Paraguay', 'PY', NULL, NULL),
	(174, 'Peru', 'PE', NULL, NULL),
	(175, 'Philippines', 'PH', NULL, NULL),
	(176, 'Pitcairn', 'PN', NULL, NULL),
	(177, 'Poland', 'PL', NULL, NULL),
	(178, 'Portugal', 'PT', NULL, NULL),
	(179, 'Puerto Rico', 'PR', NULL, NULL),
	(180, 'Qatar', 'QA', NULL, NULL),
	(181, 'Réunion', 'RE', NULL, NULL),
	(182, 'Romania', 'RO', NULL, NULL),
	(183, 'Russian Federation', 'RU', NULL, NULL),
	(184, 'Rwanda', 'RW', NULL, NULL),
	(185, 'Saint Barthélemy', 'BL', NULL, NULL),
	(186, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', NULL, NULL),
	(187, 'Saint Kitts and Nevis', 'KN', NULL, NULL),
	(188, 'Saint Lucia', 'LC', NULL, NULL),
	(189, 'Saint Martin (French part)', 'MF', NULL, NULL),
	(190, 'Saint Pierre and Miquelon', 'PM', NULL, NULL),
	(191, 'Saint Vincent and the Grenadines', 'VC', NULL, NULL),
	(192, 'Samoa', 'WS', NULL, NULL),
	(193, 'San Marino', 'SM', NULL, NULL),
	(194, 'Sao Tome and Principe', 'ST', NULL, NULL),
	(195, 'Saudi Arabia', 'SA', NULL, NULL),
	(196, 'Senegal', 'SN', NULL, NULL),
	(197, 'Serbia', 'RS', NULL, NULL),
	(198, 'Seychelles', 'SC', NULL, NULL),
	(199, 'Sierra Leone', 'SL', NULL, NULL),
	(200, 'Singapore', 'SG', NULL, NULL),
	(201, 'Sint Maarten (Dutch part)', 'SX', NULL, NULL),
	(202, 'Slovakia', 'SK', NULL, NULL),
	(203, 'Slovenia', 'SI', NULL, NULL),
	(204, 'Solomon Islands', 'SB', NULL, NULL),
	(205, 'Somalia', 'SO', NULL, NULL),
	(206, 'South Africa', 'ZA', NULL, NULL),
	(207, 'South Georgia and the South Sandwich Islands', 'GS', NULL, NULL),
	(208, 'South Sudan', 'SS', NULL, NULL),
	(209, 'Spain', 'ES', NULL, NULL),
	(210, 'Sri Lanka', 'LK', NULL, NULL),
	(211, 'Sudan', 'SD', NULL, NULL),
	(212, 'Suricountry_name', 'SR', NULL, NULL),
	(213, 'Svalbard and Jan Mayen', 'SJ', NULL, NULL),
	(214, 'Swaziland', 'SZ', NULL, NULL),
	(215, 'Sweden', 'SE', NULL, NULL),
	(216, 'Switzerland', 'CH', NULL, NULL),
	(217, 'Syrian Arab Republic', 'SY', NULL, NULL),
	(218, 'Taiwan', 'TW', NULL, NULL),
	(219, 'Tajikistan', 'TJ', NULL, NULL),
	(220, 'Tanzania, United Republic of', 'TZ', NULL, NULL),
	(221, 'Thailand', 'TH', NULL, NULL),
	(222, 'Timor-Leste', 'TL', NULL, NULL),
	(223, 'Togo', 'TG', NULL, NULL),
	(224, 'Tokelau', 'TK', NULL, NULL),
	(225, 'Tonga', 'TO', NULL, NULL),
	(226, 'Trinidad and Tobago', 'TT', NULL, NULL),
	(227, 'Tunisia', 'TN', NULL, NULL),
	(228, 'Turkey', 'TR', NULL, NULL),
	(229, 'Turkmenistan', 'TM', NULL, NULL),
	(230, 'Turks and Caicos Islands', 'TC', NULL, NULL),
	(231, 'Tuvalu', 'TV', NULL, NULL),
	(232, 'Uganda', 'UG', NULL, NULL),
	(233, 'Ukraine', 'UA', NULL, NULL),
	(234, 'United Arab Emirates', 'AE', NULL, NULL),
	(235, 'United Kingdom', 'GB', NULL, NULL),
	(236, 'United States', 'US', NULL, NULL),
	(237, 'United States Minor Outlying Islands', 'UM', NULL, NULL),
	(238, 'Uruguay', 'UY', NULL, NULL),
	(239, 'Uzbekistan', 'UZ', NULL, NULL),
	(240, 'Vanuatu', 'VU', NULL, NULL),
	(241, 'Venezuela, Bolivarian Republic of', 'VE', NULL, NULL),
	(242, 'Viet Nam', 'VN', NULL, NULL),
	(243, 'Virgin Islands, British', 'VG', NULL, NULL),
	(244, 'Virgin Islands, U.S.', 'VI', NULL, NULL),
	(245, 'Wallis and Futuna', 'WF', NULL, NULL),
	(246, 'Western Sahara', 'EH', NULL, NULL),
	(247, 'Yemen', 'YE', NULL, NULL),
	(248, 'Zambia', 'ZM', NULL, NULL),
	(249, 'Zimbabwe', 'ZW', NULL, NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Dumping structure for table admin-panel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin-panel.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table admin-panel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin-panel.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_03_12_092436_create_categories_table', 1),
	(5, '2020_03_12_201855_create_countries_table', 1),
	(8, '2014_10_12_000000_create_users_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table admin-panel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin-panel.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table admin-panel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` blob,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) unsigned DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_country_id_foreign` (`country_id`),
  CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table admin-panel.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `bio`, `image`, `gender`, `profession`, `birthday`, `address`, `country_id`, `location`, `phone`, `website`, `facebook`, `twitter`, `instagram`, `github`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Muntaser Muttaqi', 'admin@admin.com', NULL, '$2y$10$tgmlyEFAcRtdbRyghfO/tOeyqYtlNxXT/suuVkKOBM3eXcppEUvFC', 'admin', _binary 0x4920616D204D756E7461736572204D757474617169, '1. Muntaser Muttaqi-2020-03-30-19-01-22.jpg', 'M', 'Web Developer', '1998-09-30', 'Nizkunjara', 19, 'Feni', '(880) 1863-250-879', 'https://m-muttaqi.github.io/muttaqi.com', 'muntaser.muttaqi', 'iammuttaqi', 'iammuttaqi', 'm-muttaqi', 2, 1, NULL, '2020-03-30 18:59:45', '2020-03-30 19:01:46'),
	(2, 'Thor Odinson', 'thor@odinson.com', NULL, '$2y$10$By5GuK5NUB/CJ.l0/7QjjeJuI1LRoWWsH28Mz0nqVJbR2g.Hll6S2', 'thor', _binary 0x546865206F6E6C79207468696E67206973207065726D616E656E74206973206C69666520697320696D7065726D616E656E6365, '2. Thor Odinson-2020-03-30-19-13-03.jpg', 'M', 'Avengers', '0520-03-31', 'New Asgard', 166, 'Norway', '(880) 1234-567-890', 'https://marvel.com', 'thor', 'thor', 'thor', NULL, 0, 1, NULL, '2020-03-30 19:10:21', '2020-03-30 19:13:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
