import csv

header = ['uname', 'period', 'teacher', 'ip', 'docker id']
data = ['test', 4, 'poole', '10.1.10.198:8080', 'x']


with open ('list.csv', 'w') as f:

	writer = csv.writer(f)

	writer.writerow(header)
	writer.writerow(data)

