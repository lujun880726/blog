<?php
// calculate age using php
// (Current year - birth year) - 1 (if current mm-dd < birthday mm-dd)

// some test values
$dates = array();
$dates[] = "2008-01-16";
$dates[] = "2007-01-15";
$dates[] = "1900-01-15";
$dates[] = "1958-11-11";
$dates[] = "2006-01-16";

// some of the presidential candidates
$dates[] = "1947-10-26";
$dates[] = "1961-08-04";
$dates[] = "1953-06-10";
$dates[] = "1947-11-15";
$dates[] = "1942-11-20";
$dates[] = "1944-05-27";
$dates[] = "1958-05-13";
$dates[] = "1988-03-02";
$dates[] = "1988-07-26";

function year($date)
{
return substr($date, 0, 4);
} // end of year function

function mmdd($date)
{
return substr($date, 5,5);
} // end of mmdd function

function age($date)
{
$today = date("Y-m-d");
return year($today) - year($date) - (mmdd($today) < mmdd($date));
} // end of function age

foreach($dates as $date)
{
echo "DOB: $date, Age: " . age($date) . "<br />";
}
echo "------------------------------------------------------------------------------------------------------------\r\n<br>";
$Date_1=date("Y-m-d"); //today
//print_R($Date_1);exit;
//$Date_2="yyyy-mm-dd"; //someday
$Date_2="2005-05-27"; //someday
$d1=strtotime($Date_1);
$d2=strtotime($Date_2);
$Days=round(($d1-$d2)/3600/24);
echo $Days+1;
?>