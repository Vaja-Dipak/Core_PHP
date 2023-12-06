<?php
date_default_timezone_set('Asia/Kolkata');

echo "<br>";
echo date('m');
echo "<br>";
echo time();
echo "<br>";
echo date('d-m-y H:i:sA');
echo "<br>";

// exit;

echo "Testing", " Other data";
print "Testing";
echo "<br>";
echo time();
echo "<br>";
// exit;
echo $custDate = "2002-07-23";
echo "<br>";
echo "StrToTime : " . strtotime($custDate);
echo "<br>";
echo "Time to String : " . date('Y-m-d',1027362600);
echo "<br>";
// exit

$dateTime = new DateTime();
echo "DateTime : ". $dateTime->format("Y-m-d H:i:s") ."<br>";  // Output: 2023-06-04 10:30:45

// exit;
echo date("d-m-Y", strtotime($custDate));
// echo date("d-m-Y",$custDate);
echo "<br>";
// exit;
echo date('d-m-y l H:i:s');
$arr = ["test", "checking", 123, 45.458, true];
echo "<pre>";
// array_pop($arr);
print_r($arr);
unset($arr[2]);
print_r($arr);
echo "</pre>";


$today = new DateTime('today');
$yesterday = new DateTime('yesterday');
 
var_dump($today > $yesterday);
var_dump($today < $yesterday);
var_dump($today == $yesterday);


$today = new DateTime('today');
 
echo $today->format('Y-m-d') . PHP_EOL;
 
$today->add(new DateInterval('P2D'));
 
