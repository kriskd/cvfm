$(document).ready(function(){
 
    var name = "info";
    var domain = "capitolviewfarmersmarket.com";
    $('.email-mailto').append('<a href="mailto:' + name + '@' + domain + '">' + name + '@' + domain +'</a>');
    
    $('.launch-tooltip').tooltip();
    $('.required label').append(' <span class="required">*</span>');
 
    // Used for admin events, sponsor and product add
    $('.fire-modal').on('click', function(){
        $.ajax({
            url: $(this).prop('href'),
            dataType: 'html',
            success: function(data){
                $('body').append(data);
                $('.modal').modal('show').on('shown.bs.modal', function () {
                    $('.date-picker').datetimepicker({
                      'pickTime': false
                    });
                    $('.date-picker').on('dp.change', function(e) {
                      var formatted = moment(e.date).format('YYYY-MM-DD');
                      $(this).parent().next('input').prop('value', formatted);
                    });
                });
                $('.required label').append(' <span class="required">*</span>');
            }
        });
        return false;
    });

    // Delete confirm
    $('.delete-modal').on('click', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
      var name = $(this).data('name');
      $.ajax({
        url: $(this).prop('href'),
        dataType: 'html',
        data: {'id' : id, 'name' : name},
        type: 'post',
        cache: false,
        beforeSend: function() {
          $('.modal').remove();
        },
        success: function(data){
          $('body').append(data);
          $('#delete-confirm').modal();
        }
      });
    });

    // Validation of modal forms in admin
    $(document).on('click', '.modal form input[type=submit]', function(e) {
      e.preventDefault();
      var form = $(this).parents('form');
      $.ajax({
        url: form.prop('action'),
        data: form.serialize(),
        dataType: 'json',
        error: function(jqXHR, textStatus, errorThrown) {
          //console.log(textStatus + ' ' + errorThrown);
        },
        beforeSend: function() {
          $('.error-message').remove();
        },
        success: function(data) {
          $.each(data, function(model, msgObj) {
            if (msgObj.success) {
              form.submit();
            } else {
              for (var field in msgObj) {
                var pascalField = snakeToPascal(field);
                var msgArr = msgObj[field];
                for (var i=0; i<msgArr.length; i++) {
                  var msg = msgArr[i];
                  var id = '#'+model+pascalField;
                  if ($(id).prop('type') != 'hidden') {
                    $(id).parent().addClass('has-error');
                    $(id).after($('<div />').addClass('label label-danger error-message').text(msg));
                  }
                }
              }
            }
          });
        }
      });
    });

    function snakeToPascal(s){
      var split = s.split('_');
      var ret = '';
      for (var i=0; i<split.length; i++) {
        ret += split[i].charAt(0).toUpperCase() + split[i].substring(1); 
      }
      return ret;
    }

    // Events modal on homepage
    $('.events-modal').on('click', function(){
      $.ajax({
        url: '/events/index',
        dataType: 'html',
        success: function(data) {
          $('body').append(data);
          $('#events-modal').modal('show');
        }
      });
    });

    $('.date-picker').datetimepicker({
      'pickTime': false
    });

    $('.date-picker').on('dp.change', function(e) {
      var formatted = moment(e.date).format('YYYY-MM-DD');
      $(this).parent().next('input').prop('value', formatted);
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
    $('select#ProductVendorsProductType').on('change', function(){ 
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
 
    // Vendor/Sponsor active
    $('.vendor-active, .sponsor-active').on('click', function(){
      var value;
      if ($(this).is(':checked')) {
        value = 1;
      } else {
        value = 0;
      }
      var id = $(this).data('id');
      var that = $(this);
      $.ajax({
        url: $(this).parents('form').prop('href'), 
        data: {'active': value, 'id': id},
        type: 'post',
        beforeSend: function() {
          that.hide();
          that.parent().addClass('ajax-loading').show();
        },
        success: function() {
          that.parent().removeClass('ajax-loading');
          that.show();
        } 
      });
    });

    //Products page
    $('select.products').on('change', function(){
        $(this).addClass('selected-category');
        $('.products .results').empty();
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
                        html += '<div class="vendor"><p><strong>' + data[i][0] + '</strong> ' + data[i][1] + '</p></div>';
                    } 
                    $('.products .results').prepend(html);
                }
                else{
                    $('.products .results').prepend('<p>No vendors carry this product.</p>');
                }
            }, 'json');
        }
        else{
            $('.products .results').prepend('<p>Please select a product</p>');
        }
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

    $('.clear-schedule').on('click', function(e) {
      $(this).parents('form').find('input[type=text]').each(function() {
        $(this).prop('value', '');
      });
    });
});
