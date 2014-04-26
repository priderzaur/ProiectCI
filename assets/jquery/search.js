//<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
//<script type="text/javascript">
$(function(){


    $(".search").keyup(function(){

        var searchid = $(this).val();
        var host = location.href;
        host = host + "views/header.php";

   postData = {
    "search" : searchid}
         if(searchid!='')
    {
        console.log(postData);
        $.ajax({
        type: "POST",
        url: 'application/views/header.php',
        data: postData,
        //dataType:'html',
        //contentType:'html',
        cache: false,
        success: function(html)
        {
            alert("success");
            $("#result").html(html).show();
        }
        });
    }return false;    
    });

    

    jQuery("#result").live("click",function(e){
        var $clicked = $(e.target);
        var $name = $clicked.find('.name').html();
        var decoded = $("<div/>").html($name).text();
        $('#searchid').val(decoded);
    });
    jQuery(document).live("click"   , function(e) {
        var $clicked = $(e.target);
        if (!$clicked.hasClass("search")){
            alert("ASDHDSA");
        jQuery("#result").fadeOut();
        }
    });
    $('#searchid').click(function(){    
        
        if(searchid)
            jQuery("#result").fadeIn();
        else
            jQuery("#result").fadeOut();
    });
});
//</script>