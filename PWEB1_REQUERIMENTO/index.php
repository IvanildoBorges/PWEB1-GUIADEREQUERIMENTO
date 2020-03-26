<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Requerimento</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <?php
        if(isset($_GET['msg']) == "n"){
            echo "Campo de requerente nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg1']) == "m"){
            echo "Campo de matricula nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg2']) == "d"){
            echo "Campo data de nascimento nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg3']) == "nt"){
            echo "Campo naturalidade nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg4']) == "f"){
            echo "Campo filiação nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg5']) == "c"){
            echo "Campo curso nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg6']) == "p"){
            echo "Campo periodo nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg7']) == "t"){
            echo "Campo turno nao pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg8']) == "tl"){
            echo "Ao menos um campo de telefone nao pode ficar vazio!<br>";
        }
        
    ?>

    <fieldset id="papel">
        <form action="requerimento.php" method="POST">
            <div id="parte1">
                <img src="files\ifce.png" id="img1" alt="Logo IFCE" title="Logo IFCE-Cedro">
                <label for="guia" id="titulo">GUIA DE REQUERIMENTO</label><br>
                <img src="files\linha.jpg" id="img2" alt="Barra horizontal" title="barra"><br>
                <label for="campo1" id="zero">Protocolo n.º</label>
                <input type="number" name="campo1" id="um" readonly="readonly">
            </div>

            <fieldset id="papel2">
                <div id="parte2">
                    <label for="campo2" id="requerente">REQUERENTE: </label>
                    <input type="text" name="campo2" id="dois">
                    <label for="campo3">Nº DE MATRÍCULA: </label>
                    <input type="number" name="campo3" id="tres"><br>

                    <fieldset id="parte2-1">
                        <legend id="quatro">PREENCHER </legend>
                        <label for="campo4">DATA DE NASCIMENTO: </label>
                        <input type="date" name="campo4" id="cinco">
                        <label for="campo5">NATURALIDADE: </label>
                        <input type="text" name="campo5" id="seis">
                        <label for="campo6">FILIAÇÃO: </label>
                        <input type="text" name="campo6" id="sete"><br>
                        <div id="parte2-1-1">
                            <label for="campo7">CURSO: </label>
                            <input type="text" name="campo7" id="oito">
                            <label for="campo8">PERÍODO: </label>
                            <input type="number" name="campo8" id="nove" min="1" max="8">
                            <label for="campo9">TURNO: </label>
                            <input type="text" name="campo9" id="dez">
                            <label for="campo10">TELEFONE 1: </label>
                            <input type="tel" name="campo10" id="onze" placeholder="(99) 9.9999-9999"><br>
                            <label for="campo11">TELEFONE 2: </label>
                            <input type="tel" name="campo11" id="onze-meio" placeholder="(99) 9.9999-9999"><br>
                            <label for="campo12">EMAIL: </label>
                            <input type="email" name="campo12" id="doze">
                        </div>
                    </fieldset>

                    <fieldset id="parte2-2">
                        <legend>ASSINALE</legend>
                        <div id="parte2-2-1">
                            <table id="t1">
                                <tr>
                                    <td><input type="radio" name="opc1" value="1" id="treze"></td>
                                    <td><label for="opc1">2º Via (especificar)</label></td>
                                    <td><label for="opc1">CCA</label></td>                                  
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="2" id="quatorze"></td>
                                    <td><label for="opc1">Aproveitamento de Disciplina (anexar Histórico Escolar e Programa da Disciplina)</label></td>
                                    <td><label for="opc1">Coordenação de Curso</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="3" id="quinze"></td>
                                    <td><label for="opc1">Matrícula fora do prazo (justificar)</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="4" id="dezesseis"></td>
                                    <td><label for="opc1">Cancelamento da Matrícula</label></td>
                                    <td>CCA</td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="5" id="dezessete"></td>
                                    <td>Colação de Grau/Colação Especial (justificar)</td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="6" id="dezoito"></td>
                                    <td><label for="opc1">Declaração (especificar)</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>
                                    
                                <tr>
                                    <td><input type="radio" name="opc1" value="7" id="dezenove"></td>
                                    <td><label for="opc1">Diploma (especificar)</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="8" id="vinte"></td>
                                    <td><label for="opc1">Histórico Escolar</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="9" id="vinteeum"></td>
                                    <td><label for="opc1">Reabertura de Matrícula</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="10" id="vinteedois"></td>
                                    <td><label for="opc1">Segunda Chamada (anexar justificativa e especificar)</label></td>
                                    <td><label for="opc1">Coordenação do Curso</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="11" id="vinteetres"></td>
                                    <td><label for="opc1">Reingresso</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="12" id="vinteequatro"></td>
                                    <td><label for="opc1">Trancamento de Disciplina (especificar)</label></td>
                                    <td><label for="opc1">Coordenação dos Cursos</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="13" id="vinteecinco"></td>
                                    <td><label for="opc1">Trancamento de Matrícula (anexar documentação comprobatória)</label></td>
                                    <td><label for="opc1">Coordenação Pedagógica</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="14" id="vinteeseis"></td>
                                    <td><label for="opc1">Transferência para outra instituição</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="15" id="vinteesete"></td>
                                    <td><label for="opc1">Validação de Conhecimento (especificar)</label></td>
                                    <td><label for="opc1">Coordenação do Curso</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="16" id="vinteeoito"></td>
                                    <td><label for="opc1">Reajuste</label></td>
                                    <td><label for="opc1">CCA</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="17" id="vinteenove"></td>
                                    <td><label for="opc1">Recorreção de Prova</label></td>
                                    <td><label for="opc1">Coordenação do Curso</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="18" id="trinta"></td>
                                    <td><label for="opc1">AUXÍLIO - Transporte</label></td>
                                    <td><label for="opc1">Serviço Social</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="19" id="trintaeum"></td>
                                    <td><label for="opc1">AUXÍLIO - Moradia</label></td>
                                    <td><label for="opc1">Serviço Social</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="20" id="trintaedois"></td>
                                    <td><label for="opc1">AUXÍLIO - Óculos</label></td>
                                    <td><label for="opc1">Serviço Social</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="21" id="trintaetres"></td>
                                    <td><label for="opc1">AUXÍLIO - Pais e Mães</label></td>
                                    <td><label for="opc1">Serviço Social</label></td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="opc1" value="22" id="trintaequatro"></td>
                                    <td><label for="opc1">Outros (especificar)</label></td>
                                    <td><label for="opc1"></label></td>
                                </tr>
                            </table>

                            <br>
                            
                            <label for="especificar">Especificar: </label><br>
                            <input type="text" name="especificar" id="campo13"><br>

                            <br>

                            <label for="justificar">justificar: </label><br>
                            <input type="text" name="justificar" id="campo14">
                        </div>
                    </fieldset>

                    <h5>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</h5>
                    
                    <label for="requerente" id="l1">REQUERENTE (ASS. LEGÍVEL): </label>
                    <input type="text" name="requerente" id="campo15">

                    <label for="funcionario" id="l2">FUNCIONÁRIO (ASS. LEGÍVEL): </label>
                    <input type="text" name="funcionario" id="campo16">

                    <label for="data" id="l3">CEDRO-CE, </label>
                    <input type="date" name="data" id="campo17" readonly="readonly"><br>

                    <div class="visto1">
                        <div class="b2">
                            <label for="opc2">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</label>
                        </div>
                        <input type="radio" name="opc2" id="campo18" value="nao"> 
                        <label for="opc2">O requerente NÃO deve chave de armário</label><br>
                        <input type="radio" name="opc2" id="campo19" value="deve"> 
                        <label for="descricao">O requerente deve chave do armário: </label><br>
                        <input type="text" name="descricao" class="d1">
                        <div class="b2">
                            <input type="text" name="assinatura1" class="d2"><br>
                            <label for="assinatura1">Responsável (ass. Legível)</label>
                        </div>
                    </div>

                    <div class="visto1">
                        <div class="b2">
                            <label for="opc3">VISTO (BIBLIOTECA)</label>
                        </div>
                        <input type="radio" name="opc3" id="campo21" value="nao"> 
                        <label for="opc3">O requerente NÃO deve livros na biblioteca</label><br>
                        <input type="radio" name="opc3" id="campo22" value="deve"> 
                        <label for="descricao2">O requerente deve livros na biblioteca: </label><br>
                        <input type="text" name="descricao2" class="d1">
                        <div class="b2">
                            <input type="text" name="assinatura2" class="d2"><br>
                            <label for="assinatura2">Responsável (ass. Legível)</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <input type="submit" value="Enviar" id="enviar">
        </form>
    </fieldset>
</body>
</html>