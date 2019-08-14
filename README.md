# Sobre o programa
Foi feito um programa escrito em linguagem PHP usando MVC como padrão de projeto para uma melhor organização do mesmo, assim ficando dividido em Model, View e Controller. 
Ao todo possui seis telas, no qual foi utilizado Bootstrap como framework de interface, ele está na pasta junto ao projeto.
Como IDE foi utilizado Visual Studio Code.

# Controle de Dispositivos
Com a opção de cadastro, alteração e exclusão de um dispositivo, além de mostrar todos os dispositivos que se encontram no banco de dados. Para isso foi utilizado MySQL.
Integração SSH
Foi utilizado de maneira experimental a biblioteca SSH2. O usuário irá digitar um nome e uma senha, para que seja feito uma validação com o servidor SSH do Hostname selecionado anteriormente.

# Criptografia
São três tipos de criptografia: Cifra de César, AES256 com SALT e IDEA, utilizando OpenSSL. Nessa tela é possível criptografar ou descriptografar um texto com a opção de utilizar um SALT. 
E está disponível um protótipo utilizando AJAX, ainda com alguns BUGS, mas é possível testar.
Comparação de Hashes
O usuário digita um texto, e é feito uma comparação em três hashs: SHA512, HMAC e Haval160,4. Além disso também é possível digitar um quarto tipo de hash, com isso o sistema irá comparar todos, dizendo se esse hash é igual ou diferente de ambos.
