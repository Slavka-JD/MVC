<h1>Портфолио</h1>
<p>
<table>
    выбираем Бога по душе!
    <tr>
        <td>Ваш возраст</td>
        <td>Бог</td>
        <td>Описание</td>
    </tr>
    <?php

    foreach ($data as $row) {
        echo '<tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr>';
    }

    ?>
</table>
</p>