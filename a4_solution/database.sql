-- --------------------------------------------------------
-- Arquivo de Exportação do Banco de Dados
-- Sistema: A4 Gestão de Tarefas
-- Autor: Daniel
-- Disciplina: Técnicas de Desenvolvimento de Algoritmos
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS sis_tarefas;
USE sis_tarefas;

--
-- Estrutura da tabela 'projeto'
--
CREATE TABLE IF NOT EXISTS projeto (
  id_projeto INT AUTO_INCREMENT PRIMARY KEY,
  nome_projeto VARCHAR(45) NOT NULL,
  data_inicio DATE,
  descricao TEXT
);

--
-- Estrutura da tabela 'categoria'
--
CREATE TABLE IF NOT EXISTS categoria (
  id_categoria INT AUTO_INCREMENT PRIMARY KEY,
  nome_categoria VARCHAR(45) NOT NULL,
  projeto_id_projeto INT NOT NULL,
  FOREIGN KEY (projeto_id_projeto) REFERENCES projeto(id_projeto)
);

--
-- Estrutura da tabela 'usuario'
--
CREATE TABLE IF NOT EXISTS usuario (
  id_usuario INT AUTO_INCREMENT PRIMARY KEY,
  nome_usuario VARCHAR(45) NOT NULL,
  email_usuario VARCHAR(45),
  telefone_usuario VARCHAR(20)
);

--
-- Estrutura da tabela 'responsavel'
--
CREATE TABLE IF NOT EXISTS responsavel (
  id_responsavel INT AUTO_INCREMENT PRIMARY KEY,
  nome_responsavel VARCHAR(45) NOT NULL,
  cargo_responsavel VARCHAR(45)
);

--
-- Estrutura da tabela 'tarefa'
--
CREATE TABLE IF NOT EXISTS tarefa (
  id_tarefa INT AUTO_INCREMENT PRIMARY KEY,
  titulo_tarefa VARCHAR(100) NOT NULL,
  descricao_tarefa TEXT,
  prazo_tarefa DATE,
  status_tarefa VARCHAR(20) NOT NULL DEFAULT 'Pendente',
  
  -- Chaves Estrangeiras
  usuario_id_usuario INT NOT NULL,
  responsavel_id_responsavel INT NOT NULL,
  categoria_id_categoria INT NOT NULL,
  
  FOREIGN KEY (usuario_id_usuario) REFERENCES usuario(id_usuario),
  FOREIGN KEY (responsavel_id_responsavel) REFERENCES responsavel(id_responsavel),
  FOREIGN KEY (categoria_id_categoria) REFERENCES categoria(id_categoria)
);

--
-- Inserção de Dados Iniciais (Opcional - Para teste)
--
INSERT INTO projeto (nome_projeto, data_inicio, descricao) VALUES ('Sistema Web', NOW(), 'Desenvolvimento do sistema de tarefas');
INSERT INTO responsavel (nome_responsavel, cargo_responsavel) VALUES ('Daniel', 'Desenvolvedor Full Stack');