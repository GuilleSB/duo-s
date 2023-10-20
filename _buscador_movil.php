<input type="search" id="movil-input-search" placeholder="Buscar...">
<img class="movil_search_icon" src="./_images/search.svg" alt="Buscar"/>

<div class="movil-content-search">
    <div class="movil-content-table">
        <table id="movil-table">
            <thead>
                <tr>
                    <td></td>
                </tr>
            </thead>         
            <tbody>
                <?php
                    include ('_search_db.php');
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="./_js/movil_search.js"></script>