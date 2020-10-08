<?php

use Dompdf\Dompdf;
require 'vendor/autoload.php';

$html = 'Places You Will Visit In Delhi
<html>
<head>
  <title>Places</title>
</head>
<body>
<table border="1">
            <tr>
                <th>Name</th>
                <th>about</th>
            </tr>
            <tr>
                <td>India gate</td>
                <td>The India Gate (originally the All India War Memorial) is a war memorial located astride the Rajpath, on the eastern edge of the "ceremonial axis" of New Delhi.</td>
            </tr>
            <tr>
                <td>President House</td>
                <td> The Rashtrapati Bhavan, Rashtrapati Bhavan may refer to only the 340-room main building that has the president official residence, including reception halls, guest rooms and offices, also called the mansion; it may also refer to the entire 130-hectare (320 acre) Presidential Estate that additionally includes huge presidential gardens (Mughal Gardens), large open spaces, residences of bodyguards and staff, stables, other offices and utilities within its perimeter walls. In terms of area, it is the largest residence of any head of state in the world.</td>
            </tr>
             <tr>
                <td>kutub minar</td>
                <td>also spelled as Qutub Minar, is a minaret and "victory tower" that forms part of the Qutb complex, a UNESCO World Heritage Site in the Mehrauli area of Delhi, India.Qutb Minar was 73-metres (239.5 feet) tall before the final, fifth section was added after 1369.[4] The tower tapers, and has a 14.3 metres (47 feet) base diameter, reducing to 2.7 metres (9 feet) at the top of the peak.[5] It contains a spiral staircase of 379 steps</td>
            </tr>
             <tr>
                <td>jumma masjid</td>
                <td>The Masjid e Jahan Numa, commonly known as the Jama Masjid of Delhi, is one of the largest mosques in India. It was built by the Mughal Emperor Shah Jahan between 1650 and 1656 at a cost of one million rupees, and was inaugurated by Imam Syed Abdul Ghafoor Shah Bukhari from Bukhara, present-day Uzbekistan. The mosque was completed in 1656 AD with three great gates and two 40 metres high minarets constructed with strips of red sandstone and white marble. The courtyard can accommodate more than 2500 people. There are three domes on the terrace which are surrounded by the two minarets. On the floor, a total of 899 black borders are marked for worshippers. The architectural plan of Badshahi Masjid, built by Shah Jahan son Aurangzeb at Lahore, Pakistan, is similar to the Jama Masjid.</td>
            </tr>
        </table>
</body>
</html>

';

$codeHTML = utf8_encode($html);
$dompdf = new Dompdf();
$dompdf->load_html($codeHTML);
$dompdf->setPaper('A4', 'landscape');

ini_set('memory_limit', '128M');
$dompdf->render();
$dompdf->stream('delhi3.pdf');
?>