-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2017 at 04:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coursedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ah_diversity`
--

CREATE TABLE IF NOT EXISTS `ah_diversity` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ah_ethics`
--

CREATE TABLE IF NOT EXISTS `ah_ethics` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `art_humanity`
--

CREATE TABLE IF NOT EXISTS `art_humanity` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_humanity`
--

INSERT INTO `art_humanity` (`subject`, `course_code`, `course_name`, `credit`) VALUES
('ENGL', 2200, 'Oral & Written Comm. for CS (Gen Ed. AH)', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cs_courses`
--

CREATE TABLE IF NOT EXISTS `cs_courses` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_courses`
--

INSERT INTO `cs_courses` (`subject`, `course_code`) VALUES
('ATMO', 3010),
('ATMO', 3040),
('ATMO', 3150),
('ATMO', 3250),
('ATMO', 4080),
('ATMO', 4100),
('ATMO', 4120),
('ATMO', 4150),
('ATMO', 4160),
('ATMO', 4200),
('ATMO', 4500),
('ATMO', 4710),
('ATMO', 4870),
('BIOL', 1110),
('BIOL', 1120),
('BIOL', 1220),
('BIOL', 2200),
('BIOL', 2350),
('BIOL', 2400),
('BIOL', 3150),
('BIOL', 4190),
('CHEM', 1210),
('CHEM', 2210),
('CHEM', 2220),
('CHEM', 3130),
('CHEM', 3140),
('CHEM', 3440),
('CHEM', 3450),
('CHEM', 4030),
('CHEM', 4430),
('CHEM', 4500),
('CHEN', 2010),
('CHEN', 2020),
('CHEN', 2050),
('CHEN', 3030),
('CHEN', 3040),
('CHEN', 3060),
('CHEN', 3080),
('CHEN', 3100),
('CHEN', 3110),
('CHEN', 3170),
('CHEN', 4030),
('CHEN', 4090),
('CHEN', 4100),
('CHEN', 4130),
('CIVE', 2040),
('CIVE', 2260),
('CIVE', 3010),
('CIVE', 3100),
('CIVE', 3300),
('CIVE', 3400),
('CIVE', 3500),
('CIVE', 3520),
('CIVE', 3620),
('CIVE', 3720),
('CIVE', 4310),
('CIVE', 4520),
('CIVE', 4600),
('COMP', 1010),
('COMP', 1020),
('COMP', 2010),
('COMP', 2030),
('COMP', 2040),
('COMP', 3010),
('COMP', 3040),
('COMP', 3050),
('COMP', 3080),
('COMP', 3090),
('COMP', 3100),
('COMP', 3500),
('COMP', 3611),
('COMP', 4040),
('COMP', 4050),
('COMP', 4060),
('COMP', 4110),
('COMP', 4120),
('COMP', 4130),
('COMP', 4140),
('COMP', 4200),
('COMP', 4210),
('COMP', 4220),
('COMP', 4230),
('COMP', 4270),
('COMP', 4280),
('COMP', 4290),
('COMP', 4420),
('COMP', 4500),
('COMP', 4510),
('COMP', 4570),
('COMP', 4610),
('COMP', 4611),
('COMP', 4620),
('COMP', 4630),
('EECE', 2010),
('EECE', 2020),
('EECE', 2130),
('EECE', 2140),
('EECE', 2650),
('EECE', 3550),
('EECE', 3620),
('EECE', 3650),
('EECE', 3660),
('EECE', 4030),
('EECE', 4110),
('EECE', 4130),
('EECE', 4140),
('EECE', 4180),
('EECE', 4210),
('EECE', 4230),
('EECE', 4240),
('EECE', 4260),
('EECE', 4280),
('EECE', 4290),
('EECE', 4410),
('EECE', 4440),
('EECE', 4450),
('EECE', 4500),
('ENGL', 1010),
('ENGL', 1020),
('ENGL', 2200),
('ENGN', 2050),
('ENGN', 2070),
('ENVI', 2010),
('ENVI', 2020),
('ENVI', 3010),
('ENVI', 3070),
('GEIL', 3080),
('GEOL', 3070),
('GEOL', 3140),
('GEOL', 3190),
('GEOL', 3310),
('MATH', 1310),
('MATH', 1320),
('MATH', 3210),
('MATH', 3220),
('MATH', 3860),
('MECH', 4730),
('MLSC', 4500),
('PHYS', 1410),
('PHYS', 1440),
('PHYS', 1610),
('PHYS', 1640),
('PHYS', 2040),
('PHYS', 2100),
('PHYS', 2450),
('PHYS', 2690),
('PHYS', 3160),
('PHYS', 3380),
('PHYS', 3530),
('PHYS', 3540),
('PHYS', 4110),
('PHYS', 4130),
('PHYS', 4170),
('PHYS', 4350),
('PHYS', 4410),
('PLAS', 2110),
('PLAS', 2470),
('PLAS', 3140),
('PLAS', 3480),
('PLAS', 4180);

-- --------------------------------------------------------

--
-- Table structure for table `cs_elective`
--

CREATE TABLE IF NOT EXISTS `cs_elective` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_elective`
--

