<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./../css/header.min.css">
    <link rel="stylesheet" type="text/css" href="./../css/admin.min.css">
    <title>Admin</title>

</head>

<body>
    <header>
        <ul>
            <a href="./../../index.php">
                <li>Home</li>
            </a>
            <a href="./articles.php">
                <li>Game List</li>
            </a>
            <a href="./admin.php">
                <li>Admin</li>
            </a>
            <a href="./login.php">
                <li>Login</li>
            </a>
        </ul>
    </header>

    <section>
        <h1>Admin Panel</h1>

        <div class="wrapper">
            <h2>Articles List</h2>
            <label for="genres">Choose a article genre:</label>

            <select id="cars" name="genres">
                <option value="str">Strategy</option>
                <option value="rpg">Role-Playing Game</option>
                <option value="fps">First Person Shooter</option>
                <option value="sim">Simulation Game</option>
                <option value="???">Other</option>
            </select>
            <div class="scroll">
                <div class="scrollcontent">
                    <ul>
                        <li>
                            <h3 class="name">Desert Area</h3>
                            <a href="">Watch Article</a>
                            <a href="/"><button class="edit">Edit</button></a>
                            <a href="/"><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Mars Area</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <a href="">Watch Article</a>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                        </li>
                    </ul>
                </div>
                <div class="scrollbar">
                    <div id="scroller" class="scroller"></div>
                </div>
            </div>

            <a href="./add_edit.php" class="add"><button>Add Article</button></a>
        </div>



        <div class="wrapper user">
            <h2>User List</h2>
            <div class="scroll">
                <div class="scrollcontent">
                    <ul>
                        <li>
                            <h3 class="name">Admin</h3>
                            <p>Data of Register: 2020/05/12</p>
                            <a href="./add_edit.html"><button class="edit">Edit</button></a>
                            <a href="/"><button class="delete">Delete</button></a>
                            <a href="/"><button class="comment">See Coments</button></a>
                        </li>
                        <li>
                            <h3 class="name">Bob Fish</h3>
                            <p>Data of Register: 2020/05/12</p>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                            <a href="/"><button class="comment">See Coments</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <p>Data of Register: 2020/05/12</p>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                            <a href="/"><button class="comment">See Coments</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <p>Data of Register: 2020/05/12</p>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                            <a href="/"><button class="comment">See Coments</button></a>
                        </li>
                        <li>
                            <h3 class="name">Some Name</h3>
                            <p>Data of Register: 2020/05/12</p>
                            <a href=""><button class="edit">Edit</button></a>
                            <a href=""><button class="delete">Delete</button></a>
                            <a href="/"><button class="comment">See Coments</button></a>
                        </li>

                    </ul>
                </div>
                <div class="scrollbar">
                    <div class="scroller" class="scroller"></div>
                </div>
            </div>
        </div>

    </section>



    <footer>
        <div class="upper">
            <div class="logo">
                <h3>Creator: Andrey Shorstkin</h3>
                <h2>Online Blog, Essex Uni. Project</h2>
            </div>
            <ul class="footer_menu">
                <li class="item"><a href="">Main Page</a></li>
                <li class="item"><a href="">Admin Page</a></li>
                <li class="item"><a href="">Login</a></li>
                <li class="item"><a href="">Register</a></li>
            </ul>
        </div>
        <div class="lower">
            <ul class="copyright">
                <li>Address: Colchester, UK </li>
                <li>Andrey: andrejs232@gmail.com</li>
                <li>© Copyright 2019</li>
            </ul>
        </div>
    </footer>


    <script type="text/jаvascript">
        TINY.scroller.init('scroll','scrollcontent','scrollbar','scroller','buttonclick');
    </script>
</body>

</html>