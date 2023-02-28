-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 05:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humathinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`admin_id`, `email`, `fname`, `lname`, `password`, `status`) VALUES
(1, 'tricore012@gmail.com', 'Gerald Mico', 'Pirate', '21232f297a57a5a743894a0e4a801fc3', 'VALID'),
(2, 'hellodevcore@gmail.com', 'WHOAMI', 'WHOAMI', '21232f297a57a5a743894a0e4a801fc3', 'VALID');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcement` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `type` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcement`, `status`, `type`, `date_created`) VALUES
(1, 'AWESOME AWESOME AWESOME AWESOME...................................... AWESOME AWESOME AWESOME AWESOME......................................', 'IN-ACTIVE', 'MARQUEE', '2023-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `calculus_content`
--

CREATE TABLE `calculus_content` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculus_content`
--

INSERT INTO `calculus_content` (`id`, `title`, `description`, `photo`) VALUES
(1, 'HISTORY OF CALCULUS', 'History. Modern calculus was developed in 17th-century Europe by Isaac Newton and Gottfried Wilhelm Leibniz (independently of each other, first publishing around the same time) but elements of it appeared in ancient Greece, then in China and the Middle East, and still later again in medieval Europe and in India.', 'upload/1674942365.jpg'),
(2, 'HISTORY OF CALCULUS', 'History. Modern calculus was developed in 17th-century Europe by Isaac Newton and Gottfried Wilhelm Leibniz (independently of each other, first publishing around the same time) but elements of it appeared in ancient Greece, then in China and the Middle East, and still later again in medieval Europe and in India.', 'upload/1674942394.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client_admin_security`
--

CREATE TABLE `client_admin_security` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_admin_security`
--

INSERT INTO `client_admin_security` (`id`, `email`, `code`, `status`, `date`) VALUES
(1, 'tricore012@gmail.com', 7472, 'VALID', '2023-01-28'),
(2, 'tricore012@gmail.com', 6811, 'VALID', '2023-01-28'),
(3, 'hellodevcore@gmail.com', 6995, 'VALID', '2023-01-28'),
(4, 'tricore012@gmail.com', 7438, 'VALID', '2023-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `client_security`
--

CREATE TABLE `client_security` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_security`
--

INSERT INTO `client_security` (`id`, `email`, `code`, `status`, `date`) VALUES
(1, 'tricore012@gmail.com', 9805, 'USED', '2023-01-29'),
(2, 'tricore012@gmail.com', 7925, 'USED', '2023-01-29'),
(3, 'tricore012@gmail.com', 8959, 'USED', '2023-02-03'),
(4, 'tricore012@gmail.com', 8888, 'USED', '2023-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `tid`, `name`, `file`) VALUES
(1, 3, 'Prototype (2)', 'files/Prototype (2).pdf'),
(2, 2, 'Prototype (2)', 'files/Prototype (2).pdf'),
(3, 1, 'Prototype (2)', 'files/Prototype (2).pdf'),
(6, 4, 'Prototype (2)', 'files/Prototype (2).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `tag`, `title`, `link`, `description`, `date_created`) VALUES
(1, 'WEBSITE CAN DO FOR YOU', 'ASSIST', 'bi bi-question-square', 'To Aid Students in Understanding, The Course And Arouse Their Interest', '2023-01-29'),
(2, 'WEBSITE CAN DO FOR YOU', 'PURPOSE', 'bi bi-people', 'To Give Students, Resources and Unlimited Acess to The Modules', '2023-01-29'),
(3, 'WEBSITE CAN DO FOR YOU', 'ASPIRE', 'bi bi-person-up', 'To Increase Students Ability For Self-Learning and Self Discovery', '2023-01-29'),
(4, 'WEBSITE CAN DO FOR YOU', 'GAMES', 'bi bi-trophy', 'To Use Game-Based Methods and Ideas to Address Issues, Aspire and Advance Learning', '2023-01-29'),
(5, 'WEBSITE CAN DO FOR YOU', 'QUIZ', 'bi bi-book', 'Students Can Learn What They Know and What They Dont Know By Taking Quizzes', '2023-01-29'),
(7, 'HOW IT WORKS', 'SIGN-UP', 'bi bi-card-checklist', 'The Procedure For Registering To Create An Account', '2023-01-29'),
(8, 'HOW IT WORKS', 'DASHBOARD', 'bi bi-person-dash', 'Track Your Progress With Your Personalized Dashboard And Take Quizzes', '2023-01-29'),
(9, 'HOW IT WORKS', 'GET ACCESS', 'bi bi-person-badge', 'Access To Module Quiz And Game Once You Log In', '2023-01-29'),
(10, 'HOW IT WORKS', 'GET RESULT', 'bi bi-trophy', 'Compare Your Results With Your Peers With Differential Calculus', '2023-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `recover`
--

CREATE TABLE `recover` (
  `rid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_attemp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recover`
--

INSERT INTO `recover` (`rid`, `email`, `status`, `date_attemp`) VALUES
(1, 'tricore012@gmail.com', 'RECOVERED', '2023-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `rid` int(11) NOT NULL,
  `resource_name` varchar(100) NOT NULL,
  `resource_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`rid`, `resource_name`, `resource_description`) VALUES
(1, 'DIFFENTIAL CALCULUS', 'LIMIT AND CONTINUITY1'),
(2, 'DIFFENTIAL CALCULUS', 'DIFFERENTIATION OF ALGREBRAIC FUNCTIONS2'),
(3, 'DIFFENTIAL CALCULUS', 'DIFFERENTIATION OF TRANSCENDENTAL FUNCTIONS3');

-- --------------------------------------------------------

--
-- Table structure for table `resource_into`
--

CREATE TABLE `resource_into` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource_into`
--

INSERT INTO `resource_into` (`id`, `rid`, `userid`, `status`) VALUES
(1, 1, 2, 'COMPLETED'),
(2, 2, 2, 'COMPLETED');

-- --------------------------------------------------------

--
-- Table structure for table `resource_topic`
--

CREATE TABLE `resource_topic` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `topic_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource_topic`
--

INSERT INTO `resource_topic` (`id`, `rid`, `topic_name`) VALUES
(1, 1, 'THE LIMIT FUNCTION'),
(2, 1, 'INFINITE LIMITS'),
(3, 1, 'CONTINUITY'),
(4, 2, 'TEST TOPIC'),
(5, 2, 'TRY TOPIC');

-- --------------------------------------------------------

--
-- Table structure for table `resource__topic_into`
--

CREATE TABLE `resource__topic_into` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource__topic_into`
--

INSERT INTO `resource__topic_into` (`id`, `rid`, `tid`, `userid`, `status`) VALUES
(1, 1, 1, 2, 'COMPLETE'),
(2, 2, 4, 2, 'IN PROGRESS'),
(3, 2, 5, 2, 'IN PROGRESS'),
(4, 1, 2, 2, 'IN PROGRESS'),
(5, 1, 3, 2, 'IN PROGRESS');

-- --------------------------------------------------------

--
-- Table structure for table `site_inquiry`
--

CREATE TABLE `site_inquiry` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_inquiry`
--

INSERT INTO `site_inquiry` (`id`, `fname`, `email`, `subject`, `message`, `date_created`) VALUES
(1, 'THIS IS A TEST', 'tricore012@gmail.com', 'test', 'test', '2023-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(1, 'testing lang na event', '2023-01-29 00:00:00', '2023-01-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `team_content`
--

CREATE TABLE `team_content` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_content`
--

INSERT INTO `team_content` (`id`, `name`, `role`, `photo`) VALUES
(1, '1674942427.png', 'JUST A TESTER', 'upload/1674942427.png'),
(2, '1674942448.png', 'TESTER', 'upload/1674942448.png'),
(3, '1674942464.png', 'TESTER', 'upload/1674942464.png'),
(4, '1674942481.png', 'TESTER', 'upload/1674942481.png');

-- --------------------------------------------------------

--
-- Table structure for table `topic_assesment`
--

CREATE TABLE `topic_assesment` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic_assesment`
--

INSERT INTO `topic_assesment` (`id`, `tid`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic_assesment_answers`
--

CREATE TABLE `topic_assesment_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic_assesment_answers`
--

INSERT INTO `topic_assesment_answers` (`id`, `question_id`, `answer`) VALUES
(1, 1, 'A. ANDER BONIFACIO ? '),
(2, 1, 'B. BABALU'),
(3, 1, 'C. MARITES'),
(4, 1, 'D. NONE OF THE ABOVE ? '),
(5, 2, 'A. IKAW'),
(6, 2, 'B. AKO'),
(7, 2, 'C. HINDI KO ALAM'),
(8, 2, 'D. BAKA YUNG KATABI MO ');

-- --------------------------------------------------------

--
-- Table structure for table `topic_assesment_into`
--

CREATE TABLE `topic_assesment_into` (
  `id` int(11) NOT NULL,
  `under` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `ansid` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic_assesment_into`
--

INSERT INTO `topic_assesment_into` (`id`, `under`, `qid`, `uid`, `ansid`, `status`) VALUES
(1, 1, 1, 2, 3, 'FALSE'),
(2, 1, 2, 2, 8, 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `topic_assesment_q`
--

CREATE TABLE `topic_assesment_q` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic_assesment_q`
--

INSERT INTO `topic_assesment_q` (`id`, `qid`, `question`, `answer`) VALUES
(1, 1, 'WHO KILL MAGELAN ?', 3),
(2, 1, 'WHO DISCOVER THE CALCULUS ?', 8);

-- --------------------------------------------------------

--
-- Table structure for table `topic_image`
--

CREATE TABLE `topic_image` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `student_no` int(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `student_no`, `fname`, `lname`, `email`, `password`, `gender`, `code`, `status`, `date_created`) VALUES
(1, 101213, 'GERALD MICO', 'FACISTOL', 'hellodevcore@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'MALE', 7891, 'VALID', '2023-01-29'),
(2, 10121314, 'Gerald Mico', 'Facistol', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'MALE', 9129, 'VALID', '2023-01-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculus_content`
--
ALTER TABLE `calculus_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_admin_security`
--
ALTER TABLE `client_admin_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_security`
--
ALTER TABLE `client_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recover`
--
ALTER TABLE `recover`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `resource_into`
--
ALTER TABLE `resource_into`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_topic`
--
ALTER TABLE `resource_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource__topic_into`
--
ALTER TABLE `resource__topic_into`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_inquiry`
--
ALTER TABLE `site_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_content`
--
ALTER TABLE `team_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_assesment`
--
ALTER TABLE `topic_assesment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_assesment_answers`
--
ALTER TABLE `topic_assesment_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_assesment_into`
--
ALTER TABLE `topic_assesment_into`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_assesment_q`
--
ALTER TABLE `topic_assesment_q`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_image`
--
ALTER TABLE `topic_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calculus_content`
--
ALTER TABLE `calculus_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_admin_security`
--
ALTER TABLE `client_admin_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_security`
--
ALTER TABLE `client_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recover`
--
ALTER TABLE `recover`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resource_into`
--
ALTER TABLE `resource_into`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resource_topic`
--
ALTER TABLE `resource_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resource__topic_into`
--
ALTER TABLE `resource__topic_into`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `site_inquiry`
--
ALTER TABLE `site_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_content`
--
ALTER TABLE `team_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topic_assesment`
--
ALTER TABLE `topic_assesment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic_assesment_answers`
--
ALTER TABLE `topic_assesment_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topic_assesment_into`
--
ALTER TABLE `topic_assesment_into`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topic_assesment_q`
--
ALTER TABLE `topic_assesment_q`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topic_image`
--
ALTER TABLE `topic_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
