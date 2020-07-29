<?php

class Users extends Controller
{
    // Constructor.
    public function __construct()
    {
        // Database Instance.
        $this->userModel = $this->model('User');
    }

    // Users Export.
    public function export($file_type= null)
    {
        // show error mess.s from controllers to views

        // File Type Check.
        if ($file_type != null) {
            // Excel Check
            if ($file_type == 'excel') {
                // File Extension.
                header('Content-Type: application/xls');
                // File Name.
                header('Content-Disposition: attachment; filename=users' .rand(). '.xls');
                // Prevent Browser Caching.
                header('Cache-Control: no-cache');
                // Expiration Date in the past.
                header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
                
                // Assign Database Info Data.
                $data = $this->userModel->readAll();
                if ($data) {
                    $this->view(
                        'users/index',
                        $data
                    );
                }
            }
        }
    }

    // User Show.
    public function show()
    {
        if (isset($_POST['infoID'])) {
            // Assign User ID.
            $info_id = $_POST['infoID'];
            // Assign Database Info Data.
            $data = $this->userModel->readById($info_id);
            // Database Info Check.
            if ($data) {
                // Success.
                echo json_encode($data);
            } else {
                // Error.
            }
        }
    }

    // Users Delete.
    public function del()
    {
        if (isset($_POST['delID'])) {
            // Assign ID Variable.
            $del_id = $_POST['delID'];

            // Delete User Check.
            if ($this->userModel->delete($del_id)) {
                // success.
            } else {
                // Error.
            }
        }
    }

    // Users Update.
    public function update()
    {
        // Request Check.
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Action Check.
            if (
                isset($_POST['action']) &&
                $_POST['action'] == 'update'
            ) {
                // Input Sanitize.
                $_POST = filter_input_array(
                    INPUT_POST,
                    FILTER_SANITIZE_STRING
                );

                // Input Data.
                $data = [
                    'id'    => $_POST['id'],             // User First Name.
                    'fname' => $_POST['edit-fname'],     // User First Name.
                    'lname' => $_POST['edit-lname'],     // User Last Name.
                    'email' => $_POST['edit-email'],     // User Email.
                    'phone' => $_POST['edit-phone'],     // User Phone.
                    'fnerr' => '',     // User First Name Error.
                    'lnerr' => '',     // User Last Name Error.
                    'emerr' => '',     // User Email Error.
                    'pherr' => ''     // User Phone Error.
                ];

                // Data Empty Check.
                if (empty($data['fname'])) $data['fnerr'] = 'First name is mandatory';
                if (empty($data['lname'])) $data['lnerr'] = 'Last name is mandatory';
                if (empty($data['email'])) $data['emerr'] = 'User Email is mandatory';
                if (empty($data['phone'])) $data['pherr'] = 'User Phone is mandatory';

                // Email Registered Check.
                // if (
                //     $this->userModel->getUserByEmail($data['email'])
                // ) $data['emerr'] = 'Already, there is a user with this email';

                // Empty Errors Check.
                if (
                    empty($data['fnerr']) &&
                    empty($data['lnerr']) &&
                    empty($data['emerr']) &&
                    empty($data['pherr'])
                ) {
                    // Update Check.
                    if (
                        $this->userModel->update(
                            $data['id'],
                            $data['fname'],
                            $data['lname'],
                            $data['email'],
                            $data['phone']
                        )
                    ) {
                        // Success
                    } else {
                        // Error
                    }
                } else {
                    // Home View With Error Mess.
                }
            }
        } else {
            // Input Data.
            $data = [
                'fname' => '',     // User First Name.
                'lname' => '',     // User Last Name.
                'email' => '',     // User Email.
                'phone' => '',     // User Phone.
                'fnerr' => '',     // User First Name Error.
                'lnerr' => '',     // User Last Name Error.
                'emerr' => '',     // User Email Error.
                'pherr' => ''      // User Phone Error.
            ];

            // Home Page View.
            $this->view(
                'users/modals',
                $data
            );
        }
    }

    // Users Edit.
    public function edit()
    {
        // ID Check.
        if (isset($_POST['editID'])) {
            // Assign ID Variable.
            $edit_id = $_POST['editID'];
            // Database User Data.
            $data = $this->userModel->readById($edit_id);

            if ($data) {
                // User Data In JSON.
                echo json_encode($data);
            }
        }
    }

    // Users Add.
    public function add()
    {
        // Request Check.
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Action Check.
            if (
                isset($_POST['action']) &&
                $_POST['action'] == 'insert'
            ) {
                // Input Sanitize.
                $_POST = filter_input_array(
                    INPUT_POST,
                    FILTER_SANITIZE_STRING
                );

                // Input Data.
                $data = [
                    'fname' => $_POST['fname'],     // User First Name.
                    'lname' => $_POST['lname'],     // User Last Name.
                    'email' => $_POST['email'],     // User Email.
                    'phone' => $_POST['phone'],     // User Phone.
                    'fnerr' => '',     // User First Name Error.
                    'lnerr' => '',     // User Last Name Error.
                    'emerr' => '',     // User Email Error.
                    'pherr' => ''     // User Phone Error.
                ];

                // Data Empty Check.
                if (empty($data['fname'])) $data['fnerr'] = 'First name is mandatory';
                if (empty($data['lname'])) $data['lnerr'] = 'Last name is mandatory';
                if (empty($data['email'])) $data['emerr'] = 'User Email is mandatory';
                if (empty($data['phone'])) $data['pherr'] = 'User Phone is mandatory';

                // Email Registered Check.
                if (
                    $this->userModel->getUserByEmail($data['email'])
                ) $data['emerr'] = 'Already, there is a user with this email';

                // Empty Errors Check.
                if (
                    empty($data['fnerr']) &&
                    empty($data['lnerr']) &&
                    empty($data['emerr']) &&
                    empty($data['pherr'])
                ) {
                    // Insert Check.
                    if (
                        $this->userModel->insert(
                            $data['fname'],
                            $data['lname'],
                            $data['email'],
                            $data['phone']
                        )
                    ) {
                        // Success
                    } else {
                        // Error
                    }
                } else {
                    // Home View With Error Mess.
                }
            }
        } else {
            // Input Data.
            $data = [
                'fname' => '',     // User First Name.
                'lname' => '',     // User Last Name.
                'email' => '',     // User Email.
                'phone' => '',     // User Phone.
                'fnerr' => '',     // User First Name Error.
                'lnerr' => '',     // User Last Name Error.
                'emerr' => '',     // User Email Error.
                'pherr' => ''      // User Phone Error.
            ];

            // Home Page View.
            $this->view(
                'users/modals',
                $data
            );
        }
    }

    // Users Index.
    public function index()
    {
        // AJAX Data Check.
        if (isset($_POST['action']) && $_POST['action'] == 'view') {
            // Database Users Variable.
            $data = $this->userModel->readAll();
            // Users Check.
            if ($data) {
                // Users Table.
                $this->view(
                    'users/index',
                    $data
                );
            }
        }
    }
}
