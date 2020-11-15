TABLE companies
id INTEGER PRIMARY KEY,
name VARCHAR (30) NOT NULL,
country VARCHAR (30) NOT NULL

o1:
select distinct country
from companies 
order by country 

o2:
select distinct country,name
from companies 
order by country
