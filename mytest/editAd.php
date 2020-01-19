<?php
require_once('./checkSession.php');
require_once('./db.inc.php');

?>

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

    <!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <style>
        .show{
        width:500px;
        height:100%;
        margin-left:50px;
        }
        #imgShow{
            width:100%;
            height:100%;
            object-fit:cover;
        }
    </style>
     <!-- 引入 jQuery 的函式庫 -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>



$(document).ready(function(){

    //ajax 傳送上傳的檔案方法
    $(document).on('click', '.submit', function() {
        let fileData = $('#filed').prop('files')[0];//取得上傳檔案的屬性
        let Name = $('input[name=Name]').val();
        let Id = $('input[name=Id]').val();
        // console.log(fileData);
        let formData = new FormData();//建構new FormData()
        formData.append('Img',fileData);//把物件加到file後面
        formData.append('Name',Name);//加入其他資訊
        formData.append('Id',Id);
    
        

        $.ajax({
            type: 'POST',
            url: './updateEditAd.php',
            // cache: false,
            contentType: false, //這兩個都必須要加
            processData: false,
            //data只能指定單一物件 如果要傳送其他的資料需要用append()加到裡面
            data: formData, 
            // {
            //         Name:$('input[name=Name]').val(),
            //         Id:$('input[name=Id]').val(),
            //         Img:$('input[name=Img]').val()
            // }
            
        })
        .done(function(data) {
            if(data){
                $(document).on('click', '.confirm', function() { 
                    setTimeout("location='./setting.php'",100);
                })
                swal("修改成功", "", "success",);
                
       
            }else{
                $(document).on('click', '.confirm', function() { 
                    setTimeout("location='./setting.php'",100);
                })
                swal("修改失敗", "", "error",);
              
            };
        })
        .fail(function(){
            alert('傳送失敗');
        })

    })


})

</script>

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
                            <div class="ibox-title">
                                <h5>詳細資料</h5>
                            </div>
                            <div class="ibox-content d-flex justify-content-around">
                                
                                        <?php 

                                        $sql = 'SELECT *
                                        FROM `ad` 
                                        WHERE `Id` = ?';

                                        $arrParam = [$_GET['editId'],
                                                ];

                                        // echo '<pre>';
                                        // print_r($arrParam);
                                        // echo '</pre>';

                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute($arrParam);

                                        if( $stmt->rowCount() > 0){
                                            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
                                    ?>
                                <div class="">    
                                     
                                    <input type="hidden" name="Id" value="<?php echo $arr['Id']; ?>">

                                    <label>圖片名稱
                                        <input type="text" name="Name" value="<?php echo $arr['Name']; ?>" maxlength="20" />
                                    </label>
                                    <br>
                                    <br>
                                    
                                    <label>上傳檔案
                                        <input type="file" name="Img" id="filed"/>
                                    </label> 
                                    
                                    <?php } ?>
                                    
                                    <input type="hidden" name="editId" value="<?php echo (int)$_GET['editId']; ?>">
                               
                                    <br>
                                    <br>
                                    <button class="submit btn btn-w-m btn-success">修改</button>
                                </div>
                                <div class="show">
                                        <img id="imgShow" src="./images/<?php echo $arr['Img'] ?>">
                                </div>
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

     <!-- Sweet alert -->
     <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    <script>
        
    $('#filed').change(function(){
    //獲取input file的files檔案陣列;
    //$('#filed')獲取的是jQuery物件，.get(0)轉為原生物件;
    //這邊預設只能選一個，但是存放形式仍然是陣列，所以取第一個元素使用[0];
        var file = $('#filed').get(0).files[0];
        //建立用來讀取此檔案的物件
        var reader = new FileReader();
        //使用該物件讀取file檔案
        reader.readAsDataURL(file);
        //讀取檔案成功後執行的方法函式
        reader.onload=function(e){
        //讀取成功後返回的一個引數e，整個的一個進度事件
        //選擇所要顯示圖片的img，要賦值給img的src就是e中target下result裡面
        //的base64編碼格式的地址
        $('#imgShow').get(0).src = e.target.result;
        // console.log(e.target.result);
        }
    })

</script>


</body>

</html>