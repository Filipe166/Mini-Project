<?php
include_once 'config/conn.php';
$catq = ("select* from categories");
$cat = mysqli_query($conn, $catq);
$catArray = mysqli_fetch_all($cat, MYSQLI_ASSOC);

?>

<body>

    <h2>List of avaliable products</h2>
    <section>
        <form action="" method="post">

            <select name="cat" id="ccat">
                <!-- <option value="0">Categorie</option> -->
                <?php foreach ($catArray as  $categori) : ?>
                    <label for="">Filter</label>
                    <option value="<?php echo $categori['id_categories'] ?>"><?php echo $categori['name_categories'] ?></option>
                <?php endforeach   ?>
            </select>


        </form>


        <div>
            Sort by Date : <button id="asc">Asc </button> / <button id="des">Des </button>
        </div>

    </section>
    <!-- came for the ajax -->
    <section id="catalog">
        <article id="descri">
        </article>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script/ajax_call.js"></script>
</body>