echo $today->format('Y-m-d') . PHP_EOL;
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.</p>
    <table class="snippet-table">
        <thead valign="middle">
            <tr valign="middle">
                <th><i><tt class="parameter">format</tt></i><br>
                    character</th>
                <th>Description</th>
                <th>Example returned values</th>
            </tr>
        </thead>
        <tbody valign="middle" class="tbody">
            <tr valign="middle">
                <td align="center"><em class="emphasis">Day</em></td>
                <td align="left">—</td>
                <td align="left">—</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>d</i></td>
                <td align="left">Day of the month, 2 digits with leading zeros</td>
                <td align="left"><i>01</i> to <i>31</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>D</i></td>
                <td align="left">A textual representation of a day, three letters</td>
                <td align="left"><i>Mon</i> through <i>Sun</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>j</i></td>
                <td align="left">Day of the month without leading zeros</td>
                <td align="left"><i>1</i> to <i>31</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>l</i> (lowercase ‘L’)</td>
                <td align="left">A full textual representation of the day of the week</td>
                <td align="left"><i>Sunday</i> through <i>Saturday</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>N</i></td>
                <td align="left">ISO-8601 numeric representation of the day of the week (added in<br>
                    PHP 5.1.0)</td>
                <td align="left"><i>1</i> (for Monday) through <i>7</i> (for Sunday)</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>S</i></td>
                <td align="left">English ordinal suffix for the day of the month, 2 characters</td>
                <td align="left">
                    <i>st</i>, <i>nd</i>, <i>rd</i> or<br>
                    <i>th</i>. Works well with <i>j</i>
                </td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>w</i></td>
                <td align="left">Numeric representation of the day of the week</td>
                <td align="left"><i>0</i> (for Sunday) through <i>6</i> (for Saturday)</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>z</i></td>
                <td align="left">The day of the year (starting from 0)</td>
                <td align="left"><i>0</i> through <i>365</i></td>
            </tr>
            <tr valign="middle">
                <td align="center"><em class="emphasis">Week</em></td>
                <td align="left">—</td>
                <td align="left">—</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>W</i></td>
                <td align="left">ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)</td>
                <td align="left">Example: <i>42</i> (the 42nd week in the year)</td>
            </tr>
            <tr valign="middle">
                <td align="center"><em class="emphasis">Month</em></td>
                <td align="left">—</td>
                <td align="left">—</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>F</i></td>
                <td align="left">A full textual representation of a month, such as January or March</td>
                <td align="left"><i>January</i> through <i>December</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>m</i></td>
                <td align="left">Numeric representation of a month, with leading zeros</td>
                <td align="left"><i>01</i> through <i>12</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>M</i></td>
                <td align="left">A short textual representation of a month, three letters</td>
                <td align="left"><i>Jan</i> through <i>Dec</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>n</i></td>
                <td align="left">Numeric representation of a month, without leading zeros</td>
                <td align="left"><i>1</i> through <i>12</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>t</i></td>
                <td align="left">Number of days in the given month</td>
                <td align="left"><i>28</i> through <i>31</i></td>
            </tr>
            <tr valign="middle">
                <td align="center"><em class="emphasis">Year</em></td>
                <td align="left">—</td>
                <td align="left">—</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>L</i></td>
                <td align="left">Whether it’s a leap year</td>
                <td align="left"><i>1</i> if it is a leap year, <i>0</i> otherwise.</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>o</i></td>
                <td align="left">ISO-8601 year number. This has the same value as<br>
                    <i>Y</i>, except that if the ISO week number<br>
                    (<i>W</i>) belongs to the previous or next year, that year<br>
                    is used instead. (added in PHP 5.1.0)
                </td>
                <td align="left">Examples: <i>1999</i> or <i>2003</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>Y</i></td>
                <td align="left">A full numeric representation of a year, 4 digits</td>
                <td align="left">Examples: <i>1999</i> or <i>2003</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>y</i></td>
                <td align="left">A two digit representation of a year</td>
                <td align="left">Examples: <i>99</i> or <i>03</i></td>
            </tr>
            <tr valign="middle">
                <td align="center"><em class="emphasis">Time</em></td>
                <td align="left">—</td>
                <td align="left">—</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>a</i></td>
                <td align="left">Lowercase Ante meridiem and Post meridiem</td>
                <td align="left"><i>am</i> or <i>pm</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>A</i></td>
                <td align="left">Uppercase Ante meridiem and Post meridiem</td>
                <td align="left"><i>AM</i> or <i>PM</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>B</i></td>
                <td align="left">Swatch Internet time</td>
                <td align="left"><i>000</i> through <i>999</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>g</i></td>
                <td align="left">12-hour format of an hour without leading zeros</td>
                <td align="left"><i>1</i> through <i>12</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>G</i></td>
                <td align="left">24-hour format of an hour without leading zeros</td>
                <td align="left"><i>0</i> through <i>23</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>h</i></td>
                <td align="left">12-hour format of an hour with leading zeros</td>
                <td align="left"><i>01</i> through <i>12</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>H</i></td>
                <td align="left">24-hour format of an hour with leading zeros</td>
                <td align="left"><i>00</i> through <i>23</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>i</i></td>
                <td align="left">Minutes with leading zeros</td>
                <td align="left"><i>00</i> to <i>59</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>s</i></td>
                <td align="left">Seconds, with leading zeros</td>
                <td align="left"><i>00</i> through <i>59</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>u</i></td>
                <td align="left">Microseconds (added in PHP 5.2.2)</td>
                <td align="left">Example: <i>654321</i></td>
            </tr>
            <tr valign="middle">
                <td align="center"><em class="emphasis">Timezone</em></td>
                <td align="left">—</td>
                <td align="left">—</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>e</i></td>
                <td align="left">Timezone identifier (added in PHP 5.1.0)</td>
                <td align="left">Examples: <i>UTC</i>, <i>GMT</i>, <i>Atlantic/Azores</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>I</i> (capital i)</td>
                <td align="left">Whether or not the date is in daylight saving time</td>
                <td align="left"><i>1</i> if Daylight Saving Time, <i>0</i> otherwise.</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>O</i></td>
                <td align="left">Difference to Greenwich time (GMT) in hours</td>
                <td align="left">Example: <i>+0200</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>P</i></td>
                <td align="left">Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)</td>
                <td align="left">Example: <i>+02:00</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>T</i></td>
                <td align="left">Timezone abbreviation</td>
                <td align="left">Examples: <i>EST</i>, <i>MDT</i> …</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>Z</i></td>
                <td align="left">Timezone offset in seconds. The offset for timezones west of UTC is always<br>
                    negative, and for those east of UTC is always positive.</td>
                <td align="left"><i>-43200</i> through <i>50400</i></td>
            </tr>
            <tr valign="middle">
                <td align="center"><em class="emphasis">Full Date/Time</em></td>
                <td align="left">—</td>
                <td align="left">—</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>c</i></td>
                <td align="left">ISO 8601 date (added in PHP 5)</td>
                <td align="left">2004-02-12T15:19:21+00:00</td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>r</i></td>
                <td align="left"><a class="link external" href="http://www.faqs.org/rfcs/rfc2822" rel="noopener">» RFC 2822</a> formatted date</td>
                <td align="left">Example: <i>Thu, 21 Dec 2000 16:01:07 +0200</i></td>
            </tr>
            <tr valign="middle">
                <td align="left"><i>U</i></td>
                <td align="left">Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</td>
                <td align="left">See also <a class="function" href="function.time.php">time()</a></td>
            </tr>
        </tbody>
    </table>


    <div dir="ltr" class="reader-article-content reader-article-content--content-blocks">
        <p id="ember37" class="ember-view reader-content-blocks__paragraph">
            Dates and times are fundamental aspects of programming, and PHP provides a robust set of DateTime functions that make working with them a breeze. Whether you need to format dates, calculate time differences, or perform complex operations on time values, PHP's DateTime functions have got you covered. In this article, we will explore the top 20 most useful PHP DateTime functions, showcasing their usage through examples and discussing their significance in various scenarios.

            <!---->
        </p>
        <!---->
        <!---->
        <!---->

        <h3 id="ember38" class="ember-view">
            <strong>1. date():</strong>
            <!---->
        </h3>

        <!---->
        <!---->
        <!---->

        <p id="ember39" class="ember-view reader-content-blocks__paragraph">
            The date() function is used to format a timestamp or current date and time according to a specified format. It accepts a format string as a parameter, allowing you to customize the output.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember40" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$currentDate = date("Y-m-d");
