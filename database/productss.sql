

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `1projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `productss`
--

CREATE TABLE `productss` (
  `id` int(50) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productss`
--

INSERT INTO `productss` (`id`, `brand`, `category`, `price`, `description`, `name`) VALUES
(28, 'nike', 'normal', 250, 'CHAUSSURES BASSES Football junior NIKE VAPOR 13 CL', 'Football junior NIKE '),
(29, 'got', 'got customized', 100, 'house stark outfit', 'house stark '),
(30, 'addias', 'normal', 50, 'BALLON Football ADIDAS TANGO STR CPT', 'BALLON Football ADIDAS'),
(31, 'got', 'got customized', 100, 'house lanister', 'house lanister outfit'),
(32, 'adidas', 'normal', 50, 'SAC DE FRAPPE Boxe ADIDAS SAC TOILE 90', 'SAC DE FRAPPE Boxe');


--
-- Indexes for table `productss`
--
ALTER TABLE `productss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productss`
--
ALTER TABLE `productss`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;


