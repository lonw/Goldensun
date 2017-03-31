<hr>
<footer>
    <center>&copy; Goldensun Content Content Management System Version 1.0 beta</center>
</footer>
</div>

<!--/.fluid-container-->
<script src="bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<script src="bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/adapters/jquery.js"></script>
<script src="assets/scripts.js"></script>
<script>
$(function() {
// Easy pie charts
$('.chart').easyPieChart({animate: 1000});
});
</script>
<script>
$(function() {
    // Bootstrap
    $('#bootstrap-editor').wysihtml5();

// Ckeditor standard
    $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '350px', toolbar: [
{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
]});
    $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '350px'});
});


</script>
</body>
</html>
