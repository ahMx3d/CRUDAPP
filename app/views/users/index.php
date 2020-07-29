                    <table border="1" class="table table-striped table-sm table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $user):?>
                            <tr class="text-center text-secondary">
                                <td><?php echo $user->id;?></td>
                                <td><?php echo $user->first_name;?></td>
                                <td><?php echo $user->last_name;?></td>
                                <td><?php echo $user->email;?></td>
                                <td><?php echo $user->phone;?></td>
                                <td>
                                    <a
                                        class="text-info info-btn"
                                        id="<?php echo $user->id;?>"
                                        href="#"
                                        role="button"
                                        title="View Details"
                                        data-toggle="modal"
                                        data-target="#-user">
                                            <i class="fas fa-info-circle fa-lg"></i></a>&nbsp;<a
                                        class="text-warning edit-btn"
                                        id="<?php echo $user->id;?>"
                                        href="#"
                                        role="button"
                                        title="Edit Info"
                                        data-toggle="modal"
                                        data-target="#edit-user">
                                            <i class="fas fa-edit fa-lg"></i></a>&nbsp;<a
                                        class="text-danger del-btn"
                                        id="<?php echo $user->id;?>"
                                        href="#"
                                        role="button"
                                        title="Delete User"
                                        data-toggle="modal"
                                        data-target="#-user">
                                            <i class="fas fa-trash-alt fa-lg"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>