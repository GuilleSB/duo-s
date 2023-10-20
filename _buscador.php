<input type="search" id="input-search" placeholder="Buscar...">

<div class="content-search">
    <div class="content-table">
        <table id="table">
            <thead>
                <tr>
                    <td></td>
                </tr>
            </thead>         
            <tbody class="text-left">
                <?php
                    include ('_search_db.php');
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="./_js/search.js"></script>