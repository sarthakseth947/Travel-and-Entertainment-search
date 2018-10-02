<!DOCTYPE html>
<html>
<head>
<style type="text/css">

.button{
	height:30px;
    width:100px;
    background-color: #BABABA;
}

.reviews2{
width: 100%;

}
.norecords{
	background-color: : gray;
	width: 1000px;
}
.norecords1{
	background-color: : gray;
	width: 100%;
}
.text{
text-align: center;
background-color: #EBEBEB;

}
.photos{
padding-bottom: 18px;
	width:500px;
}

#tab{
	margin-top: 30px;
}
.abc:hover{

	cursor:pointer;
color:#D5DDD5;
}
	.abc{

width: 70px;
height: 25px;
margin-top: 0px;
margin-left: 105px;
margin-bottom: 10px;
	}
#pic{
margin-left:200px; 
   

   
	height: 50px;

}

	 .reviews {
margin-top: 30px;
	 	margin-left: 180px;
	 	color: #3B3B3B;
	 	font-weight: lighter;
	 	margin-bottom: 10px;	 }


	 #heading{
	 	margin-left: 32%;
	 	margin-top: 20px;
	 }

	 #table{
	 	 margin-top: 0px;
	 	 text-align: left;
	 	 width: 1000px;
line-height: .8;
	 }
.td1{
	width: 800px;
}
.td1:hover{
cursor:pointer;
color:#D5DDD5;
     

}
	 #map {
        height: 400px;
        width: 50%;
        position: absolute;
        z-index: 2;}
#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
 

  #showreview{
  	margin-left: 100px;
  	letter-spacing: 40px;
  }

</style>
	<title>HomeWork No. 3</title>

	<script type="text/javascript">

function def(){

	if(document.getElementById("showreview"))
			{document.getElementById("showreview").innerHTML="abc";
		console.log("hero");}
		else 
			alert("gandu");}
		function tester(){
			lalu="";
			lalu+="<table class=\" norecords1\" border='2.5' align=\"center\"  > " ;
				lalu+="<tr><td class=\"text \" >No Photos found</td></tr>";
				lalu+="</table>";
			document.getElementById("aloo2").innerHTML=lalu;
		}



	</script>
	<script type="text/javascript">
		function disable(abc)
		{ if(abc.location[0].checked==true)
			abc.location1.disabled=true;
			else
				{abc.location1.disabled=false;
				abc.location1.required=true;}}
		
		
			function loadJSON()
	{	if(!document.getElementById("rad2").checked)
		{document.getElementById("location1").disabled=true;}
		
		document.getElementById("Search").disabled=true;

		url="http://ip-api.com/json";
		xmlhttp = null;
		if (window.XMLHttpRequest)
		{	xmlhttp = new XMLHttpRequest();}

		 else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); }
	
		
			
			xmlhttp.open("GET",url,false);
			
			
				xmlhttp.send();
					
				
			
			jsonObj= JSON.parse(xmlhttp.responseText);
			
			 if(jsonObj)
			 {
			 	lat=jsonObj.lat;
			 	lon=jsonObj.lon;
			 	document.getElementById("Search").disabled=false;
			 }
