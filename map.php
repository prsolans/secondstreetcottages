  <script src="http://web.openapi.mapquest.com/oapi/transaction?request=script&key=mjtd%7Clu6t2l0zl9%2C8w%3Do5-g4bnq"  type="text/javascript"></script>
   <script type="text/javascript">
function loadMAP(){ 
	var mq = new MQMap("myMap");

	var loc1 = new MQLocation();
	loc1.setName("poi1");
	loc1.setAddress("144 N Second Street");
	loc1.setCity("Ashland");
	loc1.setStateProvince("OR");
	loc1.setPostalCode("97520");
	//loc1.setIconSource("./images/ballred.gif");
	loc1.setIconId(36);
	
		var loc2 = new MQLocation();
	loc2.setName("poi2");
	loc2.setAddress("15 S Pioneer Street");
	loc2.setCity("Ashland");
	loc2.setStateProvince("OR");
	loc2.setPostalCode("97520");
	//loc1.setIconSource("./images/ballred.gif");
	loc2.setIconId(214);
	

	mq.locations.add(loc1);
	mq.locations.add(loc2);

	mq.setRolloverPopups(false);//To disable the popups
		
		mq.getMap();
    var theMapSize = new MQSize();
	theMapSize.setHeight(275);
	theMapSize.setWidth(275);
	mq.setMapSize(theMapSize); 

}
</script>

<body onLoad="loadMAP()">

		<div id='myMap' class='myMap' style="height:320; width:320; float: left;"></div>
	</div>
    
