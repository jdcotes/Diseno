import socket
import datetime
import MySQLdb
import time

IP = "172.31.16.250"
PORT = 9000
numero_mensaje = 1
latnew=0
longnew=0
minnew=0

sock = socket.socket(socket.AF_INET,socket.SOCK_DGRAM)
sock.bind((IP,PORT))

while True:

    data,addr=sock.recvfrom(1024)
    print(data)
    lon=len(data)
    print(lon)
    
    