echo $currentDate;  // Output: 2023-06-04</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember41" class="ember-view">
            2. time():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember42" class="ember-view reader-content-blocks__paragraph">
            The time() function returns the current Unix timestamp, which represents the number of seconds elapsed since January 1, 1970 (Unix Epoch). It is useful for tasks such as measuring script execution time or calculating time differences.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember43" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$currentTimestamp = time();
echo $currentTimestamp;  // Output: 1654354824</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember44" class="ember-view">
            3. strtotime():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember45" class="ember-view reader-content-blocks__paragraph">
            The strtotime() function converts a date string into a Unix timestamp. It can understand various date formats and convert them accordingly.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember46" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateString = "2023-06-04";
$timestamp = strtotime($dateString);
echo $timestamp;  // Output: 1654354800</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember47" class="ember-view">
            4. DateTime:

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember48" class="ember-view reader-content-blocks__paragraph">
            The DateTime class provides an object-oriented approach to working with dates and times in PHP. It offers a wide range of methods for manipulation, comparison, and formatting.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember49" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime();
$formattedDate = $dateTime-&gt;format("Y-m-d H:i:s");
echo $formattedDate;  // Output: 2023-06-04 10:30:45</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember50" class="ember-view">
            5. add() and sub():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember51" class="ember-view reader-content-blocks__paragraph">
            The add() and sub() methods of the DateTime class allow you to add or subtract a specific interval from a date or time. It provides flexibility in performing operations like adding days, hours, minutes, etc.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember52" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime("2023-06-04");
$dateTime-&gt;add(new DateInterval("P1D"));  // Add 1 day
echo $dateTime-&gt;format("Y-m-d");  // Output: 2023-06-05

$dateTime-&gt;sub(new DateInterval("PT2H"));  // Subtract 2 hours
echo $dateTime-&gt;format("Y-m-d H:i:s");  // Output: 2023-06-05 08:30:00</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember53" class="ember-view">
            6. diff():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember54" class="ember-view reader-content-blocks__paragraph">
            The diff() method of the DateTime class calculates the difference between two dates or times and returns a DateInterval object. It allows you to obtain the time interval in years, months, days, hours, minutes, and seconds.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember55" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$startDate = new DateTime("2023-06-01");
$endDate = new DateTime("2023-06-04");
$interval = $startDate-&gt;diff($endDate);
echo $interval-&gt;format("%R%a days");  // Output: +3 days</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember56" class="ember-view">
            7. format():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember57" class="ember-view reader-content-blocks__paragraph">
            The format() method of the DateTime class allows you to customize the output format of a date or time. It accepts a format string similar to the one used in the date() function.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember58" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime();
