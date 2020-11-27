
<?php use App\Http\Controllers\Controller; ?>
<?php $user_id = array();
$i = 0;
foreach ($favorito[$i] as $row){
            $user_id[$i] <- $row['id'];
            var_dump($user_id[0]);
            $i++;
        }?>
