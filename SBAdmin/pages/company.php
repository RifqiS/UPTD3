<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Company Profile</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <form action="" method="post">
                <table class="table " width="100%" cellspacing="0">
                    <tr>
                        <td>Username</td>
                        <td><input class="form-control" type="text" name="username" id="username" value="<?= $data['username'];?>"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input class="form-control" type="password" name="password" id="password" value="<?= $data['password'];?>"></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td><input class="form-control" type="text" name="title" id="title" value="<?= $data['title'];?>"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input class="form-control" type="text" name="nama" id="nama" value="<?= $data['name'];?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input class="form-control" type="email" name="email" id="email" value="<?= $data['email'];?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="10"><?= $data['address'];?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Logo1</td>
                        <td><input class="form-control" type="file" name="logo1" id="logo1" value="<?= $data['logo1'];?>"></td>
                    </tr>
                    <tr>
                        <td>Logo2</td>
                        <td><input class="form-control" type="file" name="logo2" id="logo2" value="<?= $data['logo2'];?>"></td>
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