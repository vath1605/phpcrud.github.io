<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/main.css">
</head>

<body class="bg-gray-200">
    <header class="w-full h-24 bg-blue-400">
        <nav class="w-full h-full grid place-items-center">
            <h1 class="text-white text-4xl font-bold uppercase tracking-widest">
                Client Information
            </h1>
        </nav>
    </header>
    <main class="w-full h-auto flex flex-col items-center">
        <section class="w-4/5 h-14 my-10 flex justify-between">
            <a href="./dist/add.php" class="shadow-md active:translate-x-1 active:translate-y-1 active:shadow-none transition-all duration-200 btn1 bg-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi me-1 bi-person-plus" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                  </svg>
                  <p class="text-sm">Add Client</p>
            </a>
            <p class="btn1 bg-green-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi me-2 bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                  </svg>
                : 
                <?php
                
                include './dist/database.php';
                    $sql = "SELECT * FROM tbl_client";
                    try{
                        $result = mysqli_query($conn,$sql);
                    }catch(mysqli_sql_exception $e){
                        echo "Error: ".$e->getMessage();
                    }
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){

                        $count++;

                    }
                    echo $count;
                
                ?>
            </p>
        </section>
        <section class="w-4/5 h-auto">
            <table class="table-responsive w-full text-center" cellpadding="20px">
                <?php 
                    if($count != 0){
                        echo "
                            <thead class=\"bg-gray-300\">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                        ";
                    }else{
                        echo "
                        <div class=\"w-full h-36 mt-40 grid place-items-center\">
                    <h1 class=\"text-3xl text-gray-400\"> No Data Found Yet </h1>
                </div>
                        ";
                    }
                ?>
                
                <tbody>
                    <?php 
                    
                    include './dist/database.php';
                    $sql = "SELECT * FROM tbl_client";
                    try{
                        $result = mysqli_query($conn,$sql);
                    }catch(mysqli_sql_exception $e){
                        echo "Error: ".$e->getMessage();
                    }
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $address = $row['address'];
                        $date = $row['cre_on'];

                        echo "
                        <tr>
                        <td>{$id}</td>
                        <td>{$name}</td>
                        <td>{$email}</td>
                        <td>{$phone}</td>
                        <td>{$address}</td>
                        <td>{$date}</td>
                        <td class=\"flex justify-center items-center\">
                            <a href=\"./dist/delete.php? deleteID=".$id." \" class=\"btn2 bg-red-500\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"19\" height=\"19\" fill=\"currentColor\" class=\"bi bi-trash3 me-1\" viewBox=\"0 0 16 16\">
                                    <path d=\"M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5\"/>
                                </svg>
                                Delete
                            </a>
                            <a href=\"#\" class=\"btn2 bg-yellow-400\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi me-1 bi-pen\" viewBox=\"0 0 16 16\">
                                    <path d=\"m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z\"/>
                                </svg>
                                Edit
                            </a>
                            
                        </td>
                    </tr>
                        ";
                    }
                    ?>
                    
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>