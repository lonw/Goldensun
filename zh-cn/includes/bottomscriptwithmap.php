<!--All Script-->
<script src="./js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="./js/appear.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
<script src="./js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="./js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<!--portfolio-->
<script src="./js/jquery.shuffle.modernizr.min.js" type="text/javascript"></script>
<script src="./js/featherlight.min.js" type="text/javascript"></script>
<script src="./js/spsimpleportfolio.js" type="text/javascript"></script>
<script src="./js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="./js/smoothscroll.js" type="text/javascript"></script>
<script src="./js/owl.carousel.js" type="text/javascript"></script>
<script src="./js/sp-flickr-gallery.js" type="text/javascript"></script>
<script src="./js/main.js" type="text/javascript"></script>
<script type="text/javascript">
//============================================
//map
//=============================================
google.maps.event.addDomListener(window, 'load', function() {

    $('.sppb-addon-gmap-canvas').each(function(index) {
        var mapId = 'sppb-addon-gmap' + (index + 1);
        var self = this;

        $(this).attr('id', mapId);

        var zoom = $(self).data('mapzoom');
        var mousescroll = $(self).data('mousescroll');

        var latlng = new google.maps.LatLng($(self).data('lat'), $(self).data('lng'));
        var mapOptions = {
            zoom: zoom,
            center: latlng,
            scrollwheel: mousescroll
        };
        var map = new google.maps.Map(document.getElementById(mapId), mapOptions);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });
        map.setMapTypeId(google.maps.MapTypeId[$(self).data('maptype')]);

    });

});
</script>
<script src="./js/prefixfree.min.js" type="text/javascript"></script>
<script src="./js/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
</body>

</html>
