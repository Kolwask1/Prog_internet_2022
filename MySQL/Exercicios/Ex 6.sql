select pedido_id as numero_pedido, 
sum(quantidade) as quantidade_vendida,
avg(valor) as media_preco_unitario,
count(pizza_id) as quantidade_itens from pedido_item 
group by pedido_id
order by 4 desc, 2 desc, 1  
limit 5

 


