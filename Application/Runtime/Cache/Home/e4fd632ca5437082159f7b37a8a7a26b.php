<?php if (!defined('THINK_PATH')) exit();?><h2>用户id是：<b>
	<?php echo $_SESSION['wh_userId']; ?>
</b></h2><h2>所属机构编码是：<b>
	<?php echo $_SESSION['wh_code']; ?>
</b></h2><h2>职位是：<b>
	<?php echo $zhiwei; ?>
    <!-- <?php dump($_SESSION); ?> -->
</b></h2>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="/zySystem/uploadify/uploadify.css">
</head>
<body>
	<!---->
<?php $day = date('ymd'); ?>
    <img id="img" src="<?php echo '/zySystem/Uploads/'.$_SESSION['wh_patha'].'/'.$_SESSION['wh_photo']; ?>" width="130" height="130" border="0" />
    <input id="file_upload" name="file_upload" type="file" multiple="true" value="" />

    
<?php echo session(id); ?>
	<!---->
</body>
<script type="text/javascript" src="/zySystem/Public/muban/assets/js/jquery.js"></script>
<script type="text/javascript" src="/zySystem/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
//上传插件
$(function() {
    $('#file_upload').uploadify({
        'swf'      : '/zySystem/uploadify/uploadify.swf',
        'uploader' : '<?php echo U("News/uploadify");?>',
        'buttonText' : '点击上传',
        'onUploadSuccess' : function(file, data, response) {
            $('#img').attr('src','/zySystem/Uploads/'+ data);
            $('#images').val(data);
        },
    });
});
</script>

</html>