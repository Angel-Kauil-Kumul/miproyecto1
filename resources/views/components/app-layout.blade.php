<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Qwitcher Grypen&display=swap" rel="stylesheet">
<style>
  .titulo{ font-family: 'Qwitcher Grypen';font-weight: 50px; }
  .contenido { font-family: "Updock"; src: url("fuentes/Updock-Regular.ttf") format("truetype"); }
</style>
</head>
<body>
  <header>Cabecera desde componente</header>
      inicia-view
       {{$slot}}    
      termina-view
  <footer>Pié de página desde componente</footer> 
</body>
</html>