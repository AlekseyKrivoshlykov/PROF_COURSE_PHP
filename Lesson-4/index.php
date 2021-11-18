<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>index2</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  type="text/javascript"></script>
     
    <script>
        $(document).ready(function(){
         
            $('#show_more').click(function(){
        var btn_more = $(this);
        var count_show = parseInt($(this).attr('count_show'));
        var count_add  = $(this).attr('count_add');
        btn_more.val('Подождите...');
                 
        $.ajax({
                    url: "server.php", 
                    type: "post", 
                    dataType: "json",
                    data: { 
                        "count_show":   count_show,
                        "count_add":    count_add
                    },
                    success: function(data){
            if(data.result == "success"){
                $('#content').append(data.html);
                    btn_more.val('Показать еще');
                    btn_more.attr('count_show', (count_show+2));
            }else{
                btn_more.val('Больше нечего показывать');
            }
                    }
                });
            });
             
        });     
    </script>
     
</head>
<body>
    <div id="content">
        <?php
            require_once('server.php');
             
            $sql = mysqli_query($connect, "SELECT * FROM product LIMIT 2");
            $arrData = [];
            while($result = mysqli_fetch_array($sql)){
                $arrData[] = $result;
            }           
            foreach($arrData as $oneElement): 
        ?>
        <div>
            <b><?=$oneElement['title'];?></b>
            <p><?=$oneElement['description'];?></p>
        </div>
        <?php endforeach; ?>
    </div>
     
    <input id="show_more" count_show="2" count_add="2" type="button" value="Показать еще" />
</body>
</html>