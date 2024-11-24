<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div style="font-weight: bold; padding: 3rem 0; background-color: #263238;font-family:'Open Sans',Arial,Helvetica,sans-serif;">
        <h2 style="color: #fff;text-align: center;margin-bottom: 1rem;">El cliente se quiere contactar:</h2>
        <div style="background-color: #fff;padding: 3rem !important;max-width: 540px;margin: auto;font-family:'Open Sans',Arial,Helvetica,sans-serif;">
            <div style="margin-bottom: 1rem;">
                <label style="color:#263238;font-weight: bold;">Nombre completo:</label>
                <p style="color:#263238;margin-bottom: 0.5rem;padding: 0.5rem 1rem;background-color: #ebf3f5;">
                    {{$datos["nombres"]}}
                </p>
            </div>
            <div style="margin-bottom: 1rem;">
                <label style="color:#263238;font-weight: bold;">Apellido completo:</label>
                <p style="color:#263238;margin-bottom: 0.5rem;padding: 0.5rem 1rem;background-color: #ebf3f5;">
                    {{$datos["apellidos"]}}
                </p>
            </div>
            <div style="margin-bottom: 1rem;">
                <label style="color:#263238;font-weight: bold;">Correo:</label>
                <p style="color:#263238;margin-bottom: 0.5rem;padding: 0.5rem 1rem;background-color: #ebf3f5;">
                    {{$datos["email"]}}
                </p>
            </div>
            <div style="margin-bottom: 1rem;">
                <label style="color:#263238;font-weight: bold;">Teléfono:</label>
                <p style="color:#263238;margin-bottom: 0.5rem;padding: 0.5rem 1rem;background-color: #ebf3f5;">
                    {{$datos["telefono"]}}
                </p>
            </div>
            <div style="margin-bottom: 1rem;">
                <label style="color:#263238;font-weight: bold;">Comentario:</label>
                <p style="color:#263238;margin-bottom: 0.5rem;padding: 0.5rem 1rem;background-color: #ebf3f5;">
                    {{$datos["mensaje"]}}
                </p>
            </div>
        </div>
        <div style="margin-top: 1rem;color: #fff;text-align:center;">
            <small>© {{date("Y")}} PetUnity. Todos los derechos reservados.</small>
        </div>
    </div>
</body>
</html>
