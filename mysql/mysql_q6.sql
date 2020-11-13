TABLE products
id INTEGER NOT NULL PRIMARY KEY,
name INTEGER NOT NULL,
price INTEGER NOT NULL

select fname,min(price)
from products
where price in (select min(price)
				from products)
group by fname
