
CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ECA AT A GLANCE', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Established in the year 2014 under the registration No. D-66649 with the Ministry of Commerce and Industry of Afghanistan, Eagle Wise Chartered Accountants Company (ECA) has emerged as a prominent and trusted partner in the realm of financial and business solutions. With an unwavering commitment to excellence and a comprehensive range of services, ECA has been a driving force behind the growth and success of numerous national and international organizations seeking top-tier accounting, auditing, and advisory solutions. The scope of ECA services include Auditing, Taxation and Advisory subdivided into, Internal and External Audits &amp; Assurance, Compliance and Performance Auditing, Forensic Auditing, Review Engagements Accounting and Financial Management, Taxation Advisory &amp; Compliances, and Management Assessment, Business Planning, Capacity Development, Research &amp; Survey and Legal &amp; Corporate Services.</span></span></p>', 'images/1717277369.png', '2024-06-01 16:59:29', '2024-06-01 16:59:29'),
(2, 'ECA SCOPE OF SERVICES', '<p class=\"\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-bottom:1rem;margin-top:0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">ECA has a large market to target in regards of sector and industry wise. We categorize market into below six classes:</p><ul><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Individuals and Investors.</li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Small Businesses is the second largest and fastest growing segment in our region.</li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Medium Businesses - 25 to 499 employees.</li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Large Businesses - 500 or more employees.</li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Authorities and Public Organizations.</li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">National &amp; International NGOs.</li></ul>', 'images/1717277459.png', '2024-06-01 17:00:59', '2024-06-01 17:00:59'),
(3, 'OUR MISSION', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Our mission is to forge enduring partnerships with our clients, leveraging our expertise to offer tailored solutions that drive sustainable growth. We are dedicated to upholding the highest standards of professionalism and ethics while fostering a culture of continuous learning and improvement.</span></span></p>', 'images/1717277676.svg', '2024-06-01 17:04:36', '2024-06-01 17:04:36'),
(4, 'OUR VISION', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><i><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Eagle Wise Chartered Accountants Company envisions becoming a premier provider of financial and business solutions, contributing to the growth and prosperity of our clients, employees, and the wider community. We aspire to be recognized for our unwavering commitment to integrity, innovation, and excellence.</span></i></span></p>', 'images/1717277751.svg', '2024-06-01 17:05:51', '2024-06-01 17:05:51'),
(5, 'Why ECA ?', '<p class=\"\">ECA has a large market to target in regards of sector and industry wise. We categorize market into below six classes:</p><ul><li>Individuals and Investors.</li><li>Small Businesses is the second largest and fastest growing segment in our region.</li><li>Medium Businesses - 25 to 499 employees.</li><li>Large Businesses - 500 or more employees.</li><li>Authorities and Public Organizations.</li><li>National &amp; International NGOs.</li></ul>', 'images/1717277824.svg', '2024-06-01 17:07:04', '2024-06-04 15:18:11'),
(6, 'Privacy Policy', '<p>Eagle Wise Chartered Accountants value client’s privacy. Any information pertaining to the operations of your organization will be held strictly confidential. We require strict adherence by all our staff to the ethical rules of our profession. In all respects of our practice, the firm and its employees maintain strict confidentiality towards information obtained while carrying out our professional duties. In addition, the firm and its people maintain complete independence of interest and mental attitude in relationships with clients. We endeavor to provide quality and transcendent services to all our clients.</p><p>Our commitment to our clients and others is to respect and protect the privacy and confidentiality of personal and business information that is entrusted to us in the course of rendering professional services to our clients. Each and every one of our employees, partners and contractors is responsible for maintaining the confidentiality and security of all information to which they have access. Our employees are trained to know and respect our Privacy Policy, and compliance with our policies and procedures for protecting personal information is a condition of their employment.</p><p>The Personal Information Protection and Electronic Documents Act (PIPEDA) governs how all private sector organizations handle personal information of clients, employees, and other. Personal information is defined as any information that can identify an individual and information about an identifiable individual. This includes information such as a person’s home address, date of birth, social insurance number, medical and financial information.</p><p>The ECA’s partners, staff and associates are governed by the Rules of Professional Conduct maintained by the IFAC. These rules also set standards for the collection and use of personal information.</p><h3>Resources:</h3><p>If you have concerns or complaints regarding your personal information or our Privacy Policy, please contact our Privacy and Confidentiality leader in writing by email or mail:</p><p><strong>Phone:</strong> +93 (0) 776 41 53 81&nbsp;<br><strong>Email:</strong> privacy@eca.org.af&nbsp;<br><strong>Address:</strong> OFFICE #6, 4TH FLOOR Muslim Business Center Haji Yaqoob Square, Shar-e-naw Kabul, Afghanistan</p>', 'images/1717534585.png', '2024-06-04 16:26:25', '2024-06-04 16:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Audit and Assurance Services', '2024-06-01', '2024-06-01'),
(2, 'Tax Services', '2024-06-01', '2024-06-01'),
(3, 'Legal Services', '2024-06-01', '2024-06-01'),
(4, 'Advisory and Consultancy', '2024-06-01', '2024-06-01'),
(5, 'Training and Capacity Development', '2024-06-01', '2024-06-01'),
(6, 'Payroll Processing', '2024-06-01', '2024-06-01'),
(7, 'Cash Distribution Services', '2024-06-01', '2024-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'shir hussain ramazani', 'shir.ramazani338@gmail.com', 'my message', 'fdddddddddd', '2024-05-28 15:32:19', '2024-05-28 15:32:19'),
(3, 'shir hussain ramazani', 'shir.ramazani338@gmail.com', 'fd', '\nDear Russian Scholarship open doors association,\nI am writing to express my genuine interest in the field of Psychology and to apply for this esteemed opportunity. As a psychologist in the field of Psychology I constantly seek ways to further my education and advance my career goals. I believe that the mentioned scholarship would provide me with the financial support that I need to continue my studies and offer me the chance to be a part of a global community of like-minded individuals dedicated to making a positive impact in the world.\n', '2024-05-28 15:33:57', '2024-05-28 15:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `category_id`, `title`, `description`, `image`, `updated_at`, `created_at`) VALUES
(3, 'Slider', 'Sequi ea ut et est quaerat', '<p class=\"MsoNormal\">Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.<o:p></o:p></p>', 'images/1717276125.jpg', '2024-06-01', '2024-06-01'),
(4, 'what we have done', 'what we have done', '<div class=\"icon-box\"><div class=\"icon\">&nbsp;</div><h4 class=\"title\"><a href=\"\">INTERNATIONAL MEDICAL CORPS(IMC)</a></h4><p class=\"description\">Contact For Professional Services on Taxation Matters (2020-2021)</p></div><div class=\"icon-box\"><div class=\"icon\">&nbsp;</div><h4 class=\"title\"><a href=\"\">HUDA DEVELOPMENT ORGANIZATION</a></h4><p class=\"description\">Contact For Professional Services on Taxation Matters (2020-2021)</p></div><div class=\"icon-box\"><div class=\"icon\">&nbsp;</div><h4 class=\"title\"><a href=\"\">AIR GATEWAY TRAVEL AGENCY</a></h4><p class=\"description\">Tax Compliance and Business Development Consultency(2020)</p></div><div class=\"icon-box\"><div class=\"icon\">&nbsp;</div><h4 class=\"title\"><a href=\"\">ACTION AGAINST HUNGER (AAH)</a></h4><p class=\"description\">External Audit For Year 2019</p></div><div class=\"icon-box\"><div class=\"icon\">&nbsp;</div><h4 class=\"title\"><a href=\"\">IBDF INTERNATIONAL</a></h4><p class=\"description\">External Audit For Year 2015</p></div><div class=\"icon-box\"><div class=\"icon\">&nbsp;</div><h4 class=\"title\"><a href=\"\">HUDA DEVELOPMENT ORGANIZATION</a></h4><p class=\"description\">Tax Compliance Services 2019-2020</p></div>', 'images/', '2024-06-04', '2024-06-01'),
(5, 'services', 'Audit and Assurance Services', '<div class=\"icon-box icon-box-pink\"><div class=\"icon\">&nbsp;</div><h6><a class=\"text-black\" href=\"\"><small>Audit and Assurance Services</small></a></h6><p class=\"description\">Our seasoned auditors meticulously examine financial records, ensuring accuracy, compliance, and transparency...</p></div>', 'images/', '2024-06-02', '2024-06-02'),
(6, 'services', 'Tax Services', '<div class=\"icon-box icon-box-cyan\"><div class=\"icon\">&nbsp;</div><h6><a class=\"text-black\" href=\"\"><small>Tax Services</small></a></h6><p class=\"description\">ECA takes pride in delivering unparalleled tax services that transcend conventional expectations...</p></div>', 'images/', '2024-06-02', '2024-06-02'),
(7, 'services', 'Legal Services', '<div class=\"icon-box icon-box-green\"><div class=\"icon\">&nbsp;</div><h6><a class=\"text-black\" href=\"\"><small>Legal Services</small></a></h6><p class=\"description\">Your Legal Partner in Securing compliance ECA extends a comprehensive suite of legal services designed to facilitate seamless business operations.</p></div>', 'images/', '2024-06-02', '2024-06-02'),
(8, 'services', 'Advisory and Consultancy', '<div class=\"icon-box icon-box-blue\"><div class=\"icon\">&nbsp;</div><h6><a class=\"text-black\" href=\"\"><small>Advisory and Consultancy</small></a></h6><p class=\"description\">Tailored solutions for your business challenges ECA\'s Advisory and consultancy services encompass...</p></div>', 'images/', '2024-06-02', '2024-06-02'),
(9, 'services', 'Training and Capacity Development', '<div class=\"icon-box icon-box-red\"><div class=\"icon\">&nbsp;</div><h6><a class=\"text-black\" href=\"\"><small>Training and Capacity Development</small></a></h6><p class=\"description\">Recognizing the importance of human capital, ECA offers tailored capacity-building programs designed to enhance the...</p></div>', 'images/', '2024-06-02', '2024-06-02'),
(10, 'services', 'Payroll Processing', '<div class=\"icon-box icon-box-purple\"><div class=\"icon\">&nbsp;</div><h6><a class=\"text-black\" href=\"\"><small>Payroll Processing</small></a></h6><p class=\"description\">ECA simplifies payroll management by offering efficient and accurate payroll processing services...</p></div>', 'images/', '2024-06-02', '2024-06-02'),
(11, 'services', 'Cash Distribution Services', '<div class=\"icon-box icon-box-orange\"><div class=\"icon\">&nbsp;</div><h6><a class=\"text-black\" href=\"\"><small>Cash Distribution Services</small></a></h6><p class=\"description\">With an emphasis on security and efficiency, eca facilitates secure cash distribution services for clients across various sectors...</p></div>', 'images/', '2024-06-02', '2024-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(71, '0001_01_01_000000_create_users_table', 1),
(72, '0001_01_01_000001_create_cache_table', 1),
(73, '0001_01_01_000002_create_jobs_table', 1),
(74, '2024_04_15_092233_create_contact_us_table', 1),
(75, '2024_04_18_175555_create_sectors_table', 1),
(76, '2024_04_20_042005_create_abouts_table', 1),
(77, '2024_04_21_065415_create_teams_table', 1),
(78, '2024_04_21_101209_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `category_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'SECTORS', '<p style=\"-webkit-text-stroke-width:0px;background-color:rgb(243, 248, 250);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-bottom:0px;margin-top:0px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">To boost the overall business enabling environment and help entrepreneurs and micro, small, and medium companies (MSMEs) thrive, ECA collaborates with private business incubators and accelerators, as well as firms of all sizes. ECA assisted entrepreneurs and MSMEs in gaining access to capital and vital services, as well as having precise financial documentation and clear taxation, via its support and services. Furthermore, ECA collaborate with local enterprises to provide consulting and training services in order to help organizations and employees develop their potential.</p><p><br>&nbsp;</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(243, 248, 250);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-bottom:0px;margin-top:0px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Eagle-Wise chartered Accountants has the privileged of working with public sector of the country. Public enterprises, often known as state-owned firms, are self-financing commercial enterprises controlled by the government that offer a variety of private goods and services. ECA has worked with some of the ministries of Afghanistan and are still in progress to achieve various projects of the government and provide the best quality services to the government and especially to inhabitants of the country.</p><p><br>&nbsp;</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(243, 248, 250);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-bottom:0px;margin-top:0px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Eagle-Wise chartered Accountants is also working with various NGO’s and Welfare organizations across Afghanistan. ECA provide their own services to them and help them in every aspect of their functions. ECA also tend to work with charity organizations and provide their own services at very low or less costs.</p><p><br>&nbsp;</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(243, 248, 250);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-bottom:0px;margin-top:0px;orphans:2;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">ECA provide Audit, Taxation and Advisory services as per the applicable Laws, Regulations, FIRSs, IASs, ISAs, IPSAS, IPPFs’ Standards to the below sectors at large.</p>', 'images/', '2024-06-01 18:46:21', '2024-06-01 18:46:21'),
(2, NULL, 'Sector points', '<div class=\"col-md-4\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(243, 248, 250);box-sizing:border-box;color:rgb(68, 68, 68);flex:0 0 auto;font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-top:var(--bs-gutter-y);max-width:100%;orphans:2;padding-left:calc(var(--bs-gutter-x) * .5);padding-right:calc(var(--bs-gutter-x) * .5);text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;width:379.99px;word-spacing:0px;\"><ul><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Manufacturing</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Mining and energy</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Oil and gas</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Financial institutions</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Professional services</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Insurance companies</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Donors community</li></ul></div><div class=\"col-md-4\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(243, 248, 250);box-sizing:border-box;color:rgb(68, 68, 68);flex:0 0 auto;font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-top:var(--bs-gutter-y);max-width:100%;orphans:2;padding-left:calc(var(--bs-gutter-x) * .5);padding-right:calc(var(--bs-gutter-x) * .5);text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;width:379.99px;word-spacing:0px;\"><ul><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Information technology</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Vehicle financing and leasing</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Wholesale and retail trade</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Construction</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Food and beverage</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Entertainment</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Telecommunications</li></ul></div><div class=\"col-md-4\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(243, 248, 250);box-sizing:border-box;color:rgb(68, 68, 68);flex:0 0 auto;font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-top:var(--bs-gutter-y);max-width:100%;orphans:2;padding-left:calc(var(--bs-gutter-x) * .5);padding-right:calc(var(--bs-gutter-x) * .5);text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;width:379.99px;word-spacing:0px;\"><ul><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">NGOs</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Retail</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Health care</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Pharmaceutics</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Public Sectors organization</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Demanded clients</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Not-for-profit and charities, including sports organizations, churches, etc</li><li style=\"box-sizing:border-box;color:rgb(153, 153, 153);line-height:20px;list-style:none;margin-bottom:1rem;margin-top:0px;padding:0px;text-align:left;\">Real estate, land development and property management</li></ul></div>', 'images/', '2024-06-01 18:49:09', '2024-06-01 18:49:09'),
(3, NULL, 'Private Sectors', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">To boost the overall business enabling environment and help entrepreneurs and micro, small, and medium companies (MSMEs) thrive, ECA collaborates with private business incubators and accelerators, as well as firms of all sizes. ECA assisted entrepreneurs and MSMEs in gaining access to capital and vital services, as well as having precise financial documentation and clear taxation, via its support and services. Furthermore, ECA collaborated with local enterprises to provide consulting and training services in order to help organizations and employees develop their potential.</span></span></p>', 'images/', '2024-06-01 18:50:06', '2024-06-01 18:50:06'),
(4, NULL, 'Public Sectors', '<p style=\"-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-bottom:1rem;margin-top:0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Eagle-Wise chartered Accountants has the privileged of working with public sector of the country. Public enterprises, often known as state-owned firms, are self-financing commercial enterprises controlled by the government that sell a variety of private goods and services.</p><p style=\"-webkit-text-stroke-width:0px;box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin-bottom:1rem;margin-top:0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">They typically function on a commercial basis. ECA has worked with some of the ministries of Afghanistan and are still in progress to achieve various projects of the government and provide the best quality services to the government and especially to inhabitants of the country.</p>', 'images/', '2024-06-01 18:51:16', '2024-06-01 18:51:16'),
(5, NULL, 'NGO’S & WELFARE', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Eagle-Wise chartered Accountants is also working with various NGO’s and Welfare organizations across Afghanistan. ECA provide their own services to them and help them in every aspect of their functions. ECA also tend to work with charity organizations and provide their own services at very low or less costs.</span></span></p>', 'images/', '2024-06-01 18:51:57', '2024-06-01 18:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Description', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" open=\"\">We provide meticulous Audit and Assurance Services, ensuring accurate and transparent financial records. Our experienced auditors adhere to high standards, employing the latest audit methodologies and staying updated on accounting practices. We offer tailored project audits for prominent donor agencies in Afghanistan and conduct statutory audits for various organizations. Additionally, we perform Special Purpose Audits aligned with ISA 805. Our services empower clients with comprehensive financial insights and uphold strict auditor independence.</span></span></p>', 'images/', '2024-06-01 14:38:57', '2024-06-04 14:21:53'),
(2, 1, 'Elevating Standards, Ensuring Integrity', '<p><span style=\"font-family:&quot;Open Sans&quot;, sans-serif;font-size:15px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Our seasoned auditors meticulously examine financial records, ensuring accuracy, compliance, and transparency. Our rigorous auditing processes provide clients with a comprehensive understanding of their financial health and enable them to make informed decisions. We adhere to the highest standards of quality by employing the latest Eagle General Audit Methodology (EGAM) in conducting audits, ensuring alignment with ECA standards. We bolster our audit teams with a cadre of specialists who stay abreast of both domestic and international accounting and auditing practices. This proactive approach enables us to swiftly adapt to changes in accounting systems and laws. Moreover, to augment the effectiveness of our audit services, we have established a robust audit opinion review system overseen by independent review committees separate from the audit teams. This synergy of seasoned professionals, coupled with the utilization of contemporary, tailored knowledge-sharing systems, plays a pivotal role in upholding ECA\'s commitment to strict auditor independence.</span></span></p>', 'images/', '2024-06-01 14:43:37', '2024-06-01 14:43:37'),
(3, 1, 'Project Financial Statement Audit', '<p><span style=\"font-family:&quot;Open Sans&quot;, sans-serif;font-size:15px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">We possess a comprehensive understanding of the criteria established by prominent donor agencies operating in Afghanistan, including UNDP, UN Women, UNOPS, UNOCHA, US Embassy, World Bank, and USAID. Our extensive expertise extends to the audit of funds associated with these agencies, and we provide project audit services tailored to meet the specific requirements and reporting guidelines stipulated by the donor agencies.</span></span></p>', 'images/', '2024-06-01 14:45:04', '2024-06-01 14:45:04'),
(4, 1, 'Statutory Audit', '<p><span style=\"font-family:&quot;Open Sans&quot;, sans-serif;font-size:15px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">We specialize in conducting statutory annual audits of financial statements for a diverse range of organizations, including non-governmental organizations (NGOs), public sector entities, and private sector businesses. Our services align with the requirements set forth by the Ministry of Economy and the Ministry of Commerce and Industry in Afghanistan.</span></span></p>', 'images/', '2024-06-01 14:46:27', '2024-06-01 14:46:27'),
(5, 1, 'Special Purpose Audit', '<p><span style=\"font-family:&quot;Open Sans&quot;, sans-serif;font-size:15px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">We extend our audit services to encompass specific elements or items within financial statements, meticulously aligned with the special purpose framework in accordance with ISA 805.hanistan.</span></span></p>', 'images/', '2024-06-01 14:47:30', '2024-06-01 14:47:30'),
(6, 2, 'Tax Services', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" open=\"\">ECA takes pride in delivering unparalleled tax services that transcend conventional expectations. Our dedicated team of seasoned professionals is well-versed in navigating the complexities of local tax regulations to provide clients with practical and strategic solutions tailored to their unique needs. Whether you are an individual, a small business, or a large corporation, we are committed to optimizing your tax position and ensuring compliance with the latest fiscal requirements. Our approach goes beyond mere compliance; we strive to identify opportunities for tax efficiency, offering comprehensive guidance to help you make informed financial decisions. At ECA, we believe in delivering not just services but a partnership that empowers you with the knowledge and confidence to navigate the ever-evolving landscape of tax regulations. We offer a comprehensive range of tax compliance services in this domain.</span></span></p>', 'images/1717271474.jpg', '2024-06-01 14:49:41', '2024-06-01 15:21:14'),
(7, 2, 'part 2', '<ul class=\"todo-list\"><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Monthly and quarterly tax returns filling and assessment.</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Obtaining verification of monthly withholding taxes from the Taxpayers’ Services Department (TSD).</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Preparation and filing of Annual income tax return based on the documents provided by the client.</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Provide regular tax advice to “clients” on tax related issues in accordance with the tax compliances rules.</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Obtaining tax clearance on annual basis from Tax office, based on the submitted tax return for the year.</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Assisting the client in all tax matters at case management level in respect of the submitted tax return as reported through ECA.</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Assist clients in tax audit proceedings</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Obtaining tax exemption certificate for national and international NGOs, based on income tax law of Afghanistan. (for national and international grants etc).</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Obtaining tax exemption under bilateral agreement and treaties (US-ARMY, NATO/ISAF Contractors and sub-contractors, UN AND USAID Contractors, World bank and EU contractors etc).</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Obtaining tax clarification on specific taxation matters.</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Preparing and submitting tax amendments as result of tax audit any tax exemption and correction in the tax returns based on tax laws.</span></label></li><li style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(68, 68, 68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;list-style:none;margin-bottom:1rem;margin-top:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><label class=\"todo-list__label\"><input type=\"checkbox\" disabled=\"disabled\"><span class=\"todo-list__label__description\">Contesting any tax matter on behalf of tax clients relating to adjustment of tax refunds and overpayment of taxes like withholding taxes on interest etc.</span></label></li></ul>', 'images/', '2024-06-01 14:52:20', '2024-06-01 14:52:20'),
(8, 3, 'Legal Services', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Your Legal Partner in Securing compliance ECA extends a comprehensive suite of legal services designed to facilitate seamless business operations. Our expertise encompasses the entire spectrum, from company registration to de-registration, ensuring a smooth and compliant process throughout the lifecycle of your business. We specialize in licensee renewal services, guiding clients through the necessary steps to maintain legal standing and operational continuity. Additionally, our adept team handles visa arrangements, streamlining the often intricate procedures associated with workforce mobility. At ECA, we recognize the critical role legal compliance plays in the success of any enterprise. Our commitment is to provide meticulous and timely legal services, allowing our clients to focus on their core objectives with the assurance of a strong legal foundation supporting their endeavors.</span></span></p>', 'images/1717271643.jpg', '2024-06-01 15:24:03', '2024-06-01 15:24:03'),
(9, 4, 'Advisory and Consultancy', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Tailored solutions for your business challenges ECA\'s Advisory and consultancy services encompass a wide spectrum of business needs, ranging from strategic planning and risk management to performance optimization and operational efficiency. We collaborate closely with clients to devise actionable strategies that drive growth and enhance competitiveness. Our advisory teams collaborate with you to address challenges, crafting innovative solutions with a unique blend of scale, expertise, and service excellence you’ll find only here.</span></span></p>', 'images/1717271782.jpg', '2024-06-01 15:26:22', '2024-06-01 15:26:22'),
(10, 5, 'Training and Capacity Development', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Recognizing the importance of human capital, ECA offers tailored capacity-building programs designed to enhance the skills and knowledge of personnel within organizations. Our training initiatives contribute to improved financial management and decision-making.</span></span></p>', 'images/1717271877.jpg', '2024-06-01 15:27:57', '2024-06-01 15:27:57'),
(11, 6, 'Payroll Processing', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:&quot;Open Sans&quot;, sans-serif;font-size:16px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">ECA simplifies payroll management by offering efficient and accurate payroll processing services. Our streamlined systems ensure timely and error-free salary disbursement while adhering to regulatory requirements &amp; independence.</span></span></p>', 'images/1717272020.png', '2024-06-01 15:30:20', '2024-06-01 15:30:20'),
(12, 7, 'Cash Distribution Services', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(68,68,68);font-family:;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\" open=\"\">With an emphasis on security and efficiency, eca facilitates secure cash distribution services for clients across various sectors. Our meticulous processes mitigate risks associated with cash handling and transportation.</span></span></p>', 'images/1717273968.webp', '2024-06-01 16:02:48', '2024-06-04 14:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('77qN9gI0rpjV1F2S2j1hH0y0205pHwSOASGUTlne', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiREVTMTd5ZjlKQm1jT2tON3lyUHp6ZmZoTWlKdkVlbGx3NkdLejVMaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWN0b3IiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE4OiJsYXN0X2FjdGl2aXR5X3RpbWUiO3M6MTk6IjIwMjQtMDYtMDUgMDA6MzQ6MDEiO30=', 1717547641),
('HrijANJDaEfgkX8BSbDq14LW967OqhGmAUhWteoA', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiOHRCS0NuRnlwSHBDMkZBcXZ6TTlDYnRPc2dlMHlxR3d2Y28wTHpWSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJuYW1lIjtzOjU6ImFkbWluIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RlYW0iO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE4OiJsYXN0X2FjdGl2aXR5X3RpbWUiO3M6MTk6IjIwMjQtMDYtMDQgMjE6MTU6MTEiO30=', 1717535711);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `social_links` varchar(5000) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `position`, `social_links`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Foulad Khan Shinwary', 'CHIEF EXECUTIVE OFFICER', '<a href=\"\"><i class=\"bi bi-twitter\"></i></a> <a href=\"https://www.facebook.com/people/Foulad-Shinwary/pfbid02Gfrv2myqTbBugQrzUfhpBUEM49wYnK3kAxC3tj2rLwnuDok8oGQhSPc8MNjHTP7Xl/\"                                     target=\"_blank\"><i class=\"bi bi-facebook\"></i></a>                                 <a href=\"\"><i class=\"bi bi-instagram\"></i></a>                                 <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>', '<p>Mr. Foulad Khan is a certified legal tax consultant from the Afghanistan Ministry of Finance (AMOF). He is the president and tax partner of the Eagle Wise Chartered Accountants Company and has significant experience collaborating with both domestic and international organizations in Afghanistan. He also has expertise in directing the academic role of the universities in Afghanistan.</p>', 'images/1717278499.jpg', '2024-06-01 17:18:19', '2024-06-04 20:03:16'),
(2, 'Mr.Nauroz Khan', 'VICE PRESIDENT/MANAGING DIRECTOR/BUSINESS DEVELOPMENT CONSULTANT', '<a href=\"\"><i class=\"bi bi-twitter\"></i></a>                                 <a href=\"https://www.facebook.com/naurozkhan89\" target=\"_blank\">                                     <i class=\"bi bi-facebook\"></i>                                 </a>                                 <a href=\"\"><i class=\"bi bi-instagram\"></i></a>                                 <a href=\"https://www.linkedin.com/in/nauroz-khan-7a2a1881\" target=\"_blank\"><i                                         class=\"bi bi-linkedin\"></i></a>', '<p>Mr. Nauroz Khan has substantial expertise in the field of business development, management, and capacity building. He has wide experience working with Afghan government ministries, and national and international NGOs over the last ten years. Apart from being an ECA shareholder, he has been assisting the business development department at Eagle-Wise Chartered Accountants Company.</p>', 'images/1717278896.jpg', '2024-06-01 17:24:56', '2024-06-04 20:02:44'),
(3, 'Mr.Noor Rehman', 'PARTNER-TAX/EXECUTIVE DIRECTOR', '<a href=\"\"><i class=\"bi bi-twitter\"></i></a>                                 <a href=\"https://www.facebook.com/noor.rehman.5851\"><i class=\"bi bi-facebook\"                                         target=\"_blank\"></i></a>                                 <a href=\"\"><i class=\"bi bi-instagram\"></i></a>                                 <a href=\"https://www.linkedin.com/authwall?trk=bf&trkInfo=AQGTgf-j4TIIQQAAAY7_jq_IujtSWCwNXhC2exXNggn0VUC8PIQXbYOAdal-Qa7kQq_mG0BK-6XGf4enfFx2cdMnW3kIM0k3ZiWbS9dnXVlTdFEBAlnAAJ9YF3uRBcx_Q3MFj4o=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fnoor-rehman-khattak-73b84520\"                                     target=\"_blank\"><i class=\"bi bi-linkedin\"></i></a>', '<p>Mr. Noor Rehman has worked with 3 of the big four audit firms (Deloitte, PWC-Afghanistan, KPMG-Afghanistan, and Grant Thornton International) IN Afghanistan since 2005. He has extensive experience in tax compliance, tax advisory, and corporate services with national and international organizations. Mr. Noor Rehman is currently working virtually as an Executive director – of Tax &amp; Corporate Services with ECA.</p>', 'images/1717279042.jpg', '2024-06-01 17:27:22', '2024-06-04 20:02:03'),
(4, 'Mr.Zahidullah Hammad', 'PARTNER/FINANCE & ADMIN', '<a href=\"\"><i class=\"bi bi-twitter\"></i></a>                                 <a href=\"\"><i class=\"bi bi-facebook\"></i></a>                                 <a href=\"\"><i class=\"bi bi-instagram\"></i></a>                                 <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>', '<p>Mr. Zahid Ullah has significant experience in management, administration, internal control, and consulting services. He has worked with a range of local and international organizations in Afghanistan as part of his professional expertise. He is the Admin f Eagle Wise Chartered Accountants in addition to being an ECA partner.</p>', 'images/1717279155.jpg', '2024-06-01 17:29:15', '2024-06-04 20:01:21'),
(5, 'Mr. Siddiqullah', 'SENIOR MANAGER-AUDIT &ASSURANCE', '<a href=\"\"><i class=\"bi bi-twitter\"></i></a>                                 <a href=\"\"><i class=\"bi bi-facebook\"></i></a>                                 <a href=\"\"><i class=\"bi bi-instagram\"></i></a>                                 <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>', '<p>Mr. Siddiqullah is a member of the Association of Chartered Certified Accountants (ACCA) with over ten years of professional and advanced job experience in auditing, accounting services, training, and development. He has extensive experience working with national and international organizations around the world</p>', 'images/1717279234.png', '2024-06-01 17:30:34', '2024-06-04 20:00:00'),
(6, 'Mr. Bakht Rawan', 'PARTNER-TAX/DIRECTOR', '<a href=\"\"><i class=\"bi bi-twitter\"></i></a>                                 <a href=\"\"><i class=\"bi bi-facebook\"></i></a>                                 <a href=\"\"><i class=\"bi bi-instagram\"></i></a>                                 <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>', '<p>Bakht is currently employed by Eagle Wise Chartered Accountants as Director of Tax &amp; Corporate Services. For the previous three years, he worked for one of the Big Four audit and tax firms (Deloitte) and RSM International. He is a well-known expert in Kabul for tax and corporate concerns. Bakht has almost a decade of expertise dealing with tax and corporate issues. He is well-versed in Afghanistan\'s working environment as well as its legal norms. He has maintained professional and personal relationships with key tax office officials.</p>', 'images/1717279331.png', '2024-06-01 17:32:11', '2024-06-04 19:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'shir.ramazani338@gmail.com', 'ahmad', NULL, '$2y$12$2iCNflc2Dax3j2nvBPlXQe2JAzoPT8w8QaJXCdcT1J3xhNPyDBLzu', NULL, '2024-05-28 15:29:45', '2024-05-28 15:29:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
