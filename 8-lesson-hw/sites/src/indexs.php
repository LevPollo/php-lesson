<?php
$userText = $_POST['text'];
//если человек не выбрал чекбокс, значит не хочит тратить на это время и ищет по всем
$userChoice = (!empty(($_POST['choice']))) ? $_POST['choice'] : [0 => 'name', 1 => 'phone', 2 => 'email', 3 => 'address', 4 => 'country', 5 => 'city'];


$file = file('peoples.csv');

$people = [];
foreach ($file as $line) {
    $people[] = str_getcsv($line);
}
//переименование массива(для удобства);
foreach ($people as &$item) {
    foreach ($item as $key => $value) {
        switch ($key) {
            case 0:
                $item['name'] = $item[$key];
                unset($item[$key]);
                break;
            case 1:
                $item['phone'] = $item[$key];
                unset($item[$key]);
                break;
            case 2:
                $item['email'] = $item[$key];
                unset($item[$key]);
                break;
            case 3:
                $item['address'] = $item[$key];
                unset($item[$key]);
                break;
            case 4:
                $item['country'] = $item[$key];
                unset($item[$key]);
                break;
            case 5:
                $item['city'] = $item[$key];
                unset($item[$key]);
                break;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Test html</title>
</head>
<body>
<div class="form-box two">
    <form action="indexs.php" method="POST">
        <p><input type="checkbox" name="strong"
                  value="strong" <?php echo (!empty($_POST['strong'])) ? 'checked' : ''; ?>>strong find</p>
        <input type="text" name="text" value="">
        <ol>
            <li><input type="checkbox" name="choice[]"
                       value="country" <?php echo (in_array('country', $userChoice)) ? 'checked' : ''; ?>> only country
            </li>
            <li><input type="checkbox" name="choice[]"
                       value="name" <?php echo (in_array('name', $userChoice)) ? 'checked' : ''; ?>>only name
            </li>
            <li><input type="checkbox" name="choice[]"
                       value="phone" <?php echo (in_array('phone', $userChoice)) ? 'checked' : ''; ?>>only phone
            </li>
            <li><input type="checkbox" name="choice[]"
                       value="city" <?php echo (in_array('city', $userChoice)) ? 'checked' : ''; ?>>only city
            </li>
            <li><input type="checkbox" name="choice[]"
                       value="address" <?php echo (in_array('address', $userChoice)) ? 'checked' : ''; ?>>only address
            </li>
        </ol>
        <input type="submit" value="Submit">
    </form>

</div>
<div class="search-results">

    <?php
    if ($_POST['text']) {
        foreach ($userChoice as $choice) {

            foreach ($people as $person) {


                if (empty(($_POST['strong']))) {
                    if (str_starts_with(mb_strtolower($person[$choice]), mb_strtolower($userText))) {
                        echo '<div class="find-result">
                        <table>
                            <tr>
                                <td>' . $person["name"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["phone"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["email"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["address"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["country"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["city"] . '</td>
                            </tr>
                        </table>
                    </div>';
                    }
                } else {
                    if ($person[$choice] == $userText) {
                        echo '<div class="find-result">
                        <table>
                            <tr>
                                <td>' . $person["name"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["phone"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["email"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["address"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["country"] . '</td>
                            </tr>
                            <tr>
                                <td>' . $person["city"] . '</td>
                            </tr>
                        </table>
                    </div>';
                    }
                }

            }
        }
    }

    ?>
</div>
</body>
</html>
