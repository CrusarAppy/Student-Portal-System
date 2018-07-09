-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 02:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `commoninfo`
--

CREATE TABLE `commoninfo` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `AccountType` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commoninfo`
--

INSERT INTO `commoninfo` (`id`, `Name`, `Username`, `Password`, `Email`, `AccountType`) VALUES
(183, 'ware vamdy', 'vamdy', '00000000', 'vandy@gmail.com', 'teacher'),
(182, 'aaa', 'bbb', '123123123', 'asda@example.com', 'student'),
(181, 'harke salwar', 'sarde', '123123123', 'harke@gmail.com', 'teacher'),
(180, 'manish sharma', 'manish', '123123123', 'manish@gmail.com', 'teacher'),
(179, 'ajit gauli', 'happakali', '123123123', 'happa@gmail.com', 'student'),
(174, 'Baman Ghimire', 'baman', '123123123', 'asd@gmail.com', 'student'),
(177, 'gunman fury', 'fury', '123123123', 'fury@gmail.com', 'teacher'),
(176, 'bikek thapa kaji', 'gidde', '123123123', 'gidde@gmail.com', 'teacher'),
(178, 'anish bastola', 'bastebhai', '12345678', 'anish@example.com', 'admin'),
(172, 'Bibek koirala', 'bishal', '123123123', 'asd@gmail.com', 'admin'),
(173, '', 'maddy', '123123123', '', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `Course Code` varchar(10) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Semester` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Course Code`, `Subject`, `Semester`) VALUES
(1, 'MTH 112', 'Engineering Mathematics I', 'I'),
(2, 'PHY 111', 'Physics', 'I'),
(3, 'ENG 111', 'Communication Techniques', 'I'),
(4, 'CMP 110', 'Fundamentals of IT', 'I'),
(5, 'CMP 113', 'Programming in C', 'I'),
(6, 'CMP 114', 'Problem Solving Techniques', 'I'),
(7, 'MTH 114', 'Engineering Mathematics II', 'II'),
(8, 'ELX 212', 'Logic Circuits', 'II'),
(9, 'MTH 130', 'Mathematical Foundation of Computer Science', 'II'),
(10, 'MEC 120', 'Engineering Drawing', 'II'),
(11, 'CMP 115', 'Object Oriented Programming in C++', 'II'),
(12, 'CMP 213 ', 'Web Technology', 'II'),
(13, 'MTH 212', 'Engineering Mathematics III', 'III'),
(14, 'CMP 220', 'Software Engineering Fundamentals', 'III'),
(15, 'CMP 225', 'Data Structure and Algorithms', 'III'),
(16, 'MTH 221', 'Probability  and Queuing Theory', 'III'),
(17, 'CMP 212', 'Programming in Java', 'III'),
(18, 'CMP 214', 'MIcroprocessor and Assembly Language Programming', 'III'),
(19, 'MTH 230', 'Numerical Methods', 'IV'),
(20, 'CMP 241 ', 'Computer Graphics', 'IV'),
(21, 'CMP 334', 'Computer Organization and Architecture', 'IV'),
(22, 'CMP 226', 'Database Management Systems', 'IV'),
(23, 'CMP 321', 'Object Oriented Design and Modelling through UML', 'IV'),
(24, 'CMP 290', 'Project I', 'IV'),
(25, 'CMP 331', 'Applied Operating Systems', 'V'),
(26, 'CMP 350', 'Simulation and Modeling', 'V'),
(27, 'CMP 457', 'Artificial Intelligence and Neural Networks', 'V'),
(28, 'MGT 321 ', 'Organization and Management', 'V'),
(29, 'CMP 325', 'Analysis and Design of Algorithms', 'V'),
(30, 'CMP 311', 'System Programming', 'V'),
(31, 'CMP 335', 'Computer Networks', 'VI'),
(32, 'CMP 312', 'Principles of Programming Languages', 'VI'),
(33, 'ECO 411', 'Engineering Economics', 'VI'),
(34, 'CMP 322', 'Object Oriented Software Development', 'VI'),
(35, 'CMP 341', 'Multimedia Systems', 'VI'),
(36, 'CMP 390', 'Project II', 'VI'),
(37, 'CMP 430', 'Real Time Systems', 'VII'),
(38, 'CMP 435', 'Distributed Systems', 'VII'),
(39, 'CMP 480', 'Enterprise Application Development', 'VII'),
(40, 'CMP 441', 'Image Processing & Pattern Recognition', 'VII'),
(41, 'CMP 421', 'Software Testing, Validation & Quality Assurance', 'VII'),
(42, 'nthg', 'Elective I', 'VII'),
(43, 'CMP 436', 'Network Programming', 'VIII'),
(44, 'CMP 420', 'Software Projects Management', 'VIII'),
(45, 'nthg1', 'Elective II', 'VIII'),
(46, 'CMP 490', 'Project III', 'VIII');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `ID` int(11) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`ID`, `filename`, `name`, `path`) VALUES
(21, 'fall question', 'UML-10 Fall_0001.jpg', './uploads/UML-10 Fall_0001.jpg'),
(20, 'past Question of 2015 fall pqt', 'UML-04 Spring_0001.jpg', './uploads/UML-04 Spring_0001.jpg'),
(7, 'dustin', 'vlcsnap-error928.png', './uploads/vlcsnap-error928.png'),
(10, 'me', 'WIN_20171212_12_05_55_Pro.jpg', '../uploads/WIN_20171212_12_05_55_Pro.jpg'),
(24, 'uml', 'OOAD_with_UML.pdf', './uploads/OOAD_with_UML.pdf'),
(25, 'dbms', 'database system concepts korth.pdf', './uploads/database system concepts korth.pdf'),
(26, 'java', 'Java Database Programming with JDBC - his.pdf', './uploads/Java Database Programming with JDBC - his.pdf'),
(27, 'uml', 'OOAD_with_UML.pdf', './uploads/OOAD_with_UML.pdf'),
(19, 'as', 'John.Wick.Chapter.2.2017.1080p.WEB-DL.6CH.ShAaNiG.srt', './uploads/John.Wick.Chapter.2.2017.1080p.WEB-DL.6CH.ShAaNiG.srt'),
(28, '', 'downloadfile.php', './uploads/downloadfile.php');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `clzRollNo` varchar(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `unitTest1` int(2) NOT NULL,
  `unitTest2` int(11) NOT NULL,
  `labPerformance` int(11) NOT NULL,
  `practicalExam` int(11) NOT NULL,
  `attendance` int(11) NOT NULL,
  `assignment` int(11) NOT NULL,
  `finalAssessment` int(11) NOT NULL,
  `extraCredit` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`clzRollNo`, `subject`, `unitTest1`, `unitTest2`, `labPerformance`, `practicalExam`, `attendance`, `assignment`, `finalAssessment`, `extraCredit`) VALUES
('56', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Engineering Drawing', 5, 5, 5, 5, 5, 5, 30, 0),
('67', 'Database Management Systems', 5, 5, 5, 5, 5, 5, 30, 0),
('89', 'Database Management Systems', 5, 5, 5, 5, 5, 5, 30, 0),
('', 'Communication Techniques', 5, 5, 5, 5, 5, 5, 30, 0),
('', 'Communication Techniques', 5, 5, 5, 5, 5, 5, 30, 0),
('34', 'Communication Techniques', 5, 5, 5, 5, 5, 5, 30, 0),
('23', 'Communication Techniques', 5, 5, 5, 5, 5, 5, 30, 4),
('', 'Programming in C', 5, 5, 5, 5, 5, 5, 30, 0),
('', 'Programming in C', 5, 5, 5, 5, 5, 5, 30, 0),
('', 'Programming in C', 5, 5, 5, 5, 5, 5, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetailinfo`
--

