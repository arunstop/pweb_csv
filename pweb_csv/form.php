<?php
if (isset($_POST["Import"])) {

    $filename = $_FILES["file"]["tmp_name"];


    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        $no = 1; ?>
        <form  action="action.php" method="post" name="form">
            <fieldset>
                <legend>Result Form</legend>
                <?php while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
                    ?>

                    <div >
                        <label  for="filebutton">Data #<?php echo ($no >= 100 ? ''.$no : ($no >=10 ? '0'.$no : '00'.$no)) ?></label>
                        <input type="text" name="nrp<?php echo $no ?>" value="<?php echo $data[0] ?>">&nbsp;
                        <input type="text" name="name<?php echo $no ?>" value="<?php echo $data[1] ?>">&nbsp;
                        <input type="radio" name="gender<?php echo $no ?>"value="M" <?php echo ($data[2] == "M" ? 'checked' : '') ?>> Male &nbsp;
                        <input type="radio" name="gender<?php echo $no ?>"value="F" <?php echo ($data[2] == "F" ? 'checked' : '') ?>> Female &nbsp;&nbsp;
                        <select name="major<?php echo $no ?>">
                            <option value="TI" <?php echo ($data[3] == "TI" ? 'selected' : '') ?> >TI</option>
                            <option value="MI" <?php echo ($data[3] == "MI" ? 'selected' : '') ?> >MI</option>
                            <option value="SI" <?php echo ($data[3] == "SI" ? 'selected' : '') ?> >SI</option>
                            <option value="DKV" <?php echo ($data[3] == "DKV" ? 'selected' : '') ?> >DKV</option>
                        </select>&nbsp;
                        <input type="text" name="address<?php echo $no ?>" value="<?php echo $data[4] ?>">&nbsp;
                        <input type="text" name="phone<?php echo $no ?>" value="0<?php echo $data[5] ?>">
                    </div>
                    <?php
                    $no++;
                }

                fclose($file); ?>

                <div>
                    &nbsp;
                    <input type="hidden" name="no" value="<?php echo $no ?>">
                </div>
                <div>
                    <label for="singlebutton">Import data to database</label>
                    <div>
                        <button type="submit" id="submit" name="Import" data-loading-text="Loading...">Import
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
        <?php
    }
}
?>