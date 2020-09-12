</main>
		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					
					<div class="col-md-3">
						<div class="col-lg-4 col-md-4 col-sm-4">
				<div id="custom_html-3" class="widget_text widget widget_custom_html"><span><h5>HUBUNGI KAMI</h5></span><div class="textwidget custom-html-widget"><center>
	<table id="tabel-kontak">
		<tbody><tr>
			<td><span class="fa fa-map-marker" style="font-size:1.2em">:</span></td>
			<td><a href="https://goo.gl/maps/1vzohfFLxDwi6Any6" ><h4>Jl. Ir H Djuanda Komplek Perkantoran<h4></a></td>
		</tr>
		<tr>
			<td><span class="fa fa-phone" style="font-size:1.2em">:</span></td>
			<td><a href="tel:02657523848">(0265) 7523848</a></td>
		</tr>
		<tr>
			<td><span class="fas fa-envelope" style="font-size:1.2em">:</span></td>
			<td><a href="mailto:dinasosialkotatasik@gmail.com">dinsos.kotatasik@gmail.com</a></td>
		</tr>
		<tr>
			<td><span class="fa fa-instagram" style="font-size:1.2em">:</span></td>
			<td><a href="http://instagram.com/dinsostasikmalayakota" target="_blank" rel="noopener noreferrer">@dinsostasikmalayakota</a></td>
		</tr>
		<tr>
			<td><span class="fa fa-globe" style="font-size:1.2em">:</span></td>
			<td><a href="http://tasikmalayakota.go.id" target="_blank" rel="noopener noreferrer">Website Resmi Kota Tasikmalaya</a></td>
		</tr>
	</tbody></table>
</div>			</div>
							</div>
					</div>

					<div class="col-md-3">
					<div class="col-lg-4 col-md-3 col-sm-4">
				<div id="custom_html-4" class="widget_text widget widget_custom_html"><h4 class="widget-title h6"><span><h4>LOKASI</h4></span></h4><div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.3537044252372!2d108.20217792917812!3d-7.307207099670387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f50cff99d8e43%3A0x36ee9ad28e7814e!2sDinas+Sosial+Tasikmalaya!5e0!3m2!1sen!2sid!4v1564370132216!5m2!1sen!2sid" width="450" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe><br><br><br>
</div></div>			</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>

		<!-- jQuery Plugins -->
		<script src="<?= BASEURL;?>/webmag/js/jquery.min.js"></script>
		<script src="<?= BASEURL;?>/webmag/js/bootstrap.min.js"></script>
		<script src="<?= BASEURL;?>/webmag/js/main.js"></script>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

<script src="<?= BASEURL;?>/geo/leaflet.ajax.js"></script>
   <script type="text/javascript">
   var mymap = L.map('mapid').setView([-7.350029, 108.2224596], 12);
   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);

var myStyle = {
    "color": " #FFFF00",
    "weight": 5,
    "opacity": 0.65
};var myStyle1 = {
    "color": "#FF69B4",
    "weight": 5,
    "opacity": 0.65
};var myStyle2 = {
    "color": "#0000FF",
    "weight": 5,
    "opacity": 0.65
};
var myStyle3 = {
    "color": "#A0522D",
    "weight": 5,
    "opacity": 0.65
};
var myStyle4 = {
    "color": "red",
    "weight": 5,
    "opacity": 0.65
};
var myStyle5 = {
    "color": "#FFA500",
    "weight": 5,
    "opacity": 0.65
};
var myStyle6 = {
    "color": "#FF6347",
    "weight": 5,
    "opacity": 0.65
};
var myStyle7 = {
    "color": "#2E8B57",
    "weight": 5,
    "opacity": 0.65
};
var myStyle8 = {
    "color": "#00FFFF",
    "weight": 5,
    "opacity": 0.65
};
var myStyle9 = {
    "color": "#7FFF00",
    "weight": 5,
    "opacity": 0.65
};
function popUp(f,l){
    var out = [];
    if (f.properties){
        for(key in f.properties){
            out.push(key+": "+f.properties[key]);
        }
        l.bindPopup(out.join("<br />"));
    }
}
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.tawang.geojson"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.cipedes.geojson"],{onEachFeature:popUp,style: myStyle1}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.mangkubumi.geojson"],{onEachFeature:popUp,style: myStyle2}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.purbaratu.geojson"],{onEachFeature:popUp,style: myStyle3}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.kawalu.geojson"],{onEachFeature:popUp,style: myStyle4}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.tamansari.geojson"],{onEachFeature:popUp,style: myStyle5}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.bungursari.geojson"],{onEachFeature:popUp,style: myStyle6}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.indihiang.geojson"],{onEachFeature:popUp,style: myStyle7}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.cihideung.geojson"],{onEachFeature:popUp,style: myStyle8}).addTo(mymap);
var jsonTest = new L.GeoJSON.AJAX(["<?= BASEURL;?>/geo/Kec.cibeureum.geojson"],{onEachFeature:popUp,style: myStyle9}).addTo(mymap);
   </script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'VISUALISASI PMKS & PSKS'
    },
    subtitle: {
        text: 'Kota Tasikmalaya 2020'
    },
    xAxis: {
        categories: {},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'value'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'PMKS',
        color: 'red',
        data: {},
        {
        name: 'PSKS',
        color: 'blue',
        data: {}]
});
</script>
	</body>
</html>
