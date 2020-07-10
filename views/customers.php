<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='container'>
<?php require_once 'select.php';?>
 <?php 
 if($info->rowCount() == 0):?> <p> No results found </p>
 <?php else:?>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Seller</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($info as $array): ?>
                        <tr>
                            <td class="text-dark"><?=$array['customer_name']?></td>
                            <td class="text-muted"><?=$array['customer_city']?></td>
                            <td class="text-muted"><?=$array['rating']?></td>
                            <td class="text-muted"><?=$array['seller_name']?></td>
                        </tr>
                        <?php endforeach ?>     
                </tbody>
            </table> 
            <?php endif?>
            </div>
</body>
</html>