document.getElementById('hero').value=lat;
document.getElementById('hero2').value=lon;
}
		
		

    

	</script>
	<script type="text/javascript">
   
   	function generateHTML(location,currlatitude,currlongitude)
		{ 

				console.log("yes");


		  document.getElementById("keyword1").value=keywo; 
		document.getElementById("cate").value=cate; 
		console.log(dis);
		if(dis!=10)
		{document.getElementById("dis").value=dis;} 

var testsecond=first;
if ( first=="true")
	{
		document.getElementById("rad2").checked=true;
		document.getElementById("location1").disabled=false;
		document.getElementById("location1").value=locname;
		}
else
	{
		document.getElementById("rad1").checked=true;}
if(location['status']!="OK")
					{abc5="";
		console.log("hello1");
				abc5+="<table class=\" norecords\" border='2.5' align=\"center\"  > " ;
				abc5+="<tr><td class=\"text \" >No Records has been found</td></tr>";
				abc5+="</table>";
				document.getElementById("tab").innerHTML=abc5;
					return;		}
			lat1=[];
			lon1=[];

			 abclong=currlongitude;
			var abclat=currlatitude;
			var results=location.results;
			html_text="";
			if(!location.results[0] || !location)
			{abc="";
		console.log("hello");
				abc+="<table class=\" norecords\" border='2.5' align=\"center\"  > " ;
				abc+="<tr><td class=\"text \" >No Records has been found</td></tr>";
				abc+="</table>";
				document.getElementById("tab").innerHTML=abc;
				return;}
			html_text+="<table border='1' id=\"table\" align=\"center\">";
			html_text+="<tr><td>Category</td><td>Name</td><td>Address</td></tr>";
			for(i=0;i<results.length;i++)
			{var abclong=currlongitude;
			var abclat=currlatitude;
				selectedObj=results[i];
				lat1[i]=results[i].geometry.location.lat;
				lon1[i]=results[i].geometry.location.lng;

				var lockeys=Object.keys(selectedObj);
				for(j=0;j<lockeys.length;j++)
					{if(lockeys[j]=="icon")
					{	categoru=selectedObj[lockeys[j]];}
						if(lockeys[j]=="name")
							{name=selectedObj[lockeys[j]];}
						if(lockeys[j]=="vicinity")
							{vicinity=selectedObj[lockeys[j]];}
						if(lockeys[j]=="place_id")
							{placeid=selectedObj[lockeys[j]];}

					}
			html_text+="<tr><th ><img src="+categoru+"></img></th><th id ="+placeid+" class=\" td1\" onclick=\"generatereviews(this.id,"+first+")\">"+name+"</th><th class=\" td1\" id="+i+"  onclick =\"initMap(this.id,lat1["+i+"],lon1["+i+"],"+abclong+","+abclat+")\">"+vicinity+"</th></tr>";
					
			}
		html_text +=" </table>";

		document.getElementById("tab").innerHTML=html_text;
	
		}
	</script>











<script>
function initMap(id1,desLat,desLong,souLon,souLat){
        lat123=souLat;
        lon123=souLon;
        destlat=desLat;
        destlon=desLong;
        if(!document.getElementById("map")){

          var mapping=document.createElement("div");
        mapping.setAttribute("id","map");

        
        var y=document.getElementById(id1).getBoundingClientRect();
        mapping.style.width=(y.right-y.left)+"px";
        
        mapping.style.marginLeft=(y.left-5)+"px";
        mapping.style.marginTop=(window.scrollY+y.bottom-35)+"px";
        document.body.prepend(mapping);
        mapping.zIndex=10;

       
        var uluru = {lat: desLat, lng: desLong};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: uluru,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var marker = new google.maps.Marker({
            position: uluru,
              map: map
            });

              directionsService = new google.maps.DirectionsService();
           directionsDisplay = new google.maps.DirectionsRenderer();
            directionsDisplay.setMap(map);
        var button1=document.createElement("input");
        button1.setAttribute("type","button");
        button1.setAttribute("value","Drive here");
        button1.setAttribute("class","button");
        value1="DRIVING";
        button1.setAttribute("onclick","calAndDisplayRoute(directionsService,directionsDisplay,lat123,lon123,destlat,destlon,value1);");
        
        var button2 = document.createElement("input");
        button2.setAttribute("type","button");
        button2.setAttribute("value","Walk here");
        button2.setAttribute("class","button");
        value2="WALKING";
        button2.setAttribute("onclick","calAndDisplayRoute(directionsService,directionsDisplay,lat123,lon123,destlat,destlon,value2);");

       var button3=document.createElement("input");
        button3.setAttribute("type","button");
        button3.setAttribute("value","Bicycle here");
        button3.setAttribute("class","button");
        value3="BICYCLING";
        button3.setAttribute("onclick","calAndDisplayRoute(directionsService,directionsDisplay,lat123,lon123,destlat,destlon,value3);");

 
        button1.zIndex=20;
        button2.zIndex=20;
        button3.zIndex=20;

          var control = button1;
          var control2=button2;
          var control3=button3;
            control.style.display = 'block';
            control2.style.display = 'block';
            control3.style.display = 'block';
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(control);
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(control2);
            map.controls[google.maps.ControlPosition.LEFT_TOP].push(control3);
            

         
            

          }

            else{
               
              document.getElementById("map").parentNode.removeChild(document.getElementById("map"));
            
            }

      }
      function calAndDisplayRoute(directionsService,directionsDisplay,souLat,souLon,desLat,desLong,val){
          var selectedMode=val; 
          console.log(val);
          //alert(selectedMode);
            var start = new google.maps.LatLng(souLat,souLon);
            var end = new google.maps.LatLng(desLat,desLong);
            var request = {
                  origin: start,
                  destination: end,
                  travelMode: google.maps.TravelMode[selectedMode]
                  };
            directionsService.route(request, function(result, status) {
            if (status == 'OK') {
              directionsDisplay.setDirections(result);
            }
          });}


