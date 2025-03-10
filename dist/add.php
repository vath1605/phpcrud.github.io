<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/main.css">
</head>
<body class="bg-gray-200">
    <header class="w-full h-24 bg-blue-400">
        <nav class="w-full h-full grid place-items-center">
            <h1 class="text-white text-4xl font-bold uppercase tracking-widest">
                Add Client
            </h1>
        </nav>
    </header>
    <main class="w-full flex flex-col items-center h-auto">
        <div class="w-4/5 h-auto my-10">
            <a href="../index.php" class="btn1 bg-red-300 shadow-md active:translate-x-1 active:translate-y-1 active:shadow-none transition-all duration-200 py-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-1 bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                  </svg>
                  <p>Back</p>
            </a>
        </div>
        <section class="w-1/2 h-auto flex justify-center">
            <form action="add.php" method="post" class="w-4/5 flex px-5 py-16 gap-5 flex-col items-center rounded-3xl h-full bg-slate-300">
                <label class="text-white uppercase text-lg font-bold">Client Information</label>
                <input type="text" name="name" class="input" placeholder="Client Name" id="">
                <input type="email" name="email" class="input" placeholder="Client Email" id="">
                <input type="text" name="phone" class="input" placeholder="Client Phone Number" id="">
                <input type="text" name="address" class="input" placeholder="Client Address" id="">
               <div class="w-3/4 justify-end flex h-auto">
                <button name="save" type="submit" class="btn2 bg-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-1 bi-floppy2" viewBox="0 0 16 16">
                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v3.5A1.5 1.5 0 0 1 11.5 6h-7A1.5 1.5 0 0 1 3 4.5V1H1.5a.5.5 0 0 0-.5.5m9.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                      </svg>
                    Save</button>
                <button type="reset" class="btn2 bg-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi me-1 bi-x-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                      </svg>
                    Cancel</button>
               </div>
               <?php 
                    
                    include './database.php';
                    if(isset($_POST['save'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        if(empty($name) || empty($email) || empty($phone) || empty($address)){
                            echo "
                            <section>
                    <h1 class=\"text-red-500\">Your information could be not null</h1></section>
                ";
                        }else{
                            $phone = "(+855) ".$phone;
                            $sql = "INSERT INTO tbl_client(name, email, phone, address) 
                            VALUES('$name','$email','$phone','$address')
                            ";

                            try{
                                mysqli_query($conn,$sql);
                            }catch(mysqli_sql_exception $e){
                                echo "Error: ".$e->getMessage();
                            }
                            header("location: ../index.php");

                            mysqli_close($conn);
                        }
                    }
                    
                    
                    ?>
                
            </form>
        </section>
    </main>
</body>
</html>