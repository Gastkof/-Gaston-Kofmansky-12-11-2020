TABLE fsia
   companyName VARCHAR (30) NOT NULL PRIMARY KEY
   marketCapitalization FLOAT NOT NULL

TABLE fsib
   companyName VARCHAR (30) NOT NULL PRIMARY KEY
   sharePrice FLOAT NOT NULL
   shareOutstanding  INTEGER NOT NULL
   
   
  select fa.companyName, fa.marketCapitalization
  from fsia fa join fb on fb.companyName=fb.companyName
  where marketCapitalization = (fb.sharePrice * fb.shareOutstanding)
  order by marketCapitalization desc
