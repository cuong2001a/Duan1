<?php

function user_selectAll()
{
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function user_select_by_id($id_user)
{
    $sql = "SELECT * FROM user WHERE id_user = ?";
    return pdo_query_one($sql, $id_user);
}
function user_insert($id_user, $username, $password, $name, $avatar, $phone, $role, $activated)
{
    $sql = "INSERT INTO user(id_user, username, password, name, avatar,phone,role,activated) VALUES (?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_user, $username, $password, $name, $avatar, $phone, $role, $activated);
}
function mahoa($password)
{
    $salt = "$%&$#@^akdmrKDLDGK115";
    return md5($password . $salt);
}
function user_delete($id_user)
{
    $sql = "DELETE FROM user WHERE id_user = ?";
    pdo_execute($sql, $id_user);
}
function login($username)
{
    $sql = "SELECT * FROM user WHERE username = ?";
    return pdo_query_one($sql, $username);
}
function update_user_not_admin($id_user, $name, $password)
{
    $sql = "UPDATE user SET name = ?, password = ? WHERE id_user = ?";
    pdo_execute($sql, $name, $password, $id_user);
}
function user_update_cmnd($id_user, $cmnd, $anh_cmnd)
{
    $sql  = "UPDATE user SET so_cmnd = ?, anh_cmnd = ? WHERE id_user = ?";
    pdo_execute($sql, $cmnd, $anh_cmnd, $id_user);
}
