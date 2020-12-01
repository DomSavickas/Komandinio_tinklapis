-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Grd 01 d. 19:22
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblogsystem`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `post_text` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `blogposts`
--

INSERT INTO `blogposts` (`id`, `title`, `post_text`, `timestamp`) VALUES
(1, 'News', 'Our website finally saw the light of day. \r\nBig thanks to developers: Dovydas Čeponis, Ramūnas Daukas, Dominykas Savickas, Domantas Daknys, Austis Mačerauskas, Lukas Vileikis.', '2020-12-01 17:44:48'),
(4, 'Hackers exploiting MobileIron vulnerability By: Maria Henriquez (Accuracy: 85% Tested by: Dominykas)', ' Source: (https://www.securitymagazine.com/articles/94038-hackers-exploiting-mobileiron-vulnerability).                   \r\nThe UK\'s National Cyber Security Centre has issued an alert on the MobileIron remote code execution vulnerability. According to the alert, APT nation state groups and cybercriminals are exploiting this vulnerability to compromise the networks of UK organizations.\r\n\r\nIn June 2020 MobileIron, a provider of mobile device management (MDM) systems, released security updates to address several vulnerabilities in their products. This included CVE-2020-15505, a remote code execution vulnerability, rated critical. MDM systems allow system administrators to manage an organization’s mobile devices from a central server, making them a valuable target for threat actors.\r\n\r\nThe NCSC is aware that Advanced Persistent Threat (APT) nation-state groups and cybercriminals are now actively attempting to exploit this vulnerability [T1190] to compromise the networks of UK organizations.\r\n\r\nThe Cybersecurity and Infrastructure Agency (CISA) in the US has also noted that APTs are exploiting this vulnerability in combination with the Netlogon/Zerologon vulnerability CVE-2020-1472 in a single intrusion.\r\n\r\nThis critical vulnerability affects MobileIron Core and Connector products and could allow a remote attacker to execute arbitrary code on a system. The MobileIron website lists the following versions as affected:\r\n\r\n    10.3.0.3 and earlier\r\n    10.4.0.0, 10.4.0.1, 10.4.0.2, 10.4.0.3, 10.5.1.0, 10.5.2.0 and 10.6.0.0\r\n    Sentry versions 9.7.2 and earlier\r\n    9.8.0\r\n    Monitor and Reporting Database (RDB) version 2.0.0.1 and earlier\r\n\r\nA proof of concept exploit became available in September 2020 and since then both hostile state actors and cybercriminals have attempted to exploit this vulnerability in the UK. These actors typically scan victim networks to identify vulnerabilities, including CVE-2020-15505, to be used during targeting (T1505.002). In some cases, when the latest updates are not installed, they have successfully compromised systems. The healthcare, local government, logistics and legal sectors have all been targeted but others could also be affected. \r\n\r\nTom Davison, Technical Director – International at Lookout, a San Francisco, Calif.-based provider of mobile security solutions, notes, \"The interesting story here is the assertion by cybersecurity agencies in the UK (NCSC) and the US (NSA) that nation state APT groups are actively exploiting these vulnerabilities, five full months after patches were issued.  Mobile Device Management servers are by definition reachable from the public internet making them opportune targets. Offering a gateway to potentially compromise every mobile device in the organization, the attraction to attackers is clear.  This highlights not just the importance of patching open vulnerabilities, but also the criticality of having a dedicated mobile security capability that is distinct from device management infrastructure.\"', '2020-12-01 18:05:06'),
(5, 'Anatomy of data breach in cloud generation By: Pushkar Tiwari (Accuracy: 90%, Tested by: Dominykas)', ' Source: (https://www.securitymagazine.com/articles/94036-anatomy-of-data-breach-in-cloud-generation).                  \r\nIn 2017, Gartner predicted that the public cloud computing industry would be worth $236 billion by 2020, as its demand, driven by the growing number of businesses recognizing cloud computing as a data center solution, seems to surge. And for good reasons. Cloud has proven to offer enhanced stability, security, flexibility, and cost-saving.\r\n\r\nLogicMonitor’s ‘Evolution of IT’ report 2020 also shows that cloud migration has got big acceleration due to the pandemic. Cloud is taking the industries by storm and the stats about its adoption are interesting to know.\r\nSome Incredible Cloud Adoption Stats\r\n\r\n    The public cloud service market is expected to reach $623.3 billion by 2023 worldwide.\r\n    83% of enterprise workloads will be in the cloud by the end of 2020.\r\n    94% of enterprises already use a cloud service.\r\n    30% of all IT budgets are allocated to cloud computing.\r\n    66% of enterprises already have a central cloud team or a cloud center of excellence.\r\n    Businesses leverage almost 5 different cloud platforms on average.\r\n    50% of enterprises spend more than $1.2 million on cloud services annually.\r\n\r\nTraditionally, in the on-premises world, the data is isolated and nowhere close to the internet, while in the cloud, the data is easily accessible through the internet. Cloud Migration has invalidated all the assumptions around data security that were valid for on-premises. It is extremely difficult for Information Security professionals to adapt their practices to rapidly evolving cloud environments, which is leading to cloud-based data breaches.\r\n\r\n \r\nData breaches in cloud are rising at a rapid speed\r\n\r\nData breaches targeting cloud-based infrastructures increased by 50% in 2019 as compared to 2018 as businesses shifted more of their confidential information to cloud, but misconfiguration and internal insiders’ threats increased the data breach risk, as per the 2020 Verizon Data Breach Investigations Report.\r\n \r\nThe rising cloud security concerns\r\n\r\nAberdeen, a research firm, has found that at least one in every three businesses loses its SaaS data. Cloud providers (SaaS & IaaS) assure the protection for downtime resulted from power losses, natural disasters, and application failures. It is a challenge to ensure data security in this dynamic environment.\r\n\r\nData breaches in the cloud are happening due to multiple factors like malicious attacks, well-meaning insiders, malicious insiders, stolen or compromised credentials, and misconfigurations. Cloud Data breaches are very evident in some major breaches like Capital One Financial Corporation, Verizon.\r\n\r\n \r\n\r\nThe data breach at Capital One financial corporation\r\n\r\nTake one of the recent examples of cloud-based data breach, i.e. of Capital One Financial Corporation, that happened in July 2019. It resulted in a hefty fine of $80 million for the company, imposed by the Office of the Comptroller of the Currency. In this data breach, an ex-employee at Amazon Web Services illegally accessed the Capital One’s AWS cloud servers utilizing a misconfigured web application firewall and leaked the personal data of over 106 million customers.\r\n\r\n \r\n\r\nThe Data Leaks at Verizon\r\n\r\nA similar incident was encountered in 2017 when Verizon fell victim to Cloud Data Leak that exposed millions of customers’ data. Almost 6 million of Verizon’s customers in the U.S. had their account details exposed, including the PINs.\r\n\r\nVerizon’s data leak is attributed to a misconfigured cloud server that resulted due to a third-party provider that wrongly configured Verizon\'s cloud-based file repository placed in an Amazon Web Services S3 bucket on NICE\'s cloud server.\r\n\r\nThese are two of thousands of cloud-based data breach cases, raising concerns on the cloud security and data migration to this novel solution.\r\n\r\n \r\nThe key data breach sources\r\nMalicious attack\r\n\r\nAs per Ponemon data  breach report 2020, malicious attacks is listed as the most common and expensive data breach cause: 52% Data breaches caused by malicious attacks. Malicious attack comprises various techniques like social engineering attacks, vulnerability exploits, malware infections etc.\r\n\r\n \r\n\r\nSocial engineering attacks\r\n\r\nSocial engineering is a non-technical strategy that cyberattackers use. It relies heavily on human interaction and often involves tricking people into breaking standard security practices. When successful, many social engineering attacks enable attackers to gain legitimate, authorized access to confidential information.\r\n\r\n \r\n\r\nVulnerability exploits\r\n\r\nAn exploit is a code that takes advantage of a software vulnerability or security flaw. When used, exploits allow an intruder to remotely access a network and gain elevated privileges or move deeper into the network.\r\n\r\n \r\n\r\nMalware infections\r\n\r\nToday, most malware is a combination of traditional malicious programs, often including parts of Trojans and worms and occasionally a virus. Usually the malware program appears to the end-user as a Trojan, but once executed, it attacks other victims over the network like a worm.\r\n\r\n \r\n\r\nThe case of Equifax data breach due to unpatched vulnerability\r\n\r\nEquifax, one of the three largest consumer credit reporting agencies in the United States, announced in September 2017 that its systems had been breached and the sensitive personal data of 148 million Americans had been compromised. The data breached included names, home addresses, phone numbers, dates of birth, social security numbers, and driver’s license numbers. The vulnerability that attackers exploited to access Equifax\'s system was in the Apache Struts web-application software, a widely used enterprise platform.\r\n\r\n \r\nWell-Meaning Insiders\r\n\r\nThe Insider comes in many guises: the most common type includes those who are not aware of security policies, accidentally creating public share links, accessing unauthorized applications to increase their productivity. Well-meaning insiders do not have bad intentions but inadvertently causes a data breach due their negligence or outsider influence falling for a phishing scam or becoming the victim of blackmail, for example.\r\n\r\nThere are multiple instances where big enterprises inadvertently suffered data breach due to sharing public links to files in cloud storage applications like Box, One Drive, etc.\r\n\r\n \r\n\r\nInadvertent leak of sensitive information from Box by well-meaning insiders\r\n\r\nAlthough data saved in Box enterprise accounts is fully private by default, the users can still share files and folders across, which makes data publicly accessible via a single link. Adversis found over 90 businesses with publicly accessible folders. Worse, many public folders were indexed and scraped by search engines, making the data to be found more easily. Companies lost sensitive data like SSN, passwords, employee list etc.  Accidental sharing of public links to files in the Box accounts led to the data leaks incidents in many companies including Amadeus, Apple, and Discovery.\r\n\r\n \r\nMalicious insiders\r\n\r\nMalicious insiders can be terminated employees, spy, former employees, contractors, or business associates who have legitimate access to your systems and data, but use that access to destroy data, steal data, or sabotage your systems.\r\n\r\nDue to the pandemic, there are many layoffs already happening and more can happen. This is leading to disgruntled employees who can potentially be turned into malicious insiders. These employees who have left the organization may continue to have access to cloud service if access to cloud service is not revoked at the right time and they can misuse the access to steal sensitive information. Data leaks at Sage is a classic example of data leak caused by disgruntled employee misusing the access.\r\n\r\n \r\n\r\nCase of data breach at Sage by malicious insider\r\n\r\nAs per ibtimes, the London Police arrested the employee of Sage, a UK technology firm, for a recent data breach that has exposed between 200 and 300 of its customers’ accounts. The 32-years old female employee was involved in \"unauthorized access\" on Sage’s computer systems that left data at risk. At the time of the incident, Sage did not stipulate the kind of data accessed. However, as per Financial Times, the employees\' information was used to access data on \"between 200 and 300 companies.\"\r\n\r\n \r\nCloud service misconfigurations\r\n\r\nThe 2020 Cloud Misconfigurations Report studied all of the data breaches publicly reported between 2018 and 2019 across the globe, finding that 196 separate data breaches were identified as having been definitively caused primarily by cloud misconfigurations.\r\n\r\nOrganizations are rapidly adopting cloud services provided by multiple cloud providers. Each cloud providers have multiple security configurations. The security configurations exploded with multiple providers and various security configurations with each provider. It is extremely difficult for security teams to learn and understand the complexities of security configurations in the dynamic environment involving multiple cloud providers. This leads to inadvertently making mis-configurations mistakes.\r\n\r\nCommon misconfigurations are:\r\n\r\n    Weak authentication of data storage\r\n    Carry over on-prem configuration as is to cloud\r\n    Misconfigurations of security policy on data storage items like AWS S3 objects, public S3 bucket, public share link etc.\r\n    Over Privileged accounts\r\n    Cloud administrators sometimes do not enforce strong authentication.\r\n\r\n \r\n\r\nThe cloud misconfiguration case at Verifications.io\r\n\r\nVerifications.io, a self-described \"big data email verification platform,\" suffered a data breach exposing some 763 million records. The breach was discovered by security researcher Bob Diachenko, who worked with fellow researcher Vinny Troia to count the number of exposed records and identify who was exposing them. They say the trail quickly led them to Verifications.io, a site that offers an \"enterprise email validation\" service.\r\n\r\n \r\nHow to Keep Information Secure in Cloud?\r\n\r\nInformation discovery\r\n\r\nAdministrators should know what type of sensitive information is stored, where it is stored, what type access control configured, etc. It is impossible to manually track all the information types and their access configurations. Cloud providers have some native information discovery services, and there are third party security tools available that can provide real time monitoring of information stored in the cloud.\r\n\r\nDiscovery phase reveals all the types of sensitive information like PII, PCI, Intellectual Property HIPAA, sensitive keys, passwords, etc. Discovery can also reveal access configurations like public share links, collaborators etc.\r\n\r\n \r\nVulnerability management\r\n\r\nUnpatched vulnerability is one of the biggest root causes of security breaches in the cloud. Administrators should establish good vulnerability management programs and practices. They can leverage native tools provided by cloud providers or third-party tools to discover vulnerabilities in the cloud deployments.\r\n\r\n \r\nProactively remediate security incidents\r\n\r\nSecurity incidents are generated through discovery and active monitoring of cloud services. These incidents can reveal insights like:\r\n\r\n    sensitive information shared through public share\r\n    shared with external collaborators\r\n    in appropriate access configurations\r\n    no encryption\r\n    unpatched Vulnerability\r\n\r\nThese incidents should be proactively addressed by taking appropriate actions.\r\n\r\n \r\nLeverage incident analytics tools\r\n\r\nIn cloud generation, information threat vectors are exponentially growing. Administrators need good incident analytics tools that can analyze security risk incidents from multiple vendors and generate key actionable insights for administrators. These analytics tools can apply modern machine learning techniques to detect malicious user and application behaviors and prevent them from leaking sensitive data.\r\n \r\nSecurity best practices\r\n\r\n    Configure your cloud service accounts following best practices recommended by the providers like enable auditing, appropriate logging, default permissions, disabling root accounts, disable public sharing etc.\r\n    Follow the principle of least privilege for each account and workloads, and separation of duties for sensitive activities.\r\n    Extra protection is needed for high privilege accounts and proper access auditing for these accounts should be configured.\r\n    Periodic rotation of security keys. Rotation intervals can vary between 30-days to 12 months depending on sensitivity of the key. This is very effective if accidentally employees leaving the company have security keys or keys get misplaced or lost.\r\n    Use corporate identities and enable multi factor authentication to access cloud services. For example, organizations can use Identity management services to address this. This can prevent ex-employees from accessing services after they leave the company.\r\n    Active program for user education to ensure users are aware of security policies and best practices to keep organization information secure. Information security is incomplete without proper user education.\r\n\r\n \r\nConclusion\r\n\r\nMore and more companies are adopting the public cloud quickly because they need their speed and agility to be competitive and innovative in today\'s fast-paced business landscape. The problem is, many of these companies are failing to adopt a holistic approach to security, which opens them up to undue risk. Secure cloud configuration must be a dynamic and continuous process, and it must include automated remediation. Security efforts and measures to guarantee confidentiality, integrity, and availability can be split in between those oriented to prevention and those liable for detection.', '2020-12-01 18:05:17');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message_text` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `message`
--

