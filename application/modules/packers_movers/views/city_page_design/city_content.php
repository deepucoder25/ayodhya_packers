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
              Relocating your home or office in <strong>$city</strong> comes with unique regional logistics—from navigating busy city corridors and narrow residential lanes to managing local apartment association rules and weather shifts. At <strong>$company3</strong>, we take the stress out of your move. As a premium, high-rated <strong>Packers and Movers in $city</strong>, we combine trained local expertise with robust packing materials and a dedicated moving team to ensure your transit is smooth and damage-free.
            </p>
            <p>
              Whether you are shifting locally within the neighborhood or preparing for a long-distance relocation, our focus is the safety and care of your household assets. We customize our vehicle fleet and packing layers to provide high-quality, dependable moving solutions.
            </p>
   ";
   $htmlcontent1 = "
        <div class='city-content-card mt-4'>
          <h3 class='city-section-title-sm'>
            <i class='bi bi-shield-fill-check me-2'></i>Our Seamless Shifting Process in $city
          </h3>
          <p>Moving your home is more than just loading boxes. At <strong>$company3</strong>, we follow a structured, step-by-step moving process designed to protect your goods at every turn. First, our packing experts use top-grade bubble wrap, heavy-duty cartons, and protective stretch wraps to secure your items. Next, our experienced handling team loads them carefully onto modern carrier vehicles using specialized gear to prevent scratches and dents during transit.</p>
          <p>Once we arrive at your new destination, our crew unloads your belongings, unpacks them with care, and helps place the furniture exactly where you want it. This systematic execution ensures a smooth, hassle-free transition so you can settle in comfortably.</p>
          <h3 class='city-section-title-sm mt-4'>
            <i class='bi bi-box-seam-fill me-2'></i>Shifting Services Available in $city
          </h3>
          <p>We provide a comprehensive range of shifting services tailored to your home, office, and vehicle transport requirements:</p>
          <ul class='city-checklist'>
            <li><i class='bi bi-check2-circle'></i> Professional Household Shifting in $city</li>
            <li><i class='bi bi-check2-circle'></i> Corporate and Office Relocations</li>
            <li><i class='bi bi-check2-circle'></i> Secure Bike and Car Carrier Shipping</li>
            <li><i class='bi bi-check2-circle'></i> Local Moving and Tempo Services</li>
            <li><i class='bi bi-check2-circle'></i> Safe Warehousing and Storage Solutions</li>
            <li><i class='bi bi-check2-circle'></i> Layered Packing, Unloading and Unpacking</li>
          </ul>
          <p>Whether you require a dedicated truck for a large household move or a shared part-load option to transport just a few selected items, our solutions are fully flexible to accommodate your timeline and budget constraints.</p>
        </div>
    ";
   $htmlcontent2 = "
        <div class='city-content-card mt-4'>
          <h3 class='city-section-title-sm'>
            <i class='bi bi-heart-fill me-2'></i>Why Thousands of Customers Trust $company3
          </h3>
          <p>Choosing the right moving company is the key to a stress-free relocation. At <strong>$company3</strong>, we have built our reputation on reliability, integrity, and absolute pricing transparency. When you book your move with us, you receive a clear, all-inclusive quotation with zero hidden fees, zero surprise surcharges, and no last-minute loading fees.</p>
          <p>Our commitment to quality is evident in our packing standards. We utilize premium bubble wraps, corner guards, custom crates for heavy items, and waterproof sheets to protect your electronics and wooden furniture from dust, moisture, and road vibrations. Backed by optional transit insurance and a dedicated support team, we stand by you every step of the journey.</p>
        </div>
    ";
} 
?>