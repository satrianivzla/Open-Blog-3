-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2017 a las 22:55:08
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `openblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `url_name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `url_name`, `description`) VALUES
(1, 'Uncategorized', 'uncategorized', 'Uncategorized');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `author_email` varchar(100) DEFAULT NULL,
  `author_ip` varchar(100) NOT NULL,
  `content` text,
  `date` datetime DEFAULT '0000-00-00 00:00:00',
  `modded` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `post_id`, `user_id`, `author`, `author_email`, `author_ip`, `content`, `date`, `modded`) VALUES
(2, 1, 1, NULL, NULL, '127.0.0.1', 'This is just a test comment', '2017-05-04 21:23:04', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_groups`
--

CREATE TABLE `blog_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `protected` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_groups`
--

INSERT INTO `blog_groups` (`id`, `name`, `description`, `protected`) VALUES
(1, 'admin', 'Administrator', 1),
(2, 'members', 'General User', 1),
(3, 'contributors', 'Contributor', 1),
(4, 'editors', 'Editor', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_groups_perms`
--

CREATE TABLE `blog_groups_perms` (
  `id` int(11) NOT NULL,
  `perms_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_groups_perms`
--

INSERT INTO `blog_groups_perms` (`id`, `perms_id`, `group_id`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_group_permissions`
--

CREATE TABLE `blog_group_permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `protected` int(1) NOT NULL DEFAULT '0',
  `form_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_group_permissions`
--

INSERT INTO `blog_group_permissions` (`id`, `name`, `description`, `protected`, `form_name`) VALUES
(1, 'users', 'Users', 1, ''),
(2, 'posts', 'Posts', 1, ''),
(3, 'pages', 'Pages', 1, ''),
(4, 'links', 'Links', 1, ''),
(5, 'social', 'Social', 1, ''),
(6, 'comments', 'Comments', 1, ''),
(7, 'navigation', 'Navigation', 1, ''),
(8, 'themes', 'Themes', 1, ''),
(9, 'settings', 'Settings', 1, ''),
(10, 'updates', 'Updates!', 1, ''),
(11, 'dashboard', 'Dashboard', 1, ''),
(12, 'cats', 'Categories', 1, ''),
(13, 'lang', 'Language', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_languages`
--

CREATE TABLE `blog_languages` (
  `id` int(11) NOT NULL,
  `language` varchar(100) DEFAULT NULL,
  `abbreviation` varchar(3) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `author_website` varchar(255) NOT NULL,
  `is_default` enum('0','1') DEFAULT NULL,
  `is_avail` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_languages`
--

INSERT INTO `blog_languages` (`id`, `language`, `abbreviation`, `author`, `author_website`, `is_default`, `is_avail`) VALUES
(1, 'english', 'en', 'Enliven Applications', 'http://www.open-blog.org', '1', 1),
(2, 'indonesian', 'id', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(3, 'arabic', 'ar', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(4, 'bulgarian', 'bg', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(5, 'czech', 'cs', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(6, 'french', 'fr', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(7, 'hungarian', 'hu', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(8, 'italian', 'it', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(9, 'latvian', 'lv', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(10, 'norwegian', 'no', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(11, 'polish', 'pl', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(12, 'portuguese', 'pt', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(13, 'simplified-chinese', 'zh-', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(14, 'slovak', 'sk', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(15, 'slovenian', 'sl', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(16, 'spanish', 'es', 'Enliven Applications', 'http://www.open-blog.org', '0', 1),
(17, 'traditional-chinese', 'zh-', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(18, 'turkish', 'tr', 'Enliven Applications', 'http://www.open-blog.org', '0', 0),
(19, 'ukranian', 'uk', 'Enliven Applications', 'http://www.open-blog.org', '0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_links`
--

CREATE TABLE `blog_links` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(20) DEFAULT '_blank',
  `description` varchar(100) DEFAULT NULL,
  `visible` enum('yes','no') DEFAULT 'yes',
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_links`
--

INSERT INTO `blog_links` (`id`, `name`, `url`, `target`, `description`, `visible`, `position`) VALUES
(1, 'Open Blog', 'http://www.open-blog.org', '_blank', 'Open Blog', 'yes', 3),
(2, 'CodeIgniter', 'http://www.codeigniter.com', '_blank', 'CodeIgniter framework', 'yes', 2),
(3, 'Enliven Applications', 'http://www.enlivenapp.com', '_blank', 'Enliven Applications', 'yes', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_login_attempts`
--

CREATE TABLE `blog_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_migrations`
--

CREATE TABLE `blog_migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_migrations`
--

INSERT INTO `blog_migrations` (`version`) VALUES
(20170123000001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_navigation`
--

CREATE TABLE `blog_navigation` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `external` enum('0','1') NOT NULL DEFAULT '0',
  `position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_navigation`
--

INSERT INTO `blog_navigation` (`id`, `title`, `description`, `url`, `external`, `position`) VALUES
(1, 'Home', 'Home', '', '0', '0'),
(2, 'Welcome (page)', 'Welcome Page', 'pages/', '0', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_notifications`
--

CREATE TABLE `blog_notifications` (
  `id` int(11) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `verify_code` varchar(200) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `url_title` varchar(200) DEFAULT NULL,
  `author` int(11) DEFAULT '0',
  `date` date NOT NULL,
  `content` text,
  `status` enum('active','inactive') DEFAULT 'active',
  `is_home` int(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(200) NOT NULL,
  `meta_keywords` varchar(200) NOT NULL,
  `meta_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `title`, `url_title`, `author`, `date`, `content`, `status`, `is_home`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 'Welcome to Open Blog', 'welcome-to-open-blog', 1, '2016-12-22', '### Welcome\r\n\r\nIf you can see this page, this means Open Blog was successfully installed.\r\n\r\nIf you need help, don''t hesitate and visit the Open Blog home page.\r\n\r\nSincerely,\r\n\r\nThe Open Blog team\r\n\r\n*Since this is just an example post, feel free to delete it.*', 'active', 1, 'Open Blog Home Page', 'Open, Blog, Open Blog', 'The Open Blog Homepage');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `author` int(11) NOT NULL DEFAULT '0',
  `date_posted` date NOT NULL DEFAULT '0000-00-00',
  `title` varchar(200) NOT NULL,
  `url_title` varchar(200) NOT NULL,
  `excerpt` text NOT NULL,
  `content` longtext NOT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `allow_comments` enum('0','1') NOT NULL DEFAULT '1',
  `sticky` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('draft','published') NOT NULL DEFAULT 'published',
  `meta_title` varchar(200) NOT NULL,
  `meta_keywords` varchar(200) NOT NULL,
  `meta_description` varchar(200) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `author`, `date_posted`, `title`, `url_title`, `excerpt`, `content`, `feature_image`, `allow_comments`, `sticky`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `views`) VALUES
(1, 1, '2016-12-21', 'Welcome to Open Blog', 'welcome-to-open-blog', 'Congratulations! If you can see this page, this means Open Blog was successfully installed. If you need help, don''t hesitate and visit the Open Blog home page.\r\n', '#### Congratulations!\r\n\r\nIf you can see this page, this means Open Blog was successfully installed.\r\n\r\nIf you need help, don''t hesitate and visit the Open Blog home page.\r\n\r\nSincerely,\r\n\r\nThe Open Blog team\r\n\r\n*Since this is just an example post, feel free to delete it.*', NULL, '1', '0', 'published', 'Open Blog Home Page', 'Open, Blog, Open Blog', 'The Open Blog Homepage', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts_to_categories`
--

CREATE TABLE `blog_posts_to_categories` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_posts_to_categories`
--

INSERT INTO `blog_posts_to_categories` (`id`, `post_id`, `category_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_redirects`
--

CREATE TABLE `blog_redirects` (
  `id` int(11) NOT NULL,
  `old_slug` varchar(200) NOT NULL,
  `new_slug` varchar(200) NOT NULL,
  `type` varchar(4) NOT NULL DEFAULT 'post',
  `code` varchar(3) NOT NULL DEFAULT '301'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_settings`
--

CREATE TABLE `blog_settings` (
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `tab` varchar(50) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `options` varchar(200) NOT NULL,
  `required` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_settings`
--

INSERT INTO `blog_settings` (`name`, `value`, `tab`, `field_type`, `options`, `required`) VALUES
('admin_email', 'simon_montano@yahoo.com', 'email', 'text', '', 1),
('allow_comments', '1', 'comments', 'dropdown', '1=yes|0=no', 1),
('allow_registrations', 'true', 'users', 'dropdown', 'true=yes|false=no', 1),
('base_controller', 'blog', 'general', 'dropdown', 'blog=blog|pages=pages', 1),
('blog_description', 'A blog application written with CodeIgniter. Requires PHP and MySQL', 'general', 'text', '', 0),
('category_list_limit', '10', 'categories', 'dropdown', '10=10|20=20|30=30', 1),
('email_activation', 'true', 'users', 'dropdown', 'true=yes|false=no', 1),
('links_per_box', '10', 'links', 'dropdown', '10=10|20=20|30=30', 1),
('mail_protocol', 'mail', 'email', 'dropdown', 'mail=mail|smtp=smtp|sendmail=sendmail', 1),
('manual_activation', 'false', 'users', 'dropdown', 'true=yes|false=no', 1),
('mod_non_user_comments', '1', 'comments', 'dropdown', '1=yes|0=no', 1),
('mod_user_comments', '0', 'comments', 'dropdown', '1=yes|0=no', 1),
('months_per_archive', '10', 'archives', 'dropdown', '10=10|20=20|30=30', 1),
('posts_per_page', '10', 'blog', 'dropdown', '10=10|20=20|30=30', 1),
('recaptcha_private_key', '', 'captcha', 'text', '', 0),
('recaptcha_site_key', '', 'captcha', 'text', '', 0),
('sendmail_path', '/usr/sbin/sendmail', 'email', 'text', '', 0),
('server_email', 'simon_montano@yahoo.com', 'email', 'text', '', 1),
('site_name', 'Open Blog', 'general', 'text', '', 1),
('smtp_host', '', 'email', 'text', '', 0),
('smtp_pass', '', 'email', 'text', '', 0),
('smtp_port', '', 'email', 'text', '', 0),
('smtp_user', '', 'email', 'text', '', 0),
('use_honeypot', '0', 'captcha', 'dropdown', '1=yes|0=no', 1),
('use_recaptcha', '0', 'captcha', 'dropdown', '1=yes|0=no', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_sidebar`
--

CREATE TABLE `blog_sidebar` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` enum('enabled','disabled') NOT NULL,
  `position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_sidebar`
--

INSERT INTO `blog_sidebar` (`id`, `title`, `file`, `status`, `position`) VALUES
(1, 'Search', 'search', 'enabled', '1'),
(2, 'Archive', 'archive', 'enabled', '2'),
(3, 'Categories', 'categories', 'enabled', '3'),
(4, 'Tag_cloud', 'tag_cloud', 'enabled', '4'),
(5, 'Feeds', 'feeds', 'enabled', '5'),
(6, 'Links', 'links', 'enabled', '6'),
(7, 'Other', 'other', 'enabled', '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_social`
--

CREATE TABLE `blog_social` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `enabled` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_social`
--

INSERT INTO `blog_social` (`id`, `name`, `url`, `enabled`) VALUES
(3, 'facebook', 'http://www.facebook.com/', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_templates`
--

CREATE TABLE `blog_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `author_email` varchar(100) NOT NULL,
  `path` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `is_default` enum('0','1') DEFAULT '1',
  `is_active` varchar(1) NOT NULL DEFAULT '0',
  `is_admin` varchar(1) NOT NULL DEFAULT '0',
  `version` varchar(10) NOT NULL DEFAULT '1.0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_templates`
--

INSERT INTO `blog_templates` (`id`, `name`, `description`, `author`, `author_email`, `path`, `image`, `is_default`, `is_active`, `is_admin`, `version`) VALUES
(1, 'Default', 'The default theme for Open Blog', 'Enliven Applications', 'info@open-blog.org', 'default', 'default.png', '1', '1', '0', '1.0.0'),
(2, 'Default Admin', 'The default admin theme for Open Blog', 'Enliven Applications', 'info@open-blog.org', 'default_admin', 'default_admin.png', '1', '1', '1', '1.0.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_users`
--

CREATE TABLE `blog_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_users_groups`
--

CREATE TABLE `blog_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `blog_users_groups`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_log`
--

CREATE TABLE `site_log` (
  `site_log_id` int(10) UNSIGNED NOT NULL,
  `no_of_visits` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `requested_url` tinytext NOT NULL,
  `referer_page` tinytext NOT NULL,
  `page_name` tinytext NOT NULL,
  `query_string` tinytext NOT NULL,
  `user_agent` tinytext NOT NULL,
  `is_unique` tinyint(1) NOT NULL DEFAULT '0',
  `access_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_groups`
--
ALTER TABLE `blog_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_groups_perms`
--
ALTER TABLE `blog_groups_perms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_group_permissions`
--
ALTER TABLE `blog_group_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_languages`
--
ALTER TABLE `blog_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_links`
--
ALTER TABLE `blog_links`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_login_attempts`
--
ALTER TABLE `blog_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_navigation`
--
ALTER TABLE `blog_navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_notifications`
--
ALTER TABLE `blog_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_posts_to_categories`
--
ALTER TABLE `blog_posts_to_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_redirects`
--
ALTER TABLE `blog_redirects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_settings`
--
ALTER TABLE `blog_settings`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `blog_sidebar`
--
ALTER TABLE `blog_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_social`
--
ALTER TABLE `blog_social`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_templates`
--
ALTER TABLE `blog_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_users`
--
ALTER TABLE `blog_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_users_groups`
--
ALTER TABLE `blog_users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_bp_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_bp_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_bp_users_groups_groups1_idx` (`group_id`);

--
-- Indices de la tabla `site_log`
--
ALTER TABLE `site_log`
  ADD PRIMARY KEY (`site_log_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `blog_groups`
--
ALTER TABLE `blog_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `blog_groups_perms`
--
ALTER TABLE `blog_groups_perms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `blog_group_permissions`
--
ALTER TABLE `blog_group_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `blog_languages`
--
ALTER TABLE `blog_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `blog_links`
--
ALTER TABLE `blog_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `blog_login_attempts`
--
ALTER TABLE `blog_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `blog_navigation`
--
ALTER TABLE `blog_navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `blog_notifications`
--
ALTER TABLE `blog_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `blog_posts_to_categories`
--
ALTER TABLE `blog_posts_to_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `blog_redirects`
--
ALTER TABLE `blog_redirects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `blog_sidebar`
--
ALTER TABLE `blog_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `blog_social`
--
ALTER TABLE `blog_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `blog_templates`
--
ALTER TABLE `blog_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `blog_users`
--
ALTER TABLE `blog_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `blog_users_groups`
--
ALTER TABLE `blog_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `site_log`
--
ALTER TABLE `site_log`
  MODIFY `site_log_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog_users_groups`
--
ALTER TABLE `blog_users_groups`
  ADD CONSTRAINT `fk_bp_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `blog_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bp_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `blog_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
