<div class='col-xxs-12 col-xs-6 col-sm-4 col-md-3 col-lg-3 business_card'>
    <div class='card'>
        <img class='tp' src='./_categories/<?php echo $b_id;?>.jpg' alt='<?php echo $b_activity;?>' />
        <div class='business_name'>
            <span class='icon-empresa col-md-1'></span>
            <div class='col-md-10'>
                <?php echo $b_name;?>
            </div>
        </div>
        <div class='business_activity'>
            <span class='icon-actividad col-md-1'></span>
            <div class='col-md-10'>
                <?php echo $b_activity;?> 
            </div>
        </div>             
        <div class='text-center'>
            <div>
                <a href='./<?php echo $b_id;?>'>
                    <button class='btn see_more'>
                            Visitar página...
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>