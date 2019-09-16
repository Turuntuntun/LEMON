<?php
require_once('/../../settings/init.php');

$query = "SELECT * FROM delay WHERE code = 'prewiew'";

$result = mysqli_query($link,$query) or die (mysqli_error());
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>
<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
    <table>
        <tr>
            <th>
                <p>Таймер баннера</p>
            </th>
            <th>
                <p>Размер баннера</p>
            </th>
            <th>
                <p>Баннер</p>
            </th>
        </tr>
        <tr>
            <td>
                <form action = "" method = "post" name = 'delay'>

                    <select id = 'slideDelay'>
                        <?for ($i = 1; $i <= 10; $i++){?>
                            <?if ($i == $data[0]['delay']) {
                                $select = 'selected';
                            } else {
                                $select = '';
                            }
                            ?>
                            <option value="<?=$i?>" <?=$select?>><?=$i?></option>
                        <?}?>
                    </select><br>
                    <input type = "button" value="Изменить" id = 'submit'>
                </form>
            </td>
            <td>
                <form action = "" method = "post" name = 'delay'>
                    <p>Ширина</p>
                    <input name = 'width'><br>
                    <p>Высота</p>
                    <input name = 'heihgt'><br>
                    <input type = "button" value="Изменить" id = 'submit'>
                </form>
            </td>
            <td>
                <form action = "" method = "post" name = 'delay'>

                    <input type = "button" value="Изменить" id = 'submit'>
                </form>
            </td>
        </tr>
    </table>

    <div id = 'result'></div>
    <script>
        $(document).ready(function(){

            $('#submit').on('click',function(){
                $.ajax({
                    type: "POST",
                    url: "/ME/requests/slider/delay.php",
                    data: "slideDelay="+$("#slideDelay").val(),
                    success: function(html){
                        $("#result").html('успешно');
                    }
                });
                return false;
            });

        });
    </script>
</body>
</html>
