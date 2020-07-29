<?php

class User
{
    private $db;    // Database Variable.

    // Constructor.
    function __construct()
    {
        // Database Instance.
        $this->db = new Model;
    }

    // Delete User By ID.
    public function delete($id)
    {
        // Query Statement.
        $this->db->query('
                DELETE FROM
                    `users`
                WHERE
                    `id` = :user_id
            ');

        // Bind Params.
        $this->db->bind(
            ':user_id',
            $id
        );

        // Execute Statement.
        $this->db->execute();

        // Row Count Check.
        if ($this->db->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    // Get User By Email.
    public function getUserByEmail($email)
    {
        // Query Statement.
        $this->db->query('
                SELECT
                    *
                FROM
                    `users`
                WHERE
                    `email` = :user_email
            ');

        // Bind Params.
        $this->db->bind(
            ':user_email',
            $email
        );

        // Execute Statement.
        $this->db->execute();

        // Row Count Check.
        if ($this->db->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    // Add Function.
    public function insert($fname, $lname, $email, $phone)
    {
        // Query Statement.
        $this->db->query('
                INSERT INTO
                    `users`
                        (
                            `first_name`,
                            `last_name`,
                            `email`,
                            `phone`
                        )
                VALUES
                    (
                        :fname,
                        :lname,
                        :email,
                        :phone
                    )
            ');

        // Bind Params.
        $this->db->bind(
            ':fname',
            $fname
        );
        $this->db->bind(
            ':lname',
            $lname
        );
        $this->db->bind(
            ':email',
            $email
        );
        $this->db->bind(
            ':phone',
            $phone
        );

        // Execute Statement.
        $this->db->execute();

        // Last Insert Check.
        if ($this->db->lastInsertId()) {
            return true;
        } else {
            return false;
        }
    }

    // Read All Function.
    public function readAll()
    {
        // Query Statement.
        $this->db->query('
                SELECT
                    *
                FROM
                    `users`
            ');

        // Fetch Statement.
        $rows = $this->db->fetchAll();

        // Rows Check.
        if ($rows) {
            return $rows;
        } else {
            return false;
        }
    }

    // Read By ID Function.
    public function readById($id)
    {
        // Query Statement.
        $this->db->query('
                SELECT
                    *
                FROM
                    `users`
                WHERE
                    `id` = :user_id
            ');

        // Bind Params.
        $this->db->bind(
            ':user_id',
            $id
        );

        // Fetch Statement.
        $row = $this->db->fetch();

        // Row Check.
        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    // Update Function.
    public function update($id, $fname, $lname, $email, $phone)
    {
        // Query Statement.
        $this->db->query('
                UPDATE
                    `users`
                SET
                    `first_name` = :fname,
                    `last_name`  = :lname,
                    `email`      = :email,
                    `phone`      = :phone
                WHERE
                    `id` = :user_id
                And
                    `email` = :email
            ');

        // Bind Params.
        $this->db->bind(
            ':user_id',
            $id
        );
        $this->db->bind(
            ':fname',
            $fname
        );
        $this->db->bind(
            ':lname',
            $lname
        );
        $this->db->bind(
            ':email',
            $email
        );
        $this->db->bind(
            ':phone',
            $phone
        );

        // Execute Statement.
        $this->db->execute();

        // Row Check.
        if ($this->db->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }
}
