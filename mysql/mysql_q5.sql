 TABLE menu
itemName VARCHAR (50) PRIMARY KEY NOT NULL,
category VARCHAR (50) NOT NULL
price DECIMAL (5.2)


update menu 
set price = price*1.1
where category in('Soups','Salads')
