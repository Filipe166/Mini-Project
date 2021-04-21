<?php
include_once 'config/conn.php';
include_once 'nav-no-searchbar.php';
$catq = ("select* from categories");
$cat = mysqli_query($conn, $catq);
$catArray = mysqli_fetch_all($cat, MYSQLI_ASSOC);

?>

<head>
    <style>
        .producs {
            width: 80%;
            margin: 40px auto;
        }

        #ccat,
        #searchProduc {
            margin-top: 20px;
            margin-bottom: 10px;
            margin-left: 10px;
            border: none;
            width: 200px;
            height: 30px;
            border-radius: 10px;
            cursor: pointer;
        }

        #asc,
        #des {
            display: inline-block;
            border: none;
            width: 50px;
            height: 30px;
            border-radius: 10px;
            transition: 0.8s;
            cursor: pointer;
        }

        #asc:hover,
        #des:hover {
            background-color: black;
            color: white;
        }

        .descri {
            width: 80%;
            margin: auto;
        }

        .search_Cat {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 20px;
        }

        .search_Cat label {
            color: white;
        }

        .search_Pro {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .search_Pro label {
            color: white;
        }
    </style>

</head>

<body>

    <section class="producs">
        <h2>List of avaliable products</h2>
        <form action="" method="post" class="form_producs">

            <select name="cat" id="ccat">
                <option value="0">Categorie</option>
                <?php foreach ($catArray as  $categori) : ?>
                    <label for="">Filter</label>
                    <option value="<?php echo $categori['id_categories'] ?>"><?php echo $categori['name_categories'] ?></option>
                <?php endforeach   ?>

                <label>Producs:</label>
                <input type="search" name="city" id="searchProduc" placeholder="Type to search Product" class="form-control">


            </select>


        </form>


        <div>
            Sort by Date : <button id="asc">Asc </button> / <button id="des">Des </button>
        </div>
        <a href=""></a>

        <!-- came for the ajax -->
        <section id="catalog">
            <article id="descri"></article>

        </section>
    </section>


    <script src="script/ajax_call.js"></script>
</body>