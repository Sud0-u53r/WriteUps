import threading

class X(threading.Thread):
    def __init__(self,ip):
        threading.Thread.__init__(self)
        #self.daemon = True
        self.ip = ip

    def run(self):
        while(1):
            print('[+] Trying to exploit '+ self.ip)
            self.exploit()
            print('[+] Exploiting Again. timeout 30 seconds!. 0xidentifier = ' + self.ip)
            time.sleep(30)

    def exploit(self):
        try:
           exploit()
        except:
            pass
List = [
	
]
threads = [X(ip) for ip in ips]

try:
    for thread in threads:
        thread.start()
except KeyboardInterrupt:
    exit()
