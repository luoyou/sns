<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/public.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/extends/uploadify/jquery.uploadify-3.1.js"></script>

    <title>test</title>

</head>

<body>
<div class="mt_10">
    <p class="lineh_25">图片的宽度至少为500px</p>
				<span class="uploadInterestingImg border_e8 uploadify-queue clearfix" id="upload_interesting-queue">
				</span>
    <input type="file" id="upload" name="upload_interesting" value="上传图片" limit="required:true" msg="必须上传商品团购图片！" msgArea="span_upload_interesting" />
</div>

<?php echo $swfObj; ?>

<script type="text/javascript">
    function getParamsFromUrl() {
        var url, pos, parastr, para;
        url = window.location.href;
        pos = url.indexOf("?")
        if (pos > -1) {
            parastr = url.substring(pos + 1);
        } else {
            parastr = "";
        }
        return parastr;
    }

    function reload() {
        window.location.reload();
    }

    function getUploadUrl() {
        return webUrl('/User/AjaxAvatar');
        //return "http://www.maylandstudio.com/c_util/avatarForm";
    }

    function uploadSuccessHandler(callbackMsg) {
        //alert("上传成功，回调方法请写在这里");
        //alert(callbackMsg);
    }

    function uploadFailHandler(callbackMsg) {
        //alert("上传失败，回调方法请写在这里");
        //alert(callbackMsg);
    }

    //大头像：宽
    function getBigAvatarWidth() {
        return 160;
    }

    //大头像：高
    function getBigAvatarHeight() {
        return 160;
    }

    //中头像：宽
    function getMiddleAvatarWidth() {
        return 100;
    }

    //中头像：高
    function getMiddleAvatarHeight() {
        return 100;
    }

    //小头像：宽
    function getLittleAvatarWidth() {
        return 50;
    }

    //小头像：高
    function getLittleAvatarHeight() {
        return 50;
    }

    //裁剪框：宽
    function getCutRectWidth() {
        return 160;
    }

    //裁剪框：高
    function getCutRectHeight() {
        return 160;
    }

    jQuery(function($){

        var setUpload = function(){
            var cObj;

            cObj = this;
            $('#upload').uploadify({
                auto:true,
                uploader:webUrl('/User/image'),
                swf:webUrl()+"extends/uploadify/uploadify.swf",
                debug : false,
                fileSizeLimit : "2MB",
                buttonText : "上传图片",
                removeCompleted : false,
                fileTypeExts : "*.jpg;*.png;*.gif",
                queueSizeLimit : 1,
                uploadLimit : 999999,
                onUploadSuccess : function(file, data,response) {
                    data = eval("(" +data +")");
                    if(data.success){
                        insertUpload(file, data);
                    }else{

                    }
                },
                onUploadError : function(file, errorCode,errorString,errorMsg) {
                    //alert("file="+ file +";errorCode="+ errorCode +";errorString="+ errorString +";errorMsg="+ errorMsg);
                }
            });
        }
        setUpload();

        var insertUpload = function(file, data){
            var queue,swfObj,html;

            queue = $('#upload-queue');
            swfObj = $('#'+ file.id);
            if(swfObj.prevAll().get()){
                swfObj.prevAll().remove();
            }
            swfObj.css('display','none');
            html = "<div style='position:relative;top:-16px;'><img src='"+ basePath +"images/user/luo/pic/"+ data.name +"' /><input type='hidden' name='goods_img' value='"+data.name + "' /></div>";
            swfObj.append(html).css('display', 'inline-block');

        }

    });
</script>
</body>
</html>
