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
    <!--<link rel="stylesheet" href="{{ asset('purshase/css/style.css')}}">-->
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
        $('tbody').delegate('.quantity,.budget' ,'keyup',function(){
            var tr=$(this).parent().parent();
            var quantity=tr.find('.quantity').val();
            var budget=tr.find('.budget').val();
            var amount=(quantity*budget);
            tr.find('.amount').val(amount);
            total();

        });
        function total(){
            var total=0;
            $('.amount').each(function(i,e){
                var amount=$(this).val()-0;
            total +=amount;
        });

         document.getElementById("total").value = total;
          tax.addEventListener('input', updateValue);
          paid.addEventListener('input', updateRest);

            function updateValue(){
            var tax = document.getElementById('tax').value ;
            var taxPercent = tax /100
            var total_tax = taxPercent * total
            var final = total_tax + total;

            document.getElementById("total_after_tax").value = final ;
       }

       function updateRest(){
        var paid = document.getElementById('paid').value ;

        var tax_after = document.getElementById("total_after_tax").value
        var allPaid = tax_after - paid;
        document.getElementById('rest').value = allPaid;
       }


        }
        $('.addRow1').on('click',function(){
            addRow1();
        });

        $('.addRow').on('click',function(){
            addRow();
        });
        function addRow1()
        {
            

                var tr='<tr>'+
            '<td><input type="text" name="product_name[]" class="form-control" required=""></td>'+
            '<td><input type="text" name="brand[]" class="form-control"></td>'+
            '<td><input type="text" name="budget[]" class="form-control budget"></td>'+
            '<td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>'+
            '<td><input type="text" name="amount[]" class="form-control amount"></td>'+
            '<td><a class="btn btn-danger remove"><i class="fas fa-remove"></i></a></td>'+
            '</tr>';
            $('tbody').append(tr);
        };


        function addRow()
        {
            var tr='<tr>'+

            '<td><input type="text" name="including_VAT[]" class="form-control" required=""></td>'+
            '<td><input type="text" name="Tax_Amount[]" class="form-control"></td>'+
            '<td><input type="text" name="Tax_rate[]" class="form-control quantity" required=""></td>'+
            '<td><input type="text" name="Discount[]" class="form-control budget"></td>'+
            ' <td><input type="text" name="Taxable_Amount[]" class="form-control amount"></td>'+
            ' <td><input type="text" name="Quantity[]" class="form-control amount"></td>'+
            ' <td><input type="text" name="Unite_Price[]" class="form-control amount"></td>'+
            ' <td><input type="text" name="details_goods[]" class="form-control amount"></td>'+
            '<td><a class="btn btn-danger remove"><i class="fas fa-remove"></i></a></td>'+
            '</tr>';
            $('tbody').append(tr);
        };


        $('.remove').live('click',function(){
            var last=$('tbody tr').length;
            if(last==1){
                alert("لا يمكنك حذف اخر صف ");
            }
            else{
                 $(this).parent().parent().remove();
            }

        });

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <script src="{{asset('purshase/js/custom.js')}}"></script>
    <script src="{{asset('purshase/js/jquery-3.5.1.min.js')}}"></script>
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
