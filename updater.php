<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
<?php
ob_start();
if (isset($_POST['input'])) {
    $hub = mysqli_connect('localhost', 'root', 'root', 'xxx');
    $id = $_GET['id'];
    $change = $_POST['change'];

    mysqli_query($hub, "UPDATE xxx SET kepemilikan = '$change' WHERE id = '$id' ");
header('Location:index.php');
    ob_flush();
}
?>
<script>
    window.addEventListener('load', function() {
        var button = document.getElementById('myButton');
        button.click();
    });
</script>
<button type="button" id="myButton" data-bs-toggle="modal" data-bs-target="#mods">Updating...</button>
<div class="modal fade" id="mods" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method='post'>
                <div class="modal-body">
                    <input type="text" class="form-control" name="change" value="<?= $_GET['isi'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="submit" name="input" class="btn btn-primary">Save changes</button>
                </div>

            </form>

        </div>
    </div>
</div>