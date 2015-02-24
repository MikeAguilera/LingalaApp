USE `lingaladictionary`;

CREATE TABLE IF NOT EXISTS `questions` (
  `Question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptC` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `OptD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `questions` (`Question`, `OptA`, 'OptB', 'OptC', 'OptD') VALUES('', '', '', '', '');
























