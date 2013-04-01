$('document').ready(function(){

    /**
     *说说页面发布信息
     */
    $('#submit_message').click(function(){
        $.ajax({
            url:webUrl('/Talk/Create'),
            data:{'Talk':{'content':$('#publish_message').text()}},
            type:'post',
            dataType:'json',
            success:function(data){talkPublish(data)},
            error:function(){alert('发布失败');},
        });
    });

    /**start
     *说说的默认信息
     */
    var publish_message = $('#publish_message').text();
    
    $('#publish_message').focus(function(){
        if($(this).text() == publish_message){
            $(this).text('');
            $(this).removeClass('edit_status');
        }
    }).blur(function(){
        if($(this).text()==''){
            $(this).text(publish_message);
            $(this).addClass('edit_status');
        }else{
            $(this).removeClass('edit_status');
        }
    });
    /*  end  */

    /**
     *转发说说
     */
    $('.transmit').click(function(){
        $.ajax({
            url:webUrl('/Talk/Transmit'),
            data:{transmit_id:$(this).attr('trans')},
            type:'post',
            dataType:'json',
            success:function(data){talkPublish(data);},
            error:function(data){alert('转发失败');}
        });
    });

    $('.comment').click(function(){
        var current = $(this).parent().parent().parent();
        current.children('.comment_commit').fadeIn();
        current.children('.message_comment').focus();
    });

    $('.message_comment').focus(function(){
        $(this).next().fadeIn('slow');
    }).blur(function(){
        $(this).next().fadeOut('slow');
    })

});

/*
 *用于返回需要操作的地址,route为路由地址
 *
 */
function webUrl(route){
    var web_url = document.location.href;
    if(web_url.indexOf("index.php")!=-1){
        var web_url_arr = web_url.split("index.php");
        web_url  = web_url_arr[0] + 'index.php';
    }
    if(route)
        web_url = web_url + route;
    return web_url;
}

function talkPublish(data){
    var content = "<li style='display: none;'><a href='#'><img src='"+webUrl()+"/images/"+data['pic']+"' /></a><div class='message_frame bg2'><div class='message_user_name'><span><a href='#'>"+data['name']+"</a></span></div><div class='message_user_content'><p>"+data['content']+"</p><span>刚刚<a href='javascript:none;'>赞</a><a href='javascript:none;'>评论</a><a href='javascript:none;'>转发</a></span></div><div class='message_comment' contenteditable='true'></div></div></li>";
    $('#message_list').prepend(content);
    $('#message_list li:first').fadeIn('slow');
    $('#publish_message').text('');
}
