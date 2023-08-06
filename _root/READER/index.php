<style>
    *{
        border:  0;
        margin:  0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body{
        width:  100%;
        height: 100%;
    }

    header{
        width:    100%;
        height:   150px;
        position: relative;
        background-color: rgb(0, 0, 170);
    }

    ul{
        display:         flex;
        justify-content: space-around;
        flex-wrap:       wrap;
        padding:         40px 0 0 0 ;
    }

    a{
        width:           140px;
        height:          70px;
        text-align:      center;
        padding:         15px 5px 5px 5px;
        margin:          8px;
        color:           #FFFFFF;
        font-size:       30px;
        text-decoration: none;
        border:          2px solid white;
        border-radius:   8px;
    }

    a:hover{
        width:     160px;
        height:    90px;
        padding:   20px 0 0 0;
        font-size: 35px;
    }

    @media screen and (max-width:623px){
        header{ height: 220px; }
    }
    @media screen and (max-width:311px){
        header{ height: 395px; }
    }

</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
    </head>
    <body>
        <header>
            <ul>
                <a href="./../../CRUD/CREATE/index.php">CREATE</a>
                <a href="./../../CRUD/READ/index.php"  >READ</a>
                <a href="./../../CRUD/UPDATE/index.php">UPDATE</a>
                <a href="./../../CRUD/DELETE/index.php">DELETE</a>
            </ul>
        </header>
    </body>
</html>
