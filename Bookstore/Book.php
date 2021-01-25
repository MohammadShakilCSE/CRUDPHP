<?php
    include("./Component/operation.php");   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" >
    <title>BookStore</title>
</head>
<body>
    <div class="container">
        <header class="text-center ">
            <h2 class="text-uppercase text-white bg-dark  py-3 book-heading"><i class="fas fa-book-reader"></i> Bookstore</h2>
        </header>
        <div class="d-flex justify-content-center">
            <form action="" method="POST" class="w-50">
                <div class="py-2 ">
                    <?php inputEle(icon:"<i class='fas fa-id-badge'></i>",placehoulder:"Book id",name:"id",value:""); ?>
                </div>
                <div class="py-2 ">
                    <?php inputEle(icon:"<i class='fas fa-book-medical'></i>",placehoulder:"Book name",name:"bookname",value:""); ?>
                </div>
                <div class="row">
                    <div class="col">
                        <?php inputEle(icon:"<i class='far fa-user'></i>",placehoulder:"Author name",name:"authorname",value:""); ?>
                    </div>
                    <div class="col">
                        <?php inputEle(icon:"<i class='fas fa-dollar-sign'></i>",placehoulder:"Price",name:"price",value:""); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mr-3">
                        <?php buttonEle("create","Create","btn btn-success",""); ?>
                    </div>
                    <div class="mr-3">
                        <?php buttonEle("refresh","Refresh","btn btn-primary",""); ?>
                    </div>
                    <div class="mr-3">
                        <?php buttonEle("update","Update","btn btn-warning",""); ?>
                    </div>
                    <div class="mr-3">
                        <?php buttonEle("delete","Delete","btn btn-danger",""); ?>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <table class="table bg-dark text-white py-2 mt-4">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($_POST['refresh'])){
                            $result=GetAllData();
                            if($result){
                                while($row=mysqli_fetch_assoc($result)){ ?> 
                                <tr>
                                    <td id="id"><?php echo $row['id'] ?></td>
                                    <td id="bookname"><?php echo $row['bookname'] ?></td>
                                    <td id="authorname"><?php echo $row['authorname'] ?></td>
                                    <td id="price"><?php echo $row['price'] ?></td>
                                    <td id="editbtn"><i class="fas fa-user-edit"></i></td>
                                    <td><i class="fas fa-trash-alt"></i></td>
                                </tr>
                        <?php
                                }
                            }
                        }       
                    ?>
                        
                    
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>  
    <script src="./Js/main.js"></script>
</body>
</html>