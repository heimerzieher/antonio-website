<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Bootstrap demo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container" id="mainContainer">
            <small>Antonio Freiles</small>

            <?php $selected = 'cv'; include 'navbar.php'; ?>

            <p>Hello! I am a PhD student in Philosophy at <a href="https://thecollege.syr.edu/philosophy/"> Syracuse University</a>. Before coming to Syracuse, I studied in Lugano where I completed my BA at <a href="https://isfi.ch">ISFI</a> and my MA under the supervision of <a href="https://claudiocalosi.xyz"> Claudio Calosi</a> and <a href="http://www.columbia.edu/~av72/"> Achille Varzi </a> at <a href="https://www.usi.ch/en/education/master/philosophy">USI</a>.</p>
            <p>Here, you can find out about my <a href="./research.html">research</a>, CV and contact.</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Projects</th>
                        <th scope="col">Journal / Press</th>
                        <th scope="col">Year</th>
                        <th scope="col">Co-Authors</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">A</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                    </tr>
                    <tr>
                        <td scope="row">B</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                    </tr>
                    <tr>
                        <td scope="row">C</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                    </tr>
                    <tr>
                        <td scope="row">D</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                    </tr>
                    <tr>
                        <td scope="row">E</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                        <td>TODO</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>