CREATE TABLE `studentdetailinfo` (
  `PuRegis` varchar(100) NOT NULL,
  `ClzRegis` varchar(100) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetailinfo`
--

INSERT INTO `studentdetailinfo` (`PuRegis`, `ClzRegis`, `Semester`, `id`) VALUES
('123', '12', 'I', 182),
('2015-1-18-1005', 'bese437', 'V', 179),
('2015-1-18-1005', 'GCS4896', 'V', 174);

-- --------------------------------------------------------

--
-- Table structure for table `subjectteach`
--

CREATE TABLE `subjectteach` (
  `id` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `TeacherId` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectteach`
--

INSERT INTO `subjectteach` (`id`, `Subject`, `TeacherId`) VALUES
(59, 'Project I', '456'),
(58, 'Programming in Java', '456'),
(57, 'Network Programming', '7888'),
(56, 'Distributed Systems', '7888'),
(55, 'Database Management Systems', '7888'),
(54, 'Web Technology', '7888'),
(53, 'Engineering Mathematics III', '456'),
(52, 'Engineering Drawing', '456'),
(51, 'Communication Techniques', '456'),
(50, 'Computer Graphics', '666'),
(49, 'Programming in Java', '666'),
(48, 'Programming in C', '666'),
(60, 'Artificial Intelligence and Neural Networks', '456'),
(61, 'Analysis and Design of Algorithms', '456'),
(62, 'Communication Techniques', '7894'),
(63, 'Logic Circuits', '7894'),
(64, 'MIcroprocessor and Assembly Language Programming', '7894'),
(65, 'Computer Organization and Architecture', '7894'),
(66, 'System Programming', '7894'),
(67, 'Principles of Programming Languages', '7894'),
(68, 'Programming in C', 'gcs456'),
(69, 'Web Technology', 'gcs456'),
(70, 'Data Structure and Algorithms', 'gcs456');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetailinfo`
--

CREATE TABLE `teacherdetailinfo` (
  `id` int(11) NOT NULL,
  `TeacherId` varchar(50) NOT NULL,
  `Speciality` varchar(50) NOT NULL,
  `EnrollYear` date NOT NULL,
  `Experience` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdetailinfo`
--

INSERT INTO `teacherdetailinfo` (`id`, `TeacherId`, `Speciality`, `EnrollYear`, `Experience`) VALUES
(180, '456', 'javaspecialist', '2018-02-05', 'five year of experience'),
(177, '7888', 'network specialist', '2018-01-17', 'no '),
(183, 'gcs456', 'React Native ', '2016-06-08', 'five'),
(181, '7894', 'nthg', '2018-02-27', 'dsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commoninfo`
--
ALTER TABLE `commoninfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentdetailinfo`
--
ALTER TABLE `studentdetailinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectteach`
--
ALTER TABLE `subjectteach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherdetailinfo`
--
ALTER TABLE `teacherdetailinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commoninfo`
--
ALTER TABLE `commoninfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `studentdetailinfo`
--
ALTER TABLE `studentdetailinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `subjectteach`
--
ALTER TABLE `subjectteach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `teacherdetailinfo`
--
ALTER TABLE `teacherdetailinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
