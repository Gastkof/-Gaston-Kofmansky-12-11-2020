TABLE rectangles
id INTEGER NOT NULL PRIMARY KEY,
width INTEGER NOT NULL,
height INTEGER NOT NULL
   
   
  Select width*height as area  ,count(*) as 'numberOfrectangles'
   from  rectangles 
   group by  width*height
