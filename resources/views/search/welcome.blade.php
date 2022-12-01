<?php
include("connect.php");
$query = "select first_name, last_name, email from customer;" ;
$res = getTableData($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container"  style='width: 800px;'>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th style="text-align: center;">Active</th>
                </tr>
            </thead>
            <tbody style="font-size: 14px; vertical-align: middle;">
                <?php foreach ($res as $key => $val)
                {
                echo 
                "<tr>
                    <td>".$val['first_name']."</td>
                    <td>".$val['last_name']."</td>
                    <td>".$val['email']."</td>
                    <td style='justify-content: space-evenly; display: flex;'>
                    <button class='btn btn-danger' style='width:40%;'><svg xmlns='http://www.w3.org/2000/svg' width='20' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'></path>
                    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'></path></svg>
                    </button>

                    <button class='btn btn-success' style='width:40%;'>
                    <svg xmlns='http://www.w3.org/2000/svg'  width='20' fill='currentColor' class='bi bi-check' viewBox='0 0 16 16'>
                    <path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'/>
                    </svg>
                    </button>
                    </td>
                </tr>";
                }
                ?>
                
            </tbody>
        </table>
    </div>
<script>

</script>

</body>
</html>