$(document).ready(function(){
    /*
    var name = "info";
    var domain = "capitolviewfarmersmarket.com";
    $('.email').append('<a href="mailto:' + name + '@' + domain + '">' + name + '@' + domain +'</a>');
    computeHeight();
    
    $(window).resize(function(){
        //alert('resized');
        computeHeight();
        //$('#junk').append('<p>Window height from resize event: ' + $(window).height()+ '</p>');
    });
    
    $("#slideshow").cjSimpleSlideShow({
        autoRun: true
    });
   
    $('#footer').footer();
    */
    
    $('.colorbox').colorbox({
        //href: '/cake1/admin/vendors/add'
        iframe: true,
        width: '600px',
        height: '400px'
    });
    
    $('select.product_types').change(function(){
        $('.products').empty();
        var item = $(this).val();
        var html = '<select name="data[Vendor][product_id]"><option value=""></option>';
        $.get('/cake1/products/get_products/' + item, function(data){
            for(var i=0; i<data.length; i++){
                var product_arr = data[i];
                for(var key in product_arr){
                    if(key=='Product'){
                        var product = product_arr[key];
                        html += '<option value=' + product['id'] + '">' + product['name'] + '</option>';
                    }
                }
            }
            html += '</select>';
            $('.products').append(html);
        }, 'json');
    });
    
    $('select.products').change(function(){
        //$('#col2').empty();
        var item = $(this).val();
        var html = '';
        $.get('/cake1/products/get_vendors/' + item, function(data){
            for(var i=0; i<data.length; i++){
                html += '<p>' + data[i] + '</p>';
            }
            $('#content').prepend(html);
        }, 'json');
        
        
        /*var itemCount = $('select').length;
        var productName = $('select:eq(' + item + ') option:selected').text();
        for (var i=0; i<itemCount; i++){
            if (i != item){
                $('select:eq(' + i + ') option:contains("Select One")').attr('selected', true);
            }
        }
        if (productName != 'Select One'){
            var ser = 'productName=' + productName;
            var html = "";
            $.post("../getvendors.php", ser, function(data) {
                var count = 0;
                for(key in data){
                    var vendorArray = data[key];
                    count++;
                    html += '<li><span class="vendorName">' + vendorArray.vendorName + '</span> - ' + vendorArray.schedule + '</li>';
                }
                productName = productName.toLowerCase();
                if(count>1){
                    $('#col2').append('<h2>The following vendors offer <span class="productName">' + productName + '</span> for sale.</h2>');
                }
                else{
                    $('#col2').append('<h2>The following vendor offers <span class="productName">' + productName + '</span> for sale.</h2>');
                }
                $('#col2').append('<ul>' + html + '</ul>');
            }, 'json');
            
        }*/
    });
    
    function computeHeight(){
        var windowHeight = $(window).height();
        var footer = 3*$('#footer').height()
        var content = windowHeight - footer + 22;
        $('#junk').empty();
        //$('#junk').append('<p>' + windowHeight + ' ' + footer + ' ' + content + '</p>');
        
        $('#content').css('min-height', content + 'px');
        //alert('min-height ' + content);
    }
});