$formattedDate = $dateTime-&gt;format("F j, Y");
echo $formattedDate;  // Output: June 4, 2023</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember59" class="ember-view">
            8. setTimezone():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember60" class="ember-view reader-content-blocks__paragraph">
            The setTimezone() method of the DateTime class sets the timezone of a DateTime object. It allows you to work with dates and times in different timezones.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember61" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime();
$dateTime-&gt;setTimezone(new DateTimeZone("America/New_York"));
echo $dateTime-&gt;format("Y-m-d H:i:s");  // Output: 2023-06-04 09:30:45 (assuming the server's timezone is UTC)</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember62" class="ember-view">
            9. getTimestamp():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember63" class="ember-view reader-content-blocks__paragraph">
            The getTimestamp() method of the DateTime class returns the Unix timestamp representation of a DateTime object. It is useful when you need to convert a DateTime object to a Unix timestamp.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember64" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime("2023-06-04 10:30:45");
$timestamp = $dateTime-&gt;getTimestamp();
echo $timestamp;  // Output: 1654378245</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember65" class="ember-view">
            10. createFromFormat():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember66" class="ember-view reader-content-blocks__paragraph">
            The createFromFormat() method of the DateTime class creates a DateTime object from a string formatted according to a specified format. It allows you to parse and convert date strings into DateTime objects.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember67" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateString = "June 4, 2023";
$dateTime = DateTime::createFromFormat("F j, Y", $dateString);
echo $dateTime-&gt;format("Y-m-d");  // Output: 2023-06-04</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember68" class="ember-view">
            11. setDate():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember69" class="ember-view reader-content-blocks__paragraph">
            The setDate() method of the DateTime class sets the date of a DateTime object to a specified year, month, and day. It allows you to change the date while keeping the time portion intact.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember70" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime("2023-06-04 10:30:45");
$dateTime-&gt;setDate(2022, 12, 25);
echo $dateTime-&gt;format("Y-m-d H:i:s");  // Output: 2022-12-25 10:30:45</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember71" class="ember-view">
            12. setTime():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember72" class="ember-view reader-content-blocks__paragraph">
            The setTime() method of the DateTime class sets the time of a DateTime object to a specified hour, minute, and second. It allows you to change the time while keeping the date portion intact.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember73" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime("2023-06-04 10:30:45");
$dateTime-&gt;setTime(15, 45, 0);
echo $dateTime-&gt;format("Y-m-d H:i:s");  // Output: 2023-06-04 15:45:00</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember74" class="ember-view">
            13. modify():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember75" class="ember-view reader-content-blocks__paragraph">
            The modify() method of the DateTime class modifies a DateTime object by adding or subtracting a specific interval. It allows you to perform complex operations on dates and times.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember76" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$dateTime = new DateTime("2023-06-04 10:30:45");
$dateTime-&gt;modify("+1 week");
echo $dateTime-&gt;format("Y-m-d H:i:s");  // Output: 2023-06-11 10:30:45</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember77" class="ember-view">
            14. setTimezone():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember78" class="ember-view reader-content-blocks__paragraph">
            The setTimezone() function sets the default timezone used by all date/time functions in PHP. It allows you to ensure consistent time handling throughout your application.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember79" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>date_default_timezone_set("America/New_York");
echo date("Y-m-d H:i:s");  // Output: 2023-06-04 05:30:45 (assuming the server's timezone is UTC)</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember80" class="ember-view">
            15. strftime():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember81" class="ember-view reader-content-blocks__paragraph">
            The strftime() function formats a local time/date according to the formatting rules defined by the strftime() function in C. It allows you to format dates and times based on locale-specific settings.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember82" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>setlocale(LC_TIME, "en_US");
echo strftime("%A, %B %d, %Y");  // Output: Sunday, June 04, 2023</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember83" class="ember-view">
            16. mktime():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember84" class="ember-view reader-content-blocks__paragraph">
            The mktime() function returns the Unix timestamp for a specified date and time. It allows you to create a timestamp based on individual date and time components.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember85" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$timestamp = mktime(0, 0, 0, 6, 4, 2023);
