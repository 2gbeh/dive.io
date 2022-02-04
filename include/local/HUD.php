<?php
$nav= "page.php";
$href = utmPure($nav,$USER->username);
$photo = getPhoto($USER);
$name = getHudname($USER);
?>
<ul class="list">
<li>
    <a <?php echo $href; ?>>
    <table class="menu">
    <tr>
        <td><var class="profile" style="background-image:url(<?php echo $photo; ?>)">&nbsp;</var></td>
        <td>
            <div class="title"><?php echo $name; ?></div>
            <div class="subtitle">View Profile</div>
        </td>
    </tr>
    </table>
    </a>
</li>
</ul>  