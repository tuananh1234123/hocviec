<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{ asset('admin') }}/js/123.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        crossorigin="anonymous">
    <style type="text/css">
        #test {
            height: 120px;
            width: 100px;
        }

        #test:hover {
            background: #1cbf6b;
            color: white;
            border: solid;
            border-width: 1px;
            border-color: black;
            height: 200px;
            width: 100px;


        }
    </style>
</head>

<body>
    <div style="height: 40px;width: 100px;margin-bottom: 60px">
        <h1 style="border: solid 1px #1cbf6b"><a href=" {{route('test.api')}}">Gọi API</a></h1>
    </div>
    <p><?php $cache = Cache::get('cache');
    echo $cache;
    ?></p>
    <div class="test1">
        <div class="" id="paypal-button-container"></div>
        <script
            src="https://www.paypal.com/sdk/js?client-id=AeWtzEUV7lfozi84IWtChtwzK4XyZSMMSTXtRYoyHbRPxgdLbCczAqA9cJNq8B82dp2qtD_idzf8xIiR">
        </script>
        <script>
            paypal.Buttons({
            createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '100.0'
                        }
                    }]
                });
            }
            }).render('#paypal-button-container');
        </script>
    </div>
    <div class="container-fluid" style="text-a">
        <div class="row">
            <div class="col-4">
                <button class="button" type="text" id="test">Input ajax</button>
                <div id="noidung" style="color:red;"></div>
                <div id="demo"></div>
            </div>
            <div class="col-8 col-md-2">
                <hr>
                31213</div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"
            charset="utf-8" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script>
            var obj = {
            "name": "John",
            "age": 30,
            "city": "New York"
        };
        var myJSON = JSON.stringify(obj);
        document.getElementById("demo").innerHTML = myJSON +
            " : Đây là ví dụ chuyển đối tượng trong js thanh chuỗi Json";
        </script>
        <script>
            $(document).ready(function() {
            // xu ly click
            $('#test').on('click', function() {
                var url = " {{route('test.ajax')}}";
                $.ajax({
                    type: 'get',
                    url: url,
                    success: function(response) {
                        var text = JSON.parse(JSON.stringify(response));
                        var i = 0;
                        for (i = 0; i < text.data.length; i++) {
                            $("#noidung").append("email : " + text.data[i].email +
                                " | name : " + text.data[i]
                                .name + "<br>");
                        }
                        $("#noidung").append(text);
                        // Tạo thông báo an toàn options excape HTML
                        toastr.options.escapeHtml = true;
                        toastr.success('Load data success', 'Success');
                        // Hiển thị thông báo thành công với một số tùy chọn khác
                        toastr.info('Success Notify', 'Content Notify', {
                            timeOut: 5000
                        });

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Loi!', 'Dính lỗi rồi kaka')
                    }
                })
            });

            // $('#test').on('keydown', function() {
            //     if (event.keyCode == 8) {
            //         var url = " {{route('test.ajax')}}";
            //         $.ajax({
            //             type:'get',
            //             url: url,
            //             success: function(response) {
            //                 var text = JSON.parse(response);
            //                 var i = 0;
            //                 for (i = 0; i < text.length; i++) {
            //                     $("#noidung").append("id : " + text[i].id + " RoleName : " +
            //                         text[i].RoleName + "<br>");
            //                 }
            //                 $("#noidung").append(text);
            //                 // Tạo thông báo an toàn options excape HTML
            //                 toastr.options.escapeHtml = true;
            //                 toastr.success('Show Thanh Cong roi kaka!', 'Dang Show Du Lieu');
            //                 // Hiển thị thông báo thành công với một số tùy chọn khác
            //                 toastr.info('Nội dung thông báo thông tin', 'Tiêu đề notify', {
            //                     timeOut: 5000
            //                 });

            //             },
            //             error: function(jqXHR, textStatus, errorThrown) {
            //                 toastr.error('Loi!', 'Dính lỗi rồi kaka')
            //             }
            //         });
            //     }
            // });

        });
        </script>

</body>

</html>