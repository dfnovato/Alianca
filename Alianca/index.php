<head>
<link rel="stylesheet" href="/css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
</head>

<body class="cor1">

<?php
session_start();
include 'conexao.php';
$consulta = $cn->query('select*from tbl_classe');
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<?php include 'nav.php' ?>   
<main>
<div class="container">

<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
  extract($exibe);
  ?>
    <?php switch($exibe['tipo_classe']){  
      case "1"?>
    <a href ="modalclass.php?cd=<?php echo $exibe['cd_classe']; ?>" class="divlv1 link1">
     <div class="">
  <img class="foto" src="./img/<?php echo $img_classe?>" alt="">
  <div class="textinho">
  
    <h2 ><?php echo $nm_classe ?></h2>
    <p><?php echo $exibe['ds_classe']; ?></p>
  </div>
</div>
</a>    
    <?php 
    break;
    case "2" ?>
      
      <div class=".divlv1 link2" id="">
  
  <img class="foto" src="./img/<?php echo $exibe['img_classe']; ?>" alt="">
  <div class="textinho">
    <h2 class="fonterpg"><?php echo $exibe['nm_classe']; ?></h2>
    <p><?php echo $exibe['ds_classe']; ?></p>
  </div>

</div>
      
    <?php
  break;
  case "3" ?>
    
    <div class=".divlv1 link3" id="">
  
  <img class="foto" src="./img/<?php echo $exibe['img_classe']; ?>" alt="">
  <div class="textinho">
    <h2><?php echo $exibe['nm_classe']; ?></h2>
    <p><?php echo $exibe['ds_classe']; ?></p>
  </div>

</div>
      

    <?php
  break;
  default:
  echo "error"; } ?>

  <?php }?>

</div>
<script>
</script>


</main>
</body>