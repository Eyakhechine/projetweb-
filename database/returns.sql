

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `1projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `returnss`
--

CREATE TABLE `returnss` (
  `us_id` int(11) NOT NULL,
  `us_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `typee` varchar(15) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Indexes for table `returnss`
--
ALTER TABLE `returnss`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `returnss`
--
ALTER TABLE `returnss`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;


