TABLE companies
id INTEGER PRIMARY KEY,
name VARCHAR (30) NOT NULL,
country VARCHAR (30) NOT NULL

select distinct country
from companies 
order by country 
