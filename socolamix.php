<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Sô-cô-la</title>
    <link rel="stylesheet" href="css/cocolamix.css">
</head>
<body>
<div class="container">
    <h1>SoCoLa Mix</h1>
    <form action="" method="GET" class="chocolate-form">
        <div class="form-group">
            <label for="vitri">Vị trí:</label>
            <input type="number" id="vitri" name="vitri">
        </div>
        <div class="form-group">
            <label for="giatri">Giá trị:</label>
            <input type="text" id="giatri" name="giatri">
        </div>
        <div class="form-group">
            <label for="type">Loại:</label>
            <select id="type" name="type">
                <option value="duong">Đường</option>
                <option value="cacao">cacao</option>
            </select>
        </div>
        <input type="submit" name="capnhap" value="Cập Nhập">
    </form>
    <div class="chocolate-bar">
        <div class="chocolate-piece">
            <span class="number">1</span>
            <div class="chocolate-color">2</div>
            <div class="chocolate-color" style="height: 100%; background: #4CAF50">3</div>
            <div class="chocolate-color" style="height: 100%; background: #4CAF50">4</div>
        </div>
    </div>
</body>
</html>