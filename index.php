<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Form</title>
</head>
<body>
    
    <main class="main">
        <!-- 
            l action hya lika tsift les donnees li dekhelna fl form l page.php li feha script
        -->
        <form action="script.php" method="post">
            <h1>Pet's Form</h1>

            <input type="text" name="firstname" placeholder="Enter your firstname ..." require> <br>
            <input type="text" name="lastname" placeholder="Enter your lastname ..." require> <br>
            <select name="pets" require>
                <option value="none">none</option>
                <option value="dog">dog</option>
                <option value="cat">cat</option>
                <option value="rat">rat</option>
            </select> <br>
            <button type="submit">Submit</button>
        </form>
    </main>

</body>
</html>