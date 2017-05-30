import requests, json
from bs4 import BeautifulSoup

url = 'http://nonatero.telkom.co.id/det_ggn_open_langsung2.php?kw=02&wtl=12&dtl=null&cmdf=null&rk=null&loker_segmen=&prod=ALL&alpro=All&jenket=All&jenkel=ALL&jenggn=All&sel_lapul=ALL&sel_chann=ALL&sel_gam=ALL&sel_inetspeed=ALL&sel_urgen=ALL&slg=TOTAL&z=48'
login_data = {'entered_user' : '950040',
			  'entered_password' : 'Lovemom01', 
			  'login':'Login+%C2%BB',
			  'redirect_to':'wp-admin%2F'}

def flatten(seq,container=None):
    if container is None:
        container = []
    for s in seq:
        if hasattr(s,'__iter__'):
            flatten(s,container)
        else:
            container.append(s)
    return container

with requests.session() as s:
    s.post('http://nonatero.telkom.co.id/', login_data)
    datas = []
    param = 1
    while True:
        parameter = {'p': str(param)}
        r = s.post(url, parameter)
        soup = BeautifulSoup(r.text, 'html.parser')
        if len(soup.find_all('tr')) <= 4:
            break

        for tr in soup.find_all('tr')[4:]:
            temp = []
            for td in tr.find_all('td'):
                contents = list(td.stripped_strings)
                if contents:
                    temp.append(contents[0])
            datas.append(temp)

        param += 1

    tiket = []
    for data in datas :
        temp = []
        temp.append(data[6])
        temp.append(data[22])
        temp.append(data[24])
        tiket.append(temp)

    flattiket = flatten(tiket)
    telepon = flattiket.count('TELEPON')
    internet = flattiket.count('INTERNET')
    iptv =  flattiket.count('IPTV')

    telepon2 = 0
    internet2 = 0
    iptv2 = 0
    for data in tiket:
        if float(data[1]) > 2:
            if data[2] == 'TELEPON':
                telepon2 +=1
            elif data[2] == 'INTERNET':
                internet2 +=1
            elif data[2] == 'IPTV':
                iptv2 +=1

    dumper = {'telepon': telepon,
              'internet': internet,
              'iptv':iptv,
              'telepon2': telepon2,
              'internet2': internet2,
              'iptv2': iptv2
              }

    print json.dumps(dumper)