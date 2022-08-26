<?php

class Util {

    // esta fun??o formata para o bd

    public function formatoDataYMD($data) {

        $data_arr = explode("/", $data);

        $datac = $data_arr[2] . '-' . $data_arr[1] . '-' . $data_arr[0];

        return $datac;
    }

    // esta fun??o formata para exibir no view

    public function formatoDataDMY($data) {

        $data_arr = explode("-", $data);

        $datad = $data_arr[2] . '/' . $data_arr[1] . '/' . $data_arr[0];

        return $datad;
    }

    // converte para real
/*
    public function virgula($valor) {

        $conta = strlen($valor);

        switch ($conta) {

            case "1":

                $retorna = "0,0$valor";

                break;

            case "2":

                $retorna = "0,$valor";

                break;

            case "3":

                $d1 = substr("$valor", 0, 1);

                $d2 = substr("$valor", -2, 2);

                $retorna = "$d1,$d2";

                break;

            case "4":

                $d1 = substr("$valor", 0, 2);

                $d2 = substr("$valor", -2, 2);

                $retorna = "$d1,$d2";

                break;

            case "5":

                $d1 = substr("$valor", 0, 3);

                $d2 = substr("$valor", -2, 2);

                $retorna = "$d1,$d2";

                break;

            case "6":

                $d1 = substr("$valor", 1, 3);

                $d2 = substr("$valor", -2, 2);

                $d3 = substr("$valor", 0, 1);

                $retorna = "$d3.$d1,$d2";

                break;

            case "7":

                $d1 = substr("$valor", 2, 3);

                $d2 = substr("$valor", -2, 2);

                $d3 = substr("$valor", 0, 2);

                $retorna = "$d3.$d1,$d2";

                break;

            case "8":

                $d1 = substr("$valor", 3, 3);

                $d2 = substr("$valor", -2, 2);

                $d3 = substr("$valor", 0, 3);

                $retorna = "$d3.$d1,$d2";

                break;
        }

        return $retorna;
    }

    public function trataDataExtenso($data) {



        $data_arr = explode("-", $data);



        // leitura das datas

        $dia = $data_arr[2];

        $mes = $data_arr[1];

        $ano = $data_arr[0];

        //$semana = date('w');
        // configura??o mes



        switch ($mes) {



            case 1: $mes = "Janeiro";
                break;

            case 2: $mes = "Fevereiro";
                break;

            case 3: $mes = "Mar?o";
                break;

            case 4: $mes = "Abril";
                break;

            case 5: $mes = "Maio";
                break;

            case 6: $mes = "Junho";
                break;

            case 7: $mes = "Julho";
                break;

            case 8: $mes = "Agosto";
                break;

            case 9: $mes = "Setembro";
                break;

            case 10: $mes = "Outubro";
                break;

            case 11: $mes = "Novembro";
                break;

            case 12: $mes = "Dezembro";
                break;
        }





        // configura??o semana



        switch ($semana) {



            case 0: $semana = "DOMINGO";
                break;

            case 1: $semana = "SEGUNDA FEIRA";
                break;

            case 2: $semana = "TER?A-FEIRA";
                break;

            case 3: $semana = "QUARTA-FEIRA";
                break;

            case 4: $semana = "QUINTA-FEIRA";
                break;

            case 5: $semana = "SEXTA-FEIRA";
                break;

            case 6: $semana = "S?BADO";
                break;
        }

        //Agora basta imprimir na tela...
        //print ("$semana, $dia DE $mes DE $ano");



        $data = $dia . ' de ' . $mes . ' de ' . $ano;







        return $data;
    }

    //retorna o intervalo em dias

    public function Intervalo_data($data_inicio, $data_termino) {



        //data inicicial

        $data_arr = explode("-", $data_inicio);

        $datac = $data_arr[2] . '-' . $data_arr[1] . '-' . $data_arr[0];



        $d = $data_arr[2];

        $m = $data_arr[1];

        $A = $data_arr[0];





        $data_arr2 = explode("-", $data_termino);

        $d2 = $data_arr2[2];

        $m2 = $data_arr2[1];

        $A2 = $data_arr2[0];





        $diaI = $d;

        $mesI = $m;

        $anoI = $A;



        $diaF = $d2;

        $mesF = $m2;

        $anoF = $A2;



        $dataI = $A . "/" . $m . "/" . $d;

        $dataF = $A2 . "/" . $m2 . "/" . $d2;



        $secI = strtotime($dataI);

        $secF = strtotime($dataF);



        $intervalo = $secF - $secI;



        $dias = $intervalo / 3600 / 24;



        return $dias;
    }

    public function anuenio($dias) {



        $quantidadeAnos = $dias / 365;

        return $quantidadeAnos;
    }

    public function trienio($dias) {



        $quantidadeAnos = $dias / (365 * 3);

        return $quantidadeAnos;
    }
*/
    public function msgbox($msn) {



        echo '<script>alert("' . $msn . '");</script>';

       
            
    }

