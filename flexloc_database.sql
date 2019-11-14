-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2019 at 11:23 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flexloc`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_table`
--

DROP TABLE IF EXISTS `department_table`;
CREATE TABLE IF NOT EXISTS `department_table` (
  `Department No.` int(10) NOT NULL,
  `Department Name` text NOT NULL,
  `Tasks` text NOT NULL,
  PRIMARY KEY (`Department No.`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_table`
--

INSERT INTO `department_table` (`Department No.`, `Department Name`, `Tasks`) VALUES
(1245, 'ICT', ''),
(123, 'Finance', ''),
(22, 'CRM', '45'),
(26, 'ICT', 'Add a center');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

DROP TABLE IF EXISTS `employee_table`;
CREATE TABLE IF NOT EXISTS `employee_table` (
  `Employee No.` int(10) NOT NULL,
  `Department` text NOT NULL,
  `Emp Name` text NOT NULL,
  `Password` text NOT NULL,
  `Tasks` text NOT NULL,
  `Dept No.` int(10) NOT NULL,
  `Leave Days` int(200) NOT NULL,
  PRIMARY KEY (`Employee No.`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`Employee No.`, `Department`, `Emp Name`, `Password`, `Tasks`, `Dept No.`, `Leave Days`) VALUES
(123, 'ICT', 'Tested', 'My password', '0', 2, 21),
(1232, 'ICT', 'Emmanuel', 'tester', '0', 2, 21),
(22, 'Operations', 'Employee2', 'employee2password', '0', 2, 21),
(5567, 'Data Quality', 'Kennedy Kiarie', 'mypassword', '0', 2, 11),
(555, 'Data Quality', 'Patrick', 'Patrick2019', '0', 2, 21),
(2020, 'Finance', 'Charles Waema ', 'Waema', '0', 2, 19),
(15010, 'Data Quality', 'James Kuria ', 'yourpassword', '0', 2, 15),
(101, 'CRM', 'John', '123456', '0', 2, -10),
(2, 'ICT', 'Ingrid', 'Ingrid', '0', 2, 18);

-- --------------------------------------------------------

--
-- Table structure for table `leave_days_report`
--

DROP TABLE IF EXISTS `leave_days_report`;
CREATE TABLE IF NOT EXISTS `leave_days_report` (
  `Employee_Name` text NOT NULL,
  `No_of_Days` int(20) NOT NULL,
  `Start_Day` date NOT NULL,
  `Report_Day` date NOT NULL,
  `Status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_days_report`
--

INSERT INTO `leave_days_report` (`Employee_Name`, `No_of_Days`, `Start_Day`, `Report_Day`, `Status`) VALUES
('Kennedy Kiarie', 3, '2019-10-01', '2019-10-04', ''),
('Kennedy Kiarie', 3, '2019-10-01', '2019-10-04', 'Pending'),
('John', 31, '2019-10-03', '2019-10-16', 'Pending'),
('Ingrid', 3, '2019-10-14', '2019-10-18', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

DROP TABLE IF EXISTS `logintbl`;
CREATE TABLE IF NOT EXISTS `logintbl` (
  `Employee No.` int(10) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Role` text NOT NULL,
  `Dept. No.` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`Employee No.`, `Username`, `Password`, `Role`, `Dept. No.`) VALUES
(1, 'Emerald', 'EMERALD12345', 'ICT SUPPORT', 6777);

-- --------------------------------------------------------

--
-- Table structure for table `normal_tbl`
--

DROP TABLE IF EXISTS `normal_tbl`;
CREATE TABLE IF NOT EXISTS `normal_tbl` (
  `Username` text NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workforce_notice`
--

DROP TABLE IF EXISTS `workforce_notice`;
CREATE TABLE IF NOT EXISTS `workforce_notice` (
  `Sender` text NOT NULL,
  `Notice_sent` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workforce_notice`
--

INSERT INTO `workforce_notice` (`Sender`, `Notice_sent`) VALUES
('noticesender', 'notice_sent'),
('', 'Test last'),
('', 'Last test'),
('', 'Last test'),
('Batman', 'noticesent'),
('Batman', 'batman was here:-)'),
('Batman', 'Hello peeps!'),
('Emmanuel', 'Hello team'),
('Irax', 'Hello Teamhere');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
