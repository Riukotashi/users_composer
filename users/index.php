<?php 
use users_composer\users\Connection;

require_once(__DIR__.'./Connection.php');
$dbh = new Connection('user_users_composer', '2QyXuehLk6Gh6YBr', 'users');
$users = $dbh->selectTable('utilisateur');
?>
<div>
    <table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>telephone</th>
        </tr>
        <?php foreach ($users as $user) {?>
            <tr>
                <td><?php echo $user["nom"] ?></td>
                <td><?php echo $user["prenom"] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>