INSERT INTO `message` (`id`, `email`, `message_text`, `timestamp`) VALUES
(2, 'tom@gmail.com', ' I would like to request your assistance. I am confused about the upload process.', '2020-12-01 17:55:54'),
(3, 'alex@gmail.com', ' I would like to request help. I want to know the process that a post needs to go through to be verified.', '2020-12-01 17:59:06');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `rating_info`
--

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(2, 1, 'like'),
(2, 4, 'like'),
(2, 5, 'like'),
(3, 4, 'like'),
(3, 5, 'like'),
(5, 1, 'like'),
(5, 4, 'like'),
(5, 5, 'like'),
(6, 4, 'dislike'),
(6, 5, 'like');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`, `postid`) VALUES
(10, 0, 'Informative article', 'Tom', '2020-12-01 17:52:05', 4),
(11, 0, 'The article covers an interesting subject, but sadly it is a bit too long, but it is worth your attention.', 'Alex', '2020-12-01 17:54:24', 5),
(12, 0, 'This article was really helpful.', 'Tom', '2020-12-01 17:59:57', 5);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(200) NOT NULL,
  `usersEmail` varchar(200) NOT NULL,
  `usersUID` varchar(200) NOT NULL,
  `usersPWD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUID`, `usersPWD`) VALUES
(5, 'Alex', 'alex@gmail.com', 'alex123', '$2y$10$ykjVdorZm.TQs3pCjUyjEOuQjfmCdCscb3KDrfkqQIiiXU5qWQ.oy'),
(6, 'Tom', 'tom@gmail.com', 'tom123', '$2y$10$H3Y.UaH3A7Zqiq9e5U2jCugASpIEkV7yJWvIkwy.RQ5s//2NTfP.q'),
(7, 'Admin', 'admin@gmail.com', 'admin123', '$2y$10$p3d9dSu2uybrAk5YIiVtxuBSqUHfyTW0ePhJwMMca7unQxvvXvBze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
