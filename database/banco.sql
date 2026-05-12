CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255)
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT,
    data_limite DATE,
    status ENUM('pendente', 'andamento', 'concluida') DEFAULT 'pendente', -- ENUM limita os valores do texto, so permite (pendente, andamento, concluida)
    -- DEFAUT quando nao informa o status ela inicia como pendente

    usuario_id INT NOT NULL, -- responsavel pela tarefa
    criado_por INT NOT NULL, -- quem criou a tarefa

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- quando foi criado

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (criado_por) REFERENCES usuarios(id)
);