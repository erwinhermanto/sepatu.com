

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var dari;
var ke;
var directionDisplay;
var directionsService = new google.maps.DirectionsService();
var map ;
var arr = [];
function number_format(number, decimals, dec_point, thousands_sep) { 
  number = (number + '')
    .replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}
function padLeft(nr, n, str){
    return Array(n-String(nr).length+1).join(str||'#')+nr;
}
function convert_rupiah(number)
{
	var rupiah = number_format(number, 2, ',', '.');
	var rupiah2 = 'Rp. ' + padLeft(rupiah,20);
	
	for(var i=0;i<=20;i++)
	{ 
		rupiah2 = rupiah2.replace('#', '&nbsp;');
	}
	return rupiah2;
}
 
function initialize(id)
{
	setTimeout(function(){ 
	
		 var ddari = {
				"lat": document.getElementById('lat').value,
					"long": document.getElementById('long').value
			};
		 var dke = {
				"lat": document.getElementById('lat'+id).value,
					"long": document.getElementById('long'+id).value
			}; 
		 dari = new google.maps.LatLng(ddari.lat, ddari.long);
		 ke = new google.maps.LatLng(dke.lat, dke.long); 
		// dari ="-6.898538, 107.631624";
		// ke ="-6.937904, 107.723905"; 
		// alert(dari + " | "+ ke)
		  
		 
		var latlng = new google.maps.LatLng(dari);
		directionsDisplay = new google.maps.DirectionsRenderer();
		var myOptions = {
		  zoom: 14,
		  center: dari,
		  mapTypeId: google.maps.MapTypeId.ROADMAP,
		  mapTypeControl: false
		}; 
		
		map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
		directionsDisplay.setMap(map);
		directionsDisplay.setPanel(document.getElementById("directionsPanel"));
		
		var marker = new google.maps.Marker({
		  position: dari,  
		  title:"My location"
		}); 
		marker.setMap(map); 
		
		calcRoute();
	 
	 
	}, 1000); 
}
 
 
function calcRoute() { 
	var start = new google.maps.LatLng(dari);
	var end = new google.maps.LatLng(ke);
	var request = {
	  origin:dari,
	  destination:ke,
	  travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	 directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      }
    });
}

// google.maps.event.addDomListener(window, 'load', initialize(0));
</script>
  