INSERT INTO `cs_elective` (`subject`, `course_code`, `course_name`, `credit`) VALUES
('COMP', 3090, 'Database I', 3),
('COMP', 3100, 'Database II', 3),
('COMP', 3500, 'Special Topics', 3),
('COMP', 3611, 'Introduction to Computer Security', 3),
('COMP', 4050, 'Parallel Processing', 3),
('COMP', 4060, 'Compiler Construction I', 3),
('COMP', 4110, 'Software Engineering I', 3),
('COMP', 4120, 'Software Engineering II', 3),
('COMP', 4130, 'Data Communications I', 3),
('COMP', 4140, 'Data Communications II', 3),
('COMP', 4200, 'Artificial Intelligence', 3),
('COMP', 4210, 'Data Mining', 3),
('COMP', 4220, 'Machine Learning', 3),
('COMP', 4230, 'Computer Vision I', 3),
('COMP', 4270, 'Computer Graphics I', 3),
('COMP', 4280, 'Computer Graphics', 3),
('COMP', 4290, 'Bioinformatics for CS', 3),
('COMP', 4420, 'Natural Language Processing', 3),
('COMP', 4500, 'Mobile Robotics I', 3),
('COMP', 4510, 'Mobile Robotics II', 3),
('COMP', 4570, 'Computer Security', 3),
('COMP', 4610, 'Graphical User Interface Programming I', 3),
('COMP', 4611, 'Cyber Crime Investigation', 3),
('COMP', 4620, 'Graphical User Interface Programming II', 3),
('COMP', 4630, 'Mobile App Programming I', 3),
('COMP', 4631, 'Mobile App Programming II', 3),
('COMP', 4800, 'Honors Project I', 3),
('COMP', 4810, 'Honors Project II', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cs_project_sequence`
--

CREATE TABLE IF NOT EXISTS `cs_project_sequence` (
  `partOne` varchar(4) NOT NULL,
  `partTwo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_project_sequence`
--

INSERT INTO `cs_project_sequence` (`partOne`, `partTwo`) VALUES
('3090', '3100'),
('4060', 'ALL'),
('4110', '4120'),
('4130', '4140'),
('4130', '5610'),
('4200', '4210'),
('4200', '4220'),
('4200', '4500'),
('4210', '4220'),
('4220', '4230'),
('4220', '4420'),
('4270', '4280'),
('4500', '4510'),
('4610', '4620'),
('5400', '5410'),
('5610', '5620');

-- --------------------------------------------------------

--
-- Table structure for table `cs_required`
--

CREATE TABLE IF NOT EXISTS `cs_required` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_required`
--

INSERT INTO `cs_required` (`subject`, `course_code`, `course_name`, `credit`) VALUES
('COMP', 1010, 'Computing I', 4),
('COMP', 1020, 'Computing II', 4),
('COMP', 2010, 'Computing III', 4),
('COMP', 2030, 'Comp. Org. & Assembly Lang.', 4),
('COMP', 2040, 'Computing IV', 3),
('COMP', 3010, 'Organization of Prog. Lang.', 3),
('COMP', 3040, 'Foundations of Comp Science', 3),
('COMP', 3050, 'Computer Architecture', 3),
('COMP', 3080, 'Intro. to Operating Systems', 3),
('COMP', 4040, 'Analysis of Algorithms', 3);

-- --------------------------------------------------------

--
-- Table structure for table `naturalscience_elective`
--

CREATE TABLE IF NOT EXISTS `naturalscience_elective` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `naturalscience_elective`
--

INSERT INTO `naturalscience_elective` (`subject`, `course_code`, `course_name`, `credit`) VALUES
('ATMO', 3010, 'Atmospheric Thermodynamics', 3),
('ATMO', 3040, 'Methods in Meteorology', 3),
('ATMO', 3080, 'Synoptic Meteorology', 3),
('ATMO', 3250, 'Weather Communications', 3),
('ATMO', 4080, 'The Climate System', 3),
('ATMO', 4100, 'Advanced Forecasting', 3),
('ATMO', 4120, 'Synoptic Weather Patterns', 3),
('ATMO', 4150, 'Atmospheric Dynamics', 3),
('ATMO', 4160, 'Advanced Atmospheric Dynamics', 3),
('ATMO', 4200, 'Operational Numerical Weather Prediction', 3),
('ATMO', 4500, 'Satellite and Radar Meteorology', 3),
('ATMO', 4710, 'Air Pollution', 3),
('ATMO', 4870, 'Cloud Physics', 3),
('BIOL', 1110, 'Principles of Biology I', 4),
('BIOL', 1120, 'Principles of Biology II', 4),
('BIOL', 2200, 'Principles of Cell Biology', 3),
('BIOL', 2350, 'Genetics', 3),
('BIOL', 2400, 'Ecol., Evol., & Conservat.', 3),
('BIOL', 3150, 'Principles of Ecology', 3),
('BIOL', 4190, 'Biochemistry', 3),
('CHEM', 1210, 'Chemistry I', 4),
('CHEM', 1220, 'Chemistry II', 4),
('CHEM', 2210, 'Organic Chemistry I', 4),
('CHEM', 2220, 'Organic Chemistry II', 4),
('CHEM', 3130, 'Analytical Chemistry I', 3),
('CHEM', 3140, 'Analytical Chemistry II', 4),
('CHEM', 3440, 'Physical Chemistry I', 4),
('CHEM', 3450, 'Physical Chemistry II', 4),
('CHEM', 4030, 'Introductory Polymer Science I', 3),
('CHEM', 4430, 'Adv. Inorganic Chemistry', 4),
('CHEM', 4500, 'Biochemistry I', 3),
('ENVI', 2010, 'Earth & Environmental Systems I', 3),
('ENVI', 2020, 'Earth & Environmental Systems II', 3),
('ENVI', 3010, 'GIS in Earth and Environmental Science', 3),
('GEIL', 3080, 'Earth Materials II', 4),
('GEOL', 3070, 'Earth Materials I', 4),
('GEOL', 3140, 'Hydrogeology', 3),
('GEOL', 3150, 'Environmental Geochemistry', 3),
('GEOL', 3190, 'Surface Processes', 3),
('GEOL', 3310, 'Earth History', 4),
('PHYS', 1410, 'Physics I', 4),
('PHYS', 1440, 'Physics II', 4),
('PHYS', 1610, 'Honors Physics I', 4),
('PHYS', 1640, 'Honors Physics II', 4),
('PHYS', 2040, 'Introduction to Radiological Sciences', 3),
('PHYS', 2450, 'Physical Propertiesof Matter', 3),
('PHYS', 2690, 'Honors Physics III', 3),
('PHYS', 3160, 'Science and Technology in an Improvirish', 3),
('PHYS', 3380, 'Optics and Waves', 3),
('PHYS', 3530, 'Electromagnetism I', 3),
('PHYS', 3540, 'Electromagnetism II', 3),
('PHYS', 4110, 'Physics Perspectives', 3),
('PHYS', 4130, 'Mechanics', 3),
('PHYS', 4170, 'Space Science Mission Design', 3),
('PHYS', 4350, 'Intro Quantum Mech. I', 3),
('PHYS', 4410, 'Radiochemistry', 3);

-- --------------------------------------------------------

--
-- Table structure for table `social_science`
--

CREATE TABLE IF NOT EXISTS `social_science` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ss_diversity`
--

CREATE TABLE IF NOT EXISTS `ss_diversity` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ss_ethics`
--

CREATE TABLE IF NOT EXISTS `ss_ethics` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supporting_courses`
--

CREATE TABLE IF NOT EXISTS `supporting_courses` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supporting_courses`
--

INSERT INTO `supporting_courses` (`subject`, `course_code`, `course_name`, `credit`) VALUES
('EECE', 2650, 'Logic Design', 3),
('MATH', 1310, 'Calculus I', 4),
('MATH', 1320, 'Calculus II', 4),
('MATH', 3210, 'Discrete Structures I', 3),
('MATH', 3220, 'Discrete Structures II', 3),
('MATH', 3860, 'Probability & Statistics I', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tech_elective`
--

CREATE TABLE IF NOT EXISTS `tech_elective` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` char(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_elective`
--

INSERT INTO `tech_elective` (`subject`, `course_code`, `course_name`, `credit`) VALUES
('CHEN', 2010, 'Material Balances', 3),
('CHEN', 2020, 'Energy Balances & Intro to Thermodynamic', 3),
('CHEN', 2050, 'Fundamentals of Electricity', 3),
('CHEN', 3030, 'Fluid Mechanics', 3),
('CHEN', 3040, 'Heat Transfer', 3),
('CHEN', 3060, 'Transport Phenomena', 3),
('CHEN', 3080, 'Intro to Material Sci. & Eng.', 3),
('CHEN', 3100, 'Separation Processes with Mass Transfer', 3),
('CHEN', 3110, 'Chemical Eng. Thermodynamics', 3),
('CHEN', 3170, 'Applied Eng. Problem Solving', 3),
('CHEN', 4030, 'Chemical Reaction Eng.', 3),
('CHEN', 4090, 'Eng. Economics & Process Analysis (IL),', 3),
('CHEN', 4100, 'Plant Design (IL), (CTPS), (AIL)', 3),
('CHEN', 4130, 'Process Dynamics & Control', 3),
('CIVE', 2040, 'Strength of Materials', 3),
('CIVE', 2260, 'Geomatics', 3),
('CIVE', 3010, 'Fluid Mechanics', 3),
('CIVE', 3100, 'Engineering Materials', 3),
('CIVE', 3300, 'Soil Mechanics', 3),
('CIVE', 3400, 'Transportation Engineering', 3),
('CIVE', 3500, 'Structural Analysis', 3),
('CIVE', 3520, 'Reinforced Concrete Design', 3),
('CIVE', 3620, 'Environmental Engineering', 3),
('CIVE', 3720, 'Civil Engineering Systems', 3),
('CIVE', 4310, 'Foundation & Soil Engineering', 3),
('CIVE', 4520, 'Steel Design', 3),
('CIVE', 4600, 'Water Resource Engineering', 3),
('EECE', 2010, 'Circuit Theory I', 3),
('EECE', 2020, 'Circuit Theory II', 3),
('EECE', 2130, 'Fundamentals of Electricity', 3),
('EECE', 2140, 'Fundamentals of Sound Recording', 3),
('EECE', 3550, 'Electromechanics', 3),
('EECE', 3620, 'Signals and Systems I', 3),
('EECE', 3650, 'Electronics I', 3),
('EECE', 3660, 'Electronics II', 3),
('EECE', 4030, 'Microwave Engineering', 3),
('EECE', 4110, 'Medical Diagnostic Imaging', 3),
('EECE', 4130, 'Linear Feedback System', 3),
('EECE', 4140, 'Integrated Power Systems', 3),
('EECE', 4180, 'Wireless Communication', 3),
('EECE', 4210, 'Real Time Digital Signal Processing', 3),
('EECE', 4230, 'Introduction to Solid State Electronics', 3),
('EECE', 4240, 'Computational Methods for Power System A', 3),
('EECE', 4260, 'Power Systems Stability and Control', 3),
('EECE', 4280, 'Alternative Energy Sources', 3),
('EECE', 4290, 'Electric Vehicle Technology', 3),
('EECE', 4410, 'Introduction to Biosensors', 3),
('EECE', 4440, 'Power Distribution System', 3),
('EECE', 4450, 'Analog Devices and Techniques', 3),
('EECE', 4500, 'Advanced Digital System Design', 3),
('ENGN', 2050, 'Statics', 3),
('ENGN', 2070, 'Dynamics', 3),
('MECH', 4730, 'Design Theory & Constraints', 3),
('MLSC', 4500, 'Human Biochemistry', 3),
('PLAS', 2110, 'Eng. Mechanics', 3),
('PLAS', 2470, 'Thermodynamics', 3),
('PLAS', 3140, 'Fluid Flow', 3),
('PLAS', 3480, 'Heat Transfer', 3),
('PLAS', 4180, 'Product Design', 3);

-- --------------------------------------------------------

--
-- Table structure for table `writing`
--

CREATE TABLE IF NOT EXISTS `writing` (
  `subject` varchar(4) NOT NULL,
  `course_code` int(4) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `credit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writing`
--

INSERT INTO `writing` (`subject`, `course_code`, `course_name`, `credit`) VALUES
('ENGL', 1010, 'College Writing I', 3),
('ENGL', 1020, 'College Writing II', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ah_diversity`
--
ALTER TABLE `ah_diversity`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `ah_ethics`
--
ALTER TABLE `ah_ethics`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `art_humanity`
--
ALTER TABLE `art_humanity`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `cs_courses`
--
ALTER TABLE `cs_courses`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `cs_elective`
--
ALTER TABLE `cs_elective`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `cs_project_sequence`
--
ALTER TABLE `cs_project_sequence`
 ADD PRIMARY KEY (`partOne`,`partTwo`);

--
-- Indexes for table `cs_required`
--
ALTER TABLE `cs_required`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `naturalscience_elective`
--
ALTER TABLE `naturalscience_elective`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `social_science`
--
ALTER TABLE `social_science`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `ss_diversity`
--
ALTER TABLE `ss_diversity`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `ss_ethics`
--
ALTER TABLE `ss_ethics`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `supporting_courses`
--
ALTER TABLE `supporting_courses`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `tech_elective`
--
ALTER TABLE `tech_elective`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Indexes for table `writing`
--
ALTER TABLE `writing`
 ADD PRIMARY KEY (`subject`,`course_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ah_diversity`
--
ALTER TABLE `ah_diversity`
ADD CONSTRAINT `ah_diversity_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ah_ethics`
--
ALTER TABLE `ah_ethics`
ADD CONSTRAINT `ah_ethics_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `art_humanity`
--
ALTER TABLE `art_humanity`
ADD CONSTRAINT `art_humanity_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cs_elective`
--
ALTER TABLE `cs_elective`
ADD CONSTRAINT `cs_elective_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cs_required`
--
ALTER TABLE `cs_required`
ADD CONSTRAINT `cs_required_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `naturalscience_elective`
--
ALTER TABLE `naturalscience_elective`
ADD CONSTRAINT `naturalscience_elective_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_science`
--
ALTER TABLE `social_science`
ADD CONSTRAINT `social_science_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ss_diversity`
--
ALTER TABLE `ss_diversity`
ADD CONSTRAINT `ss_diversity_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ss_ethics`
--
ALTER TABLE `ss_ethics`
ADD CONSTRAINT `ss_ethics_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supporting_courses`
--
ALTER TABLE `supporting_courses`
ADD CONSTRAINT `supporting_courses_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tech_elective`
--
ALTER TABLE `tech_elective`
ADD CONSTRAINT `tech_elective_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `writing`
--
ALTER TABLE `writing`
ADD CONSTRAINT `writing_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `cs_courses` (`subject`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
