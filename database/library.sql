-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 08:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `img__path` varchar(255) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `borrow_date` datetime NOT NULL,
  `return_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `img__path`, `isbn`, `borrow_date`, `return_date`) VALUES
(1, 'Harry Potter and the Philosophers Stone', 'J.K. Rowling', '../../assets/images/books/pStone.png', '978-0-7475-3269-6', '2023-08-10 00:00:00', '0000-00-00 00:00:00'),
(2, 'Harry Potter and the Chamber of Secrets', 'J.K. Rowling', '../../assets/images/books/chamber.png', '978-0-7475-3849-0', '2023-08-10 00:00:00', '2023-08-05 00:18:03'),
(3, 'Harry Potter and the Prisoner of Azkaban', 'J.K. Rowling', '../../assets/images/books/azkaban.png', '978-0-7475-4215-2', '2023-08-10 00:00:00', '2023-08-05 00:18:03'),
(4, 'Harry Potter and the Goblet of Fire', 'J.K. Rowling', '../../assets/images/books/goblet.png', '978-0-7475-4624-2', '2023-08-10 00:00:00', '2023-08-05 00:18:03'),
(5, 'Harry Potter and the Order of the Phoenix', 'J.K. Rowling', '../../assets/images/books/phoenix.png', '978-0-7475-5100-0', '2023-08-10 00:00:00', '2023-08-05 00:18:03'),
(6, 'Harry Potter and the Half-Blood Prince', 'J.K. Rowling', '../../assets/images/books/halfBlood.png', '978-0-7475-8108-4', '2023-08-10 00:00:00', '2023-08-05 00:18:03'),
(7, 'Harry Potter and the Deathly Hallows', 'J.K. Rowling', '../../assets/images/books/dHallows.png', '978-0-545-01022-1', '2023-08-05 00:18:03', '2023-08-05 00:18:03'),
(8, 'American Psycho', 'Bret Easton Ellis', '../../assets/images/books/psycho.png', '978-1-234567-89-0', '2023-08-10 00:00:00', '2023-08-05 01:43:39'),
(9, 'Crash', 'J.G. Ballard', '../../assets/images/books/crash.png', '978-2-345678-90-1', '2023-08-10 00:00:00', '0000-00-00 00:00:00'),
(10, 'Night Sky with Exit Wounds', 'Ocean Vuong', '../../assets/images/books/nightSky.png', '978-3-456789-01-1', '2023-08-10 00:00:00', '2023-08-05 01:43:39'),
(11, 'On Earth We Are Briefly Gorgeous', 'Ocean Vuong', '../../assets/images/books/gorgeous.png', '978-4-567890-12-3', '2023-08-05 01:43:39', '2023-08-05 01:43:39'),
(12, 'Accidental Billionaires', 'Ben Mezrich', '../../assets/images/books/billionaires.png', '978-5-678901-23-4', '2023-08-10 00:00:00', '2023-08-05 01:43:39'),
(13, 'American Prometheus', 'Kai Bird, Martin J. Sherwin', '../../assets/images/books/prometheus.png', '978-6-789012-34-5', '2023-08-10 00:00:00', '2023-08-05 01:43:39'),
(14, 'Crime and Punishment', 'Fyodor Dostoevsky', '../../assets/images/books/crimeP.png', '978-7-890123-45-6', '0000-00-00 00:00:00', '2023-08-05 01:43:39'),
(15, '1984', 'George Orwell', '../../assets/images/books/1984.png', '978-8-901234-56-7', '2023-08-05 01:43:39', '2023-08-05 01:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `borrowings`
--

CREATE TABLE `borrowings` (
  `borrowing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_date` datetime NOT NULL,
  `return_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowings`
--

INSERT INTO `borrowings` (`borrowing_id`, `user_id`, `book_id`, `borrow_date`, `return_date`) VALUES
(7, 8, 9, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(8, 8, 12, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(9, 8, 10, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(10, 8, 13, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(11, 8, 1, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(12, 8, 2, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(13, 8, 3, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(14, 8, 4, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(15, 8, 5, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(16, 8, 6, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(17, 8, 1, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(18, 8, 2, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(19, 8, 3, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(20, 8, 4, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(21, 8, 5, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(22, 8, 6, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(23, 11, 9, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(24, 11, 9, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(25, 11, 8, '2023-08-10 00:00:00', '2023-08-10 00:00:00'),
(26, 11, 9, '2023-08-10 00:00:00', '2023-08-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `rental_count` int(11) NOT NULL DEFAULT 0,
  `status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `is_admin`, `rental_count`, `status`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'AdminPassword123', 1, 0, 'active'),
(2, 'Emily Smith', 'emily.smith@example.com', 'LibraryAdmin456', 1, 0, 'active'),
(3, 'Michael Johnson', 'michael.johnson@example.com', 'UserPass123', 0, 0, 'active'),
(4, 'Sarah Lee', 'sarah.lee@example.com', 'LibraryUser789', 0, 0, 'active'),
(5, 'James Sunderland', 'james.sunderland@example.com', 'Silent@456', 1, 0, 'active'),
(6, 'Heather Mason', 'heather.mason@example.com', 'Silent@123', 1, 0, 'active'),
(7, 'Cheryl Mason', 'cheryl.mason@example.com', 'Silent@789', 1, 0, 'active'),
(8, 'Harry Mason', 'harry.mason@example.com', 'SH_User@123', 0, 0, 'active'),
(9, 'Lisa Garland', 'lisa.garland@example.com', 'SH_User@456', 0, 0, 'active'),
(10, 'Alessa Gillespie', 'alessa.gillespie@example.com', 'SH_User@789', 0, 0, 'active'),
(11, 'Miles', 'milespieterse@gmail.com', 'test123', 0, 0, 'active'),
(12, 'Cybil Bennet', 'cybil.bennet@example.com', 'AdminPassword123', 1, 0, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrowings`
--
ALTER TABLE `borrowings`
  ADD PRIMARY KEY (`borrowing_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `borrowing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowings`
--
ALTER TABLE `borrowings`
  ADD CONSTRAINT `borrowings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowings_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;