from itertools import combinations

ridho_ikhram = [5,6,7,8,9] 

kombinasi = combinations(ridho_ikhram, r=2) 

for index, data in enumerate(list(kombinasi), 1):
	print(f'kombinasi ke: {index}. {data}')
