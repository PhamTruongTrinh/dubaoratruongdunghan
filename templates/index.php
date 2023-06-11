<?php
    header("Location: model.py");
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="number/html; charset=utf-8" />
    <title>Dự báo khả năng ra trường đúng hạn của sinh viên năm 4</title>
    <style>
        .head {
            width: 98%;
            height: 11%;
            background-color: #070186;
            padding: 1%;
            color: #FFFFFF;
        }
        
        .input {
            width: 26.3%;
            float: left;
            margin-left: 5%;
            margin-top: 2%;
            border: 2px solid rgb(0, 17, 255);
            border-radius: 10px;
        }
        
        .input>p>span {
            margin-left: 10px;
        }
        
        .input>p>input {
            float: right;
            margin-right: 10px;
            margin-top: -5px;
            height: 22px;
            width: 28%;
            font-size: 17px;
            font-weight: bold;
        }
        
        .input>p {
            font-weight: bolder;
            font-size: 20px;
            color: #000000;
        }
        
        .ket_qua {
            width: 900px;
            font-family: sans-serif;
            font-size: x-large;
            color: #ff0000;
            font-weight: bolder;
            margin-left: 229px;
            margin-top: 485px;
        }
        
        .btn {
            width: 264px;
            float: right;
            margin-right: 560px;
            margin-top: 28px;
        }
        
        .btn:hover button {
            background-color: #291FFA;
            color: white;
        }
        
        html,
        body {
            margin: 0;
            height: 100%;
        }
    </style>
</head>

<body>
    <div style="background-color: #FFFFFF; height: 100%;">
        <div class="head" ; align="center">
            <h1>DỰ BÁO KHẢ NĂNG RA TRƯỜNG ĐÚNG HẠN CỦA SINH VIÊN NĂM 4</h1>
        </div>
        <!-- Main Input For Receiving Query to our ML -->
        <form action="{{url_for('predict')}}" method="post" style="margin-top: 0%;">
            <div class="input">
                <p align="center">HỌC KỲ I</p>
                <p><span>Số tín chỉ đạt</span><input type="number" min="0" max="25" name="tcd1" required="required" ;>
                </p>
                <p><span>Số tín chỉ rớt</span><input type="number" name="tcr1" required="required" ;></p>
                <p><span>Điểm trung bình hệ 10</span><input type="number" min="0" max="10" step="0.01" name="dtb1" required="required" ;></p>
            </div>

            <div class="input">
                <p align="center">HỌC KỲ III</p>
                <p><span>Số tín chỉ đạt</span><input type="number" min="0" max="25" name="tcd3" required="required" ;>
                </p>
                <p><span>Số tín chỉ rớt</span><input type="number" name="tcr3" required="required" ;></p>
                <p><span>Điểm trung bình hệ 10</span><input type="number" min="0" max="10" step="0.01" name="dtb3" required="required" ;></p>
            </div>
            <div class="input">
                <p align="center">HỌC KỲ V</p>
                <p><span>Số tín chỉ đạt</span><input type="number" min="0" max="25" name="tcd5" required="required" ;></p>
                <p><span>Số tín chỉ rớt</span><input type="number" name="tcr5" required="required" ;></p>
                <p><span>Điểm trung bình hệ 10</span><input type="number" min="0" max="10" step="0.01" name="dtb5" required="required" ;></p>
            </div>

            <div class="input">
                <p align="center">HỌC KỲ II</p>
                <p><span>Số tín chỉ đạt</span><input type="number" min="0" max="25" name="tcd2" required="required" ;>
                </p>
                <p><span>Số tín chỉ rớt</span><input type="number" name="tcr2" required="required" ;></p>
                <p><span>Điểm trung bình hệ 10</span><input type="number" min="0" max="10" step="0.01" name="dtb2" required="required" ;></p>
            </div>
            <div class="input">
                <p align="center">HỌC KỲ IV</p>
                <p><span>Số tín chỉ đạt</span><input type="number" min="0" max="25" name="tcd4" required="required" ;></p>
                <p><span>Số tín chỉ rớt</span><input type="number" name="tcr4" required="required" ;></p>
                <p><span>Điểm trung bình hệ 10</span><input type="number" min="0" max="10" step="0.01" name="dtb4" required="required" ;></p>

            </div>
            <div class="input">
                <p align="center">HỌC KỲ VI</p>
                <p><span>Số tín chỉ đạt</span><input type="number" min="0" max="25" name="tcd6" required="required" ;></p>
                <p><span>Số tín chỉ rớt</span><input type="number" name="tcr6" required="required" ;></p>
                <p><span>Điểm trung bình hệ 10</span><input type="number" min="0" max="10" step="0.01" name="dtb6" required="required" ;></p>

            </div>
            <div class="btn">
                <button style="height: 36px; width: 264px;  font-weight: bolder; font-size: 17px" type="submit">DỰ BÁO</button>
            </div>
        </form>
        <br>
        <br>
        <div class="ket_qua" align="center">
            {{ prediction_text }}
        </div>
    </div>
</body>

</html>