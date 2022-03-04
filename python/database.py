""" 
python -m pip install mysql-connector-python
python -m pip install python-dotenv
 """
import mysql.connector
import os
from os.path import join, dirname
from dotenv import load_dotenv

dotenv_path = join(dirname(__file__), '.env')
load_dotenv(dotenv_path)

""" connectando ao banco de dados """
mydb = mysql.connector.connect(
  host= os.environ.get("DB_HOST"),
  user= os.environ.get("DB_USER"),
  password= os.environ.get("DB_PASSWORD"),
  database= os.environ.get("DATABASE")
)

print(mydb)

""" Consultando tabelas """
mycursor = mydb.cursor()
mycursor.execute("SHOW TABLES")
for x in mycursor:
    print(x)
