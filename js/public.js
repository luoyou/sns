/*
 *用于返回需要操作的地址,route为路由地址
 *
 */
var webUrl = function(route){
    var web_url = document.location.href;
    if(web_url.indexOf("index.php")!=-1){
        var web_url_arr = web_url.split("index.php");
        web_url  = web_url_arr[0];
    }
    if(route)
        web_url = web_url + 'index.php' + route;
    return web_url;
}

var basePath = webUrl();
