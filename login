import csv

header = ['uname', 'period', 'teacher', 'ip', 'docker id']
data = ['test', 4, 'poole', '10.1.10.198:8080', 'x']

x = 1
port = 8800

with open ('list.csv', 'w') as f:



	writer = csv.writer(f)

	writer.writerow(header)
	writer.writerow(data)

	for x in range(6):
		DataStart = ['user' + str(x), 6, 'poole', '10.1.13.48:'+str(port), 'x']
		x+=1
		port+=1

		writer.writerow(DataStart)