</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy4xLPTwi-pSZ-dWUlPyi_HNeQwg2iBRk&callback=initMap">
    </script>
<script type="text/javascript">
		function generatesecondHTML(review){
 document.getElementById("keyword1").value=namez;
  document.getElementById("cate").value=cattest;  
  if(distest!=10)
  {document.getElementById("dis").value=distest; }
  document.getElementById("location1").value=locationtest;

if ( radiotest=="true")
	{
		document.getElementById("rad2").checked=true;
		document.getElementById("location1").disabled=false;
		document.getElementById("location1").value=locationtest;
		}
else
	{
		document.getElementById("rad1").checked=true;}

			var results1=review.result;

			htmltext="";

			htmltext11=review.result.name;

			document.getElementById("heading").innerHTML=htmltext11;
				

htmltext+="<table border='2.5'class=\"reviews2\"  align=\"center\">";
obj2=Object.keys(results1);


for(a=0;a<obj2.length;a++)
{
	if(obj2[a]=="reviews")
	{					var abc=results1.reviews;
		for(b=0;b<5;b++)
		{var again=abc[b];
			if(again)
			{subsubobj=Object.keys(again);

			for(c=0;c<subsubobj.length;c++)
			{
				      var final=subsubobj[c];

				      if(subsubobj[c]=="author_name")
				      	{authorname=again[subsubobj[c]];}
				      if(subsubobj[c]=="profile_photo_url")
				      {
				      	profilepic=again[subsubobj[c]];
				      }

				      if(subsubobj[c]=="text")
				      {
				      	text=again[subsubobj[c]];
				      }
		
					}


		}

htmltext+="<tr ><td ><img id=\"pic\" src="+profilepic+"></img>"+authorname+"</td></tr>";
					htmltext+="<tr><td>"+text+"</td></tr>";

		}}


	}
htmltext+="</table>";
	
		//for(b=0;b<subobj.length;b++)
		//{
			//if(subobj[b]=="author_name"){
			//authorname=reviewdetails[subobj[b]];
				//document.write(authorname)	;							}}}}

			//if(subobj[b]=="profile_photo_url"){
					//profilepic=reviewdetails[subobj[b]];
					//						}
					//						if(subobj[b]=="text"){
				//	text=reviewdetails[subobj[b]];}

				//	htmltext+="<tr><td><img src="+profilepic+"></img>"+authorname+"</td></tr>";
					//htmltext+="<tr><td>"+text+"</td></tr>";
		//}
	//}
//}

if(!review.result.reviews[0].text)
{ef="";
	ef+="<table class=\" norecords1\" border='2.5' align=\"center\"  > " ;
				ef+="<tr><td class=\"text \" >No Reviews found</td></tr>";
				ef+="</table>";

	document.getElementById("aloo").innerHTML=ef;}
	else{document.getElementById("aloo").innerHTML=htmltext;}

var htmltext1="";

		
		htmltext1+="<table border='0'  align=\"center\">";
		
		htmltext1+="<tr><td><a href=\"img1.png\"><img class=\"photos\" src=\"img1.png\" onerror=\"tester()\"></img></a></td></tr>";
		htmltext1+="<tr><td><a href=\"img2.png\"><img class=\"photos\" src=\"img2.png\" alt=\"\"></img></a></td></tr>";
		htmltext1+="<tr><td><a href=\"img3.png\"><img class=\"photos\" src=\"img3.png\" alt=\"\" ></img></a></td></tr>";
		htmltext1+="<tr><td><a href=\"img4.png\"><img class=\"photos\" src=\"img4.png\" alt=\"\" ></img></a></td></tr>";
		htmltext1+="<tr><td><a href=\"img5.png\"><img class=\"photos\" src=\"img5.png\" alt=\"\"></img></a></td></tr>";
		htmltext1+=" </table>";

document.getElementById("aloo2").innerHTML=htmltext1;
 

 var htmltext0="";
 htmltext0+="<p>click to show photos</p>";

 document.getElementById("aloo1.25").innerHTML=htmltext0;
	var htmltext5="";
	htmltext5+="<img class=\"abc\"  src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_down.png\"></img>";
	document.getElementById("aloo1.5").innerHTML=htmltext5;
var htmltext6="";
	htmltext6+="<p>click to hide photos</p>";
	document.getElementById("aloo1.75").innerHTML=htmltext6;
	var htmltext7="";
	htmltext7+="<img class=\"abc\" src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_up.png\"></img>";
document.getElementById("aloo1.99").innerHTML=htmltext7;

var htmltext2="";

htmltext2+="<p id=\"showreview \">click to show reviews</p>";
document.getElementById("aloo0.25").innerHTML=htmltext2;
var htmltext8="";

htmltext8+="<img class=\"abc\"  id=\"arrowdown\" src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_down.png\"></img>";
document.getElementById("aloo.5").innerHTML=htmltext8;

var htmltext9="";
htmltext9+="<p id=\"hidereview1\" >click to hide reviews</p>";
document.getElementById("aloo.75").innerHTML=htmltext9;
var htmltext10="";

htmltext10+="<img  class=\"abc\" id=\"arrowup\" src=\"http://cs-server.usc.edu:45678/hw/hw6/images/arrow_up.png\"></img>";
document.getElementById("aloo.99").innerHTML=htmltext10;
		}



