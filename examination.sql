/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - examination
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`examination` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `examination`;

/*Table structure for table `answers` */

DROP TABLE IF EXISTS `answers`;

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `answer_details` varchar(50) DEFAULT NULL,
  `mark_awarded` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `answers` */

insert  into `answers`(`answer_id`,`question_id`,`student_id`,`answer_details`,`mark_awarded`) values 
(1,4,1,'YES','1'),
(2,2,1,'NO','1'),
(3,1,2,'YES','1');

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varbinary(30) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `courses` */

insert  into `courses`(`course_id`,`course_name`) values 
(1,'B.com'),
(2,'m.com'),
(3,'bca'),
(4,'bsc computer'),
(5,'bsc maths'),
(6,'ma malayalam'),
(7,'ba malayalam'),
(8,'ba english');

/*Table structure for table `exams` */

DROP TABLE IF EXISTS `exams`;

CREATE TABLE `exams` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `exam_title` varchar(30) DEFAULT NULL,
  `exam_details` varchar(30) DEFAULT NULL,
  `exam_date` varchar(30) DEFAULT NULL,
  `exam_status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `exams` */

insert  into `exams`(`exam_id`,`subject_id`,`teacher_id`,`exam_title`,`exam_details`,`exam_date`,`exam_status`) values 
(1,1,1,'accountency','study all the syllabus toplc','2022-07-16','accept'),
(3,2,2,'gates','and gate and or gate not gate','2022-07-08','accept'),
(2,1,1,'accountency',' at today morning  9.30 am','2022-07-09','accept'),
(4,2,2,'bits and bytes','study','2022-07-09','accept');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `user_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`user_name`,`password`,`user_type`) values 
(1,'hod','hod','HOD'),
(2,'teacher','teacher','teacher'),
(3,'vidya','vidya','teacher'),
(4,'ertyui','sdfghj','teacher'),
(5,'student','student','student'),
(6,'renuka','renuka','student'),
(7,'','','officer'),
(8,'officer','','officer'),
(9,'officer','officer','officer');

/*Table structure for table `option` */

DROP TABLE IF EXISTS `option`;

CREATE TABLE `option` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `option` varchar(30) DEFAULT NULL,
  `correctanswer` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `option` */

insert  into `option`(`option_id`,`question_id`,`option`,`correctanswer`) values 
(1,1,'YES','Yes'),
(2,1,'no','No'),
(3,2,'YES','No'),
(4,2,'NO','Yes'),
(5,3,'yes','Yes'),
(6,3,'NO','No'),
(7,4,'YES','No'),
(8,4,'NO','No'),
(9,5,'YES','No'),
(10,5,'NO','Yes'),
(11,6,'YES','No'),
(12,6,'NO','No'),
(13,6,'OTHER','Yes'),
(14,7,'YES','Yes'),
(15,7,'NO','No'),
(16,7,'OTHER','No'),
(17,8,'','No'),
(18,8,'','No'),
(19,8,'','No');

/*Table structure for table `participation` */

DROP TABLE IF EXISTS `participation`;

CREATE TABLE `participation` (
  `participation_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`participation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `participation` */

insert  into `participation`(`participation_id`,`exam_id`,`student_id`) values 
(1,3,2),
(2,2,1),
(3,3,2),
(4,3,2),
(5,3,2),
(6,3,2),
(7,3,2),
(8,3,2),
(9,3,2),
(10,1,1),
(11,1,1),
(12,1,1),
(13,3,2),
(14,1,1),
(15,2,1),
(16,2,1),
(17,1,1),
(18,3,2),
(19,1,1),
(20,1,1),
(21,3,2),
(22,3,2),
(23,1,1),
(24,1,1),
(25,1,1),
(26,1,1),
(27,1,1),
(28,1,1),
(29,4,2),
(30,2,1),
(31,2,1),
(32,4,2),
(33,1,1),
(34,3,2),
(35,1,1),
(36,1,1),
(37,1,1),
(38,3,2),
(39,3,2);

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `question` varchar(50) DEFAULT NULL,
  `maximum_mark` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`question_id`,`exam_id`,`teacher_id`,`subject_id`,`question`,`maximum_mark`) values 
(1,1,1,1,'exel sheet is user for accountency ?','1'),
(2,1,1,1,'accountency is very easy ?','1'),
(3,3,2,2,'bytes is 8','1'),
(4,3,2,2,'bite is 4','1'),
(5,3,2,2,'and is userd for add','1'),
(6,3,2,2,'qwertyuio','1'),
(7,3,2,2,'what is your name','1'),
(8,1,1,1,'','1');

/*Table structure for table `result` */

DROP TABLE IF EXISTS `result`;

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `total_mark` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `result` */

insert  into `result`(`result_id`,`exam_id`,`student_id`,`total_mark`) values 
(1,1,1,'2'),
(2,3,2,'1'),
(3,1,1,'2'),
(4,1,1,'2');

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `students` */

insert  into `students`(`student_id`,`login_id`,`course_id`,`first_name`,`last_name`,`dob`,`phone`,`email`,`address`,`place`,`pincode`) values 
(1,5,1,'reshma','kamath','2022-07-05','karanakodam','reshma@gmail.com','thusiparambil house','karanakodam','682032'),
(2,6,3,'renuka','kamath','2022-07-01','ernakulam','renukakamath@gmail.com','wertyuiojbvbnm,m dfghjfdfgjn','ernakulam','682032');

/*Table structure for table `subjects` */

DROP TABLE IF EXISTS `subjects`;

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `subject_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `subjects` */

insert  into `subjects`(`subject_id`,`course_id`,`subject_name`) values 
(1,1,'acconutancy'),
(2,3,'digital'),
(3,4,'java'),
(5,6,'malayalam'),
(6,8,'english');

/*Table structure for table `teachers` */

DROP TABLE IF EXISTS `teachers`;

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `join_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `teachers` */

insert  into `teachers`(`teacher_id`,`login_id`,`subject_id`,`first_name`,`last_name`,`qualification`,`phone`,`email`,`join_date`) values 
(1,2,1,'rekha','kamath','b.com','9495736748','rekha@gmail.com','2022-07-15'),
(2,3,2,'vidya','kamath','mca','8137924202','vidya@gmail.com','2022-07-16'),
(3,4,5,'indhu','mayi','ma ','1234567890','indhu@gmail.com','2022-07-16');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
