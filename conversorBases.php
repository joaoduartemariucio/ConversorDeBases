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
                    <label for="baseNumero"><b>Selecione a baixo a base do número:</b></label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="baseNumero">Opções</label>
                        </div>
                        <select class="custom-select" id="baseNumero" name="baseNumero">
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
                <button class="btn float-right btn-primary" type="submit">Submit</button>
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
        $baseNumero = $_POST['baseNumero']; 

        conversorGeral($numero, $baseNumero);
    }

    //--------HelperMethods---------start-------------------
    function suibstituirLetraPorNumero($letra){
        switch(strtoupper($letra)){
            case "A":
                return 10;
            case "B":
                return 11;
            case "C":
                return 12;
            case "D":
                return 13;
            case "E":
                return 14;
            case "F":
                return 15;
            default:
                return (int)$letra;
        }
    }

    function suibstituirNumeroPorLetra($num){
        switch((int)$num){
            case 10:
                return "A";
            case 11:
                return "B";
            case 12:
                return "C";
            case 13:
                return "D";
            case 14:
                return "E";
            case 15:
                return "F";
            default:
                return $num;
        }
    }

    function converterNumeroParaBase2($number){
        $concatenacaoDosRestos = "";
        $resultParcial = (int)$number;

        for(;$resultParcial > 0;){
            $resto = $resultParcial % (int)2;

            $concatenacaoDosRestos = (int)2 == 16 ? strval(suibstituirNumeroPorLetra($resto)).$concatenacaoDosRestos : strval($resto).$concatenacaoDosRestos;
                    
            $resultParcial = (int)($resultParcial / 2);
        }

        return $concatenacaoDosRestos;
    }

    function converterNumeroParaBase8($number){
        $concatenacaoDosRestos = "";
        $resultParcial = (int)$number;

        for(;$resultParcial > 0;){
            $resto = $resultParcial % (int)8;

            $concatenacaoDosRestos = (int)8 == 16 ? strval(suibstituirNumeroPorLetra($resto)).$concatenacaoDosRestos : strval($resto).$concatenacaoDosRestos;
                    
            $resultParcial = (int)($resultParcial / 8);
        }

        return $concatenacaoDosRestos;
    }

    function converterNumeroParaBase16($number){
        $concatenacaoDosRestos = "";
        $resultParcial = (int)$number;

        for(;$resultParcial > 0;){
            $resto = $resultParcial % (int)16;

            $concatenacaoDosRestos = (int)16 == 16 ? strval(suibstituirNumeroPorLetra($resto)).$concatenacaoDosRestos : strval($resto).$concatenacaoDosRestos;
                    
            $resultParcial = (int)($resultParcial / 16);
        }

        return $concatenacaoDosRestos;
    }

    function baseDezforBaseX($number, $base){
        $concatenacaoDosRestos = "";
        $resultParcial = (int)$number;

        for(;$resultParcial > 0;){
            $resto = $resultParcial % (int)$base;

            $concatenacaoDosRestos = (int)$base == 16 ? strval(suibstituirNumeroPorLetra($resto)).$concatenacaoDosRestos : strval($resto).$concatenacaoDosRestos;
                    
            $resultParcial = (int)($resultParcial / $base);
        }

        return $concatenacaoDosRestos;
    }



function converterQualquerNumeroParaBase10($number, $base){
        $result = 0;
        $exp = 0;
        for($i = strlen(strval($number)) - 1; $i >= 0; $i--, $exp++){
            $numberOfIndex = strval($number[$i]);
            $numberOfIndex = suibstituirLetraPorNumero($numberOfIndex);
            $result+= pow($base, $exp) * (int)$numberOfIndex;
        }

        return $result;
    }

    function conversorGeral($num, $base){
        $numNaBaseDez = 0;
        $result = (object) array();

        if($base == 10)
            $numNaBaseDez = $num;
        else
        $numNaBaseDez = converterQualquerNumeroParaBase10(strval($num), $base);

        $result->binario = converterNumeroParaBase2(strval($numNaBaseDez));;
        $result->octal = converterNumeroParaBase8(strval($numNaBaseDez));
        $result->decimal = $numNaBaseDez;
        $result->hexadecimal = converterNumeroParaBase16(strval($numNaBaseDez));
        
        var_dump($result);
    }