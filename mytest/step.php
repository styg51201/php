<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Search Page</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- step -->
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <style>
    .steps a{
        font-size:25px;
    }

    .wizard > .content > .body{
        position: relative;
    }
    </style>
</head>

<body>

    <div id="wrapper">
        <!-- 左側選單 -->
        <?php require_once('./left-nav.php'); ?>
        <!-- Body -->
        <div id="page-wrapper" class="gray-bg">
            <!-- 上側選單 -->
        <?php require_once('./top-nav.php'); ?>
            <!-- 標題 -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>新增廣告</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            Extra Pages
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> Search Page</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- 內文 -->
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-content">
                                <form name="myForm" method="post" action="./formChk.php">
                                    <div id="example-basic">
                                        <h1>設定廣告活動</h1>
                                        <section>
                                            <h3>選擇廣告活動目標</h3>
                                            <div style="margin-left: 23px;">
                                                <label>
                                                    <input type="radio" class="form-check-input" name="target" value="提升品牌知名度"
                                                        checked>了解我的品牌（提升品牌知名度）
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="radio" class="form-check-input" name="target" value="提升交易量"
                                                        >造訪我的網頁（提升交易量）
                                                </label>

                                            </div>
                                            <h3>版面位置</h3>
                                            <div style="margin-left: 23px;">
                                                <label>
                                                    <input type="radio" class="form-check-input" name="place" value="商品首頁頭版"
                                                        checked>商品首頁頭版
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="radio" class="form-check-input" name="place"
                                                        value="精選商品頭版">精選商品頭版
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="radio" class="form-check-input" name="place" value="商品首頁頭版"
                                                        >關鍵字廣告
                                                </label>
                                            </div>
                                        </section>
                                        <h1>設定廣告投放對象</h1>
                                        <section>
                                            <p>Wonderful transition effects.</p>
                                        </section>
                                        <h1>上傳圖檔</h1>
                                        <section>
                                            <p>The next and previous buttons help you to navigate through your content.</p>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->

    </div>
    </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Steps -->
    <script src="js/plugins/steps/jquery.steps.min.js"></script>

    <script>
        $("#example-basic").steps({
            headerTag: "h1",
            bodyTag: "section",
            transitionEffect: "fade",
            autoFocus: true
        });
    </script>

</body>

</html>