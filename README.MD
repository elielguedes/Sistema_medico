## 📊 Diagrama ER - Modelagem de Dados

```mermaid
erDiagram
    USUARIOS ||--o{ SERVICOS : "cria"
    CLIENTES ||--o{ AGENDAMENTO : "agenda"
    SERVICOS ||--o{ AGENDAMENTO : "inclui"
    AGENDAMENTO ||--o{ PAGAMENTO : "paga"

    USUARIOS {
        int id_usuario PK
        string nome
        string email
        string senha
        int telefone
    }
    CLIENTES {
        int id PK
        string nome
        string email
        string senha
        string cpf
    }
    SERVICOS {
        int id_servico PK
        string receita_medica
        string consulta
        string cirurgia
    }
    AGENDAMENTO {
        int id PK
        int cliente_id FK
        int servico_id FK
        int pagamento_id FK
        date data
    }
    PAGAMENTO {
        int id_pagamento PK
        int agendamento_id FK
        string forma_pagamento
        string status
    }
}
