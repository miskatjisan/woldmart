jQuery(document).ready(function() {



    const site_url = "http://127.0.0.1:8000/";

    $("body").on("keyup", "#search", function(){

        let text = $("#search").val();
        // console.log(text);
        if (text.length > 0) {
        $.ajax({
            data: {search: text},
            url : site_url + "search-product", 
            method : 'post',
            beforSend : function(request){
                return request.setReuestHeader('X-CSRF-Token',("meta[name='csrf-token']"))

            },
            success:function(result){
                $("#searchProducts").html(result);

            }

        }); // end ajax 
        
    } // end if

    if (text.length < 1 ) $("#searchProducts").html("");


     }); // end one  


    $(window).on("load",function(){

        document.getElementById('loader_img').style.display="none";
        document.getElementById('loader_content').style.display="block";

    });


})





