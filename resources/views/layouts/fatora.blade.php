<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Fatora') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fatora form</title>
    <link href="{{ asset('fatora/img/logo.png')}}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{ asset('fatora/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('fatora/css/hover.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/fonts/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/style-ar.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/img/logo.png')}}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{ asset('fatora/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('fatora/css/hover.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/fonts/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('fatora/css/style-ar.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('purshase/css/style.css')}}">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">
    </script>

    <script src="https://use.fontawesome.com/d10920a460.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript">
      
                  $(document).ready(function(){
                var i=1;
                $("#add_row").click(function(){b=i-1;
                  	$('#addr'+i).html($('#addr'+b).html()).find('td:first-child');
                  	$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
                  	i++; 
              	});
                $("#delete_row").click(function(){
                	if(i>1){
            		$("#addr"+(i-1)).html('');
            		i--;
            		}
            		calc();
            	});
            	
            	$('#tab_logic tbody').on('keyup change',function(){
            		calc();
            	});
            	$('#tax').on('keyup change',function(){
            		calc_total();
            	});
            	
            
            });
            
            function calc()
            {
            	$('#tab_logic tbody tr').each(function(i, element) {
            		var html = $(this).html();
            		if(html!='')
            		{
            			var qty = $(this).find('.qty').val();
            			var price = $(this).find('.price').val();
            			var discount = $(this).find('.discount').val();
            			var tax = $(this).find('.tax').val();
            			var amount = $(this).find('.amount').val(((qty*price) - discount));
            			var amounttx = $(this).find('.amounttx').val((((qty*price) - discount)/100)*tax);
            			var totals = $(this).find('.tvat').val(((qty*price) - discount) + ((((qty*price) - discount)/100)*tax));
                        var totall = $(this).find('.totall').val(qty*price);
                        
            			calc_total();
            		}
                });
            }
             
            function calc_total()
            {
            	totall = 0;
            	discount = 0;
            	amount = 0;
            	amounttx = 0;
            	totals = 0;
            	
            	$('.totall').each(function() {
                    totall += parseFloat($(this).val());
                });
                
                $('.discount').each(function() {
                    discount += parseFloat($(this).val());
                });
                
                $('.amount').each(function() {
                    amount += parseFloat($(this).val());
                });
                
                $('.amounttx').each(function() {
                    amounttx += parseFloat($(this).val());
                });
                
                $('.tvat').each(function() {
                    totals += parseFloat($(this).val());
                });
                
            	$('#sub_total').val(totall.toFixed(2));
                $('#discount_total').val(discount.toFixed(2));
                $('#amount_total').val(amount.toFixed(2));
                $('#amounttx_total').val(amounttx.toFixed(2));
                $('#Total_Amount_Due').val(totals.toFixed(2));
            }

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <script src="{{asset('purshase/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('purshase/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
     integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
     crossorigin="anonymous"></script>
    <script src="{{asset('fatora/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fatora/js/main.js')}}"></script>
    <script src="{{asset('fatora/js/wow.min.js')}}"></script>
    <script>
      new WOW().init();
    </script>
      @toastr_js
    @toastr_render





</body>
</html>
