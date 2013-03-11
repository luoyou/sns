$('document').ready(function(){

    $('#submit_message').click(function(){
        $.post(webUrl('/Talk/Create','link'),
            talkContent(),
            function(data,status){
                if(status == 'success'){
                    data = $.parseJSON(data);
                    var content = "<li style='display: none;'><a href='#'><img src='"+webUrl()+"/images/"+data['pic']+"' /></a><div class='message_frame bg2'><div class='message_user_name'><span><a href='#'>"+data['name']+"</a></span></div><div class='message_user_content'><p>"+data['content']+"</p><span>刚刚<a href='javascript:none;'>赞</a><a href='javascript:none;'>评论</a><a href='javascript:none;'>转发</a></span></div><div class='message_comment' contenteditable='true'></div></div></li>";
                    $('#message_list').prepend(content);
                    $('#message_list li:first').fadeIn('slow');
                    $('#publish_message').text('');
                }else{

                }
            }
        )
    });

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
});

function talkContent(){
    var tempContent = $('#publish_message').text();
    var jsonContent = {
        'Talk':{
            'content':tempContent
        }
    };
    return jsonContent;
}

function webUrl(route,source){
    var web_url = document.location.href;
    if(web_url.indexOf("index.php")!=-1){
        var web_url_arr = web_url.split("index.php");
        source == 'link'?web_url  = web_url_arr[0] + 'index.php':web_url = web_url_arr[0];
    }
    if(route)
        web_url = web_url + route;
    return web_url;
}
