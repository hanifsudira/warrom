import urllib,urllib2
import datetime
import json
from bs4 import BeautifulSoup

now = datetime.datetime.now()
day = str(now.day)
month = str(now.month)
year = str(now.year)

init = '1'+'/'+month+'/'+year
today = day+'/'+month+'/'+year

url = 'http://mydashboard.telkom.co.id/ms2/report_progres_useetv8.php'
values = {'start_date':init,'end_date':today,'p_kawasan':'DIVRE 2'}
values = urllib.urlencode(values)
r = urllib2.Request(url, values)
r = urllib2.urlopen(r)
soup = BeautifulSoup(r.read(), 'html.parser')

datas = []
for row in soup.find_all('tr'):
    cols = row.find_all('td')
    cols = [ele.text.strip() for ele in cols]
    datas.append([ele for ele in cols if ele])

new_data = []
for i,data in enumerate(datas):
    if i>16 and i<=25:
        temp = ""
        for i in range(len(data)):
            temp+=str(data[i])+"|"
        new_data.append(temp)

return_data = {}
for i,data in enumerate(new_data):
	return_data[i] = str(data)

print json.dumps(return_data)