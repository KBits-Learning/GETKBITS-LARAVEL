
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Learnig Tracks</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    

    <nav class="navbar fixed-bottom navbar-light bg-primary">
        <a class="navbar-brand">Kbits</a>

        <label for="check">
            <li class="fas fa-bars" id="sidebar_btn"></li>
        </label>

        <form class="form-inline">
            <input type="button" id="log" class="btn btn-danger" onclick="location = 'salir.php'" value="Logout">
        </form>
    </nav>

    <!--search-->
    <form>
        <input type="text" name="search" value="">
        <button type="submit" name="button">SEARCH</button>
    </form>

    <!--sidebar start-->
    <div class="sidebar">
        <center>
            <img src="1.jpg" class="profile_image" alt="">
            <!--show thw name loged in Mostrar -->
            <h3>{{ $view_data['user']->first_name }} {{ $view_data['user']->last_name }}</h3>

            @if ($view_data['user']->title)
                <h5>{{ $view_data['user']->title }}</h5>
            @endif
         
        </center>

        <a href="home"><i class="fas fa-desktop"></i><span>Home</span></a>
        <a href="Tracks"><i class="fas fa-table"></i><span>Tracks</span></a>
        <a href="Packs"><i class="fas fa-bezier-curve"></i><span>Packs</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>support</span></a>
        <a href="Setting"><i class="fas fa-cogs"></i><span>Settings</span></a>

    </div>
    <!--sidebar end-->
    <!--packs-->
    <div class="content">


        <div>
            <article>
                <h1>Active Learning packs</h1>
                <div class="card" style="width: 22rem;">
                    <img src="2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">pack 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="Packs.php" class="btn btn-primary">Packs</a>
                    </div>
                    <div class="form-group">
                 <button>add new pack</button>
             </div>
                </div>
            </article>

        </div>
    </div>

    <!--tracks-->
    <div class="content">


        <div >
            <article >
                <h1>Active Learning Tracks</h1>
                <div class="card" style="width: 22rem;">
                    <img src="2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Course 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="packs.php" class="btn btn-primary">tracks</a>

                    </div>
                    <div class="form-group">
                 <button>add new track</button>
             </div>
                </div>
            </article>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

