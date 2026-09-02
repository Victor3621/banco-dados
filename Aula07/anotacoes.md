```sql
SELECT COUNT(*) AS total_produtos FROM produtos;
```
mostra o total como total_produtos

```sql
SELECT COUNT(*) AS total_produtos FROM produtos WHERE estoque <10;
```
mostra QUANTOS produtos tem estoque menor de 10


```sql
SELECT MAX(preco) AS produto_mais_caro,
MIN(preco) AS produto_mais_barato
FROM produtos;
```
mostra o mais caro e o mais barato

```sql
SELECT ROUND(AVG(preco),2) AS preco_medio
FROM produtos;
```
pega a média do preço


```sql
SELECT SUM(estoque) AS total_produtos FROM produtos;
```
calcula quantos produtos tem no estoque


```sql
SELECT COUNT(*) AS total_de_produtos,
MIN(preco) AS menor_valor,
MAX(preco) AS maior_valor,
ROUND(AVG(preco),2) AS media_valores,
SUM(estoque) AS total_peças
From produtos;
```
mostra tudo

```sql
SELECT nome, preco, estoque, preco * estoque AS total_estoque FROM produtos ORDER BY total_estoque DESC;
```
mostra o faturamento maximo que tudo pode te dar

```sql
```