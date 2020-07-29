<!-- Header -->
<?php include_once('..\app\views\includes\header.inc.php');?>
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center text-danger font-weight-normal my-3">MVC|CRUD App Using: PHP-OOP, MYSQL-PDO, Bootstrap4, AJAX, JSON, DataTable, & SweetAlert2</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mt-2 text-primary">Database Users!</h4>
                </div>
                <div class="col-md-6">
                    <button
                        id="insert-user"
                        type="button"
                        class="btn btn-success float-right m-1"
                        data-toggle="modal"
                        data-target="#new-user">
                            <i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;New User</button>
                    <a
                        href="<?php echo URL_ROOT; ?>/users/export/excel"
                        class="btn btn-primary float-right m-1" role="button">
                            <i class="fas fa-table fa-lg"></i>&nbsp;&nbsp;Export Excel Sheet</a>
                </div>
            </div>
            <hr class="my-1" />
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="table-responsive"
                        id="show-users">
                            <h3 class="text-center text-success">Loading...</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Container -->
        <!-- Modals -->
        <?php include_once('..\app\views\users\modals.php');?>
<!-- Footer -->
<?php include_once('..\app\views\includes\footer.inc.php');?>