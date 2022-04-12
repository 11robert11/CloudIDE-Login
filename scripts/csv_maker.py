import csv

header = ['email', 'first name', 'last name' 'period', 'teacher', 'hash password']
data = ['test1234@stu.gusd.net', 'test', 'mctestinson' 4, 'poole', 'x']

x = 1
port = 8800

with open ('list.csv', 'w') as f:



	writer = csv.writer(f)

	writer.writerow(header)
	writer.writerow(data)

	for x in range(6):
		DataStart = ['user' + str(x) + '@stu.gusd.net', 'first' + str(x), 'last' + str(x),  6, 'poole', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8']
		x+=1
		port+=1

		writer.writerow(DataStart)
