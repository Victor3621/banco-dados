# Normalização banco dados

criar tabela 
```sql
CREATE TABLE cadastro_original(
    funcionario_id INTEGER PRIMARY KEY,
    nome TEXT,
    setor_id INTEGER,
    setor_nome TEXT,
    treinamentos TEXT
 );
 ```
 ```sql
 INSERT INTO cadastro_original VALUES
(1,'Victor',10,'Montagem','Seguranca;Ferramentas'), (2,'Miguel',20, 'Manutancao','Seguranca'), (3,'Lucas',10,'Montagem','Ferramentas')
 ```

 tabela tratada pela priveira vez 1fn 1° forma normal
 ```sql
 CREATE TABLE cadastro_1fn AS SELECT funcionario_id,nome,setor_id,setor_nome, string_to_table(treinamentos, ';') AS treinamento
FROM cadastro_original;
 ```

 coloca um id que liga o treinamento com o id do funcionario
 ```sql
 ALTER TABLE cadastro_1fn ADD PRIMARY KEY(funcionario_id,treinamento);
  ```

2fn criawr tabela funcionarios 
>DISTICT evita copiar linha iguais mais de uma vez
```sql
  CREATE TABLE funcionarios AS SELECT DISTINCT funcionario_id,nome,setor_id,setor_nome FROM cadastro_1fn;
```

```sql
 ALTER TABLE funcionarios ADD PRIMARY KEY(funcionario_id);
```

```sql
  CREATE TABLE participacoes AS SELECT funcionario_id,treinamento FROM cadastro_1fn
```

```sql
ALTER TABLE participacoes ADD PRIMARY KEY (funcionario_id,treinamento)
```

```sql
ALTER TABLE participacoes ADD FOREIGN KEY(funcionario_id) REFERENCES funcionarios(funcionario_id)
```
3fn
```sql
CREATE TABLE setores AS SELECT DISTINCT setor_id, setor_nome FROM funcionarios;
```

```sql
ALTER TABLE setores ADD PRIMARY KEY(setor_id);
```

```sql
ALTER TABLE funcionarios ADD FOREIGN KEY(setor_id) REFERENCES
setores(setor_id);
```

```sql
ALTER TABLE funcionarios ALTER COLUMN setor_id SET NOT NULL;
```

```sql
ALTER TABLE funcionarios DROP COLUMN setor_nome;
```