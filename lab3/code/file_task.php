<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kitty cat</title>
</head>
<body>
<div id="form">
    <form action="saving.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <select name="category" required>
            <?php

            $categories = array_filter(glob(__DIR__ . "/cats/*"), 'is_dir');
            foreach ($categories as $category) {
                $name = basename($category);
                echo "<option value=\"$name\">$name</option>";
            }
            ?>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="3" name="description"></textarea>

        <input type="submit" value="save">
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php

        $files = glob(__DIR__ . "/cats/*/*.txt");
        foreach ($files as $file) {

            $data = file_get_contents($file);
            $category = basename(dirname($file));
            $title = basename($file, ".txt");

            $data = explode("\n", $data);
            $email = $data[0];
            $desc = $data[1];
            echo "<tr>
                    <td>$email</td><td>$category</td>
                    <td>$title</td><td>$desc</td>
                    </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
