/*
SQLyog Ultimate v8.82 
MySQL - 5.1.45-community : Database - mynd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mynd` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mynd`;

/*Table structure for table `emp` */

DROP TABLE IF EXISTS `emp`;

CREATE TABLE `emp` (
  `phone` varchar(30) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `map` varchar(400) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `website` varchar(500) DEFAULT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  `instagram` varchar(500) DEFAULT NULL,
  `youtube` varchar(500) DEFAULT NULL,
  `pinterest` varchar(500) DEFAULT NULL,
  `linked` varchar(500) DEFAULT NULL,
  `telegram` varchar(500) DEFAULT NULL,
  `photo` varbinary(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `emp` */

insert  into `emp`(`phone`,`whatsapp`,`map`,`email`,`address`,`website`,`facebook`,`twitter`,`instagram`,`youtube`,`pinterest`,`linked`,`telegram`,`photo`) values ('93279987','7987897987','https://maps.app.goo.gl/aYUzBdkaHp2an2Vs5','uhu@gmail.com','\r\n\r\n\r\n596, Phase V, Udyog Vihar, Sector 19, Gurugram, Haryana 122016                ','https://www.sololearn.com/Discuss/2087644/how-to-insert-java-code-in-html','https://www.facebook.com/?paipv=0&eav=AfYO-FEgAM_P-Yew_i6QL7X_Tw-Wki5NtSCtUtE8o-8lGeIOM4lkqJu_wEyjywWUTqg&_rdr','https://twitter.com/HhpViral37955','https://www.instagram.com/heyhhp/','https://www.youtube.com/watch?v=P8P_S1Fjl_Q','https://in.pinterest.com/search/pins/?q=easy%20chicken%20dinner','https://www.linkedin.com/in/harshdeep-choudhary-590385183/','https://www.linkedin.com/in/harshdeep-choudhary-590385183/','./qrrr.png'),('','','','','                    ','','','','','','','','','./null'),('08007266726','889897987','778998@gmail.com','harshdeep1441@gmail.com','QNo 12A T1 S2 O F CHANDA District - Chandrapur 442501 , Near Nagpur , (Maharashtra','uiyui','uy','uiyui','yui','yuiy','uiyuiy','uiyuiy','uiyui','./jobendimage.png'),('08007266726','889897987','778998@gmail.com','harshdeep1441@gmail.com','QNo 12A T1 S2 O F CHANDA District - Chandrapur 442501 , Near Nagpur , (Maharashtra','uiyuihuihui','uy','uiyuihgyghui','yui','yuiy','uiyuiy','uiyuiy','uiyui','./navimg.png'),('','','','','                    ','','','','','','','','','./null'),('','','','','                    ','','','','','','','','','./null'),('','','','','                    ','','','','','','','','','./null'),('08007266726','','','harshdeep1441@gmail.com','QNo 12A T1 S2 O F CHANDA District - Chandrapur 442501 , Near Nagpur , (Maharashtra','','sdad','','asdad','ada','','','','./jobendimage.png'),('08007266726','79788','77987http://localhost:8084/MyndIDCard/index.html','harshdeep1441@gmail.com','QNo 12A T1 S2 O F CHANDA District - Chandrapur 442501 , Near Nagpur , (Maharashtra','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','v','vhttp://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','./its.me_vivek2000_276242531_503937187969627_2703935025739908643_n.jpeg'),('08007266726','79788','77987http://localhost:8084/MyndIDCard/index.html','harshdeep1441@gmail.com','QNo 12A T1 S2 O F CHANDA District - Chandrapur 442501 , Near Nagpur , (Maharashtra','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','v','vhttp://localhost:8084/MyndIDCard/index.html','http://localhost:8084/MyndIDCard/index.html','./its.me_vivek2000_276242531_503937187969627_2703935025739908643_n.jpeg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
