# we want to store information in key values pairs and each key should be unique
customer = {
    "name": "Daniel Baraka",
    "Age": 30,
    "is_verified": True
}
customer["name"] = "Ken"
print(customer["name"])
print(customer.get("birthdate", "Jan 1 1900"))
print(customer["name"])

# task
phone = input('Phone: ')
digits = {
    '1': 'One',
    '2': 'Two',
    '3': 'Three',
    '4': 'Four'
}
output = ""
for ch in phone:
    output += digits.get(ch, '!')
print(output)