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
            error:function(){alert('发布失败');}
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

    /**
     *显示评论按钮
     */
    $('.comment').click(function(){
        var current = $(this).parent().parent().parent();
        current.children('.message_comment').focus();
    });

    $('.message_comment').focus(function(){
        $(this).next().fadeIn('slow');
    }).blur(function(){
        $(this).next().fadeOut('slow');
    });

    $('.reply').click(function(){
        var current  = $(this).parentsUntil('.message_frame','.comment_view');
        var add_text = $(this).parent().parent(); 
        var add_val  = add_text.find('a').html();
        //current.next().text("<a href='"+add_attr+"'>"+add_val+"</a>");
        current.next().focus();
    });

    /**
     *提交评论
     */
    $('.comment_commit').click(function(){
        $.ajax({
            url:webUrl('/TalkList/Comment'),
            data:
                {'TalkComment':
                    {
                        'list_id':$(this).parent().children('.comment').attr('comment'),
                        'pid':0,
                        'content':$(this).prev().text()
                    }
                },
            type:'post',
            dataType:'json',
            success:function(data){commentPublish(data);},
            error:function(data){alert('评论失败');}
        });
    });

});

function talkPublish(data){
    var content = "<li style='display: none;'><a href='#'><img src='"+webUrl()+"/images/"+data['pic']+"' /></a><div class='message_frame bg2'><div class='message_user_name'><span><a href='#'>"+data['name']+"</a></span></div><div class='message_user_content'><p>"+data['content']+"</p><span>刚刚<a href='javascript:none;'>赞</a><a href='javascript:none;'>评论</a><a href='javascript:none;'>转发</a></span></div><div class='message_comment' contenteditable='true'></div></div></li>";

    $('#message_list').prepend(content);
    $('#message_list li:first').fadeIn('slow');
    $('#publish_message').text('');
}

function commentPublish(data){
    var content = "<li><a href='#'><img src='"+webUrl()+"/images/"+data['pic']+"' /></a><div class='comment_main'><span class='comment_content'><a href='#'>"+data['nickname']+"</a>:"+data['content']+"</span><span class='comment_info'>"+data['create_time']+"<a class='reply'>回复</a></span></div></li>";
}
