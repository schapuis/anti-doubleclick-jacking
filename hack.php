<!DOCTYPE html>
<html lang="en">
<head>
    <?php if (isset($_GET["protect"]) && $_GET["protect"]=="bexxo") { ?>
        <script src="antidoubleclick.js"></script>
        <script>
            initOverlayBlock({
                distance: 50,
                time: 3000,
                showOverlay: true,
                disableButton: false,
                overlayColor: 'rgba(100, 100, 100, 0.7)'
            });
        </script>
    <?php } ?>
</head>
<body style='font-family:"Arial", sans-serif;background-color: #a6c7d8;'>
<?php if (!isset($_GET["emailValid"])) { ?>
    <h1>Website Page to Hack</h1>
    <p>This page represents the website page to hack, for instance, to add a new administrator account.</p>
    <hr>
    <form>
        <h2>Please confirm the addition of this administrator</h2>
        <label for=“name”>New administrator : <?= $_GET["user"];?></label>
        <input type="hidden" name="emailValid" value="<?= $_GET["user"];?>">
        <br>
        <br>
        <input type="submit" value="Confirm addition Admin" style="position: fixed;top:250px;left: 400px;width: 150px;height: 30px;cursor:pointer;" />
    </form>
<?php } else { ?>
    <h1>Confirmation page - example</h1>
    <p>Congratulations, a new administrator <?= $_GET["emailValid"];?> has been added to the service</p>
<?php } ?>
</body>
</html>