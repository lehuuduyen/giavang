<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <style type="text/css">

           .fadein, .fadeout {
               opacity: 0;
               -moz-transition: opacity 0.4s ease-in-out;
               -o-transition: opacity 0.4s ease-in-out;
               -webkit-transition: opacity 0.4s ease-in-out;
               transition: opacity 0.4s ease-in-out;
           }
           .fadein {
               opacity: 1;
           }
       </style>
    </head>
    <body>
        <div class="container">

            <div class="col-sm-12">
                <h3>Thông tin Email</h3>
            </div>
                <div class="col-sm-12">
                    <label for="basic-url">Email</label>
                    <div class="input-group mb-3">
                        <input type="text" onchange="changeEmail(this)" class="form-control" placeholder="lehuuduyen" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="Bạn muốn gửi mail không" disabled aria-label="Text input with checkbox">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Fader"  class="fadeout col-sm-12">

                    <button class="btn btn-info w-100">Lưu email</button>
                </div>

            </div>

        <script>

            $("#Trigger2").click(function () {
                if ($("#Fader").hasClass("fadeout"))
                    $("#Fader").removeClass("fadeout").addClass("fadein");
                else
                    $("#Fader").removeClass("fadein").addClass("fadeout");
            });
            function changeEmail(_this) {

            }
        </script>
    </body>
</html>
