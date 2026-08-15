-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2026 at 04:43 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EMPLOYEE_ID` int NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(25) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PHONE_NUMBER` varchar(20) DEFAULT NULL,
  `HIRE_DATE` date DEFAULT NULL,
  `JOB_ID` varchar(15) DEFAULT NULL,
  `SALARY` decimal(10,2) DEFAULT NULL,
  `COMMISSION_PCT` decimal(5,2) DEFAULT NULL,
  `MANAGER_ID` int DEFAULT NULL,
  `DEPARTMENT_ID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EMPLOYEE_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PHONE_NUMBER`, `HIRE_DATE`, `JOB_ID`, `SALARY`, `COMMISSION_PCT`, `MANAGER_ID`, `DEPARTMENT_ID`) VALUES
(100, 'Steven', 'King', 'not available', '515.123.4567', '1987-06-17', 'AD_PRES', '24000.00', '0.00', 0, 90),
(101, 'Neena', 'Kochhar', 'not available', '515.123.4568', '1987-06-18', 'AD_VP', '17000.00', '0.00', 100, 90),
(102, 'Lex', 'De Haan', 'not available', '515.123.4569', '1987-06-19', 'AD_VP', '17000.00', '0.00', 100, 90),
(103, 'Alexander', 'Hunold', 'not available', '590.423.4567', '1987-06-20', 'IT_PROG', '9000.00', '0.00', 102, 60),
(104, 'Bruce', 'Ernst', 'not available', '590.423.4568', '1987-06-21', 'IT_PROG', '6000.00', '0.00', 103, 60),
(105, 'David', 'Austin', 'not available', '590.423.4569', '1987-06-22', 'IT_PROG', '8000.00', '0.00', 103, 60),
(106, 'Valli', 'Pataballa', 'not available', '590.423.4560', '1987-06-23', 'IT_PROG', '4800.00', '0.00', 103, 60),
(107, 'Diana', 'Lorentz', 'not available', '590.423.5567', '1987-06-24', 'IT_PROG', '4200.00', '0.00', 103, 60),
(108, 'Nancy', 'Greenberg', 'not available', '515.124.4569', '1987-06-25', 'FI_MGR', '12000.00', '0.00', 101, 100),
(206, 'William', 'Gietz', 'not available', '515.123.8181', '1987-10-01', 'AC_ACCOUNT', '8300.00', '0.00', 205, 110);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