<div class="container main-container">
       
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

        		<?php $this->load->view('front/layout/view_sidebar')?>
 
        	</div>

        	<div class="clearfix visible-sm"></div>

			 

        	<div class="clearfix visible-sm"></div>

			<!-- Product Detail -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">Perbandingan </span>
            	</div>
	            <div class="col-lg-12 col-sm-12 hero-feature">
					
					<?php foreach ($detail as $row): ?>  
	            	<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
			            	<!-- Main Image -->
							<div class="product-main-image-container">
								<img src="<?php echo base_url()?>assets/mimity/images/loader.gif" alt="" class="product-loader">
								<span class="thumbnail product-main-image">
									<img src="<?php echo base_url()?>assets/upload/<?php echo $row->foto; ?>" alt="">
								</span>
							</div>
							<!-- End Main Image -->

							 
							<!-- End Thumbnail Image -->
						</div>
						
						<div class="visible-xs">
							<div class="clearfix"></div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="well product-short-detail">
								<div class="row">
									<div class="the-list">
										<h3 class="col-xs-12">
											<!-- <span class="price-old">$169</span> -->
											<?php echo $row->nama_sepatu?>
										</h3>
									</div>
									<div class="the-list">
										<div class="col-xs-4">Merk</div>
										<div class="col-xs-8">
											<!-- <span class="red">OUT OF STOCK</span> -->
											<span class="green"><?php echo $row->nama_merk?></span>
										</div>
									</div>
									<div class="the-list">
										<div class="col-xs-4">Jenis</div>
										<div class="col-xs-8">
											<!-- <span class="red">OUT OF STOCK</span> -->
											<span class="green"><?php echo $row->nama_jenis?></span>
										</div>
									</div>
									 
								</div>
							</div>
						</div>
 
						<?php endforeach; ?> 
						
	
						<div class="clearfix"></div>  
						<br>
						<br>
						<div id="papan" type="hidden"></div>
						 
						<script>
							  
							function onPositionUpdate(position)
							{
								var lat = position.coords.latitude;
								var lng = position.coords.longitude;
								//alert("Current position: " + lat + " " + lng);
								document.getElementById("lat").value = String(lat).substr(0,9);
								document.getElementById("long").value = String(lng).substr(0,10);
								document.getElementById("lat0").value = String(lat).substr(0,9);
								document.getElementById("long0").value = String(lng).substr(0,10);
							}

							if(navigator.geolocation)
							{
								navigator.geolocation.getCurrentPosition(onPositionUpdate);
							}
							else
							{
								 alert("navigator.geolocation is not available");
							}
								 
								
						</script> 
						<script type="text/javascript"> 

							function hitung_jarak(id) {
								  
								setTimeout(function(){
									// alert(String(document.getElementById('lat').value) + " -- " + String(document.getElementById('long').value));
									  var lat = [String(document.getElementById('lat').value), String(document.getElementById('lat'+id).value)]
									  var lng = [String(document.getElementById('long').value), String(document.getElementById('long'+id).value)]
									  var R = 6378137;
									  var dLat = (lat[1]-lat[0]) * Math.PI / 180;
									  var dLng = (lng[1]-lng[0]) * Math.PI / 180;
									  var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
									  Math.cos(lat[0] * Math.PI / 180 ) * Math.cos(lat[1] * Math.PI / 180 ) *
									  Math.sin(dLng/2) * Math.sin(dLng/2);
									  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
									  var d = R * c;
										// alert(Math.round(d)/1000) ;
									  // alert(dist/1000);
									  document.getElementById('jarak'+id).innerHTML = Math.round(d)/1000 + " km";
									  
									  var toko = document.getElementById('toko'+id).innerHTML;
									  var alamat = document.getElementById('alamat'+id).innerHTML;
									  var warna = document.getElementById('warna'+id).innerHTML;
									  var ukuran = document.getElementById('ukuran'+id).innerHTML;
									  var tombol = document.getElementById('tombol'+id).innerHTML;
									  var harga = document.getElementById('harga'+id).value;
									  var jarak = Math.round(d)/1000;
									  var rata = (harga+jarak)/2;
									  
									  arr[id] = [toko, alamat, warna, ukuran, harga, jarak, tombol, rata];
									  //alert(toko +' | '+ alamat +' | '+ warna +' | '+ ukuran +' | '+ harga +' | '+ jarak +' | '+ tombol +' | '+ rata);
									
										//document.getElementById('papan').innerHTML = document.getElementById('papan').innerHTML + toko +' | '+ alamat +' | '+ warna +' | '+ ukuran +' | '+ harga +' | '+ jarak +' | '+ tombol +' | '+ rata +"<br>";
								}, 1000); 
							} 	
							
							
							 
						</script>
						  
						<input type="hidden"  size="50" value="" name="lat" id="lat" /> 
						<input type="hidden"  size="50" value="" name="long" id="long"  />
							
						<input type="hidden"  size="50" value="" name="lat" id="lat0" /> 
						<input type="hidden"  size="50" value="" name="long" id="long0"  />
						
						<span><b>Semua Info</b></span>
						<table class="table table-bordered tbl-cart">
							<thead>
								<tr> 
									<td>Toko</td>
									<td>Alamat</td>
									<td>Warna</td>
									<td>Ukuran</td>
									<td>Harga</td>
									<td>Jarak</td> 
									<td>Petunjuk Jalan</td> 
								</tr>
							</thead>
							<tbody> 
							
								<?php foreach ($perbandingan_all as $row): ?>  
								
								<tr> 
									
									<input type="hidden" id="harga<?php echo $row->id_sepatu?>" value="<?php echo ($row->harga)?>"></input>
									
									<input type="hidden" size="50" value="<?php echo $row->latitude?>" name="lat" id="lat<?php echo $row->id_sepatu?>"  />
									<input type="hidden" size="50" value="<?php echo $row->longitude?>" name="long" id="long<?php echo $row->id_sepatu?>"   />
									<td id="toko<?php echo $row->id_sepatu?>">									
										<a href="<?php echo base_url(); ?>front/toko/detail/<?php echo $row->id_toko; ?>"><?php echo $row->nama_toko?></a>
									</td>
									<td id="alamat<?php echo $row->id_sepatu?>"><?php echo $row->alamat?></td>
									<td id="warna<?php echo $row->id_sepatu?>"><?php echo $row->warna?></td>
									<td id="ukuran<?php echo $row->id_sepatu?>"><?php echo $row->ukuran?></td>
									<td><?php echo convert_rupiah($row->harga)?></td>
									<td id="jarak<?php echo $row->id_sepatu?>" >   
										<script> hitung_jarak(<?php echo $row->id_sepatu?>)</script>
									</td>  
									<td id="tombol<?php echo $row->id_sepatu?>">   
										<button id="petunjuk<?php echo $row->id_sepatu?>" onclick="initialize(<?php echo $row->id_sepatu?>)">Petunjuk Jalan</button>
									</td>  
								</tr> 
								<?php endforeach; ?> 
								 
							</tbody>
						</table>
						
						 
						
						<span>Sistem merekomendasikan toko dengan </span><span class="green"><b>harga termurah</b></span>
						<table class="table table-bordered tbl-cart">
							<thead>
								<tr> 
									<td>Toko</td>
									<td>Alamat</td>
									<td>Warna</td>
									<td>Ukuran</td>
									<td>Harga</td>
									<td>Jarak</td> 
									<td>Petunjuk Jalan</td> 
								</tr>
							</thead>
							<tbody> 
								<tr> 
									 
									<td id="harga_toko"></td>
									<td id="harga_alamat"></td>
									<td id="harga_warna"></td>
									<td id="harga_ukuran"></td>
									<td id="harga_harga"></td>
									<td id="harga_jarak"></td>  
									<td id="harga_tombol"></td>  
								</tr> 
							</tbody>
						</table>
						
						<script>
						
						setTimeout(function(){
							//alert("yahooo");
							arr.sort(function (a,b) {
								//if (a[7] > b[7]) return  1;//rata
								//if (a[7] < b[7]) return -1;
								
								if (a[4] > b[4]) return  1;//harga
								if (a[4] < b[4]) return -1;
								
								//if (a[5] > b[5]) return  1;//jarak
								//if (a[5] < b[5]) return -1;
								return 0;
							});
							
							
							document.getElementById('harga_toko').innerHTML = arr[0][0];
							document.getElementById('harga_alamat').innerHTML = arr[0][1];
							document.getElementById('harga_warna').innerHTML = arr[0][2];
							document.getElementById('harga_ukuran').innerHTML = arr[0][3];
							document.getElementById('harga_harga').innerHTML = convert_rupiah(arr[0][4]);
							document.getElementById('harga_jarak').innerHTML = arr[0][5]+ " km";
							document.getElementById('harga_tombol').innerHTML = arr[0][6];
						}, 1000); 	 
						</script>
						
						
						
						<span>Sistem merekomendasikan toko dengan </span><span class="blue"><b>jarak terdekat</b></span>
						<table class="table table-bordered tbl-cart">
							<thead>
								<tr> 
									<td>Toko</td>
									<td>Alamat</td>
									<td>Warna</td>
									<td>Ukuran</td>
									<td>Harga</td>
									<td>Jarak</td> 
									<td>Petunjuk Jalan</td> 
								</tr>
							</thead>
							<tbody> 
								<tr> 
									 
									<td id="jarak_toko"></td>
									<td id="jarak_alamat"></td>
									<td id="jarak_warna"></td>
									<td id="jarak_ukuran"></td>
									<td id="jarak_harga"></td>
									<td id="jarak_jarak"></td>  
									<td id="jarak_tombol"></td>  
								</tr> 
							</tbody>
						</table>
						
						<script>
						
						setTimeout(function(){
							//alert("yahooo");
							arr.sort(function (a,b) {
								//if (a[7] > b[7]) return  1;//rata
								//if (a[7] < b[7]) return -1;
								
								//if (a[4] > b[4]) return  1;//harga
								//if (a[4] < b[4]) return -1;
								
								if (a[5] > b[5]) return  1;//jarak
								if (a[5] < b[5]) return -1;
								return 0;
							});
							
							
							document.getElementById('jarak_toko').innerHTML = arr[0][0];
							document.getElementById('jarak_alamat').innerHTML = arr[0][1];
							document.getElementById('jarak_warna').innerHTML = arr[0][2];
							document.getElementById('jarak_ukuran').innerHTML = arr[0][3];
							document.getElementById('jarak_harga').innerHTML = convert_rupiah(arr[0][4]);
							document.getElementById('jarak_jarak').innerHTML = arr[0][5]+ " km";
							document.getElementById('jarak_tombol').innerHTML = arr[0][6];
						}, 1000); 	 
						</script>
							
							
						
						<span>Sistem merekomendasikan toko dengan </span><span class="red"><b>sistem rata-rata</b></span>
						<table class="table table-bordered tbl-cart">
							<thead>
								<tr> 
									<td>Toko</td>
									<td>Alamat</td>
									<td>Warna</td>
									<td>Ukuran</td>
									<td>Harga</td>
									<td>Jarak</td> 
									<td>Petunjuk Jalan</td> 
								</tr>
							</thead>
							<tbody> 
								<tr> 
									 
									<td id="rata_toko"></td>
									<td id="rata_alamat"></td>
									<td id="rata_warna"></td>
									<td id="rata_ukuran"></td>
									<td id="rata_harga"></td>
									<td id="rata_jarak"></td>  
									<td id="rata_tombol"></td>  
								</tr> 
							</tbody>
						</table>
						
						<script>
						
						setTimeout(function(){
							//alert("yahooo");
							arr.sort(function (a,b) {
								if (a[7] > b[7]) return  1;//rata
								if (a[7] < b[7]) return -1;
								
								//if (a[4] > b[4]) return  1;//harga
								//if (a[4] < b[4]) return -1;
								
								//if (a[5] > b[5]) return  1;//jarak
								//if (a[5] < b[5]) return -1;
								return 0;
							});
							
							
							document.getElementById('rata_toko').innerHTML = arr[0][0];
							document.getElementById('rata_alamat').innerHTML = arr[0][1];
							document.getElementById('rata_warna').innerHTML = arr[0][2];
							document.getElementById('rata_ukuran').innerHTML = arr[0][3];
							document.getElementById('rata_harga').innerHTML = convert_rupiah(arr[0][4]);
							document.getElementById('rata_jarak').innerHTML = arr[0][5]+ " km";
							document.getElementById('rata_tombol').innerHTML = arr[0][6];
						}, 1000); 	 
						</script>						
					</div>
					
					<div class="row">
						<div id="map_canvas" style="width:710px; height:300px"></div>
						<script> initialize(0)</script>
					</div>
				
					
					
	            </div>
	             
        	</div>
        	<!-- End Product Detail -->
	
  
 
</body>
			
        </div>
	</div>