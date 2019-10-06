<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Conversor de bases</title>
    </head>
    <body>
      <div class="card" style="margin: 25px;">
        <h5 class="card-header"><b>Conversor de Bases</b></h5>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="baseSelecionada"><b>Selecione a baixo a base do número:</b></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="baseSelecionada">Opções</label>
                        </div>
                        <select class="custom-select" id="baseSelecionada" name="baseSelecionada">
                            <option value="0" selected>Selecione...</option>
                            <option value="2">2</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="16">16</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numero"><b>Insira um número no campo abaixo:</b></label>
                    <input class="form-control" id="numero" name="numero" aria-describedby="emailHelp" placeholder="Digite aqui o numero">
                    <small id="emailHelp" class="form-text text-muted">Neste campo você deve informar um número referente a base que você selecionou.</small>
                </div>
                <button class="btn float-right btn-primary" type="submit">Converter</button>
            </form>
        </div>
      </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    if($_POST){
        $numero = $_POST['numero'];
        $baseSelecionada = $_POST['baseSelecionada'];
    }