<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jadwal Sholat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="feat/bootstrap-select.min.css">
  <script type="text/javascript" src="feat/bootstrap-select.min.js"></script>

  <script type="text/javascript" src="js/jquery.floatThead.min.js"></script>

  <style type="text/css">

  	table.floatThead-table {
		    border-top: none;
		    border-bottom: none;
		    background-color: #FFF;
	}

	.dropdown-toggle { outline: none !important; }

	.bootstrap-select.btn-group .dropdown-menu { z-index: 9999 !important; }

  </style>

</head>
<body>

<div class="container">
  <h1>Jadwal Sholat</h1>
  <div class="row">
  <div class="col-lg-5 hidden-xs">
  <p>Jadwal Sholat untuk <span class="city"></span> dan sekitarnya </p>
  <p>Metode :  <span class="metode"></span></p>
  </div>
  <div class="col-lg-5">
  	<select name="kota" id="pilih_kota" class="inputcity">
		<option value="1">Jakarta</option>
		<option value="2">Surabaya</option>
		<option value="3">Medan</option>
		<option value="4">Bandung</option>
		<option value="5">Makassar</option>
		<option value="6">Semarang</option>
		<option value="7">Balikpapan</option>
		<option value="8">Palembang</option>
		<option value="9">Pekanbaru</option>
		<option value="10">Banjarmasin</option>
		<option value="10">Batam</option>
		<option value="11">Pontianak</option>
		<option value="12">Solo</option>
		<option value="13">Samarinda</option>
		<option value="14">Padang</option>
		<option value="15">Yogyakarta</option>
		<option value="16">Malang</option>
		<option value="17">Manado</option>
		<option value="18">Denpasar</option>
		<option value="19">Bandar Lampung</option>
</select>
  </div>
  </div>
</div>


<div class="container">
  <div class="row">
  	<div class="col-lg-8 col-md-3 hidden-xs">

  		<div class="table-responsive">
  		<table class="table table-hover  with-responsive-wrapper">
		    <thead>
		      <tr>
		      	<th>Tanggal</th>
		        <th>Subuh</th>
		        <th>Dhuhur</th>
		        <th>Ashar</th>
		        <th>Maghrib</th>
		        <th>Isya</th>
		      </tr>
		    </thead>
		    <tbody class="prayerTimes">

		    </tbody>
  		</table>
  		</div>
  	</div>

  	<div class="col-lg-3 col-md-3">
  	<h2 style="margin-top: 0px; font-size: 20px" class="hidden-xs">Jadwal sholat hari ini</h2>

  		<div class="visible-xs" style="height: 50px;"></div>

  		<p><span class="city"></span> dan sekitarnya </p>

  		<table class="table table-striped">
		    <tbody class="">
		    	<tr><td>Tanggal</td><td class="td-tanggal"></td></tr>
		    	<tr><td>Subuh</td><td class="td-subuh"></td></tr>
		    	<tr><td>Dhuhur</td><td class="td-dhuhur"></td></tr>
		    	<tr><td>Ashar</td><td class="td-ashar"></td></tr>
		    	<tr><td>Maghrib</td><td class="td-maghrib"></td></tr>
		    	<tr><td>Isya</td><td class="td-isya"></td></tr>
		    </tbody>
  		</table>
  		<p>Metode :<br><span class="metode"></span></p>

  		<img src="abu.gif" id="loader" style="visibility: hidden;">

  	</div>

  </div>
</div>



<script type="text/javascript">


	$(".table.with-responsive-wrapper").floatThead({
        responsiveContainer: function($table){
            return $table.closest(".table-responsive");
        }
    });
    $(".table.without-responsive-wrapper").floatThead();


    function getMonthText(){
			var month;
			 switch (new Date().getMonth()) {
			   case 0:
			     month= "Jan";
			     break;
			   case 1:
			     month= "Feb";
			     break;
			   case 2:
			     month= "March";
			     break;
			   case 3:
			     month= "April";
			     break;
			   case 4:
			     month= "May";
			     break;
			   case 5:
			     month= "June";
			     break;
			   case  6:
			     month= "July";
			     break;
			   case  7:
			     month= "August";
			     break;
			   case  8:
			     month= "Sep";
			     break;
			   case  9:
			     month= "Oct";
			     break;
			   case  10:
			     month= "Nov";
			     break;
			   case  11:
			     month= "Dec";
			     break;
			}

			return month;
	}



	function load_Kalender(kota) {

			$('.prayerTimes').html('');
			$('.td-subuh, .td-dhuhur, .td-ashar, .td-maghrib, .td-isya, .city, .metode').text('');
			$("#loader").css("visibility", "visible");


			var kota_dicek = 'jakarta';

			if(kota!=''){ kota_dicek = kota; }

			//jQuery(function($) {
			 $.getJSON('http://api.aladhan.com/calendarByCity?city='+ kota_dicek +'&country=ID&month=<?=date('m')?>&year=<?=date('Y')?>&method=4', function (response)
			 {


			 	 var myDate = new Date();

			 	 var tgl = ("0" + myDate.getDate()).slice(-2);
			 	 var tahun = myDate.getFullYear();

			 	 var tglSekarang =  tgl + ' ' + getMonthText() + ' ' + tahun;


			 	 setTimeout(function(){


					 	 $('.metode').text(response.data[0].meta.method.name);

						 $.each(response.data, function(i, item) {

					        if(item.date.readable===tglSekarang){

							        var $tr = $('<tr style="background: #e2ffa8">').append(
							        	$('<td nowrap>').text(item.date.readable),
							            $('<td nowrap>').text(item.timings.Fajr),
							            $('<td nowrap>').text(item.timings.Dhuhr),
							            $('<td nowrap>').text(item.timings.Asr),
							            $('<td nowrap>').text(item.timings.Maghrib),
							            $('<td nowrap>').text(item.timings.Isha),
							        ).appendTo('.prayerTimes');

							        $('.td-tanggal').text(item.date.readable);
							        $('.td-subuh').text(item.timings.Fajr);
							        $('.td-dhuhur').text(item.timings.Dhuhr);
							        $('.td-ashar').text(item.timings.Asr);
							        $('.td-maghrib').text(item.timings.Maghrib);
							        $('.td-isya').text(item.timings.Isha);


					    	}else{

					    			var $tr = $('<tr>').append(
							        	$('<td nowrap>').text(item.date.readable),
							            $('<td nowrap>').text(item.timings.Fajr),
							            $('<td nowrap>').text(item.timings.Dhuhr),
							            $('<td nowrap>').text(item.timings.Asr),
							            $('<td nowrap>').text(item.timings.Maghrib),
							            $('<td nowrap>').text(item.timings.Isha),
							        ).appendTo('.prayerTimes');



					    	}


					        //console.log($tr.wrap('<p>').html());
					     });


					     $("#loader").css("visibility", "hidden");

				 }, 1500);



			 });
			//});

	}


	$('select#pilih_kota').on('change', function() {

		  var kota_text = $("#pilih_kota option:selected").text();
		  var kota_dipilih = kota_text.replace(' ','+');

		  load_Kalender(kota_dipilih);

		  $('.city').text(kota_text);

	})



	$('#pilih_kota').selectpicker({
	  style: 'btn-info',
	  size: 10
	});


	load_Kalender('Jakarta');
	$('.city').text('Jakarta');


</script>


<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3945558,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3945558&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->

</body>
</html>
