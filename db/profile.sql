

CREATE TABLE `profile` (
  `uid` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `donor` varchar(1) NOT NULL
) ;
INSERT INTO `profile` (`uid`, `email`, `name`, `sex`, `phone`, `donor`) VALUES
(3, 'aggu@xyz.com', 'AGGU', 'M', '12345', 'Y'),
(1, 'amiya@xyz.com', 'AMIYA', 'M', '12345', 'Y'),
(4, 'piku@xyz.com', 'PIKU', 'M', '12345', 'Y'),
(2, 'pogo@xyz.com', 'POGO', 'F', '12345', 'Y');

ALTER TABLE `profile`
  ADD PRIMARY KEY (`email`);
