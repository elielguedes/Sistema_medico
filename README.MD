```mermaid
erDiagram
    USUARIOS ||--o{ AGENDAMENTOS : "cria"
    CLIENTES ||--o{ AGENDAMENTOS : "possui"
    SERVICOS ||--o{ AGENDAMENTOS : "é_agendado_em"
    AGENDAMENTOS ||--o| PAGAMENTOS : "gera"

    USUARIOS {
        int id PK
        string nome
        string email
        string senha
        string perfil
        boolean ativo
    }

    CLIENTES {
        int id PK
        string nome
        string email
        string telefone
        string cpf
        boolean ativo
    }

    SERVICOS {
        int id PK
        string nome
        string descricao
        decimal preco
        int duracao_min
        boolean ativo
    }

    AGENDAMENTOS {
        int id PK
        int usuario_id FK
        int cliente_id FK
        int servico_id FK
        date data
        time hora_inicio
        time hora_fim
        string status
        string observacoes
    }

    PAGAMENTOS {
        int id PK
        int agendamento_id FK
        decimal valor
        string forma_pagamento
        string status
        datetime data_pagamento
    }

