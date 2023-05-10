import requests

url = "https://script.google.com/macros/s/AKfycbzDfhR466DzWzjTnD47n50HG7fBfdrM0JDbE9a2QRcbreFFFy7WTlU_KF5ui3lq-LK_/exec"

payload = {'PickDate': '234253',
'DropDate': '1241',
'LocationCode': '23525',
'State': '2352223',
'City': '235235',
'Fulladdress': '2352',
'Class': '23525',
'Type': '23525',
'payNowPrice': '235253',
'payLaterPrice': '5235',
'Link': '22352',
'formDataNameOrder': '["PickDate","DropDate","LocationCode","State","City","Address","Fulladdress","Class","Type","payNowPrice","payLaterPrice","Link"]',
'formGoogleSheetName': 'responses',
'formGoogleSendEmail': 'example@email.net'}
files=[

]
headers = {}

response = requests.request("POST", url, headers=headers, data=payload, files=files)

print(response.text)
