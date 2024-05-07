    <?php
$link = mysqli_connect("localhost", 'root', '','res');
mysqli_set_charset($link, "utf8");
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>
<html>
<head>
    <meta charset="utf-8">
    <title>놀이공원 예약</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }
       
        table 
        {
            border-collapse: collapse;
            width: 100%;
        }
        th, td 
        {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th 
        {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="input-wrap">
        <form action="reservation.php" method="POST" accept-charset="UTF-8">
            <label for="name">고객성명</label>
            <input type="text" name="name" id="name" maxlength="20" placeholder="이름을 입력하세요." />
            <input type="submit" name = "submit" value = "합계" style="float:right">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>구분</th>
                        <th colspan = '2'>어린이</th>
                        <th colspan = '2'>어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>입장권</td>
                        <td>7,000</td>
                        <td><select name="childticket">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>10,000</td>
                        <td><select name="adultticket">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장</td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BIG3</td>
                        <td>21,000</td>
                        <td><select name="childBIG3">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>26,000</td>
                        <td><select name="adultBIG3">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장+놀이3종</td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>자유이용권</td>
                        <td>21,000</td>
                        <td><select name="childfree">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>26,000</td>
                        <td><select name="adultfree">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장+놀이자유</td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>연간이용권</td>
                        <td>70,000</td>
                        <td><select name="childyear">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>90,000</td>
                        <td><select name="adultyear">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            </select>
                        </td>
                        <td>입장+자유이용권</td>

                    </tr>
                
                </tbody>
            </table>
       </form>
    


        
        <table>
        
            <thead>
                
            </thead>
            <tbody>
            <?php
                    $link = mysqli_connect("localhost", 'root', '', 'res');
                    mysqli_set_charset($link, "utf8");
                    $_GET['order'] = isset($order) ? $_GET['order'] : null;
                    

                    if (isset($_POST['submit']) && $_POST['submit'] == "합계" ) 
                    {
                        $id = date('Y-m-d H:i:s');
                        $name = mysqli_real_escape_string($link, $_POST['name']);
                        $childticket = $_POST['childticket'];
                        $adultticket = $_POST['adultticket'];
                        $childBIG3 = $_POST['childBIG3'];
                        $adultBIG3 = $_POST['adultBIG3'];
                        $childfree = $_POST['childfree'];
                        $adultfree = $_POST['adultfree'];
                        $childyear = $_POST['childyear'];
                        $adultyear = $_POST['adultyear'];
                        $total = ($childticket * 7000) + ($adultticket * 10000) + ($childBIG3 * 21000) + ($adultBIG3 * 26000) + ($childfree * 21000) + ($adultfree * 26000) + ($childyear * 70000) + ($adultyear * 90000);
                        $sql = "INSERT INTO users (`id`, `name`, `childticket`, `adultticket`, `childBIG3`, `adultBIG3`, `childfree`, `adultfree`, `childyear`, `adultyear`, `total`)
                                VALUES ('$id', '$name', '$childticket', '$adultticket', '$childBIG3', '$adultBIG3', '$childfree', '$adultfree', '$childyear', '$adultyear', '$total')";
                        
                        // 쿼리 실행
                        $result_insert = mysqli_query($link, $sql);

                        if (!$result_insert) 
                        {
                            die("쿼리 실행 오류: " . mysqli_error($link));
                        }
                    }

                    // 데이터베이스에서 사용자 정보를 가져옴
                    $query = "SELECT * FROM users";
                    $result_select = mysqli_query($link, $query);

                    if (!$result_select) 
                    {
                        die("쿼리 실행 오류: " . mysqli_error($link));
                    }
                ?>
            </tbody>
            <table>
        <thead>
            <tr>
                <th rowspan = 2>No</th>
                <th rowspan = 2>고객 성명</th>
                <th colspan = 2>입장권</th>
                <th colspan = 2>BIG3</th>
                <th colspan = 2>자유이용권</th>
                <th colspan = 2>연간이용권</th>
                <th rowspan = 2>합계</th>
            </tr>
            <tr>
            <th>어린이</th>
            <th>어른</th>
            <th>어린이</th>
            <th>어른</th>
            <th>어린이</th>
            <th>어른</th>
            <th>어린이</th>
            <th>어른</th>
            </tr>


        </thead>
        <tbody>
            <?php

                while ($row = mysqli_fetch_assoc($result_select)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['childticket'] . "</td>";
                    echo "<td>" . $row['adultticket'] . "</td>";
                    echo "<td>" . $row['childBIG3'] . "</td>";
                    echo "<td>" . $row['adultBIG3'] . "</td>";
                    echo "<td>" . $row['childfree'] . "</td>";
                    echo "<td>" . $row['adultfree'] . "</td>";
                    echo "<td>" . $row['childyear'] . "</td>";
                    echo "<td>" . $row['adultyear'] . "</td>";
                    echo "<td>" . $row['total'] . "</td>";
                    echo "</tr>";
                }
            ?>

            </tbody>

        </table>
    </div>
    </body>
    </html>