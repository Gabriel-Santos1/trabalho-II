<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Edit</title>
</head>
<body>
<div class="container w-25 mt-5">
        <h1 class="text-center">Editar de Cliente</h1>
        
       <?=d($data);?>
       <div class="input-group mb-3">
                <label class="input-group-text" for="estado">Estado</label>
                <select name="estado" class="form-select" id="estado">
                    <option selected>Selecione um estado</option>

                    <?php foreach ($estados as $estado): ?>
                        <option value="<?= $estado['id'] ?>" <?= isset($user) && $user['estado_id'] == $estado['id'] ? 'selected' : '' ?>>
                            <?= $estado['nome'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="municipio">Município</label>
                <select name="municipio" class="form-select" id="municipio">
                    <option selected>Selecione um município</option>

                </select>
            </div>
</body>
</html>
<script>
        //Cria uma constante chamada BASE_URL
        const BASE_URL = '<?= base_url() ?>';
    </script>
    
    
    <script src="<?= base_url('js/script.js') ?>" defer></script>
