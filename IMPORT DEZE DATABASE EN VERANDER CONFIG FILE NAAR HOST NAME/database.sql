-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Czas generowania: 18 Mar 2016, 13:36
-- Wersja serwera: 5.5.38
-- Wersja PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Baza danych: `smibby`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `content`
--

CREATE TABLE `content` (
`id` int(11) NOT NULL,
  `h_text1` varchar(255) COLLATE utf8_bin NOT NULL,
  `h_text2` varchar(255) COLLATE utf8_bin NOT NULL,
  `h_btn1` varchar(255) COLLATE utf8_bin NOT NULL,
  `who_text1` varchar(255) COLLATE utf8_bin NOT NULL,
  `who_text2` varchar(255) COLLATE utf8_bin NOT NULL,
  `who_text3` varchar(255) COLLATE utf8_bin NOT NULL,
  `what_text1` varchar(255) COLLATE utf8_bin NOT NULL,
  `what_text2` varchar(255) COLLATE utf8_bin NOT NULL,
  `what_text3` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_text1` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_text2` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_say1` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_say2` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_say3` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_say4` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_prs1` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_prs2` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_prs3` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_prs4` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_plc1` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_plc2` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_plc3` varchar(255) COLLATE utf8_bin NOT NULL,
  `review_plc4` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `desk` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `content`
--

INSERT INTO `content` (`id`, `h_text1`, `h_text2`, `h_btn1`, `who_text1`, `who_text2`, `who_text3`, `what_text1`, `what_text2`, `what_text3`, `review_text1`, `review_text2`, `review_say1`, `review_say2`, `review_say3`, `review_say4`, `review_prs1`, `review_prs2`, `review_prs3`, `review_prs4`, `review_plc1`, `review_plc2`, `review_plc3`, `review_plc4`, `tel`, `mail`, `desk`) VALUES
(1, 'YOUR HELPING HAND', 'Smibby is your personal helping hand when performing your daily tasks. Smibby will help you ease your life. You wont forget a single thing!', 'download app', 'Who are we?', 'Smibby helps you with', 'We are Bemikasoftware and we have brought you a new app called Smibby. Smibby will facilitate your life and guide you in performing daily tasks.', 'What is Smibby?', 'Smibby helps you with', 'Smibby is your personal helping hand, when performing your daily tasks. Smibby will help you ease your life, so you wont forget a single thing!', 'Reviews', 'Smibby helps you with', 'Im Jimmy, I work in healthcare and have many profit of this service.', 'Im Marijke, a graduated doctor. Smibby is guaranteed a helping hand.', 'Im Barbara, I am grandmother of two grandchildren with autism. Smibby has taken a lot of work for me.', 'Im Quinty, I have a twin sister(see photo). By using this app, I can help her more.', 'JIMMY', 'MARIJKE', 'BARBARA', 'QUINTY', 'Lisse', 'Den Haag', 'Amstelveen', 'Amsterdam', '+31 615 903 891', 'contact@smibby.com', 'Helpdesk');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `content`
--
ALTER TABLE `content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;