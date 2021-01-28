<?php

namespace App\Classes\User;

final class FieldTable {

    public $table = "user";

    public $id = "id_user";
    public $firstName = "first_name";
    public $lastName = "last_name";
    public $username = "username";
    public $email = "email";
    public $password = "password";

    public $permission = "type";

    /* Attention!! These two values belongs to the values of the permission 
    column in the database. Check the ENUM values.*/


    const Admin = "administrator";
    const User = "user";

    public $street = "address";
    public $city = "city";
    public $country = "country";

}