##Pré-requisitos
    1. PHP 5.1.6 ou superior
    2. Módulo php "php_sockets" habilitado.
    3. Módulo php "php_openssl" habilitado.

A pasta "exemplos" demonstra como a API pode ser utilizada.

###As URLs do serviço são as seguintes:
    1. Ambiente de Testes: https://srvaramis/nash
    2. Produção: https://nash.fortesinformatica.com.br

###Versão: 20140108104937
    Os seguintes serviços, todos necessários para o cadastro de cliente, estão disponíveis nesta versão:
        1. Consulta de Município
        2. Consulta de Contas do Plano de contas
            2.1. Necessário, pois o cliente deve ter uma conta associada que é utilizada para gerar lançamentos contábeis.
        3. Consulta de Configurações da Empresa
            3.1. Esse serviço foi disponibilizado devido a existência de uma configuração de conta padrão a ser utilizado no cadastro de cliente. Se a Atratis desejar utilizar essa configuração, esse serviço poderá ser utilizado.
        4. CRUD de Cliente.

###Versão: 20140320105315
    Os seguintes serviços foram adicionados:
        1. CRUD de Unidade de Negócio
        2. CRUD de Serviços
        3. CRUD de Contas a Receber
        4. Outros CRUDs relacionados ao Contas a Receber

###Versão: 20140324093505
    Os seguintes serviços foram adicionados:
        1. Suporte ao protocolo HTTPS.

####Plugin TeamCity:
    - https://github.com/badoo/phpunit-testlistener-teamcity
