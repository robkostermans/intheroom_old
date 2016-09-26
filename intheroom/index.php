<?php include 'php/simple.php';?>
<html>
<head>
    <title>itrq</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/itr.min.css">
</head>
    <body class="list">
       
        <nav>
            <h1>In The Room?</h1>
            <h2>Main Building - D-wing room 5.23</h2>
            <button onClick="document.body.classList.toggle('floorplan');this.classList.toggle('a')">floorplan</button>
            <button onClick="document.body.classList.toggle('DDD');this.classList.toggle('a')">3d</button>
            </div>
            <h3>6 out of 9 desks occupied</h3>
            
           

            <div>
            <a href="#vd" data-o="true" onClick="filter(this,'Tester')">Tester</a>
            <a href="#ux" data-o=true onClick="filter(this,'Designer')">UX Designer</a>
            <a href="#dv" data-o=true onClick="filter(this,'Developer')">Developer</a>
            </div>
        </nav>
        <main> 
            <section>
                 <ul class="seats">
                    <li data-table="1" data-seat="1"><a class="user" data-f="<?=$users[0]->job?>" href="#<?=$users[0]->firstname?>"><i><?=$users[0]->firstname?></i><img src="data/<?=$users[0]->image?>"/></a></li>
                    <li data-table="1" data-seat="2"><a class="user" data-f="<?=$users[1]->job?>" href="#<?=$users[1]->firstname?>"><i><?=$users[1]->firstname?></i><img src="data/<?=$users[1]->image?>"/></a></li>
                    <li data-table="1" data-seat="3"><a class="user" data-f="<?=$users[2]->job?>" href="#<?=$users[2]->firstname?>"><i><?=$users[2]->firstname?></i><img src="data/<?=$users[2]->image?>"/></a></li>
                    <li data-table="1" data-seat="4"><a class="user" data-f="<?=$users[3]->job?>" href="#<?=$users[3]->firstname?>"><i><?=$users[3]->firstname?></i><img src="data/<?=$users[3]->image?>"/></a></li>
                    <li data-table="1" data-seat="5"><a class="user" data-f="<?=$users[4]->job?>" href="#<?=$users[4]->firstname?>"><i><?=$users[4]->firstname?></i><img src="data/<?=$users[4]->image?>"/></a></li>

                    <li data-table="2" data-seat="1"><a class="user" data-f="<?=$users[5]->job?>" href="#<?=$users[5]->firstname?>"><i><?=$users[5]->firstname?></i><img src="data/<?=$users[5]->image?>"/></a></li>
                    <li data-table="2" data-seat="2"><a class="user" data-f="<?=$users[6]->job?>" href="#<?=$users[6]->firstname?>"><i><?=$users[6]->firstname?></i><img src="data/<?=$users[6]->image?>"/></a></li>
                    <li data-table="2" data-seat="3"><a class="user" data-f="<?=$users[7]->job?>" href="#<?=$users[7]->firstname?>"><i><?=$users[7]->firstname?></i><img src="data/<?=$users[7]->image?>"/></a></li>
                    <li data-table="2" data-seat="4"><a class="user" data-f="<?=$users[8]->job?>" href="#<?=$users[8]->firstname?>"><i><?=$users[8]->firstname?></i><img src="data/<?=$users[8]->image?>"/></a></li>
                 </ul>
                 <div class="prop door"></div>
                 <div class="prop window e1"></div>
                 <div class="prop window e2"></div>
                 <div class="prop plant p1"></div>
                 <div class="prop plant p2"></div>
                
            </section> 
        </main>
        
        <script><?php echo file_get_contents("js/itr.js");?></script>
    </body>
</html>