function generatereviews(id,first)
{


 var f = document.createElement('FORM');
 f.name='abc';
 f.method='POST';
 f.action="<?php $_SERVER['PHP_SELF'];?>";


var i = document.createElement('INPUT'); //input element, text
i.type='HIDDEN';
i.name='username';
i.value=id;

f.appendChild(i);

var n = document.createElement('INPUT'); //input element, text
n.type='HIDDEN';
n.name='keytest';
n.value=keywo;

f.appendChild(n);

var m = document.createElement('INPUT'); //input element, text
m.type='HIDDEN';
m.name='cattest';
m.value=cate;
f.appendChild(m);

var o = document.createElement('INPUT'); //input element, text
o.type='HIDDEN';
o.name='distest';
o.value=dis;
f.appendChild(o);

var p = document.createElement('INPUT'); //input element, text
p.type='HIDDEN';
p.name='locationtest';
p.value=locname;
f.appendChild(p);

var q = document.createElement('INPUT'); //input element, text
q.type='HIDDEN';
q.name='radiotest';
q.value=first;
f.appendChild(q);

document.body.appendChild(f)
f.submit();

}

   </script>
</head>
<body onload="loadJSON();">









<div style="width: 500px;
    border: 1px solid gray ;

    padding-top: 0px;

    padding-left: 10px;

    padding-right: 10px;

    padding-bottom: 20px;
    
    margin-left: 30%;
    background-color: #FAFAF9;
    ">


	<h1 style="margin-bottom: 0px; margin-left: 30px;" ><i>Travel and Entertainment Search</h1>

	<hr style="width: 500px;">

	<form style="line-height: 1.5;" name="Travel Information" id="form" method="post">

		<strong>Keyword<input type="text" name="keyword" id="keyword1" required>
		<br><strong>Category<select  name="Category" id="cate">
			<option value="default" selected>default</option>
			<option value="cafe">cafe</option>
			<option value="bakery">bakery</option>
			<option value="restaurant">restaurant</option>
			<option value="beauty_salon">beauty salon</option>
			
			<option value="casino">casino</option>
			<option value="movie_theater">movie theatre</option>
			<option value="lodging">lodging</option>
			<option value="airport">airport</option>
			<option value="train_station">train station</option>
			<option value="subway_station">subway station</option>
			<option value="bus_station">bus station</option>
			</select>
			<br>
			Distance (in miles)
			<input type="text" name="Distance" id="dis"  placeholder="10" >
			<strong>from<input type="radio" name="location" id="rad1"  onclick="disable(this.form);" checked=""> Here
			<br><input style="margin-left: 60%;" id="rad2" type="radio" name="location" value="loctext" onclick="disable(this.form);"  >
			<input type="text" name="location1" id="location1" placeholder="location" id="location" >

			<br><br>
			<input type="submit" id="Search" name="submit"  value="search"></input>	



			<input type="submit" name="clear" style="margin-left: 10px;" value="clear" onclick="reset1(this.form)";></input>

			<input type="hidden" id="hero" name="latitute"></input>
			<input type="hidden" id="hero2" name="longitute"></input>
			
	</form>
	
