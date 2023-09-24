import sys 
import pandas


path = sys.argv[1]
df = pandas.read_excel(path)
for i in df.index:
    print("<li>%s, %s - %s</li>" % (
    	df["Apellido(s)"][i].strip().title(),
    	df["Nombre(s)"][i].strip().title(),
    	df["Institución de adscripción"][i]
    ))

