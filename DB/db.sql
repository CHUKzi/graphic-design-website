-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 07:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezzdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `back_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `introduction` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `if_hide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `back_img`, `title`, `subtitle`, `introduction`, `if_hide`) VALUES
(1, '2021-01-24_01-15_24pm_untitled-1.jpg', 'About Us', 'Our Team is Your Team!', '<p style=\"box-sizing: border-box; margin: 20px 0px 0px; font-family: Roboto, sans-serif; font-size: 16px; letter-spacing: 0px; color: #2c2d33; line-height: 26px; background-color: #ffffff;\">We\'re committed to helping our customers expand their candidate pools to include people with criminal records through a variety of resources, best practices, and assessments around fairer hiring practices.From education and employment opportunities to expungement resources, we work with organizations who empower people to tackle the challenges surrounding fair chance hiring.<span style=\"color: #e03e2d;\"><strong>Better Future is a Checkr platform through which job-seekers can run their own background checks for free. It gives candidates.s</strong></span></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_us_page_head`
--

CREATE TABLE `about_us_page_head` (
  `id` int(11) NOT NULL,
  `back_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us_page_head`
--

INSERT INTO `about_us_page_head` (`id`, `back_img`, `title`) VALUES
(1, '2021-01-24_01-37_07pm_inner-hero.jpg', 'About Us');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'gncesportslk@gmail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(10) NOT NULL,
  `if_hide_cmt` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `thumbnail`, `title`, `description`, `tags`, `views`, `if_hide_cmt`, `time`) VALUES
(52, '2021-01-23_01-15_48pm_blog-post.jpg', 'The next Mark Zuckerberg of Fintech may be Living in NY. Get key Takeaways from Disruption Forum Par', '<h2><strong>(English, සිංහල , தமிழ், woking TEST)</strong></h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/blog/blog-post6.jpg\" alt=\"\" width=\"781\" height=\"427\" /></p>\r\n<h2>Managing Remote Teams what Are The Most Dangerou Pitfalls And How To Avoid Them?</h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your.</p>\r\n<p style=\"text-align: center;\"><img src=\"../assets/img/blog/blog-post9.jpg\" alt=\"\" width=\"548\" height=\"273\" /></p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware.</p>\r\n<p>&nbsp;</p>', 'design, buiness, capital', 139, 1, '2021-01-17 04:50:34'),
(54, 'blog-post6.jpg', 'The next Mark Zuckerberg of Fintech may be Living in NY. Get key Takeaways from Disruption Forum Par', '<h2><strong>(English, සිංහල , தமிழ், woking TEST)</strong></h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/blog/blog-post6.jpg\" alt=\"\" width=\"781\" height=\"427\" /></p>\r\n<h2>Managing Remote Teams what Are The Most Dangerou Pitfalls And How To Avoid Them?</h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your.</p>\r\n<p style=\"text-align: center;\"><img src=\"../assets/img/blog/blog-post9.jpg\" alt=\"\" width=\"548\" height=\"273\" /></p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware.</p>\r\n<p>&nbsp;</p>', 'design, buiness, capital', 16, 1, '2021-01-17 04:50:34'),
(56, 'blog-post5.jpg', 'The next Mark Zuckerberg of Fintech may be Living in NY. Get key Takeaways from Disruption Forum Par', '<h2><strong>(English, සිංහල , தமிழ், woking TEST)</strong></h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/blog/blog-post6.jpg\" alt=\"\" width=\"781\" height=\"427\" /></p>\r\n<h2>Managing Remote Teams what Are The Most Dangerou Pitfalls And How To Avoid Them?</h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your.</p>\r\n<p style=\"text-align: center;\"><img src=\"../assets/img/blog/blog-post9.jpg\" alt=\"\" width=\"548\" height=\"273\" /></p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware.</p>\r\n<p>&nbsp;</p>', 'design, buiness, capital', 13, 1, '2021-01-17 04:50:34'),
(57, 'blog-post3.jpg', 'The next Mark Zuckerberg of Fintech may be Living in NY. Get key Takeaways from Disruption Forum Par', '<h2><strong>(English, සිංහල , தமிழ், woking TEST)</strong></h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/blog/blog-post6.jpg\" alt=\"\" width=\"781\" height=\"427\" /></p>\r\n<h2>Managing Remote Teams what Are The Most Dangerou Pitfalls And How To Avoid Them?</h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your.</p>\r\n<p style=\"text-align: center;\"><img src=\"../assets/img/blog/blog-post9.jpg\" alt=\"\" width=\"548\" height=\"273\" /></p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware.</p>\r\n<p>&nbsp;</p>', 'design, buiness, capital', 11, 1, '2021-01-17 04:50:34'),
(58, 'blog-post.jpg', 'The next Mark Zuckerberg of Fintech may be Living in NY. Get key Takeaways from Disruption Forum Par', '<h2><strong>(English, සිංහල , தமிழ், woking TEST)</strong></h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/blog/blog-post6.jpg\" alt=\"\" width=\"781\" height=\"427\" /></p>\r\n<h2>Managing Remote Teams what Are The Most Dangerou Pitfalls And How To Avoid Them?</h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your.</p>\r\n<p style=\"text-align: center;\"><img src=\"../assets/img/blog/blog-post9.jpg\" alt=\"\" width=\"548\" height=\"273\" /></p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware.</p>\r\n<p>&nbsp;</p>', 'design, buiness, capital', 8, 1, '2021-01-17 04:50:34'),
(59, '2021-01-24_01-25_36pm_blog-post5.jpg', 'The next Mark Zuckerberg of Fintech may be Living in NY. Get key Takeaways from Disruption Forum Par', '<h2><strong>(English, සිංහල , தமிழ், woking TEST)</strong></h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/blog/blog-post6.jpg\" alt=\"\" width=\"781\" height=\"427\" /></p>\r\n<h2>Managing Remote Teams what Are The Most Dangerou Pitfalls And How To Avoid Them?</h2>\r\n<p>More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your teammates can make it a bit more difficult, but with some careful thought, you can make the most out of remote work arrangements. We&rsquo;ve teamed up with experts from Remote-how Academy for Managers, to share with you how to lead and build highly effective teams despite the distance. Among Academy experts that consists of 3 separate paths: for remote individuals, for managers of distributed teams.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware of many challenges distributed management bare. Like any new process, there will be some pitfalls that as a leader of a distributed team you need to make sure to avoid! Not being in the same physical space as your.</p>\r\n<p style=\"text-align: center;\"><img src=\"../assets/img/blog/blog-post9.jpg\" alt=\"\" width=\"548\" height=\"273\" /></p>\r\n<p style=\"text-align: center;\">More companies are beginning to embrace the freedom and benefits remote work has to offer. Whether it&rsquo;s a few home office days or a completely remote setup many managers will sooner or later find themselves managing employees in new ways because of that. Organizations like Bandia, who are already frontrunning the remote working revolution are already aware.</p>\r\n<p>&nbsp;</p>', 'design, buiness, capital', 11, 1, '2021-01-17 04:50:34');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_head`
--

CREATE TABLE `blogs_head` (
  `id` int(11) NOT NULL,
  `back_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs_head`
--

INSERT INTO `blogs_head` (`id`, `back_img`, `title`) VALUES
(1, '2021-01-24_01-35_57pm_untitled-3awdaw.jpg', 'Blog');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `list` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `sender`, `list`, `time`) VALUES
(47, 'Admin', 'advertising graphic design', '2021-01-17 05:05:30'),
(48, 'Admin', 'User interface graphic design', '2021-01-17 05:06:09'),
(49, 'Admin', 'Publication graphic design', '2021-01-17 05:06:36'),
(52, 'Admin', 'graphic design', '2021-01-24 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `cl_feedback`
--

CREATE TABLE `cl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `satisfaction` int(11) NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_hide` int(10) NOT NULL,
  `is_delete` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_feedback`
--

INSERT INTO `cl_feedback` (`id`, `name`, `satisfaction`, `message`, `is_hide`, `is_delete`, `date`) VALUES
(120, 'Himesh Gunathilaka', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.<br />\r\n', 1, 0, '2021-01-20 13:51:35'),
(121, 'Royan Harsha', 4, 'labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.', 1, 1, '2021-01-20 13:52:10'),
(122, 'Saduni Hansika', 3, 'labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo<br />\r\nviverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.', 1, 1, '2021-01-20 13:52:45'),
(123, 'Sadaru Kumara', 2, 'labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo<br />\r\nviverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.', 1, 0, '2021-01-20 13:53:22'),
(124, 'Raveen Kanishka', 1, 'labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo<br />\r\nviverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.', 1, 0, '2021-01-20 13:53:48'),
(127, 'Sadaru Kumara', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.<br />\r\n', 0, 0, '2021-01-24 12:30:04'),
(128, 'Saduni Hansika', 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.<br />\r\n', 0, 0, '2021-01-24 12:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `member_type` varchar(60) NOT NULL,
  `img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) NOT NULL,
  `name` varchar(70) NOT NULL,
  `comment` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_delete` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_reply` int(10) NOT NULL,
  `is_delete` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone_number`, `subject`, `message`, `is_reply`, `is_delete`, `date`) VALUES
(109, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'THIS IS BUG FIX TEST MG', 0, 0, '2021-01-21 08:55:07'),
(110, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'THIS IS BUG FIX TEST MG', 0, 0, '2021-01-21 09:10:11'),
(111, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'THIS IS BUG FIX TEST MG', 1, 0, '2021-01-21 09:11:25'),
(112, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'THIS IS BUG FIX TEST MG', 1, 0, '2021-01-21 09:13:34'),
(113, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'THIS IS BUG FIX TEST MG', 0, 0, '2021-01-21 09:14:39'),
(114, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'BUG FIX TEST', 0, 0, '2021-01-21 09:18:21'),
(115, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'BUG FIX TEST', 0, 0, '2021-01-21 09:19:36'),
(116, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'BUG FIX TEST', 1, 0, '2021-01-21 09:20:38'),
(117, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'BUG FIX TEST', 1, 0, '2021-01-21 09:22:47'),
(118, 'Himesh Gunathilaka', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'BUG FIX TEST \"Any Email\"', 1, 0, '2021-01-21 09:30:29'),
(119, 'Himesh Gunathilaka', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'BUG FIX TEST \"Any Email\"', 1, 1, '2021-01-21 09:31:30'),
(120, 'Himesh Gunathilaka', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'BUG FIX TEST \"Any Email\"', 1, 1, '2021-01-21 09:31:49'),
(121, 'Royan Harsha', 'www.royanharsha6@gmail.com', '77', 'BUG FIX TEST', 'Test (contact Final Email)', 1, 1, '2021-01-21 09:36:37'),
(122, 'Royan Harsha', 'www.royanharsha6@gmail.com', '077 123 45678', 'BUG FIX TEST', 'test', 1, 1, '2021-01-21 11:05:56'),
(123, 'Himesh Gunathilaka', 'www.royanharsha6@gmail.com', '077123456789', 'BUG FIX TEST', '3n number check', 1, 0, '2021-01-21 12:01:41'),
(124, 'Himesh Gunathilaka', 'www.royanharsha6@gmail.com', '077123456789', 'BUG FIX TEST', 'test', 1, 0, '2021-01-23 14:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `detective`
--

CREATE TABLE `detective` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `list` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detective`
--

INSERT INTO `detective` (`id`, `sender`, `list`) VALUES
(1, 'Admin', '::15265');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `history_type` varchar(100) NOT NULL,
  `title` varchar(400) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user`, `history_type`, `title`, `time`) VALUES
(405, 'Admin', 'category deleted', 'Visual identity graphic designn', '2021-01-23 19:48:13'),
(406, 'Admin', 'ip removed', 'Visual identity graphic designn', '2021-01-23 19:52:55'),
(407, 'Admin', 'ip removed', 'Visual identity graphic designn', '2021-01-23 19:54:52'),
(408, 'Admin', 'ip removed', 'Visual identity graphic designn', '2021-01-23 19:55:19'),
(409, 'Admin', 'ip removed', 'Visual identity graphic designn', '2021-01-23 19:56:40'),
(410, 'Admin', 'ip removed', 'Visual identity graphic designn', '2021-01-23 19:56:56'),
(411, 'Admin', 'ip removed', 'Visual identity graphic designn', '2021-01-23 19:57:35'),
(412, 'Admin', 'ip removed', 'Visual identity graphic designn', '2021-01-23 19:58:04'),
(413, 'Admin', 'set website stats', '1', '2021-01-23 20:17:08'),
(414, 'Admin', 'set website stats', '1', '2021-01-23 20:19:49'),
(415, 'Admin', 'set website stats', '1', '2021-01-23 20:19:53'),
(416, 'Admin', 'set website stats', '1', '2021-01-23 20:22:25'),
(417, 'Admin', 'set website stats', '0', '2021-01-23 20:22:32'),
(418, 'Admin', 'set website stats', '0', '2021-01-23 20:25:44'),
(419, 'Admin', 'set website stats', '1', '2021-01-23 20:25:48'),
(420, 'Admin', 'set website stats', '1', '2021-01-23 20:27:31'),
(421, 'Admin', 'set website stats', '1', '2021-01-23 20:27:34'),
(422, 'Admin', 'set website stats', '0', '2021-01-23 20:27:42'),
(423, 'Admin', 'set website stats', '0', '2021-01-23 20:27:54'),
(424, 'Admin', 'set website stats', '1', '2021-01-23 20:28:04'),
(425, 'Admin', 'set website stats', '1', '2021-01-23 20:28:28'),
(426, 'Admin', 'set website stats', '0', '2021-01-23 20:28:37'),
(427, 'Admin', 'set website stats', '1', '2021-01-23 20:33:36'),
(428, 'Admin', 'set website stats', '0', '2021-01-23 20:39:41'),
(429, 'Admin', 'set website stats', '1', '2021-01-23 21:14:10'),
(430, 'Admin', 'set website stats', '1', '2021-01-23 21:15:14'),
(431, 'Admin', 'set website stats', '0', '2021-01-23 21:15:20'),
(432, 'Admin', 'set website stats', '1', '2021-01-23 21:45:43'),
(433, 'Admin', 'set website stats', '0', '2021-01-24 06:04:25'),
(434, 'Admin', 'ip removed', 'advertising graphic design', '2021-01-24 06:09:54'),
(435, 'Admin', 'ip removed', 'Publication graphic design', '2021-01-24 06:09:58'),
(436, 'Admin', 'ip removed', 'Publication graphic design', '2021-01-24 06:12:10'),
(437, 'Admin', 'set website stats', '0', '2021-01-24 06:48:27'),
(438, 'Admin', 'set website stats', '1', '2021-01-24 06:59:50'),
(439, 'Admin', 'set website stats', '0', '2021-01-24 07:01:00'),
(440, 'Admin', 'set website stats', '1', '2021-01-24 07:05:05'),
(441, 'Admin', 'set website stats', '0', '2021-01-24 07:05:15'),
(442, 'Admin', 'set website stats', '1', '2021-01-24 07:05:26'),
(443, 'Admin', 'set website stats', '0', '2021-01-24 07:18:17'),
(444, 'Admin', 'set website stats', '1', '2021-01-24 07:26:48'),
(445, 'Admin', 'set website stats', '0', '2021-01-24 07:57:04'),
(446, 'Admin', 'set website stats', '1', '2021-01-24 07:58:42'),
(447, 'Admin', 'set website stats', '0', '2021-01-24 08:05:18'),
(448, 'Admin', 'set website stats', '1', '2021-01-24 08:05:41'),
(449, 'Admin', ',s comment is temporarily deleted', 'Himesh Gunathilaka', '2021-01-24 08:48:33'),
(450, 'Admin', ',s E-mail is deleted', 'Royan Harsha', '2021-01-24 09:04:52'),
(451, 'Admin', ',s E-mail is deleted', 'Himesh Gunathilaka', '2021-01-24 09:06:18'),
(452, 'Admin', ',s E-mail is deleted', 'Himesh Gunathilaka', '2021-01-24 09:08:08'),
(453, 'Admin', ',s E-mail Recovery ', 'Himesh Gunathilaka', '2021-01-24 09:11:39'),
(454, 'Admin', ',s feedback is Recovery', 'Raveen Kanishka', '2021-01-24 09:26:51'),
(455, 'Admin', ',s comment recovered', 'Himesh Gunathilaka', '2021-01-24 09:27:50'),
(456, 'Admin', 'set website stats', '0', '2021-01-24 10:00:38'),
(457, 'Admin', ',s feedback is Recovery', 'Sadaru Kumara', '2021-01-24 10:17:12'),
(458, 'Admin', ',s feedback is Recovery', 'Himesh Gunathilaka', '2021-01-24 10:17:43'),
(459, 'Admin', ',s feedback is deleted', 'Himesh Gunathilaka', '2021-01-24 10:18:13'),
(460, 'Admin', ',s feedback is deleted', 'Royan Harsha', '2021-01-24 10:18:22'),
(461, 'Admin', ', Blog is Edited', 'The next Mark Zuckerberg of Fintech may be Living in NY. Get key Takeaways from Disruption Forum Par', '2021-01-24 12:25:36'),
(462, 'Admin', 'category createed', 'Visual identity graphic designn', '2021-01-24 12:57:51'),
(463, 'Admin', 'category deleted', 'Visual identity graphic designn', '2021-01-24 12:58:36'),
(464, 'Admin', 'set website stats', '1', '2021-01-24 13:02:05'),
(465, 'Admin', 'set website stats', '0', '2021-01-24 13:02:36'),
(466, 'Admin', 'category createed', 'graphic design', '2021-01-24 13:07:17'),
(467, 'Admin', '\" to upload new image', 'Publication graphic design\",\"graphic design', '2021-01-24 13:07:44'),
(468, 'Admin', 'set website stats', '1', '2021-01-24 13:57:59'),
(469, 'Admin', 'set website stats', '0', '2021-01-27 15:04:35'),
(470, 'Admin', 'set website stats', '1', '2022-04-23 17:20:56'),
(471, 'Admin', 'set website stats', '0', '2022-04-23 17:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_box`
--

CREATE TABLE `home_page_box` (
  `id` int(11) NOT NULL,
  `icon1` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon2` varchar(1000) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `description2` varchar(1000) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `icon3` varchar(1000) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `description3` varchar(1000) NOT NULL,
  `link3` varchar(100) NOT NULL,
  `if_hide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page_box`
--

INSERT INTO `home_page_box` (`id`, `icon1`, `title`, `description`, `link`, `icon2`, `title2`, `description2`, `link2`, `icon3`, `title3`, `description3`, `link3`, `if_hide`) VALUES
(1, '2021-01-24_12-47_59pm_untitled-1.png', 'Increase Operational Efficiency', 'We\'re always innovating to help our customers hire more efficiently while maintaining top standards of quality. Speed up hiring. Top standards of quality. Speed up hiring applying your preliminary assessment rules.', 'about-us/', '2021-01-24_12-48_57pm_untitled-11.png', 'Mitigate Risk and Maintain', 'Checkr\'s platform leverages our proprietary compliance technology to ensure data legally reportable and accurate and to decrease reliance on manual processes. This makes your hiring process more consistent.', 'about-us/', '2021-01-24_12-49_57pm_untitled-1awdaw.png', 'Improve Candidate Experience', 'Today\'s talent expects access, visibility, and speed. We\'re constantly innovating to help you meet those expectations. Checkr\'s mobile friendly candidate portal speeds up the background check process with.', 'about-us/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_page_head`
--

CREATE TABLE `home_page_head` (
  `id` int(11) NOT NULL,
  `back_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page_head`
--

INSERT INTO `home_page_head` (`id`, `back_img`, `title`, `introduction`) VALUES
(1, '2021-01-24_12-41_03pm_construction.jpg', 'Welcome To Rv Solutions', 'The only background check company using artificial intelligence and machine learning to make hiring more inclusive and more efficient. Learn how we\'re setting a new standard for speed, accuracy, and safety.');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `icon` longtext NOT NULL,
  `logo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_f` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `looder` longtext NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `script` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `script_f` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_2` varchar(100) NOT NULL,
  `send_me` varchar(1000) NOT NULL,
  `number1` varchar(50) NOT NULL,
  `number2` varchar(50) NOT NULL,
  `instagram` varchar(1000) NOT NULL,
  `fb_page` varchar(200) NOT NULL,
  `yt_channel` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `contact_info` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apple_app` varchar(200) NOT NULL,
  `android_app` varchar(200) NOT NULL,
  `copywright` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `domain`, `icon`, `logo`, `logo_f`, `looder`, `title`, `script`, `script_f`, `email`, `email_2`, `send_me`, `number1`, `number2`, `instagram`, `fb_page`, `yt_channel`, `twitter`, `contact_info`, `address`, `about_us`, `apple_app`, `android_app`, `copywright`, `date`) VALUES
(1, 'http://localhost/github/graphic-design-website/', '2021-01-23_08-01_58pm_fav-icon.png', '2021-01-24_01-26_48pm_logo.png', 'logo-4.png', '2021-01-24_01-50_43pm_preloder2.gif', 'Rv Solutions', '<!--<script src=\"https://www.cssscript.com/demo/minimalist-falling-snow-effect-with-pure-javascript-snow-js/snow.js\"></script>\r\n<script type=\'text/javascript\' src=\'https://ts3index.com/scripts/snow.js\'></script>-->', '<!--script-->\r\n', 'alexlanka@gmail.com', 'alexlanka@gmail.com', 'alexlanka99@gmail.com', '+947712345678', '+947712345678', '404.php', '404.php', '404.php', '404.php', 'we are alex lanka, you can any time contact us and we are every time any issue in you have ,we are supputed for you solve that issue.\r\ntrust our services,', 'Alex Lanka , Colombo 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur. ', '404.php', '404.php', 'All Rights Reserved By', '2020-11-17 13:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `emails` int(11) NOT NULL,
  `feedback` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `is_active`, `emails`, `feedback`, `comments`, `time`) VALUES
(1, 0, 0, 0, 0, '2020-07-23 11:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `thumbnail`, `category`, `time`) VALUES
(93, '61f87497-a08d-440a-b057-6b21ff9369e7.jpg', 'Visual identity graphic design', '2021-01-17 05:11:12'),
(94, '89f4e06d-3821-4611-9a75-bb92be77aa27_preview.jpg', 'Visual identity graphic design', '2021-01-17 05:11:24'),
(95, '2021-01-22_11-27_08pm_attachment_51021702_preview.png', 'User interface graphic design', '2021-01-17 05:11:35'),
(96, 'attachment_85717026_preview.png', 'Visual identity graphic design', '2021-01-17 05:11:57'),
(97, '783f6db7-c2e1-4ce9-a31f-b2fdefdaa327.jpg', 'advertising graphic design', '2021-01-17 05:12:14'),
(98, 'attachment_62125272.jpg', 'advertising graphic design', '2021-01-17 05:12:25'),
(99, 'attachment_72608363.jpg', 'advertising graphic design', '2021-01-17 05:12:37'),
(100, 'attachment_95187551_preview.png', 'User interface graphic design', '2021-01-17 05:12:56'),
(101, 'attachment_60902692_preview.png', 'User interface graphic design', '2021-01-17 05:13:09'),
(102, 'attachment_95989778.png', 'User interface graphic design', '2021-01-17 05:13:30'),
(103, 'attachment_59337693.jpg', 'Publication graphic design', '2021-01-17 05:13:46'),
(110, '2021-01-24_02-07_44pm_251581.jpg', 'Publication graphic design\",\"graphic design', '2021-01-24 13:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `link` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `sender`, `icon`, `title`, `description`, `link`, `time`) VALUES
(47, 'Admin', '2021-01-24_01-13_06pm_untitled-2dawdaw.png', 'Exhibit Booth Design', '<p>Our specialty is do custom exhibitu design. Attracting and ein engaging your visitors with a meaningfull brand experience is our passion be and promise</p>', 'about-us/', '2021-01-10 05:08:06'),
(48, 'Admin', '2021-01-24_01-08_21pm_untitled-1awdaw.png', 'Exhibit Fabrication', '<p>Bringing an exhibit design to life requires attention to detail, state-of-the-art machinery and quality expertise. With careful con while deliverind within budget.</p>', 'about-us/', '2021-01-10 05:16:29'),
(49, 'Admin', '2021-01-24_01-13_24pm_untitled-2awdwad.png', 'Custom Trade Show Rentals', '<p>Why buy? Using a rental saves you the cost of refurbishment, logistics and storage fees without sacrificing the beauty or functionality of a permanent display.</p>', 'about-us/', '2021-01-10 05:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `our_story`
--

CREATE TABLE `our_story` (
  `id` int(11) NOT NULL,
  `right_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `story` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` longtext NOT NULL,
  `today` longtext NOT NULL,
  `if_hide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_story`
--

INSERT INTO `our_story` (`id`, `right_img`, `title`, `subtitle`, `story`, `history`, `today`, `if_hide`) VALUES
(1, '2021-01-24_01-23_20pm_8f6c1315-cff2-45fc-ace2-a429c6f269ec.jfif', 'Our Starting Stroy', 'A Small To is Big Now!', '<p><span style=\"color: #2c2d33; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;\">We&rsquo;ve been providing online payment acceptance and processing services as well as debit card issuance services for corporate customers since 2004. We strive to make our services accessible and convenient for everyone.Being constantly on the lookout for technological innovation and providing top-grade client service and broad product offerings has ensured our steady growth.</span></p>', '<p><span style=\"color: #2c2d33; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;\">We&rsquo;ve been providing online payment acceptance and processing services as well as debit card issuance services for corporate customers since 2004. We strive to make our services accessible and convenient for everyone.Being constantly on the lookout for technological innovation and providing top-grade client service and broad product offerings has ensured our steady growth...</span></p>', '<p><span style=\"color: #2c2d33; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;\">We&rsquo;ve been providing online payment acceptance and processing services as well as debit card issuance services for corporate customers since 2004. We strive to make our services accessible and convenient for everyone.Being constantly on the lookout for technological innovation and providing top-grade client service and broad product offerings has ensured our steady growth.</span></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `avatar` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `sender`, `avatar`, `name`, `designation`, `fb`, `twitter`, `instagram`, `time`) VALUES
(39, 'Admin', '2021-01-22_10-50_57pm_member2.jpg', 'Member  1', 'Designation', 'no', 'no', 'no', '2021-01-04 10:34:18'),
(40, 'Admin', 'member4.jpg', 'Member  2', 'Designation', 'no', 'no', 'no', '2021-01-04 10:34:18'),
(41, 'Admin', 'member3.jpg', 'Member 3', 'Designation', 'no', 'no', 'no', '2021-01-04 10:34:18'),
(42, 'Admin', 'member4.jpg', 'Member 4', 'Designation', 'no', 'no', 'no', '2021-01-04 10:34:18'),
(43, 'Admin', 'member10.jpg', 'Member 5', 'Designation', 'no', 'no', 'no', '2021-01-04 10:34:18'),
(47, 'Admin', '2021-01-24_01-18_36pm_member5.jpg', 'Member 6', 'Designation', 'no', 'no', 'no', '2021-01-04 10:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `our_work_page_head`
--

CREATE TABLE `our_work_page_head` (
  `id` int(11) NOT NULL,
  `back_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_work_page_head`
--

INSERT INTO `our_work_page_head` (`id`, `back_img`, `title`) VALUES
(1, '2021-01-24_01-35_47pm_untitled-3awdaw.jpg', 'Our Works');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `total_views` int(50) UNSIGNED DEFAULT NULL,
  `page_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `total_views`, `page_name`) VALUES
(1, 2, 'Home Page'),
(2, 1, 'About Us Page'),
(3, 1, 'Our Services Page'),
(4, 1, 'ALL Blogs Page'),
(5, 1, 'Blog Search Page'),
(6, 1, 'Blog Details Page'),
(7, 1, 'Our Works Page'),
(8, 1, 'Contact US Page'),
(9, 1, 'Error! Page Page'),
(10, 1, 'Feedback Page'),
(11, 1, 'Under Construction Page');

-- --------------------------------------------------------

--
-- Table structure for table `page_views`
--

CREATE TABLE `page_views` (
  `visitor_ip` varchar(255) DEFAULT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_views`
--

INSERT INTO `page_views` (`visitor_ip`, `page_id`, `time`) VALUES
('::1', 1, '2021-01-15 16:03:49'),
('::1', 4, '2021-01-15 16:03:49'),
('::1', 3, '2021-01-15 16:03:49'),
('::1', 2, '2021-01-15 16:03:49'),
('::1', 5, '2021-01-15 16:03:49'),
('::1', 6, '2021-01-15 16:03:49'),
('::1', 7, '2021-01-15 16:03:49'),
('::1', 8, '2021-01-17 08:47:44'),
('::1', 9, '2021-01-18 12:19:44'),
('127.0.0.1', 1, '2021-01-18 22:59:08'),
('::1', 10, '2021-01-20 09:40:03'),
('::1', 11, '2021-01-21 13:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `search` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(75) NOT NULL,
  `city` varchar(75) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services_page_head`
--

CREATE TABLE `services_page_head` (
  `id` int(11) NOT NULL,
  `back_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_page_head`
--

INSERT INTO `services_page_head` (`id`, `back_img`, `title`) VALUES
(1, '2021-01-24_01-35_37pm_untitled-3awdaw.jpg', 'Our Services');

-- --------------------------------------------------------

--
-- Table structure for table `work_progress`
--

CREATE TABLE `work_progress` (
  `id` int(11) NOT NULL,
  `back_img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `introduction` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `if_hide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_progress`
--

INSERT INTO `work_progress` (`id`, `back_img`, `title`, `subtitle`, `introduction`, `if_hide`) VALUES
(1, '2021-01-24_12-58_53pm_251568.jpg', 'We Are Brandia! Here To Help You!', 'We are Really Fast and We Can Help You on Time!', '<p>Investors hand their money over to Brandia, the company allocates the money between dozensapproved borrowers exclusively against the pledge of liquid and legally sound real estate.Borrowers get their loans on terms favourable for them and make interest payments to Brandia, who, in its turn, pays Investors.</p>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_page_head`
--
ALTER TABLE `about_us_page_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_head`
--
ALTER TABLE `blogs_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_feedback`
--
ALTER TABLE `cl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detective`
--
ALTER TABLE `detective`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_box`
--
ALTER TABLE `home_page_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_head`
--
ALTER TABLE `home_page_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_story`
--
ALTER TABLE `our_story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_work_page_head`
--
ALTER TABLE `our_work_page_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_page_head`
--
ALTER TABLE `services_page_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_progress`
--
ALTER TABLE `work_progress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `about_us_page_head`
--
ALTER TABLE `about_us_page_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `blogs_head`
--
ALTER TABLE `blogs_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cl_feedback`
--
ALTER TABLE `cl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `detective`
--
ALTER TABLE `detective`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- AUTO_INCREMENT for table `home_page_box`
--
ALTER TABLE `home_page_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_page_head`
--
ALTER TABLE `home_page_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `our_story`
--
ALTER TABLE `our_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `our_work_page_head`
--
ALTER TABLE `our_work_page_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `services_page_head`
--
ALTER TABLE `services_page_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_progress`
--
ALTER TABLE `work_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
