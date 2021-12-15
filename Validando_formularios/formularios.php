<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulários - Douglas V.(2ºInf.)</title>
</head>

<body>
      <div>
            <form action="validando.php" method="POST">
                  <p>Nome: <input type="text" name="nome"></p>
                  <p>Senha: <input type="password" name="pass"></p>
                  <p>Idade: <input type="number" name="idade"></p>
                  <p>Telefone: <input type="tel" name="fone"></p>
                  <p>Email: <input type="email" name="endEmail"></p>
                  <hr>
                  <fieldset>
                        <p>
                              <input type="radio" name="comidaPref" value="Arroz, Feijão e Carne">
                              <label for="comidaPref">Arroz, Feijão e Carne</label>
                        </p>
                        <p>
                              <input type="radio" name="comidaPref" value="Arroz, Macarrão e Carne">
                              <label for="comidaPref">Arroz, Macarrão e Carne</label>
                        </p>
                        <p>
                              <input type="radio" name="comidaPref" value="Baião e Carne">
                              <label for="comidaPref">Baião e Carne</label>
                        </p>
                        <p>
                              <input type="radio" name="comidaPref" value="Baião, Salada e Ovo">
                              <label for="comidaPref">Baião, Salada e Ovo</label>
                        </p>
                  </fieldset>
                  <hr>
                  <fieldset>
                        <p>
                              <input type="checkbox" name="redes">
                              <label for="redes">Redes de Computadores</label>
                        </p>
                        <p>
                              <input type="checkbox" name="javascript">
                              <label for="javascript">Java Script</label>
                        </p>
                        <p>
                              <input type="checkbox" name="java">
                              <label for="java">Programação em Java</label>
                        </p>
                        <p>
                              <input type="checkbox" name="arquitetura">
                              <label for="arquitetura">Arquitetura e Manutenção de PC</label>
                        </p>
                  </fieldset>
                  <hr>
                  <fieldset>
                        <legend>Qual desses carros você compraria?</legend>
                        <label for="cars">Escolha um Carro:</label>
                        <select name="cars">
                              <option value="volvo">Onix Plus</option>
                              <option value="saab">Toro</option>
                              <option value="opel">Corola</option>
                              <option value="audi">Polo</option>
                        </select>
                  </fieldset>
                  <hr>
                  <fieldset>
                        <legend>Em uma escala de 0 a 100, em qual você se encontra quanto a satisfação com o Curso de Informática?</legend>
                        <label for="nota_escala">Valores</label>
                        <input type="range" min="0" max="100" name="nota_escala">
                  </fieldset>
                  <hr>
                  <fieldset>
                        <legend>Qual a data de seu aniversário?</legend>
                        <label for="dia_ani">Quando você comemora seu aniversário?</label>
                        <input type="date">
                  </fieldset>
                  <hr>
                  <fieldset>
                        <legend>Qual o horário que você geralmente vai dormir?</legend>
                        <input type="time" name="mimiu">
                  </fieldset>
                  <hr>
                  <button type="submit">Validar Tudo</button>
            </form>
      </div>
</body>

</html>