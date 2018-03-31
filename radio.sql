


CREATE TABLE `canciones` (
  `id` int(11) NOT NULL,
  `id_prog` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `artist` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `duration` smallint(5) UNSIGNED DEFAULT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `path` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `canciones`
--

INSERT INTO `canciones` (`id`, `id_prog`, `title`, `artist`, `genre`, `duration`, `votes`, `path`) VALUES
(22, 1, 'Clocks', NULL, NULL, 291, 0, '/home/jorge/Música/sm-player/EDM Night/Coldplay-- &quot;Clocks&quot;.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

CREATE TABLE `horarios` (
  `hora_inicio` smallint(5) UNSIGNED NOT NULL,
  `hora_final` smallint(5) UNSIGNED NOT NULL,
  `id_prog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `horarios`
--

INSERT INTO `horarios` (`hora_inicio`, `hora_final`, `id_prog`) VALUES
(960, 1500, 1),
(8280, 8880, 1),
(9720, 10320, 1);

-- --------------------------------------------------------

--
-- Table structure for table `programas`
--

CREATE TABLE `programas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `manager` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `programas`
--

INSERT INTO `programas` (`id`, `nombre`, `manager`) VALUES
(1, 'EDM Night', 'Jorge Mora'),
(3, 'Stand-By', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `current_play` int(11) NOT NULL,
  `issued_at` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`current_play`, `issued_at`) VALUES
(25, 1459129764);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes` (`votes`),
  ADD KEY `prog` (`id_prog`) USING BTREE;

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`hora_inicio`),
  ADD UNIQUE KEY `hora_final_2` (`hora_final`),
  ADD KEY `id_prog` (`id_prog`),
  ADD KEY `hora_final` (`hora_final`);

--
-- Indexes for table `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`(191));

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY `current_play` (`current_play`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`id_prog`) REFERENCES `programas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_prog`) REFERENCES `programas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `static`
--
ALTER TABLE `static`
  ADD CONSTRAINT `static_ibfk_1` FOREIGN KEY (`current_play`) REFERENCES `canciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
