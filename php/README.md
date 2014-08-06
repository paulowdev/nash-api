Pré-requisitos
    1. PHP 5.1.6 ou superior
    2. Módulo php "php_sockets" habilitado.
    3. Módulo php "php_openssl" habilitado.
    4. Módulo php "php_mbstring" habilitado. Somente para versões do PHP anteriores à 5.2.

A pasta "exemplos" demonstra como a API pode ser utilizada.

As URLs do serviço são as seguintes:
	1. Ambiente de Testes: https://srvaramis/nash
	2. Produção: https://nash.fortesinformatica.com.br

Versão: 20140806100245
    As seguintes alterações foram feitas:
        1. Todos os CRUDs passam a retornar somente o Id do objeto quando houver uma inserção ou atualização e não mais o objeto complexo.
        2. Entidade "Municipio" passa a aceitar para a propriedade UF tanto uma string com o nome da UF quanto um objeto do tipo UF. Esse comportamento deve ser utilizado somente para leitura.
        3. Entidade Participante passa a aceitar para a propriedade Municipio tanto uma string com o nome do município quanto um objeto do tipo Municipio. Esse comportamento deve ser utilizado somente para leitura.
        4. Entidade UnidadeNegocio passa a aceitar para a propriedade Municipio tanto uma string com o nome do município quanto um objeto do tipo Municipio. Esse comportamento deve ser utilizado somente para leitura.

Versão: 20140625164130
    Foi feita a adaptação da API para a nova versão do sistema Nash que passa a executar com o Entity Framework.
    
Versão: 20140610152634
    Foi liberada a seguinte correção:
        1. Compatibilização dos serviços de Contas A Receber com a versão 5.1.6 do PHP.

Versão: 20140523180811
    O seguinte serviço foi adicionado:
        1. Possibilidade de edição de Contas A Receber

Versão: 20140502144715
    Os seguintes ajustes foram feitos:
        1. Preenchimento do campo RetemISS do cadastro do cliente deixa de ser booleano e passa a receber um valor enumerável. O nome do campo também foi alterado para RetencaoISS.

Versão: 20140324093505
    Os seguintes serviços foram adicionados:
        1. Suporte ao protocolo HTTPS.

Versão: 20140320105315
    Os seguintes serviços foram adicionados:
        1. CRUD de Unidade de Negócio
        2. CRUD de Serviços
        3. CRUD de Contas a Receber
        4. Outros CRUDs relacionados ao Contas a Receber

Versão: 20140108104937
	Os seguintes serviços, todos necessários para o cadastro de cliente, estão disponíveis nesta versão:
		1. Consulta de Município

		2. Consulta de Contas do Plano de contas
		2.1. Necessário, pois o cliente deve ter uma conta associada que é utilizada para gerar lançamentos contábeis.

		3. Consulta de Configurações da Empresa
		3.1. Esse serviço foi disponibilizado devido a existência de uma configuração de conta padrão a ser utilizado no cadastro de cliente. Se a Atratis desejar utilizar essa configuração, esse serviço poderá ser utilizado.

		4. CRUD de Cliente.

Plugin TeamCity:
    - https://github.com/badoo/phpunit-testlistener-teamcity
