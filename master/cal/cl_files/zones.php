<?php 
// Title: PHP Event Calendar
// URL: http://www.softcomplex.com/products/php_event_calendar/
// Version: 1.5.1
// Date: 03/04/2005 (mm/dd/yyyy)
// Tech. support: http://www.softcomplex.com/forum/forumdisplay.php?fid=55
// Notes: Script is free for non commercial use. Visit official site for details.

$timezones=array(
array(4.5,"Afghanistan"),
array(1,"Albania"),
array(1,"Algeria"),
array(-11,"American Samoa"),
array(2,"Andorra"),
array(1,"Angola"),
array(-4,"Anguilla"),
array(-2,"Antarctica"),
array(-4,"Antigua"),
array(-3,"Argentina"),
array(-4,"Argentina western prov"),
array(4,"Armenia"),
array(-4,"Aruba"),
array(0,"Ascension"),
array(9.5,"Australia Northern Territory"),
array(10.5,"Australia Lord Howe Island"),
array(10,"Australia New South Wales"),
array(10,"Australia Queensland"),
array(10,"Australia Victoria"),
array(10,"Australia Australian Captial Territory"),
array(9.5,"Australia South"),
array(10,"Australia Tasmania"),
array(8,"Australia Western"),
array(1,"Austria"),
array(3,"Azerbajian"),
array(-1,"Azores"),
array(-5,"Bahamas"),
array(3,"Bahrain"),
array(1,"Balearic Islands"),
array(6,"Bangladesh"),
array(-4,"Barbados"),
array(2,"Belarus"),
array(1,"Belgium"),
array(-6,"Belize"),
array(1,"Benin"),
array(-4,"Bermuda"),
array(6,"Bhutan"),
array(-4,"Bolivia"),
array(-4,"Bonaire"),
array(1,"Bosnia Hercegovina"),
array(2,"Botswana"),
array(-4,"Brazil Acre"),
array(-1,"Brazil Atlantic Islands"),
array(-3,"Brazil East"),
array(-4,"Brazil West"),
array(-4,"British Virgin Islands"),
array(8,"Brunei"),
array(2,"Bulgaria"),
array(0,"Burkina Faso"),
array(2,"Burundi"),
array(7,"Cambodia"),
array(1,"Cameroon"),
array(-6,"Canada Central"),
array(-5,"Canada Eastern"),
array(-7,"Canada Mountain"),
array(-8,"Canada Yukon & Pacific"),
array(-4,"Canada Atlantic"),
array(-3.5,"Canada Newfoundland"),
array(0,"Canary Islands"),
array(-11,"Canton Enderbury Islands"),
array(-1,"Cape Verde"),
array(11,"Caroline Island"),
array(-5,"Cayman Islands"),
array(1,"Central African Rep"),
array(1,"Chad"),
array(0,"Channel Islands"),
array(12.75,"Chatham Island"),
array(-4,"Chile"),
array(8,"China People's Rep"),
array(-10,"Christmas Islands"),
array(-5,"Colombia"),
array(1,"Congo"),
array(-10,"Cook Islands"),
array(-6,"Costa Rica"),
array(0,"Cote d'Ivoire"),
array(1,"Croatia"),
array(-5,"Cuba"),
array(-4,"Curacao"),
array(2,"Cyprus"),
array(1,"Czech Republic"),
array(1,"Dahomey"),
array(1,"Denmark"),
array(3,"Djibouti"),
array(-4,"Dominica"),
array(-4,"Dominican Republic"),
array(-6,"Easter Island"),
array(-5,"Ecuador"),
array(2,"Egypt"),
array(-6,"El Salvador"),
array(0,"England"),
array(1,"Equitorial Guinea"),
array(3,"Eritrea"),
array(2,"Estonia"),
array(3,"Ethiopia"),
array(-4,"Falkland Islands"),
array(0,"Faroe Island"),
array(12,"Fiji"),
array(2,"Finland"),
array(1,"France"),
array(-3,"French Guiana"),
array(-10,"French Polynesia"),
array(-5,"Haiti"),
array(-6,"Honduras"),
array(8,"Hong kong"),
array(1,"Hungary"),
array(0,"Iceland"),
array(5.5,"India"),
array(8,"Indonesia Central"),
array(9,"Indonesia East"),
array(7,"Indonesia West"),
array(3.5,"Iran"),
array(3,"Iraq"),
array(0,"Ireland Republic of"),
array(2,"Israel"),
array(1,"Italy"),
array(-5,"Jamaica"),
array(9,"Japan"),
array(-10,"Johnston Island"),
array(2,"Jordan"),
array(6,"Kazakhstan"),
array(3,"Kenya"),
array(12,"Kiribati"),
array(9,"Korea Dem Republic of"),
array(9,"Korea Republic of"),
array(12,"Kusaie"),
array(3,"Kuwait"),
array(-12,"Kwajalein"),
array(5,"Kyrgyzstan"),
array(7,"Laos"),
array(2,"Latvia"),
array(2,"Lebanon"),
array(-4,"Leeward Islands"),
array(2,"Lesotho"),
array(0,"Liberia"),
array(2,"Libya"),
array(2,"Lithuania"),
array(1,"Luxembourg"),
array(1,"Macedonia"),
array(3,"Madagascar"),
array(0,"Madeira"),
array(2,"Malawi"),
array(8,"Malaysia"),
array(5,"Maldives"),
array(0,"Mali"),
array(1,"Mallorca Islands"),
array(1,"Malta"),
array(10,"Mariana Island"),
array(-9.5,"Marquesas Islands"),
array(12,"Marshall Islands"),
array(-4,"Martinique"),
array(0,"Mauritania"),
array(4,"Mauritius"),
array(3,"Mayotte"),
array(1,"Melilla"),
array(-6,"Mexico"),
array(-8,"Mexico Baja Calif Norte"),
array(-7,"Mexico Nayarit"),
array(-7,"Mexico Sinaloa"),
array(-7,"Mexico Sonora"),
array(-11,"Midway Island"),
array(2,"Moldova"),
array(2,"Moldovian Rep Pridnestrovye"),
array(1,"Monaco"),
array(8,"Mongolia"),
array(0,"Morocco"),
array(2,"Mozambique"),
array(6.5,"Myanmar"),
array(1,"Namibia"),
array(12,"Nauru Republic of"),
array(5.75,"Nepal"),
array(1,"Netherlands"),
array(-4,"Netherlands Antilles"),
array(-4,"Nevis Montserrat"),
array(11,"New Caledonia"),
array(11,"New Hebrides"),
array(12,"New Zealand"),
array(-6,"Nicaragua"),
array(1,"Niger"),
array(1,"Nigeria"),
array(-11,"Niue Island"),
array(11.5,"Norfolk Island"),
array(0,"Northern Ireland"),
array(10,"Northern Mariana Islands"),
array(1,"Norway"),
array(4,"Oman"),
array(5,"Pakistan"),
array(9,"Palau"),
array(-5,"Panama"),
array(10,"Papua New Guinea"),
array(-4,"Paraguay"),
array(-5,"Peru"),
array(8,"Philippines"),
array(12,"Pingelap"),
array(1,"Poland"),
array(11,"Ponape Island"),
array(1,"Portugal"),
array(0,"Principe Island"),
array(-4,"Puerto Rico"),
array(3,"Qatar"),
array(4,"Reunion"),
array(2,"Romania"),
array(9,"Russian Federation zone eight"),
array(12,"Russian Federation zone eleven"),
array(6,"Russian Federation zone five"),
array(5,"Russian Federation zone four"),
array(10,"Russian Federation zone nine"),
array(2,"Russian Federation zone one"),
array(8,"Russian Federation zone seven"),
array(7,"Russian Federation zone six"),
array(11,"Russian Federation zone ten"),
array(4,"Russian Federation zone three"),
array(4,"Russian Federation zone two"),
array(2,"Rwanda"),
array(-4,"Saba"),
array(-11,"Samoa"),
array(1,"San Marino"),
array(0,"Sao Tome e Principe"),
array(3,"Saudi Arabia"),
array(0,"Scotland"),
array(0,"Senegal"),
array(4,"Seychelles"),
array(0,"Sierra Leone"),
array(8,"Singapore"),
array(1,"Slovakia"),
array(1,"Slovenia"),
array(-10,"Society Island"),
array(11,"Solomon Islands"),
array(3,"Somalia"),
array(2,"South Africa"),
array(1,"Spain"),
array(5.5,"Sri Lanka"),
array(-4,"St Christopher"),
array(-4,"St Croix"),
array(0,"St Helena"),
array(-4,"St John"),
array(-4,"St Kitts Nevis"),
array(-4,"St Lucia"),
array(-4,"St Maarten"),
array(-3,"St Pierre & Miquelon"),
array(-4,"St Thomas"),
array(-4,"St Vincent"),
array(2,"Sudan"),
array(-3,"Suriname"),
array(2,"Swaziland"),
array(1,"Sweden"),
array(1,"Switzerland"),
array(2,"Syria"),
array(-10,"Tahiti"),
array(8,"Taiwan"),
array(6,"Tajikistan"),
array(3,"Tanzania"),
array(7,"Thailand"),
array(0,"Togo"),
array(13,"Tonga"),
array(-4,"Trinidad and Tobago"),
array(-10,"Tuamotu Island"),
array(-10,"Tubuai Island"),
array(1,"Tunisia"),
array(2,"Turkey"),
array(5,"Turkmenistan"),
array(-5,"Turks and Caicos Islands"),
array(12,"Tuvalu"),
array(3,"Uganda"),
array(2,"Ukraine"),
array(4,"United Arab Emirates"),
array(0,"United Kingdom"),
array(-6,"USA Central"),
array(-5,"USA Eastern"),
array(-7,"USA Mountain"),
array(-7,"USA Arizona"),
array(-5,"USA Indiana East"),
array(-8,"USA Pacific"),
array(-9,"USA Alaska"),
array(-10,"USA Aleutian"),
array(-10,"USA Hawaii"),
array(-3,"Uruguay"),
array(5,"Uzbekistan"),
array(11,"Vanuatu"),
array(1,"Vatican City"),
array(-4,"Venezuela"),
array(7,"Vietnam"),
array(-4,"Virgin Islands"),
array(12,"Wake Island"),
array(0,"Wales"),
array(12,"Wallis and Futuna Islands"),
array(-4,"Windward Islands"),
array(3,"Yemen"),
array(1,"Yugoslavia"),
array(2,"Zaire Kasai"),
array(1,"Zaire Kinshasa Mbandaka"),
array(2,"Zaire Haut Zaire"),
array(2,"Zaire Kivu"),
array(2,"Zaire Shaba"),
array(2,"Zambia"),
array(2,"Zimbabwe"));?>