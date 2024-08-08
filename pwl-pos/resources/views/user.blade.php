<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORM</title>
</head>
<body>
    <?php
        // var_dump($data);
        // die();
        ?>
    <h1> data level pengguna</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th> ID</th>
            <th> username</th>
            <th> nama </th>
            <th> ID Level Pengguna </th>
        </tr>

        @foreach($data as $d)
        <tr>
            <td> {{ $d->user_id}}</td>
            <td> {{ $d->username}}</td>
            <td> {{ $d->nama}}</td>
            <td> {{ $d->level_id}}</td>
        </tr>

        @endforeach
    </table>
</body>
</html>
