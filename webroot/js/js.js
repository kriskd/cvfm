$(document).ready(function(){
    
    var name = "info";
    var domain = "capitolviewfarmersmarket.com";
    $('.email').append('<a href="mailto:' + name + '@' + domain + '">' + name + '@' + domain +'</a>');
    
    $('.colorbox').colorbox({
        //href: '/admin/vendors/add',
        iframe: true,
        width: '600px',
        height: '500px'
    });
    
    $('.confirm').click(function(){
        var answer = confirm('Do you want to delete?');
        if (answer) {
            return true;
        }
        else {
            return false;
        }
    });
    
    //Admin panel
    $('select#ProductVendorsProductType').change(function(){ 
        $('.products').empty();
        var item = $(this).val();
        var html = '<select name="data[Vendor][product_id]"><option value=""></option>';
        $.get('/products/get_products/' + item, function(data){
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
        
    //Products page
    $('select.products').change(function(){
        $(this).addClass('selected-category');
        $('.col2').empty();
        var item = Number($(this).val()); 
        $('select.products').each(function(){
            if(!($(this).hasClass('selected-category'))){
                $(this).find('option:eq(0)').attr('selected', 'selected');
            }
        });
        $(this).removeClass('selected-category');
        if(item > 0){
            var html = '';
            $.get('/products/get_vendors/' + item, function(data){
                if(data.length > 0){
                    for(var i=0; i<data.length; i++){
                        html += '<div class="vendor"><p><strong>' + data[i][0] + '</strong> ' + data[i][1] + '</p><p>' + data[i][2] + '</p></div>';
                    } 
                    $('.col2').prepend(html);
                }
                else{
                    $('.col2').prepend('<p>No vendors carry this product.</p>');
                }
            }, 'json');
        }
        else{
            $('#col2').prepend('<p>Please select a product</p>');
        }

        //Old
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
        //End old
    });
       
    if($('.sponsor').length > 0){ 
        var count = 1;
        var biggestHeight = 0;
        //var sponsorCount = $('.sponsor').length;
        //var goldSponsorCount = $('.gold').length;
        //var silverSponsorCount = $('.silver').length;
        //var regularSponsorCount = sponsorCount - goldSponsorCount - silverSponsorCount;
        $('.sponsor').each(function(){
            if(!($(this).hasClass('gold')) && !($(this).hasClass('silver'))){
                var thisHeight = $(this).height();
                if(thisHeight > biggestHeight){
                    biggestHeight = thisHeight;
                }
                if((count % 4) == 0){
                    var current = $('.sponsor').index(this);
                    for(var i = current - 3; i <= current; i++){
                        $('.sponsor:eq(' + i + ')').height(biggestHeight);
                    }
                    biggestHeight = 0;
                }
                count++;
            }
        });
    }
    
    if(('#thumbs').length > 0){ 
        $('#thumbs').galleriffic({ 
            delay: 10000,
            numThumbs:  17,
            imageContainerSel: '#image',
            controlsContainerSel: '#controls',
            autoStart: true,
            playLinkText:              'Play',
            pauseLinkText:             'Pause',
            prevLinkText:              '&lsaquo; Previous',
            nextLinkText:              'Next &rsaquo;',
            nextPageLinkText:          'Next &rsaquo;',
            prevPageLinkText:          '&lsaquo; Prev'
        });
    }
    
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
