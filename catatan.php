<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan</title>
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <style>
        @font-face {
            font-family: 'digit';
            src: url(font/digit.ttf);
        }
        
        .jam{
            font-family: digit;
        }

        .text{
            padding: 0;
        }

        .text textarea{
            margin-top: -21px;
        }
        
        
    </style>
</head>
<body>
    <div class="container mx-auto mt-5">
        <div class="row">
            <div class="text form-group col-9">
              <label for=""></label>
              <textarea class="form-control bg-dark" name="" id="" rows="25"></textarea>
            </div>
            <div class="col-3">
                <aside class="jam bg-dark rounded mb-5 shadow text-white text-center h3" id = "clock" onload="currentTime()"></aside>
                <aside class="text-center">
                    <a name="save" id="save" class="btn btn-primary w-25 text-white" href="#" role="button">save</a>
                    <a name="cancel" id="cancel" class="btn btn-primary w-25 text-white" href="#" role="button">cancel</a>
                </aside>
            </div>
        </div>
    </div>
<script src="javascript/front-display.js"></script>
</body>
</html>