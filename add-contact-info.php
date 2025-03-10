<?php 
    include('update-contact-info.php');
    include('header.php');
?>
    <div class="container">
        <?php
            if (isset($_SESSION['message'])) {
                echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert" id="danger-alert">
                    ' . $_SESSION['message'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                unset($_SESSION['message']);
            }
        ?>
        <div class="form-box">
            <a href="index.php" class="btn btn-success add-contact-btn" style="float:right;">Back</a>
            <h2><?= !isset($contact['id']) ? 'Add' : 'Edit'; ?> New Contact</h2>
            <form method="POST" name="contact_form" action="<?php echo !isset($contact['name']) ? 'store-contacts.php' : 'update-contact-info.php'; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($contact['name']) ? $contact['name'] : ''; ?>" placeholder="Please enter name" required>
                </div>
                <input type="hidden" name="id" id="hidden_id" value="<?php echo isset($contact['id']) ? $contact['id'] : ''; ?>" />
                <input type="hidden" id="country-code" name="country_code" value="<?php echo isset($contact['country_code']) ? $contact['country_code'] : ''; ?>">
                <div class="form-group">
                    <label for="phone">Phone</label><br>
                    <input type="number" class="form-control" id="phone" name="mobile" value="<?php echo isset($contact['mobile']) ? $contact['mobile'] : ''; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary"><?= !isset($contact['id']) ? 'Add' : 'Edit'; ?> Contact</button>
            </form>
        </div>
    </div>
<?php include('footer.php'); ?>
