-- tables

-- Table: Diretoria
CREATE TABLE Diretoria (
    IdDiretoria integer NOT NULL PRIMARY KEY AUTOINCREMENT,
    Acesso varchar(6) NOT NULL
);

-- Table: Disciplinas
CREATE TABLE Disciplinas (
    CodDisc varchar(10) NOT NULL PRIMARY KEY,
    Disciplina varchar(100) NOT NULL
);

-- Table: Professores
CREATE TABLE Professores (
    IdProfessor integer NOT NULL PRIMARY KEY AUTOINCREMENT,
    Professor varchar(200) NOT NULL,
    Email varchar(256) NOT NULL
);

-- Table: Turmas
CREATE TABLE Turmas (
    Turma varchar(100) NOT NULL PRIMARY KEY,
    Ano integer NOT NULL,
    Semestre integer NOT NULL,
    IdProfessor integer NOT NULL,
    CodDisc varchar(10) NOT NULL,
    FOREIGN KEY (IdProfessor) REFERENCES Professores (IdProfessor),
    FOREIGN KEY (CodDisc) REFERENCES Disciplinas (CodDisc)
);

-- Table: Alunos
CREATE TABLE Alunos (
    IdAlunos integer NOT NULL PRIMARY KEY AUTOINCREMENT,
    Aluno varchar(200) NOT NULL,
    Turma varchar(100) NOT NULL,
    FOREIGN KEY (Turma) REFERENCES Turmas (Turma)
);

-- Table: Aulas
CREATE TABLE Aulas (
    IdAulas integer NOT NULL PRIMARY KEY AUTOINCREMENT,
    DataAula date NOT NULL,
    Conteudo varchar(250) NOT NULL,
    Turma varchar(100) NOT NULL,
    FOREIGN KEY (Turma) REFERENCES Turmas (Turma) ON DELETE CASCADE
);

-- Table: Presencas
CREATE TABLE Presencas (
    IdPresenca integer NOT NULL PRIMARY KEY,
    Presente varchar(1) NOT NULL,
    IdAlunos integer NOT NULL,
    IdAulas integer NOT NULL,
    FOREIGN KEY (IdAlunos) REFERENCES Alunos (IdAlunos) ON DELETE CASCADE,
    FOREIGN KEY (IdAulas) REFERENCES Aulas (IdAulas) ON DELETE CASCADE
);

-- End of file.