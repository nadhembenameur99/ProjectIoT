
from httplib2 import HTTPConnectionWithTimeout
import json
import random

Humidity = random.randrange(10, 40)
Temperature = random.randrange(10, 40)

# Sending the data to the server
headers = {"charset": "utf-8", "Content-Type": "application/json"}
conn = HTTPConnectionWithTimeout("localhost", 80)
sample = {"humidity": Humidity, "temperature": Temperature}
sampleJson = json.dumps(sample, ensure_ascii='False')

conn.request("POST", "/rpi/rpi.php", sampleJson, headers)
response = conn.getresponse()
print(response.read())
conn.close()
