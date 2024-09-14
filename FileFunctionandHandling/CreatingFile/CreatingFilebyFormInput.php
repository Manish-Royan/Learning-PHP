<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Creator</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Enter file name" name="fileName" required>
        <br><br>
        <textarea name="content" required></textarea>
        <br><br>
        <button type="submit" name="btn">Create file</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
        $file_name = $_POST['fileName'];
        $content = $_POST['content'];

        // Validate file name
        if (preg_match('/^[a-zA-Z0-9_\-\.]+$/', $file_name)) {
            $file_path = "files/" . $file_name;

            // Check if directory exists, create if it doesn't
            if (!is_dir('files')) {
                mkdir('files', 0755, true);
            }

            // Check if file already exists
            if (file_exists($file_path)) {
                echo "<p>Error: File already exists.</p>";
            } else {
                // Try to create and write to the file
                if (file_put_contents($file_path, $content) !== false) {
                    echo "<p>File created successfully.</p>";
                } else {
                    echo "<p>Error: Unable to create file.</p>";
                }
            }
        } else {
            echo "<p>Error: Invalid file name. Use only letters, numbers, underscore, hyphen, and period.</p>";
        }
    }
    ?>
</body>
</html>