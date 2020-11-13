TABLE employees
   id INTEGER NOT NULL PRIMARY KEY
   mgrId INTEGER REFERENCES employees (id)
   name VARCHAR (30) NOT NULL


SELECT e.name, m.name 
FROM employees e FULL OUTER JOIN employees m on e.id =m.mgrId
