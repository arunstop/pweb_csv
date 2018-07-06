<!DOCTYPE html>
<html lang="en">

<head>
<title>WEB CSV</title>
</head>

<body>
    <form action="form.php" method="post" name="upload_excel" enctype="multipart/form-data">
        <fieldset>
            <legend>Insert CSV</legend>
                <input type="file" name="file" id="file">
                    <div class="form-group">
                        <label>====================================</label>
                        <div>
                            <button data-loading-text="Please Wait..." type="submit" id="submit" name="Import">Execute</button>
                        </div>
                    </div>
        </fieldset>
    </form>
</body>

</html>