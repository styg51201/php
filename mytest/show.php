<?php
require_once('./checkSession.php');
require_once('./db.inc.php');

        $sql = "SELECT `Img` FROM `ad` WHERE `Id` = ?";
        $arrParam = [$_GET['showId']];
        $stmt=$pdo->prepare($sql);
        $stmt->execute($arrParam);
       
        if($stmt->rowCount() > 0){
            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
            $showUrl = './images/'.$arr['Img'];
        }

?>

<!doctype html>
<html lang="zh">

<head>
    <title>Bootstrap-2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .dontShow{
            filter:grayscale(.8);
        }
        a {
            text-decoration: none;
        }


        .list-unstyled a {
            color: white;
        }


        .h4 {
            text-decoration: underline;
        }

        .backImg{
            width: 100%;
            height: 100%;
            object-fit:cover;
            
        }
        .imgA{
            width: 100%;
            height: 100%;

        }
        .main {
            height:500px;
            padding:0px;

        }

        .mainText {
            background: rgba(255, 255, 255, 0.329);
            max-width: 60%;
            margin: auto;
            border-radius: 30px;
        }


        .card>img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;

        }

        @media screen and (max-width:768px) {
            .main {
                height: 300px;
            }

            .mainText {
                max-width: 80%;
            }
        }
    </style>
    
</head>

<body>
    <!-- nav -->
    <div class="bg-dark">
        <div class="container">
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="d-flex justify-content-between">
                        <div class="p-2">
                            <h5 class="text-white h4">Collapsed content</h5>
                            <span class="text-muted">Add some information about the album below, the author, or any
                                other background context. Make it a few sentences long so folks can pick up some
                                informative tidbits. Then, link them off to some social networking sites or contact
                                information.</span>
                        </div>
                        <div class="p-2">
                            <h4 class="text-white h4">Contact</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Follow on Twitter</a></li>
                                <li><a href="">Follow on Twitter</a></li>
                                <li><a href="">Follow on Twitter</a></li>
                            </ul>
                        </div>
                        <div class="p-2">
                            <h4 class="text-white h4">About</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Team</a></li>
                                <li><a href="">Locations</a></li>
                                <li><a href="">Privacy</a></li>
                                <li><a href="">Terms</a></li>
                            </ul>
                        </div>
                        <div class="p-2">
                            <h4 class="text-white h4">Resources</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Resource</a></li>
                                <li><a href="">Resource name</a></li>
                                <li><a href="">Another resource</a></li>
                                <li><a href="">Final resource</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-dark">
                    <span href="" class="navbar-text">Home</span>
                    <a href="./setting.php" class="navbar-brand text-white">返回</a>
                    <span class="navbar-toggler"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
    </div>
    <!-- main -->
    <div class="main container-fluid d-flex align-items-center">
        <a href="./index.php" class="imgA"><img src="<?php echo $showUrl;?>" class="backImg"></a>
        <!-- 頭版上的字 -->
        <!-- <div class="mainText text-center p-4">
            <h1>Album example</h1>
            <p>Something short and leading about the collection below—its contents, the creator, etc. Make it short
                and
                sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <button class="btn btn-primary mr-1">Main call action</button>
            <button class="btn btn-dark">Secondary action</button>


        </div> -->
    </div>
    <!-- card -->
    <div class="dontShow">
        <div class="bg-light">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2015/04/19/08/32/marguerite-729510_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2016/07/21/20/56/anemone-1533515_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2016/08/03/14/24/roses-1566792_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2016/07/10/09/41/sage-1507499_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2017/05/08/13/15/spring-bird-2295436_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2014/02/27/18/35/daisies-276112_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2017/04/23/20/36/pink-2254970_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2013/05/11/20/44/spring-flowers-110671_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card">
                            <img src="https://cdn.pixabay.com/photo/2014/02/03/08/04/forget-me-not-257176_1280.jpg" alt="">
                            <div class="card-body">
                                <p>This is a wider card with supporting text below as a natural lead-in to additional
                                    content.
                                    This
                                    content is a little bit longer.</p>
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-dark">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-dark">Edit</button>
                                    </div>
                                    <span class="text-muted">9 mins</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container py-3 footer d-flex justify-content-between">
        <div>
            <p class="">Album example is © Bootstrap, but please download and customize it for
                yourself!</p>
            <p>New to Bootstrap? Visit the homepage or read our getting started guide.</p>
        </div>
        <p><a href="">back to top</a></p>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>