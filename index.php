<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Form data</title>

    <style>
        body {
            background-color: #cbf317;
            font-family: Arial, Helvetica, sans-serif;

        }

        .input[type=text],
        .select,
        .textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid rgb(128, 156, 2);
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        .input[type=submit] {
            background-color: #04AA6D;
            color: rgb(185, 73, 73);
            padding: 12px 20px;
            border: 2px;
            border-radius: 4px;
            cursor: pointer;
        }

        .input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #ECECEC;
            padding: 50px;
        }

        .thumbnail01 {
            padding: 22px 70px;
            color: rgb(53, 52, 52);
            color: rgb(39, 39, 39);
            border: 3px;

        }
    </style>

</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Form Data </title>

</head>





<body>

    <div class="container">
        <form action="">
            <div class="thumbnail01">
                <div class="form-group">



                    <h1>ข้อมูลส่วนตัว</h1>
                    <div class=" form-group">
                        <label for="">เลขบัตรประชาชน*</label>
                        <input type="text" required class="form-control" id="IDcardnumber" value="เลขบัตรประชาชน">
                    </div>
                    <br>
                    <div class="col-sm-2 control-label">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">เพศ</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-sm-2 control-label">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect02">คำนำหน้า</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect02" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="1">นาย</option>
                                <option value="2">นาง</option>
                                <option value="3">นางสาว</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-row">
                        <label for="text">ชื่อ*</label>
                        <input type="text" required class="form-control" id="fname" placeholder="กรุณาใส่ชื่อ">
                    </div>
                    <br>

                    <div class="form-row">
                        <label for="text">นามสกุล*</label>
                        <input type="text" required class="form-control" id="lname" placeholder="กรุณาใส่นามสกุล">
                    </div>
                    <br>

                    <div class="form-row">
                        <label for="branch">สาขา*</label>
                        <select class="form-control" id="branch">
                            <option value="null">...</option>
                            <option value="MTA">เทคโนโลยีมัลติมีเดีย แอนิเมชั่น และเกม</option>
                            <option value="ITD">เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
                            <option value="DCM">ดิจิทัลคอนเทนต์และสื่อ</option>
                            <option value="IMI">นวัตกรรมสารสนเทศทางการแพทย์</option>
                            <option value="DCA">นิเทศศาสตร์ดิจิทัล</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-row">
                        <label for="sel1">ศาสนา</label>
                        <select class="form-control" id="religion">
                            <option value="null">...</option>
                            <option value="Buddhist">พุทธ</option>
                            <option value="Christianity">คริสตร์</option>
                            <option value="islam">อิสลาม</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-row">
                        <label for="text">บ้านเลขที่*</label>
                        <input type="text" required class="form-control" id="address" value="บ้านเลขที่">
                    </div>
                    <br>

                    <div class="form-row">
                        <label for="text">หมู่ที่*</label>
                        <input type="text" required class="form-control" id="village" value="หมู่ที่">
                    </div>
                    <br>

                    <div class="form-row">
                        <label for="text">ถนน*</label>
                        <input type="text" required class="form-control" id="road" value="ถนน">
                    </div>
                    <br>

                    <div class="form-row">
                        <label for="text">ตำบล/แขวง*</label>
                        <input type="text" required class="form-control" id="tamb" value="ตำบล/แขวง">
                    </div>


                    <div class="form-row">
                        <label for="text">อำเภอ*</label>
                        <input type="text" required class="form-control" id="fname" value="อำเภอ">
                    </div>
                    <br>

                    <div class="col-sm-2 control-label">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect03">จังหวัด</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect03" required>
                                <option selected>-เลือกข้อมูล-</option>
                                <option value="1">นครศรีธรรมราช</option>
                                <option value="2">สงขลา</option>
                                <option value="3">กระบี่</option>
                                <option value="4">ชุมพร</option>
                                <option value="5">พัทลุง</option>
                                <option value="6">สตูล</option>
                                <option value="7">สุราษฎร์ธานี</option>
                                <option value="8">พังงา</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                      <label for="text">รหัสไปรษณีย์:*</label>
                      <input type="text" required class="form-control" id="address">
                  </div>
                  <br>

                  <div class="form-row">
                    <label for="text">โทรศัพท์มือถือ:*</label>
                    <input type="text" required class="form-control" id="address">
                </div>
                <br>

                <div class="form-row">
                  <label for="text">โทรศัพท์บ้าน:*</label>
                  <input type="text" required class="form-control" id="address">
              </div>
              <br>

              <div class="col-sm-3">
                <button type="submit"  id ="ปุ่มกด"class="btn btn-primary" > ตกลง </button>
    
            </div>
              
              
                </div>
              </div>
        </form>
</body>

</html>
