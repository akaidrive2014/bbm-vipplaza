<?php if(!Yii::app()->user->isGuest){?>
<style>
    div.menu{
        margin-bottom: 70px;
    }
    div.menu .title{
        float: left;
    }
    div.menu ul{
        margin-left: 25px;
    }
    div.menu ul li {
        display: inline-block;
    }
    div.menu ul li a{
        padding: 5px 5px 5px 5px;
        color:blue;
        text-decoration: none;
        background: gainsboro;
    }
</style>
<div class="menu">
    <div class="title">MENU : </div>
    <ul>
        <li>
            <a href="<?php echo $this->baseUrl();?>/generator/putsku">Put Sku</a>
        </li>
        <li>
            <a href="<?php echo $this->baseUrl();?>/site/logout">Log Out</a>
        </li>
    </ul>
</div>
<?php } ?>