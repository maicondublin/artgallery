<?php

namespace App\View\User\show;

use App\Classes\User\FieldTable;
use App\Model\User\Accounts\UserLoadAccounts;

class ShowAccounts {

    public function showYourself($users){

        if (!$users instanceof UserLoadAccounts) {
            return false;
        }

        if($users->dataSize() > 0){

            $field = new FieldTable();

            $id = $field->id;
            $firstName = $field->firstName;
            $lastName = $field->lastName;
            $username = $field->username;
            $email = $field->email;
            $street = $field->street;
            $city = $field->city;
            $country = $field->country;
            $permission = $field->permission;
                
        
            // Table Header
            echo "
            <table class='table table-hover table-dark'>
            <thead>
                <tr>
                <th scope='col'>Name</th>
                <th scope='col'>Username</th>
                <th scope='col'>Email</th>
                <th scope='col'>Permission</th>
                <th scope='col'>Address</th>
                <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>
        ";

            // Table Body
            foreach ($users->getAll() as $row) {
            
                echo "
                    <tr>
                        <td>{$row[$firstName]} {$row[$lastName]}</td>
                        <td>{$row[$username]}</td>
                        <td>{$row[$email]}</td>
                        <td>{$row[$permission]}</td>
                        <td>{$row[$street]} {$row[$city]} {$row[$country]}</td>
                        <td>
                            <a class='btn btn-danger text-white' href='../App/Controller/User/Delete.Controller.php?userId={$row[$id]}'>
                                Delete
                            </a>
                            <a class='btn btn-warning text-white' href='./edit_admin.php?userId={$row[$id]}'>
                                Edit
                            </a>
                        </td>
                    </tr>
                ";
            }
            // The end of the table
            echo "</tbody></table>";
            return true;
        }
        return false;
    }
}