</div>
<div id="tab"></div>
<div id="tab2" style="width: 500px;
    

    padding-top: 0px;
    
    margin-left: 30%;
    ">
    <div id="heading"></div>
<div id="aloo0">
	<div id="aloo0.25" class="reviews"></div>
	<div class=" abc" onclick="myfunction()" id="aloo.5"></div>
	<div class="reviews" style="display: none;" id="aloo.75"></div>
	<div class=" abc" onclick="myfunction2()" style="display: none;" id="aloo.99"></div>
</div>

<div style="display: none;" id="aloo">
</div>

<div id="aloo1">
	<div class="reviews" id="aloo1.25"></div>
	<div class=" abc" onclick="myfunction1()" id="aloo1.5"></div>
	<div class="reviews" style="display: none;" id="aloo1.75" ></div>
	<div class=" abc" onclick="myfunction3()" style="display: none;" id="aloo1.99"></div>
</div>


<div style="display: none;" id="aloo2" >
	
</div>
</div>
<script type="text/javascript">
function myfunction(){
	document.getElementById("aloo0.25").style.display="none";
	document.getElementById("aloo.5").style.display="none";
	document.getElementById("aloo.75").style.display="block";
	document.getElementById("aloo.99").style.display="block";
	document.getElementById("aloo").style.display="block";}

	function myfunction1(){
document.getElementById("aloo1.25").style.display="none";
	document.getElementById("aloo1.5").style.display="none";
	document.getElementById("aloo1.75").style.display="block";
	document.getElementById("aloo1.99").style.display="block";
	document.getElementById("aloo2").style.display="block";}
function myfunction2(){
document.getElementById("aloo0.25").style.display="block";
	document.getElementById("aloo.5").style.display="block";
	document.getElementById("aloo.75").style.display="none";
	document.getElementById("aloo.99").style.display="none";
	document.getElementById("aloo").style.display="none";}

function myfunction3(){
	document.getElementById("aloo1.25").style.display="block";
	document.getElementById("aloo1.5").style.display="block";
	document.getElementById("aloo1.75").style.display="none";
	document.getElementById("aloo1.99").style.display="none";
	document.getElementById("aloo2").style.display="none";}

	function reset1(abc){

document.getElementById(tab).innerHTML="";
document.getElementById(tab2).style.display="";
	abc.reset();}

	
</script>
 <?php
 

