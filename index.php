<?php

require_once 'config.php';
require_once 'src/User.php';
require_once 'src/Tweet.php';
require_once 'src/Comment.php';



//$tweet = Tweet::loadTweetByUserId($conn, 26);
//$tweet->setText('Taki sobie randomowy tweet');
//$tweet->saveTweetToDB($conn);
/*
 *
 */
//$user = new User();

//$user->setEmail('Mariola@test.pl');
//$user->setUsername('Mariola Gębicka');
//$user->setPassword('test');

//$user->saveToDB($conn);




/*
$user = User::loadUserById($conn, 1);

$user->setUsername('fixed');
$user->setEmail('fixed@fixed.com');

$user->saveToDB($conn);

var_dump(User::LoadAllUsers($conn));
*/


/*
foreach (User::loadAllUsers($conn) as $key => $user) {

	$users->setUsername($key . '-' . $user->getUsername());

//	$user->saveToDB($conn);

    var_dump($user);
}

foreach (User::loadAllUsers($conn) as $key => $user) { 
    print_r($user);
    echo "<br />";
}
*/
//$user = User::loadUserById($conn , 27);
//$user->delete($conn);
//var_dump($user);

$a = new Comment;
/*
$a->setUserId('2');
$a->setPostId('2');
$a->setTextComment('some dumb text');

$a->saveToDB($conn);
*/

print_r(Comment::loadAllCommentsByPostId($conn, 2));

