-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 15, 2023 at 02:22 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `author_slug` varchar(255) DEFAULT NULL,
  `author_avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `author_name`, `author_slug`, `author_avatar`) VALUES
(1, 'Jeff Donato', 'jeff-donato', NULL),
(2, 'Chris Rutledge', 'chris-rutledge', NULL),
(3, 'R.W. Hurst', 'r-w-hurst', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `post_id`, `slug`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'news', 'News', '2023-12-12 05:22:47', '2023-12-12 05:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(194, 1, 'Great Post!', '2023-12-14 23:13:24', '0000-00-00 00:00:00'),
(195, 1, 'Wonderful Read!', '2023-12-15 02:08:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-12-11-230016', 'App\\Database\\Migrations\\Post', 'default', 'App', 1702346994, 1),
(2, '2023-12-11-230335', 'App\\Database\\Migrations\\Tag', 'default', 'App', 1702346994, 1),
(3, '2023-12-12-021310', 'App\\Database\\Migrations\\AddImagePost', 'default', 'App', 1702347261, 2),
(4, '2023-12-12-034135', 'App\\Database\\Migrations\\UpdatePost', 'default', 'App', 1702352743, 3),
(5, '2023-12-12-034551', 'App\\Database\\Migrations\\CreateCommentTable', 'default', 'App', 1702352786, 4),
(6, '2023-12-12-041635', 'App\\Database\\Migrations\\RemoveContentFromTag', 'default', 'App', 1702354633, 5),
(7, '2023-12-12-052036', 'App\\Database\\Migrations\\AddCategoryTable', 'default', 'App', 1702358555, 6),
(8, '2023-12-12-055807', 'App\\Database\\Migrations\\CreateAuthorTable', 'default', 'App', 1702360980, 7),
(9, '2023-12-12-063407', 'App\\Database\\Migrations\\ChangeAuthorColumns', 'default', 'App', 1702362887, 8),
(10, '2023-12-13-222101', 'App\\Database\\Migrations\\AddMenuFieldToPost', 'default', 'App', 1702506126, 9),
(11, '2023-12-13-222456', 'App\\Database\\Migrations\\AddDefaultFieldToPost', 'default', 'App', 1702506561, 10),
(12, '2023-12-13-230635', 'App\\Database\\Migrations\\AddExcerptField', 'default', 'App', 1702508843, 11),
(13, '2023-12-14-050927', 'App\\Database\\Migrations\\AddAuthoravatarField', 'default', 'App', 1702530643, 12),
(14, '2023-12-14-073956', 'App\\Database\\Migrations\\AutoIncCreatedComment', 'default', 'App', 1702539712, 13);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `is_menu` tinyint(1) NOT NULL DEFAULT '1',
  `view_count` int(11) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_id` int(10) UNSIGNED DEFAULT NULL,
  `excerpt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `slug`, `title`, `content`, `is_menu`, `view_count`, `image`, `created_at`, `updated_at`, `author_id`, `excerpt`) VALUES
(1, 'a-primer-on-the-codes-and-standards-governing-battery-safety-and-compliance', 'A Primer on the Codes and Standards Governing Battery Safety and Compliance', '<p>Batteries have greatly influenced the utility industry, and the evolution of battery chemistries has revolutionized their applications. With the emergence of new technologies and advancements in existing ones, standards committees and safety code writers are working to develop best practices and establish minimum safety guidelines.<br>\r\nThese groups, comprised of volunteers from diverse industry segments, are actively involved in shaping the standards and model codes that govern battery usage and safety. Their efforts are aimed at keeping pace with the rapidly evolving landscape of battery technology and ensuring its safe and efficient implementation.</p>\r\n<p>Battery Applications<br>\r\nBatteries are used in a variety of battery energy storage (BESS) applications.  Below is a list of common utility market applications and how batteries are used to support operations:<br>\r\nGrid Stabilization:  A stronger grid is required to support increased power requirements and demand. More devices are becoming electrified, including automobiles, and are demanding more energy.  Energy storage can help stabilize the grid by providing energy back to the grid when the demand rises and store energy when excess power is available.<br>\r\nRenewable Energy: Renewable sources of energy (solar, wind) generate electricity intermittently, and their outputs fluctuate with weather conditions. Batteries will store excess energy during periods of high renewable generation and discharge the batteries when generation is low.  As a system, this provides a more consistent and reliable source of energy.<br>\r\nMicrogrids and Off-Grid Systems: Batteries help create micro grids that can operate independently from the main power grid.  In remote areas together with renewable energies, batteries can provide electricity to communities without access to the central power grid.<br>\r\nGrid Resilience and Backup Power: Batteries provide backup power during outages and emergencies.  This includes substations that have powered switches, SCADA control systems and end users such as data centers, telecommunications companies, and other mission critical infrastructure for organizations.<br>\r\nDemand Response: Batteries can be used where electricity consumers reduce their demand, following a request from their utility, during peak hours in exchange for incentives.  This helps reduce peak loads while managing demand fluctuations and alleviating strain on the grid.<br>\r\nPeak Shaving: Building owners can reduce their maximum hourly power requirement by knowing the load signature of the building and peak consumption intervals. Peak shaving lets these consumers use batteries to reduce electric charges from peak usage where price per kW is higher to off-peak usage where the price per kW is lower.<br>\r\nElectric Vehicle Integration: As electric vehicles become more prevalent, their batteries can be used to store excess renewable energy and discharge it back to the grid during periods of high demand. </p>\r\n<p><span id=\"more-5904\"></span></p>\r\n<p><a href=\"https://www.electricityforum.com/et-login.php?url=https://online.electricity-today.com/electricity-today/mayjune-2023/~20\" rel=\"noopener\" target=\"_blank\">Read full article in the Electricity Today T&amp;D Magazine – Substation Automation Protection &amp; Maintenance Edition 2023</a><br>\r\n<a href=\"https://www.electricity-today.com/visit-our-advertisers?advertiser=magazine_may_jun_2023_h2scan_page_12_1062w.jpg\" rel=\"noopener\" target=\"_blank\">H2scan advertisement in the magazine may-jun 2023 page 12</a><br>\r\n<a href=\"https://www.electricity-today.com/visit-our-advertisers?advertiser=magazine_may_jun_2023_high_voltage_page_4_800w.jpg\" rel=\"noopener\" target=\"_blank\">High Voltage advertisement in the magazine may-jun 2023 page 4</a><br>\r\n<a href=\"https://www.electricity-today.com/visit-our-advertisers?advertiser=magazine_may_jun_2023_sediver_page_24_800w.jpg\" rel=\"noopener\" target=\"_blank\">Sediver advertisement in the magazine may-jun 2023 page 24</a></p>', 1, 0, 'https://www.electricity-today.com/wp-content/uploads/magazine_may_june_2023_article_5.jpg', '2023-12-12 02:16:03', '2023-12-12 02:16:03', 1, 'Batteries have greatly influenced the utility industry, and the evolution of battery chemistries has revolutionized their applications. With the emergence of new technologies and'),
(2, 'hydrogen-monitoring-in-the-transformer-headspace-compared-to-traditional-in-oil-monitoring', 'Hydrogen Monitoring in the Transformer Headspace Compared to Traditional In-Oil Monitoring', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/1-24-324x160.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', 2, 'By Chris Rutledge, Product Manager, Dynamic Ratings, Inc. Introduction The utilization of online dissolved gas analysis monitoring has proven to be one of the most'),
(3, 'the-distribution-transformer-critical-power-system-component', 'The Distribution Transformer – Critical Power System Component', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/5-17-324x160.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', 3, 'By R.W. Hurst, Editor A distribution transformer is a critical component of the electrical power system, used to reduce the voltage of electrical energy for'),
(4, 'grounding-transformers-explained', 'Grounding Transformers Explained', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/4-19-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(5, 'the-importance-of-risk-assessment-and-the-role-of-reliability-based-dga', 'The importance of risk assessment and the role of Reliability-based DGA', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/3-23-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(6, 'distribution-transformer-dga-the-future-of-monitoring-distribution-systems', 'Distribution Transformer DGA – The Future of Monitoring Distribution Systems', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/2-22-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(7, 'grounding-system-testing-simplified-fall-of-potential-and-step-and-touch-voltage-testing', 'Grounding System Testing: Simplified Fall-Of-Potential And Step-And-Touch Voltage Testing', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/1-23-e1679528835630-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(8, 'overhead-t-d-direct-current-technology', 'Overhead T&D, Direct Current Technology', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/2-19-e1679528933178-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(9, 'distributed-energy-resources-small-scale-power', 'Distributed Energy Resources – Small Scale Power', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/3-100x70.png', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(10, 'grounding-electrodes', 'Grounding Electrodes', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/4-18-e1679529014429-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(11, 'high-voltage-ac-transmission-lines', 'High Voltage AC Transmission Lines', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/4-17-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(12, 'condition-monitoring-in-an-age-of-modernization-how-and-why-to-adapt-2', 'CONDITION MONITORING IN AN AGE OF MODERNIZATION: How (and Why) to Adapt', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/3-22-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(13, 'cable-cleats-testing-crucial-to-cable-management', 'Cable Cleats Testing – Crucial to Cable Management', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/2-3-100x70.png', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(14, 'ir-inspection-windows-for-electrical-system-reliability', 'IR Inspection Windows for Electrical System Reliability', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/1-22-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(15, 'the-impact-of-covid-19-on-the-power-industry-a-perspective', 'The Impact of COVID-19 on the Power Industry: A Perspective', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/1-19-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(16, 'the-basics-of-high-voltage-substation', 'The Basics of High Voltage Substation', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/3-20-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(17, 'the-challenges-of-integrating-renewables-into-the-grid', 'The Challenges of Integrating Renewables into the Grid', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/2-21-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(18, 'power-quality-issues-in-electrical-systems', 'Power Quality Issues in Electrical Systems', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/1-21-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(19, 'the-future-of-the-smart-grid-trends-and-perspectives', 'The Future of the Smart Grid: Trends and Perspectives', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/3-19-100x70.jpg', '2023-12-13 13:10:39', '2023-12-13 13:10:39', NULL, NULL),
(21, 'the-distribution-transformer-critical-power-system-component', 'The Distribution Transformer – Critical Power System Component', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/5-17-324x160.jpg', '2023-12-13 15:09:51', '2023-12-13 15:09:51', NULL, 'By R.W. Hurst, Editor A distribution transformer is a critical component of the electrical power system, used to reduce the voltage of electrical energy for'),
(22, 'substation-focused-on-environmental-design-2', 'Substation Focused on Environmental Design', '<p>One of the important trends in design of new overhead lines over the past 20 years has been development of structures and designs that are less obtrusive and more pleasing visually. Much the same process has also been going on at substations. For example, even 25 years ago, efforts had already been in place as far afield as Finland and Australia to build substations designed to facilitate acceptance by affected communities – either through aesthetic appearance, reduced scale or other factors. Indeed, more and more substations these days – especially those sited in urban centers or along well-traveled roads – are being designed to minimize adverse environmental and aesthetic impact.<br>\r\nDuring the mid-1990s, TransGrid – the network operator in New South Wales (NSW), Australia – wanted to build a substation at the confluence of existing 330 kV and 132 kV lines. Located some 60 km west of Sydney, this pristine rural area is marked by hobby farms and historic towns – exactly the type of place where any proposed new air-insulated substation would likely be met with staunch resistance. But given the site’s high strategic value, engineers worked extra hard to find a design that would meet all criteria required for public acceptance, without resorting to costly GIS.<br>\r\nAmong the measures in this regard was to go out at an early stage to involve local people and all relevant special interest groups. Various options were laid out even before a firm site had been selected. One of these included establishing a wildlife area with animal paths integrated into the station’s overall landscaping. More significantly, one of the most evident differences at Regentsville Substation versus a ‘compact’ station in densely populated regions is that the key goal here was to minimize height, not land surface. Unlike in places such as Europe where compact station design typically involves a small ‘footprint’ with relatively tall structures, land size was not the central issue here. Instead, the focus was on controlling height to best understate the station’s visual impact. One obvious example of this philosophy is the 330 kV entrance portal, which is unusually low compared to other TransGrid substations at this voltage. The 132 kV portal is also lower than conventional. Generally, there is a trade-off in height, with lower structures requiring the first to be located fairly close to the station. But here this was not a factor since the tower was already there. Helping make the low green-colored portals even less noticeable was use of low profile composite insulators, also utilized on the tower entering the substation.</p>', 1, 0, 'https://www.electricity-today.com/wp-content/uploads/magazine_may_june_2023_article_4.jpg', '2023-12-14 16:23:21', '2023-12-14 16:23:21', NULL, 'One of the important trends in design of new overhead lines over the past 20 years has been development of structures and designs that are less obtrusive and more pleasing visually. Much the same process has also been going on at substations.'),
(23, 'the-fight-against-animal-caused-power-outages-3', 'The Fight Against Animal-Caused Power Outages', '<p>Every day across the country, animals enter substations for warmth, food, security, or simply out of curiosity. In many areas, wildlife intruding into power equipment has become the leading cause of outages – even more common than storms or vegetation. &nbsp;<br>\r\nA single substation outage can cost tens of thousands of dollars in equipment repair or replacement, man hours and more. The annual cost to utility companies for recovering from animal-related outages is estimated in the billions of dollars, not including the cost of lost commercial activity, lowered productivity, and consumer dissatisfaction.<br>\r\nSo – what’s the solution for deterring an animal’s natural instinct to enter a substation?  Enter TransGard, which began its proven system of animal mitigation in 1990, and continues each year to add to its offerings of tools for substation protection against bird and animal intrusions. </p>\r\n<p>PATENTED FENCE KEEPS CLIMBING ANIMALS OUT<br>\r\nIn 2015, Former National Security Agency Deputy Director John C. Inglis said that squirrels were the number-one threat to the U.S. electrical grid — even more than terrorism or cyberattacks.  With increasing annual needs for power and shrinking animal habitats, that threat clearly hasn’t diminished.<br>\r\nFor years, engineers and technicians have attempted to prevent or discourage incursions from squirrels, raccoons, snakes, and other animals by using an array of methods: from bushing and line guards, to decoy predators, insulator coatings, and more. These measures have had some temporary success, but they haven’t provided permanent solutions: as an APPA representative noted in The Washington Post, “Animals aren’t just smart, they’re persistent.”<br>\r\nTransGard has found a way to use an animal’s own behavior and experience to teach them that a substation is not a hospitable place to visit. </p>\r\n<p>WHY FENCES WORK    TransGard’s patented fencing system delivers a humane, electric shock to climbing animals, keeping them from entering substations and encouraging them not to return.<br>\r\nThe technology behind this type of electric fencing uses an animal’s own behavior against it. Squirrels, for example, have a habitat that can stretch across acres. Squirrels and raccoons also have very accurate “spatial memory” — that is, a knack for remembering key locations and landmarks in their environment.<br>\r\nJust as these animals remember key areas in their environment, they also remember the location of a negative or dangerous experience, such as an uncomfortable jolt at a substation. That memory reinforces the instinct to avoid the unpleasant sensation the fence can cause.<br>\r\nTransGard’s fencing currently protects more than 4,000 substations across the U.S, but even with a proven system, TransGard continues to find ways to make its fences even more effective.</p>\r\n<p><span id=\"more-5900\"></span></p>\r\n<p><a href=\"https://www.electricityforum.com/et-login.php?url=https://online.electricity-today.com/electricity-today/mayjune-2023/~14\" rel=\"noopener\" target=\"_blank\">Read full article in the Electricity Today T&amp;D Magazine – Substation Automation Protection &amp; Maintenance Edition 2023</a><br>\r\n<a href=\"https://www.electricity-today.com/visit-our-advertisers?advertiser=magazine_may_jun_2023_trans_gard_page_17_1062w.jpg\" rel=\"noopener\" target=\"_blank\">TransGard advertisement in the magazine may-jun 2023 page 17</a><br>\r\n<a href=\"https://www.electricity-today.com/visit-our-advertisers?advertiser=magazine_may_jun_2023_delta_page_13_1062w.jpg\" rel=\"noopener\" target=\"_blank\">Delta advertisement in the magazine may-jun 2023 page 13</a></p>\r\n', 1, 0, 'https://www.electricity-today.com/wp-content/uploads/magazine_may_june_2023_article_3.jpg', '2023-12-14 16:26:15', '2023-12-14 16:26:15', NULL, NULL),
(24, 'building-a-competency-program', 'Building a Competency Program\r\n', NULL, 0, 0, 'https://www.electricity-today.com/wp-content/uploads/1-21.jpg', '2023-12-14 18:14:24', '2023-12-14 18:14:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `post_id`, `slug`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'news', 'News', '2023-12-12 04:18:29', '2023-12-12 04:18:29'),
(2, 1, 'lineman-safety', 'Lineman Safety', '2023-12-12 04:18:53', '2023-12-12 04:18:53'),
(3, 1, 'safety-best-practices', 'Safety Best Practices', '2023-12-12 05:17:17', '2023-12-12 05:17:17'),
(4, 1, 'safety-technologies', 'Safety Technologies', '2023-12-12 05:17:17', '2023-12-12 05:17:17'),
(5, 1, 'electrical-substation', 'Electrical Substations', '2023-12-12 05:18:05', '2023-12-12 05:18:05'),
(6, 1, 'substation-automation', 'Substation Automation', '2023-12-12 05:18:05', '2023-12-12 05:18:05'),
(7, 1, 'substation-technologies', 'Substation Technologies', '2023-12-12 05:18:34', '2023-12-12 05:18:34'),
(8, 1, 'substation-testing-maintenance', 'Substation Testing & Maintenance', '2023-12-12 05:18:34', '2023-12-12 05:18:34'),
(9, 1, 'td-automation', 'T&D Automation', '2023-12-12 05:18:54', '2023-12-13 05:18:51'),
(10, 22, 'td-automation', 'T&D Automation', '2023-12-12 05:18:54', '2023-12-12 05:18:53'),
(11, 23, 'td-automation', 'T&D Automation', '2023-12-12 05:18:54', '2023-12-12 05:18:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_post_id_foreign` (`post_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_post_id_foreign` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
