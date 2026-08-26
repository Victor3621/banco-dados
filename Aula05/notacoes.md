## Aula 05

Para filtrar colunas utilizamos o comando
```sql
SELECT nome, preco, FROM produtos;
```

```sql
SELECT * FROM produtos WHERE  estoque < 10;
```
para ordenar dados

```sql
SELECT nome,preco FROM produtos ORDER BY  preco DESC;
```

---
**UPDATE**
update ou delete sem `Where` afeta todas as linhas

Fluxo seguro (sempre):
```mermaid
flowchart LR
A["SELECT com o Where"] --> B{"Retornou a linha certa?"}
B --NÂO-->A
B --SIm--> C["update ou delete com o mesmo where"]
C-->D["Select para conferir"] 
```

Para update:
```sql
UPDATE produtos SET preco=150 WHERE nome='Iphone 17';
UPDATE produtos
SET estoque = estoque -3
WHERE id = 1;
```
---
para deletar 
```sql
DELETE FROM produtos WHERE nome='Iphone 17';
```
### atividade
atividade ![alt text](image.png)

selecionando dados especificos
![alt text](image-1.png)

trocando notas ![alt text](image-2.png)
![alt text](image-3.png)

deletando filmes ![alt text](image-4.png)

![alt text](image-5.png)