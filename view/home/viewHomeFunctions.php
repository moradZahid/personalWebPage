<?php

function choose_header() 
{
    if ($_SESSION['login'] == 'anonymous') 
    {
        if ($_SESSION['lang'] == 'english') 
        {
            return '/headerEnglishTemplate.php';
        }
        else
        {
            return '/headerFrenchTemplate.php'; 
        }
    }
    else 
    {
        if ($_SESSION['lang'] == 'english') 
        {
            return '/headerLoggedEnglishTemplate.php';
        }
        else
        {
            return '/headerLoggedFrenchTemplate.php'; 
        }
    }
}

function choose_contribution() 
{
    if ($_SESSION['login'] == 'anonymous') 
    {
        if ($_SESSION['lang'] == 'english') 
        {
            return '/contributionEnglishTemplate.php';
        }
        else
        {
            return '/contributionFrenchTemplate.php'; 
        }
    }
    else 
    {
        if ($_SESSION['lang'] == 'english') 
        {
            return '/contributionLoggedEnglishTemplate.php';
        }
        else
        {
            return '/contributionLoggedFrenchTemplate.php'; 
        }
    }
}