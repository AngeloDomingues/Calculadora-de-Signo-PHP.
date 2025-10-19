# 🪐 Calculadora de Signos do Zodíaco em PHP

Este projeto é uma aplicação web simples desenvolvida em PHP para calcular o signo astrológico de uma pessoa com base em sua data de nascimento. O projeto foi desenvolvido como parte de uma atividade acadêmica para demonstrar o uso de estruturas de controle e manipulação de dados.

## Tecnologias Utilizadas

* **Linguagem:** PHP 8+
* **Servidor:** XAMPP (Apache)
* **Manipulação de Datas:** Classe `DateTime` para criar, formatar e comparar as datas de nascimento e os intervalos de signos.
* **Dados:** `SimpleXML` para carregar as datas de início e fim e as descrições dos signos a partir do arquivo `signos.xml`.
* **Estilização:** Bootstrap 5 para garantir um layout limpo, responsivo e centralizado.

## Destaques do Código

* **Lógica de Virada de Ano:** O código inclui tratamento específico para signos que atravessam a virada do ano (como Capricórnio), garantindo que a data de nascimento seja comparada corretamente em dois intervalos (ex: Dezembro OU Janeiro).
* **Validação de Dados:** Uso de `DateTime::createFromFormat` para garantir a correta leitura das datas fornecidas pelo usuário.

## Como Executar

1.  Clone o repositório para o diretório `htdocs` do seu XAMPP.
2.  Inicie os serviços Apache.
3.  Acesse `http://localhost/NomeDaSuaPasta/layouts/index.php` no navegador.
