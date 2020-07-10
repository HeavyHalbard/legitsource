<html>
<body>

Contents:

<?php $file_content = file_get_contents('derpibooru mod chatlogs.txt'); ?>

<script type="text/javascript">

var details = '<?php echo $file_content ; ?>';

document.write(details);

</script>

</body>
</html>
