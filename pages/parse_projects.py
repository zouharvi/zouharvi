#!/usr/bin/env python3

raise Exception("projects.csv is now manually authored")

import bs4
import csv
import re

with open("pages/projects.html", "r") as f:
    raw = f.read()
parsed = bs4.BeautifulSoup(raw, features="lxml")

rows = parsed.find_all("tr")
data = []
for row in rows:
    link = row.find("a")
    title = link.text.strip()
    link_href = link.get("href")
    
    description = row.find("span").text.strip()
    description = re.sub(r"\s+", " ", description)

    data.append([title, description, link_href])

with open("pages/projects.csv", "w") as f:
    csv.writer(f, quoting=csv.QUOTE_ALL).writerows(data)