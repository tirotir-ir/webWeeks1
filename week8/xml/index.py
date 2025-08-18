import xml.etree.ElementTree as ET

tree = ET.parse('address_book.xml')
root = tree.getroot()

for entry in root.findall('entry'):
    name = entry.find('name').text
    email = entry.find('email').text
    phone = entry.find('phone').text
    
    print(f"Name: {name}\nEmail: {email}\nPhone: {phone}\n")