echo date("Y-m-d", $timestamp);  // Output: 2023-06-04</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember86" class="ember-view">
            17. checkdate():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember87" class="ember-view reader-content-blocks__paragraph">
            The checkdate() function validates a Gregorian date. It checks if a given date is valid based on the year, month, and day values.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember88" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$isValid = checkdate(2, 29, 2023);
echo $isValid ? "Valid date" : "Invalid date";&nbsp; // Output: Invalid date</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember89" class="ember-view">
            18. date_diff():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember90" class="ember-view reader-content-blocks__paragraph">
            The date_diff() function calculates the difference between two dates and returns a DateInterval object. It allows you to obtain the time interval in years, months, days, hours, minutes, and seconds.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember91" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$startDate = new DateTime("2023-06-01");
$endDate = new DateTime("2023-06-04");
$interval = date_diff($startDate, $endDate);
echo $interval-&gt;format("%R%a days");&nbsp; // Output: +3 days</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember92" class="ember-view">
            19. timezone_identifiers_list():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember93" class="ember-view reader-content-blocks__paragraph">
            The timezone_identifiers_list() function returns an indexed array of all timezone identifiers supported by PHP. It provides a list of available timezones for you to choose from.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember94" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$timezones = timezone_identifiers_list();
print_r($timezones);</pre>


        <!---->
        <!---->
        <!---->

        <p id="ember95" class="ember-view reader-content-blocks__paragraph">
            <em>Output:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>Array
(
&nbsp; &nbsp; [0] =&gt; Africa/Abidjan
&nbsp; &nbsp; [1] =&gt; Africa/Accra
&nbsp; &nbsp; [2] =&gt; Africa/Addis_Ababa
&nbsp; &nbsp; ...
)</pre>


        <!---->
        <!---->
        <!---->

        <h3 id="ember96" class="ember-view">
            20. timezones_abbreviations_list():

            <!---->
        </h3>



        <!---->
        <!---->
        <!---->

        <p id="ember97" class="ember-view reader-content-blocks__paragraph">
            The timezone_abbreviations_list() function returns an associative array containing timezone abbreviations and their corresponding timezones. It provides a mapping of timezone abbreviations used around the world.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember98" class="ember-view reader-content-blocks__paragraph">
            <em>Here's an example:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>$abbreviations = timezone_abbreviations_list();
print_r($abbreviations);</pre>


        <!---->
        <!---->
        <!---->

        <p id="ember99" class="ember-view reader-content-blocks__paragraph">
            <em>Output:</em>

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
        <pre>Array
(
&nbsp; &nbsp; [GMT] =&gt; Array
&nbsp; &nbsp; &nbsp; &nbsp; (
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [0] =&gt; Array
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [timezone_id] =&gt; GMT
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [timezone_name] =&gt; Greenwich Mean Time
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [offset] =&gt; 0
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [timezone_abbrev] =&gt; GMT
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; )
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ...
&nbsp; &nbsp; &nbsp; &nbsp; )
&nbsp; &nbsp; ...
)</pre>


        <!---->
        <!---->
        <!---->

        <p id="ember100" class="ember-view reader-content-blocks__paragraph">
            PHP's DateTime functions provide a powerful toolkit for working with dates and times. In this article, we explored the top 20 most useful PHP DateTime functions, including date(), time(), strtotime(), DateTime class, add(), sub(), diff(), format(), setTimezone(), getTimestamp(), createFromFormat(), setDate(), setTime(), modify(), date_default_timezone_set(), strftime(), mktime(), checkdate(), date_diff(), timezone_identifiers_list(), and timezone_abbreviations_list().

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember101" class="ember-view reader-content-blocks__paragraph">
            Thank you for taking the time to read this article. I hope you found it informative and helpful in simplifying your date and time manipulation tasks. By leveraging the power and flexibility of these functions, you can streamline your coding process and enhance the functionality of your PHP applications.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember102" class="ember-view reader-content-blocks__paragraph">
            If you have any questions or suggestions, feel free to leave a comment below. Happy coding!

            <!---->
        </p>



        <!---->
        <!---->
        <!---->

        <p id="ember103" class="ember-view reader-content-blocks__paragraph">
            <strong>Note:</strong> The examples provided in this article are for illustrative purposes and may require adaptation based on your specific use case.

            <!---->
        </p>



        <!---->
        <!---->
        <!---->
    </div>
</body>

</html>