if(isset($_POST['submit'])){
error_reporting(E_ALL ^ E_NOTICE);

    
    if($_POST['location']=="loctext")
	{
		$lat=0;
	 $lon=0;
		$locationName=$_POST['location1'];
	
	$locationName= urlencode($locationName);
	
	$URL="https://maps.googleapis.com/maps/api/geocode/json?address=".$locationName."&key=AIzaSyAy4xLPTwi-pSZ-dWUlPyi_HNeQwg2iBRk";
	
	$json=file_get_contents($URL);
	
	$newObj=json_decode($json,true);
	
	$lat=$newObj["results"][0]["geometry"]["location"]["lat"];
	$lon=$newObj["results"][0]["geometry"]["location"]["lng"];
	
	}
else
	{ 
		$lat= $_POST['latitute'];

	  $lon=$_POST['longitute'];

	}

	$ab=(int)$_POST['Distance'];
	if(($_POST['Distance']))
		{	
			$ab=1609*$ab;
			}
	else{
		error_reporting(E_ALL ^ E_NOTICE);
		
	$ab=16090;

}
	
	$Radius=$ab;
	$Type=($_POST['Category']);
	$Keyword=($_POST['keyword']);

$Keyword= urlencode($Keyword);

	$URL2="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=".$lat.",".$lon."&radius=".$Radius."&type=".$Type."&keyword=".$Keyword."&key="."AIzaSyAy4xLPTwi-pSZ-dWUlPyi_HNeQwg2iBRk";
		
		$json2=file_get_contents($URL2);

		 $json19=json_decode($json2,true);

		 if($json19["status"]=='INVALID_REQUEST')
		 	{$lat=12;
		 		$lon=12;}

	

}

?>
<script >
	
	var lalall=<?php echo $json2 ?>;

	var lati=<?php echo $lat ?>;
	var loni=<?php echo $lon ?>;
if (lati=="")
	{lati=12;
	loni=12; }
var keywo= "<?php echo $Keyword ?>";
var cate="<?php echo $Type ?>";
var dis=<?php echo $ab/1609 ?>;
var locname="<?php echo $_POST['location1']?>";
var first="<?php if($_POST['location']=="loctext") {echo "true";} else {echo "false";} ?>";



generateHTML(lalall,lati,loni);


</script>
<?php
if(isset($_POST['username'])){
			error_reporting(E_ALL ^ E_NOTICE);
			$placeid=($_POST['username']);
$URL3="https://maps.googleapis.com/maps/api/place/details/json?placeid=".$placeid."&key="."AIzaSyAy4xLPTwi-pSZ-dWUlPyi_HNeQwg2iBRk";

	$json3=file_get_contents($URL3);
	;
	$json4=json_decode($json3,true);
	$image=array();
	$URL4=array();
	$json5=array();
	$json6=array();
	$keytest=($_POST['keytest']);
$cattest=($_POST['cattest']);
$distest=($_POST['distest']);
$locationtest=($_POST['locationtest']);
$radiotest=($_POST['radiotest']);

		$json7=array();
	$results1=array();
	for($d=0;$d<5;$d++){
		$image[$d]=$json4["result"]["photos"][$d]["photo_reference"];
		$image[$d]=urlencode($image[$d]);
		if($image[$d]){
	$URL4[$d]="https://maps.googleapis.com/maps/api/place/photo?maxwidth=750&photoreference=".$image[$d]."&key="."AIzaSyAy4xLPTwi-pSZ-dWUlPyi_HNeQwg2iBRk";
	$json5[$d]=file_get_contents($URL4[$d]);}
	
	
	}

	file_put_contents('img1.png',$json5[0]);
	file_put_contents('img2.png',$json5[1]);
	file_put_contents('img3.png',$json5[2]);
	file_put_contents('img4.png',$json5[3]);
	file_put_contents('img5.png',$json5[4]);

	



	}
?>
<script >

var namez="<?php echo $keytest ?>";
var cattest="<?php echo $cattest ?>";
var distest=<?php echo $distest ?>;
var locationtest="<?php echo $locationtest ?>";
var radiotest="<?php echo $radiotest ?>";
	var lalala= <?php echo $json3 ?>;
	generatesecondHTML(lalala);
	
</script>


</body>
</html>

