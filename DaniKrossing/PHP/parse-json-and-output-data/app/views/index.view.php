
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Glossary </h1>
        </div>
    </div>

    <div class="row ">
        <table class="table table-striped">


            <!--1-type-->
            <?php foreach ($model as $item) : ?>
                <tr>
                    <td><a href="detail.php?term=<?= $item->term ?>"><?= $item->term ?></a></td>
                    <td><?= $definition = $item->definition; ?></td>
                </tr>

            <?php endforeach; ?>


            <!--2-type-->
            <?php  /* 

                foreach ($model as $item) {
                    $term = $item->term;
                    $definition = $item->definition;
                    echo "<tr><td> $term </td><td> $definition</td></tr>";
                }

                */ ?>
        </table>
    </div>

</div>

