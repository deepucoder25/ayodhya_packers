<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
   $htmlcontent = "
            <p>
              Do you consider moving to <b>$city</b>? Let us share some important points with you. There will always be different difficulties in moving from one place to another, but there are different issues that are associated with $city. They can be related to traffic conditions, permission by societies, availability of lift, and weather conditions.
            </p>
            <p>
              <strong>$company3</strong> are one of the best options when it comes to choosing <em>reliable Packers and Movers in $city</em> who offer all kinds of packing, loading, transportation, unloading, and unpacking services in $city. If you are looking for <b>Best Packers and Movers in $city, Packers and Movers Near Me</b>, then you can contact us now to get a free quote.
            </p>
   ";
   $htmlcontent1 = "
        <div class='city-content-card mt-4'>
          <span class='city-section-title-sm'>
            <i class='bi bi-shield-fill-check me-2'></i>Mini Case Study: Safe Moving of Families in $city
          </span>
          <p>A few days back, our team facilitated the relocation of a family from one place to another of $city. Since the house lacked enough parking space and also had tight schedule timings in the society, we made arrangements to move the family very early in the morning. The fragile items were moved separately while taking extra care for the heavier furniture items.</p>
          <h3 class='city-section-title-sm mt-4'>
            <i class='bi bi-box-seam-fill me-2'></i>Why People Prefer Professional Packers and Movers in $city
          </h3>
          <p>It is worth noting that <b>$city</b> is a place that has been growing residentially, business-wise, educationally, and because of its good road connectivity. It attracts lots of people to move and live there. Our skilled workforce is well aware of the road routes, parking restrictions, and other guidelines of the societies which makes your moving experience smoother. Worried about your fragile items? There is nothing to worry about anymore.</p>
        </div>
    ";
   $htmlcontent2 = "
        <div class='city-content-card mt-4'>
          <h4 class='city-section-title-sm'>
            <i class='bi bi-heart-fill me-2'></i>Packers and Movers Charges in $city
          </h4>
          <p>An average rate for the transportation of your goods usually ranges from ₹15 to ₹28 per kilometre based on the type of goods, the size of the vehicle used, the packing material, the floor level and manpower required. Yes, moving costs money but how do we make it reasonable? Firstly, we provide you with quotes without any hidden charges, thus you will have an estimated cost beforehand.</p>
        </div>
    ";
} 
?>