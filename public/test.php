<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <link href="http://127.0.0.1:8000/gentelella-master/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
</head>
<body>
     <div>
        <span>Nom:</span>
        <select name="n" id="nom" style="width:200px">
            <option></option>
            <option value="jbjrv">Ajug</option>
            <option value="jbjrv">Bolos d</option>
            <option value="jbjrv">Carina d</option>
            <option value="jbjrv">Dangote d</option>
        </select>
     </div>
       

    <script src="http://127.0.0.1:8000/gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/gentelella-master/vendors/select2/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $("#nom").select2({
            placeholder:'Selectionnez le produit',
            allowClear:true
        });    
    </script>
</body>
</html>