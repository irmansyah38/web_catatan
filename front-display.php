<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan</title>
<link rel="stylesheet" href="boot/css/bootstrap.css">
    <style>
        @font-face {
            font-family: "head" ;
            src: url(font/head.ttf);
        }
        @font-face {
            font-family: "digit";
            src: url(font/digit.ttf);
        }

        a{
            text-decoration: none;
        }
        .jam{
            font-family: digit;
            font-size: 25px;
        }

        header .row header h1{
            font-family: head;
        }

        .main{
            top: 130px;
            left: 50px;
        }

        .main div main{
            height: 550px ;
        }

        .main div main form hr{
            color: white;
            width: 80%;
            font-size: 10px;
        }

        #tugas{
            height: 465px;
            z-index: 10;
        }
        
        #tugas hr{
            color: white;
            width: 80%;
            font-size: 10px;
            
        }

        footer p,a{
            text-align: center;
            color: white;
        }

        footer p a:hover{
            color: salmon;
        }
    </style>
</head>
<body>
    <!-- header -->
    <header class="container-fluid shadow bg-dark">
        <div class="row">
            <header class="col-9 p-2">
                <h1 class="text-white">Catatan</h1>
            </header>
            <nav class="col-3 p-2 text-end">
                <a href="" class="me-3 mt-2 btn btn-secondary" role="button">Log Out</a>
            </nav>
        </div>
    </header>

    <!-- end header -->

    <!-- container -->
    <div class="container position-absolute main">
        <div class="row">

            <!-- main -->
            <main class="col-9 bg-dark rounded shadow p-2">
                <form method="POST">
                    <header class="d-flex justify-content-between">
                        <h1 class="text-white">My List</h1>
                        <a name="" id="" class="me-3 mt-2 btn btn-secondary" href="#" role="button">New Note</a>
                    </header>
                    <hr class="mx-auto">
                    
                    
                </form>
            </main>

            <!-- main -->

            <!--sub main  -->
            <div class="col-3">

                <!-- waktu -->
                <aside class="jam bg-dark rounded mb-5 shadow text-white text-center" id = "clock" onload="currentTime()"></aside>
                <!-- waktu -->

                <!-- tugas -->
                <aside class="tugas bg-dark rounded shadow position-relative" id="tugas">
                    <p class="h3 text-center text-white">Daftar Tugas</p>
                    <hr class="mx-auto">

                    <div class="position-absolute start-50 top-100">
                        <hr>
                    </div>
                </aside>
                <!-- tugas -->

            </div>

            <!-- sub main -->

        </div>
    </div>

    <!-- main -->

    <!-- footer -->
    <footer class="container-fluid position-absolute bottom-0 end-0 bg-dark p-1">
        <p>by design <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
</svg>Irmansyah</a></p>
    </footer>
    <!-- end footer -->
<script src="javascript/front-display.js"></script>
</body>
</html>

