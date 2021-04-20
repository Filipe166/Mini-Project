<?php
include_once 'config/conn.php';
$catq = ("select* from categories");
$cat = mysqli_query($conn, $catq);
$catArray = mysqli_fetch_all($cat, MYSQLI_ASSOC);

?>
<h2>List of avaliable products</h2>
<section>
    <form action="" method="post">
        <select name="" id="">
            <option value="0">Categorie</option>
            <?php foreach ($catArray as  $categori) : ?>
                <label for="">Filter</label>
                <option value="<?php echo $categori['id_categories'] ?>"><?php echo $categori['name_categories'] ?></option>
            <?php endforeach   ?>
        </select>
    </form>
    <div>
        sort by : <button>A-Z </button>
    </div>
</section>

<section id="catalog">
    <div>
        <img src="" alt="" srcset="">
    </div>
    <article>
        <p>name</p>
        <p>description</p>
        <p>price</p>
        <p>relese data</p>
    </article>
</section>