<?php
include_once 'Database.php';
include_once 'Comment.php';

class Fcomment
{
    static function addNewComment(Comment $comment)
    {
        $con=Database::getConnection();
        $req=$con->prepare('INSERT INTO comments SET ip=?,idTrash=?,comment=?,name=?,email=?');
        $req->execute(array(
            $comment->getId(),
            $comment->getIdTrash(),
            $comment->getComment(),
            $comment->getName(),
            $comment->getEmail()
        ));

        return $con->lastInsertId();
    }

    static function getAllComment()
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM comments');
        $req->execute(array());
        return $req->fetchAll();
    }

    static function getAllCommentOnTrash()
    {
        $con=Database::getConnection();
        $req=$con->prepare('SELECT * FROM comments c ,Trash t WHERE c.idTrahs=t._idTrash');
        $req->execute(array());
        return $req->fetchAll();
    }
}