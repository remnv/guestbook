-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 12:57 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_lomba`
--

CREATE TABLE IF NOT EXISTS `m_lomba` (
`id_lomba` int(10) NOT NULL,
  `nama_lomba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_sekolah`
--

CREATE TABLE IF NOT EXISTS `m_sekolah` (
`id_sekolah` int(10) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_team`
--

CREATE TABLE IF NOT EXISTS `m_team` (
`id_team` int(10) NOT NULL,
  `nama_team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_tipe`
--

CREATE TABLE IF NOT EXISTS `m_tipe` (
`id_tipe` int(10) NOT NULL,
  `nama_tipe` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `m_tipe`
--

INSERT INTO `m_tipe` (`id_tipe`, `nama_tipe`) VALUES
(1, 'Supporter'),
(2, 'Player'),
(3, 'Coach');

-- --------------------------------------------------------

--
-- Table structure for table `s_group`
--

CREATE TABLE IF NOT EXISTS `s_group` (
`id_group` int(10) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `powerlevel` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `s_group`
--

INSERT INTO `s_group` (`id_group`, `group_name`, `powerlevel`) VALUES
(1, 'Administrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_module`
--

CREATE TABLE IF NOT EXISTS `s_module` (
`id_module` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `min_powerlevel` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `s_module`
--

INSERT INTO `s_module` (`id_module`, `name`, `min_powerlevel`) VALUES
(11, 'Users', 2);

-- --------------------------------------------------------

--
-- Table structure for table `s_user`
--

CREATE TABLE IF NOT EXISTS `s_user` (
`id_user` int(10) NOT NULL,
  `kode_user` int(12) NOT NULL,
  `id_group` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `s_user`
--

INSERT INTO `s_user` (`id_user`, `kode_user`, `id_group`, `username`, `password`, `name`, `tgl_dibuat`, `jk`) VALUES
(1, 220411, 1, 'admin', '2Apa3b3DnRhYzhv7MLN4fW83cVAiGZyjUEVhB9SRtuf/fR0Zkj6eviSS19uCcjiiH0yoA1vnNZZxHnJxK5L0VQ==', 'Rian', '2016-06-23 06:24:55', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `t_tamu`
--

CREATE TABLE IF NOT EXISTS `t_tamu` (
`id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `id_lomba` int(10) NOT NULL,
  `id_sekolah` int(10) NOT NULL,
  `id_team` int(10) NOT NULL,
  `id_tipe` int(10) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_akses`
--
CREATE TABLE IF NOT EXISTS `v_akses` (
`id_user` int(10)
,`kode_user` int(12)
,`group_name` varchar(255)
,`username` varchar(50)
,`password` varchar(255)
,`name` varchar(50)
,`jk` varchar(10)
,`powerlevel` int(10)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_report`
--
CREATE TABLE IF NOT EXISTS `v_report` (
`id_tamu` int(11)
,`nama_tamu` varchar(50)
,`nama_sekolah` varchar(50)
,`nama_team` varchar(50)
,`nama_tipe` varchar(50)
,`nama_lomba` varchar(50)
,`no_hp` int(15)
,`tanggal` date
,`email` varchar(50)
,`comment` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tamu`
--
CREATE TABLE IF NOT EXISTS `v_tamu` (
`id_team` int(10)
,`nama_team` varchar(50)
,`nama_lomba` varchar(50)
,`jml_supporter` decimal(23,0)
,`jml_player` decimal(23,0)
,`jml_coach` decimal(23,0)
);
-- --------------------------------------------------------

--
-- Structure for view `v_akses`
--
DROP TABLE IF EXISTS `v_akses`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_akses` AS select `u`.`id_user` AS `id_user`,`u`.`kode_user` AS `kode_user`,`g`.`group_name` AS `group_name`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`name` AS `name`,`u`.`jk` AS `jk`,`g`.`powerlevel` AS `powerlevel` from (`s_user` `u` join `s_group` `g`) where (`u`.`id_group` = `g`.`id_group`);

-- --------------------------------------------------------

--
-- Structure for view `v_report`
--
DROP TABLE IF EXISTS `v_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_report` AS select `ta`.`id_tamu` AS `id_tamu`,`ta`.`nama_tamu` AS `nama_tamu`,`se`.`nama_sekolah` AS `nama_sekolah`,`te`.`nama_team` AS `nama_team`,`ti`.`nama_tipe` AS `nama_tipe`,`lo`.`nama_lomba` AS `nama_lomba`,`ta`.`no_hp` AS `no_hp`,`ta`.`tanggal` AS `tanggal`,`ta`.`email` AS `email`,`ta`.`comment` AS `comment` from ((((`t_tamu` `ta` left join `m_team` `te` on((`ta`.`id_team` = `te`.`id_team`))) left join `m_tipe` `ti` on((`ta`.`id_tipe` = `ti`.`id_tipe`))) left join `m_sekolah` `se` on((`ta`.`id_sekolah` = `se`.`id_sekolah`))) left join `m_lomba` `lo` on((`ta`.`id_lomba` = `lo`.`id_lomba`))) order by `se`.`nama_sekolah`;

-- --------------------------------------------------------

--
-- Structure for view `v_tamu`
--
DROP TABLE IF EXISTS `v_tamu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tamu` AS select `ta`.`id_team` AS `id_team`,`te`.`nama_team` AS `nama_team`,`lo`.`nama_lomba` AS `nama_lomba`,sum(if((`ta`.`id_tipe` = 1),1,0)) AS `jml_supporter`,sum(if((`ta`.`id_tipe` = 2),1,0)) AS `jml_player`,sum(if((`ta`.`id_tipe` = 3),1,0)) AS `jml_coach` from ((`t_tamu` `ta` left join `m_team` `te` on((`ta`.`id_team` = `te`.`id_team`))) left join `m_lomba` `lo` on((`ta`.`id_lomba` = `lo`.`id_lomba`))) group by `ta`.`id_team`,`lo`.`nama_lomba`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_lomba`
--
ALTER TABLE `m_lomba`
 ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `m_sekolah`
--
ALTER TABLE `m_sekolah`
 ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `m_team`
--
ALTER TABLE `m_team`
 ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `m_tipe`
--
ALTER TABLE `m_tipe`
 ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `s_group`
--
ALTER TABLE `s_group`
 ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `s_module`
--
ALTER TABLE `s_module`
 ADD PRIMARY KEY (`id_module`);

--
-- Indexes for table `s_user`
--
ALTER TABLE `s_user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `t_tamu`
--
ALTER TABLE `t_tamu`
 ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_lomba`
--
ALTER TABLE `m_lomba`
MODIFY `id_lomba` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_sekolah`
--
ALTER TABLE `m_sekolah`
MODIFY `id_sekolah` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_team`
--
ALTER TABLE `m_team`
MODIFY `id_team` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_tipe`
--
ALTER TABLE `m_tipe`
MODIFY `id_tipe` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `s_group`
--
ALTER TABLE `s_group`
MODIFY `id_group` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_module`
--
ALTER TABLE `s_module`
MODIFY `id_module` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `s_user`
--
ALTER TABLE `s_user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_tamu`
--
ALTER TABLE `t_tamu`
MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `s_user`
--
ALTER TABLE `s_user`
ADD CONSTRAINT `id_group` FOREIGN KEY (`id_group`) REFERENCES `s_group` (`id_group`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
