--
-- Database: `e_attendance`
--
CREATE DATABASE IF NOT EXISTS `e_attendance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_attendance`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `hour` int(11) NOT NULL,
  `admission_no` text NOT NULL,
  `subject_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medical_leave`
--

CREATE TABLE IF NOT EXISTS `medical_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admission_no` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `admission_no` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `dob` varchar(15) NOT NULL,
  `branch` text NOT NULL,
  `semester` int(11) NOT NULL,
  `batch` text NOT NULL,
  `roll_no` int(11) NOT NULL,
  `parant_mobile` text NOT NULL,
  `profile_pic` text NOT NULL,
  PRIMARY KEY (`admission_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `branch` text NOT NULL,
  `semester` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject_allotment`
--

CREATE TABLE IF NOT EXISTS `subject_allotment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `branch` text NOT NULL,
  `semester` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject_log`
--

CREATE TABLE IF NOT EXISTS `subject_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(15) NOT NULL,
  `hour` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `branch` text NOT NULL,
  `semester` int(11) NOT NULL,
  `log` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `branch` text,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
