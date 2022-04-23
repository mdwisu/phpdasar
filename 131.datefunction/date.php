<?php 
//     // set the default timezone to use.
// date_default_timezone_set('UTC');


// // Prints something like: Monday
// echo date("l");

// // Prints something like: Monday 8th of August 2005 03:12:46 PM
// echo date('l jS \of F Y h:i:s A');

// // Prints: July 1, 2000 is on a Saturday
// echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// /* use the constants in the format parameter */
// // prints something like: Wed, 25 Sep 2013 15:28:57 -0700
// echo date(DATE_RFC2822);

// // prints something like: 2000-07-01T00:00:00+00:00
// echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));

echo date("l, d-M-Y");
// time UNIX timestamp / EPOCH time
// detik berlalu sejak 1 januari 1970
echo date("d M Y", time()+17000);

// mktime
echo date("l", mktime(0,0,0,10,8,2001));
// strtotime
echo date(strtotime("25 august 1945"));

?>