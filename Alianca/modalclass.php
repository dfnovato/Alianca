<head>
<link rel="stylesheet" href="./css/estilo.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />
</head>


<?php
session_start();
include 'conexao.php';
$consulta = $cn->query('select*from tbl_classe');
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<?php include 'nav.php' ?>   

<?php
        $cd_classe = $_GET['cd'];
        $consulta = $cn->query("select*from tbl_classe where cd_classe='$cd_classe'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        // depois criar tratamento
        ?>
<body class="modalbody">
  <main>

<div class="modalcontainer">
<div class="divlv2">
    <div class="titulo2 fonterpg"><?php echo $exibe['nm_classe'] ?></div> 
    <div class="fonterpg"> <img src = "./img/icon/vida.png" class="img3"><?php echo $exibe['classe_life']?>+<?php echo $exibe['cres_life']?></div>  
    <div class="fonterpg"> <img src = "./img/icon/mana.png" class="img3"><?php echo $exibe['classe_mana']?>+<?php echo $exibe['cres_mana']?></div>
  <div class="textinho">  
  
    <p><?php echo $exibe['ds_classe']; ?></p>
    <div class="container">
    <div class="divlv1">
    <caption>Status</caption>
    <table>
      <tr>
    <th> Status </th>
    <th> Base </th>
    <th> Up+ </th>
    <th>1 Nv </th>
    <th>5 Nv</th>
    <th>10 Nv</th>
    </tr>
    <tr>
      <td><img src = "./img/icon/sword.png" class="img2"></td> 
      <td><?php echo $exibe['classe_for'] ?></td>
      <td>+<?php echo $exibe['cres_for'] ?></td>
      <td><?php $soma1 = $exibe['classe_dex']+ $exibe['cres_dex']; echo $soma1; ?></td>
      <td> <?php $soma = $exibe['classe_for']+ ($exibe['cres_for']*5); echo $soma; ?></td>
      <td> <?php $soma = $exibe['classe_for']+ ($exibe['cres_for']*10); echo $soma; ?></td>
    </tr>

    <tr> 
    <td><img src = "./img/icon/bow.png" class="img2"></td> 
    <td><?php echo $exibe['classe_dex'] ?></td>
    <td>+<?php echo $exibe['cres_dex'] ?></td>
    <td><?php $soma1 = $exibe['classe_dex']+ $exibe['cres_dex']; echo $soma1; ?></td>
    <td><?php $soma1 = $exibe['classe_dex']+ ($exibe['cres_dex']*5); echo $soma1; ?></td>
    <td><?php $soma1 = $exibe['classe_dex']+ ($exibe['cres_dex']*10); echo $soma1; ?></td>
    </tr>

    <tr>
    <td><img src = "./img/icon/magic.png" class="img2"></td> 
    <td><?php echo $exibe['classe_int'] ?></td>
    <td>+<?php echo $exibe['cres_int'] ?></td>
    <td><?php $soma2 = $exibe['classe_int']+ $exibe['cres_int']; echo $soma2; ?></td>
    <td><?php $soma2 = $exibe['classe_int']+ ($exibe['cres_int']*5); echo $soma2; ?></td>
    <td><?php $soma2 = $exibe['classe_int']+ ($exibe['cres_int']*10); echo $soma2; ?></td>
    </tr>

   
    </table>
    </div>
    <div class="divlv2">
    <caption>Resistencias</caption>
    <table>
      <tr>
    <th> Status </th>
    <th> Base </th>
    </tr>
    <tr>
      <td><img src = "./img/icon/shield.png" class="img2"></td> 
      <td><?php echo $exibe['class_res_for'] ?></td>
    </tr>

    <tr> 
    <td><img src = "./img/icon/potion.png" class="img2"></td> 
    <td><?php echo $exibe['class_res_dex'] ?></td>
    </tr>

    <tr>
    <td><img src = "./img/icon/crystal.png" class="img2"></td> 
    <td><?php echo $exibe['class_res_int'] ?></td>
    </tr>
    </table>
    </div>
    </div>

  </div>
</div>
<div class="divlv2">
    <a>oi</a>
  </div>
</div>
</main>
</body>