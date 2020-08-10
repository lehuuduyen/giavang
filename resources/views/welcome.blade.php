<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <style type="text/css">
           .hidden {
              display: none;
              opacity: 0;
            }
            .active{
                 transition: all 2s linear;
                background-color: #f5f5f5;
            }
       </style>
    </head>
    <body>
        <div class="container">
          <h2>Basic Table</h2>
          <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>       

          <table class="table">
            <thead>
              <tr>
                <th width="30%" >Ngày</th>
                <th width="30%" >Giờ</th>
                <th width="20%" >Giá mua</th>
                <th width="20%" >Giá bán</th>

              </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($month as $key => $value) {
                ?>
                    <tr>
                        <td><?=date('d/m/Y',strtotime($value->date))?></td>
                        <td onclick="changeCss(this)" data-key="detail<?=$key?>" style="cursor: pointer;" data-stt="down"><i class="fa fa-arrow-down"></i></td>
                        <td><?=$value->buy ?> </td>
                        <td><?=$value->sell ?> </td>
                    </tr>
                    <?php 
                        foreach ($value->detail as $keyDetail => $valueDetail) {
                            # code...
                            ?>
                                <tr class="active detail<?=$key?> hidden">
                                     <td><?=date('d/m/Y',strtotime($valueDetail->date))?></td>
                                    <td><?=date('d/m/Y',strtotime($valueDetail->date))?></td>
                                    <td><?=$valueDetail->buy ?> </td>
                                    <td><?=$valueDetail->sell ?> </td>
                                  </tr>

                            <?php
                        }

                    ?>



                    <?php
                    }




                ?> 
              
              
             
            </tbody>
          </table>
        </div>
        <script >

            function changeCss(_this){
                let sttActive = $(_this).attr('data-stt')
                let keyActive = $(_this).attr('data-key')
                if(sttActive == "down"){
                    setTimeout(function() {
                        $(_this).html('<i class="fas fa-equals">'); // line 57 in jquery.sticky.js
                    }, 200);
                    setTimeout(function() {
                        $(_this).html('<i class="fa fa-arrow-up">'); // line 57 in jquery.sticky.js
                    }, 300);
                    $(_this).attr('data-stt','top')
                    $("."+keyActive).removeClass('hidden')
                }else{
                    setTimeout(function() {
                        $(_this).html('<i class="fas fa-equals">'); // line 57 in jquery.sticky.js
                    }, 200);
                    setTimeout(function() {
                        $(_this).html('<i class="fa fa-arrow-down">'); // line 57 in jquery.sticky.js
                    }, 300);
                    $(_this).attr('data-stt','down')
                    $("."+keyActive).addClass('hidden')

                }

            }
        </script>
    </body>
</html>
