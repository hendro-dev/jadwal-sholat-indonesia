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
  	<select name="kota" id="pilih_kota" class="inputcity" data-live-search="true">
		<option value="1">Ambarawa</option>
		<option value="2">Ambon</option>
		<option value="3">Amlapura</option>
		<option value="4">Amuntai</option>
		<option value="5">Argamakmur</option>
		<option value="6">Atambua</option>
		<option value="7">Babo</option>
		<option value="8">Bagan Siapiapi</option>
		<option value="316">Bahaur, Kalteng</option>
		<option value="9">Bajawa</option>
		<option value="10">Balige</option>
		<option value="11">Balikpapan</option>
		<option value="12">Banda Aceh</option>
		<option value="13">Bandarlampung</option>
		<option value="14">Bandung</option>
		<option value="15">Bangkalan</option>
		<option value="16">Bangkinang</option>
		<option value="17">Bangko</option>
		<option value="18">Bangli</option>
		<option value="19">Banjar</option>
		<option value="20">Banjar Baru</option>
		<option value="21">Banjarmasin</option>
		<option value="22">Banjarnegara</option>
		<option value="23">Bantaeng</option>
		<option value="24">Banten</option>
		<option value="25">Bantul</option>
		<option value="26">Banyuwangi</option>
		<option value="27">Barabai</option>
		<option value="28">Barito</option>
		<option value="29">Barru</option>
		<option value="30">Batam</option>
		<option value="31">Batang</option>
		<option value="32">Batu</option>
		<option value="33">Baturaja</option>
		<option value="34">Batusangkar</option>
		<option value="35">Baubau</option>
		<option value="36">Bekasi</option>
		<option value="37">Bengkalis</option>
		<option value="38">Bengkulu</option>
		<option value="39">Benteng</option>
		<option value="40">Biak</option>
		<option value="41">Bima</option>
		<option value="42">Binjai</option>
		<option value="43">Bireuen</option>
		<option value="44">Bitung</option>
		<option value="45">Blitar</option>
		<option value="46">Blora</option>
		<option value="47">Bogor</option>
		<option value="48">Bojonegoro</option>
		<option value="49">Bondowoso</option>
		<option value="50">Bontang</option>
		<option value="51">Boyolali</option>
		<option value="52">Brebes</option>
		<option value="53">Bukit Tinggi</option>
		<option value="315">Bula Sbt, Maluku</option>
		<option value="54">Bulukumba</option>
		<option value="55">Buntok</option>
		<option value="56">Cepu</option>
		<option value="57">Ciamis</option>
		<option value="58">Cianjur</option>
		<option value="59">Cibinong</option>
		<option value="60">Cilacap</option>
		<option value="61">Cilegon</option>
		<option value="62">Cimahi</option>
		<option value="63">Cirebon</option>
		<option value="64">Curup</option>
		<option value="65">Demak</option>
		<option value="66">Denpasar</option>
		<option value="67">Depok</option>
		<option value="68">Dili</option>
		<option value="69">Dompu</option>
		<option value="70">Donggala</option>
		<option value="71">Dumai</option>
		<option value="72">Ende</option>
		<option value="73">Enggano</option>
		<option value="74">Enrekang</option>
		<option value="75">Fakfak</option>
		<option value="76">Garut</option>
		<option value="77">Gianyar</option>
		<option value="78">Gombong</option>
		<option value="79">Gorontalo</option>
		<option value="80">Gresik</option>
		<option value="81">Gunung Sitoli</option>
		<option value="82">Indramayu</option>
		<option value="309">Jakarta Barat</option>
		<option value="308" selected="">Jakarta Pusat</option>
		<option value="310">Jakarta Selatan</option>
		<option value="311">Jakarta Timur</option>
		<option value="312">Jakarta Utara</option>
		<option value="83">Jambi</option>
		<option value="84">Jayapura</option>
		<option value="85">Jember</option>
		<option value="86">Jeneponto</option>
		<option value="87">Jepara</option>
		<option value="88">Jombang</option>
		<option value="89">Kabanjahe</option>
		<option value="90">Kalabahi</option>
		<option value="91">Kalianda</option>
		<option value="92">Kandangan</option>
		<option value="93">Karanganyar</option>
		<option value="94">Karawang</option>
		<option value="95">Kasungan</option>
		<option value="96">Kayuagung</option>
		<option value="97">Kebumen</option>
		<option value="98">Kediri</option>
		<option value="99">Kefamenanu</option>
		<option value="100">Kendal</option>
		<option value="101">Kendari</option>
		<option value="102">Kertosono</option>
		<option value="103">Ketapang</option>
		<option value="104">Kisaran</option>
		<option value="105">Klaten</option>
		<option value="106">Kolaka</option>
		<option value="107">Kota Baru Pulau Laut</option>
		<option value="108">Kota Bumi</option>
		<option value="109">Kota Jantho</option>
		<option value="110">Kotamobagu</option>
		<option value="111">Kuala Kapuas</option>
		<option value="112">Kuala Kurun</option>
		<option value="113">Kuala Pembuang</option>
		<option value="114">Kuala Tungkal</option>
		<option value="115">Kudus</option>
		<option value="116">Kuningan</option>
		<option value="117">Kupang</option>
		<option value="118">Kutacane</option>
		<option value="119">Kutoarjo</option>
		<option value="120">Labuhan</option>
		<option value="121">Lahat</option>
		<option value="122">Lamongan</option>
		<option value="123">Langsa</option>
		<option value="124">Larantuka</option>
		<option value="125">Lawang</option>
		<option value="126">Lhoseumawe</option>
		<option value="127">Limboto</option>
		<option value="128">Lubuk Basung</option>
		<option value="129">Lubuk Linggau</option>
		<option value="130">Lubuk Pakam</option>
		<option value="131">Lubuk Sikaping</option>
		<option value="132">Lumajang</option>
		<option value="133">Luwuk</option>
		<option value="134">Madiun</option>
		<option value="135">Magelang</option>
		<option value="136">Magetan</option>
		<option value="137">Majalengka</option>
		<option value="138">Majene</option>
		<option value="139">Makale</option>
		<option value="140">Makassar</option>
		<option value="141">Malang</option>
		<option value="142">Mamuju</option>
		<option value="143">Manna</option>
		<option value="144">Manokwari</option>
		<option value="145">Marabahan</option>
		<option value="146">Maros</option>
		<option value="147">Martapura Kalsel</option>
		<option value="314">Masamba, Sulsel</option>
		<option value="148">Masohi</option>
		<option value="149">Mataram</option>
		<option value="150">Maumere</option>
		<option value="151">Medan</option>
		<option value="152">Mempawah</option>
		<option value="153">Menado</option>
		<option value="154">Mentok</option>
		<option value="155">Merauke</option>
		<option value="156">Metro</option>
		<option value="157">Meulaboh</option>
		<option value="158">Mojokerto</option>
		<option value="159">Muara Bulian</option>
		<option value="160">Muara Bungo</option>
		<option value="161">Muara Enim</option>
		<option value="162">Muara Teweh</option>
		<option value="163">Muaro Sijunjung</option>
		<option value="164">Muntilan</option>
		<option value="165">Nabire</option>
		<option value="166">Negara</option>
		<option value="167">Nganjuk</option>
		<option value="168">Ngawi</option>
		<option value="169">Nunukan</option>
		<option value="170">Pacitan</option>
		<option value="171">Padang</option>
		<option value="172">Padang Panjang</option>
		<option value="173">Padang Sidempuan</option>
		<option value="174">Pagaralam</option>
		<option value="175">Painan</option>
		<option value="176">Palangkaraya</option>
		<option value="177">Palembang</option>
		<option value="178">Palopo</option>
		<option value="179">Palu</option>
		<option value="180">Pamekasan</option>
		<option value="181">Pandeglang</option>
		<option value="182">Pangka_</option>
		<option value="183">Pangkajene Sidenreng</option>
		<option value="184">Pangkalan Bun</option>
		<option value="185">Pangkalpinang</option>
		<option value="186">Panyabungan</option>
		<option value="187">Par_</option>
		<option value="188">Parepare</option>
		<option value="189">Pariaman</option>
		<option value="190">Pasuruan</option>
		<option value="191">Pati</option>
		<option value="192">Payakumbuh</option>
		<option value="193">Pekalongan</option>
		<option value="194">Pekan Baru</option>
		<option value="195">Pemalang</option>
		<option value="196">Pematangsiantar</option>
		<option value="197">Pendopo</option>
		<option value="198">Pinrang</option>
		<option value="199">Pleihari</option>
		<option value="200">Polewali</option>
		<option value="201">Pondok Gede</option>
		<option value="202">Ponorogo</option>
		<option value="203">Pontianak</option>
		<option value="204">Poso</option>
		<option value="205">Prabumulih</option>
		<option value="206">Praya</option>
		<option value="207">Probolinggo</option>
		<option value="208">Purbalingga</option>
		<option value="209">Purukcahu</option>
		<option value="210">Purwakarta</option>
		<option value="211">Purwodadigrobogan</option>
		<option value="212">Purwokerto</option>
		<option value="213">Purworejo</option>
		<option value="214">Putussibau</option>
		<option value="215">Raha</option>
		<option value="216">Rangkasbitung</option>
		<option value="217">Rantau</option>
		<option value="218">Rantauprapat</option>
		<option value="219">Rantepao</option>
		<option value="220">Rembang</option>
		<option value="221">Rengat</option>
		<option value="222">Ruteng</option>
		<option value="223">Sabang</option>
		<option value="224">Salatiga</option>
		<option value="225">Samarinda</option>
		<option value="313">Sambas, Kalbar</option>
		<option value="226">Sampang</option>
		<option value="227">Sampit</option>
		<option value="228">Sanggau</option>
		<option value="229">Sawahlunto</option>
		<option value="230">Sekayu</option>
		<option value="231">Selong</option>
		<option value="232">Semarang</option>
		<option value="233">Sengkang</option>
		<option value="234">Serang</option>
		<option value="235">Serui</option>
		<option value="236">Sibolga</option>
		<option value="237">Sidikalang</option>
		<option value="238">Sidoarjo</option>
		<option value="239">Sigli</option>
		<option value="240">Singaparna</option>
		<option value="241">Singaraja</option>
		<option value="242">Singkawang</option>
		<option value="243">Sinjai</option>
		<option value="244">Sintang</option>
		<option value="245">Situbondo</option>
		<option value="246">Slawi</option>
		<option value="247">Sleman</option>
		<option value="248">Soasiu</option>
		<option value="249">Soe</option>
		<option value="250">Solo</option>
		<option value="251">Solok</option>
		<option value="252">Soreang</option>
		<option value="253">Sorong</option>
		<option value="254">Sragen</option>
		<option value="255">Stabat</option>
		<option value="256">Subang</option>
		<option value="257">Sukabumi</option>
		<option value="258">Sukoharjo</option>
		<option value="259">Sumbawa Besar</option>
		<option value="260">Sumedang</option>
		<option value="261">Sumenep</option>
		<option value="262">Sungai Liat</option>
		<option value="263">Sungai Penuh</option>
		<option value="264">Sungguminasa</option>
		<option value="265">Surabaya</option>
		<option value="266">Surakarta</option>
		<option value="267">Tabanan</option>
		<option value="268">Tahuna</option>
		<option value="269">Takalar</option>
		<option value="270">Takengon</option>
		<option value="271">Tamiang Layang</option>
		<option value="272">Tanah Grogot</option>
		<option value="273">Tangerang</option>
		<option value="274">Tanjung Balai</option>
		<option value="275">Tanjung Enim</option>
		<option value="276">Tanjung Pandan</option>
		<option value="277">Tanjung Pinang</option>
		<option value="278">Tanjung Redep</option>
		<option value="279">Tanjung Selor</option>
		<option value="280">Tapak Tuan</option>
		<option value="281">Tarakan</option>
		<option value="282">Tarutung</option>
		<option value="283">Tasikmalaya</option>
		<option value="284">Tebing Tinggi</option>
		<option value="285">Tegal</option>
		<option value="286">Temanggung</option>
		<option value="287">Tembilahan</option>
		<option value="288">Tenggarong</option>
		<option value="289">Ternate</option>
		<option value="290">Tolitoli</option>
		<option value="291">Tondano</option>
		<option value="292">Trenggalek</option>
		<option value="293">Tual</option>
		<option value="294">Tuban</option>
		<option value="295">Tulung Agung</option>
		<option value="296">Ujung Berung</option>
		<option value="297">Ungaran</option>
		<option value="298">Waikabubak</option>
		<option value="299">Waingapu</option>
		<option value="300">Wamena</option>
		<option value="301">Watampone</option>
		<option value="302">Watansoppeng</option>
		<option value="303">Wates</option>
		<option value="304">Wonogiri</option>
		<option value="305">Wonosari</option>
		<option value="306">Wonosobo</option>
		<option value="307">Yogyakarta</option>
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

  		<div class="visible-xs" style="height: 30px;"></div>

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
  		<p>Metode Kalkulasi :<br><span class="metode"></span></p>
  		<p>Metode Hukum : Syafi'i</p>
  		<p>Subuh <span class="subuh_dr"></span> deg, Isya <span class="isya_dr"></span> deg</p>
  		<p>Latitude/Longitude: <span class="latlong"></span></p>
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

    	    Date.shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    	    var BulanIni = new Date().getMonth();

    	    return Date.shortMonths[BulanIni];

	}


	function get_lokasi_kordinat(kota_dipilih){

		$('.prayerTimes').html('');
		$('.td-subuh, .td-dhuhur, .td-ashar, .td-maghrib, .td-isya, .city, .metode, .latlong, .subuh_dr, .isya_dr').text('');
		$("#loader").css("visibility", "visible");

		$.getJSON('http://api.aladhan.com/cityInfo?city='+ kota_dipilih +'&country=ID', function (response){

			var latitude = response.data.latitude;
			var longitude = response.data.longitude;
			var timezone = response.data.timezone;

			load_Kalender(latitude,longitude,timezone);

			$('.latlong').text(latitude+','+longitude);

		});

	}


	function load_Kalender(latitude,longitude,timezone) {

			//jQuery(function($) {
			 $.getJSON('http://api.aladhan.com/calendar?latitude='+ latitude +'&longitude='+ longitude +'&timezonestring='+ timezone +'&month=<?=date('m')?>&year=<?=date('Y')?>&method=5&latitudeAdjustmentMethod=3', function (response)
			 {


			 	 var myDate = new Date();

			 	 var tgl = ("0" + myDate.getDate()).slice(-2);
			 	 var tahun = myDate.getFullYear();

			 	 var tglSekarang =  tgl + ' ' + getMonthText() + ' ' + tahun;


			 	 setTimeout(function(){


					 	 $('.metode').text(response.data[0].meta.method.name);

						 $.each(response.data, function(i, item) {

					        if(item.date.readable===tglSekarang){

					        		$('.subuh_dr').text(item.meta.method.params.Fajr);
					        		$('.isya_dr').text(item.meta.method.params.Isha);

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

		  get_lokasi_kordinat(kota_dipilih);

		  $('.city').text(kota_text);

	})



	$('#pilih_kota').selectpicker({
	  style: 'btn-info',
	  size: 10
	});


	get_lokasi_kordinat('Jakarta Pusat');
	$('.city').text('Jakarta Pusat');


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
