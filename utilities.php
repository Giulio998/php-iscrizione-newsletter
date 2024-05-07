<?php if (isset($email) && strlen($email) > 0) {
    emailCheck($email);
}
;

function emailCheck($email)
{
    if (str_contains($email, "@")) {
        if (str_contains($email, ".")) {
            ?>
            <div class="alert alert-primary" role="alert">
                La mail è valida
            </div> <?php
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                La mail non è valida
            </div> <?php
        }
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            La mail non è valida
        </div>
        <?php
    }

}
?>