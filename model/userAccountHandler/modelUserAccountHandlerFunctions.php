<?php

/**
 * get_account_nbr : get the number of user accounts in the table
 * 
 *                 : return : integer
 */
function get_account_nbr() {
    // connection to the database
    include($_SESSION['db']);

    $str_query = 'SELECT COUNT(*) as nbr FROM users_list';
    try
    {  
        $query = $db->query($str_query);
    }
    catch(Exception $e)
    {
        $_SESSION['result'] = NULL;
        if ($_SESSION['lang'] == 'english')
        {
            $_SESSION['msg'] = 'data base error: try later';
        }
        else
        {
            $_SESSION['msg'] = 'erreur de la base de donnée: réessayer plus tard';
        }
        $url = $_SESSION['index'];
        $url .= '/controller/frontalController.php';
        header('Location:'.$url);
    }
    $data = $query->fetch();
    if (isset($data['nbr']))
    {
        return $data['nbr'];    
    }
    return 0;
}
