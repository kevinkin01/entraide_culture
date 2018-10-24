<?php

$ArticleM = new ArticleManager($pdo);

$UtilM = new AuthorManager($pdo);

// advanced validator email
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
use Egulias\EmailValidator\Validation\MultipleValidationWithAnd;
use Egulias\EmailValidator\Validation\RFCValidation;

if(isset($_GET['login'])) {

    if(empty($_POST)){
        require_once "View/connect.view.php";
    }else{
        # aaa075
        $ident = new Author($_POST);

        # aaa083 - verification
        $connect = $UtilM->identUtil($ident);

        # aaa084
        if($connect){
            // if true
            header("Location: ./");
        }else{
            // if false
            
            $error = "Login et/ou mot de passe incorrect";
            require_once "View/connect.view.php";
        }

    }

}elseif (empty($_POST)){
    $recup = $ArticleM->listArticle();

    // if 1 or more article(s)
    if ($recup) {

        # aaa052 list and create table with object Article
        foreach ($recup as $item) {
            $listView[] = new Article($item);
        }
    } else { // if false
        $listView = "Il n'y a pas encore d'article.";
    }
    //require_once "View/index.view.php";

    require_once "View/index.php";
}else {
// Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 3306))
        ->setUsername('your username')
        ->setPassword('your password')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom(['john@doe.com' => 'John Doe'])
        ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
        ->setBody('Here is the message itself')
    ;

// Send the message
    $result = $mailer->send($message);

}

