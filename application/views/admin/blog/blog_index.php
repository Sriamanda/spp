<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               ini
            </div>
        </div>
    </div>
 
    <script src="<?php echo base_url('assets/jquery/jquery-3.3.1.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/bootstrap.bundle.js');?>"></script>
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
    <script type="text/javascript">
        $(function () {
                CKEDITOR.replace('ckeditor',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder/browse.php');?>',
                    height: '200px'             
                });
            });
    </script>
</body>
</html>