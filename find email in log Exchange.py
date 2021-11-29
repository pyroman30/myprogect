import os
import re


dir = ("C:\\Users\\karachenkov\\Desktop\\SmtpSend") # Задаем директорию



a = input("Введите адрес для поиска: ")
res = re.search(r'^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$',a) # Задаем регулярное выражение для поиска

for path, dirs, files in os.walk(dir): # Метод прочесывает все пути, папки и файлы
    for filename in files:
        with open(path + "/" + filename,'r',encoding='UTF8') as file:
            for line in file:
                part_string = line.strip() #Удалить начальные и конечные символы
                w = part_string.split(",") # Делим строку с помощью указанного символа
                if a in line:
                    print(filename, w[4:6], a)









