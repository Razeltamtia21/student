<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./asset/data_siswa.php"method="post">
        <label for="name">Name:</label>
        <select name="name" id="name">
            <option value="Monkey D. Luffy">Monkey D. Luffy</option>
            <option value="Lelouch Lamperouge">Lelouch Lamperouge</option>
            <option value="Razel Michelle Dude">Razel Michelle Dude </option>
        </select>
        <br><br>
        <label for="class">Class:</label>
        <select name="class" id="class">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <br><br>
        <label for="department">Department:</label>
        <select name="department" id="department">
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Teknik Jaringan Komputer">Teknik Jaringan Komputer</option>
            <option value="Rekayasan Perangkat Lunak">Rekayasan Perangkat Lunak</option>
        </select>
        <br><br>
        <button name="submit">Submit</button>
    </form>
</body>
</html>