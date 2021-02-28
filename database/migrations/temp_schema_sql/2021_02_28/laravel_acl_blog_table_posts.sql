
-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nisl non eros scelerisque suscipit tincidunt id ex. Vivamus vel viverra purus. Aenean malesuada pretium vulputate. Mauris nec dictum dui. Fusce posuere congue arcu, ac tincidunt urna. Pellentesque et diam sit amet turpis pulvinar accumsan eu a sapien. Ut non vehicula justo. In et convallis nunc. Maecenas aliquam ligula dolor, sit amet tristique risus varius nec.', NULL, NULL),
(2, 2, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nisl non eros scelerisque suscipit tincidunt id ex. Vivamus vel viverra purus. Aenean malesuada pretium vulputate. Mauris nec dictum dui. Fusce posuere congue arcu, ac tincidunt urna. Pellentesque et diam sit amet turpis pulvinar accumsan eu a sapien. Ut non vehicula justo. In et convallis nunc. Maecenas aliquam ligula dolor, sit amet tristique risus varius nec.', NULL, NULL),
(3, 3, 'Lorem ipsum Lorem ipsum Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nisl non eros scelerisque suscipit tincidunt id ex. Vivamus vel viverra purus. Aenean malesuada pretium vulputate. Mauris nec dictum dui. Fusce posuere congue arcu, ac tincidunt urna. Pellentesque et diam sit amet turpis pulvinar accumsan eu a sapien. Ut non vehicula justo. In et convallis nunc. Maecenas aliquam ligula dolor, sit amet tristique risus varius nec.', NULL, NULL),
(4, 1, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nisl non eros scelerisque suscipit tincidunt id ex. Vivamus vel viverra purus. Aenean malesuada pretium vulputate. Mauris nec dictum dui. Fusce posuere congue arcu, ac tincidunt urna. Pellentesque et diam sit amet turpis pulvinar accumsan eu a sapien. Ut non vehicula justo. In et convallis nunc. Maecenas aliquam ligula dolor, sit amet tristique risus varius nec.', NULL, NULL);
