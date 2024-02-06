<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kontak</title>
    <style>
        .table table-hover table-bordered {
            width: 50%;
            min-height: 50vh;
            background-color: linear-gradient(135deg, #0dcaf0, #0d6efd);
            padding: 50px;
        }
    </style>
      <?php
    $conn = mysqli_connect("localhost", "root", "", "oopdb");
    if ($conn === false) {
        die("Error Connection" . mysqli_connect_error());
    }
    $sql = "SELECT * FROM kontak";
    $result = $conn->query($sql);
    ?>
</head>
<body>

    <h3> Manajemen Kontak </h3> <br>
    <form>
    <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama  </th>
                <th> Email </th>
                <th> Nomor Telepon </th>
                <th> control </th>
              </tr>
</thead>
            <tbody>
            <?php
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tbody>
                        <tr>
                            <?php $rowID = $row["id"] ?>
                            <td>
                                <?php echo $i; ?>
                            </td>
                            <td>
                                <?php echo $row['nama']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['no_telepon']; ?>
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter<?php echo $row['id'] ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModalDelete<?php echo $row['id'] ?>">Delete</button>
                                </div>
                            </td>
                </tr>
                    </tbody>
                    <Modal Edit>
                    <div class="modal fade" id="exampleModalCenter<?php echo $row['id'] ?>" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalCenterTitle<?php echo $row['id'] ?>"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Postingan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="update_form.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="id" name="id"
                                                value="<?php echo $row['id']; ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label for="judul" class="col-form-label">Judul:</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                value="<?php echo $row['judul']; ?>">
                                        </div>
                                <div class="form-group">
                                            <label for="kategori" class="col-form-label">Kategori:</label>
                                            <select class="form-select form-select-sm" aria-label="Small select example"
                                                name="kategori">
                                                <option value="">Select Kategori</option>
                                                <?php
                                                // use a while loop to fetch data 
                                                // from the $all_categories variable 
                                                // and individually display as an option
                                                while (
                                                    $category2 = mysqli_fetch_array(
                                                        $result5,
                                                        MYSQLI_ASSOC
                                                    )
                                                ):
                                                    ;
                                                    ?>
                                                    <option value="<?php echo $category2["category_id"]; ?>">
                                                        <?php echo $category2["category_name"]; ?>
                                                    </option>
                                                    <?php
                                                endwhile;
                                                // While loop must be terminated
                                                ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label for="konten" class="col-form-label">Konten:</label>
                                            <textarea class="form-control" id="konten"
                                                name="konten"><?php echo $row['content']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="konten" class="col-form-label">Gambar</label>
                                            <textarea class="form-control" id="gambar"
                                                name="konten"><?php echo $row['image']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </div>
                              
                                    </form>
                                </div> 
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <Modal Delete>
                    <div class="modal fade" id="exampleModalDelete<?php echo $row['id'] ?>" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalDeleteTitle<?php echo $row['id'] ?>"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Postingan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="delete_form.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="id" name="id"
                                                value="<?php echo $row['id']; ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label for="konten" class="col-form-label">Yakin delete konten ini?</label>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++;
                }
            } ?>
        </table>
          </form>     
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>