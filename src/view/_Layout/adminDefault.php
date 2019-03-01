<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

        <base href="<?= $racineWeb ?>" >

        <!-- stylesheet -->
        	<link href="./css/jquery-ui.min.css" rel="stylesheet">
        
        <!-- Bootstrap core CSS -->
    	<link href="./css/bootstrap.min.css" rel="stylesheet">
    	<link href="./css/jquery-ui.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css?t=<?=rand()?>">
        <link rel="stylesheet" href="css/admin.css?t=<?=rand()?>>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       
        <!--<script src="//cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>-->
        
        
<link rel="stylesheet" href="./css/jqueryui-autocomplete-bootstrap.css" type="text/css" media="all">
		<link href="./css/keyboard.css" rel="stylesheet">
        <!-- Favicon -->
        <!--<link rel="shortcut icon" href="Contenu/Images/favicon.png">-->

        <!-- Title -->
        <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="./ckfinder/ckfinder.js"></script>
        <title><?= $titre ?></title>
    </head>
    <body>
	
            <?= $contenu ?>


		<!-- Plugin jQuery -->
		<script type="text/javascript"  src="./js/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="./js/jquery-ui.min.js"></script>
           
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- JS keyboard -->
		<script type="text/javascript" src="./js/jquery.keyboard.min.js"></script>
	<!-- keyboard extensions (optional) -->
    <script type="text/javascript" src="./js/jquery.mousewheel.min.js"></script>
    <!-- code postaux -->
    <script type="text/javascript" src="./js/api.js"></script>

    <script type="text/javascript" src="./js/index.js?t=<?=rand()?>"></script>
	   <!-- Map interactions -->
        <script type="text/javascript" src="./js/events.js"></script>
    	<script src="./js/bootstrap.min.js"></script>
        

    <script type="text/javascript">
    var editor = CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor, '../' );
</script>

    
    </body>
</html>
