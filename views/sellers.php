<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php require_once 'select.php';?>
 <?php 
 if($info->rowCount() == 0):?> <p> No results found </p>
 <?php else:?>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Commission</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($info as $array): ?>
                        <tr>
                            <td class="text-dark"><?=$array['seller_name']?></td>
                            <td class="text-muted"><?=$array['seller_city']?></td>
                            <td class="text-muted"><?=$array['commission']?></td>
                        </tr>
                        <?php endforeach ?>     
                </tbody>
            </table> 
            <?php endif?>
        </div>
</body>
</html>