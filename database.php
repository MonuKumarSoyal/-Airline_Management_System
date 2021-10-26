
<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password);

//-----------------------------------------------  DATABASE CREATION  -------------------------------

$sql = "CREATE DATABASE flightjet";
$x = mysqli_query($connect,$sql);
// if(!($x)){
//   echo "Database was not created successfully because of this error: ".mysqli_error($connect);
// }
$db='flightjet';
$conn =mysqli_connect($servername,$username,$password,$db);

//-----------------------------------------------  adminlogins CREATION  -------------------------------


$y="CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
)";

$result = mysqli_query($conn,$y);
if(!$result){
  echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
}

 $addtoAdmin = "INSERT INTO  `admin` (`admin_id`, `pwd`, `staff_id`, `name`, `email`) VALUES
('admin', 'Admin#123', 'admin', 'AdminName', 'admin1234@gmail.com')";
$result1 = mysqli_query($conn,$addtoAdmin);
 



//-----------------------------------------------  customerlogins CREATION  -------------------------------

$y1 = "CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(20) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL
)";

$result2 = mysqli_query($conn,$y1);

//-----------------------------------------------  flight details CREATION  -------------------------------


$flightDet ="	CREATE TABLE IF NOT EXISTS `flight_details` (
  `flight_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_business` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_business` int(10) DEFAULT NULL,
  `jet_id` varchar(10) DEFAULT NULL
  )";

  $result3 = mysqli_query($conn,$flightDet);
  if(!$result3){
    echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
  }

  // TRUNCATE TABLE `flight_details`

  $addFliDet = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) VALUES 
  ('AA111', 'chennai', 'rajahmundry', '2021-12-26', '2021-12-27', '21:00:00', '01:00:00', '195', '96', '5000', '7500', '10001'),
  ('AA101', 'bangalore', 'mumbai', '2021-11-01', '2021-12-02', '21:00:00', '01:00:00', '195', '96', '5000', '7500', '10001'),
  ('AA102', 'bangalore', 'mumbai', '2021-12-01', '2021-12-01', '10:00:00', '12:00:00', '200', '73', '2500', '3000', '10002'),
  ('AA103', 'bangalore', 'chennai', '2021-12-03', '2021-12-03', '17:00:00', '17:45:00', '150', '75', '1200', '1500', '10004'),
  ('AA104', 'bangalore', 'mysore', '2021-12-04', '2021-12-04', '09:00:00', '09:17:00', '37', '4', '500', '750', '10003'),
  ('AA106', 'bangalore', 'hyderabad', '2021-12-01', '2021-12-01', '13:00:00', '14:00:00', '150', '75', '3000', '3750', '10004'),
  ('AIR707MXPA', 'PATNA', 'MUMBAI', '2021-12-01', '2021-12-21', '10:00:00', '18:00:00', '232', '128', '7500', '12000', 'AIR707MAX'),
  ('AIRBUS69BA', 'bangalore', 'chennai', '2021-07-19', '2021-11-19', '10:00:00', '13:00:00', '69', '89', '6500', '7800', 'AIRBUS69'),
  ('AIRBUS707P', 'bangalore', 'Patna', '2021-08-19', '2021-11-19', '00:00:00', '18:00:00', '75', '65', '6969', '7856', 'AIRBUS707'),
  ('AIRBUS70BA', 'bangalore', 'chennai', '2021-08-19', '2021-10-19', '10:00:00', '15:00:00', '523', '76', '4523', '8652', 'AIRBUS70'),
  ('AIRBUS70PA', 'bangalore', 'Patna', '2021-08-19', '2021-11-19', '10:01:00', '18:00:00', '498', '65', '5788', '6966', 'AIRBUS70'),
  ('BOING707PA', 'KOLKATTA', 'PATNA', '2021-08-25', '2021-12-25', '10:00:00', '13:00:00', '400', '21', '4500', '7000', 'BOING707')";
  $result4 = mysqli_query($conn,$addFliDet);

//-----------------------------------------------  ticket details CREATION  -------------------------------


$ticketDet =" CREATE TABLE IF NOT EXISTS `ticket_details` (
    `pnr` varchar(15) NOT NULL,
    `date_of_reservation` date DEFAULT NULL,
    `flight_no` varchar(10) DEFAULT NULL,
    `journey_date` date DEFAULT NULL,
    `class` varchar(10) DEFAULT NULL,
    `booking_status` varchar(20) DEFAULT NULL,
    `no_of_passengers` int(5) DEFAULT NULL,
    `lounge_access` varchar(5) DEFAULT NULL,
    `priority_checkin` varchar(5) DEFAULT NULL,
    `insurance` varchar(5) DEFAULT NULL,
    `payment_id` varchar(20) DEFAULT NULL,
    `customer_id` varchar(20) DEFAULT NULL
  )";

  $result5 = mysqli_query($conn,$ticketDet);
  if(!$result5){
    echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
  }

//-----------------------------------------------  ticket details Addition  -------------------------------

 $addticDet = "INSERT INTO `ticket_details` (`pnr`, `date_of_reservation`, `flight_no`, `journey_date`, `class`, `booking_status`, `no_of_passengers`, `lounge_access`, `priority_checkin`, `insurance`, `payment_id`, `customer_id`) VALUES
('1669050', '2021-11-25', 'AA104', '2021-12-04', 'business', 'CONFIRMED', 3, 'yes', 'yes', 'yes', '620041544', 'harryroshan')";
$result6 = mysqli_query($conn,$addticDet);
  if(!$result6){
    echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
  }
//-----------------------------------------------  passenger details CREATION  -------------------------------

$tablepassengers = "CREATE TABLE IF NOT EXISTS `passengers` (
  `passenger_id` int(10) NOT NULL,
  `pnr` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `meal_choice` varchar(5) DEFAULT NULL,
  `frequent_flier_no` varchar(20) DEFAULT NULL
)";
$result7 = mysqli_query($conn,$tablepassengers);

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`) VALUES
(1, '1669050', 'Harry Roshan', 20, 'male', 'yes', '20002000'),
(1, '2033264', 'RAKHI', 25, 'female', 'yes', NULL),
(1, '2179656', 'KIMI', 11, 'male', 'yes', NULL),
(1, '2369143', 'blah', 20, 'male', 'yes', NULL),
(1, '3027167', 'aadith_name', 10, 'male', 'yes', NULL),
(1, '3773951', 'harry', 51, 'male', 'yes', NULL),
(1, '3817993', 'SANCHIT KUMAR', 23, 'male', 'yes', NULL),
(1, '4797983', 'pass1', 34, 'male', 'yes', NULL),
(1, '4807312', 'SANCHIT', 22, 'male', 'yes', NULL),
(1, '5272308', 'SHUBHANGI SINGH', 1, 'female', 'yes', NULL),
(1, '5421865', 'pass1', 10, 'male', 'yes', NULL),
(1, '6980157', 'roshan', 20, 'male', 'yes', NULL),
(1, '8503285', 'aadith_name', 10, 'male', 'yes', '10001000'),
(1, '9288360', 'SANCHIT KUMAR', 23, 'male', 'yes', NULL),
(2, '1669050', 'berti harry', 45, 'female', 'yes', NULL),
(2, '2369143', 'blah', 51, 'male', 'yes', NULL),
(2, '3027167', 'roshan', 20, 'male', 'yes', NULL),
(2, '3773951', 'berti', 42, 'female', 'yes', NULL),
(2, '3817993', 'RANJIT KUMAR', 26, 'male', 'yes', NULL),
(2, '4797983', 'Harry Roshan', 20, 'male', 'yes', '20002000'),
(2, '4807312', 'RANJIT', 66, 'male', 'yes', NULL),
(2, '5421865', 'pass2', 20, 'female', 'yes', NULL),
(2, '6980157', 'aadith', 9, 'male', 'yes', NULL),
(2, '8503285', 'roshan_name', 20, 'male', 'yes', NULL),
(2, '9288360', 'SHUBHAM KUMAR', 24, 'male', 'yes', NULL),
(3, '1669050', 'aadith_name', 10, 'male', 'yes', NULL),
(3, '2369143', 'blah', 10, 'male', 'yes', NULL),
(3, '3773951', 'aadith', 11, 'male', 'yes', '10001000'),
(3, '4797983', 'aadith_name', 10, 'male', 'yes', '10001000'),
(3, '4807312', 'SURESH', 22, 'male', 'yes', NULL),
(3, '5421865', 'pass3', 30, 'male', 'yes', NULL),
(4, '2369143', 'blah', 42, 'female', 'yes', NULL),
(4, '4807312', 'RAMESH', 65, 'male', 'yes', NULL),
(5, '4807312', 'SHYAMA', 22, 'female', 'yes', NULL)";
$result8 = mysqli_query($conn,$addpassengers);

if(!$result8){
  echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
}


//-----------------------------------------------  payment details CREATION  -------------------------------


$payment_detailsTable = "CREATE TABLE IF NOT EXISTS `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `pnr` varchar(15) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` int(6) DEFAULT NULL,
  `payment_mode` varchar(15) DEFAULT NULL
)";
$result9 = mysqli_query($conn,$payment_detailsTable);
$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) VALUES
('120000248', '4797983', '2019-11-25', 4200, 'credit card')";
$result10 = mysqli_query($conn,$payment_detailsinsert);

if(!$result10){
  echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
}
?>