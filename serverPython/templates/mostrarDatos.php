<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Datos de la Base de Datos</h1>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Departamento</th>
            <th scope="col">Grupo</th>
            <th scope="col">Carrera</th>
            <th scope="col">Dependencia</th>
            
        </tr>
        </thead>
        <tbody>
        {% for dato in datos %}
       
        <tr>
            <td>{{ dato[0] }}</td>
            <td>{{ dato[1] }}</td>
            <td>{{ dato[2] }}</td>
            <td>{{ dato[3] }}</td>
            <td>{{ dato[4] }}</td>
            <td>{{ dato[5] }}</td>
        </tr>
        {% endfor %}
            </tbody>
        </table>
    </div>
</body>
</html>
