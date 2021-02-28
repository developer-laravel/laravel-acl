
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wagner', 'wagner@gmail.com', '$2y$10$HpNdSFtGiN.OXfXDMUDHquVRn0wbmSyG1t53eHnNRt/2uJpAk1VDC', 'qOlrF1CVf5Wugs9JguEEl3RC1N23mgUYEBi7lUqNZut4ZGjdWivFXiRgRdJM', '2021-02-13 01:51:04', '2021-02-28 14:31:04'),
(2, 'Fernando', 'fernando@gamil.com', '$2y$10$IfLGilg9JAnboKt9JkyHEuiCoahPZknuTXWvNy5EHop3XmLAdx8E2', '9Qn01Ha4zGYEGojgfein3O74ewjHlwOfHeyvE7dzPII1RyMhnIV0Ja5ghhqX', '2021-02-28 02:40:01', '2021-02-28 12:29:04'),
(3, 'Julia', 'julia@gmail.com', '$2y$10$3eOkRJMZZVbWo3x01v6KMe4NcvKSnLxpNqw8nKO1eHf90hKRvE68i', 'Lt6xe14pgLJGN0qifPpcghwOIRyeT97Cc2fTSqtAhmHeV9sFRvKOz28e0Hde', '2021-02-28 02:40:29', '2021-02-28 14:30:55');
