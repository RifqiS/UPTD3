<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Settings Absent</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <form action="" method="post">
                <table class="table " width="100%" cellspacing="0">
                    <tr>
                        <td>Jam Masuk</td>
                        <td><input class="form-control" type="time" name="in" id="in" value="<?= $dat4['in'];?>"></td>
                    </tr>
                    <tr>
                        <td>Jam Keluar</td>
                        <td><input class="form-control" type="time" name="out" id="out" value="<?= $dat4['out'];?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-primary" type="submit" name="submit" id="submit">Submit</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>