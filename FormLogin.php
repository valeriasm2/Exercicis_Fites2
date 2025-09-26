<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login simple</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <style>
            body{
                font-family:Arial;
                margin:40px;
                background:#f7f9fc
            }
            .c {
                max-width:360px;
                margin:0 auto;
                background:#fff;
                padding:18px;
                border-radius:8px;
                box-shadow:0 6px 18px rgba(0,0,0,.06)
            }
            label {
                display:block;
                margin-top:10px;
                font-weight:600
            }
            input {
                width:100%;
                padding:8px;
                margin-top:6px;
                border:1px solid #ccd;
                border-radius:6px;
                box-sizing:border-box
            }
            button {margin-top:12px;width:100%;padding:9px;
                background:#0b5ed7;
                color:#fff;
                border:0;
                border-radius:6px;
                cursor:pointer
            }
            .ok {
                background:#e6fffb;
                border:1px solid #bff; 
                padding:8px;
                border-radius:6px;
                margin-bottom:8px
            }
            .err {
                background:#fff4f4;
                border:1px solid #fbb;
                padding:8px;
                border-radius:6px;
                margin-bottom:8px
            }
        </style>
    </head>
    <body>
        <div class="c">
            <h3>Iniciar sesión</h3>

            <?php
            // Diccionario hardcoded (usuario => contraseña)
            $users = [
            'admin' => 'secreto123',
            'eva' => 'clave456',
            'ana' => 'hola789'
            ];

            $msg = '';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $u = isset($_POST['user']) ? trim($_POST['user']) : '';
            $p = isset($_POST['pass']) ? $_POST['pass'] : '';

            // Comprobación segura: no divulgamos si falla usuario o contraseña
            if ($u !== '' && $p !== '' && array_key_exists($u, $users) &&
            $users[$u] === $p) {
            $msg = '<div class="ok">Login correcte!</div>';
            } else {
            $msg = '<div class="err">Login incorrecte. Usuari o contrasenya no
                vàlids.</div>';
            }

            // eliminar contraseña de memoria (buena práctica)
            $p = null;
            unset($_POST['pass']);
            }

            // mostrar mensaje (si existe)
            echo $msg;
            ?>

            <form method="post" action>
                <label for="user">Usuari</label>
                <input id="user" name="user" type="text" required
                    autocomplete="username">

                <label for="pass">Contrasenya</label>
                <input id="pass" name="pass" type="password" required
                    autocomplete="current-password">

                <button type="submit">Entrar</button>
            </form>
        </div>
    </body>
</html>