    public function redirecionamentopage($caminho) {



        echo '<script>window.location="' . $caminho . '";</script>';
    }

    public function MsgboxSimNaoNovoCad($msn, $caminhopagesim, $caminhopagenao) {

        //$d='default.php?pg=view/home/home.php';

        echo '<script>

						

						if (confirm("' . $msn . '")){

							window.location="' . $caminhopagesim . '";

						}else{

							window.location="' . $caminhopagenao . '";

						}

						</script>';
    }

    public function Seguranca($idusuario, $caminhopage) {



        if ($idusuario == '') {

            echo '<script>window.location="' . $caminhopage . '";</script>';
        }
    }
/*
    public function dias_mes($mes, $ano) {



        if (fmod($ano, 4) == 0) {

            $dias[2] = 28;
        } else {

            $dias[2] = 29;
        }

        $dias[1] = 31;

        $dias[3] = 31;

        $dias[4] = 30;

        $dias[5] = 31;

        $dias[6] = 30;

        $dias[7] = 31;

        $dias[8] = 31;

        $dias[9] = 30;

        $dias[10] = 31;

        $dias[11] = 30;

        $dias[12] = 31;

        return $dias[$mes];
    }

    public function mes_extenso($nmes) {

        $meses[01] = "Janeiro";

        $meses[02] = "Fevereiro";

        $meses[03] = "Mar?o";

        $meses[04] = "Abril";

        $meses[05] = "Maio";

        $meses[06] = "Junho";

        $meses[07] = "Julho";

        $meses[08] = "Agosto";

        $meses[09] = "Setembro";

        $meses[10] = "Outubro";

        $meses[11] = "Novembro";

        $meses[12] = "Dezembro";

        return $meses[$nmes];
    }

    public function codigoRadomico() {

        $aux = time();
        $codigo = date('Ymd') . "_" . date('his') . "_" . substr(md5($aux), 0, 7);

        return $codigo;
    }

    public function anti_injection($sql) {
// remove palavras que contenham sintaxe sql
        $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
        $sql = trim($sql); //limpa espaços vazio
        $sql = strip_tags($sql); //tira tags html e php
        $sql = addslashes($sql); //Adiciona barras invertidas a uma string
        return $sql;
    }

    // ---------------------------------------------Métodos de mensagens em css---------------------- 

    public function msgSucess($msn) {

        $alert = "<div class = \"alert alert-success\">
        <button class = \"close\" data-dismiss = \"alert\">&times;
        </button>
        <strong>Sucesso!</strong>$msg</div>";

        return $alert;
    }

    public function diaSemanaExtenso($data) {
        $ano = substr("$data", 0, 4);
        $mes = substr("$data", 5, -3);
        $dia = substr("$data", 8, 9);

        $diasemana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));

        switch ($diasemana) {
            case"0": $diasemana = "Domingo";
                break;
            case"1": $diasemana = "Segunda-Feira";
                break;
            case"2": $diasemana = "Terça-Feira";
                break;
            case"3": $diasemana = "Quarta-Feira";
                break;
            case"4": $diasemana = "Quinta-Feira";
                break;
            case"5": $diasemana = "Sexta-Feira";
                break;
            case"6": $diasemana = "Sábado";
                break;
        }

        return "$diasemana";
    }

    public function diaSemanaAbreviado($data) {
        $ano = $this->obterAno($data);
        $mes = $this->obterMes($data);
        $dia = $this->obterDia($data);

        $diasemana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));

        switch ($diasemana) {
            case"0": $diasemana = "DOM";
                break;
            case"1": $diasemana = "SEG";
                break;
            case"2": $diasemana = "TER";
                break;
            case"3": $diasemana = "QUA";
                break;
            case"4": $diasemana = "QUI";
                break;
            case"5": $diasemana = "SEX";
                break;
            case"6": $diasemana = "SAB";
                break;
        }

        return $diasemana;
    }

    public function diaSemanaAbreviadoIndice($indice) {


        switch ($indice) {
            case"0": $indice = "DOM";
                break;
            case"1": $indice = "SEG";
                break;
            case"2": $indice = "TER";
                break;
            case"3": $indice = "QUA";
                break;
            case"4": $indice = "QUI";
                break;
            case"5": $indice = "SEX";
                break;
            case"6": $indice = "SAB";
                break;
        }

        return $indice;
    }

    public function ultimoDia($ano, $mes) {
        if (((fmod($ano, 4) == 0) && ( fmod($ano, 100) != 0)) || ( fmod($ano, 400) == 0)) {
            $dias_fevereiro = 29;
        } else {
            $dias_fevereiro = 28;
        }
        switch ($mes) {
            case 01: return 31;
                break;
            case 02: return $dias_fevereiro;
                break;
            case 03: return 31;
                break;
            case 04: return 30;
                break;
            case 05: return 31;
                break;
            case 06: return 30;
                break;
            case 07: return 31;
                break;
            case 08: return 31;
                break;
            case 09: return 30;
                break;
            case 10: return 31;
                break;
            case 11: return 30;
                break;
            case 12: return 31;
                break;
        }
    }

    public function obterMes($data) {

        $array = explode('-', $data);
        $ano = $array[0];
        $mes = $array[1];
        $dia = $array[2];

        return $mes;
    }

    public function obterAno($data) {

        $array = explode('-', $data);
        $ano = $array[0];
        $mes = $array[1];
        $dia = $array[2];

        return $ano;
    }

    public function obterDia($data) {

        $array = explode('-', $data);
        $ano = $array[0];
        $mes = $array[1];
        $dia = $array[2];

        return $dia;
    }

    public function obterDiasFeriado($ano = null) {
        if ($ano === null) {
            $ano = intval(date('Y'));
        }

        $pascoa = easter_date($ano); // Limite de 1970 ou após 2037 da easter_date PHP consulta http://www.php.net/manual/pt_BR/function.easter-date.php
        $dia_pascoa = date('j', $pascoa);
        $mes_pascoa = date('n', $pascoa);
        $ano_pascoa = date('Y', $pascoa);

        $feriados = array(
            // Tatas Fixas dos feriados Nacionail Basileiras
            mktime(0, 0, 0, 1, 1, $ano), // Confraternização Universal - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 4, 21, $ano), // Tiradentes - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 5, 1, $ano), // Dia do Trabalhador - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 9, 7, $ano), // Dia da Independência - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 10, 12, $ano), // N. S. Aparecida - Lei nº 6802, de 30/06/80
            mktime(0, 0, 0, 11, 2, $ano), // Todos os santos - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 11, 15, $ano), // Proclamação da republica - Lei nº 662, de 06/04/49
            mktime(0, 0, 0, 12, 25, $ano), // Natal - Lei nº 662, de 06/04/49
            // These days have a date depending on easter
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa - 48, $ano_pascoa), //2ºferia Carnaval
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa - 47, $ano_pascoa), //3ºferia Carnaval
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa - 2, $ano_pascoa), //6ºfeira Santa
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa, $ano_pascoa), //Pascoa
            mktime(0, 0, 0, $mes_pascoa, $dia_pascoa + 60, $ano_pascoa), //Corpus Cirist
        );

        sort($feriados);
        return $feriados;
    }

    public function obterIdade($nascimento) {

        // Separa em dia, mês e ano
        list($dia, $mes, $ano) = explode('/', $nascimento);

        // Descobre que dia é hoje e retorna a unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

        // Depois apenas fazemos o cálculo já citado :)
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
        return($idade);
    }

    public function verificarDataFeriado($data) {
        $ano = $this->obterAno($data);

        foreach ($this->obterDiasFeriado($ano) as $a) {
            if ($data == date("Y-m-d", $a)) {
                $feriado = 1;
            }
        }

        return $feriado;
    }
*/



        public function  msgboxNovo($msn){


            echo "<div class='content-wrapper'> 
              <section class='content-header'>
                <h1>
                    MATRÍCULAS:
                    <small>Informação</small>
                </h1>
                
              </section>
              <section class='content'>
                <div class='container-fluid'>
                  <div class='box box-danger'>
                    <div class='box-body'>   
                      <div class='box-danger'>
                        <center>
                          <h1>
                            <img src='img/matricula_mais_p.webp'><BR/>".  $msn ." 
                          <br>
                          <h3><a   class='btn btn-xs btn-info hidden-xs btn-danger' type='button' href='default.php?pg=dmlldy9wdWJsaWNvL3BhaW5lbC5waHA='>RETORNAR</a></h3>
                        </h1>
                       </center>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>"; exit('');die();
        }  

}

?>
			