<?php
include('db.php');

$sql = "SELECT * FROM contacts ORDER BY id DESC";
$result = $conn->query($sql);
include('header.php');
?>
<div class="container">
    <div class="table-container">
        <?php
            if (isset($_SESSION['message'])) {
                echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert" id="success-alert">
                    ' . $_SESSION['message'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                unset($_SESSION['message']);
            }
        ?>
        <a href="add-contact-info.php" class="btn btn-success add-contact-btn">Add Contact</a>
        <a href="#" class="btn btn-success add-contact-btn" data-toggle="modal" data-target="#uploadModal">Bulk Contact Upload</a>
        <h2 class="text-center mb-4">Contact List</h2>
        <table class="table table-bordered">
            <thead class="table-header">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $i . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . '('. $row['country_code']. ') ' .$row['mobile'] . '</td>';
                            echo '<td>';
                            echo '<a href="add-contact-info.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a> ';
                            echo '<a href="delete-contact-info.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirmDelete();">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                            $i++;
                        }
                    } else {
                        echo '<tr><td><p class="text-center">No contacts found!</p></td></tr>';
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Bulk Contacts (XML)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="uploadForm" method="POST" name="contact_form" action="store-contacts.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fileInput">Select XML File</label>
                        <input type="file" name="xml_file" class="form-control-file" id="fileInput" accept=".xml" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>