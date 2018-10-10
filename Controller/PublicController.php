<?php

$ArticleM = new ArticleManager($pdo);

$UtilM = new AuthorManager($pdo);

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

}else {

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
}
