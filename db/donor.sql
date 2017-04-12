
CREATE TABLE `donor` (
  `uid` int(5) NOT NULL,
  `bgroup` varchar(4) NOT NULL,
  `lastdonated` date DEFAULT NULL,
  `city` varchar(20) NOT NULL
);
INSERT INTO `donor` (`uid`, `bgroup`, `lastdonated`, `city`) VALUES
(1, 'op', '0000-00-00', 'Ranchi'),
(2, 'op', '2017-01-04', 'Ranchi'),
(3, 'op', '2017-03-03', 'Patna'),
(4, 'op', '2017-03-10', 'Ranchi');

ALTER TABLE `donor`
  ADD PRIMARY KEY (`uid`);
