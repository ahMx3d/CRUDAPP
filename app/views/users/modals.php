        <!-- Add User Modal -->
        <div class="modal fade" id="new-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">New User</h4>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body px-4">
                        <form
                            action=""
                            method="POST"
                            id="form-data">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="fname"
                                        id="fname"
                                        placeholder="First Name:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="lname"
                                        id="lname"
                                        placeholder="Last Name:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        placeholder="User Email:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="tel"
                                        class="form-control"
                                        name="phone"
                                        id="phone"
                                        placeholder="User Phone:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="submit"
                                        name="insert"
                                        id="insert"
                                        class="btn btn-success btn-block"
                                        value="Add User" />
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Add User Modal -->
        <!-- Edit User Modal -->
        <div class="modal fade" id="edit-user">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body px-4">
                        <form
                            action=""
                            method="POST"
                            id="edit-form-data">
                                <!-- ID Input -->
                                <input type="hidden" name="id" id="id" />
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="edit-fname"
                                        id="edit-fname"
                                        placeholder="First Name:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="edit-lname"
                                        id="edit-lname"
                                        placeholder="Last Name:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="edit-email"
                                        id="edit-email"
                                        placeholder="User Email:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="tel"
                                        class="form-control"
                                        name="edit-phone"
                                        id="edit-phone"
                                        placeholder="User Phone:"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="submit"
                                        name="update"
                                        id="update"
                                        class="btn btn-warning btn-block"
                                        value="Update User" />
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Edit User Modal -->