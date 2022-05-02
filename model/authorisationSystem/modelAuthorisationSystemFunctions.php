<?php
// connection to the database
include($_SESSION['db']);

/**
 * get_owner_entry  : return the owner of the dictionary entry
 *                    ($french_id, $english_id)
 *
 *                  : param : $french_id  : integer
 *                          : $english_id : integer
 *
 *                  :return: integer
 */
 function get_owner_entry($french_id,$english_id)
 {
   global $db;
   $str_prep = 'SELECT user_id FROM Dictionary
                  WHERE french_id=:french_id
                  AND english_id=:english_id';
   try
   {
     $prep = $db->prepare($str_prep);
     $prep->execute(array('french_id' => $french_id,
                              'english_id' => $english_id));
   }
   catch (Exception $e)
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
   $data = $prep->fetch();
   if (!isset($data['user_id']))
   {
     throw new UnexpectedValue('one of the entry ids');
   }
   return $data['user_id'];
 }
